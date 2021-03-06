@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div>
            <div class="panel panel-primary">
                
                <div class="panel-heading"></div>
                <h1 style="text-align:center">ADMIN MENU</h1>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p style="text-align:center">WELCOME</p>
                </div>
            <br/>
            
            <div style="text-align:center">
            
                <a href="{{ url('assistances')}}">
                    <input type="submit" name="Submit" value="Assistances" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

                <a href="{{ url('cce')}}">
                    <input type="submit" name="Submit" value="CE" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

                <a href="{{ url('cycles')}}">
                    <input type="submit" name="Submit" value="Cycles" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

            <br><br/>

                <a href="{{ url('enterprises')}}">  
                    <input type="submit" name="Submit" value="Enterprises" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

                <a href="{{ url('modules')}}">
                    <input type="submit" name="Submit" value="Modules" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>
                
                <a href="{{ url('rra')}}">
                    <input type="submit" name="Submit" value="RA" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>
                
            <br><br/>

                <a href="{{ url('studys')}}">
                    <input type="submit" name="Submit" value="Studies" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>
                
                <a href="{{ url('tasks')}}">
                    <input type="submit" name="Submit" value="Tasks" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>              
                
                <a href="{{ url('users')}}">

                    <input type="submit" name="Submit" value="Users" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

            <br><br/>

                <a href="{{ url('visits')}}">
                    <input type="submit" name="Submit" value="Visits" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>

                <a href="{{ url('worksheets')}}">
                    <input type="submit" name="Submit" value="Worksheets" style="height:60px; width:300px; font-size:16px;" class="btn btn-primary">
                </a>
                
                
            <br><br/>
            </div>
        

                    
                
            </div>
        </div>
    </div>
</div>
@endsection
