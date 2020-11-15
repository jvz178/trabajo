{{$Type=='create'?'Add Cycle':'Modify Cycle'}}

<div class="form-group">
<label for="name" class="control-label">{{'Name'}}</label>
<input type="text" class="form-control" name="name" id="name" value="{{ isset($cycle->name)?$cycle->name:old('name')}}"></input>
</div>

<div class="form-group">
<label for="grade"  class="control-label">{{'Grade'}}</label>
<input type="text"  class="form-control" name="grade" id="grade" value="{{ isset($cycle->grade)?$cycle->grade:old('grade')}}"></input>
</div>

<div class="form-group">
<label for="year" class="control-label">{{'Year'}}</label>
<input type="number"  class="form-control" name="year" id="year" value="{{ isset($cycle->year)?$cycle->year:old('year')}}"></input>
</div>

<input type="submit" value="{{$Type=='create' ? 'Add':'Modify'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/cycles')}}">Return</a>

</div>