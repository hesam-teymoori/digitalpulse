<form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
  <!-- Protects the form against CSRF attacks -->
  <?php echo csrf_field(); ?>
  <?php if($method === 'PUT'): ?>
    <?php echo method_field('PUT'); ?>
  <?php endif; ?>
   <!-- Title input field -->
  <div class="form-floating mb-3">
    <input
      type="text"
      class="form-control"
      id="title"
      name="title"
      placeholder="عنوان مقاله"
      value="<?php echo e(old('title', $post->title ?? '')); ?>"
      required
    >
    <label for="title" class="text-end" style="right: 0; left: auto; text-align: right;">
      عنوان مقاله
    </label>
  </div>
   <!-- Author name input field -->
  <div class="form-floating mb-3">
    <input
      type="text"
      class="form-control"
      id="author"
      name="author"
      placeholder="نام نویسنده"
      value="<?php echo e(old('author', $post->author ?? '')); ?>"
      required
    >
    <label for="author" class="text-end" style="right: 0; left: auto; text-align: right;">
      نویسنده
    </label>
  </div>
   <!-- Category selection dropdown -->
  <div class="form-floating mb-3">
    <select
      class="form-select"
      id="category_id"
      name="category_id"
      required
    >
      <option value="">انتخاب دسته‌بندی</option>
      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>"
          <?php echo e(old('category_id', $post->category_id ?? '') == $category->id ? 'selected' : ''); ?>>
          <?php echo e($category->name); ?>

        </option>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <label for="category_id" class="text-end" style="right: 0; left: auto; text-align: right;">
      دسته‌بندی
    </label>
  </div>
  <!-- Image upload field -->
  <div class="mb-3">
    <label for="image" class="form-label d-block text-end">تصویر مقاله</label>
      <input
        type="file"
        class="form-control"
        id="image"
        name="image"
      > 
  </div>
  <!-- Article excerpt textarea -->
  <div class="form-floating mb-3">
    <textarea
    class="form-control"
    placeholder="خلاصه مقاله را وارد کنید"
    id="excerpt"
    name="excerpt"
    style="height: 40px"
    ><?php echo e(old('excerpt', $post->excerpt ?? '')); ?></textarea>
    <label for="excerpt" class="text-end" style="right: 0; left: auto; text-align: right;">
      خلاصه مقاله
    </label>
  </div>
  <!-- Main article content textarea -->
  <div class="form-floating mb-3">
    <textarea
    class="form-control"
    placeholder="محتوای مقاله"
    id="content"
    name="content"
    style="height: 50px"
    required
    ><?php echo e(old('content', $post->content ?? '')); ?></textarea>
    <label for="content" class="text-end" style="right: 0; left: auto; text-align: right;">
      محتوای مقاله
    </label>
  </div>
  <!-- Submit and cancel buttons -->
  <div class="d-flex justify-content-between mt-4">
    <button type="submit" class="btn btn-primary">
      ذخیره پست
    </button>
    <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">
      انصراف
    </a>
  </div>
              
</form><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/layouts/form-post.blade.php ENDPATH**/ ?>