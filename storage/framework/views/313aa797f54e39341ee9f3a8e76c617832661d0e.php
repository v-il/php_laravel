<?php $__env->startSection('content'); ?>
    <h3>Edit Post by <?php echo e($post->author_email); ?></h3>
    <form action="<?php echo e(route('update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('patch'); ?>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Title"
                   value="<?php echo e($post->title); ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Post text</label>
            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"><?php echo e($post->text); ?></textarea>
        </div>

        <button type="submit" class="d-inline btn btn-primary mb-3">Update post</button>
        <a href="<?php echo e(route('index')); ?>" class="btn btn-secondary mb-3">Cancel</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\php_laravel\resources\views/edit.blade.php ENDPATH**/ ?>