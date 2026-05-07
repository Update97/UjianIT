<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | Apps UjianIT</title>
    <!-- Font & Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('style/register.css')); ?>">

</head>
<body>

    <div class="register-card">
        <div class="logo"><b>Register</b>Dulu</div>
        <p class="subtitle">Buat akun baru untuk memulai</p>

        <form action="/register" method="POST">
            <?php echo csrf_field(); ?>
            
            <!-- Nama -->
            <div class="form-group">
                <label>Nama Lengkap</label>
                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Alvin balak" value="<?php echo e(old('name')); ?>">
                    <i class="fas fa-user icon-right"></i>
                </div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error-msg"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <div class="input-wrapper">
                    <input type="email" name="email" placeholder="Alvinbalak@gmail.com" value="<?php echo e(old('email')); ?>">
                    <i class="fas fa-envelope icon-right"></i>
                </div>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error-msg"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label>Password</label>
                <div class="input-wrapper">
                    <input type="password" name="password" id="password" placeholder="••••••••">
                    <i class="fas fa-eye icon-right toggle-password" data-target="password"></i>
                </div>
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error-msg"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <!-- Konfirmasi Password -->
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <div class="input-wrapper">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••">
                    <i class="fas fa-eye icon-right toggle-password" data-target="confirm_password"></i>
                </div>
                <?php $__errorArgs = ['confirm_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error-msg"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </form>

        <div class="footer-text">
            Sudah punya akun? <a href="/login">Login di sini</a>
        </div>
    </div>

    <script>
        // Script Sederhana Toggle Password
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                
                if (input.type === 'password') {
                    input.type = 'text';
                    this.classList.replace('fa-eye', 'fa-eye-slash');
                } else {
                    input.type = 'password';
                    this.classList.replace('fa-eye-slash', 'fa-eye');
                }
            });
        });
    </script>
</body>
</html><?php /**PATH C:\laragon\www\YOGA\Ujian_YOGA\resources\views/auth/register.blade.php ENDPATH**/ ?>