<style>
    .btn-bayar{
    background-color: #1A120B;
    color: white;
    border-radius: 20px;
    font-size: 16px;
    }
    .btn-bayar:hover{
        border: 1px solid #1A120B;
    }
</style>
<!-- style end -->

<!-- code start -->
<div class="container justify-content-center">
  <div class="card m-4">
    <div class="row g-0">
      <div class="col-md-6 p-5">
          <h6 class="mb-3"><b>INFORMASI KARTU</b></h6>
          <img src="<?= BASEURL; ?>/img/py-img.png" class="img-fluid rounded-start" alt="">
      </div>
      <div class="col-md-6" style="background-color: #E5E5CB;">
        <div class="card-body">
          <h3 class="card-title text-center m-5"><b>FORM PEMBAYARAN</b></h3>
          <div class ="form-group row mb-3">
              <label for="nameInput" class="col-sm-5 col-form-label">Pilih Paket Anda :</label>
                  <div class="col-sm-7 mb-3 mb-sm-0">
                      <select class="form-select form-select-sm" aria-label="Small select example">
                          <option value="1" selected>Paket 1</option>
                          <option value="2">Paket 2</option>
                          <option value="3">Paket 3</option>
                      </select>
                  </div>
          </div>
          
          <div class="form-group row">
              <label for="nameInput" class="col-sm-5 col-form-label">Total Pembayaran :</label>
                  <div class="col-sm-7 mb-3 mb-sm-0">
                      <input type="text" class="form-control form-control-sm" id="totalInput" disabled>
                  </div>
          </div>
          <div class="mt-4">
              <a href="#" class="btn btn-bayar">Bayar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
