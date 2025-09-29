

<?php $__env->startSection('content'); ?>


<h1>دسته‌بندی: <?php echo e($categories->name); ?></h1>

<?php if($posts->count()): ?>
    <ul>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a>
                <p><?php echo e(Str::limit($post->excerpt, 100)); ?></p>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php echo e($posts->links()); ?>

<?php else: ?>
    <p>هیچ پستی در این دسته وجود ندارد.</p>
<?php endif; ?>













<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/categories/show.blade.php ENDPATH**/ ?>