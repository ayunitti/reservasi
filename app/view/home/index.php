<title>Halaman <?= $data['judul']?></title>


<!-- css -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/beranda.css">
<!-- css end -->
<!-- Link Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<!-- End -->

<main>
 <div class="container text-center">
  <div class="heading">
   <h1>Selamat Datang!</h1>
     <p>Silahkan buat akun dan jelajahi isi di dalamnya!</p>
      <div>
        <button type="button" class="btn btn-outline-dark">
          <a href="<?= BASEURL; ?>/home/login"><b>Masuk</b></a>
        </button>
        <button type="button" class="btn btn-outline-dark">
          <a href="<?= BASEURL; ?>/home/register"><b>Daftar</b></a>
        </button>
      </div>
  </div>
 </div>  
</main>
