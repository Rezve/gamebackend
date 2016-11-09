<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" align="center">Gameboard   ::   Game View
                </div>

                <div class="panel-body">

                        <label for="Name"><h4>Gamename: <?php echo e($game->name); ?> </h4></label> 
                         
                         <lebel for="level"><h4>Level :  <?php echo e($game->level); ?> </h4></lebel>

                      <?php if($game->level === "Expert" || $game->level === "Hard"): ?> 
                          
                          <?php echo $__env->make('layouts.expert-hard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                      <?php elseif($game->level === "Medium" || $game->level === "Easy"): ?>

                          <?php echo $__env->make('layouts.medium-easy', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                      <?php else: ?>

                          <?php echo $__env->make('layouts.beginner', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                      <?php endif; ?>

                        <br/>

                        <br/>

                        <div align="center">
                          <a class="btn btn-info" href='<?php echo e(route('game.edit', $game->id)); ?>' >Edit</a>
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