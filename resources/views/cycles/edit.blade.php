<form action="{{ url('/cycles/' .$cycle->id) }}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
{{ method_field('PATCH') }}
<label for="name">{{'Name'}}</label>
    <input type="text" name="name" id="name" value="{{ $cycle->name }}"></input>
    </br>
    </br>
    <label for="grade">{{'Grade'}}</label>
    <input type="text" name="grade" id="grade" value="{{ $cycle->grade }}"></input>
    </br>
    </br>
    <label for="year">{{'Year'}}</label>
    <input type="number" name="year" id="year" value="{{ $cycle->year }}"></input>
    </br>
    </br>
    <input type="submit" value="Edit"></<input>


</form>