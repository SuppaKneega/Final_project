<?php $__env->startSection('content'); ?>
<h1>Recipe Finder</h1>

<div style="display: flex; justify-content: center; margin-top: 20px;">
    <form action="/search" method="get" onsubmit="return validateSearch()" style="display: flex; gap: 10px; flex-wrap: wrap; justify-content: center;">
        <input id="searchInput" type="text" name="q" placeholder="Type recipe name..." required
            style="padding: 10px; width: 300px; border-radius: 10px; border: none;">
        <button class="button" type="submit">Search</button>
    </form>
</div>

<br><br>
<div style="text-align: center;">
    <a href="/saved" class="link-button">View Saved Recipes</a>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\recipe_finder\resources\views/home.blade.php ENDPATH**/ ?>