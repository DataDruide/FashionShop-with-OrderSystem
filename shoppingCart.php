<!DOCTYPE html>
<html>

<head>
  <title>Checkout</title>
  <!-- Ihr HTML-Head-Bereich für die Checkout-Seite -->

  <style>
    /* Allgemeine Stilanpassungen */
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container-fluid {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      max-width: 1000px;
      width: 100%;
    }

    /* Formularelemente */
    form {
      display: flex;
      flex-wrap: wrap;
    }

    .col-50 {
      flex: 50%;
      padding: 10px;
    }

    label {
      font-weight: bold;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="checkbox"] {
      margin-right: 5px;
    }

    .icon-container {
      margin-top: 10px;
    }

    .fa {
      font-size: 30px;
    }

    /* Buttons */
    .checkout-btn {
      background-color: #4CAF50;
      color: white;
      padding: 15px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
      margin-top: 10px;
    }

    /* Tabelle */
    table {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #ddd;
      margin-top: 20px;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .price {
      font-size: 18px;
      font-weight: bold;
      color: #333;
    }

    /* Responsive Design für kleinere Bildschirme */
    @media screen and (max-width: 600px) {
      .col-50 {
        flex: 100%;
      }
    }
  </style>
</head>

<body>
  <!-- Ihr HTML-Body-Bereich für die Checkout-Seite -->
  <section class="section">
    <div class="container-fluid">
      <div class="row-checkout">
        <div class="col-75">
          <div class="container-checkout">
            <form id="checkout_form" action="checkout_process.php" method="POST" class="was-validated">
              <!-- Hier wird der Checkout-Formularbereich erstellt -->
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                <input type="text" id="fname" class="form-control" name="firstname" pattern="^[a-zA-Z ]+$"
                  value="<?php echo $row["first_name"] . ' ' . $row["last_name"]; ?>">
                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                <input type="text" id="email" name="email" class="form-control"
                  pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$" value="<?php echo $row["email"]; ?>"
                  required>
                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                <input type="text" id="adr" name="address" class="form-control" value="<?php echo $row["address1"]; ?>"
                  required>
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city" class="form-control" value="<?php echo $row["address2"]; ?>"
                  pattern="^[a-zA-Z ]+$" required>

                <div class="row">
                  <div class="col-50">
                    <label for="state">State</label>
                    <input type="text" id="state" name="state" class="form-control" pattern="^[a-zA-Z ]+$" required>
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip</label>
                    <input type="text" id="zip" name="zip" class="form-control" pattern="^[0-9]{6}(?:-[0-9]{4})?$"
                      required>
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Payment</h3>
                <label for="fname">Accepted Cards</label>
                <div class="icon-container">
                  <i class="fa fa-cc-visa" style="color:navy;"></i>
                  <i class="fa fa-cc-amex" style="color:blue;"></i>
                  <i class="fa fa-cc-mastercard" style="color:red;"></i>
                  <i class="fa fa-cc-discover" style="color:orange;"></i>
                </div>

                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname" class="form-control" pattern="^[a-zA-Z ]+$" required>

                <div class="form-group" id="card-number-field">
                  <label for="cardNumber">Card Number</label>
                  <input type="text" class="form-control" id="cardNumber" name="cardNumber" required>
                </div>
                <label for="expdate">Exp Date</label>
                <input type="text" id="expdate" name="expdate" class="form-control"
                  pattern="^((0[1-9])|(1[0-2]))\/(\d{2})$" placeholder="12/22" required>

                <div class="row">
                  <div class="col-50">
                    <div class="form-group CVV">
                      <label for="cvv">CVV</label>
                      <input type="text" class="form-control" name="cvv" id="cvv" required>
                    </div>
                  </div>
                </div>
              </div>
              <label><input type="CHECKBOX" name="q" class="roomselect" value="conform" required> Shipping
                address same as billing
              </label>
              <?php
              $i = 1;
              $total = 0;
              $total_count = $_POST['total_count'];
              while ($i <= $total_count) {
                $item_name_ = $_POST['item_name_' . $i];
                $amount_ = $_POST['amount_' . $i];
                $quantity_ = $_POST['quantity_' . $i];
                $total = $total + $amount_;
                $sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
                $query = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($query);
                $product_id = $row["product_id"];
                echo "  
                <input type='hidden' name='prod_id_$i' value='$product_id'>
                <input type='hidden' name='prod_price_$i' value='$amount_'>
                <input type='hidden' name='prod_qty_$i' value='$quantity_'>
                ";
                $i++;
              }
              ?>
              <input type="hidden" name="total_count" value="<?php echo $total_count; ?>">
              <input type="hidden" name="total_price" value="<?php echo $total; ?>">
              <input type="submit" id="submit" value="Continue to checkout" class="checkout-btn">
            </form>
          </div>
        </div>
        <div class="col-25">
          <div class="container-checkout">
            <?php
            if (isset($_POST["cmd"])) {

              $user_id = $_POST['custom'];

              $i = 1;
              echo
                "
                <h4>Cart 
                <span class='price' style='color:black'>
                <i class='fa fa-shopping-cart'></i> 
                <b>$total_count</b>
                </span>
              </h4>

                <table class='table table-condensed'>
                <thead><tr>
                <th >no</th>
                <th >product title</th>
                <th >    qty    </th>
                <th >    amount</th></tr>
                </thead>
                <tbody>
                ";
              $total = 0;
              while ($i <= $total_count) {
                $item_name_ = $_POST['item_name_' . $i];

                $item_number_ = $_POST['item_number_' . $i];

                $amount_ = $_POST['amount_' . $i];

                $quantity_ = $_POST['quantity_' . $i];
                $total = $total + $amount_;
                $sql = "SELECT product_id FROM products WHERE product_title='$item_name_'";
                $query = mysqli_query($con, $sql);
                $row = mysqli_fetch_array($query);
                $product_id = $row["product_id"];

                echo "  
                <tr><td><p>$item_number_</p></td><td><p>$item_name_</p></td><td ><p>$quantity_</p></td><td ><p>$amount_</p></td></tr>";

                $i++;
              }

              echo "

              </tbody>
              </table>
              
              <hr>

              <h3>total<span class='price' style='color:black'><b>$$total</b></span></h3>";
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>