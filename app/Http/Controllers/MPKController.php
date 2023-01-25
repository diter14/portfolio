<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPKController extends Controller
{
    const COSTO_ELECTRICIDAD_MERCADO = 0.18;
    const COSTES_EXTRAS = 32;
    const TASA_INFLACION = 0.03; // 3%
    const FACTOR_PRODUCCION = 1;
    const INTERES_FINANCIACION = 6;
    const PORCENTAJE_DE_FINANCIACION = 100;
    const PLAZOS_FINANCIACION = 96;
    const POTENCIA_PANEL_UNITARIO = 660;
    const DEGRADACION_PANEL = 0;
    const HORAS_PARQUE = 1400;
    const COSTO_PANEL_UNITARIO = 901;
    const VIDA_UTIL_PANEL_UNITARIO = 30; // VIDA_UTIL_PLANTA
    const PRODUCCION_ENERGIA_ANUAL = 877.8;
    const EURO_KWH_30_ANIOS = 0.03;
    const COSTO_ENERGIA_MEDIO_ESPANA_ULTIMOS_5_ANIOS = 0.1;
    const FACTOR_POTENCIA_PANEL = 1000;
    //
    const CAPACIDAD_PRODUCTIVA_PANEL = 924;

    public function getCalculationConstants(Request $request)
    {
        $token = $request->header('ZCFKEY');
        
        if (!$token) {
            return response()->json([
                'success' => false,
                'msg' => '',
                'error' => 'Missing Authorization'
            ]);
        }
        $constants = [
            'success' => true,
            'data' => [
                'COSTE_ELECTRICIDAD_MERCADO' => 0.18, // COSTO_ELECTRICIDAD_MERCADO
                'COSTES_EXTRAS' => 32, // COSTES_EXTRAS
                'INFLACION' => 3, // TASA_INFLACION
                'FACTOR_PRODUCCION' => 1, // FACTOR_PRODUCCION
                'INTERES_FINANCIACION' => 6, // INTERES_FINANCIACION
                'PORCENTAJE_DE_FINANCIACION' => 100, // PORCENTAJE_DE_FINANCIACION
                'PLAZOS_FINANCIACION' => 96, // PLAZOS_FINANCIACION
                'POTENCIA_PANEL' => 660, // POTENCIA_PANEL_UNITARIO
                'DEGRADACION_PANEL' => 0, // DEGRADACION_PANEL
                'HORAS_PARQUE' => 1400, // HORAS_PARQUE
                'COSTE_PANEL' => 901, // COSTO_PANEL_UNITARIO
                'VIDA_UTIL_PLANTA' => 30, // VIDA_UTIL_PANEL_UNITARIO
                'PRODUCCION_ENERGIA_ANUAL' => 877.8, // PRODUCCION_ENERGIA_ANUAL
                'EURO_KWH_30_ANIOS' => 0.03, // EURO_KWH_30_ANIOS
                'COSTO_ENERGIA_MEDIO_ESPANA_ULTIMOS_5_ANIOS' => 0.1 // COSTO_ENERGIA_MEDIO_ESPANA_ULTIMOS_5_ANIOS
            ],
            'msg' => 'OK'
        ];
        return response()->json($constants);
    }

    public function getRecommendedPlan(Request $request)
    {
        $token = $request->header('ZCFKEY');
        
        if (!$token) {
            return response()->json([
                'success' => false,
                'msg' => '',
                'error' => 'Missing Authorization'
            ]);
        }
        $tipoCalculo = $request->get('tipo_calculo') ?? '';
        $gastoPromedioMensual = $request->get('gasto_promedio_mensual') ?? 0;
        $nroPersonasPorHogar = $request->get('personas_x_hogar') ?? '1';
        $artefactosUtilizados = $request->get('artefactos_utilizados') ?? ['CALEFACCION_ELECTRICA'];
        $consumoPromedioAnual = $request->get('consumo_promedio_anual') ?? rand(3000,5000);
        $consumoPromedioMensual = $request->get('consumo_promedio_mensual') ?? ($consumoPromedioAnual/12);
        $nroPaneles = $request->get('numero_paneles') ?? rand(4,6);

        $pagoContado = $nroPaneles * self::COSTO_PANEL_UNITARIO;
        $ahorroAnual = (
            self::COSTO_ELECTRICIDAD_MERCADO * 
            self::HORAS_PARQUE * 
            (self::POTENCIA_PANEL_UNITARIO / self::FACTOR_POTENCIA_PANEL) * 
            $nroPaneles *
            ((1 - self::DEGRADACION_PANEL) / self::FACTOR_PRODUCCION)
        );
        $ahorroMensual = $ahorroAnual / 12;
        $ahorroVidaUtil = $ahorroAnual * (pow((1 + self::TASA_INFLACION), self::VIDA_UTIL_PANEL_UNITARIO) - 1) / self::TASA_INFLACION;
        $produccionEnergiaAnual = $nroPaneles * self::CAPACIDAD_PRODUCTIVA_PANEL;
        $recuperacionCostoInicial = ($pagoContado / $ahorroAnual);
        
        $recommendedPlan = [
            'success' => true,
            'data' => [
                'plan_recomendado'=> [
                    'numero_paneles' => (int) $nroPaneles, // NÚNúmeroMERO
                    'valido_hasta' => date('Y-m-d', strtotime('+1 month', strtotime(date('Y-m-d')))),
                    'produccion_cada_panel' => self::CAPACIDAD_PRODUCTIVA_PANEL, //kWh
                    'produccion_energia_anual' => (float) number_format($produccionEnergiaAnual, 2, '.', ''),
                    'ahorro_mensual' => (float) number_format($ahorroMensual, 2, '.', ''), // EUROS 
                    'ahorro_anual' => (float) number_format($ahorroAnual, 2, '.', ''), // EUROS 
                    'ahorro_vida_util' => (float) number_format($ahorroVidaUtil, 2, '.', ''), // EUROS (30 AÑOS)
                    'pago_contado' => (float) number_format($pagoContado, 2, '.', ''), // EUROS (es igual a coste_contado?)
                    'recuperacion_coste_inicial' => (float) number_format($recuperacionCostoInicial, 1, '.', ''), //AÑOS
                    'pago_financiado' => [
                        'pago_mensual' => 31, // EUROS
                        'pago_total' => 4500, // EUROS
                        'numero_cuotas' => 12, // Número
                        'descuento_mensual' => 50, // mensual
                        'gasto_antes' => 120, // mensual
                        'gasto_despues' => 70, // mensual
                        'ahorro' => 50 // mensual
                    ],
                ],
                'request_id' => uniqid('MPK-'),
            ],
            'msg' => 'OK'
        ];

        return response()->json($recommendedPlan);

    }

    public function getConsumoByCUPS(Request $request)
    {
        $token = $request->header('ZCFKEY');
        
        if (!$token) {
            return response()->json([
                'success' => false,
                'msg' => '',
                'error' => 'Missing Authorization'
            ]);
        }
        $cupsNumber = $request->get('cups') ?? 'ES0021000011727070XB';
        
        $consumoByCUPS = [
            'success' => true,
            'data' => [
                "cups" => $cupsNumber,
                "codigoEmpresaEmisora" => "21",
                "emisora" => "IBERDROLA DISTRIBUCIÓN ELÉCTRICA, S.A.",
                "codigoDistribuidora" => "21",
                "distribuidora" => "IBERDROLA DISTRIBUCIÓN ELÉCTRICA, S.A.",
                "poblacion" => "ALOVERA",
                "codigoPoblacion" => "19024",
                "codigoProvincia" => "19",
                "provincia" => "Guadalajara",
                "codigoPostal" => "19208",
                "fechaAltaSuministro" => "2003-10-22T00:00:00+02:00",
                "codigoTarifa" => "018",
                "tarifaEnVigor" => "2.0TD",
                "tension" => "1X230",
                "codigoTension" => "02",
                "potenciaMaximaBie" => 5000,
                "potenciaMaximaApm" => 0,
                "clasificacion" => "Punto de medida tipo 5",
                "codigoClasificacion" => "05",
                "disponibilidadIcp" => true,
                "tipoPerfilConsumo" => "P2.0TD",
                "valorDerechosExtension" => 4500,
                "valorDerechosAcceso" => 4500,
                "esViviendaHabitual" => "",
                "codigoPropiedadEquipoMedida" => "1",
                "propiedadEquipoMedida" => "Distribuidor",
                "codigoPropiedadIcp" => "1",
                "propiedadIcp" => "Distribuidor",
                "potenciaContratada1" => 4.5,
                "potenciaContratada2" => 4.5,
                "potenciaContratada3" => 0,
                "potenciaContratada4" => 0,
                "potenciaContratada5" => 0,
                "potenciaContratada6" => 0,
                "codigoTeleGestion" => "01",
                "tipoTelegestion" => "Telegestión operativa con Curva de Carga Horaria",
                "fasesEquipoMedida" => "M",
                "codigoAutoConsumo" => "00",
                "nombreAutoConsumo" => "No existe autoconsumo",
                "codigoTipoContrato" => "",
                "tipoContrato" => "",
                "codigoPeriodicidadFacturacion" => "",
                "periodicidadFacturacion" => "",
                "codigoBIE" => "",
                "fechaEmisionBIE" => null,
                "fechaCaducidadBIE" => null,
                "codigoAPM" => null,
                "fechaEmisionAPM" => null,
                "fechaCaducidadAPM" => null,
                "relacionTransformacionIntensidad" => "",
                "codigoCNAE" => "9820",
                "cnae" => "Actividades de los hogares como productores de servicios para uso propio",
                "codigoModoControlPotencia" => "3",
                "modoControlPotencia" => "Control de potencia en contador de telegestión",
                "potenciaCGPW" => "",
                "codigoDHEquipoDeMedida" => "",
                "dhEquipoDeMedida" => "",
                "codigoAccesibilidadContador" => "",
                "accesibilidadContador" => "",
                "contratable" => true,
                "motivoEstadoNoContratable" => "",
                "codigoTensionMedida" => "",
                "tensionMedida" => "",
                "codigoClaseExpediente" => "",
                "codigoMotivoExpediente" => "",
                "motivoExpediente" => "",
                "codigoTipoSuministroCIE" => "",
                "suministroCIE" => "",
                "aplicaBonoSocial" => false,
                "fechaUltimoMovimientoContrato" => "2021-05-31T00:00:00+02:00",
                "fechaUltimoCambioComercializador" => "2018-05-26T00:00:00+02:00",
                "fechaLimiteDerechosReconocidos" => "9999-01-01T00:00:00+01:00",
                "fechaUltimaLectura" => "2022-08-07T00:00:00+02:00",
                "importeDepositoGarantia" => 0,
                "fechaInicioCon" => "2020-11-09T00:00:00+01:00",
                "fechaFinCon" => "2021-11-08T00:00:00+01:00",
                "nDias" => 365,
                "ratioDias" => 1,
                "consumoActivaTotalP1" => 1153290,
                "consumoActivaTotalP2" => 670040,
                "consumoActivaTotalP3" => 1365670,
                "consumoActivaTotalP4" => 0,
                "consumoActivaTotalP5" => 0,
                "consumoActivaTotalP6" => 0,
                "consumoActivaAnualP1" => 1153290,
                "consumoActivaAnualP2" => 670040,
                "consumoActivaAnualP3" => 1365670,
                "consumoActivaAnualP4" => 0,
                "consumoActivaAnualP5" => 0,
                "consumoActivaAnualP6" => 0,
                "consumoTotal" => 3189000,
                "consumoAnual" => 3189000,
                "direccionCompletaPs" => null
            ],
            'msg' => 'OK'
        ];
        return response()->json($consumoByCUPS);
    }
}
