<form action="" method="post">

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name" value="{{$enterprises->name}}">
<br/>
<br/>
<label for="email">Email: </label>
<input type="email" name="email" id="email" value="{{$enterprises->email}}">
<br/>
<br/>
<input type="submit" value="Cambiar">
</form>