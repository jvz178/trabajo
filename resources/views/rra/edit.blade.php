@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/rra/'.$rra->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('rra.form',['Type'=>'edit'])

</form>
</div>
@endsection