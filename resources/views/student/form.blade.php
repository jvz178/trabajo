    {{$Modo=='create' ? 'Añadir alumno':'Modificar alumno'}}
    
    <div class="form-group">
    <label for="name" class="control-label">Nombre: </label>
    <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}} " name="name" id="name" 
    value="{{ isset($student->name)?$student->name:old('Nombre')}}">
    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
    </div>
     
    <div class="form-group">
    <label for="firstname">{{'Apellido: '}}</label>
    <input type="text" class="form-control {{$errors->has('firstname')?'is-invalid':''}} "name="firstname" id="firstname" 
    value="{{ isset($student->firstname)?$student->fistname:old('firstname')}}">
    {!! $errors->first('firstname','<div class="invalid-feedback">:message</div>')!!}
    
    </div>
    
    <input type="submit" class="btn btn-success" value="{{$Modo=='create' ? 'Create student':'Modify student'}}">
    <a class="btn btn-primary" href="{{url('student')}}">Regresar</a>