<!--  css start -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/paketUser.css">
<!--  css end -->



<div class="container">
  <h1 class="heading pt-3 text-center">DAFTAR PAKET</h1>
  <div class="line"></div>
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <?php foreach ($data['paket'] as $paket) : ?>
        <div class="col">
          <div class="card">
          <img src="<?= BASEURL; ?>/img/<?= $paket['gambar']; ?>" class="card-img-top" alt="..." style=" height: 250px;">
              <div class="card-body">
                <h2 class="card-title text-center"><?= $paket['pax']?></h2>
                <hr class="card-title-divider">
                  <!-- <p class="card-text"><?= $paket['deskripsi']?></p> -->
              </div>
              <div class="mb-2 d-flex justify-content-center">
                <h5>Max <?=$paket['jumlah']?> Orang/meja</h5>                
              </div>
              <div class="mb-3 d-flex justify-content-around">                
                <a href="<?= BASEURL; ?>/paket/detailPaketUser/<?= $paket['id']; ?>" class="card-link">
                  <button class="button">Lihat</button>
                </a>
              </div>
          </div>
        </div>
      <?php endforeach?>
    </div>
</div>