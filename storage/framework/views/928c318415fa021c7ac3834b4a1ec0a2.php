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

    <form action=" <?php echo e(route('enemies.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <h2>Create New Enemy</h2>

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>" required>

        <label for="move">Move:</label>
        <input type="number" name="move" id="move" value="<?php echo e(old('move')); ?>">

        <label for="Wounds">Wounds:</label>
        <input type="number" name="wounds" id="wounds" value="<?php echo e(old('wounds')); ?>" required>


        <label for="Size">Size:</label>
        <input type="text" name="size" id="size" value="<?php echo e(old('size')); ?>">

        <label for="Weapons">Weapons:</label>
        <input type="text" name="weapons" id="weapons" value="<?php echo e(old('weapons')); ?>">

        <label for="Dice">Dice:</label>
        <input type="text" name="dice" id="dice" value="<?php echo e(old('dice')); ?>">

        <label for="Damage">Damage:</label>
        <input type="text" name="damage" id="damage" value="<?php echo e(old('damage')); ?>">

        <label for="SpecialRules">Special Rules:</label>
        <input type="text" name="specialRules" id="specialRules" value="<?php echo e(old('specialRules')); ?>">

        <label for="Behaviours">Behaviours:</label>
        <input type="text" name="behaviours" id="behaviours" value="<?php echo e(old('behaviours')); ?>">

        <label for="Bio">Bio:</label>
        <textarea rows="5" name="bio" id="bio"><?php echo e(old('bio')); ?></textarea>

        <label for="type_id">Type:</label>
        <select id="type_id" name="type_id" required>
            <option value="" disabled selected>Select a type</option>
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->id); ?>" <?php echo e($type->id == old('type_id') ? 'selected' : ''); ?>>
                    <?php echo e($type->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>

        <button type="submit" class="btn btn-green">Create Enemy</button>

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