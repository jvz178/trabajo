<div class="form-group">
<label for="name" class="control-label">{{'Name'}}</label>
<input type="text" class="form-control" name="name" id="name" value="{{ isset($enterprise->name)?$enterprise->name:old('name')}}"></input>
{!! $errors->first('name','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="email" class="control-label">{{'Email: '}}</label>
<input type="email" class="form-control" name="email" id="email" value="{{ isset($enterprise->email)?$enterprise->email:old('email')}}">
{!! $errors->first('email','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="{{$Mode=='create' ? 'Add enterprise':'Modify enterprise'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/enterprises')}}">Back</a>