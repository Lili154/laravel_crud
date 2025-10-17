<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Articles</h1>
        <a href="<?php echo e(route('articles.create')); ?>" class="btn btn-primary mb-3">Create New Article</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($article->id); ?></td>
                        <td><?php echo e($article->title); ?></td>
                        <td><?php echo e($article->status); ?></td>
                        <td><?php echo e($article->created_at->format('d.m.Y H:i')); ?></td>
                        <td><?php echo e($article->updated_at->format('d.m.Y H:i')); ?></td>
                        <td>
                            <a href="<?php echo e(route('articles.show', $article)); ?>" class="btn btn-info btn-sm">View</a>
                            <a href="<?php echo e(route('articles.edit', $article)); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <form action="<?php echo e(route('articles.destroy', $article)); ?>" method="POST" style="display:inline-block;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\userdata\crud\resources\views/articles/index.blade.php ENDPATH**/ ?>