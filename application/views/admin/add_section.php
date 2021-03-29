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
                   <div class="col-lg-4">

                  

                <form method="post" action="" enctype="multipart/form-data">

                  <div class="form-group">
                   
                    <input type="text" class="form-control" id="" placeholder="Masukan nama section anda" name="nama_section" value="" required="" placeholder="Masukana nama section">

                  </div>

                  
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Masukan Judul" aria-label="Recipient's username" aria-describedby="basic-addon2" id="isiJudul">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="judul" type="button">OK</button>
                      </div>
                    </div>

                     <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="Masukan Sub Judul" aria-label="Recipient's username" aria-describedby="basic-addon2" id="subJudul">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" id="sub_judul" type="button">OK</button>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="chek">
                        <label class="form-check-label" for="gridCheck" style="margin-right: 35px;">
                          Tabel
                        </label>

                        <input class="form-check-input" type="checkbox" id="row">
                        <label class="form-check-label" for="gridCheck" style="margin-right: 35px;">
                          Row
                        </label>

                        <input class="form-check-input" type="checkbox" id="images">
                        <label class="form-check-label" for="gridCheck" style="margin-right: 35px;">
                          Images
                        </label>

                        <input class="form-check-input" type="checkbox" id="card">
                        <label class="form-check-label" for="gridCheck" style="margin-right: 35px;">
                          Card
                        </label>

                      </div>


                    </div>

                    <!-- form images -->
                    <div class="form-group">
                      <input type="file" name="gambar" class="form-control" id="formImages" style="display: none;">
                    </div>
                     <!-- form images -->

                       <!-- form card -->
                    <div class="form-group">
                     <select class="form-control" name="gridCardt" id="gridCardt" style="display: none">
                       <option>--Pilih grid card--</option>
                       <option value="2">2 Grid</option>
                       <option value="3">3 Grid</option>
                       <option value="3">4 Grid</option>
                       <option value="6">6 Grid</option>
                     </select> 
                    </div>
                     <!-- form images -->

                  <div class="form-group">
                  <input type="submit" name="kirim" class="btn btn-primary" value="Save">
                  <a href="<?= base_url() ?>testimonials/testimonial"  class = "btn btn-success">Kembali</a>
                  </div>



                </form>
                </div>

                <div class="col-lg-8" style="border: 1px red solid">
                  <h3 class="text-center" id="text-judul">New Section</h3>
                  <p class="text-center" id="text-subJudul">Enter the title of the subtitles</p>
                  <hr style="width: 80px; height: 20px" style="color: orange;">

                    <div class="3grid" style="display: none;">
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="card" style="">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                      <div class="col-lg-4">
                        <div class="card" style="">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>


                      <div class="col-lg-4">
                        <div class="card" style="">
                          <img class="card-img-top" src="..." alt="Card image cap">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>


                  

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

 <script>
   $(document).ready(function(){
    $("#judul").click(function(){
      var judul = $("#isiJudul").val();
      $("#text-judul").html(judul);
    });

   



   });
 </script>

<script>
  $(document).ready(function(){
     $("#sub_judul").click(function(){
      var subJudul = $("#subJudul").val();
      $("#text-subJudul").html(subJudul);
    });
  })
</script>


<script>
  $(document).ready(function(){
     $("#images").click(function(){
        if ($(this).is(':checked')) {
          $("#formImages").show();
        } else {

           $("#formImages").hide();
        }
    });

     $("#card").click(function(){
        if ($(this).is(':checked')) {
          $("#gridCardt").show();
          $("#gridCardt").change(function(){
            var a = $(this).val();
            if (a == 2) {
              alert(2);
            }else if(a == 3){
              $('.3grid').show()
             
            }else if(a == 4){
               $('.4grid').show()
           
              
            }else{
              alert(6)
            }
          })
        } else {

           $("#gridCardt").hide();
        }
    });
  })
</script>