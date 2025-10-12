

<?php $__env->startSection('content'); ?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb p-3 mt-3">    
      <li class="breadcrumb-item">
           <a href="/">
             <i class="bi bi-house-door-fill text-primary"></i>
             <span class="visually-hidden">خانه</span>
           </a>
       </li>
      <li class="breadcrumb-item">
      </li>
       <?php if(isset($category)): ?>
            <li class="breadcrumb-item active" aria-current="page">
                <a href="<?php echo e(route('categories.show', $category->id)); ?>">
                    <?php echo e($category->name); ?>

                </a>
            </li>
        <?php endif; ?>
        <li class="breadcrumb-item">
        </li>
        <?php if(isset($post)): ?>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo e($post->title); ?>

            </li>
        <?php endif; ?>
   </ol>
</nav>
<div class="post-detail">
    <h1><?php echo e($post->title); ?></h1>
    <p>نویسنده: <?php echo e($post->author); ?></p>
    
    

    <?php if($post->image): ?>
        <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->title); ?>" style="max-width: 100%;">
    <?php endif; ?>

    <div class="content">
        <?php echo nl2br(e($post->content)); ?>

    </div>

    <p>بازدید: <?php echo e($post->views); ?></p>

    <a href="<?php echo e(route('posts.edit', $post->id)); ?>">ویرایش پست</a>
  

  <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" >
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      <button type="submit" >حذف</button>
  </form>       


</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/posts/show.blade.php ENDPATH**/ ?>