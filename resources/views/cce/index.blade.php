@extends('layouts.app')

@section('content')

<div class="container">

<a href="{{ url('/cce/create')}}" class="btn btn-success">Add Cce</a>
<br/><br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Word</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
    @foreach($cce as $ce)
        <tr>
            <td>{{$ce->id}}</td>
            <td>{{$ce->word}}</td>
            <td>{{$ce->description}}</td>
            <td>

                <a class="btn btn-warning" href="{{ url('/cce/' .$ce->id. '/edit/') }}">
                    Edit
                </a>


                | 

                <form method="post" action="{{ url('/cce/' .$ce->id) }}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

{{ $cce->links() }}

</div>
@endsection