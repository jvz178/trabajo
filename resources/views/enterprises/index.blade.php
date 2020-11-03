<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Email</th>
<th>Deleted</th>
<th>Acciones</th>
</tr>
</thread>
<tbody>
@foreach($enterprises as $enterprise)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$enterprise->name}}</td>
<td>{{$enterprise->email}}</td>
<td>{{$enterprise->deleted}}</td>
<td>

<form method="post" action="{{ url('/enterprises/'.$enterprise->id.'/edit')}}">
{{csrf_field()}}
<button type="submit">Editar</button>

<form method="post" action="{{ url('/enterprises/'.$enterprise->id)}}">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('¿Seguro que quieres borrar esto?');">Borrar</button>
</td>
</tr>
@endforeach
</tbody>
</table>