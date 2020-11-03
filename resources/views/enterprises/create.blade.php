<form action="{{ url('/enterprises')}}" method="post">
{{ csrf_field() }}

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name" value="">
<br/>
<br/>
<label for="email">Email: </label>
<input type="email" name="email" id="email" value="">
<input type="submit" value="Crear">
</form>