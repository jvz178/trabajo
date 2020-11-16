@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/modules/'.$modules->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('modules.form',['Modo'=>'edit'])

</form>
</div>
@endsection