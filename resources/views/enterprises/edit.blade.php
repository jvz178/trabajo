<form action="{{url('/enterprises/'.$enterprise->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

<label for="Titulo">Crear empresa</label>
<br/>
<br/>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name" value="{{$enterprise->name}}">
<br/>
<br/>
<label for="email">Email: </label>
<input type="email" name="email" id="email" value="{{$enterprise->email}}">
<br/>
<br/>
<input type="submit" value="Cambiar">
<a href="{{ url('enterprises')}}">Volver</a>
</form>