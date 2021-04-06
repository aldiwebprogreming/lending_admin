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

                <a href="<?= base_url() ?>section/add_section1" class="btn btn-primary mb-5"><i class="fas fa-plus"></i> Tambah Data</a>

              <table id="example1" class="table table-bordered table-striped">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Sub judul</th>
                  <th>Judul card 1</th>
                  <th>Judul card 2</th>
                  <th>Judul card 3</th>
                  <th>Opsi</th>
                
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($section1 as $data) { ?>
                    
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['judul'] ?></td>
                    <td><?= $data['sub_judul'] ?></td>
                    <td><?= $data['judul_card1'] ?></td>
                    <td><?= $data['judul_card2'] ?></td>
                    <td><?= $data['judul_card3'] ?></td>
                    <td>
                     <a id="hapus" href="<?= base_url('section/') ?>hapus_section1?id=<?= $data['id'] ?>" onclick="return confirm('Yakin Hapus?')" class="badge badge-danger">Hapus</a>

                      <a href="<?= base_url('section/') ?>edit_section1?id=<?= $data['id'] ?>" class="badge badge-success">Edit</a>
                        <button type="button" class="badge badge-primary" data-toggle="modal" data-target="#exampleModal<?= $data['id'] ?>">
                      Detail
                    </button>
                    </td>
                </tbody>
                <tfoot>
                <tr>

                  <div class="modal fade" id="exampleModal<?= $data['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Section 1</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                              
                                <div class="form-group">
                                  <label for="formGroupExampleInput">Judul</label>
                                  <p><?= $data['judul'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Sub judul</label>
                                  <p><?= $data['sub_judul'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Judul</label>
                                  <p><?= $data['judul'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Judul card 1</label>
                                  <p><?= $data['judul_card1'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Img card 1</label><br>
                                  <img src="<?= base_url() ?>assets/gambar_section1/<?= $data['img_card1'] ?>" alt="..." class="img-thumbnail" style="height: 100px;">
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Text card 1</label>
                                  <p><?= $data['text_card1'] ?></p>
                                </div>
                                <hr>


                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Judul card 2</label>
                                  <p><?= $data['judul_card2'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Img card 2</label><br>
                                 <img src="<?= base_url() ?>assets/gambar_section1/<?= $data['img_card2'] ?>" alt="..." class="img-thumbnail" style="height: 100px;">
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Text card 2</label>
                                  <p><?= $data['text_card2'] ?></p>
                                </div>
                                <hr>

                                 <div class="form-group">
                                  <label for="formGroupExampleInput">Judul card 3</label>
                                  <p><?= $data['judul_card3'] ?></p>
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Img card 3</label><br>
                                  <img src="<?= base_url() ?>assets/gambar_section1/<?= $data['img_card3'] ?>" alt="..." class="img-thumbnail" style="height: 100px;">
                                </div>
                                <hr>

                                <div class="form-group">
                                  <label for="formGroupExampleInput">Text card 3</label>
                                  <p><?= $data['text_card3'] ?></p>
                                </div>
                   

                                 
                              </div>
                              <div class="modal-footer">
                               
                                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                    </div>

                <?php } ?>
                  
                  <!-- <th>Status</th> -->
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
  <!-- <script>

   // function tambah(){
   //  $("#tambah").click(function(){

   //    swal("Maaf!", " promo tidak dapat ditambah", "error");
   //  })
   // }
  </script> -->
