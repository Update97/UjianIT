<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <!-- Font & Icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,500,600&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{asset('style/login.css')}}">

</head>
<body>

    <div class="login-card">
        <h2>Log in</h2>
        <p class="subtitle">Silakan masuk ke akun Anda</p>

        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: "{{ session('error') }}",
                    confirmButtonColor: '#2563eb',
                })
            </script>
        @endif

        <form action="/login" method="POST">
            @csrf
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="contoh@gmail.com" value="{{ old('email') }}" >
                @error('email') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label>Password</label>
                <div class="password-wrapper">
                    <input type="password" name="password" id="password" placeholder="••••••••" >
                    <span class="toggle-password" id="togglePassword">
                        <i class="fas fa-eye" id="eye-icon"></i>
                    </span>
                </div>
                @error('password') <span class="error-msg">{{ $message }}</span> @enderror
            </div>

            <button type="submit" class="btn-submit">Sign In</button>
        </form>

        <div class="footer-text">
            Belum punya akun? <a href="/register">Daftar Sekarang</a>
        </div>
    </div>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');
        const eyeIcon = document.querySelector('#eye-icon');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            eyeIcon.classList.toggle('fa-eye');
            eyeIcon.classList.toggle('fa-eye-slash');
        });
    </script>
</body>
</html>