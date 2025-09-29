

<?php $__env->startSection('content'); ?>

<h1>ویرایش دسته‌بندی</h1>

<form action="<?php echo e(route('categories.update', $category->id)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>

    <label for="name">نام دسته‌بندی</label>
    <input type="text" name="name" id="name" value="<?php echo e(old('name', $category->name)); ?>" required>
     <br>
     <br>
     <label for="slug">دسته بندی slug</label>
    <input type="text" name="slug" id="slug" value="<?php echo e(old('slug', $category->slug)); ?>" required>
      <br>
      <br>
    <button type="submit">ذخیره تغییرات</button>
    <a href="<?php echo e(route('home')); ?>">انصراف</a>
</form>








<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/category/edit.blade.php ENDPATH**/ ?>