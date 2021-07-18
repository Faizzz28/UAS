<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid mt--7">
        <div class="row">
        <?php $__currentLoopData = $board; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
            <i class="ni ni-air-baloon text-white"></i>
            <span class="h2 font-weight-bold mb-0 text-white"><?php echo e($a->name); ?> Board</span>
            <br><br><br><br>
            <nav aria-label="breadcrumb-custom">
            <ol class="breadcrumb-custom">
                <li class="breadcrumb-item"><a href="home">Home</a></li>
                <li class="breadcrumb-item"><a href="/board">Board</a></li>
                <li class="breadcrumb-item active" aria-current="page">Your Card</li>
            </ol>
            </nav>
                <!-- Card stats -->
            <div class="row">
            <?php $__currentLoopData = $a->card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <!-- tes -->
                    <div class="col-lg-4 col-md-5">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-body px-lg-4 py-lg-4">
                            <form  action="<?php echo e(route('card.destroy', $b->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="button" class="icon-custome icon-shape-custome bg-danger text-white rounded-circle shadow" onclick="confirm('<?php echo e(__("Are you sure you want to delete Card $b->name ?")); ?>') ? this.parentElement.submit() : ''">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                            <div class="text-muted text-center mt-2 mb-3"><?php echo e($b->name); ?> <br/>
                            <?php if(strtotime($b->due_on) > strtotime("now")): ?>
                            <span class="text-muted-green text-center mt-2 mb-3-custome">Deadline: <?php echo e(date('j F Y', strtotime ($b->due_on))); ?>

                            </span></div>
                            <?php else: ?>
                            <span class="text-muted-red text-center mt-2 mb-3-custome">Deadline: <?php echo e(date('j F Y', strtotime ($b->due_on))); ?>

                            </span><span class="text-muted-black text-center mt-2 mb-3-custome">Expired!
                            </span></div>
                            <?php endif; ?>
                                <form method="post" action="<?php echo e(route('task.store')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <div class="form-group mb-3">
                                        <div class="input-group input-group-alternative">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                            </div>
                                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="Add your Task" required autofocus>
                                            <input type="hidden" name="card_id" id="input-card-id" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e($b->id); ?>">
                                            <input type="hidden" name="user_id" id="input-user-id" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e(auth()->user()->id); ?>">
                                            <?php if(auth()->user()->id == $b->user_id || auth()->user()->id == 2): ?>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary btn-sm "><?php echo e(__('ADD')); ?></button>
                                            </div>
                                            <?php else: ?>
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary btn-sm" disabled><?php echo e(__('ADD')); ?></button>
                                            </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </form>
                                <div class="card-custom card-stats mb-4 mb-xl-0" >
                                   <?php echo $__env->make('task.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- batas -->
                <?php if(!$a->card->isEmpty()): ?>
                <?php if( auth()->user()->id == $b->user_id || auth()->user()->id == 2 ): ?>
                <div class="col-lg-4 col-md-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-4 py-lg-4">
                            <div class="card-custom card-stats mb-4 mb-xl-0" type="button" data-toggle="modal" data-target="#exampleModal">
                                <div class="card-body">
                                    <div class="row">
                                    <h4 class="center-content">+ Create New Card</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!-- Batas -->
                </div>
                </a>
                <?php endif; ?>
                <?php else: ?>
                <?php if( auth()->user()->id == $a->user_id || auth()->user()->id == 2 ): ?>
                <div class="col-lg-4 col-md-5">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-body px-lg-4 py-lg-4">
                        <div class="card-custom card-stats mb-4 mb-xl-0" type="button" data-toggle="modal" data-target="#exampleModal">
                                <div class="card-body">
                                    <div class="row">
                                    <h4 class="center-content">+ Create New Card</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!-- Batas -->
                </div>
                </a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        </div>
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php $__currentLoopData = $board; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form method="post" action="<?php echo e(route('card.store')); ?>" autocomplete="off">
            <?php echo csrf_field(); ?>
            
            <h6 class="heading-small text-muted mb-4"><?php echo e(__('Detail Card')); ?></h6>
            <div class="pl-lg-4">
                <div class="form-group<?php echo e($errors->has('name') ? ' has-danger' : ''); ?>">
                    <label class="form-control-label" for="input-name"><?php echo e(__('Name')); ?></label>
                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Name')); ?>" value="<?php echo e(old('name')); ?>" required autofocus>

                    <?php if($errors->has('name')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
                    <label class="form-control-label" for="input-name"><?php echo e(__('Deadline')); ?></label>
                    <input name="due_on" class="due_on form-control form-control-alternative<?php echo e($errors->has('Deadline') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Deadline')); ?>" type="text" placeholder="<?php echo e(__('Deadline')); ?>">
                    <input type="hidden" name="board_id" id="input-card-id" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e($a->id); ?>">
                    <input type="hidden" name="user_id" id="input-card-id" class="form-control form-control-alternative<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" value="<?php echo e(auth()->user()->id); ?>">
                </div>
                <div class="modal-footer text-center">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $('.due_on').datepicker({
        format:'yyyy-mm-dd'
    });  
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luqni/projek-task-manajer-rma/resources/views/card/index.blade.php ENDPATH**/ ?>