Inicio (Despliegue de datos)

<a href="{{ url('/cycles/create')}}">Add Student</a>

<table class="table table.light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Grade</th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cycles as $cycle)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cycle->name}}</td>
            <td>{{$cycle->grade}}</td>
            <td>{{$cycle->year}}</td>
            <td>
                
                <a href="{{ url('/cycles/' .$cycle->id. '/edit/') }}">
                    Edit
                </a>
                
            
                | 

                <form method="post" action="{{ url('/cycles/' .$cycle->id) }}">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Delete?');">Delete</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>