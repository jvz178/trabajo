@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/users/'.$users->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('users.form',['Modo'=>'edit'])

</form>
</div>
@endsection


