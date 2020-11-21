<div class="form-group">
<label for="number" class="control-label">{{'Number'}}</label>
<input type="number" class="form-control" name="number" id="number" value="{{ isset($rra->number)?$rra->number:old('number')}}"></input>
{!! $errors->first('number','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="description"  class="control-label">{{'Description'}}</label>
<input type="text"  class="form-control" name="description" id="description" value="{{ isset($rra->description)?$rra->description:old('description')}}"></input>
{!! $errors->first('description','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
<label for="module_id" class="control-label">{{'Module_Id'}}</label>
<input type="number"  class="form-control" name="module_id" id="module_id" value="{{ isset($rra->module_id)?$rra->module_id:old('module_id')}}"></input>
{!! $errors->first('module_id','<div class="invalid-feedback">:message</div>')!!}
</div>

<input type="submit" value="{{$Type=='create' ? 'Add ra':'Modify ra'}}" class="btn btn-success"></input>

<a class="btn btn-primary" href="{{ url('/rra')}}">Return</a>

</div>