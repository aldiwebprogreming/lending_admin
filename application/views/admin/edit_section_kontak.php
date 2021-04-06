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

              <?php 

                foreach ($scKontak as $data) {
                 
                }

               ?>
              <div class="card-body">
                <div class="row">
                   <div class="col-lg-6">
                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan judul" name="judul" value="<?= $data['judul'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Sub judul</label>
                    <textarea class="form-control" name="sub_judul" style="height: 100px;" placeholder="Masukan sub judul"><?= $data['sub_judul'] ?></textarea>
                  </div>

                 
                  <div class="form-group">
                  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                  <a href="<?= base_url() ?>section/section_produk"  class = "btn btn-success">Kembali</a>
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

