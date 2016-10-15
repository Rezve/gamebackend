@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Gameboard   ::   Game View
                </div>

                <div class="panel-body">

                        <label for="Name"><h4>Gamename: {{$game->name}} </h4></label> 
                         
                         <lebel for="level"><h4>Level :  {{$game->level}} </h4></lebel>

                      @if($game->level === "Expert" || $game->level === "Hard") 
                          
                          @include('layouts.expert-hard')

                      @elseif($game->level === "Medium" || $game->level === "Easy")

                          @include('layouts.medium-easy')
                      @else

                          @include('layouts.beginner')

                      @endif

                        <br/>

                        <div align="center">
                          {!! Form::open(['method' => 'DELETE','route' => ['game.destroy', $game->id]]) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
                        </div>
                  
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
