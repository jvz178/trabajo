Editar alumno
<form action="{{ url('/student/'.$student->id)}}" method="post" enctype="mutipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

   
<br/>
<label for="name">Nombre: </label>
<input type="text" name="name" id="name" value="{{$student->name}}">
<br/>
     
<label for="firstname">{{'Apellido'}}</label>
<input type="text" name="firstname" id="firstname" value="{{$student->firstname}}">
<br/>
<input type="submit" value="Editar">

</form>


