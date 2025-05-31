<?php $__env->startSection('content'); ?>
<h2>Saved Recipes</h2>
<a href="/">← Back to Home</a><br><br>

<?php if(count($recipes) > 0): ?>
    <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-bottom: 20px;">
            <h3><?php echo e($recipe->title); ?></h3>
            <img src="<?php echo e($recipe->image_url); ?>" width="250">
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>No saved recipes yet.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\recipe_finder\resources\views/saved.blade.php ENDPATH**/ ?>