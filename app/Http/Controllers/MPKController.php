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

        $pagoContado = $nroPaneles * 590;
        
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
                'consumo_promedio_mensual' => $consumoPromedioMensual,
                'consumo_promedio_anual' => $consumoPromedioAnual,
                'request_id' => uniqid('MPK-'),
            ],
            'tipo_calculo' => $tipoCalculo
        ];

        return response()->json($recommendedPlan);

    }
}
