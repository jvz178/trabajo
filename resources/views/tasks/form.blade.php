{{$Modo=='create' ? 'New task':'Modify task'}}

<div class="form-group">
    <label for="number">Number: </label>
    <input type="text" class="form-control {{$errors->has('Number')?'is-invalid':''}} " name="number" id="number" 
    value="{{ isset($tasks->number)?$tasks->number:old('Number')}}">
    {!! $errors->first('number','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
    <label for="description">Description: </label>
    <input type="text" class="form-control {{$errors->has('description')?'is-invalid':''}} " name="description" id="description" 
    value="{{ isset($tasks->description)?$tasks->description:old('description')}}">
    {!! $errors->first('description','<div class="invalid-feedback">:message</div>')!!}
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='create' ? 'New task':'Modify task'}}">
    <a class="btn btn-primary" href="{{url('tasks')}}">Back</a>