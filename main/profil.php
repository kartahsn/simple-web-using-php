<div class="col-12" id="profil">
  <div class="d-flex justify-content-center pt-5">
    <img class="rounded-circle" src="https://postimgs.org/apple-touch-icon.png" title="Profil"/>
    <i type="button" class="bi-pencil" title="Ubah profil" data-bs-toggle="modal" data-bs-target="#ModalProfil"></i>
  </div>
  <div class="d-flex justify-content-center mt-2">
    <span class="h2"><?php echo $_SESSION['n4m3']; ?></span>
  </div>
  <div class="d-flex justify-content-center mt-2 pb-5">
    <table class="mt-5">
      <tr class="border-bottom border-dark">
        <td class="w-50 fw-bold align-text-top">Nama pengguna</td>
        <td class="align-text-top">:</td>
        <td class="align-text-top"><?php echo $_SESSION['un4m3']; ?></td>
      </tr>
      <tr class="border-bottom border-dark">
        <td class="w-50 fw-bold align-text-top">Email</td>
        <td class="align-text-top">:</td>
        <td class="align-text-top"><?php echo $_SESSION['em41l']; ?></td>
      </tr>
      <tr class="border-bottom border-dark">
        <td class="w-50 fw-bold align-text-top">No HP</td>
        <td class="align-text-top">:</td>
        <td class="align-text-top"><?php echo $_SESSION['hp']; ?></td>
      </tr>
      <tr class="border-bottom border-dark">
        <td class="w-50 fw-bold align-text-top">Alamat</td>
        <td class="align-text-top">:</td>
        <td class="align-text-top"><?php echo $_SESSION['addr355']; ?></td>
      </tr>
      <tr class="border-bottom border-dark">
        <td class="w-50 fw-bold align-text-top">Tanggal Pendaftaran</td>
        <td class="align-text-top">:</td>
        <td class="align-text-top"><?php echo $_SESSION['r3g15t3r']; ?></td>
      </tr>
    </table>
  </div>
</div>

<div class="modal fade" id="ModalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Upload Profil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="mb-2 row mt-2">
            <label id="Uphoto" class="col-sm-2 col-form-label">jpg/png</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" name="Uphoto" id="Uphoto" required />
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="reset" class="btn btn-secondary" value="reset">
          <input type="submit" class="btn btn-primary" id="Uprofile" value="Upload"></input>
        </div>
      </form>
    </div>
  </div>
</div>
