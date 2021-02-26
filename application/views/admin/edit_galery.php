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

              <?php foreach ($galery as $data) {
                # code...
              } ?>
              <div class="card-body">
                <div class="row">
                   <div class="col-lg-6">
                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                    <label for="formGroupExampleInput">Nama Product</label>
                    <input type="text" class="form-control" id="" placeholder="" value="<?= $data['nama_product'] ?>"  name="nama_product">
                  </div>

                   <div class="form-group">
                    <label for="formGroupExampleInput">Kategori Produk</label>
                    <select class="form-control" name="kategori_produk">
                      <option><?= $data['kategori_produk'] ?></option>
                      <option>Bunga</option>
                      <option>Papan Bunga</option>
                       <option>Parcel</option>
                      <option>Cake</option>

                    </select>
                  </div>
                

                  <div class="form-group">
                    <label for="formGroupExampleInput">Keterangan</label>
                    <textarea class="form-control" name="keterangan" style="height: 100px;" placeholder="Masukan keterangan product"><?= $data['keterangan'] ?></textarea>
                  </div>

                 

                  <div class="form-group">
                    <img src="<?= base_url() ?>assets/gambar_galery/<?= $data['gambar']?>" class = "img-thumbnail" style="height: 300px;" id="imgPreview">

                  </div>


                  <div class="form-group">
                    <label for="formGroupExampleInput">Gambar Promo</label>
                    <input type="file" name="foto" class="form-control"  id="image" value="<?= $data['gambar'] ?>">
                    <small>Format  gambar harus jpg/jpeg dan png</small>
                  </div>
                   


                  <div class="form-group">
                  <input type="submit" name="edit" class="btn btn-primary" value="Edit">
                  <a href="<?= base_url() ?>galery/galery"  class = "btn btn-success">Kembali</a>
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

