<div class="form-group">
<label for="student_id" class="control-label">Student_Id: </label>
<input type="number" class="form-control" name="student_id" id="student_id" value="{{ isset($assistance->student_id)?$assistance->student_id:old('student_id')}}">
{!! $errors->first('student_id','<div class="invalid-feedback">:message</div>')!!}
</div>

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

<input type="submit" value="{{$Mode=='create' ? 'Add assistances':'Modify assistances'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/assistances')}}">Return</a>