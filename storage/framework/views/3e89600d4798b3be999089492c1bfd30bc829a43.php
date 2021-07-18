<!-- Logic Progress Bar -->
<?php
$done = 0;
$total = 0;
$hasil = 0;
$belum = 0;
?>
<?php $__currentLoopData = $b->task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$total++;
?>
<?php if($t->is_done == 1): ?>
<?php
$done++;
?>
<!-- Selesai -->
<?php endif; ?>
<?php
$hasil = round($done/$total * 100);
$belum = 100 - $hasil;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?php echo e($hasil ?? ''); ?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo e($hasil ?? ''); ?>%</div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo e($belum ?? ''); ?>%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><?php echo e($belum ?? ''); ?>%</div>
</div>
<div class="card-body">
<div class="row2">
        <div class="col">
            <h5 class="card-title text-muted mb-0">List Task <?php echo e($b->name); ?></h5>
        </div>
    </div>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">
        <div class="col">
            <table>
                <tr>
                    <?php if($t->card_id == $b->id): ?>
                    <?php if($t->is_done == 1): ?>
                    <td><i class="ni ni-check-bold"></i></td>
                    <td  width="600px"><h5 class="done-true"> <?php echo e($t->name); ?> </h5> </td>
                    <?php else: ?>
                    <td><i class="ni ni-fat-remove"></i></td>
                    <td  width="600px"><h5> <?php echo e($t->name); ?> </h5> </td>
                    <?php endif; ?>
                    <td>
                        <?php if(auth()->user()->id == $b->user_id || auth()->user()->id == 2): ?>
                        <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Menu">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form action="<?php echo e(route('task.destroy', $t->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <a class="dropdown-item" href="<?php echo e(url('task/done/' .$t->id)); ?>"><?php echo e(__('Done')); ?></a>
                                            <!-- <a class="dropdown-item" href="#"><?php echo e(__('Done')); ?></a> -->
                                            <button type="button" class="dropdown-item" name="action" value="delete" onclick="confirm('<?php echo e(__("Are you sure you want to delete Task?")); ?>') ? this.parentElement.submit() : ''">
                                                <?php echo e(__('Delete')); ?>

                                            </button>
                                        </form>
                                        <!-- <button type="button" class="dropdown-item" name="action" value="done"><?php echo e(__('Done')); ?><a href="<?php echo e(url('/task/done/' .$t->id)); ?>"></a> -->
                                </div>
                            </div>
                        <!-- <button type="submit" class="btn btn-primary btn-sm "><?php echo e(__('Done')); ?></button> -->
                        <?php endif; ?>
                        </td>
                    <?php endif; ?>
                </tr>
            </table>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/luqni/projek-task-manajer-rma/resources/views/task/index.blade.php ENDPATH**/ ?>