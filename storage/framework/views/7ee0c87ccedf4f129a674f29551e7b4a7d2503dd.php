

<?php $__env->startSection('content'); ?>

<div>
    <h1>ایجاد دسته‌بندی جدید</h1>
    <form action="<?php echo e(route('categories.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="name">نام دسته‌بندی</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>
        <br><br>

        <label for="slug">Slug دسته‌بندی</label>
        <input type="text" name="slug" id="slug" value="<?php echo e(old('slug')); ?>" required>
        <br><br>

        <button type="submit" >ذخیره دسته‌بندی</button>
        <a href="<?php echo e(route('home')); ?>" >انصراف</a>
    </form>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/category/create.blade.php ENDPATH**/ ?>