@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('enterprises/create')}}" class="btn btn-success">
Create
</a>
<br/><br/>
<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Email</th>
<th></th>
</tr>
</thread>
<tbody>
@foreach($enterprises as $enterprise)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$enterprise->name}}</td>
<td>{{$enterprise->email}}</td>
<td>

<a href="{{ url('/enterprises/'.$enterprise->id.'/edit')}}" class="btn btn-warning">Editar</a>

<form method="post" action="{{ url('/enterprises/'.$enterprise->id)}}" style="display:inline">
{{csrf_field()}}
{{method_field('DELETE')}}
<button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

{{ $enterprises->links() }}


</div>
@endsection