<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h2><?php echo e($enemy->name); ?></h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Type:</strong> <?php echo e($enemy->type->name); ?></p>
        <p><strong>Move:</strong> <?php echo e($enemy->move); ?></p>
        <p><strong>Wounds:</strong> <?php echo e($enemy->wounds); ?></p>
        <p><strong>Size:</strong> <?php echo e($enemy->size); ?></p>
        <p><strong>Weapons:</strong> <?php echo e($enemy->weapons); ?></p>
        <p><strong>Dice:</strong> <?php echo e($enemy->dice); ?></p>
        <p><strong>Damage:</strong> <?php echo e($enemy->damage); ?></p>
        <p><strong>Special Rules:</strong> <?php echo e($enemy->special_rules); ?></p>
        <p><strong>Behaviours:</strong> <?php echo e($enemy->behaviours); ?></p>
        <p><strong>Bio:</strong> <?php echo e($enemy->bio); ?></p>
    </div>

    <!--type info-->
    <div class="border-2 bg-white px-4 b4-4 my-4 rounded">
        <h3>Enemy Type Information</h3>
        <p><strong>Enemy Type:</strong> <?php echo e($enemy->type->name); ?></p>
        <p><strong>Type Attributes:</strong> <?php echo e($enemy->type->attributes); ?></p>
        <p><strong>Type Description:</strong></p>
        <p><?php echo e($enemy->type->description); ?></p>
    </div>

    <form action="<?php echo e(route('enemies.destroy', $enemy->id)); ?>" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this enemy?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn my-4">Delete Enemy</button>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/enemies/show.blade.php ENDPATH**/ ?>