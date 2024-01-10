<div class="container mt-5">
  <a href="<?= BASEURL; ?>/admin" class="badge "><i class="fa-solid fa-circle-left"></i>Kembali</i></a>
  <h1 class="text-center mb-4">Detail Data Reservasi</h1>
  
  
  <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Data Diri
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      <h4>Reservasi Atas Nama</h4>
      <p><?= $data['reservasi']['atas_nama']?></p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Pemesanan
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
      <h4>Tanggal Reservasi</h4>
      <p><?= $data['reservasi']['tanggal_reservasi']?></p>

      <h4>Jam Reservasi</h4>
      <p><?= $data['reservasi']['jam_reservasi']?></p>

      <h4>Tipe Ruangan</h4>
      <p><?= $data['reservasi']['tipe_ruangan']?></p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Pembayaran
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      <h4>Total Harga</h4>
      <p><?= $data['reservasi']['total_harga']?></p>

      <h4>Status Bayar</h4>
      <p><?= $data['reservasi']['status_bayar']?></p>
      </div>
    </div>
  </div>
</div>

  
</div>