@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                
                <div class="panel-heading"></div>
                <h1 style="text-align:center">FP DUAL MANAGE</h1>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <p style="text-align:center">WELCOME</p>
                </div>
            <br/>
            

                <a href="{{ url('users')}}"> 
                    <input type="submit" name="Submit" value="Users" style="color:black; height:60px; width:240px; font-size:16px; backghround-color:red; font-family:verdana;">
                </a>

                <a href="{{ url('enterprises')}}">  
                    <input type="submit" name="Submit" value="Enterprises" style="color:black; height:60px; width:240px; font-size:16px; backghround-color:red; font-family:verdana;">
                </a>

                <a href="{{ url('cycles')}}">
                    <input type="submit" name="Submit" value="Cycles" style="color:black; height:60px; width:240px; font-size:16px; backghround-color:red; font-family:verdana;">
                </a>

                <a href="{{ url('worksheets')}}">
                    <input type="submit" name="Submit" value="Worksheets" style="color:black; height:60px; width:240px; font-size:16px; backghround-color:red; font-family:verdana;">
                </a>
                    
                
            </div>
        </div>
    </div>
</div>
@endsection
