<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
</style>

<!-- <div class="container"> -->
<div id="demo" class="carousel slide" data-ride="carousel" style="height: 50%'">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner" style="max-height: 500px;">
    <div class="carousel-item active"style="width:1100; height:100" >
      <!-- img('assets/image/G1.jpg','width="1100"','height="500"') -->

      <img src="<?= base_url()?>/assets/uploads/Carousel/G4.png" alt="Los Angeles"  style="width:1100; height:20%;">

    </div>
    <div class="carousel-item">
       <!-- img('assets/image/G2.jpg','width="1100"','height="500"') -->

      <img src="<?= base_url()?>/assets/uploads/Carousel/G5.png" alt="Los Angeles" style="width:1100; height:20%;">
      <!-- <img src="ProjectUAS/G2.jpg" alt="Chicago" width="1100" height="500"> -->

    </div>
    <div class="carousel-item">

      <img src="<?= base_url()?>/assets/uploads/Carousel/G6.png" alt="Los Angeles" style="width:1100; height:20%;">
      <!-- img('assets/image/G3.jpg','width="1100"','height="500"') -->
      <!--<img src="ProjectUAS/G3.jpg" alt="New York" width="1100" height="500">-->

    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<!-- </div> -->
<!-- END CAROUSEL -->

<!-- BAWAHNYA CAROUSEL, PRODUCTS -->
<div class="container-fluid" style="background-color: #71BEA3;">
  <div class="box" style="border: solid 1px #71BEA3;
    border-radius: .30rem;
    padding: 30px 30px 30px 30px;">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="row products">
          <div class="col-lg-6" style="margin-bottom: 10px;">
              <div class="product card">
                <div class="card-header bg-transparent" style="border-color: #71BEA3; margin-left:20px; margin-right:20px; height:110px;">
                  <h1 class="card-text" style="text-align: center; vertical-align: middle;font-size:45px;padding-top:18px">MAN</h1>
                </div>
                <div class="card-body">
                  <center>
                  <a href="<?= base_url() ?>home/tampilBarang/man/all" class="stretched-link">
                  <img src="<?= base_url(); ?>/assets/uploads/gender/men.jpg" alt="" class="img-fluid" style="width: 100%; height:300px"></a>
                  </center>
                </div>
              </div>
            <!-- /.product            -->
          </div>
           <div class="col-lg-6" style="margin-bottom:10px">
              <div class="product card ">
                <div class="card-header bg-transparent" style="border-color: #71BEA3; margin-left:20px; margin-right:20px; height:110px;">
                  <h1 class="card-text" style="text-align: center; vertical-align: middle;font-size:45px;padding-top:18px">WOMAN</h1>
                </div>
                <div class="card-body">
                  <center>
                  <a href="<?= base_url() ?>home/tampilBarang/woman/all" class="stretched-link">
                  <img src="<?= base_url(); ?>assets/uploads/gender/women.jpg" alt="" class="img-fluid" style="width: 100%;height:300px"></a>
                  </center>
                </div>
              </div>
            <!-- /.product            -->
          </div>
          <!-- /.ROW PRODUCTS-->
        </div>
      </div>
      <!-- /.ROW KATEGORI MAN,WOMAN,ALL-->
    </div>
    <br>
    <!-- SHOW PRODUCTS-->
    <div style="background-color: white; border-radius: .30rem;">
        <div>
          <h1 style="text-align: center; padding-top: 10px;font-size:45px;">PRODUCTS</h1>
          <hr style="border-color: #71BEA3; margin: 0 30px 0 30px;">
        </div>
        <div class="row products">
          <?php foreach ($randBarang as $row) : ?>
          <div class="col-lg-3 col-md-6 col-xl-3" style="padding: 30px 70px 30px 70px;">
            <div class="product card">
              <div class="card-body" style=" text-align: center;">
                <a href="<?= base_url() ?>home/productDetails/<?= $row['item_id']?>" class="stretched-link">
                <img src="<?php
                  if($row['Image']!=NULL){
                      echo base_url()."assets/uploads/poto/".$row['Image'];
                  }
                  else{
                      echo base_url()."assets/uploads/poto/G10.jpg";
                  } ?>"class="img-fluid" style="margin:10px; width: 200px ;height:300px;"></a>
              </div>
              <div class="card-footer bg-transparent" style="border-color: #71BEA3">
                <h4 style="text-align: center;"><?= $row['name']; ?></h3>
              </div>
            </div>
          </div>
          <?php endforeach ?>
          <!-- /.ROW PRODUCTS-->
        </div>
        <!-- /.SHOW PRODUCTS-->
    </div>
    <!-- /.Box-->
  </div>
</div>

<?php
    //kasih tau kalo signupnya bener
    if(isset($_SESSION['notloggedin'])){
        echo "<script> alert('Please Sign In to Continue.'); </script>";
        unset($_SESSION['notloggedin']);
    }
?>
