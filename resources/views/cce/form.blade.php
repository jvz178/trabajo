{{$Type=='create'?'Add Cce':'Modify Cce'}}

<div class="form-group">
<label for="word"  class="control-label">{{'Word'}}</label>
<input type="text"  class="form-control" name="word" id="word" value="{{ isset($cce->word)?$cce->word:old('word')}}"></input>
</div>

<div class="form-group">
<label for="description" class="control-label">{{'Description'}}</label>
<input type="text"  class="form-control" name="description" id="description" value="{{ isset($cce->description)?$cce->description:old('description')}}"></input>
</div>

<div class="form-group">
<label for="ra_id" class="control-label">{{'Ra_Id'}}</label>
<input type="number"  class="form-control" name="ra_id" id="ra_id" value="{{ isset($cce->ra_id)?$cce->ra_id:old('ra_id')}}"></input>
</div>

<div class="form-group">
<label for="task_id" class="control-label">{{'Task_Id'}}</label>
<input type="number"  class="form-control" name="task_id" id="task_id" value="{{ isset($cce->task_id)?$cce->task_id:old('task_id')}}"></input>
</div>

<div class="form-group">
<label for="mark" class="control-label">{{'Mark'}}</label>
<input type="text"  class="form-control" name="mark" id="mark" value="{{ isset($cce->mark)?$cce->mark:old('mark')}}"></input>
</div>

<input type="submit" value="{{$Type=='create' ? 'Add':'Modify'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/cce')}}">Return</a>

</div>