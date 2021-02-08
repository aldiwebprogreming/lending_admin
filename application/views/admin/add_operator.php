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
                    <label for="formGroupExampleInput">Username</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan username" name="username" value="<?php echo set_value('username'); ?>">
                    
                  </div>



                  <div class="form-group">
                    <label for="formGroupExampleInput">Password</label>
                    <input type="password" name="password" class="form-control" required="" placeholder="Masukan password">
                   <small style="color: red;"><?php echo validation_errors(); ?></small>
                  </div>

                   <div class="form-group">
                    <label for="formGroupExampleInput">Repead Password</label>
                    <input type="password" name="password2" class="form-control" required="" placeholder="Ulangi password">
                   <small style="color: red;"><?php echo validation_errors(); ?></small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                  <a href="<?= base_url() ?>testimonials/testimonial"  class = "btn btn-success">Kembali</a>
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

