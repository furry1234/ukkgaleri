
<?php $__env->startSection('title', 'Edit Foto'); ?>
<?php $__env->startSection('heading', 'Edit Foto'); ?>
<?php $__env->startSection('link_text', 'Batal'); ?>
<?php $__env->startSection('link', '/post'); ?>

<?php $__env->startSection('content'); ?>

<div class="row my-3">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-header bg-primary">
        <h3 class="text-light fw-bold">Edit Post</h3>
      </div>
      <div class="card-body p-4">
        <form action="/post/<?php echo e($post->id); ?>" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PUT'); ?>
          <div class="my-2">
            <input type="text" name="title" id="title" class="form-control" placeholder="Isi judul foto" value="<?php echo e($post->title); ?>" required>
          </div>

          <div class="my-2">
            <input type="text" name="category" id="category" class="form-control" placeholder="Kategori" value="<?php echo e($post->category); ?>" required>
          </div>

          <div class="my-2">
            <input type="file" name="file" id="file" accept="image/*" class="form-control">
          </div>

          <img src="<?php echo e(asset('storage/images/'.$post->image)); ?>" class="img-fluid img-thumbnail" width="150">

          <div class="my-2">
            <textarea name="content" id="content" rows="6" class="form-control" placeholder="Deskripsi foto" required><?php echo e($post->content); ?></textarea>
          </div>

          <div class="my-2">
            <input type="submit" value="Simpan" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ukk rpl\resources\views/edit.blade.php ENDPATH**/ ?>