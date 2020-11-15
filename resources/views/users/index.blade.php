

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
    @foreach ($users as $user)
        <tr></tr>
        <td>{{$loop->iteration}}</td>
        
        <td>{{$user->name}}</td>
        <td>{{$user->firstname}}</td>
        <td>{{$user->phone}}</td>
      
        <td>{{$user->email}}</td>
        <td>{{$user->email_verified_at}}</td>
        <td>{{$user->enterprise_id}}</td>
        <td>{{$user->cycle_id}}</td>
        <td>{{$user->type}}</td>
        
            

        <td>
        <a class="btn btn-warning" href="{{url('/users/'.$user->id.'/edit')}}" >
            Edit 
        </a>
        
        <form method="post" action="{{url('/users/'.$user->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>

{{ $users->links() }}

</div>
@endsection
