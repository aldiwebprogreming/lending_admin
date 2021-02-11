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
                  <h3 >Data Promo</h3>
                 <!--  <a href="javascript:void(0);">View Report</a> -->
                </div>
              </div>
              <div class="card-body">
              
                <a href="<?= base_url() ?>promo/add_promo" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Promo</a>
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>nama Promo</th>
                  <th>Judul</th>
                  <th>Sub Judul</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($promo as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                   
                    <td><?= $data['nama_promo'] ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['sub_judul'] ?></td>
                    <td>
                      <?php 

                      if ($num_promo == FALSE) {
                        echo "disable";
                      } else {

                        foreach ($num_promo as $data1) {
                          
                        }

                        if ($data['nama_promo'] == $data1['nama_promo']) {
                          echo "active";
                        }else{
                          echo "disabale";
                        }
                      }

                       
                      ?>
                    </td>
                    <td>
                      <a href="<?= base_url('promo/') ?>hapus?id=<?= $data['id'] ?>"  onclick="return confirm('Yakin Hapus?')" class="badge badge-danger">Hapus</a>
                      <a href="<?= base_url('promo/') ?>edit?id=<?= $data['id'] ?>" class="badge badge-success">Edit</a>
                      <!-- <a href="<?= base_url('promo/') ?>det?id=<?= $data['id'] ?>" class="badge badge-primary" data-target="#exampleModal">Detail</a> -->
                      <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                      Detail
                    </button>
                    </td>
                </tr>

                      <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Promo</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                              
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Kode Promo</label>
                                  <p><?= $data['kd_promo'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Nama Promo</label>
                                  <p><?= $data['nama_promo'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Judul</label>
                                  <p><?= $data['judul'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Sub Judul</label>
                                  <p><?= $data['sub_judul'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Start Promo</label>
                                  <p><?= $data['start_promo'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">End Promo</label>
                                  <p><?= $data['end_promo'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Foto</label>
                                 <br>
                                 <img src="<?= base_url() ?>assets/gambar_promo/<?= $data['foto'] ?>" class="img-thumbnail" style="height: 100px;">
                                </div>
                                <hr>

                              </div>
                              <div class="modal-footer">
                               
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                    </div>
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>nama Promo</th>
                  <th>Judul</th>
                  <th>Sub Judul</th>
                  <th>Status</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
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

  <!-- Main Footer -->
<script src="<?php echo base_url() ?>assets/alert.js"></script>s
  <script>

   function tambah(){
    $("#tambah").click(function(){

      swal("Maaf!", " promo tidak dapat ditambah", "error");
    })
   }
  </script>
