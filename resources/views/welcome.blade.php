<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ujian IT | Yoga.Ant97</title>
    <link rel="stylesheet" href="{{ asset('style/welcome.css') }}">

<style>

    </style>
</head>

<body>

    <div class="container">
        <h1>Selamat Datang</h1>
        <p>Silakan login untuk masuk ke aplikasi.</p>

        @if (Route::has('login'))
        @auth
        <a href="{{ url('/home') }}" class="btn btn-black">Ke Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="btn btn-black">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="btn btn-outline">Daftar</a>
        @endif
        @endauth
        @else
        <!-- Fallback jika route login belum ada -->
        <a href="/login" class="btn btn-black">Log in</a>
        @endif
    </div>

</body>

</html>