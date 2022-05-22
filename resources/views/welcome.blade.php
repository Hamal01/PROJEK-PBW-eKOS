
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>eKOS</title>
  </head>
  <body>

  <nav class="navbar navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">e-KOS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <a href="#" class="d-block"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
         <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pegawai">DATA PENYEWA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/kamar">DATA KAMAR</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="support">SUPPORT</a>
          </li>
          <li class="nav-item mb-4">
          <a href="/logout" class="btn btn-danger">Logout</a>
          </li>
        
      </div>
    </div>
  </div>
</nav>

<div class="container">
<h1 class="text-center "style="margin-top: 70px;">DASHBOARD</h1>
<marquee><h3 class="text-center mt-8" style=" margin-top: 50px; ">SELAMAT DATANG DI APLIKASI MANAGEMEN e-KOS </h3></marquee>
        <div class="row">
        <table class="table" style=" margin-top: 50px; ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  
  </tbody>
</table>
  <tbody>


<div class="card text-white bg-primary mb-3"  style="max-width: 18rem; margin-top: 30px; margin-left: 10px;">
  <div class="card-header">JUMLAH KAMAR</div>
  <div class="card-body">
    <h5 class="card-title">{{ $jumlahkamar }} Kamar</h5>
  </div>
</div>
 
<div class="card text-dark bg-warning mb-3" style="max-width: 18rem; margin-top: 30px; margin-left: 10px;">
  <div class="card-header">JUMLAH PENYEWA</div>
  <div class="card-body">
    <h5 class="card-title">{{ $jumlahpegawai }} Orang</h5>
  </div>
</div>

<div class="card text-white bg-success mb-3" style="max-width: 18rem; margin-top: 30px; margin-left: 10px;">
  <div class="card-header">JUMLAH KAMAR TERSEDIA</div>
  <div class="card-body">
    <h5 class="card-title">{{ $jumlahkamartersedia }} Kamar</h5>
  </div>
</div>

<div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin-top: 20px; margin-left: 10px;">
  <div class="card-header">BELUM LUNAS</div>
  <div class="card-body">
    <h5 class="card-title">{{ $jumlahbelumbayar }} Orang</h5>
  </div>
</div>

<div class="card text-dark bg-info mb-3" style="max-width: 37rem; margin-top: 20px; margin-left: 10px; font-family:Brush Script MT;">
  <div class="card-body">
  <marquee><h1 class="card-title">e-KOS</h1></marquee>
  </div>
</div>

<img src="{{asset('Image/rumah.jpg')}}" class="img-fluid" alt="...">

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

        </div>
    </div>

  