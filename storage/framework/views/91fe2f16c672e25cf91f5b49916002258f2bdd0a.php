<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
            <i class="ni ni-air-baloon text-white"></i>
            <span class="h8 font-weight-bold mb-0 text-white">Your Team Boards</span>
            <br><br><br><br><br>
            <div class="col-12">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <?php echo e(session('status')); ?>

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                <!-- Card stats -->
            <div class="row">
                <?php $__currentLoopData = $boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $board): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-3 col-lg-6">
                <div class="card-custom card-stats mb-4 mb-xl-0" data-clickable="true"><a href="<?php echo e(url('/board/card/' .$board->id)); ?>">
                    <?php if(auth()->user()->id == 2): ?>
                        <div class="card-header-custom text-right">
                            <div class="dropdown">
                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Menu">
                                    <i class="fas fa-ellipsis-v"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <form action="<?php echo e(route('board.destroy', $board->id)); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('delete'); ?>
                                        <a class="dropdown-item" href="<?php echo e(url('/board/card/' .$board->id)); ?>"><?php echo e(__('View')); ?></a>
                                            <a class="dropdown-item" href="#"><?php echo e(__('Edit')); ?></a>
                                            <button type="button" class="dropdown-item" onclick="confirm('<?php echo e(__("Are you sure you want to delete board $board->name ?")); ?>') ? this.parentElement.submit() : ''">
                                                <?php echo e(__('Delete')); ?>

                                            </button>
                                        </form>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <div class="row2">
                                <div class="col">
                                <span class="span-content h5 text-uppercas" >Board Title</span>
                                <span class="h5 text-uppercase font-weight-bold mb-0"><?php echo e($board->name); ?></span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape <?php echo e($board->bg_icon); ?> text-white rounded-circle shadow">
                                    <i class="<?php echo e($board->icons); ?>"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(auth()->user()->id == 2 ): ?>
                <div class="col-xl-3 col-lg-6">
                    <div class="card-custom card-stats mb-4 mb-xl-0" data-clickable="true"><a href="board/create">
                        <div class="card-body">
                            <div class="row3">
                                <h4 class="center-content">+ Create New Board</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            </div>
        </div>
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luqni/projek-task-manajer-rma/resources/views/board/index.blade.php ENDPATH**/ ?>