@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/worksheets')}}" method="post">
{{ csrf_field() }}

@include('worksheets.form',['Mode'=>'create'])
</form>
</div>
@endsection