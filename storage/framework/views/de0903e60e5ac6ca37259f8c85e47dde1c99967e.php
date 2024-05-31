<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/animate.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/aos.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo e(asset('dashboard')); ?>/css/style.css">
</head>

<body>
    <?php if (isset($component)) { $__componentOriginal1cea7d1ff72b70a7bd793b1ce585ef71b0389fe9 = $component; } ?>
<?php $component = App\View\Components\NavbarUserLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar-user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\NavbarUserLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1cea7d1ff72b70a7bd793b1ce585ef71b0389fe9)): ?>
<?php $component = $__componentOriginal1cea7d1ff72b70a7bd793b1ce585ef71b0389fe9; ?>
<?php unset($__componentOriginal1cea7d1ff72b70a7bd793b1ce585ef71b0389fe9); ?>
<?php endif; ?>

    <main>
        <?php echo e($slot); ?>

    </main>

    <?php if (isset($component)) { $__componentOriginalb79e5d2f9c738115d4b524ab6562f9a7f8ace0e9 = $component; } ?>
<?php $component = App\View\Components\FooterUserLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer-user-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FooterUserLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb79e5d2f9c738115d4b524ab6562f9a7f8ace0e9)): ?>
<?php $component = $__componentOriginalb79e5d2f9c738115d4b524ab6562f9a7f8ace0e9; ?>
<?php unset($__componentOriginalb79e5d2f9c738115d4b524ab6562f9a7f8ace0e9); ?>
<?php endif; ?>




    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

        <div class="modal fade" id="loginSuccessModal" tabindex="-1" role="dialog" aria-labelledby="loginSuccessModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginSuccessModalLabel">Login Berhasil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo e(session('success')); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/popper.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.stellar.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/aos.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.animateNumber.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/jquery.timepicker.min.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/google-map.js"></script>
    <script src="<?php echo e(asset('dashboard')); ?>/js/main.js"></script>


    <script>
        $(document).ready(function() {
            <?php if(session('success')): ?>
                alert("<?php echo e(session('success')); ?>");
            <?php endif; ?>
        });
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\projek2\resources\views/layouts/user-layout.blade.php ENDPATH**/ ?>