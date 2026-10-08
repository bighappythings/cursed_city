<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursed City</title>

    <link rel="stylesheet" href="resources/css/app.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>

<body>
    <?php if(session('success')): ?>
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <header>
        <nav>
            <h1>Cursed City</h1>
            <a class="btn btn-red" href="<?php echo e(route('enemies.index')); ?>"> All Enemies</a>
            <a class="btn btn-red" href="<?php echo e(route('enemies.create')); ?>">Create a new enemy</a>

            <a class="btn btn-red" href="<?php echo e(route('heroes.index')); ?>"> All Heroes</a>
            <a class="btn btn-red" href="<?php echo e(route('heroes.create')); ?>">Create a new hero</a>
        </nav>
    </header>

    <main class="container">
        <?php echo e($slot); ?>

    </main>

</body>

</html><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/components/layout.blade.php ENDPATH**/ ?>