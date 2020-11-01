<form action="{{ url('/enterprises')}}" method="post" enctype="multipart/form-data">
{{ csrf_field() }}

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="name">Nombre: </label>
<input type="string" name="name" id="name" value="">
<br/>
<br/>
<label for="email">Email: </label>
<input type="string" name="email" id="email" value="">
<br/>
<br/>
<label for="deleted">Borrado: </label>
<input type="boolean" name="deleted" id="deleted" value="">
<br/>
<br/>
<input type="submit" value="Crear">
</form>