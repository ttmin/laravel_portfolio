<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

   <title><?php echo e(config('app.name', 'Laravel')); ?></title>

   <!-- Scripts -->
   <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
   <div id="app">
       <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#0092b3; color:#fefefe;">
           <div class="container">
               <a class="navbar-brand" style="color:#fefefe; font-size:1.4em" href="<?php echo e(url('/')); ?>" >
                   <?php echo e(config('app.name', 'Laravel')); ?>

               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto">

                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto" >
                       <!-- Authentication Links -->
                       <?php if(auth()->guard()->guest()): ?>
                           <li class="nav-item">
                               <a class="nav-link" style="color:#fefefe;"  href="<?php echo e(route('login')); ?>"><?php echo e(__('ログイン')); ?></a>
                           </li>
                           <?php if(Route::has('register')): ?>
                               <li class="nav-item">
                                   <a class="nav-link" style="color:#fefefe;"  href="<?php echo e(route('register')); ?>"><?php echo e(__('会員登録')); ?></a>
                               </li>
                           <?php endif; ?>
                       <?php else: ?>
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" style="color:#fefefe;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                       <?php echo e(__('ログアウト')); ?>

                                   </a>

                                   <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                       <?php echo csrf_field(); ?>
                                   </form>


                                   <a class="dropdown-item" href="<?php echo e(url('/mycart')); ?>">
                                       カートを見る
                                   </a>
                               </div>
                           </li>

                           <a href="<?php echo e(url('/mycart')); ?>" >
                               <img src="<?php echo e(asset('images/cart.png')); ?>" class="cart" >
                           </a>
                       <?php endif; ?>


                   </ul>
               </div>
           </div>
       </nav>

       <main class="py-4">
           <?php echo $__env->yieldContent('content'); ?>
       </main>

<footer class="footer_design">

       <?php if(auth()->guard()->guest()): ?>
           <p class="nav-item" style="display:inline;">
               <a class="nav-link" href="<?php echo e(route('login')); ?>" style="color:#fefefe; display:inline;"><?php echo e(__('ログイン')); ?></a>

           <?php if(Route::has('register')): ?>

                   <a class="nav-link" href="<?php echo e(route('register')); ?>" style="color:#fefefe; display:inline;"><?php echo e(__('会員登録')); ?></a>
               </p>
           <?php endif; ?>
       
       <?php endif; ?>
       <br>
       <div style="margin-top:24px;">
       なんでも売ります<br>
       <p style="font-size:2.4em">Larashop</p><br>
       </div>

       <p style="font-size:0.7em;">@copyright  @mukae9</p>

   </footer>

   </div>
</body>
</html><?php /**PATH /Users/kobayashitatsumi/Desktop/laravelecsite/resources/views/layouts/app.blade.php ENDPATH**/ ?>