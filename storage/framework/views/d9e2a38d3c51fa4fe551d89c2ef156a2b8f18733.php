<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Starter</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Starter</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">

            
            <h1>Penawaran mata kuliah</h1>
            <form action="<?php echo e(route('storeMataKuliah')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <label for="mata_kuliah_id">Mata Kuliah:</label>
                <select name="mata_kuliah_id">
                    <?php $__currentLoopData = $mataKuliahList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mataKuliah): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($mataKuliah->id); ?>"><?php echo e($mataKuliah->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <br>
                <label for="proyek_pendidikan_id">Study Period:</label>
                <select name="proyek_pendidikan_id">
                    <?php $__currentLoopData = $proyekPendidikanList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyekPendidikan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($proyekPendidikan->id); ?>"><?php echo e($proyekPendidikan->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <br>
                <label for="kelas">Kelas:</label>
                <input type="text" name="kelas">
                <br>
                <label for="hari">Hari:</label>
                <input type="text" name="hari">
                <br>
                <label for="jam">Waktu:</label>
                <input type="text" name="jam">
                <br>
                <label for="kuota">Kuota Mahasiswa:</label>
                <input type="number" name="kuota">
                <br>
                <button type="submit">Tawarkan</button>
            </form>

        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/prodi/tawarmk.blade.php ENDPATH**/ ?>