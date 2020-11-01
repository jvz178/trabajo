<form action="{{ url('/enterprises')}}" method="post">
{{ csrf_field() }}

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="Nombre">Nombre: </label>
<input type="text" name="Nombre" id="Nombre" value="">
<br/>
<br/>
<label for="Email">Email: </label>
<input type="email" name="Email" id="Email" value="">
<br/>
<br/>
<label for="Borrado">Borrado: </label>
<input type="boolean" name="Borrado" id="Borrado" value="">
<br/>
<br/>
<input type="submit" value="Crear">
</form>