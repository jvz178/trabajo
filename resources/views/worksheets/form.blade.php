<div class="form-group">
<label for="date">Date: </label>
<input type="date" class="form-control" name="date" id="date"
value="{{ isset($worksheet->date)?$worksheet->date:''}}">
{!! $errors->first('date','<div class="invalid-feedback">:message</div>')!!}
</div>
<br/>
<br/>
<div class="form-group">
<label for="description">Description: </label>
<input type="text" class="form-control" name="description" id="description" 
value="{{ isset($worksheet->description)?$worksheet->description:''}}">
{!! $errors->first('description','<div class="invalid-feedback">:message</div>')!!}
</div>
<br/>
<br/>
<div class="form-group">
<label for="student_id">Student_Id: </label>
<input type="foreign" class="form-control" name="student_id" id="student_id"
value="{{ isset($worksheet->student_id)?$worksheet->student_id:''}}">
{!! $errors->first('student_id','<div class="invalid-feedback">:message</div>')!!}
</div>
<br/>
<br/>
<input class="btn btn-success" type="submit" value="{{$Mode=='create' ? 'Add worksheet':'Modify worksheet'}}"></input>
<a class="btn btn-primary" href="{{ url('worksheets')}}">Return</a>