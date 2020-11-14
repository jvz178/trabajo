@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/assistances')}}" method="post">
{{ csrf_field() }}

@include('assistances.form',['Mode'=>'create'])
</form>
</div>
@endsection