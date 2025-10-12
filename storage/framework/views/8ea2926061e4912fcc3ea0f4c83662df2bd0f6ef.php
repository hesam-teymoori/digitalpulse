

<?php $__env->startSection('content'); ?>
  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb p-3 mt-3">
      <li class="breadcrumb-item">
        <a href="/">
          <i class="bi bi-house-door-fill text-primary"></i>
            <span class="visually-hidden">خانه</span>
        </a>
      </li>
      <li class="breadcrumb-item"></li>
      <?php if(isset($category)): ?>
        <li class="breadcrumb-item active" aria-current="page">
          <a href="<?php echo e(route('categories.show', $category->id)); ?>">
            <?php echo e($category->name); ?>

          </a>
        </li>
      <?php endif; ?>
      <?php if(isset($post)): ?>
        <li class="breadcrumb-item active" aria-current="page">
          <?php echo e($post->title); ?>

        </li>
      <?php endif; ?>
    </ol>
  </nav>
  <!-- Category Header -->
  <div class="d-flex align-items-center justify-content-start mb-3">
    <h1 class="me-4"><?php echo e($category->name); ?></h1>
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle me-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          تغییرات
        </button>
        <ul class="dropdown-menu text-end">
          <li>
            <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="dropdown-item">
              ویرایش دسته‌بندی
            </a>
          </li>
          <li>
            <button type="submit" class="dropdown-item text-danger p-2 m-0 border-0 bg-transparent" data-bs-toggle="modal" data-bs-target="#deleteModal">
              حذف
            </button>
          </li>
        </ul>
      </div>
  </div>
   <!-- Modal تایید حذف -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title ms-2" id="deleteModalLabel">تایید حذف</h5>
        </div>
        <div class="modal-body">
          آیا از حذف این دسته‌بندی مطمئن هستید؟
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">لغو</button>
          <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" class="d-inline">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
           <button type="submit" class="btn btn-danger">حذف</button>
          </form>
       </div>
     </div>
   </div>
 </div>

  <!-- Posts Section -->
  <div>
    <?php if($posts->count()): ?>
      <div class="container py-5">
        <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3 d-none d-md-flex">
          <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
              <div class="card h-100 shadow-sm rounded-4 shadow-lg overflow-hidden">
                <a href="<?php echo e(route('posts.show', $post->id)); ?>">
                  <img
                    src="<?php echo e(asset('storage/'.$post->image)); ?>"
                    alt="<?php echo e($post->title); ?>"
                    class="card-img-top fixed-image"
                  >
                </a>

                <div class="card-body">
                  <?php if($post->category): ?>
                    <span class="category-label mb-2">
                     <?php echo e($post->category->name); ?>

                    </span>
                  <?php endif; ?>

                  <h5 class="card-title text-primary">
                    <?php echo e($post->title); ?>

                  </h5>

                  <p class="card-text text-muted">
                   <?php echo e(\Illuminate\Support\Str::limit($post->excerpt, 150, '...')); ?>

                  </p>
                </div>

                <div class="card-footer bg-transparent border-top-0 d-flex justify-content-between align-items-center">
                  <small class="text-muted"><?php echo e($post->author); ?></small>
                    <small class="text-muted">
                      <?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?>

                    </small>
                </div>

                <div class="card-footer bg-transparent border-top-0">
                  <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary w-100">
                    بیشتر بخوانید
                  </a>
                </div>
              </div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      
      <div class="row d-md-none">
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   
     <div class="col-12 mb-3 position-relative mt-5">
       <div class="d-flex align-items-center border-bottom pb-4">
         <img src="<?php echo e(asset('storage/'.$post->image)); ?>" alt="<?php echo e($post->title); ?>" class="flex-shrink-0 rounded-3 position-absolute top-0 start-0  ms-4" style="width: 100px; height: 80px; object-fit: cover;">
         <div class="ms-3">
           <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="text-decoration-none">
           <h6 class="mb-1 text-primary-emphasis mt-3 me-2" style="font-size: 0.9rem;"><?php echo e($post->title); ?></h6>
           </a>
           <small class="text-muted d-block mt-4 me-2"><?php echo e(\Morilog\Jalali\Jalalian::fromCarbon($post->created_at)->format('d F Y')); ?></small>
         </div>
       </div>
      </div>
    
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    <div class="d-flex justify-content-center mt-4">
    <?php echo e($posts->links('pagination::bootstrap-4')); ?>

    </div>
    <?php else: ?>
    <div class="container text-center mt-5">
      <img src="<?php echo e(asset('images/no posts.png')); ?>" class="img-fluid " alt="تصویر شما"
      width="500" height="500">
    <p class="text-secondary mb-3 fs-5">هیچ پستی در این دسته وجود ندارد</p>
    </div>
    <?php endif; ?>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/category/show.blade.php ENDPATH**/ ?>