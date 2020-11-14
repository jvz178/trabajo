@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/worksheets/'.$worksheet->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('worksheets.form',['Mode'=>'edit'])
</form>
</div>
@endsection