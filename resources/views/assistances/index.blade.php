@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('/assistances/create')}}" class="btn btn-success">Add Assistance</a>
<br/><br/>

<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Id_estudiante</th>
<th>Fecha</th>
<th>Asistencia</th>
<th></th>
</tr>
</thread>
<tbody>
@foreach($assistances as $assistance)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$assistance->student_id}}</td>
<td>{{$assistance->date}}</td>
<td>{{$assistance->assistance}}</td>
<td>

<a class="btn btn-warning" href="{{ url('/assistances/'.$assistance->id.'/edit')}}">Editar</a>

<form method="post" action="{{ url('/assistances/'.$assistance->id)}}">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

{{ $assistances->links() }}

</div>
@endsection