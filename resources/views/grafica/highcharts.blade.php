@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Graficando datos de prueba</div>

                <div class="card-body">
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<script src=//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js charset=utf-8></script>
{!! $chart->script() !!}
@endsection