<?php $__env->startComponent('mail::message'); ?>

<?php echo e($user); ?>様<br>
この度はLarashopでのご購入ありがとうございます。<br>

お客様が購入した商品は<br>

<?php $__currentLoopData = $checkout_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
・<?php echo e($item->stock->name); ?>｜<?php echo e($item->stock->fee); ?>円
<br>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

となります。<br>

下記の決済画面より決済を完了させてください。<br>

<?php $__env->startComponent('mail::button', ['url' => '']); ?>
決済画面へ
<?php if (isset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e)): ?>
<?php $component = $__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e; ?>
<?php unset($__componentOriginalb8f5c8a6ad1b73985c32a4b97acff83989288b9e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<br>
<?php echo e(config('app.name')); ?>

<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?><?php /**PATH /Users/kobayashitatsumi/Desktop/laravelecsite/resources/views/mails/thanks.blade.php ENDPATH**/ ?>