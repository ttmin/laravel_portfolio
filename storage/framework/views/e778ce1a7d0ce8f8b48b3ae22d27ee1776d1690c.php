<?php $__env->startSection('content'); ?>
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#555555;  font-size:1.2em; padding:24px 0px;">
           <?php echo e(Auth::user()->name); ?>さんご購入ありがとうございました</h1>

           <div class="card-body">
               <p>ご登録頂いたメールアドレスへ決済情報をお送りしております。お手続き完了次第商品を発送致します。</p>
               <a href="/">商品一覧へ</a>
           </div>

           </div>
       </div>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kobayashitatsumi/Desktop/laravelecsite/resources/views/checkout.blade.php ENDPATH**/ ?>