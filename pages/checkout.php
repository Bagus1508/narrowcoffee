<?php
	require 'config.php';

	$grand_total = 0;
	$allItems = '';
	$items = [];

	$sql = "SELECT CONCAT(product_name, '(',qty,')') AS ItemQty, total_price FROM cart";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = $stmt->get_result();
	while ($row = $result->fetch_assoc()) {
	  $grand_total += $row['total_price'];
	  $items[] = $row['ItemQty'];
	}
	$allItems = implode(', ', $items);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Checkout | Narrow Coffee</title>
  <link rel="stylesheet" href="src/style/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>

<body style="background-color: #938362;">
  <?php include 'partials/navbar.php' ?>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 px-4 pb-4" id="order">
        <h4 class="text-center text-white p-2" style="margin-top: 80px;">Selesaikan Pesanan!</h4>
        <div class="jumbotron p-3 mb-2 text-center">
          <h6 class="lead"><b>Produk : </b><?= $allItems; ?></h6>
          <h5><b>Total Harga : </b><?= number_format($grand_total,2) ?>/-</h5>
        </div>
        <form action="" method="post" id="placeOrder">
          <input type="hidden" name="products" value="<?= $allItems; ?>">
          <input type="hidden" name="grand_total" value="<?= $grand_total; ?>">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Masukan Nama" required>
          </div>
          <div class="form-group">
            <input type="text" name="no_order" id="orderNumber" class="form-control" placeholder="No Pesanan" required readonly>
          </div>
          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Masukan No Telepon" required>
          </div>
          <div class="form-group">
            <textarea name="address" class="form-control" rows="3" cols="10" placeholder="Masukan informasi tambahan"></textarea>
          </div>
          <h6 class="text-center lead">Pilih Metode Pembayaran</h6>
          <div class="form-group">
            <select name="pmode" class="form-control">
              <option value="" selected disabled>-Pilih Pembayaran-</option>
              <option value="Cash">Cash On Delivery</option>
              <option value="Debit/Credit">Debit/Credit Card</option>
            </select>
          </div>
          <div class="form-group">
            <input type="submit" name="submit" value="Place Order" class="btn btn-danger btn-block">
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="src/script/script.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>

  <script type="text/javascript">
  $(document).ready(function() {

    // Sending Form data to the server
    $("#placeOrder").submit(function(e) {
      e.preventDefault();
      $.ajax({
        url: 'action.php',
        method: 'post',
        data: $('form').serialize() + "&action=order",
        success: function(response) {
          $("#order").html(response);
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: 'action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });

  window.onload = function() {
        // Membuat nomor pesanan secara acak dengan panjang 8 karakter
        const randomOrderNumber = Math.random().toString(36).substr(2, 8).toUpperCase();

        // Mengambil elemen input untuk nomor pesanan
        const orderInput = document.getElementById('orderNumber');

        // Mengatur nilai input nomor pesanan sebagai nomor pesanan yang telah dibuat secara acak
        orderInput.value = randomOrderNumber;
    };

  </script>
</body>

</html>