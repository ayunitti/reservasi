<div class="container mt-5">
  <a href="<?= BASEURL; ?>/admin/paket" class="badge "><i class="fa-solid fa-circle-left"></i>Kembali</i></a>
  <h1 class="text-center mb-4">Detail Data Paket</h1>
  
  
  <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Data Ruangan
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      <h4>Nama Pax</h4>
      <p><?= $data['paket']['pax']?></p>

      <h4>Jumlah Maksimal Orang</h4>
      <p><?= $data['paket']['jumlah']?></p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Rincian
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
      <h4>Harga Weekday</h4>
      <p><?= $data['paket']['harga_weekday']?></p>

      <h4>Harga Weekend</h4>
      <p><?= $data['paket']['harga_weekend']?></p>

      <h4>Jam Buka</h4>
      <p><?= $data['paket']['jam_buka']?></p>

      <h4>Jam Tutup</h4>
      <p><?= $data['paket']['jam_tutup']?></p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Lengkap
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      <h4>Deskripsi</h4>
      <p><?= $data['paket']['deskripsi']?></p>
      </div>
    </div>
  </div>
</div>

  
</div>