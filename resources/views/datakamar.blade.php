<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>data kamar</title>
  </head>
  <body>

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

<div class= "container">
<h1 class="text-center mb-4">DATA KAMAR</h1>
<h1 class="text-center mb-4">DATA KAMAR</h1>
<a href="/tambahkamar" class="btn btn-success">Tambah</a>
  <div class= "row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kamar</th>
      <th scope="col">Fasilitas Kamar</th>
      <th scope="col">Harga Kamar</th>
      <th scope="col">Info Kamar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  @php $no = 1; @endphp
    @foreach ($data as $row)
    <tr>
    <th scope="row">{{ $no++ }}</th>
      <td>{{ $row->kamar }}</td>
      <td>{{ $row->fasilitaskamar }}</td>
      <td>{{ $row->hargakamar}}</td>
      <td>{{ $row->infokamar }}</td>
      <td> 
        <a href="/tampilkankamar/{{ $row->id }}" class="btn btn-info">Edit</a>
            <a href="/deletekamar/{{  $row->id }}" class="btn btn-danger">Delete</a>
          </td>
    </tr>
    @endforeach
  </tbody>
</table>
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
  </body>
</html>