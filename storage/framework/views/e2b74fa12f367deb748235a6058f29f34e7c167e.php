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
                <div class="panel-heading" align="center">Gameboard  ::  Add Game on Level  :  <b> <?php echo e($level); ?> </b> </div>

                <div class="panel-body">
                        <?php echo Form::open(['url' => 'game']); ?>


                        <label for="name"><h3>Game Name  :  </h3></label> <input name="name" type="text">
                         
                         <input type="hidden" name="level" value="<?php echo e($level); ?>">

                         <?php if($level === "Expert"): ?> 
                          
                              <?php echo $__env->make('forms.expert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                          <?php elseif($level === "Hard"): ?> 

                              <?php echo $__env->make('forms.hard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                          <?php elseif($level === "Medium"): ?>

                              <?php echo $__env->make('forms.medium', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                          <?php elseif($level === "Easy"): ?>

                              <?php echo $__env->make('forms.easy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 

                          <?php else: ?>

                              <?php echo $__env->make('forms.beginner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                          <?php endif; ?>

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