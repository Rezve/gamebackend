@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gameboard <a class="nav navbar-nav navbar-right" style="padding-right:10px;" href="{{ url('/game/create') }}">Create</a>
                </div>

                <div class="panel-body">
                    
                  

                    <table class="gameshow table table-bordered table-striped" align="center">
                          <thead>
                            <tr>
                             <th class="col-sm-2">ID</th>
                             <th class="col-sm-6">Name</th>
                             <th class="col-sm-2">View</th>
                             <th class="col-sm-2">Delete</th>
                            </tr>
                          </thead>
                          <tbody value='question'>
                          @foreach ($data as $d)
                           <tr> <td value='id'> {{$id++}} </td> <td value='name'> {{$d->name}} </td> <td value='view'> <a class="btn btn-info" href='{{ route('game.show', $d->id) }}' >View</a> </td> <td value='destroy'> {!! Form::open(['method' => 'DELETE','route' => ['game.destroy', $d->id]]) !!} {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} </td></tr>  
                          @endforeach
                         
                           </tbody>
                        </table>

                       
 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
