<!--  css start -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
<!--  css end -->

<!-- dashboard admin -->


<!-- main: start -->
<main class="full-page">
        <div class="container">
            
            <h1 class="heading pt-5 pb-3 text-center">DATA RESERVASI</h1>
            <div class="row mt-5 mb-2">
              <div class="col-lg-6">
                <form action="<?=BASEURL; ?>/admin/cari" method="post">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data reservasi" name="keyword" id="keyword" autocomplete="off">
                    <button class="btn btn-outline-dark" type="submit" id="tombolCari"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                  </div>
                </form>
              </div>
            </div>
            <button type="button" class="btn btn-outline-dark tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-square-plus"></i> Tambah Data Reservasi</button>
            <!-- modal -->
            <div class="row mt-3">
              <div class="col-lg-6">
                <?php Flasher::flash(); ?>
              </div>
            </div>
            
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action=" <?= BASEURL; ?>/admin/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mb-3">
                        <label for="atas_nama" class="col-form-label">Nama reservasi</label>
                        <input type="text" class="form-control" name="atas_nama" id="atas_nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_reservasi" class="col-form-label">Tanggal reservasi</label>
                        <input type="date" class="form-control" name="tanggal_reservasi" id="tanggal_reservasi">
                    </div>
                    <div class="form-group mb-3">
                        <label for="jam_reservasi" class="col-form-label">Jam reservasi</label>
                        <input type="time" class="form-control" name="jam_reservasi" id="jam_reservasi" step="2">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tipe_ruangan" class="col-form-label">Tipe Ruangan</label>
                        <select class="form-control" name="tipe_ruangan" id="tipe_ruangan">
                            <option value="Publik">Publik</option>
                            <option value="Privat">Privat</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="total_harga" class="col-form-label">Total Harga</label>
                        <input type="number" class="form-control" name="total_harga" id="total_harga">
                    </div>
                    <div class="form-group mb-3">
                        <label for="status_bayar" class="col-form-label">Status Bayar</label>
                        <input type="text" class="form-control" name="status_bayar" id="status_bayar">
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
                  <!-- responsive table -->
                    <table class="table">
                        <thead>
                            <!-- table row start -->
                            <tr>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">No</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Atas nama</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Tanggal Reservasi</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Jam Reservasi</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Tipe Ruangan</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Total Harga</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Status</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Aksi</th>
                            </tr>
                        </thead>

                        <?php $i = 1;?>
                        <?php foreach( $data['reservasi'] as $reservasi) :?>
                        <tr>
                            <th scope="row" class="text-center" style="border-color: black; border-width:1px"><?= $i;?></th>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $reservasi['atas_nama']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $reservasi['tanggal_reservasi']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $reservasi['jam_reservasi']; ?></td>
                            <td class="text-center" style="border-color: black; border-width: 1px"><?= $reservasi['tipe_ruangan']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $reservasi['total_harga']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $reservasi['status_bayar']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px">
                            <a href="<?= BASEURL; ?>/admin/detail/<?= $reservasi['id']; ?>" class="badge text-bg-info ml-1"><i class="fa-regular fa-eye"></i></a>

                            <a href="<?= BASEURL; ?>/admin/ubah/<?= $reservasi['id']; ?>" class="badge text-bg-warning ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $reservasi['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>

                            <a href="<?= BASEURL; ?>/admin/hapus/<?= $reservasi['id']; ?>" class="badge text-bg-danger ml-1" onclick="return confirm('Yakin Ingin Menghapus?');"><i class="fa-regular fa-trash-can"></i></a></td>
                        </tr>
                        </tbody>
                        <?php $i++ ?>
                        <?php endforeach; ?>
                                
                        
                    </table>
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
      <li class="active">
        <a href="#">
          <i class="fas fa-solid fa-person-booth"></i>
          <span class="nav-item">Reservasi</span>
        </a>
      </li>
        <li>
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