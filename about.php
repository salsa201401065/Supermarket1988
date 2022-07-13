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
          <a class="nav-link active" aria-current="page" href="index.php">Belanjaan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Bantuan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Tentang Kami</a>
        </li>
         <li class="nav-item">
          <a class="nav-link disabled" href="">Daftar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  <!-- akhir navbar --> 

  <!-- awal card -->
  <div class="container mt-5">
    <div class="container mt-5">
    <div class="judul-produk" style="background-color:  #202020; padding: 5px 10px;">
      <h5 style="color:#FFFFFF;" class="text-center" style="margin-top: 5px;">LET'S INTRODUCE OURSELVES</h5> 
    </div>
    <div class="row">
      <?php require_once ("endpoint/endpoint2.php"); ?>
        <?php for ($i=0; $i<count($name); $i++) : ?>
      
      <div class='col-lg-2 col-md-3 col-sm-4 col-6 mt-2'>
        <div class='card text-center'>
  <img src='<?= $img[$i]; ?>' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'><?= $name[$i]; ?></h5>
    <p class='card-text'><?= $nim[$i]; ?></p>
    
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