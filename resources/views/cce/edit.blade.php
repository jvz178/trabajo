@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/cce/'.$cce->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('cce.form',['Type'=>'edit'])

</form>
</div>
@endsection