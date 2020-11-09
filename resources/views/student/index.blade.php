

@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('Mensaje')){{
    Session::get('Mensaje')

}}
@endif

<a href="{{ url('student/create')}}"class="btn btn-success">Añadir alumno</a>
<br/>
<br/>

<table class= "table table-light table-hover">
    
    <thead class="thead-light">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
    </thead>

    <body>
    @foreach ($student as $student)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->firstname}}</td>
        <td> 
          
        <a class="btn btn-warning" href="{{url('/student/'.$student->id.'/edit')}}" >
            Editar 
        </a>
        
        <form method="post" action="{{url('/student/'.$student->id)}}" style="display:inline">
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