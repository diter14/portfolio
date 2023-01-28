<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MPKController extends Controller
{
    const COSTO_ELECTRICIDAD_MERCADO = 0.16;
    const COSTES_EXTRAS = 32;
    const TASA_INFLACION = 3; // 3%
    const FACTOR_PRODUCCION = 1;
    const INTERES_FINANCIACION = 6;
    const PORCENTAJE_DE_FINANCIACION = 100;
    const PLAZOS_FINANCIACION = 96;
    const POTENCIA_PANEL_UNITARIO = 660;
    const DEGRADACION_PANEL = 5;
    const HORAS_PARQUE = 1400;
    const COSTO_PANEL_UNITARIO = 901;
    const VIDA_UTIL_PANEL_UNITARIO = 30; // VIDA_UTIL_PLANTA
    const PRODUCCION_ENERGIA_ANUAL = 877.8;
    const EURO_KWH_30_ANIOS = 0.03;
    const COSTO_ENERGIA_MEDIO_ESPANA_ULTIMOS_5_ANIOS = 0.1;
    const FACTOR_POTENCIA_PANEL = 1000;
    const CONSUMO_PROMEDIO_POR_FAMILIA = [
        [
            'habitantes' => '1',
            'consumo_promedio_anual' => 2200
        ],
        [
            'habitantes' => '2',
            'consumo_promedio_anual' => 2450
        ],
        [
            'habitantes' => '3',
            'consumo_promedio_anual' => 2700
        ],
        [
            'habitantes' => '4',
            'consumo_promedio_anual' => 3000
        ],
        [
            'habitantes' => '5',
            'consumo_promedio_anual' => 3200
        ],
    ];
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
                "COSTE_ELECTRICIDAD_MERCADO" => 0.17,
                "COSTE_PANEL" => 901,
                "COSTES_EXTRAS" => 32,
                "COSTO_ENERGIA_MEDIO_ESPANA_ULTIMOS_5_ANIOS" => 0.1,
                "DEGRADACION_PANEL" => 5,
                "EURO_KWH_30_ANIOS" => 0.03,
                "FACTOR_POTENCIA_PANEL" => 1000,
                "FACTOR_PRODUCCION" => 1,
                "HORAS_PARQUE" => 1400,
                "INTERES_FINANCIACION" => 6,
                "PLAZOS_FINANCIACION" => 96,
                "PORCENTAJE_DE_FINANCIACION" => 100,
                "POTENCIA_PANEL" => 660,
                "PRODUCCION_ENERGIA_ANUAL" => 877.8,
                "TASA_INFLACION" => 3,
                "VIDA_UTIL_PLANTA" => 30,
                "CONSUMO_PROMEDIO_POR_FAMILIA" => [
                    [
                        'habitantes' => '1',
                        'consumo_promedio_anual' => 2200
                    ],
                    [
                        'habitantes' => '2',
                        'consumo_promedio_anual' => 2450
                    ],
                    [
                        'habitantes' => '3',
                        'consumo_promedio_anual' => 2700
                    ],
                    [
                        'habitantes' => '4',
                        'consumo_promedio_anual' => 3000
                    ],
                    [
                        'habitantes' => '5',
                        'consumo_promedio_anual' => 3200
                    ],
                ],
                "HIDRO_CONSTANTS" => [
                    "POTENCIA_HIDRO" => 100,
                    "DEGRADACION_HIDRO" => 0,
                    "HORAS_EQUIVALENTES_HIDRO" => 2800,
                    "COSTE_HIDRO_MINI" => 355,
                    "VIDA_UTIL_PLANTA" => 30,
                    "PRODUCCION_ENERGIA_ANUAL" => 280,
                    "EURO_KWH_30_ANIOS" => 0.0423
                ],
                "MIX_CONSTANTS" => [
                    "POTENCIA_PICO_MIX" => 760,
                    "PRODUCCION_ANUAL_UD_MIX" => 1157.8,
                    "COSTE_MIX_UNITARIO" => 1256,
                    "ENERGIA_ENTREGADA_30_ANIOS" => 34734,
                    "EURO_KWH_30_ANIOS" => 0.0362
                ]
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
        $gastoPromedioMensual = 0;
        $gastoPromedioAnual = 0;
        $consumoPromedioMensual = 0;
        //
        $tipoCalculo = $request->get('tipo_calculo') ?? 'Simulado';
        //
        if ($tipoCalculo == 'Aproximado') {
            $gastoPromedioMensual = $request->get('gasto_promedio_mensual') ?? 120;
            $consumoPromedioMensual = (float) number_format(
                ($gastoPromedioMensual / self::COSTO_ELECTRICIDAD_MERCADO) * ( 1 - (self::COSTES_EXTRAS/100) ),
            2, '.', '');
            // dump($consumoPromedioMensual);
            $consumoPromedioAnual = (float) number_format($consumoPromedioMensual*12, 2, '.', '');
        }
        
        if ($tipoCalculo == 'Preciso') {
            $consumoPromedioAnual = $request->get('consumo_promedio_anual') ?? 4200; // 476 * 12
            $consumoPromedioMensual = (float) number_format($consumoPromedioAnual/12, 2, '.', '');
            //
            $gastoPromedioMensual = (float) number_format((
                $consumoPromedioMensual *
                (self::COSTO_ELECTRICIDAD_MERCADO / (1 - SELF::COSTES_EXTRAS/100))
            ), 2, '.', '');
            $gastoPromedioAnual = (float) number_format($gastoPromedioMensual*12, 2, '.', '');
            // dump($gastoPromedioMensual);
        }

        if ($tipoCalculo == 'Simulado') {
            $numeroPersonas = $request->get('personas_x_hogar') ?? '5';

            $consumoPromedioPorFamilia = collect(self::CONSUMO_PROMEDIO_POR_FAMILIA)->where('habitantes',$numeroPersonas)->first(); 
            $consumoPromedioPorFamilia = $consumoPromedioPorFamilia['consumo_promedio_anual'] ?? 0;
            // dump('consumoPromedioPorFamilia', $consumoPromedioPorFamilia);
            //
            $artefactosUtilizados = $request->get('artefactos_utilizados') ?? ['CALEFACCION_ELECTRICA','AIRE_ACONDICIONADO','CALDERA_ELECTRICA','COCHE_ELECTRICO',];
            //
            $consumoPorCalefaccion = in_array('CALEFACCION_ELECTRICA', $artefactosUtilizados) ? ((2 + $numeroPersonas*0.2) * 5 * 150) : 0;
            $consumoPorAireAcond = in_array('AIRE_ACONDICIONADO', $artefactosUtilizados) ? ((1.5 + $numeroPersonas*0.1) * 4 * 90) : 0;
            $consumoPorCaldera = in_array('CALDERA_ELECTRICA', $artefactosUtilizados) ? ((2 + $numeroPersonas*0.2) * (0.5*$numeroPersonas) * 365) : 0;
            $consumoPorCocheElec = in_array('COCHE_ELECTRICO', $artefactosUtilizados) ? ( ((150* (20/100)) + (10 * ($numeroPersonas * (20/100)))) * 52) : 0;
            //
            $consumoSimulado = [
                'MIEMBROS_POR_FAMILIA' => $consumoPromedioPorFamilia,
                'CALEFACCION_ELECTRICA' => $consumoPorCalefaccion,
                'AIRE_ACONDICIONADO' => $consumoPorAireAcond,
                'CALDERA_ELECTRICA' => $consumoPorCaldera,
                'COCHE_ELECTRICO' => $consumoPorCocheElec,
            ];
            // dump('consumoSimulado', $consumoSimulado);
            // dump(array_sum(array_values($consumoSimulado))/12);
            $consumoPromedioMensual = (float) number_format(array_sum(array_values($consumoSimulado))/12, 2, '.', '');
            // dump($consumoPromedioMensual);
            $consumoPromedioAnual = (float) number_format($consumoPromedioMensual*12, 2, '.', '');
            
            $gastoPromedioMensual = (float) number_format((
                $consumoPromedioMensual *
                (self::COSTO_ELECTRICIDAD_MERCADO / (1 - self::COSTES_EXTRAS/100))
            ), 2, '.', '');
            // dump($gastoPromedioMensual);
            $gastoPromedioAnual = (float) number_format($gastoPromedioMensual*12, 2, '.', '');
        }
        
        $potenciaRemotaRecomendada = (float) number_format(
            ($consumoPromedioMensual* (12 / self::HORAS_PARQUE) * self::FACTOR_PRODUCCION * (1 + self::DEGRADACION_PANEL/100))
        , 2, '.', '');
        // dump($potenciaRemotaRecomendada);
        //
        $nroPanelesRecomendados = ceil($potenciaRemotaRecomendada * (self::FACTOR_POTENCIA_PANEL/self::POTENCIA_PANEL_UNITARIO));
        // dump($nroPanelesRecomendados);
        
        $produccionCadaPanel = (float) number_format($nroPanelesRecomendados / self::PRODUCCION_ENERGIA_ANUAL, 2, '.', '');
        //
        $pagoContado = $nroPanelesRecomendados * self::COSTO_PANEL_UNITARIO;
        // dump($pagoContado);
        $ahorroAnual = (float) number_format(
            self::COSTO_ELECTRICIDAD_MERCADO * 
            self::HORAS_PARQUE * 
            (self::POTENCIA_PANEL_UNITARIO / self::FACTOR_POTENCIA_PANEL) * 
            $nroPanelesRecomendados *
            ((1 - self::DEGRADACION_PANEL/100) / self::FACTOR_PRODUCCION),
        2, '.', '');
        // dump($ahorroAnual);
        $ahorroMensual = (float) number_format($ahorroAnual / 12, 2, '.', '');
        // dump($ahorroMensual);
        $ahorroVidaUtil30Anios = (float) number_format(
            $ahorroAnual * (pow((1 + (self::TASA_INFLACION/100)), self::VIDA_UTIL_PANEL_UNITARIO) - 1) / (self::TASA_INFLACION/100)
        , 2, '.', '');
        // dump($ahorroVidaUtil30Anios);
        $recuperacionCostoInicial = (float) number_format($pagoContado / $ahorroAnual, 1, '.', '');
        // dump($recuperacionCostoInicial);
        $cuotaPagoFinanciado = (float) number_format(
            $pagoContado * (self::PORCENTAJE_DE_FINANCIACION/100) * ((1 + (self::INTERES_FINANCIACION/100)) / self::PLAZOS_FINANCIACION)
        , 2, '.', '');
        // dump($cuotaPagoFinanciado);
        $pagoMensualFinaciado = (float) number_format($gastoPromedioMensual - $ahorroMensual + $cuotaPagoFinanciado, 2, '.', '');
        // dump($pagoMensualFinaciado);
        $recommendedPlan = [
            'success' => true,
            'data' => [
                'plan_recomendado'=> [
                    'ahorro_anual' => $ahorroAnual, // EUROS 
                    'ahorro_mensual' => $ahorroMensual, // EUROS 
                    'ahorro_vida_util' => $ahorroVidaUtil30Anios, // EUROS (30 AÑOS)
                    'consumo_promedio_anual' =>  $consumoPromedioAnual, // kWh
                    'consumo_promedio_mensual' =>  $consumoPromedioMensual, // kWh
                    'gasto_promedio_mensual' =>  $gastoPromedioMensual, // kWh
                    'gasto_promedio_anual' =>  $gastoPromedioAnual, // kWh
                    'numero_paneles' => (int) $nroPanelesRecomendados, // Número
                    'pago_contado' => $pagoContado, // EUROS
                    'pago_financiado' => [
                        'tasa_finaciacion' => SELF::INTERES_FINANCIACION/100, // (Porcentaje) - Interés de financiación
                        'pago_mensual_finaciado' => $pagoMensualFinaciado, // EUROS - igual al "gasto después" es el pago mensual total a pagar
                        'cuota_pago_financiado' => $cuotaPagoFinanciado, // EUROS - es la cuota mensual
                        // 'pago_total_finaciado' => $pagoMensualFinaciado, // EUROS - es el pago total a pagar si es financiado
                        'numero_cuotas' => self::PLAZOS_FINANCIACION, // Número - constante
                        'gasto_antes' => $gastoPromedioMensual, // mensual - gasto_promedio_mensual en la factura
                        'ahorro' => $ahorroMensual // mensual - ahorro_mensual (ahorro_anual/12)
                    ],
                    'produccion_cada_panel' => $produccionCadaPanel, //kWh
                    'produccion_energia_anual' => self::PRODUCCION_ENERGIA_ANUAL,
                    'recuperacion_coste_inicial' => $recuperacionCostoInicial, //AÑOS
                    'valido_hasta' => date('Y-m-d', strtotime('+1 month', strtotime(date('Y-m-d')))),
                    'calculos_internos' => [
                        'gasto_promedio_mensual' =>  $gastoPromedioMensual, // kWh
                        'consumo_promedio_mensual' =>  $consumoPromedioMensual, // kWh
                        'potencia_recomendada' =>  $potenciaRemotaRecomendada, // kWh
                    ]
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
                "consumoTotal" => 6720,
                // "consumoAnual" => 3189000,
                "consumoAnual" => 6720,
                "direccionCompletaPs" => null
            ],
            'msg' => 'OK'
        ];
        return response()->json($consumoByCUPS);
    }
}
