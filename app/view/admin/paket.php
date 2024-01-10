<!--  css start -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
<!--  css end -->

<!-- dashboard admin -->


<!-- main: start -->
<main class="full-page">
        <div class="container">
            
            <h1 class="heading pt-5 pb-3 text-center">DAFTAR PAKET</h1>
            <div class="row mt-5 mb-2">
              <div class="col-lg-6">
                <form action="<?=BASEURL; ?>/admin/cariPaket" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data paket" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-dark" type="submit" id="tombolCariPaket"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                  </div>
                </form>
              </div>
            </div>
            <button type="button" class="btn btn-outline-dark tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-file-circle-plus"></i> Tambah Daftar Paket</button>
            <!-- modal -->
            <div class="row mt-3">
              <div class="col-lg-6">
                <?php FlasherPaket::flash(); ?>
              </div>
            </div>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Paket Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action=" <?= BASEURL; ?>/admin/tambahPaket" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="gambar" class="col-form-label">Upload Gambar</label>
                        <input type="file" class="form-control" name="gambar" id="gambar">                       
                    </div>
                    <div class="form-group mb-3">
                        <label for="pax" class="col-form-label">Pax</label>
                        <input type="text" class="form-control" name="pax" id="pax">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jumlah" class="col-form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" id="jumlah">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_weekday" class="col-form-label">Harga Weekday</label>
                        <input type="number" class="form-control" name="harga_weekday" id="harga_weekday">
                    </div>
                    <div class="form-group mb-3">
                        <label for="harga_weekend" class="col-form-label">Harga Weekend</label>
                        <input type="number" class="form-control" name="harga_weekend" id="harga_weekend">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_buka" class="col-form-label">Jam Buka</label>
                        <input type="time" class="form-control" name="jam_buka" id="jam_buka" step="2">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_tutup" class="col-form-label">Jam Tutup</label>
                        <input type="time" class="form-control" name="jam_tutup" id="jam_tutup" step="2">
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi" class="col-form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
                </div>
            </div>
            </div>
            <!-- modal end -->


            <!-- tabel -->
            <div class="card mt-2 mb-4">
                <div class="card-body">
                  <!-- responsive table start -->
                  <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <!-- table row start -->
                            <tr>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">No</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Gambar</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Pax</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Jumlah</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Harga Weekday</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Harga Weekend</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Jam Buka</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Jam Tutup</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Deskripsi</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px; padding-right: 50px; padding-left: 50px;">Aksi</th>
                            </tr>
                        </thead>

                        <?php $i = 1;?>
                        <?php foreach( $data['paket'] as $paket) :?>
                        <tr>
                            <th scope="row" class="text-center" style="border-color: black; border-width:1px"><?= $i;?></th>
                            <td class="text-center" style="border-color: black; border-width:1px"><img src="<?= BASEURL; ?>/img/<?= $paket['gambar']; ?>" alt="" style="width: 80px; height: 55px;"></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['pax']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['jumlah']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['harga_weekday']; ?></td>
                            <td class="text-center" style="border-color: black; border-width: 1px"><?= $paket['harga_weekend']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['jam_buka']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['jam_tutup']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $paket['deskripsi']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px">
                            <a href="<?= BASEURL; ?>/admin/detailPaket/<?= $paket['id']; ?>" class="badge text-bg-info ml-1"><i class="fa-regular fa-eye"></i></a>

                            <a href="<?= BASEURL; ?>/admin/ubahPaket/<?= $paket['id']; ?>" class="badge text-bg-warning ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $paket['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>

                            <a href="<?= BASEURL; ?>/admin/hapusPaket/<?= $paket['id']; ?>" class="badge text-bg-danger ml-1" onclick="return confirm('Yakin Ingin Menghapus?');"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        </tbody>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                                
                        
                    </table>
                  </div>
                  <!-- responsive table end -->
                </div>
            </div>
            <!-- tabel end -->
        </div>
</main>
    <!-- main: end -->
<!-- Side bar -->
<div class="sidebar">
    <div class="logo">
      <img src="" alt="">
    </div>
    <ul class="menu">
      <li>
        <a href="<?= BASEURL; ?>/admin">
          <i class="fas fa-solid fa-person-booth"></i>
          <span class="nav-item">Reservasi</span>
        </a>
      </li>
      <li class="active">
        <a href="<?= BASEURL; ?>/admin/paket">
          <i class="fas fa-solid fa-bag-shopping"></i>
          <span class="nav-item">Paket</span>
        </a>
      </li> 
      <li>
        <a href="<?= BASEURL; ?>/admin/user">
          <i class="fas fa-solid fa-users-line"></i>
          <span class="nav-item">User</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- Side bar End -->

<!-- dashboard admin end -->
<script src="<?= BASEURL; ?>/js/scriptPaket.js"></script>