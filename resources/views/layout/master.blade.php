<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/footer.css') }}">
  <title>Halaman Beranda</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed d-flex flex-column min-vh-100">
    <div class="wrapper flex-grow-1"> @include('layout.navbar')

        <div class="content-wrapper p-3">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        
    </div> @include('layout.footer')
</body>
