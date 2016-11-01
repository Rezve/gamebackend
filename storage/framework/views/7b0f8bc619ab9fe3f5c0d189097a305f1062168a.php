                        <h3>Question:</h3>
                    
                        <div>           

                        <table class="gameview" align="center">
                          <tbody value='question'>

                           <tr>
                           <?php $__currentLoopData = $game->question->one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->three; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->four; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->five; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->six; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->seven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->eight; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->nine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->ten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->question->eleven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           
                           </tbody>
                        </table>

                        </div>

                        <br/>
                        <h3>Answer:</h3>
                        <div>
                        <table class="gameview" align="center">
                          <tbody value='answer'>
                           <tr>
                           <?php $__currentLoopData = $game->answer->one; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->two; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->three; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->four; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->five; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->six; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->seven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->eight; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->nine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->ten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>
                           <tr>
                           <?php $__currentLoopData = $game->answer->eleven; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                              <td><?php echo e($value); ?></td>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                           </tr>

                           </tbody>
                        </table>

                        </div>