
<div class="form-group{{ $errors->has('edad') ? ' has-error' : '' }}">
    <label for="edad" class="col-md-4 control-label">Edad</label>

    <div class="col-md-6">
        <input id="edad" type="number" min="5" max="100" class="form-control" name="edad" value="{{ old('edad') }}" required autofocus>

        @if ($errors->has('edad'))
        <span class="help-block">
            <strong>{{ $errors->first('edad') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
    <label for="sexo" class="col-md-4 control-label">Sexo</label>

    <div class="col-md-6">
        <select id="sexo" class="form-control">
            <option value="H">Hombre</option>
            <option value="M">Mujer</option>
        </select>

        @if ($errors->has('sexo'))
        <span class="help-block">
            <strong>{{ $errors->first('sexo') }}</strong>
        </span>
        @endif
    </div>
</div>
