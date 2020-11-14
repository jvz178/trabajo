@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Fecha</th>
<th>Descripción</th>
<th>Id_estudiante</th>
<th>Accepted</th>
<th>Deleted</th>
</tr>
</thread>
<tbody>
@foreach($worksheets as $worksheet)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$worksheet->date}}</td>
<td>{{$worksheet->description}}</td>
<td>{{$worksheet->student_id}}</td>
<td>{{$worksheet->accepted}}</td>
<td>{{$worksheet->deleted}}</td>
<td>

<a href="{{ url('/worksheets/'.$worksheet->id.'/edit')}}">Editar</a>

<form method="post" action="{{ url('/worksheets/'.$worksheet->id)}}">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('¿Seguro que quieres borrar esto?');"> Borrar </button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
<a href="{{ url('worksheets/create')}}">
Crear
</a>
</div>
@endsection