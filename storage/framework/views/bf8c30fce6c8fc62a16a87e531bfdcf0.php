<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- meta untuk SEO -->

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
        <!-- Include Pikaday CSS -->
        <link rel="stylesheet" href="path/to/pikaday.css">

        <!-- Include Pikaday JavaScript -->
        <script src="path/to/pikaday.js"></script>

        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/tw-elemets/dist/js/index.min.js"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen bg-gray-100">
            <?php echo $__env->make('layouts.navigationhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <main>
                <?php echo e($slot); ?>

            </main>
        </div>
    </body>
</html>
<?php /**PATH D:\INFORMATIKA ITS\SEM 5\PWEB\ETS\EF234301_WEBPRO-E-_MID_5025211023_Wan-Sabrina-Mayzura_5025211036_Mashita-Dewi-main\resources\views/layouts/home-layout.blade.php ENDPATH**/ ?>