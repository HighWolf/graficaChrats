<?php

namespace App\Http\Controllers;

use App\Charts\SampleChart;
use Illuminate\Http\Request;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class HighChartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $chart = new SampleChart();

        for ($i=0; $i < rand(5, 20); $i++) { 
            $chart->dataset( 'Registro '.$i, 'bar', [rand( 0, 100 )] );
        }

        return view('grafica.highcharts', ['chart' => $chart]);
    }
}
