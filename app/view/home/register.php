 
 <!-- link css -->
 <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css">
    <!-- link css end -->

    <!--Register start  -->
    <div class="container-fluid">
        <div class="card" style="width: 25rem;">
            <div class="card-body">
                <form action="<?= BASEURL; ?>/home/newReg" method="POST" class="mx-auto" autocomplete="off">
                    <h2 class="text-center">DAFTAR</h2>
                    <div class="mb-3">
                      <label for="exampleInputUsername" class="form-label">Username</label>
                      <input type="text" class="form-control" name="nama" id="exampleInputUsername" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="Masukkan Email">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Masukkan Password" autocomplete="new-password">
                    </div>
                    <div class="mb-3">
                      <input type="hidden" class="form-control" name="akses" id="exampleInputPassword1" placeholder="Masukkan Password" autocomplete="new-password" value="Pengguna">
                    </div>
                    <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
                </form>
                <p>Sudah Punya Akun? <span><a href="<?= BASEURL; ?>/home/login" class="no-decoration">Masuk</a></span></p>
            </div>
        </div>
    </div>
    <!-- Register End -->