@extends('layout.master')

@section('content')
  <body>
  {{-- clas navbar  --}}

  <div class="card card-welcome shadow bg-dark text-white">
    <div class="card-body p-4">
      <h2 class="font-weight-bold">Selamat Datang Kembali, {{ Auth::user()->name ?? 'Yoga' }}! 👋</h2>

      <p class="mb-2">
        <i class="far fa-calendar-alt mr-1"></i>
        <span id="clock">Memuat waktu realtime</span>
      </p>

      <hr>
      <p class="lead mb-0 text-italic">"Semangat kerjanya, tetap fokus!"</p>

      <i class="fas fa-rocket welcome-icon"></i>
    </div>
  </div>


  <script>
    function updateClock() {
      const now = new Date();
      const options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        second: '2-digit'
      };
      // Format Indonesia
      document.getElementById('clock').innerHTML = now.toLocaleDateString('id-ID', options);
    }

    // Jalankan setiap 1 detik
    setInterval(updateClock, 1000);
    updateClock(); // Jalankan langsung saat halaman buka
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>
@endsection


