    {{$Modo=='create' ? 'Añadir usuario':'Modificar usuario'}}
    
    <div class="form-group">
        <label for="name" class="control-label">Name: </label>
        <input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}} " name="name" id="name" 
        value="{{ isset($users->name)?$users->name:old('Nombre')}}">
        {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>')!!}
    </div>
     
    <div class="form-group">
        <label for="firstname">{{'Firstname: '}}</label>
        <input type="text" class="form-control {{$errors->has('firstname')?'is-invalid':''}} "name="firstname" id="firstname" 
        value="{{ isset($users->firstname)?$users->firstname:old('firstname')}}">
        {!! $errors->first('firstname','<div class="invalid-feedback">:message</div>')!!}
    </div>



    <div class="form-group">
        <label for="phone" class="control-label">Phone: </label>
        <input type="text" class="form-control {{$errors->has('Phone')?'is-invalid':''}} " name="phone" id="phone" 
        value="{{ isset($users->phone)?$users->phone:old('Phone')}}">
        {!! $errors->first('phone','<div class="invalid-feedback">:message</div>')!!}
    </div>

    <div class="form-group">
        <label for="password" class="control-label">Password: </label>
        <input type="text" class="form-control {{$errors->has('Password')?'is-invalid':''}} " name="password" id="password" 
        value="{{ isset($users->password)?$users->password:old('Password')}}">
        {!! $errors->first('Password','<div class="invalid-feedback">:message</div>')!!}
    </div>

    <div class="form-group">
        <label for="email" class="control-label">Email: </label>
        <input type="text" class="form-control {{$errors->has('Email')?'is-invalid':''}} " email="name" id="name" 
        value="{{ isset($users->email)?$users->email:old('Email')}}">
        {!! $errors->first('Email','<div class="invalid-feedback">:message</div>')!!}
    </div>

    <div class="form-group">
        <label for="email_verified_at" class="control-label">Verifica email: </label>
        <input type="text" class="form-control {{$errors->has('email_verified_at')?'is-invalid':''}} " email_verified_at="name" id="name" 
        value="{{ isset($users->email_verified_at)?$users->email_verified_at:old('email_verified_at')}}">
        {!! $errors->first('email_verified_at','<div class="invalid-feedback">:message</div>')!!}
    </div>

    <div class="form-group">
        <label for="enterprise_id">{{'Empresa: '}}</label>
        <input type="text" class="form-control {{$errors->has('enterprise_id')?'is-invalid':''}} "name="enterprise_id" id="enterprise_id" 
        value="{{ isset($users->enterprise_id)?$users->enterprise_id:old('enterprise_id')}}">
        {!! $errors->first('enterprise_id','<div class="invalid-feedback">:message</div>')!!}
        
    </div>

    <div class="form-group">
        <label for="cicle_id">{{'Ciclo: '}}</label>
        <input type="text" class="form-control {{$errors->has('cicle_id')?'is-invalid':''}} "name="cicle_id" id="cicle_id" 
        value="{{ isset($users->cicle_id)?$users->cicle_id:old('cicle_id')}}">
        {!! $errors->first('cicle_id','<div class="invalid-feedback">:message</div>')!!}
        
    </div>

    <div class="form-group">
        <label for="type">{{'Tipo: '}}</label>
        <input type="text" class="form-control {{$errors->has('type')?'is-invalid':''}} "name="type" id="type" 
        value="{{ isset($users->type)?$users->type:old('type')}}">
        {!! $errors->first('type','<div class="invalid-feedback">:message</div>')!!}
    
    </div>


    
    <input type="submit" class="btn btn-success" value="{{$Modo=='create' ? 'Crear usuario':'Modificar users'}}">
    <a class="btn btn-primary" href="{{url('users')}}">Volver</a>