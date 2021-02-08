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

            
              <!--   <a href="<?= base_url() ?>galery/add_galery" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Galery Product</a> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($pesan as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['phone'] ?></td>
                    <td><?= $data['email'] ?></td>
                    <td>
                      <a href="<?= base_url('Message/') ?>hapus?id=<?= $data['id'] ?>"  onclick="return confirm('Yakin Hapus?')" class="badge badge-danger">Hapus</a>
                     <!--  <a href="<?= base_url('galery/') ?>edit?id=<?= $data['id'] ?>" class="badge badge-success">Edit</a> -->
                      <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                      Detail
                    </button>
                     
                    </td>
                </tr>
                <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Message</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                              
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Nama</label>
                                  <p><?= $data['nama'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Phone</label>
                                  <p><?= $data['phone'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Email</label>
                                  <p><?= $data['email'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Mesaage</label>
                                  <p><?= $data['pesan'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Date Post</label>
                                  <p><?= $data['date_post'] ?></p>
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
                  <th>Nama</th>
                  <th>Phone</th>
                  <th>Email</th>
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
<script src="<?php echo base_url() ?>assets/alert.js"></script>
  <script>

   function tambah(){
    $("#tambah").click(function(){

      swal("Maaf!", " promo tidak dapat ditambah", "error");
    })
   }
  </script>
