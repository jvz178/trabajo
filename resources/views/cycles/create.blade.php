Sección para crear ciclos
<form action="{{url('/cycles')}}" method="post" enctype="multipart/form-data">
{{csrf_field() }}
    <label for="name">{{'Name'}}</label>
    <input type="text" name="name" id="name" value=""></input>
    </br>
    </br>
    <label for="grade">{{'Grade'}}</label>
    <input type="text" name="grade" id="grade" value=""></input>
    </br>
    </br>
    <label for="year">{{'Year'}}</label>
    <input type="number" name="year" id="year" value=""></input>
    </br>
    </br>
    <input type="submit" value="Add"></<input>

    <a href="{{ url('/cycles')}}">Return</a>

</form>