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
                <div class="panel-heading" align="center">Gameboard  ::  Add Game on Level  :  <b> {{$level}} </b> </div>

                <div class="panel-body">
                        {!! Form::open(['url' => 'game']) !!}

                        <label for="name"><h3>Game Name  :  </h3></label> <input name="name" type="text">
                         
                         <input type="hidden" name="level" value="{{$level}}">

                         @if($level === "Expert") 
                          
                              @include('forms.expert')

                          @elseif($level === "Hard") 

                              @include('forms.hard')

                          @elseif($level === "Medium")

                              @include('forms.medium')

                          @elseif($level === "Easy")

                              @include('forms.easy') 

                          @else

                              @include('forms.beginner')

                          @endif

                        <br/>

                        <div style="text-align:center;"><?php echo Form::submit('Submit'); ?></div>

                        {!! Form::close() !!}
                  
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
