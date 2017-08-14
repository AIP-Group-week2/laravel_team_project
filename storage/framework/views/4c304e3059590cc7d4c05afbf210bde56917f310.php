<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <?php echo $__env->make('stylesheet', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(Auth::check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(url('/login')); ?>">Login</a>
                        <a href="<?php echo e(url('/register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Advanced Internet Programming -  Alpha (v 0.1)
                </div>

                <div class="links">
                    <a href="submitmovie">Recommend a movie</a>
                    <a href="movie_guest">Check current movie</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/fulunhe/laravel_team_project">Team GitHub（v0.1)</a>
                </div>
            </div>
        </div>





    </body>
</html>
