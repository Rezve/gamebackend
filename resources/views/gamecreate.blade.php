@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gameboard
                </div>

                <div class="panel-body">
                        {!! Form::open(['url' => 'game']) !!}

                        <label for="Name"><h3>Gamename:</h3></label> <input name="gamename" type="text">
                         
                         <input type="hidden" name="level" value="Hard">
                          
                        <h3>Question:</h3>
                    
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody value='question'>
                           <tr> <td value='00'><input type="text" name="question[one][]" ></td> <td value='01'><input type="text" name="question[one][]" ></td>  <td value='02'><input type="text" name="question[one][]" ></td> <td value='03'><input type="text" name="question[one][]" ></td> <td value='04'><input type="text" name="question[one][]" ></td>  <td value='05'><input type="text" name="question[one][]" ></td> <td value='06'><input type="text" name="question[one][]" ></td> <td value='07'><input type="text" name="question[one][]" ></td>  <td value='08'><input type="text" name="question[one][]" ></td> </tr>
                           <tr> <td value='10'><input type="text" name="question[two][]" ></td> <td value='11'><input type="text" name="question[two][]" ></td>  <td value='02'><input type="text" name="question[two][]" ></td> <td value='03'><input type="text" name="question[two][]" ></td> <td value='04'><input type="text" name="question[two][]" ></td>  <td value='05'><input type="text" name="question[two][]" ></td> <td value='06'><input type="text" name="question[two][]" ></td> <td value='07'><input type="text" name="question[two][]" ></td>  <td value='08'><input type="text" name="question[two][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[three][]" ></td> <td value='21'><input type="text" name="question[three][]" ></td>  <td value='02'><input type="text" name="question[three][]" ></td> <td value='03'><input type="text" name="question[three][]" ></td> <td value='04'><input type="text" name="question[three][]" ></td>  <td value='05'><input type="text" name="question[three][]" ></td> <td value='06'><input type="text" name="question[three][]" ></td> <td value='07'><input type="text" name="question[three][]" ></td>  <td value='08'><input type="text" name="question[three][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[four][]" ></td> <td value='21'><input type="text" name="question[four][]" ></td>  <td value='02'><input type="text" name="question[four][]" ></td> <td value='03'><input type="text" name="question[four][]" ></td> <td value='04'><input type="text" name="question[four][]" ></td>  <td value='05'><input type="text" name="question[four][]" ></td> <td value='06'><input type="text" name="question[four][]" ></td> <td value='07'><input type="text" name="question[four][]" ></td>  <td value='08'><input type="text" name="question[four][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[five][]" ></td> <td value='21'><input type="text" name="question[five][]" ></td>  <td value='02'><input type="text" name="question[five][]" ></td> <td value='03'><input type="text" name="question[five][]" ></td> <td value='04'><input type="text" name="question[five][]" ></td>  <td value='05'><input type="text" name="question[five][]" ></td> <td value='06'><input type="text" name="question[five][]" ></td> <td value='07'><input type="text" name="question[five][]" ></td>  <td value='08'><input type="text" name="question[five][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[six][]" ></td> <td value='21'><input type="text" name="question[six][]" ></td>  <td value='02'><input type="text" name="question[six][]" ></td> <td value='03'><input type="text" name="question[six][]" ></td> <td value='04'><input type="text" name="question[six][]" ></td>  <td value='05'><input type="text" name="question[six][]" ></td> <td value='06'><input type="text" name="question[six][]" ></td> <td value='07'><input type="text" name="question[six][]" ></td>  <td value='08'><input type="text" name="question[six][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[seven][]" ></td> <td value='21'><input type="text" name="question[seven][]" ></td>  <td value='02'><input type="text" name="question[seven][]" ></td> <td value='03'><input type="text" name="question[seven][]" ></td> <td value='04'><input type="text" name="question[seven][]" ></td>  <td value='05'><input type="text" name="question[seven][]" ></td> <td value='06'><input type="text" name="question[seven][]" ></td> <td value='07'><input type="text" name="question[seven][]" ></td>  <td value='08'><input type="text" name="question[seven][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[eight][]" ></td> <td value='21'><input type="text" name="question[eight][]" ></td>  <td value='02'><input type="text" name="question[eight][]" ></td> <td value='03'><input type="text" name="question[eight][]" ></td> <td value='04'><input type="text" name="question[eight][]" ></td>  <td value='05'><input type="text" name="question[eight][]" ></td> <td value='06'><input type="text" name="question[eight][]" ></td> <td value='07'><input type="text" name="question[eight][]" ></td>  <td value='08'><input type="text" name="question[eight][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="question[nine][]" ></td> <td value='21'><input type="text" name="question[nine][]" ></td>  <td value='02'><input type="text" name="question[nine][]" ></td> <td value='03'><input type="text" name="question[nine][]" ></td> <td value='04'><input type="text" name="question[nine][]" ></td>  <td value='05'><input type="text" name="question[nine][]" ></td> <td value='06'><input type="text" name="question[nine][]" ></td> <td value='07'><input type="text" name="question[nine][]" ></td>  <td value='08'><input type="text" name="question[nine][]" ></td> </tr>
                           
                           </tbody>
                        </table>

                        </div>


                        <br/>
                        <h3>Answer:</h3>
                        <div>
                        <table align="center">
                          <tbody>
                           <tr> <td value='00'><input type="text" name="answer[one][]" ></td> <td value='01'><input type="text" name="answer[one][]" ></td>  <td value='02'><input type="text" name="answer[one][]" ></td> <td value='03'><input type="text" name="answer[one][]" ></td> <td value='04'><input type="text" name="answer[one][]" ></td>  <td value='05'><input type="text" name="answer[one][]" ></td> <td value='06'><input type="text" name="answer[one][]" ></td> <td value='07'><input type="text" name="answer[one][]" ></td>  <td value='08'><input type="text" name="answer[one][]" ></td> </tr>
                           <tr> <td value='10'><input type="text" name="answer[two][]" ></td> <td value='11'><input type="text" name="answer[two][]" ></td>  <td value='02'><input type="text" name="answer[two][]" ></td> <td value='03'><input type="text" name="answer[two][]" ></td> <td value='04'><input type="text" name="answer[two][]" ></td>  <td value='05'><input type="text" name="answer[two][]" ></td> <td value='06'><input type="text" name="answer[two][]" ></td> <td value='07'><input type="text" name="answer[two][]" ></td>  <td value='08'><input type="text" name="answer[two][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[three][]" ></td> <td value='21'><input type="text" name="answer[three][]" ></td>  <td value='02'><input type="text" name="answer[three][]" ></td> <td value='03'><input type="text" name="answer[three][]" ></td> <td value='04'><input type="text" name="answer[three][]" ></td>  <td value='05'><input type="text" name="answer[three][]" ></td> <td value='06'><input type="text" name="answer[three][]" ></td> <td value='07'><input type="text" name="answer[three][]" ></td>  <td value='08'><input type="text" name="answer[three][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[four][]" ></td> <td value='21'><input type="text" name="answer[four][]" ></td>  <td value='02'><input type="text" name="answer[four][]" ></td> <td value='03'><input type="text" name="answer[four][]" ></td> <td value='04'><input type="text" name="answer[four][]" ></td>  <td value='05'><input type="text" name="answer[four][]" ></td> <td value='06'><input type="text" name="answer[four][]" ></td> <td value='07'><input type="text" name="answer[four][]" ></td>  <td value='08'><input type="text" name="answer[four][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[five][]" ></td> <td value='21'><input type="text" name="answer[five][]" ></td>  <td value='02'><input type="text" name="answer[five][]" ></td> <td value='03'><input type="text" name="answer[five][]" ></td> <td value='04'><input type="text" name="answer[five][]" ></td>  <td value='05'><input type="text" name="answer[five][]" ></td> <td value='06'><input type="text" name="answer[five][]" ></td> <td value='07'><input type="text" name="answer[five][]" ></td>  <td value='08'><input type="text" name="answer[five][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[six][]" ></td> <td value='21'><input type="text" name="answer[six][]" ></td>  <td value='02'><input type="text" name="answer[six][]" ></td> <td value='03'><input type="text" name="answer[six][]" ></td> <td value='04'><input type="text" name="answer[six][]" ></td>  <td value='05'><input type="text" name="answer[six][]" ></td> <td value='06'><input type="text" name="answer[six][]" ></td> <td value='07'><input type="text" name="answer[six][]" ></td>  <td value='08'><input type="text" name="answer[six][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[seven][]" ></td> <td value='21'><input type="text" name="answer[seven][]" ></td>  <td value='02'><input type="text" name="answer[seven][]" ></td> <td value='03'><input type="text" name="answer[seven][]" ></td> <td value='04'><input type="text" name="answer[seven][]" ></td>  <td value='05'><input type="text" name="answer[seven][]" ></td> <td value='06'><input type="text" name="answer[seven][]" ></td> <td value='07'><input type="text" name="answer[seven][]" ></td>  <td value='08'><input type="text" name="answer[seven][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[eight][]" ></td> <td value='21'><input type="text" name="answer[eight][]" ></td>  <td value='02'><input type="text" name="answer[eight][]" ></td> <td value='03'><input type="text" name="answer[eight][]" ></td> <td value='04'><input type="text" name="answer[eight][]" ></td>  <td value='05'><input type="text" name="answer[eight][]" ></td> <td value='06'><input type="text" name="answer[eight][]" ></td> <td value='07'><input type="text" name="answer[eight][]" ></td>  <td value='08'><input type="text" name="answer[eight][]" ></td> </tr>
                           <tr> <td value='20'><input type="text" name="answer[nine][]" ></td> <td value='21'><input type="text" name="answer[nine][]" ></td>  <td value='02'><input type="text" name="answer[nine][]" ></td> <td value='03'><input type="text" name="answer[nine][]" ></td> <td value='04'><input type="text" name="answer[nine][]" ></td>  <td value='05'><input type="text" name="answer[nine][]" ></td> <td value='06'><input type="text" name="answer[nine][]" ></td> <td value='07'><input type="text" name="answer[nine][]" ></td>  <td value='08'><input type="text" name="answer[nine][]" ></td> </tr>
                          

                           </tbody>
                        </table>

                        </div>


                        <br/>

                        <div style="text-align:center;"><?php echo Form::submit('Submit'); ?></div>

                        {!! Form::close() !!}
                  
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
