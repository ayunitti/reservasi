
    <!-- link css -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/login.css">
    <!-- link css end -->

<!-- Login start -->
    <div class="container-fluid">
      <div class="card card-login" style="width: 25rem;">
        <div class="card-body">
          <form action="<?= BASEURL; ?>/home/user" method="POST"  class="mx-auto">
            <h2 class="text-center">MASUK</h2>
			<div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" autocomplete="new-password">
            </div>
            <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
          </form>
          <p>Belum Punya Akun? <span><a href="<?= BASEURL; ?>/home/register" class="no-decoration">Daftar</a></span></p></div>
        </div>
      </div>
    </div>
<!-- Login End -->
