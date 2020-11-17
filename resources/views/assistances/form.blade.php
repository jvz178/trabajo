<div class="form-group">
<label for="id_student" class="control-label">Student_Id: </label>
<input type="id" class="form-control" name="student_id" id="student_id" value="{{ isset($assistance->student_id)?$assistance->student_id:old('student_id')}}">
</div>

<div class="form-group">
<label for="date" class="control-label">Date: </label>
<input type="date" class="form-control" name="date" id="date" value="{{ isset($assistance->date)?$assistance->date:old('date')}}">
</div>

<div class="form-group">
<label for="assistance" class="control-label">Assistance: </label>
<input type="text" class="form-control" name="assistance" id="assistance" value="{{ isset($assistance->assistance)?$assistance->assistance:old('assistance')}}">
</div>

<div class="form-group">
<label for="accepted" class="control-label">Acepted: </label>
<input type="boolean" class="form-control" name="accepted" id="accepted" value="{{ isset($assistance->accepted)?$assistance->accepted:old('accepted')}}">
</div>

<input type="submit" value="{{$Mode=='create' ? 'Add':'Modify'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/assistance')}}">Return</a>