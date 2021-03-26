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

            

                <a href="<?= base_url() ?>video/add_video" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Video Review</a>
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Video Review</th>
                  <th>Frame video</th>
                  <th>Section</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($video as $data) { ?>
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['nama_video_review'] ?></td>
                    <td><?= $data['frame'] ?></td>
                     <td><?= $data['section'] ?></td>
                    <td>
                      <a href="<?= base_url('video/') ?>hapus?id=<?= $data['id'] ?>"  onclick="return confirm('Yakin Hapus?')" class="badge badge-danger">Hapus</a>
                      <a href="<?= base_url('video/') ?>edit?id=<?= $data['id'] ?>" class="badge badge-success">Edit</a>
                      <!-- <a href="<?= base_url('promo/') ?>det?id=<?= $data['id'] ?>" class="badge badge-primary" data-target="#exampleModal">Detail</a> -->
                     
                    </td>
                </tr>

                      
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Video Review</th>
                  <th>Frame video</th>
                  <th>Section</th>
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

      swal("Maaf!", " Video tidak dapat ditambah", "error");
    })
   }
  </script>
