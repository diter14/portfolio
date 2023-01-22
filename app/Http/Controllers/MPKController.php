<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPKController extends Controller
{
    public function getRecommendedPlan(Request $request)
    {
        $tipoCalculo = $request->get('tipo_calculo') ?? '';
        $gastoPromedioMensual = $request->get('gasto_promedio_mensual') ?? 0;
        $nroPersonasPorHogar = $request->get('personas_x_hogar') ?? '1';
        $artefactosUtilizados = $request->get('artefactos_utilizados') ?? ['CALEFACCION_ELECTRICA'];
        $consumoPromedioAnual = $request->get('consumo_promedio_anual') ?? rand(3000,5000);
        $consumoPromedioMensual = $request->get('consumo_promedio_mensual') ?? ($consumoPromedioAnual/12);
        $nroPaneles = $request->get('numero_paneles') ?? rand(2,9);

        $pagoContado = $nroPaneles * 901;
        
        $recommendedPlan = [
            'success' => true,
            'data' => [
                'plan_recomendado'=> [
                    'numero_paneles' => (int) $nroPaneles, // NÚNúmeroMERO
                    'valido_hasta' => date('Y-m-d', strtotime('+1 month', strtotime(date('Y-m-d')))),
                    'produccion_mensual' => 3.6, // kWh (Kilo Wats)
                    'ahorro_mensual' => 44, // EUROS 
                    'ahorro_anual' => 529, // EUROS 
                    'ahorro_vida_util' => 15.876, // EUROS (30 AÑOS)
                    'pago_contado' => $pagoContado, // EUROS (es igual a coste_contado?)
                    'recuperacion_coste_inicial' => 4, //AÑOS
                    'pago_financiado' => [
                        'pago_mensual' => 31, // EUROS
                        'pago_total' => 4500, // EUROS
                        'numero_cuotas' => 12, // Número
                        'descuento_mensual' => 50, // mensual
                        'gasto_antes' => 120, // mensual
                        'gasto_despues' => 70, // mensual
                        'ahorro' => 50 // mensual
                    ],
                    'produccion_cada_panel' => 50, //kWh
                    'capacidad_productiva_cada_panel' => 5,
                    'produccion_energia_anual' => 5000
                ],
                'gasto_promedio_mensual' => $gastoPromedioMensual,
                'personas_x_hogar' => $nroPersonasPorHogar,
                'artefactos_utilizados' => $artefactosUtilizados,
                'consumo_promedio_mensual' => (float) number_format($consumoPromedioMensual, 2, '.', ''),
                'consumo_promedio_anual' => $consumoPromedioAnual,
                'request_id' => uniqid('MPK-'),
            ],
            'tipo_calculo' => $tipoCalculo
        ];

        return response()->json($recommendedPlan);

    }

    public function getConsumoByCUPS(Request $request)
    {
        $token = $request->bearerToken();
        
        if (!$token) {
            return response()->json([
                'success' => false,
                'error' => 'Missing Authorization Bearer Token'
            ]);
        }
        $cupsNumber = $request->get('CUPS') ?? 'ES0021000011727070XB';
        $consumoByCUPS = [
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
        ];
        return response()->json($consumoByCUPS);
    }
}
