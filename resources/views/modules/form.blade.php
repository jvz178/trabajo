{{$Modo=='create' ? 'New module':'Modify module'}}

<div class="form-group">
    <label for="name">Name: </label>
    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}} " name="name" id="name" 
    value="{{ isset($tasks->name)?$tasks->name:old('Nombre')}}">
    {!! $errors->first('name','<div class="invalid-feedback">:message</div>')!!}
</div>

<div class="form-group">
    <label for="cycle_id">Cycle: </label>
    <input type="text" class="form-control {{$errors->has('cycle_id')?'is-invalid':''}} "name="cycle_id" id="cycle_id" 
    value="{{ isset($modules->cycle_id)?$modules->cicle_id:old('cycle_id')}}">
    {!! $errors->first('cycle_id','<div class="invalid-feedback">:message</div>')!!}
    
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='create' ? 'New module':'Modify module'}}">
    <a class="btn btn-primary" href="{{url('modules')}}">Back</a>