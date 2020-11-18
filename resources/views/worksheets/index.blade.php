@extends('layouts.app')

@section('content')

<div class="container">
<table class="table table-light">
<thread class="thread-light">
<a href="{{ url('worksheets/create')}}" class="btn btn-success">Create</a>
<br/>
<br/>
<th>Id</th>
<th>Date</th>
<th>Description</th>
<th>Student_id</th>
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

<a href="{{ url('/worksheets/'.$worksheet->id.'/edit')}}" class="btn btn-warning">Edit</a>

<form method="post" action="{{ url('/worksheets/'.$worksheet->id)}}" style="display:inline">
{{csrf_field()}}
{{method_field('DELETE')}}
<button class="btn btn-danger" type="submit" onclick="return confirm('¿Seguro que quieres borrar esto?');">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>

{{ $worksheets->links() }}

</div>
@endsection