<label for="Titulo">Nueva ficha</label>
<br/>
<br/>
<label for="date">Fecha: </label>
<input type="date" name="date" id="date" value="{{ isset($worksheet->date)?$worksheet->date:''}}">
<br/>
<br/>
<label for="description">Descripción: </label>
<input type="text" name="description" id="description" value="{{ isset($worksheet->description)?$worksheet->description:''}}">
<br/>
<br/>
<label for="student_id">Id_estudiante: </label>
<input type="foreign" name="student_id" id="student_id" value="{{ isset($worksheet->student_id)?$worksheet->student_id:''}}">
<br/>
<br/>
<label for="accepted">Aceptado: </label>
<input type="boolean" name="accepted" id="accepted" value="{{ isset($worksheet->accepted)?$worksheet->accepted:''}}">
<br/>
<br/>
<input type="submit" value="Crear">
<a href="{{ url('worksheets')}}">Volver</a>