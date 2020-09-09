<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
          <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
            <?php echo e(Auth::user()->name); ?>さんのカートの中身
          </h1>

          <div class="cart-body">
            <p class="text-center"><?php echo e($message ??''); ?></p><br>
            <div class="d-flex flex-row flex-wrap">

              <?php if($carts->isNotEmpty()): ?>
                <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="mycart_box">
                    <?php echo e($cart->stock->name); ?><br>                                
                    <?php echo e(number_format($cart->stock->fee)); ?>円<br>
                    <img src="/images/<?php echo e($cart->stock->imgpath); ?>" alt="" class="incart" ><br>
                    <form action="/cartdelete" method="post">
                      <?php echo csrf_field(); ?>
                      <input type="hidden" name="stock_id" value="<?php echo e($cart->stock->id); ?>">
                      <input type="submit" value="カートから削除する">
                    </form>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="text-center p-2">
                  個数：<?php echo e($count); ?>個<br>
                  <p style="font-size:1.2em; font-weight:bold;">合計金額:<?php echo e(number_format($sum)); ?>円</p>  
                </div>  
                <form action="/checkout" method="POST">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >購入する</button>
                </form>
                
              <?php else: ?>
                <p class="text-center">カートはからっぽです。</p>
              <?php endif; ?>

              <a href="/">商品一覧へ</a>

            </div>
          </div>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kobayashitatsumi/Desktop/laravelecsite/resources/views/mycart.blade.php ENDPATH**/ ?>