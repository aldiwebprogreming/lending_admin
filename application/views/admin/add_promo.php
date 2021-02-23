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
              <div class="card-body">
                <div class="row">
                   <div class="col-lg-6">
                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">Kode Promo</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?= $kd_promo ?>" readonly="" name="kd_promo">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Nama Promo</label>
                    <input type="text" name="nama_promo" class="form-control" required="" placeholder="Masukan nama promo" value="<?php echo set_value('nama_promo'); ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul</label>
                    <input type="text" name="judul" class="form-control" required="" placeholder="Masukan judul promo" value="<?php echo set_value('judul'); ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Sub Judul</label>
                    <textarea class="form-control" name="sub_judul" style="height: 100px;" placeholder="Masukan sub judul"><?php echo set_value('sub_judul'); ?></textarea>
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Start Promo</label>
                    <input type="date" name="start_promo" class="form-control" value="<?php echo set_value('start_promo'); ?>">
                    <small style="color: red;"><?php echo validation_errors(); ?></small>
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">End Promo</label>
                    <input type="date" name="end_promo" class="form-control" value="<?php echo set_value('end_promo'); ?>">
                  </div>

                  <div class="form-group">
                    <img src="<?= base_url() ?>assets/default/default.png" class = "img-thumbnail" style="height: 300px;" id="imgPreview">

                  </div>


                  <div class="form-group">
                    <label for="formGroupExampleInput">Gambar Promo</label>
                    <input type="file" name="foto" class="form-control" required="" id="image"  value="<?php echo set_value('foto'); ?>">
                    <small>Format  gambar harus jpg/jpeg dan png</small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                  <a href="<?= base_url() ?>promo/data_promo"  class = "btn btn-success">Kembali</a>
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

