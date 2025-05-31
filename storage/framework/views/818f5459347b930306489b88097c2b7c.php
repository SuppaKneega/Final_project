<?php $__env->startSection('content'); ?>
<h2>Search Results</h2>
<a href="/">← Back to Home</a><br><br>

<?php if(count($meals) > 0): ?>
    <?php $__currentLoopData = $meals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin-bottom: 20px;">
            <h3><?php echo e($meal['strMeal']); ?></h3>
            <img src="<?php echo e($meal['strMealThumb']); ?>" width="250">
            <form class="save-form" method="POST" data-id="<?php echo e($meal['idMeal']); ?>">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="recipe_id" value="<?php echo e($meal['idMeal']); ?>">
                <input type="hidden" name="title" value="<?php echo e($meal['strMeal']); ?>">
                <input type="hidden" name="image_url" value="<?php echo e($meal['strMealThumb']); ?>">
                <br>
                <button class="button" type="submit">Save</button>
            </form>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <p>No recipes found.</p>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\recipe_finder\resources\views/search.blade.php ENDPATH**/ ?>