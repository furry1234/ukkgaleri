
<?php $__env->startSection('title', 'Detail Foto'); ?>
<?php $__env->startSection('heading', 'Detail Foto'); ?>
<?php $__env->startSection('link_text', 'Kembali'); ?>
<?php $__env->startSection('link', '/post'); ?>

<?php $__env->startSection('content'); ?>

<div class="row my-4">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <img src="<?php echo e(asset('storage/images/'.$post->image)); ?>" class="img-fluid card-img-top">
      <div class="card-body p-5">
        <div class="d-flex justify-content-between align-items-center">
          <p class="btn btn-dark rounded-pill"><?php echo e($post->category); ?></p>
          <p class="lead"><?php echo e(\Carbon\Carbon::parse($post->created_at)->diffForHumans()); ?></p>
        </div>

        <hr>
        <h3 class="fw-bold text-default"><?php echo e($post->title); ?></h3>
        <p><?php echo e($post->content); ?></p>
      </div>
      <div class="card-footer px-5 py-3 d-flex justify-content-end">
        <a href="/post/<?php echo e($post->id); ?>/edit" class="btn btn-success rounded-pill me-2">Edit</a>
        <form action="/post/<?php echo e($post->id); ?>" method="POST">
          <?php echo csrf_field(); ?>
          <?php echo method_field('DELETE'); ?>
          <button type="submit" class="btn btn-danger rounded-pill">Hapus</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ukk rpl\resources\views\show.blade.php ENDPATH**/ ?>