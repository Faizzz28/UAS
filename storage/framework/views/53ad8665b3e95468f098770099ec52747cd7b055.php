<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.headers.cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
            <i class="ni ni-air-baloon text-white"></i>
            <span class="h8 font-weight-bold mb-0 text-white">Data Mahasiwa Baru 2021</span>
            <br><br><br><br><br><br>
                <!-- Card stats -->
                <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                            <div class="card-header border-0">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0"><?php echo e(__('Data Mahaiswa')); ?></h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <a href="<?php echo e(route('mahasiswa.create')); ?>" class="btn btn-sm btn-primary"><?php echo e(__('Tambah Data')); ?></a>
                                    </div>
                                </div>
                            </div>
                            
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

                            <div class="table-responsive">
                            <div class="form-group mb-0 ">
                                <div class="input-group input-group-alternative thead-light">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                                    </div>
                                    <input id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Cari Berdasarkan Nama" type="text">
                                </div>
                            </div>
                                <table id="myTable" class="table align-items-center table-flush">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col"><?php echo e(__('Nama')); ?></th>
                                            <th scope="col"><?php echo e(__('Alamat')); ?></th>
                                            <th scope="col"><?php echo e(__('Tempat Lahir')); ?></th>
                                            <th scope="col"><?php echo e(__('Tanggal Lahir')); ?></th>
                                            <th scope="col"><?php echo e(__('Jenis Kelamin')); ?></th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($mahasiswa->nama); ?></td>
                                                <td><?php echo e($mahasiswa->alamat); ?></td>
                                                <td><?php echo e($mahasiswa->tmp_lahir); ?></td>
                                                <td><?php echo e($mahasiswa->tgl_lahir); ?></td>
                                                <td><?php echo e($mahasiswa->jk); ?></td>
                                                <td class="text-right">
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                <form action="<?php echo e(route('mahasiswa.destroy', $mahasiswa->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('delete'); ?>
                                                                    
                                                                    <a class="dropdown-item" href="<?php echo e(route('mahasiswa.edit', $mahasiswa->id)); ?>"><?php echo e(__('Edit')); ?></a>
                                                                    <button type="button" class="dropdown-item" onclick="confirm('<?php echo e(__("Are you sure you want to delete this cabang?")); ?>') ? this.parentElement.submit() : ''">
                                                                        <?php echo e(__('Delete')); ?>

                                                                    </button>
                                                                </form>    
                                                                
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer py-4">
                                <nav class="d-flex justify-content-end" aria-label="...">
                                    <?php echo e($mahasiswas->links()); ?>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('layouts.footers.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['title' => __('User Management')], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/luqni/projek-task-manajer-rma/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>