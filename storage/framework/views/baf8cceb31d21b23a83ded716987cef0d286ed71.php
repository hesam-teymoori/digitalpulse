<?php $__env->startSection('content'); ?>
<div  class="container-fluid my-4">
  <!-- 🖥️ Desktop: 3x2 grid -->
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 d-none d-md-flex">
   <?php $__currentLoopData = $posts->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="col">
    <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
    <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg card-hover"
         style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');
          background-size: cover;
           background-position: center;">
      <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1 bg-dark bg-opacity-25">
        <h2 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-3">
            <?php echo e($post->title); ?>

        </h2> 
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

<!-- Mobile: Horizontal scroll -->
  <div class="d-md-none">
    <div class="horizontal-scroll">
      <?php $__currentLoopData = $posts->take(6); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="scroll-item">
        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
          <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4"
              style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');
                    background-size: cover;
                    background-position: center;">
            <div class="d-flex flex-column h-100 p-4 pb-3 text-white bg-dark bg-opacity-25">
              <h2 class="mt-auto mb-3 display-6 lh-1 fw-bold fs-5"><?php echo e($post->title); ?></h2>
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

<!-- Hottest Posts Section -->
<div class="containe-mt5 custom-bg rounded-4 mx-3">
    <h3 class="fs-5 mt-5 me-4 pt-4 text-primary-emphasis">داغ ترین های امروز</h3>
  <div class="row g-4 py-5 row-cols-2 row-cols-lg-4">
    <?php $__currentLoopData = $hotPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index =>  $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col d-flex align-items-start" style="<?php echo e(($index < count($hotPosts) - 1) ? 'border-left: 1px solid #bbb0b05b;' : ''); ?>" >
      <div>
        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
        <h3 class="fs-6 me-4 text-hot"><?php echo e($post->title); ?></h3>
        </a>
        <div class="small text-muted me-4">
          <i class="bi bi-calendar3 me-1"></i>
          <?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?>

        </div>
      </div>
      <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>"
      class="mx-3 rounded" style="width: 80px; height: 80px; object-fit:cover;">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<!-- New posts list section -->
<div class="container py-5">
  <h3 class="fs-3 mt-5 my-5 pt-4 text-primary-emphasis">تازه های امروز</h3>
  <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 d-none d-md-flex">
    <?php $__currentLoopData = $numberposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col">
      <div class="card h-100 shadow-sm rounded-4 shadow-lg  overflow-hidden">
        <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>"
      class="card-img-top fixed-image">
        <div class="card-body">
          <?php if($post->category): ?>
            <span class="category-label mb-2">
              <?php echo e($post->category->name); ?>

            </span>
          <?php endif; ?>
          <h5 class="card-title" style=" color: #025fb9"><?php echo e($post->title); ?></h5>
          <p class="card-text" style=" color: #72789c">
            <?php echo e(\Illuminate\Support\Str::limit($post->excerpt, 150, '...')); ?>

          </p>
        </div>
        <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center">
            <small class="text-muted"><?php echo e($post->author); ?></small>
            <small class="text-muted"><?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?></small>
        </div>
        <div class="card-footer bg-transparent border-top-0">
          <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary w-100">بیشتر بخوانید</a>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>

<!-- Mobile mode new posts list section -->
<div class="row d-md-none">
  <?php $__currentLoopData = $numberposts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <?php if($index == 0): ?>
     <div class="col">
       <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg list-card"
          style="background-image: url('<?php echo e(asset('storage/'.$post->image)); ?>');
          background-size: cover;
          background-position: center;">
          <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1 bg-dark bg-opacity-25">
           <h2 class="mt-auto mb-0 display-6 lh-1 fw-bold fs-3">
            <?php echo e($post->title); ?>

           </h2> 
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
    <?php else: ?>
     <div class="col-12 mb-3 position-relative mt-5">
       <div class="d-flex align-items-center border-bottom pb-4">
         <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>" class="flex-shrink-0 rounded-3 position-absolute top-0 start-0  ms-3" style="width: 100px; height: 80px; object-fit: cover;">
         <div class="ms-3">
           <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
           <h6 class="mb-1 text-primary-emphasis mt-3" style="font-size: 0.9rem;"><?php echo e($post->title); ?></h6>
           </a>
           <small class="text-muted d-block mt-4"><?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?></small>
         </div>
       </div>
      </div>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<!-- Paging button -->
<div class="d-flex justify-content-center mt-4">
  <?php echo e($numberposts->links('pagination::bootstrap-4')); ?>

</div>


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