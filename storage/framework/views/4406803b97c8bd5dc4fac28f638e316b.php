<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('css/bookstore.css')); ?>">
    <title>Book Store</title>
    
    <?php if (isset($component)) { $__componentOriginal2a2e30ee7946b5afacadfde3b701b26e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2a2e30ee7946b5afacadfde3b701b26e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.script','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2a2e30ee7946b5afacadfde3b701b26e)): ?>
<?php $attributes = $__attributesOriginal2a2e30ee7946b5afacadfde3b701b26e; ?>
<?php unset($__attributesOriginal2a2e30ee7946b5afacadfde3b701b26e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2a2e30ee7946b5afacadfde3b701b26e)): ?>
<?php $component = $__componentOriginal2a2e30ee7946b5afacadfde3b701b26e; ?>
<?php unset($__componentOriginal2a2e30ee7946b5afacadfde3b701b26e); ?>
<?php endif; ?>
</head>
<body>

    <?php if(!request()->is('loginCustomer') && !request()->is('signup')): ?>
        <div class="container">
            <div class="row">
                <?php if (isset($component)) { $__componentOriginala591787d01fe92c5706972626cdf7231 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala591787d01fe92c5706972626cdf7231 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $attributes = $__attributesOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__attributesOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala591787d01fe92c5706972626cdf7231)): ?>
<?php $component = $__componentOriginala591787d01fe92c5706972626cdf7231; ?>
<?php unset($__componentOriginala591787d01fe92c5706972626cdf7231); ?>
<?php endif; ?>
            </div>
            <?php echo e($slot); ?>

        </div>

    <?php else: ?>
        <?php echo e($slot); ?>

    <?php endif; ?>
    
</body>
</html><?php /**PATH C:\Users\chynt\laragon\www\Bookstore\resources\views/components/layout.blade.php ENDPATH**/ ?>