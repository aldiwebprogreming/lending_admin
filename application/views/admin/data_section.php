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

              <div class="col-sm-6">
               <a href="<?= base_url() ?>section/tambah_section" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Section </a>
              </div>
              <br>

              
              <table id="example1" class="table table-bordered table-striped">
                
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Section</th>
                  <th>Format</th>
                  <th>Status</th>
                
                </tr>
                </thead>
                <tbody>
                
                <tr> 
                    <td>1</td>
                    <td>secction 1</td>
                    <td>mayang</td>
                   
                </tr>

                      
    
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama Section</th>
                  <th>Format</th>
                  <th>Status</th>
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
