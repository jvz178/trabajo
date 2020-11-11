<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name" value="{{ isset($enterprise->name)?$enterprise->name:''}}">
<br/>
<br/>
<label for="email">Email: </label>
<input type="email" name="email" id="email" value="{{ isset($enterprise->email)?$enterprise->email:''}}">
<br/>
<br/>
<input type="submit" value="Crear">
<a href="{{ url('enterprises')}}">Volver</a>