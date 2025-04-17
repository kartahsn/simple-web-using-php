<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lupa kata sandi</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="mb-2 row mt-3">
                <label id="bpassword" class="col-sm-3 col-form-label">Sandi lama</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="bpassword" id="bpassword" placeholder="masukan kata sandi lama anda" minlength="5" maxlength="32" required />
                </div>
              </div>
              <div class="mb-2 row mt-3">
                <label id="apassword" class="col-sm-3 col-form-label">Sandi baru</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control" name="apassword" id="apassword" placeholder="masukan kata sandi baru anda" minlength="5" maxlength="32" required />
                </div>
              </div>
              <div class="mb-2 row mt-3">
                <label id="email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" id="email" placeholder="masukan email yang terkait dengan akun ini" required />
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <input type="reset" class="btn btn-secondary" value="reset">
              <input type="submit" class="btn btn-primary" id="forgotpassword" value="Ganti kata sandi"></input>
            </div>
          </form>
        </div>
      </div>
</div>