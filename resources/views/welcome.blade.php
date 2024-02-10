<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PMB IBIK | Landing Page</title>
   <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('sipenmaru/images/logoibik.png') }}">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Poppins:wght@600;700&family=Rubik:wght@400;500&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="/" class="logo">
        <img src="./assets/images/logo.png" alt="Eduland logo">
      </a>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="menu-close-btn" data-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" alt="Eduland logo">
        </a>

        <ul class="navbar-list">
          <h2> Sistem Informasi Pendaftaran Mahasiswa Baru</h2>
        </ul>

       <button class="btn btn-primary" onclick="window.location.href='/login'">Login</button>

      </nav>

    </div>
  </header>





  <main>
    <article>
      <section class="hero">
        <div class="container">

          <figure class="hero-banner"> 
            <img src="./assets/images/logo.png" alt="A young lady sits, holding a pen and a notebook.">
          </figure>

          <div class="hero-content">

            <h2 class="h2 hero-title">Start Your Future Education With IBI 
            Kesatuan</h2>

            <p class="section-text">
               IBI Kesatuan  atau Institut Bisnis dan Informatika Kesatuan merupakan salah satu perguruan tinggi di kota Bogor yang berkuliatas dan unggul di 
                bidang nya. Terdapat 3 Fakultas untuk Strata 1 nya loh yang tidak kalah menarik!!.
                Ayo Bergabung menjadi keluarga IBI Kesatuan
            </p>

         <div class="button-group">
          <button class="btn btn-primary" onclick="window.location.href='/login'">Login</button>
          <button class="btn btn-primary" onclick="window.location.href='/register'">Registrasi</button>
        </div>


          </div>

        </div>
      </section>

      <!-- 
        - #DEPARTMENTS
      -->

      <section class="departments">
        <div class="container">

          <img src="./assets/images/departmets-vector.svg" alt="Vector line art" class="vector-line">

          <h2 class="h2 departments-title">Fakultas IBI Kesatuan</h2>

          <ul class="departments-list">

            <li>
              <div class="departments-card">

                <a href="https://www.ibik.ac.id/fakultas-bisnis/" class="card-banner">
                  <figure>
                    <img src="./assets/images/bisnis.jpg" alt="Artificial Intelligence">
                  </figure>
                </a>

                <a href="#">
                  <h3 class="h3 card-title">Fakultas Bisnis</h3>
                </a>

                <p class="card-text">
                  1. S1 Manajemen
                  <br>
                  2. S1 Akuntasi
                  <br>
                  3. S1 Biokewirausahaan
                </p>
                </a>

              </div>
            </li>

            <li>
              <div class="departments-card">

                <a href="https://fakultassitipar.ibik.ac.id/" class="card-banner">
                  <figure>
                    <img src="./assets/images/paris.jpg" alt="Civil Engineering">
                  </figure>
                </a>

                <a href="#">
                  <h3 class="h3 card-title">Fakultas Informatika dan Pariwisata</h3>
                </a>

                <p class="card-text">
                  1. Sistem Informasi
                  <br>
                  2. S1 Teknik Informatika
                  <br>
                  3. S1 Pariwisata
                </p>
                </a>

              </div>
            </li>

            <li>
              <div class="departments-card">

                <a href="https://vokasi.ibik.ac.id/" class="card-banner">
                  <figure>
                    <img src="./assets/images/vokasi.jpg" alt="Business Studies">
                  </figure>
                </a>

                <a href="#">
                  <h3 class="h3 card-title">D3 Program Vokasi</h3>
                </a>

                <p class="card-text">
                  1. Str Akuntasi Bisnis Digital
                  <br>
                  2. Str Perbankan dan Keuangan Digital
                  <br>
                  3. Str Manajemen Pemasaran
                </p>
                </a>

              </div>
            </li> 
          </ul>
        </div>
      </section>
    </article>
  </main>
    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 <a href="">Amelia Putri Sulaeman</a>. All right reserved
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="/" class="go-top" data-go-top>
    <ion-icon name="arrow-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html> 