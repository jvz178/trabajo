@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/enterprises')}}" method="post">
{{ csrf_field() }}

@include('enterprises.form',['Mode'=>'create'])
</form>
</div>
@endsection