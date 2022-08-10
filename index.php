<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- link font dari bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- link css  -->
    <link rel="stylesheet" href="style.css" />
    <title>Portofolio</title>
  </head>
  <body id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #09ebe0">
      <div class="container">
        <a class="navbar-brand" href="#">Portofolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#id">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- jumbotron -->
    <section class="jumbotron text-center">
      <img src="img/foto.jpg" alt="Firman Andrian" width="200px" class="rounded-circle img-thumbnail" />
      <h1 class="display-4">Firman Andrian</h1>
      <p class="lead">Mahasiswa | Junior Web Development</p>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L48,224C96,192,192,128,288,122.7C384,117,480,171,576,192C672,213,768,203,864,181.3C960,160,1056,128,1152,128C1248,128,1344,160,1392,176L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!-- akhir jumbotron -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About Me</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-6 text-center">
        <div class="col-md-4">
            <p>Mahasiswa Informatika yang antusias dan bermotivasi tinggi dengan kemampuan kepemimpinan, inisiatif, dan mencari tantangan baru.</p>
        </div>
          <div class="col-md-4">
            <p>Mahasiswa jurusan TI yang berorientasi dengan Web Junior Development. Dan dalam mengoperasikan web saya bisa mengoperasikan HTML,CSS dan JavaScript dan Framework css yaitu Bootstrap, memiliki kemampuan komunikasi lisan dan verbal yang baik, dan mampu menjelaskan masalah debugging dalam pemrograman dalam istilah yang mudah dipahami.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#e3edff"
          fill-opacity="1"
          d="M0,160L48,149.3C96,139,192,117,288,128C384,139,480,181,576,176C672,171,768,117,864,122.7C960,128,1056,192,1152,224C1248,256,1344,256,1392,256L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir about -->

    <!-- project -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="project/bus.jpg" class="card-img-top" alt="Pemesanan Tiket Bus" />
              <div class="card-body">
                <p class="card-text">Web pemesanan tiket bus menggunakan CRUD dengan menggunakan HTML,CSS,PHP,dan Framework Bootstrap.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="project/stokBarang.jpg" class="card-img-top" alt="Stok Inventori" />
              <div class="card-body">
                <p class="card-text">Web pengadaan stok gudang barang menggunakan CRUD dan menggunakan Session Login.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="project/coffe.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Web statis yang ditambah fitur darkmode dengan menggunakan HTML,CSS, dan JavaScript.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="project/sampah.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Project Tempat sampah otomatis berbasis Arduino Uno.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L48,256C96,256,192,256,288,224C384,192,480,128,576,112C672,96,768,128,864,144C960,160,1056,160,1152,186.7C1248,213,1344,267,1392,293.3L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir project -->

    <!-- contact  -->
    <section id="id">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form action="" method="POST">
              <div class="mb-3">
                <label for="nama" class="nama">Nama Lengkap</label>
                <input type="text" class="form-control" id="name"name="nama" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="email" class="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="name" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="pesan">Pesan</label>
                <input type="text" class="form-control" id="pesan" name="pesan" aria-describedby="name" />
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#0d6efd"
          fill-opacity="1"
          d="M0,160L48,176C96,192,192,224,288,218.7C384,213,480,171,576,160C672,149,768,171,864,186.7C960,203,1056,213,1152,186.7C1248,160,1344,96,1392,64L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- akhir contact  -->

    <!-- footer  -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Created With <i class="bi bi-suit-heart-fill text-danger"></i> By <a href="https://www.instagram.com/firmandrian/" class="text-white fw-bold">Firman Andrian</a></p>
    </footer>
    <!-- akhir footer  -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <!-- CDN Sweetalert 2 -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script>
      <?php
        require 'functions.php';
        
        // Jika button pesan ditekan
        if (isset($_POST["submit"])) {
            // Cek apakah tiket berhasil ditambahkan atau tidak
            if (index($_POST) > 0) {
        ?>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: 'Pesan Anda Telah Terkirim',
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = 'index.php';
                    }
                })
        <?php
                // jika gagal pesan tiket, maka menampilkan alert gagal
            } else {
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal',
                    text: 'Pesan Anda Gagal Dikirim!',
                    }).then((result) => {
                    if (result.isConfirmed) {
                        document.location.href = 'index.php';
                    }
                })
                </script>
                ";
                exit;
            }
        }
        ?>
    </script>
  </body>
</html>