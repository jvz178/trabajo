<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<div class="container">

<form action="{{ url('/users/'.$users->id)}}" method="post">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('users.form',['Modo'=>'edit'])

</form>
</div>
@endsection


=======
Editar
>>>>>>> 0fb5282f6a96878d5e46fb3ccfad53724ce8e04d
