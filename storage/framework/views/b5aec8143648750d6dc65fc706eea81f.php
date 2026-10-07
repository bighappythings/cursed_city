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
    <h2>Create New Hero</h2>

    <form action="<?php echo e(route('heroes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Hero Name -->
        <label for="name">Hero Name:</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>

        <!-- Hero Attributes -->
        <label for="attributes">Hero Attributes:</label>
        <input type="text" id="attributes" name="attributes" value="<?php echo e(old('attributes')); ?>" required>

        <!-- Hero Size -->
        <label for="size">Hero Size:</label>
        <input type="text" id="size" name="size" value="<?php echo e(old('size')); ?>" required>

        <label for="move">Hero Move:</label>
        <input type="text" id="move" name="move" value="<?php echo e(old('move')); ?>" required>

        <label for="agility">Hero Agility:</label>
        <input type="text" id="agility" name="agility" value="<?php echo e(old('agility')); ?>" required>

        <label for="defence">Hero Defence:</label>
        <input type="text" id="defence" name="defence" value="<?php echo e(old('defence')); ?>" required>

        <label for="vitality">Hero Vitality:</label>
        <input type="text" id="vitality" name="vitality" value="<?php echo e(old('vitality')); ?>" required>

        <!-- Hero Wounds -->
        <label for="wounds">Hero Wounds:</label>
        <input type="text" id="wounds" name="wounds" value="<?php echo e(old('wounds')); ?>" required>

        <!-- Hero Weapons -->
        <label for="weapons">Hero Weapons:</label>
        <input type="text" id="weapons" name="weapons" value="<?php echo e(old('weapons')); ?>" required>

        <label for="abilities">Hero Abilities:</label>
        <input type="text" id="abilities" name="abilities" value="<?php echo e(old('abilities')); ?>" required>

        <label for="inspiration">Hero Inspiration:</label>
        <input type="text" id="inspiration" name="inspiration" value="<?php echo e(old('inspiration')); ?>" required>

        <button type="submit" class="btn mt-4">Create Hero</button>

        <!-- validation errors -->
        <?php if($errors->any()): ?>
            <ul class="px-4 py-2 bg-red-100">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="my-2 text-red-500"><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

        <?php endif; ?>

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
<?php endif; ?><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/heroes/create.blade.php ENDPATH**/ ?>