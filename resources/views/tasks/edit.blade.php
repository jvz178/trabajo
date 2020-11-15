@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/tasks/'.$tasks->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('tasks.form',['Modo'=>'edit'])

</form>
</div>
@endsection