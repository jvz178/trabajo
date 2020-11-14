@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Id_estudiante</th>
<th>Fecha</th>
<th>Asistencia</th>
<th>Aceptado</th>
<th>Deleted</th>
<th></th>
</tr>
</thread>
<tbody>
@foreach($enterprises as $enterprise)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$assistance->student_id}}</td>
<td>{{$assistance->date}}</td>
<td>{{$assistance->assistance}}</td>
<td>{{$assistance->accepted}}</td>
<td>{{$enterprise->deleted}}</td>
<td>

<a href="{{ url('/assistances/'.$assistance->id.'/edit')}}">Editar</a>

<form method="post" action="{{ url('/assistances/'.$assistance->id)}}">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('¿Seguro que quieres borrar esto?');"> Borrar </button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<a href="{{ url('assistances/create')}}">
Crear
</a>
</div>
@endsection