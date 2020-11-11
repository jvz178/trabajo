

@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('users/create')}}"class="btn btn-success">New user</a>
<br/>
<br/>

<table class= "table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Firstname</th>
            <th>Phone</th>
            
            <th>Email</th>
            <th>Email verified</th>
            <th>Enterprise</th>
            <th>Cycle</th>
            <th>Type</th>
        </tr>
    </thead>

    <body>
    @foreach ($users as $users)
        <tr></tr>
        <td>{{$loop->iteration}}</td>
        
        <td>{{$users->name}}</td>
        <td>{{$users->firstname}}</td>
        <td>{{$users->phone}}</td>
      
        <td>{{$users->email}}</td>
        <td>{{$users->email_verified_at}}</td>
        <td>{{$users->enterprise_id}}</td>
        <td>{{$users->cycle_id}}</td>
        <td>{{$users->type}}</td>
        
            

        <td>
        <a class="btn btn-warning" href="{{url('/users/'.$users->id.'/edit')}}" >
            Edit 
        </a>
        
        <form method="post" action="{{url('/users/'.$users->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>
</div>
@endsection
