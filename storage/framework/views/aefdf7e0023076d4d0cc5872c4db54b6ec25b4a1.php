<?php $__env->startSection('content'); ?>
    <a class="btn btn-secondary mb-4" href="<?php echo e(route('index')); ?>">Home</a>
    <a class="btn btn-primary mb-4" href="<?php echo e(route('create')); ?>">Create post</a>
    <form method="get" action="/">
        <div class="input-group mb-3 w-50">
            <input type="email" name="email" class="form-control" placeholder="E-mail">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

    </form>
    <div><?php echo e($posts->withQueryString()->links()); ?></div>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-4">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($post->title); ?></h5>
                <h6>Author: <?php echo e($post->author_email); ?></h6>
                <p class="card-text"><?php echo e($post->text); ?></p>
                <a class="btn btn-primary" href="<?php echo e(route('edit', $post->id)); ?>">Edit</a>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\php_laravel\resources\views/posts.blade.php ENDPATH**/ ?>