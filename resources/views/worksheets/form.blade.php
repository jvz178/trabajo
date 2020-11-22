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
<input class="btn btn-success" type="submit" value="{{$Mode=='create' ? 'Add worksheet':'Modify worksheet'}}">
<a class="btn btn-primary" href="{{ url('worksheets')}}">Return</a>