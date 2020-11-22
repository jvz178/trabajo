@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Message'))

    <div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>
@endif

<a href="{{ url('users/create')}}"class="btn btn-success">Add user</a>
<a href="{{ url('home')}}"class="btn btn-success">Back to menu</a>
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

    <tbody>
    @foreach ($users as $user)
        <tr></tr>
        <td>{{$user->id}}</td> 
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
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Delete?');">Delete</button>
        </form>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $users->links() }}

</div>
@endsection
