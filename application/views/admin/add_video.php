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
                    <label for="formGroupExampleInput">Nama Video Review</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan nama video review" name="nama_video_review" value="" required="">
                  </div>


                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul Video Review</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan judul video review" name="judul" value="" required="">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Sub Judul</label>
                    <textarea class="form-control ckeditor" name="sub_judul" id="ckeditor" placeholder="Masukan sub judul review" required=""></textarea>
                  </div>
                 


                  <div class="form-group">
                    <label for="formGroupExampleInput">Embed Video</label>
                   <textarea class="form-control" name="frame" required="" placeholder="Masukan embed video"></textarea>
                    <small>Ambil embed video darai youtube</small>
                  </div>

                   <div class="form-group">
                    <label for="formGroupExampleInput">Section video</label>
                    <select class="form-control" name="section">
                      <option>-- Pilih Section Video --</option>
                      <option>video 1</option>
                      <option>video 2</option>
                      <option>video 3</option>
                    </select>
                   <small style="color: red;"> <?php echo form_error('section'); ?></small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                  <a href="<?= base_url() ?>video/video"  class = "btn btn-success">Kembali</a>
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

