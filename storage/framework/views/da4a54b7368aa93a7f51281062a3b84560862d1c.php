<?php $__env->startSection('content'); ?>
<div class="container">
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <p><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
    </div>
<?php endif; ?>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Gameboard  ::  Edit game on Level  :  <b>  <?php echo e($game->level); ?></b> </div>

                <div class="panel-body">
                        
                        <?php echo Form::open(array('route' => array('game.update', $game->id))); ?>


                        <?php echo e(method_field('PUT')); ?>


                        <label for="name"><h3>Game Name  :  </h3></label> <input name="name" type="text" value="<?php echo e($game->name); ?>">
                         
                         <input type="hidden" name="level" value="<?php echo e($game->level); ?>">
                        <br/>

                             <?php 

                              $rows = array("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven");

                              ?>

                        <br/>

                        <h3>Question  : </h3>
                    
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody value='question'>
                            <?php for($i = 0; $i < sizeof($game->question); $i++): ?>

                               <tr>
                               <?php $__currentLoopData = $game->question[$rows[$i]]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                   <td><input type="text" name="question[<?php echo e($rows[$i]); ?>][]"  value="<?php echo e($value); ?> "></td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                               </tr>
                               
                            <?php endfor; ?>

                          </tbody>
                        </table>
                        </div>
                        <br/>
                      
                        <br/>
                        <h3>Answer  : </h3>
                        <div>
                        <table class="gamecreation" align="center">
                          <tbody  value='answer'>

                              <?php for($i = 0; $i < sizeof($game->answer); $i++): ?>

                               <tr>
                               <?php $__currentLoopData = $game->answer[$rows[$i]]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                   <td><input type="text" name="answer[<?php echo e($rows[$i]); ?>][]"  value="<?php echo e($value); ?> "></td>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                               </tr>
                               
                            <?php endfor; ?>

                          </tbody>
                        </table>

                        </div>

                        <br/>
                        <br/>

                        <div style="text-align:center;"><?php echo Form::submit('Submit'); ?></div>


                        <?php echo Form::close(); ?>

                  
                </div>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>