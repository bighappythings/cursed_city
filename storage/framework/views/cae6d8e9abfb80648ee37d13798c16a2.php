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
    <h2><?php echo e($hero->name); ?></h2>

    <div class="bg-gray-200 p-4 rounded">
        <p>Attributes: <?php echo e($hero->attributes); ?></p>
        <p>Size: <?php echo e($hero->size); ?></p>
        <p>Move: <?php echo e($hero->move); ?></p>
        <p>Agility: <?php echo e($hero->agility); ?></p>
        <p>Defence: <?php echo e($hero->defence); ?></p>
        <p>Vitality: <?php echo e($hero->vitality); ?></p>
        <p>Wounds: <?php echo e($hero->wounds); ?></p>
        <p>Weapons: <?php echo e($hero->weapons); ?></p>
        <p>Dice: <?php echo e($hero->dice); ?></p>
        <p>Abilities: <?php echo e($hero->abilities); ?></p>
        <p>Inspiration: <?php echo e($hero->inspiration); ?></p>
    </div>

    <form action="<?php echo e(route('heroes.destroy', $hero->id)); ?>" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this hero?');">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn my-4">Delete Hero</button>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/heroes/show.blade.php ENDPATH**/ ?>