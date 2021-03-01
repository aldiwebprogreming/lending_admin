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
                    <label for="formGroupExampleInput">Nama Product</label>
                    <input type="text" class="form-control" id="" placeholder="Masukan nama product" name="nama_product">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Kategori Produk</label>
                    <select class="form-control" name="kategori_produk">
                      <option>-- Pilih Kategori Produk --</option>
                      <option>Bunga</option>
                      <option>Papan Bunga</option>
                       <option>Parcel</option>
                      <option>Cake</option>

                    </select>
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Keterangan</label>
                    <textarea class="form-control" name="keterangan" style="height: 100px;" placeholder="Masukan keterangan product"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Harga</label>
                   <input type="number" name="harga" class="form-control" placeholder="Harga awal produk">
                  </div>

                  <div class="form-group">
                    <label for="formGroupExampleInput">Diskon</label>
                     <input type="number" name="diskon" class="form-control" placeholder="Masukan diskon produk">
                     <small>Mauskan diskon tanpa (%)</small>
                  </div>

                 
                  <div class="form-group">
                    <img src="<?= base_url() ?>assets/default/default.png" class = "img-thumbnail" style="height: 300px;" id="imgPreview">
                  </div>


                  <div class="form-group">
                    <label for="formGroupExampleInput">Gambar Galery</label>
                    <input type="file" name="foto" class="form-control" required="" id="image">
                    <small>Format  gambar harus jpg/jpeg dan png</small>
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

