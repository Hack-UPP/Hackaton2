
<div class="form-group{{ $errors->has('apellido_paterno') ? ' has-error' : '' }}">
    <label for="apellido_paterno" class="col-md-4 control-label">Apellido paterno</label>

    <div class="col-md-6">
        <input id="apellido_paterno" type="text" class="form-control" name="apellido_paterno" value="{{ old('apellido_paterno') }}" required autofocus>

        @if ($errors->has('apellido_paterno'))
        <span class="help-block">
            <strong>{{ $errors->first('apellido_paterno') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('apellido_materno') ? ' has-error' : '' }}">
    <label for="apellido_materno" class="col-md-4 control-label">Apellido materno</label>

    <div class="col-md-6">
        <input id="apellido_materno" type="text" class="form-control" name="apellido_materno" value="{{ old('apellido_materno') }}" required autofocus>

        @if ($errors->has('apellido_materno'))
        <span class="help-block">
            <strong>{{ $errors->first('apellido_materno') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('datos_escolares') ? ' has-error' : '' }}">
    <label for="datos_escolares" class="col-md-4 control-label">Apellido materno</label>

    <div class="col-md-6">
        <input id="datos_escolares" type="text" class="form-control" name="datos_escolares" value="{{ old('datos_escolares') }}" required autofocus>

        @if ($errors->has('datos_escolares'))
        <span class="help-block">
            <strong>{{ $errors->first('datos_escolares') }}</strong>
        </span>
        @endif
    </div>
</div>
