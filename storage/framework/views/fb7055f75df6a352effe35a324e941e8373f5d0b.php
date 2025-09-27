  

<?php $__env->startSection('content'); ?>


<div>
    <h1>Edit post</h1>
    <form action= "<?php echo e(route('posts.update' ,$post->id)); ?>"method="POST"  enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
         <label for="title">عنوان</label>
        <input type="text" name="title" id="title" value="<?php echo e(old('title', $post->title)); ?>" required>
        <br>
        <br>
        <label for="category_id">دسته‌بندی</label>
            <select name="category_id" id="category_id" required>
                <option value="">انتخاب دسته بندی</option>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>" <?php echo e(old('category_id', $post->category_id) == $category->id ? 'selected' : ''); ?>>
                        <?php echo e($category->name); ?></option> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
            </select>
        <br>
        <br>
        <label for="author">نویسنده</label>
        <input type="text" name="author" id="author"  value="<?php echo e(old('author', $post->author)); ?>"  required>
          <br>
          <br>
        <label for="image" class="form-label">تصویر</label>
        <input type="file" name="image" id="image">
          <br>
          <br>
        <label for="excerpt" >خلاصه</label>
        <textarea name="excerpt" id="excerpt"  rows="3"><?php echo e(old('excerpt', $post->excerpt)); ?></textarea>
          <br>
          <br>
         <label for="content" class="form-label">محتوا</label>
        <textarea name="content" id="content"  rows="6" required><?php echo e(old('content', $post->content)); ?></textarea>

          <br>
          <br>
          <button type="submit" class="btn btn-success">ذخیره پست</button>
          <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary">انصراف</a>
    </form>     
</div>
      


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user\Desktop\digital\DigitalPulse\resources\views/posts/edit.blade.php ENDPATH**/ ?>