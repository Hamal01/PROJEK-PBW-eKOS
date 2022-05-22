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
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">e-KOS</h5>
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
          </li>
          <li class="nav-item mb-4">
          <a href="/logout" class="btn btn-danger">Logout</a>
          </li>
      </div>
    </div>
  </div>
</nav>
    <h1 class="text-center mb-4">TAMBAH DATA</h1>
    <h1 class="text-center">EDIT DATA KAMAR</h1>

    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
<div class="card">
<div class="card-body">
<form action="/updatekamar/{{ $data -> id }}" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nama Kamar</label>
    <input type="text" name="kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{ $data -> kamar }}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fasilitas Kamar</label>
    <input type="text" class="form-control" name="fasilitaskamar" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{ $data -> fasilitaskamar }}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Harga Kamar</label>
    <input type="text" class="form-control" name="hargakamar" id="exampleInputEmail1" aria-describedby="emailHelp"
    value="{{ $data -> hargakamar }}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Info Kamar</label>
    <select class="form-select" name="infokamar" aria-label="Default select example">
  <option selected>{{ $data -> infokamar }}</option>
  <option value="penuh">Penuh</option>
  <option value="tersedia">Tersedia</option>
</select>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>
  </body>
</html>
</div>
        </div>
    </div>

  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->