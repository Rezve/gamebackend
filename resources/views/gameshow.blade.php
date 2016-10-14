@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gameboard
                </div>

                <div class="panel-body">

                        <label for="Name"><h4>Gamename: {{$game->name}} </h4></label> 
                         
                         <lebel for="level"><h4>Level :  {{$game->level}} </h4></lebel>
                          
                        <h3>Question:</h3>
                    
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody value='question'>
                           <tr> 

                           <td></td> 

                           </tr>
                           
                           </tbody>
                        </table>

                        </div>


                        <br/>
                        <h3>Answer:</h3>
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody value='answer'>
                           {{var_dump($game)}}



                            <tr> <td></td> <td></td>  <td></td> <td></td> <td></td>  <td></td> <td></td> <td></td>  <td></td> </tr>
                          

                           </tbody>
                        </table>

                        </div>

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
