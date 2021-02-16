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

            
              <!--   <a href="<?= base_url() ?>operator/add_operator" class="btn btn-primary mb-4"><i class="fas fa-plus"></i> Tambah Operator</a> -->
            
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>IP Address</th>
                  <th>Date</th>
                  <th>Status</th>
                
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no =1;
                  foreach ($data_visitor as $data) { ?>
                    
                <tr> 
                    <td><?= $no++; ?></td>
                    <td><?= $data['ip'] ?></td>
                    <td><?= $data['date'] ?></td>
                    <td>
                      <?php if ($online == null) {
                        echo "<span style='color:red;'>offline</span>";
                      }else {

                        foreach ($online as $data1) {
                          if ($data1 == $data) {
                            echo "<span style='color:blue;'>Online</span>";
                          } else {
                            echo "<span style='color:red;'>offline</span>";
                          }
                        }
                      } ?>
                    </td>
                   
                </tr>

                      
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>IP Address</th>
                  <th>Tanggal</th>
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
