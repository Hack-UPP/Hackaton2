@extends('layouts.app')
@section('content')
<div class="row hidden-sm hidden-xs"  style="background-color: #333;margin-top: -20pt">    
    <div class="col-md-8 col-md-offset-1">
        <p class="h1" style="font-size: 40pt;padding-top: 30pt; padding-left: 10pt;color:#fff">
            Plataforma educativa de programación
        </p>
    </div>
    <div class="col-md-2">
        <img width="150" class="center-block" class="center-block" src="{{asset('img/logo.png')}}" style="margin-top:30pt">
    </div>
</div>
<div class="row" style="margin-top: 20pt">
    <div class="container">         
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">
                        Educación
                    </div>
                </div>
                <div class="panel-body">
                    <img class="center-block" src="{{url('img/proyectos/1.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">
                        Salud
                    </div>                        
                </div>
                <div class="panel-body">
                    <img class="center-block" src="{{url('img/proyectos/2.png')}}"/>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">
                        Transporte
                    </div>                        
                </div>
                <div class="panel-body">
                    <img class="center-block" src="{{url('img/proyectos/3.png')}}"/>
                </div>
            </div>
        </div>  
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title" style="text-align: center">Seguridad</div>                        
                </div>
                <div class="panel-body">
                    <img class="center-block" src="{{url('img/proyectos/1.png')}}"/>
                </div>
            </div>
        </div>  
    </div>
</div>

@endsection