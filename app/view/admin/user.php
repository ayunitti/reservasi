<!--  css start -->
<link rel="stylesheet" href="<?= BASEURL; ?>/css/admin.css">
<!--  css end -->

<!-- dashboard admin -->


<!-- main: start -->
<main class="full-page">
        <div class="container">
            
            <h1 class="heading pt-5 pb-3 text-center">DATA PENGGUNA SITUS</h1>
            
            <button type="button" class="btn btn-outline-dark tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-user-plus"></i> Tambah Daftar Pengguna</button>
            
            <!-- notif -->
            <div class="row mt-3">
              <div class="col-lg-6">
                <?php FlasherUser::flash(); ?>
              </div>
            </div>
            <!-- end notif -->

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Data Pengguna Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action=" <?= BASEURL; ?>/admin/tambahUser" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group mb-3">
                        <label for="nama" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password" class="col-form-label">Kata Sandi</label>
                        <input type="text" class="form-control" name="password" id="password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="aksi" class="col-form-label">Akses</label>
                        <select name="akses" id="akses">
                            <option value="Pengguna">Pengguna</option>
                            <option value="Admin">Admin</option>
                        </select>
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
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Nama</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Email</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Kata Sandi</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Akses</th>
                                <th scope="col" class="text-center" style="border-color: black; border-width:1px">Aksi</th>
                            </tr>
                        </thead>

                        <?php $i = 1;?>
                        <?php foreach( $data['user'] as $user) :?>
                        <tr>
                            <th scope="row" class="text-center" style="border-color: black; border-width:1px"><?= $i;?></th>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $user['nama']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $user['email']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $user['password']; ?></td>
                            <td class="text-center" style="border-color: black; border-width:1px"><?= $user['akses']; ?></td>           
                            <td class="text-center" style="border-color: black; border-width:1px">
                              <a href="<?= BASEURL; ?>/admin/ubahUser/<?= $user['id']; ?>" class="badge text-bg-warning ml-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $user['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>

                              <a href="<?= BASEURL; ?>/admin/hapusUser/<?= $user['id']; ?>" class="badge text-bg-danger ml-1" onclick="return confirm('Yakin Ingin Menghapus?');"><i class="fa-regular fa-trash-can"></i></a></td>
                            </td>
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
      <li>
        <a href="<?= BASEURL; ?>/admin/">
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
      <li class="active">
        <a href="<?= BASEURL; ?>/admin/user">
          <i class="fas fa-solid fa-users-line"></i>
          <span class="nav-item">User</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- Side bar End -->

<!-- dashboard admin end -->