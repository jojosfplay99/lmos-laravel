<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LMOS</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="<?php echo e(asset('../css/welcome.css')); ?>">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body id="background_link">
        <div class="container" id="card_link">
            <div class="d-flex flex-row align-items-center m-4" id="card_link2">
                <div class="p-5 m-3 card bg-primary text-white shadow rounded-2 flex-fill">
                    <div class="d-flex justify-content-center">
                        <div><h1 class="text-center text-white" id="title"><span><img src="<?php echo e(asset('/images/logo.png')); ?>" alt="lmos-logo" id="logo"></span>LMOS</h1></div>
                    </div>
                    <p class="mb-5" id="sub">LGU Management and Operations System</p>
                    <div id="data_field">
                        <form method="POST" action="<?php echo e(route('login')); ?>">
                            <?php echo csrf_field(); ?>

                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-user"></i></span>
                                <input id="email" type="text" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" value="<?php echo e(old('name')); ?>" required autofocus>
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="input-group input-group-lg mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fa-solid fa-key"></i></span>
                                <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required>
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me')); ?>

                                    </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <button type="submit" class="btn btn-light btn-primary-outline text-primary form-control">
                                        <?php echo e(__('Login')); ?>

                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <div class="flex-fill mx-2">
                                <?php if(Route::has('password.request')): ?>
                                <button class="form-control text-danger" onclick="window.location='<?php echo e(route('password.request')); ?>'"><?php echo e(__('Forgot Your Password?')); ?></button>
                                <?php endif; ?>
                            </div>
                            <div class="flex-fill mx-2">
                                <button class="form-control text-success" onclick="window.location='<?php echo e(route('register')); ?>'">Don't have an account?</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="">
                <div class="p-2 m-2 ">

                </div>
            </div>
        </div>

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\lgusystem\resources\views/welcome.blade.php ENDPATH**/ ?>