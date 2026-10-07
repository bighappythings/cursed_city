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
    <h2>Create New Enemy</h2>

    <form action="<?php echo e(route('enemies.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <!-- Enemy Name -->
        <label for="name">Enemy Name:</label>
        <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>" required>

        <label for="move">Enemy Move:</label>
        <input type="text" id="move" name="move" value="<?php echo e(old('move')); ?>" required>

        <!-- Enemy Wounds -->
        <label for="wounds">Enemy Wounds:</label>
        <input type="text" id="wounds" name="wounds" value="<?php echo e(old('wounds')); ?>" required>

        <!-- Enemy Size -->
        <label for="size">Enemy Size:</label>
        <input type="text" id="size" name="size" value="<?php echo e(old('size')); ?>" required>

        <!-- Enemy Weapons -->
        <label for="weapons">Enemy Weapons:</label>
        <input type="text" id="weapons" name="weapons" value="<?php echo e(old('weapons')); ?>" required>

        <!-- Enemy Dice -->
        <label for="dice">Enemy Dice:</label>
        <input type="text" id="dice" name="dice" value="<?php echo e(old('dice')); ?>" required>

        <!-- Enemy Damage -->
        <label for="damage">Enemy Damage (0-100):</label>
        <input type="number" id="damage" name="damage" value="<?php echo e(old('damage')); ?>" required>

        <!-- Enemy Special Rules -->
        <label for="specialRules">Special Rules:</label>
        <input type="text" id="specialRules" name="specialRules" value="<?php echo e(old('specialRules')); ?>" required>

        <!-- Enemy Behaviours -->
        <label for="behaviours">Behaviours:</label>
        <input type="text" id="behaviours" name="behaviours" value="<?php echo e(old('behaviours')); ?>" required>

        <!-- Enemy Bio -->
        <label for="bio">Biography:</label>
        <textarea rows="5" id="bio" name="bio" required><?php echo e(old('bio')); ?></textarea>

        <!-- select an enemy type -->
        <label for="type_id">Enemy Type:</label>
        <select id="type_id" name="type_id" required>
            <option value="" disabled selected>Select an enemy type</option>
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->id); ?>" <?php echo e(old('type_id') == $type->id ? 'selected' : ''); ?>>
                    <?php echo e($type->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit" class="btn mt-4">Create Enemy</button>

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
<?php endif; ?><?php /**PATH C:\Users\mattw\herd\cursed_city\resources\views/enemies/create.blade.php ENDPATH**/ ?>