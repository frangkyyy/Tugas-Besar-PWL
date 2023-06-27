<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
                <?php if(auth()->guard()->check()): ?>
                    <?php if(Auth::user()->hasRole('prodi')): ?>
                        <h1 class="m-0 text-dark">Dashboard Prodi</h1>
                    <?php elseif(Auth::user()->hasRole('mahasiswa')): ?>
                        <h1 class="m-0 text-dark">Dashboard Mahasiswa</h1>
                    <?php endif; ?>
                <?php endif; ?>

			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
	<div class="container-fluid">
        <ul>
            <?php if(auth()->guard()->check()): ?>
                <?php if(Auth::user()->hasRole('prodi')): ?>
                    <li><a href="<?php echo e(route('prodi.dkbs')); ?>">DKBS Mahasiswa</a></li>
                    <li><a href="<?php echo e(route('tawarMataKuliah')); ?>">Penawaran Mata Kuliah</a></li>
                    <li><a href="<?php echo e(route('mata_kuliah')); ?>">Daftar Mata Kuliah</a></li>
                <?php elseif(Auth::user()->hasRole('mahasiswa')): ?>
                    <li><a href="<?php echo e(route('dkbs')); ?>">DKBS</a></li>
                    <li><a href="<?php echo e(route('mk_tawar')); ?>">Perwalian</a></li>
                    <li><a href="<?php echo e(route('mata_kuliah')); ?>">Daftar Mata Kuliah</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
	</div><!-- /.container-fluid -->
</div>
<!-- /.content -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\resources\views/dashboard.blade.php ENDPATH**/ ?>