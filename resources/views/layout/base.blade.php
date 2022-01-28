<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lateef&display=swap" rel="stylesheet"> 

    <style type="text/css">
      #arab {
        font-family: 'Lateef', cursive;
      }
    </style>

    <title>{{ env('APP_NAME') }} | @yield('title')</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="/">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{ !empty($nav_home) ? $nav_home : '' }}" href="/beranda">Beranda</a>
            <a class="nav-link {{ !empty($nav_quran) ? $nav_quran : '' }}" href="/quran">Al-Qur'an</a>
            <a class="nav-link {{ !empty($nav_tafsir) ? $nav_tafsir : '' }}" href="/tafsir">Tafsir</a>
            <a class="nav-link {{ !empty($nav_about) ? $nav_about : '' }}" href="/tentang">Tentang</a>
          </div>
        </div>
      </div>
    </nav>

    <div class="container mt-5">
      @yield('content')
    </div>

    <footer class="footer mt-auto py-3 text-center bg-white">
      <div class="container">
        <span class="text-muted">Dibuat dengan 💜 oleh <b onclick="window.location.href = 'https://alfathir.id'">M Habiburrohman Al-Fathir</b>, dispesialkan untuk <b>Firdausi Ridhotul Ullah</b></span>
      </div>
    </footer>

    <!-- Bootstrap Bundle with Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
