<div class="form-group">
<label for="date" class="control-label">Date: </label>
<input type="date" class="form-control" name="date" id="date" value="{{ isset($assistance->date)?$assistance->date:old('date')}}">
{!! $errors->first('date','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="assistance" class="control-label">Assistance: </label>
<input type="text" class="form-control" name="assistance" id="assistance" value="{{ isset($assistance->assistance)?$assistance->assistance:old('assistance')}}">
{!! $errors->first('assistance','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="{{$Mode=='create' ? 'Add assistance':'Modify assistance'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/assistances')}}">Return</a>