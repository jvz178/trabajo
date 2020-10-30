<form action="{{ url('/enterprises.store')}}" method="post">
{{csrf_field()}}

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="Nombre">Nombre: </label>
<input type="text">
<br/>
<br/>
<label for="Email">Email: </label>
<input type="text">
<br/>
<br/>
<label for="Borrado">Borrado: </label>
<input type="boolean">
<br/>
<br/>
<input type="submit" value="Crear">
</form>