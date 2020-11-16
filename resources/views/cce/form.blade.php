{{$Type=='create'?'Add Cce':'Modify Cce'}}

<div class="form-group">
<label for="name" class="control-label">{{'Name'}}</label>
<input type="text" class="form-control" name="name" id="name" value="{{ isset($cce->name)?$cce->name:old('name')}}"></input>
</div>

<div class="form-group">
<label for="grade"  class="control-label">{{'Grade'}}</label>
<input type="text"  class="form-control" name="grade" id="grade" value="{{ isset($cce->grade)?$cce->grade:old('grade')}}"></input>
</div>

<div class="form-group">
<label for="year" class="control-label">{{'Year'}}</label>
<input type="number"  class="form-control" name="year" id="year" value="{{ isset($cce->year)?$cce->year:old('year')}}"></input>
</div>

<input type="submit" value="{{$Type=='create' ? 'Add':'Modify'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/cycles')}}">Return</a>

</div>