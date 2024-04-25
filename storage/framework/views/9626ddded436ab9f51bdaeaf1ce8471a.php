
<?php $__env->startSection('title', 'Galeri'); ?>
<?php $__env->startSection('heading', 'Galeri'); ?>
<?php $__env->startSection('link_text', 'Unggah Foto'); ?>
<?php $__env->startSection('link', '/post/create'); ?>


<?php $__env->startSection('content'); ?>

<?php if(session('message')): ?>
<div class="alert alert-<?php echo e(session('status')); ?> alert-dismissible fade show" role="alert">
  <strong><?php echo e(session('message')); ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<div class="row g-4 mt-1">
  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="col-lg-4">

      <div class="card shadow">
        <a href="post/<?php echo e($row->id); ?>">
          <img src="<?php echo e(asset('storage/images/' . $row->image)); ?>" class="card-img-top img-fluid">
        </a>
        <div class="card-body">
          <p class="btn btn-success rounded-pill btn-sm"><?php echo e($row->category); ?></p>
          <div class="card-title fw-bold text-default h4"><?php echo e($row->title); ?></div>
          <p class="text-secondary"><?php echo e(Str::limit($row->content, 100)); ?></p>
        </div>
      </div>

  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <h2 class="text-center text-secondary p-4">Belum ada foto</h2>
  <?php endif; ?>
  <div class="d-flex justify-content-center my-5">
    <?php echo e($posts->onEachSide(1)->links()); ?>

  </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ukk rpl\resources\views/index.blade.php ENDPATH**/ ?>