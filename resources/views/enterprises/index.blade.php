<table class="table table-light">
<thread class="thread-light">
<tr>
<th>Id</th>
<th>Nombre</th>
<th>Email</th>
<th>Deleted</th>
</tr>
</thread>
<tbody>
@foreach($enterprises as $enterprise)
<tr>
<td>{{$loop->iteration}}</td>
<td>{{$enterprise->name}}</td>
<td>{{$enterprise->email}}</td>
<td>{{$enterprise->deleted}}</td>
</tr>
@endforeach
</tbody>
</table>