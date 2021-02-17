  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
     
    </div>
    <!-- /.content-header -->


    <?php foreach ($detail as $data) {
      # code...
    } ?>

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

                    <div class="form-groub">
                      <label>Nama</label>
                      <p><?= $data['nama'] ?></p>
                    </div>
                    <hr>


                    <div class="form-groub">
                      <label>Phone</label>
                      <p><?= $data['phone'] ?></p>
                    </div>
                    <hr>

                    <div class="form-groub">
                      <label>Email</label>
                      <p><?= $data['email'] ?></p>
                    </div>
                    <hr>

                    <div class="form-groub">
                      <label>Pesan</label>
                      <p><?= $data['pesan'] ?></p>
                    </div>
                    <hr>

                    <div class="form-groub">
                      <label>Date Post</label>
                      <p><?= $data['date_post'] ?></p>
                    </div>
                    <hr>

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

