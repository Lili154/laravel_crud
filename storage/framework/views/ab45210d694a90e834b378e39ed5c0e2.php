<?php $__env->startSection('content'); ?>
<div class="container" style="margin-top: 20px;">
    <h1><?php echo e($article->title); ?></h1>
    <p><strong>Status:</strong> <?php echo e($article->status); ?></p>
    <p><strong>Создано:</strong> <?php echo e($article->created_at->format('d.m.Y H:i')); ?></p>
    <hr>
    <p><?php echo e($article->content); ?></p>

    <a href="<?php echo e(route('articles.index')); ?>" class="btn btn-primary">Back to articles</a>
</div>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\userdata\crud\resources\views/articles/show.blade.php ENDPATH**/ ?>