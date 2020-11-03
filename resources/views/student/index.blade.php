INICIO ALUMNOS

<table class= "table table-light">
    
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
          
        <a href="{{url('/student/'.$student->id.'/edit')}}" >
            Editar 
        </a>
        
        <form method="post" action="{{url('/student/'.$student->id)}}">
         {{csrf_field()}}
         {{method_field('DELETE')}}
        <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
        </form>
        </td>
        </tr>
    @endforeach
    </body>
</table>