

@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('users/create')}}"class="btn btn-success">Añadir usuario</a>
<br/>
<br/>

<table class= "table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Contraseña</th>
            <th>Email</th>
            <th>Verifica Email</th>
        </tr>
    </thead>

    <body>
    @foreach ($users as $users)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->firstname}}</td>
        <td>{{$users->phone}}</td>
        <td>{{$users->password}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->email_verified_at}}</td>
        <td> 
          
        <a class="btn btn-warning" href="{{url('/users/'.$users->id.'/edit')}}" >
            Editar 
        </a>
        
        <form method="post" action="{{url('/users/'.$users->id)}}" style="display:inline">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>
</div>
@endsection
<<<<<<< HEAD

=======
>>>>>>> 9f242cefbca7fb117255d96a870fc401030741e8