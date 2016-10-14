<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gameboard
                </div>

                <div class="panel-body">

                        <label for="Name"><h4>Gamename: <?php echo e($game->name); ?> </h4></label> 
                         
                         <lebel for="level"><h4>Level :  <?php echo e($game->level); ?> </h4></lebel>
                          
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
                           <?php echo e(var_dump($game)); ?>




                            <tr> <td></td> <td></td>  <td></td> <td></td> <td></td>  <td></td> <td></td> <td></td>  <td></td> </tr>
                          

                           </tbody>
                        </table>

                        </div>

                        <br/>

                        <div align="center">
                          <?php echo Form::open(['method' => 'DELETE','route' => ['game.destroy', $game->id]]); ?> <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?> 
                        </div>
                  
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>