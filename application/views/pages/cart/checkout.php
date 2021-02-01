<style media="screen">
  .box {
  background: #fff;
  border-radius: .30rem;
  margin: 0 0 30px;
  border: solid 1px #e6e6e6;
  padding: 20px;
  -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
  }

  .box .box-header {
  clear: both;
  border-radius: .30rem;
  background: #f7f7f7;
  margin: -20px -20px 20px;
  padding: 20px;
  border-bottom: solid 1px #eee;
  }

  .box .box-footer {
  clear: both;
  background: #f7f7f7;
  margin: 30px -20px -20px;
  padding: 20px;
  border-top: solid 1px #eee;
  }
</style>
    <div id="all">
      <div id="content">
        <div class="container" style="padding: 15px 0 15px 0">
          <div class="row">
            <div id="checkout" class="col-lg-12">
              <div class="box">
                <h1 style="text-align: center;"><strong>CHECKOUT</strong></h1>
                <br>
                <form method="POST" action="<?= base_url() ?>cart/transaction/">
                  <h1><i class="fas fa-map-marker-alt"></i> Shipping Address</h1>
                  <div class="content py-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="firstname">First Name</label>
                          <input id="firstname" type="text" name="fName" class="form-control" value="<?php if(isset($_SESSION['id'])) echo $user_detail[0]['fName']?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="lastname">Last Name</label>
                          <input id="lastname" type="text" name="lName" class="form-control" value="<?php if(isset($_SESSION['id'])) echo $user_detail[0]['lName']?>" disabled>
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="company">Address</label>
                          <input id="company" type="text" name="shipAddress" class="form-control" value="<?php if(isset($_SESSION['id'])) echo $user_detail[0]['address']?>" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="phone">Telephone</label>
                          <input id="phone" type="text" name="pNumber" class="form-control" value="<?php if(isset($_SESSION['id'])) echo $user_detail[0]['pNumber']?>" disabled>
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                  </div>
                  <hr style="background-color  : #71BEA3;">
                  <h1><i class="fas fa-wallet"></i> Payment Method</h1>
                  <div class="content py-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="box payment-method">
                          <h4>Cash on delivery <i class="fas fa-money-bill-wave"></i></h4>
                          <p>You pay when you get it.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="COD">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box payment-method">
                          <h4>Transfer <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-mastercard"></i></h4>
                          <p>VISA and Mastercard only.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="Transfer">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                  </div>
                  <hr style="background-color  : #71BEA3;">
                  <h1><i class="fas fa-shopping-bag"></i> Your Order</h1>
                  <div class="content">
                    <div class="table-responsive" style="border: 1px solid #dee2e6 ;border-radius: .30rem;">
                      <table class="table table-condensed">
              					<thead style="background-color  : #71BEA3; border-color  : #71BEA3;">
              						<tr style="font-weight: bold">
                            <td colspan="2">Product</td>
                            <td>Quantity</td>
                            <td>Unit price</td>
                            <td>Total</td>
              						</tr>
              					</thead>
              					<tbody>
                          <?php foreach($cart as $barang){ ?>
                            <tr>
                              <td><a href="<?= base_url() ?>home/productDetails/<?= $barang['item_id'] ?>"><img src="<?= base_url() ?>assets/uploads/poto/<?= $barang['Image']?>" alt="White Blouse Armani" style="height:150px;weight:150px"></a></td>
                              <td><a href="<?= base_url() ?>home/productDetails/<?= $barang['item_id'] ?>"><?= $barang['name'] ?></a></td>
                              <td><?= $barang['qty'] ?></td>
                              <td>$<?= $barang['price'] ?> </td>
                              <td>$<?= $barang['price']*$barang['qty'] ?></td>
                            </tr>
                          <?php } ?>
              						<tr>
              							<td colspan="3">&nbsp;</td>
              							<td colspan="2">
              								<table class="table table-condensed table-borderless">
              									<tr>
              										<td>Cart Sub Total</td>
              										<td>$<?php
                          $total = 0;
                          foreach($cart as $barang) {
                            $total = $total + $barang['price']*$barang['qty'];
                          }
                          echo $total;
                        ?></td>
              									</tr>
              									<tr>
              										<td>Shipping Cost</td>
              										<td>Free</td>
              									</tr>
              									<tr>
              										<td>Total</td>
              										<td><span>$<?php
                          $total = 0;
                          foreach($cart as $barang) {
                            $total = $total + $barang['price']*$barang['qty'];
                          }
                          echo $total;
                        ?></span></td>
              									</tr>
              								</table>
              							</td>
              						</tr>
              					</tbody>
              				</table>
                    </div>
                    <!-- /.table-responsive-->
                  </div>

                <br>
                <div class="box-footer d-flex justify-content-between">
                  <button type="button" onclick="location.href = '<?= base_url() ?>cart/index/'" class="btn" style="background-color: #71BEA3; border-color: #71BEA3; color: white"><i class="fa fa-chevron-left"></i> Back to Cart</button>
                  <button type="submit" href="checkout3.html" class="btn" style="background-color: #71BEA3; border-color: #71BEA3; color: white">Place an order <i class="fa fa-chevron-right"></i></button>
                </div>
                </form>
              </div>
              <!-- /.box-->
            </div>
            <!-- /.col-lg-12-->
          </div>
          <!-- /.row-->
        </div>
      </div>
    </div>
