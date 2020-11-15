@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('/cycles/create')}}" class="btn btn-success">Add Cycle</a>
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
    @foreach($cycles as $cycle)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$cycle->name}}</td>
            <td>{{$cycle->grade}}</td>
            <td>{{$cycle->year}}</td>
            <td>

                <a class="btn btn-warning" href="{{ url('/cycles/' .$cycle->id. '/edit/') }}">
                    Edit
                </a>


                | 

                <form method="post" action="{{ url('/cycles/' .$cycle->id) }}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $cycles->links() }}

</div>
@endsection