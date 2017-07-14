@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Registrar</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        @php
                        $tipo = 2;
                        if(isset($_GET['tipo'])){
                            $tipo = intval($_GET['tipo']);
                        }
                        @endphp
                        @if($tipo === 2)
                            @include('auth.estudiante')
                            @include('auth.expertos_estudiantes')
                        @elseif($tipo === 4)
                            @include('auth.expertos_estudiantes')
                        @elseif($tipo === 3)
                            @include('auth.empresa')
                        @endif
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                            <label for="telefono" class="col-md-4 control-label">Telefono</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control" name="telefono" value="{{ old('telefono') }}" required autofocus>

                                @if ($errors->has('telefono'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>                        

                        <div class="form-group{{ $errors->has('telefono2') ? ' has-error' : '' }}">
                            <label for="telefono2" class="col-md-4 control-label">Telefono 2 (opcional)</label>

                            <div class="col-md-6">
                                <input id="telefono2" type="tel" class="form-control" name="telefono2" value="{{ old('telefono2') }}" required autofocus>

                                @if ($errors->has('telefono2'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('telefono2') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label for="direccion" class="col-md-4 control-label">Dirección</label>

                            <div class="col-md-6">
                                <textarea id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required autofocus></textarea>

                                @if ($errors->has('direccion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Correo</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('rol') ? ' has-error' : '' }}">
                            <label for="rol" class="col-md-4 control-label">Tipo</label>

                            <div class="col-md-6">
                                <select name="rol" class="form-control" id="rol">
                                    @php
                                    $roles = \App\Rol::where('id','<>',1)->get();                                        
                                    @endphp
                                    @foreach($roles as $rol)
                                        <option {{($tipo === $rol->id)?'selected':''}} value="{{$rol->id}}">{{$rol->rol}}</option>
                                    @endforeach
                                </select>                                
                                @if ($errors->has('rol'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('rol') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Contaseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmar contraseña</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/registro.js')}}"></script>
@endsection
