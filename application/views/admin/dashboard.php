  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <?= $sub_title; ?> </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?= $sub_title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Active</h3>

                <p>Lending</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-bulb"></i>
              </div>
              <a href="<?= base_url() ?>/promo/promo" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $product ?></h3>

                <p>Product</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="<?= base_url() ?>galery/galery" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $message ?></h3>

                <p>Message</p>
              </div>
              <div class="icon">
                <i class="ion ion-email"></i>
              </div>
              <a href="<?= base_url() ?>message/message" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <?php 

              $date = date('Y-m-d');

              $pengunjunghariini  = $this->db->query("SELECT * FROM tbl_visitor WHERE date ='".$date."' GROUP BY ip")->num_rows(); // Hitung jumlah pengunjung

              

           ?>

           <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?=  $pengunjunghariini ?></h3>

                <p>Pengunjung Hari Ini</p>
              </div>
              <div class="icon">
                <i class="ion ion-iphone"></i>
              </div>
              <a href="<?= base_url() ?>message/message" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <?php 

              $dbpengunjung = $this->db->query("SELECT COUNT(hits) as hits FROM tbl_visitor")->row(); 
               
              $totalpengunjung = isset($dbpengunjung->hits)?($dbpengunjung->hits):0; 

           ?>

          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $totalpengunjung; ?></h3>

                <p>Jumlah Pengunjung</p>
              </div>
              <div class="icon">
                <i class="ion ion-laptop"></i>
              </div>
              <a href="<?= base_url() ?>message/message" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>


          <?php 

          $bataswaktu = time() -300;

          

            $pengunjungonline  = $this->db->query("SELECT * FROM tbl_visitor WHERE online > '".$bataswaktu."'")->num_rows(); // hitung pengunjung online

           ?>


          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?= $pengunjungonline; ?></h3>

                <p>Pengunjung Online</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark"></i>
              </div>
              <a href="<?= base_url() ?>message/message" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>




            <!-- /.card -->

          <!-- /.col-md-6 -->
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>