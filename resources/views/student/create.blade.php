Crear alumno
<form action="{{url('/student')}}" method="post">
    {{ csrf_field() }}

    <label for="name">Nombre: </label>
    <input type="text" name="name" id="name" value="">
    <br/>
     
    <label for="firstname">{{'Apellido'}}</label>
    <input type="text" name="firstname" id="firstname" value="">
    <br/>
    <label for="deleted">Borrado: </label>
    <input type="boolean" name="deleted" id="deleted" value="">
    <br/>
    <input type="submit" value="Crear">

</form>