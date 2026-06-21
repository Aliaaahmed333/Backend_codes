<header class="header-top bg-grey justify-content-center">
   <nav class="navbar navbar-expand-lg navigation">
      <div class="container">
        <a class="navbar-brand d-lg-none" href="<?php echo e(route('home')); ?>">
           <img src="<?php echo e(asset('images/logo.png')); ?>" alt="" class="img-fluid">
        </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="ti-menu"></span>
          </button>
              <div class="collapse navbar-collapse" id="navbarContent">
                  <ul id="menu" class="menu navbar-nav ">


                    <li class="nav-item"><a href="<?php echo e(route('home')); ?>" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('about')); ?>" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?php echo e(route('contact')); ?>" class="nav-link">Contact</a></li>

                  </ul>
              </div>

              <div class="text-right search d-none d-lg-block">
                <div class="search_toggle"><i class="ti-search"></i></div>
              </div>
          </div>
    </nav>

</header>
<?php /**PATH D:\Web_roadmap\Diploma\laravel\task_session26\resources\views/partials/header.blade.php ENDPATH**/ ?>