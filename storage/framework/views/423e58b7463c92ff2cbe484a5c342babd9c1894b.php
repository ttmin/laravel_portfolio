<?php $__env->startSection('content'); ?>

<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
              <div class="">

               <div class="d-flex flex-row flex-wrap">
                  <?php $__currentLoopData = $stocks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stock): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-6 col-sm-4 col-md-4 ">
                      <div class="mycart_box">
                        <?php echo e($stock->name); ?> <br>
                        <?php echo e($stock->fee); ?>円<br>
                        <img src="/images/<?php echo e($stock->imgpath); ?>" alt="" class="incart" ><br>
                        <?php echo e($stock->detail); ?> <br>

                        <form action="mycart" method="post">
                          <?php echo csrf_field(); ?>
                          <input type="hidden" name="stock_id" value="<?php echo e($stock->id); ?>">
                          <input type="submit" value="カートに入れる">
                        </form>
                      </div>
                    </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                 <div class="text-center" style="width: 200px;margin: 20px auto;">
                 <?php echo e($stocks->links()); ?> 
                 </div>

              </div>
       </div>
   </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kobayashitatsumi/Desktop/laravelecsite/resources/views/shop.blade.php ENDPATH**/ ?>