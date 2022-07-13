<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="material/css/style.css">
    <link rel="icon" href="material/image/ikon.png">

    <title>Supermarket</title>
  </head>
  <body>
  <!-- awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
   <a class="navbar-brand" href="#">
      <img src="material/image/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
      1988 Mart
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
       <form class="d-flex ms-auto my-3 my-lg-0">
      <input class="form-control me-2" type="search" placeholder="Telusuri barang" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Cari!</i></button>
    </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Belanjaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bantuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">Tentang Kami</a>
        </li>
         <li class="nav-item">
          <a class="nav-link disabled" >Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- akhir navbar --> 

  <!-- awal carousel -->
  <div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="material/image/bg1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="material/image/bg2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="material/image/bg3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


  <!-- akhir carosel --> 

  <!-- awal kategori -->
  <div class="container mt-5">
    <div class="judul-kategori" style="background-color:  #202020; padding: 5px 10px;">
      <h5 style="color:#FFFFFF;" class="text-center" style="margin-top: 5px;">KATEGORI</h5> 
    </div>

    <div class="row text-center row-container mt-2">
    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt1.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Makanan</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt2.jpg" class="img-kategori mt-3"></a>
    <p class="mt-2">Alat Tulis</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/344/external-electronic-home-appliance-flaticons-lineal-color-flat-icons.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Elektronik</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt4.jpg" class="img-kategori mt-3"></a>
    <p class="mt-2">Kecantikan</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt5.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Pakaian</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt6.jpg" class="img-kategori mt-3"></a>
    <p class="mt-2">Tas</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt7.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Pembersih</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt8.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Alat Masak</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt9.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Obat</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt10.jpg" class="img-kategori mt-3"></a>
    <p class="mt-2">Hewan</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt11.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Alat Bangunan</p>
    </div>
    </div>

    <div class="col-lg-2 col-md-3 col-sm-4 col-6">
    <div class="menu-kategori">
    <a href="#"><img src="material/image/kt12.png" class="img-kategori mt-3"></a>
    <p class="mt-2">Mainan</p>
    </div>
    </div>

    </div>
  </div>
  <!-- akhir kategori -->
  
  <!-- awal card -->
  <div class="container mt-5">
    <div class="container mt-5">
    <div class="judul-produk" style="background-color:  #202020; padding: 5px 10px;">
      <h5 style="color:#FFFFFF;" class="text-center" style="margin-top: 5px;">PRODUK BEST SELLER</h5> 
    </div>
    <div class="row">
      <?php require_once ("endpoint/endpoint1.php"); ?>
        <?php for ($i=0; $i<count($title); $i++) : ?>
      
      <div class='col-lg-2 col-md-3 col-sm-4 col-6 mt-2'>
        <div class='card text-center'>
  <img src='<?= $image[$i]; ?>' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'><?= $title[$i]; ?></h5>
    <p class='card-text'><?= $price[$i]; ?></p>
    <a href='#' class='btn btn-dark d-grid'>Beli</a>
  </div>
</div>
      </div>
      <?php endfor; ?>
    </div>
  </div>
  <!-- akhir card -->

  <!-- awal footer -->
  <footer class="bg-dark p-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <span style="color: #FFFFFF">Copyright @2021 | Created by Salsa dan Erlin </span>
        </div>

        <div class="col-md-6 text-end">
          <a href="https://www.instagram.com/swag_spreader/?hl=en" class="text-decoration-none">
            <img src="material/image/ig.png" class="ms-2" style="width: 35px;">
          </a>
           <a href="https://web.facebook.com/humairah.salsabila.35/" class="text-decoration-none">
            <img src="material/image/fb.jpg" class="ms-2" style="width: 35px;">
          </a>
           <a href="https://twitter.com/swaggydoll_.com/" class="text-decoration-none">
            <img src="material/image/tw.png" class="ms-2" style="width: 35px;">
          </a>
          
        </div>
      </div>
    </div>
  </footer>

  <!-- akhir footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>