@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Message'))

<div class="alert alert-success" role="alert">
{{  Session::get('Message')  }}
</div>

@endif

<a href="{{ url('/rra/create')}}" class="btn btn-success">Add ra</a>

<br/><br/>

<table class="table table-light table-hover">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Number</th>
            <th>Description</th>
            <th>Module_Id</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rra as $ra)
        <tr>
            <td>{{$ra->id}}</td>
            <td>{{$ra->number}}</td>
            <td>{{$ra->description}}</td>
            <td>{{$ra->module_id}}</td>
            <td>

                <a class="btn btn-warning" href="{{ url('/rra/' .$ra->id. '/edit/') }}">
                    Edit
                </a> 
                <form method="post" action="{{ url('/rra/' .$ra->id) }}" style="display:inline">
                {{csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</button>

                </form>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
@endsection