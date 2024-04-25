<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
</head>

<body>
  <div class="container">
    <div class="row my-2">
      <div class="col-lg-12 d-flex justify-content-between align-items-center mx-auto">
        <div>
          <h2 class="text-primary"><?php echo $__env->yieldContent('heading'); ?></h2>
        </div>
        <div>
          <a href="<?php echo $__env->yieldContent('link'); ?>" class="btn btn-primary rounded-pill"><?php echo $__env->yieldContent('link_text'); ?></a>
        </div>

      </div>
    </div>
    <hr class="my-2">

    <?php echo $__env->yieldContent('content'); ?>

  </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\ukk rpl\resources\views\layouts\app.blade.php ENDPATH**/ ?>