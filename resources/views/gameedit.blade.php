@extends('layouts.app')

@section('content')
<div class="container">
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Gameboard  ::  Edit game on Level  :  <b>  {{$game->level}}</b> </div>

                <div class="panel-body">
                        
                        {!! Form::open(array('route' => array('game.update', $game->id))) !!}

                        {{ method_field('PUT') }}

                        <label for="name"><h3>Game Name  :  </h3></label> <input name="name" type="text" value="{{$game->name}}">
                         
                         <input type="hidden" name="level" value="{{$game->level}}">
                        <br/>

                             @php

                              $rows = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven");

                             @endphp

                        <br/>

                        <h3>Question  : </h3>
                    
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody value='question'>
                            @for ($i = 0; $i < sizeof($game->question); $i++)

                               <tr>
                               @foreach($game->question[$rows[$i]] as  $key => $value)
                                   <td><input type="text" name="question[{{$rows[$i]}}][]"  value="{{ $value }} "></td>
                               @endforeach
                               </tr>
                               
                            @endfor

                          </tbody>
                        </table>
                        </div>
                        <br/>
                      
                        <br/>
                        <h3>Answer  : </h3>
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody  value='answer'>

                              @for ($i = 0; $i < sizeof($game->answer); $i++)

                               <tr>
                               @foreach($game->answer[$rows[$i]] as  $key => $value)
                                   <td><input type="text" name="answer[{{$rows[$i]}}][]"  value="{{ $value }} "></td>
                               @endforeach
                               </tr>
                               
                            @endfor

                          </tbody>
                        </table>

                        </div>

                        <br/>
                        <br/>

                        <div style="text-align:center;">{!! Form::submit('Submit') !!}</div>


                        {!! Form::close() !!}
                  
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
