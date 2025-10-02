<?php $__env->startSection('content'); ?>



<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <h2><?php echo e($category->name); ?></h2>

    <?php if($category->posts->count()): ?>
        <ul>
            <?php $__currentLoopData = $category->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="<?php echo e(route('posts.show', $post->id)); ?>">
                        <?php echo e($post->title); ?>

                    </a>
                    <p><?php echo e(Str::limit($post->excerpt, 100)); ?></p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>هیچ پستی در این دسته وجود ندارد.</p>
    <?php endif; ?>

    <a href="<?php echo e(route('categories.show', $category->id)); ?>">مشاهده همه پست‌های <?php echo e($category->name); ?></a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

     <?php if(session('mssg')): ?>
    <div>
        <?php echo e(session('mssg')); ?>

    </div>
    <?php endif; ?>
     
    <?php if(session('success')): ?>
    <div>
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
    




<?php $__env->stopSection(); ?>    

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/home.blade.php ENDPATH**/ ?>