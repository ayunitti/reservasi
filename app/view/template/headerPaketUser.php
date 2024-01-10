<style>
  .navbar{
    background-color: #1A120B;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/paketUser.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Halaman <?= $data['judul']?></title>
</head>
<body>
<!-- navbar start -->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= BASEURL; ?>/view/home/index.php"><img src="<?= BASEURL; ?>/img/logopwpb.png" alt="" width="60px" style="padding-right: 10px;">The Skeyroo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-md-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>/home/beranda">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/home/aboutUs">Tentang Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/paket">Paket</a>
        </li>
        <a type="button" class="btn btn-outline-light" href="<?= BASEURL; ?>/home/prosesLogout"><i class="fa-solid fa-right-from-bracket"></i> Keluar</a>
      </ul>
    </div>
  </div>
</nav>
<!-- navbar end -->
