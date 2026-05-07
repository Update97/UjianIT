  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Brand di Kiri -->
      <a class="navbar-brand" href="#">UjianIT</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!-- Menu Tengah (Home & Produk) -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="/produk">Produk</a>
          </li>
        </ul>

        <!-- Menu Kanan (User Dropdown) -->
        <ul class="navbar-nav">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
              <li>
                <button type="submit" class="dropdown-item">Profile</button>
                <form action="/logout" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="dropdown-item">Log out</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>