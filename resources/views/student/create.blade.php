Crear alumno
<form action="{{url('/student')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <label for="name">{{'Name'}}</label>
    <input type="text" name="name" id="name" value="">
    <input type="submit"  value="Agregar">
    <br/>
     
    <label for="firstname">{{'Firstname'}}</label>
    <input type="text" name="firstname" id="firstname" value="">


</form>