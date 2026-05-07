<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar | Apps UjianIT</title>
    <!-- Font & Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('style/register.css')}}">

</head>
<body>

    <div class="register-card">
        <div class="logo"><b>Register</b>Dulu</div>
        <p class="subtitle">Buat akun baru untuk memulai</p>

        <form action="/register" method="POST">
            @csrf
            
            <!-- Nama -->
            <div class="form-group">
                <label>Nama Lengkap</label>
                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Alvin balak" value="{{ old('name') }}">
                    <i class="fas fa-user icon-right"></i>
                </div>
                @error('name') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <div class="input-wrapper">
                    <input type="email" name="email" placeholder="Alvinbalak@gmail.com" value="{{ old('email') }}">
                    <i class="fas fa-envelope icon-right"></i>
                </div>
                @error('email') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <!-- Password -->
            <div class="form-group">
                <label>Password</label>
                <div class="input-wrapper">
                    <input type="password" name="password" id="password" placeholder="••••••••">
                    <i class="fas fa-eye icon-right toggle-password" data-target="password"></i>
                </div>
                @error('password') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <div class="input-wrapper">
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="••••••••">
                    <i class="fas fa-eye icon-right toggle-password" data-target="confirm_password"></i>
                </div>
                @error('confirm_password') <span class="error-msg">{{ $message }}</span> @enderror
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
</html>