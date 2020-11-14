@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/assistances/'.$assistance->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('assistances.form',['Mode'=>'edit'])
</form>
</div>
@endsection