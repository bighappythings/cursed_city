<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursed City</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="text-center px-8 py-12">
    <h1>Cursed City</h1>
    <p>Click the button below to view the full list of enemies.</p>
    <a href="/enemies" class="btn">Find Enemies</a>
</body>

</html><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/welcome.blade.php ENDPATH**/ ?>