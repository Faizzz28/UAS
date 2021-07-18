<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('mahasiswa.partials.header', ['title' => __('Tambah Data')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0"><?php echo e(__('Tambah Data Mahasiswa')); ?></h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="<?php echo e(route('mahasiswa')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Back to Board')); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo e(route('mahasiswa.store')); ?>" autocomplete="off">
                            <?php echo csrf_field(); ?>
                            
                            <h6 class="heading-small text-muted mb-4"><?php echo e(__('')); ?></h6>
                            <div class="pl-lg-4">
                                <div class="form-group<?php echo e($errors->has('nama') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Nama')); ?></label>
                                    <input type="text" name="nama" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('nama') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Nama')); ?>" value="<?php echo e(old('nama')); ?>" required autofocus>

                                    <?php if($errors->has('nama')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('nama')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('alamat') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Alamat')); ?></label>
                                    <input type="text" name="alamat" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('alamat') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Alamat')); ?>" value="<?php echo e(old('alamat')); ?>" required autofocus>

                                    <?php if($errors->has('alamat')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('alamat')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('alamat') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Tempat Lahir')); ?></label>
                                    <input type="text" name="tmp_lahir" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('tmp_lahir') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Tempat Lahir')); ?>" value="<?php echo e(old('tmp_lahir')); ?>" required autofocus>

                                    <?php if($errors->has('tmp_lahir')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('tmp_lahir')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('alamat') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Tanggal Lahir')); ?></label>
                                    <!-- <input type="text" name="tgl_lahir" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('tgl_lahir') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Tanggal Lahir')); ?>" value="<?php echo e(old('tgl_lahir')); ?>" required autofocus> -->
                                    <input type="date" id="tgl_lahir" name="tgl_lahir" value="<?php echo date('Y-m-d'); ?>" required autofocus>
                                    
                                    <?php if($errors->has('tgl_lahir')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('tgl_lahir')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>

                                <div class="form-group<?php echo e($errors->has('jk') ? ' has-danger' : ''); ?>">
                                    <label class="form-control-label" for="input-name"><?php echo e(__('Jenis Kelamin')); ?></label>
                                    <input type="text" name="jk" id="input-name" class="form-control form-control-alternative<?php echo e($errors->has('jk') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Jenis Kelamin')); ?>" value="<?php echo e(old('jk')); ?>" required autofocus>

                                    <?php if($errors->has('jk')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('jk')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                                
                                
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4"><?php echo e(__('Save')); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luqni/projek-task-manajer-rma/resources/views/mahasiswa/create.blade.php ENDPATH**/ ?>