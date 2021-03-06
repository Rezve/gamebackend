<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Gameboard   ::   List <a class="nav navbar-nav navbar-right" style="padding-right:10px;" href="<?php echo e(url('/game/create')); ?>">Create</a>
                </div>

                <div class="panel-body">

                    <table class="gameshow table table-bordered table-striped" align="center">
                          <thead>
                            <tr>
                             <th class="col-sm-2">ID</th>
                             <th class="col-sm-6">Name</th>
                             <th class="col-sm-2">View</th>
                             <th class="col-sm-2">Edit</th>
                            </tr>
                          </thead>
                          <tbody value='question'>
                          <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                           <tr> <td value='id'> <?php echo e($id++); ?> </td> <td value='name'> <?php echo e($d->name); ?> </td> <td value='view'> <a class="btn btn-primary" href='<?php echo e(route('game.show', $d->id)); ?>' >View</a> </td> <td value='edit'> <a class="btn btn-info" href='<?php echo e(route('game.edit', $d->id)); ?>' >Edit</a> </td></tr>  
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                         
                           </tbody>
                        </table>

                    <?php echo e($data->links()); ?>

 

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>