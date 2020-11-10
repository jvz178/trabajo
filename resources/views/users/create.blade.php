@extends('layouts.app')

@section('content')
<div class="container">

@if(count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{url('/users')}}" class="form-horizontal" method="post">
    {{ csrf_field() }}

    @include('users.form',['Modo'=>'create'])


    
</form>
</div>

@endsection
