<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursed City</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body>
    <?php if(session('success')): ?>
        <div id="flash" class="text-center bg-green-500 text-green-50 p-4 font-bold">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <header>
        <nav>
            <h1>Cursed City</h1>
            <a href="<?php echo e(route('enemies.index')); ?>" class="btn">All Enemies</a>
            <a href="<?php echo e(route('enemies.create')); ?>" class="btn">Create New Enemy</a>
            <a href="<?php echo e(route('heroes.index')); ?>" class="btn">All Heroes</a>
            <a href="<?php echo e(route('heroes.create')); ?>" class="btn">Create New Hero</a>
        </nav>
    </header>

    <main class="container">
        <?php echo e($slot); ?>

    </main>

</body>

</html><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/components/layout.blade.php ENDPATH**/ ?>