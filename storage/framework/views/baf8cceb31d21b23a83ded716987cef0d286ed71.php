<?php $__env->startSection('content'); ?>
<div  class="container-fluid my-4">
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-none d-md-flex">
  
   <?php $__currentLoopData = $posts->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  
  <div class="col">
    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover"
         style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');
          background-size: cover;
           background-position: center;">
      <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1 bg-dark bg-opacity-25">
        <h3 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-3">
            <?php echo e($post->title); ?>

        </h3> 
        <ul class="d-flex list-unstyled mt-auto small justify-content-start">
          <li class=" d-flex align-items-center ms-3">
                 <span class="ms-2"><?php echo e($post->author); ?></span>
          </li>
          <li class="d-flex align-items-center ms-3">
            <i class="bi bi-calendar3 me-1"></i>
            <small><?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?></small>
          </li>
        </ul>
      </div>
    </div>
    </a>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- موبایل: اسکرول افقی -->
  <div class="d-md-none">
    <div class="horizontal-scroll">
      <?php $__currentLoopData = $posts->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="scroll-item">
        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover"
              style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');
                    background-size: cover;
                    background-position: center;">
            <div class="d-flex flex-column h-100 p-4 pb-3 text-white bg-dark bg-opacity-25">
              <h3 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-5"><?php echo e($post->title); ?></h3>
              <ul class="d-flex list-unstyled mt-auto small justify-content-start">
                <li class="d-flex align-items-center ms-3">
                  <span class="ms-2"><?php echo e($post->author); ?></span>
                </li>
                <li class="d-flex align-items-center ms-3">
                  <i class="bi bi-calendar3 me-1"></i>
                  <small><?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?></small>
                </li>
              </ul>
            </div>
          </div>
        </a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </div>

</div>



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