{{$Mode=='create'?'Add Enterprise':'Modify Enterprise'}}

<div class="form-group">
<label for="name" class="control-label">{{'Name'}}</label>
<input type="text" class="form-control" name="name" id="name" value="{{ isset($enterprise->name)?$enterprise->name:old('name')}}"></input>
</div>

<div class="form-group">
<label for="email" class="control-label">Email: </label>
<input type="email" class="form-control" name="email" id="email" value="{{ isset($enterprise->email)?$enterprise->email:old('email')}}">
</div>

<input type="submit" value="{{$Mode=='create' ? 'Add':'Modify'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/enterprises')}}">Return</a>