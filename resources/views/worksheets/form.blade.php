<label for="Titulo">New sheet</label>
<br/>
<br/>
<label for="date">Fecha: </label>
<input type="date" class="form-control" name="date" id="date" value="{{ isset($worksheet->date)?$worksheet->date:''}}">
<br/>
<br/>
<label for="description">Descripción: </label>
<input type="text" class="form-control" name="description" id="description" value="{{ isset($worksheet->description)?$worksheet->description:''}}">
<br/>
<br/>
<label for="student_id">Id_estudiante: </label>
<input type="foreign" class="form-control" name="student_id" id="student_id" value="{{ isset($worksheet->student_id)?$worksheet->student_id:''}}">
<br/>
<br/>
<label for="accepted">Aceptado: </label>
<input type="boolean" class="form-control" name="accepted" id="accepted" value="{{ isset($worksheet->accepted)?$worksheet->accepted:''}}">
<br/>
<br/>
<input class="btn btn-success" type="submit" value="Modify">
<a class="btn btn-primary" href="{{ url('worksheets')}}">Return</a>