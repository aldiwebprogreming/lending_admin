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
                <form method="post" action="post_card" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">Judul</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan Judul" name="judul">
                  </div>

                   <div class="form-group">
                    <label for="formGroupExampleInput">Sub Judul</label>
                    <textarea class="form-control" name="sub_judul" placeholder="Masukan sub judul"></textarea>
                  </div>
                  <hr>

                
                </div>

                <div class="col-sm-6">
                  
                </div>
                <div class="col-sm-4">
                 <div class="card">
                  <div class="card-header">
                    Card 1
                  </div>
                  <div class="card-body">
                    <label>Judul</label>
                      <input type="text" name="judul_card1" class="form-control" placeholder="Judul card 1">
                      <label>Image card</label>
                      <input type="file" name="img_card1" class="">
                       <label>Text</label>
                      <textarea class="form-control" name="text1" placeholder="Text card 1"></textarea>
                  </div>
                </div>
                </div>
                <div class="col-sm-4">
                 <div class="card">
                    <div class="card-header">
                      Card 2
                    </div>
                    <div class="card-body">
                      <label>Judul</label>
                      <input type="text" name="judul_card2" class="form-control" placeholder="Judul Card 2">
                      <label>Image card</label>
                      <input type="file" name="img_card2" class="">
                       <label>Text</label>
                      <textarea class="form-control" name="text2" placeholder="Text card 2"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-header">
                      Card 3
                    </div>
                    <div class="card-body">
                      <label>Judul</label>
                      <input type="text" name="judul_card3" class="form-control" placeholder="Judul card 3">
                      <label>Image card</label>
                      <input type="file" name="img_card3" class="">
                       <label>Text</label>
                      <textarea class="form-control" name="text3" placeholder="Text card 3"></textarea>
                    </div>
                  </div>
                </div>
              </div>
                <div class="form-group">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                  <a href="<?= base_url() ?>galery/galery"  class = "btn btn-success">Kembali</a>
                  </div>



                </form>
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

