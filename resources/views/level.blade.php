@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Levels</div>
                
                <div class="panel-body" align="center">

                    <p><a class="btn btn-primary btn-lg" href="{{ url('/game/Beginner/create') }}">Beginner</a></p>
                    <br/>
                    <p><a class="btn btn-primary btn-lg" href="{{ url('/game/Easy/create') }}">Easy</a></p>
                    <br/>
                    <p><a class="btn btn-primary btn-lg" href="{{ url('/game/Medium/create') }}">Medium</a></p>
                    <br/>
                    <p><a class="btn btn-primary btn-lg" href="{{ url('/game/Hard/create') }}">Hard</a></p>
                    <br/>
                   <p> <a class="btn btn-primary btn-lg" href="{{ url('/game/Expert/create') }}">Expert</a></p>
                    <br/>
  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
