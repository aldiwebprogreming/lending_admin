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
                  <?php foreach ($default as $data) {
                    # code...
                  } ?>
                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan judul" name="judul" required="" value="<?= $data['judul'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Sub judul</label>
                    <textarea class="form-control" name="sub_judul" required="" placeholder="Masukan sub judul halaman"><?= $data['sub_judul'] ?></textarea>
                  </div>

                 <div class="form-group">
                    <img src="<?= base_url() ?>assets/gambar_default/<?= $data['images'] ?>" class = "img-thumbnail" style="height: 300px;" id="imgPreview">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Image</label>
                    <input type="file" name="foto" class="form-control"  id="image">
                    <small>Format  gambar harus jpg/jpeg dan png</small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                  <a href="<?= base_url() ?>home/data_home"  class = "btn btn-success">Kembali</a>
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

