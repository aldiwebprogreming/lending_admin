  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 ><?= $sub_title ?></h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>

              <?php foreach ($det_promo as $data) {
                # code...
              } ?>
              <div class="card-body">
                <div class="row">
                   <div class="col-lg-6">
                    
                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">Kode Promo</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?= $data['kd_promo'] ?>" readonly="" name="kd_promo">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Nama Promo</label>
                    <input type="text" name="nama_promo" class="form-control" required="" placeholder="Masukan nama promo" value="<?= $data['nama_promo'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul</label>
                    <input type="text" name="judul" class="form-control" required="" placeholder="Masukan judul promo" value="<?= $data['judul'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Sub Judul</label>
                    <textarea class="form-control" name="sub_judul" style="height: 100px;" placeholder="Masukan sub judul"><?= $data['sub_judul'] ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Start Promo</label>
                    <input type="date" name="start_promo" class="form-control" value="<?= $data['start_promo'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">End Promo</label>
                    <input type="date" name="end_promo" class="form-control" value="<?= $data['end_promo'] ?>">
                  </div>


                  <div class="form-group">
                    <img src="<?= base_url() ?>assets/gambar_promo/<?= $data['foto']?>" class = "img-thumbnail" style="height: 300px;" id="imgPreview">

                  </div>


                  <div class="form-group">
                    <label for="formGroupExampleInput">Gambar Promo</label>
                    <input type="file" name="foto" class="form-control" required="" id="image" value="<?= $data['foto'] ?>">
                    <small>Format  gambar harus jpg/jpeg dan png</small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                  <a href="<?= base_url() ?>promo/promo"  class = "btn btn-success">Kembali</a>
                  </div>



                </form>
                </div>
              </div>
              </div>
            </div>
          </div>         
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php echo "<script>".$this->session->flashdata('message')."</script>"?>