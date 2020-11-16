@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('/cce/create')}}" class="btn btn-success">Add Cycle</a>
<br/><br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Grade</th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
    @foreach($ces as $ce)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$ce->name}}</td>
            <td>{{$ce->grade}}</td>
            <td>{{$ce->year}}</td>
            <td>

                <a class="btn btn-warning" href="{{ url('/cce/' .$cce->id. '/edit/') }}">
                    Edit
                </a>


                | 

                <form method="post" action="{{ url('/cce/' .$cce->id) }}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $cces->links() }}

</div>
@endsection