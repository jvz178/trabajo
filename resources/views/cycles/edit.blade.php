@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/cycles/'.$cycle->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('cycles.form',['Type'=>'edit'])

</form>
</div>
@endsection