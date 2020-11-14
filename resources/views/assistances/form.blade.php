<label for="Titulo">Agregar asistencia</label>
<br/>
<br/>
<label for="id_student">Id_estudiante: </label>
<input type="id" name="student_id" id="student_id" value="{{ isset($assistance->student_id)?$assistance->student_id:''}}">
<br/>
<br/>
<label for="date">Fecha: </label>
<input type="date" name="date" id="date" value="{{ isset($assistance->date)?$assistance->date:''}}">
<br/>
<br/>
<label for="assistance">Asistencia: </label>
<input type="text" name="assistance" id="assistance" value="{{ isset($assistance->assistance)?$assistance->assistance:''}}">
<br/>
<br/>
<label for="accepted">Aceptado: </label>
<input type="boolean" name="accepted" id="accepted" value="{{ isset($assistance->accepted)?$assistance->accepted:''}}">
<br/>
<br/>
<input type="submit" value="Crear">
<a href="{{ url('assistances')}}">Volver</a>