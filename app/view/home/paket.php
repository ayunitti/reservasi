<!-- link css -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/paket.css">
    <!-- link css end -->

    <div class="heading text-center">
      <h1>Paket Ruangan</h1>
      <p><i>Pesan Sekarang dengan banyak varian ruangan yang bisa Anda pilih!</i></p>
    </div>
<div class="container mt-5 justify-content-center">
<div class="row d-flex">


<?php foreach($data['paket'] as $paket):?>

  <div class="col-lg-4">
    <div class="card" style="width: 22rem;">
  <img src="<?= BASEURL; ?>/img/<?= $paket['gambar']; ?>" class="card-img-top" >

  <!-- cardbody -->
  <div class="card-body">

    <h5 class="card-title text-center">
        <?= $paket['pax'];?> 
    </h5>

    <p class="card-text text-center">
        <?= $paket['deskripsi'];?> 
    </p>

    <span class="card-text max">
      <i class="fa-solid fa-users"></i>
        Maksimal <?= $paket['jumlah'];?> Orang
    </span>

  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Harga weekday : <?= $paket['harga_weekday'];?>,00,-</li>
    <li class="list-group-item">Harga Weekend : <?= $paket['harga_weekend'];?>,00,-</li>
    <li class="list-group-item">Jam Operasional : <?= $paket['jam_buka'];?> - <?= $paket['jam_tutup'];?>
    </li>
  </ul>
  <div class="card-body text-center mt-2">
    <a href="reservasi.php" class="card-link"><i class="fa-solid fa-up-right-from-square"></i>Pesan Sekarang</a>
  </div>
  <div class="card-body text-center mb-3">
    <a href="whatsapp:contact=087758362825@s.whatsapp.com&message=" class="card-link"><i class="fa-brands fa-whatsapp"></i>Kendala? Hubungi Kami</a>
  </div>
</div>
<!-- cardbody -->
</div>
<?php endforeach;?>
</div>
</div>