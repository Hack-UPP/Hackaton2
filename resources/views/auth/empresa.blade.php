<div class="form-group{{ $errors->has('rfc') ? ' has-error' : '' }}">
    <label for="rfc" class="col-md-4 control-label">RFC</label>

    <div class="col-md-6">
        <input id="rfc" type="text" class="form-control" name="rfc" value="{{ old('rfc') }}" required autofocus>

        @if ($errors->has('rfc'))
        <span class="help-block">
            <strong>{{ $errors->first('rfc') }}</strong>
        </span>
        @endif
    </div>
</div>
