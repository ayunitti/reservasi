<!--  css start -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/detailpaketUser.css">
<!--  css end -->





<div class="container py-5 ">
  <h1 class="heading-detail text-center"><?= $data['paket']['pax']?></h1>
  <div class="line"></div>

    <div class="row g-4 py-5">
      <div class="col">
        <div class="card mb-3" style="max-width: 550px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= BASEURL; ?>/img/<?= $data['paket']['gambar']; ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title text-center"><?= $data['paket']['pax']?></h5>
                <hr>
                <p class="card-text">Max <?= $data['paket']['jumlah']?> Orang/meja</p>
                <p class="card-text"><?= $data['paket']['deskripsi']?></p>
                <hr>
                <p class="card-text"><small class="text-muted">Harga Weekday : Rp.<?= $data['paket']['harga_weekday']?></small></p>
                <p class="card-text"><small class="text-muted">Harga Weekday : Rp.<?= $data['paket']['harga_weekend']?></small></p>
                <hr>
                <p class="card-text">Jam Buka : <?= $data['paket']['jam_buka']?></p>
                <p class="card-text">Jam Tutup : <?= $data['paket']['jam_tutup']?></p> 
                <button class="btn-back">
                  <a href="<?= BASEURL; ?>/paket">Kembali</a>
                </button>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>