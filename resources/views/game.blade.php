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
                             <th class="col-sm-2">Edit</th>
                             <th class="col-sm-2">Delete</th>
                            </tr>
                          </thead>
                          <tbody value='question'>
                          @foreach ($data as $d)
                           <?php echo "<tr> <td value='id'> $d->id </td> <td value='name'> $d->name </td> <td value='edit'> <a href='#' >Edit</a> </td> <td value='destroy'> <a href='#'>Delete</a> </td> </tr>" ?>

                          @endforeach
                           
                           </tbody>
                        </table>
                       
                          <p> {!! $d->name !!} </p>

                       
 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
