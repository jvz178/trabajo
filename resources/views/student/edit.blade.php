@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/student/'.$student->id)}}" method="post" >
{{csrf_field()}}
 

@include('student.form',['Modo'=>'edit'])

</form>
</div>
@endsection


