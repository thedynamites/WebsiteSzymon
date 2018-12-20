
<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

     <title>Vuurwerk.nl</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bt.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cart.css" rel="stylesheet">
  </head>

<body>
  
   <!-- <nav class="site-header sticky-top py-1">
      <div class="containerr d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="product.php">Producten</a>
        <a class="py-2 d-none d-md-inline-block" href="cart.php">Winkelwagen</a>
      </div>
    </nav>-->

<h2>Winkelwagen</h2>
<p>Vuurwerk.nl.</p>
<div class="row">
  <div class="col-75">
    <div class="containerr">
      <form action="includes/DB-gekocht.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="naam"><i class="fa fa-user"></i> Naam</label>
            <input type="text" id="naam" name="naam" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adres"><i class="fa fa-address-card-o"></i> Adres</label>
            <input type="text" id="adres" name="adres" placeholder="Noordstraat 13">
            <label for="stad"><i class="fa fa-institution"></i> Stad</label>
            <input type="text" id="stad" name="stad" placeholder="Rotterdam">

            <div class="row">
              <div class="col-50">
                <label for="provincie">Provincie</label>
                <input type="text" id="provincie" name="provincie" placeholder="Zuid-Holland">
              </div>
              <div class="col-50">
                <label for="postcode">Postcode</label>
                <input type="text" id="postcode" name="postcode" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Betaling</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="naamopcard">Name on Card</label>
            <input type="text" id="naamopcard" name="naamopcard" placeholder="John More Doe">
            <label for="cardnummer">Credit card number</label>
            <input type="text" id="cardnummer" name="cardnummer" placeholder="1111-2222-3333-4444">
            <label for="vervalmaand">Exp Month</label>
            <input type="text" id="vervalmaand" name="vervalmaand" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="vervaljaar">Exp Year</label>
                <input type="text" id="vervaljaar" name="vervaljaar" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Verzendadres hetzelfde als facturering
        </label>
        <input type="submit" value="Kopen" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="containerr">
      <h4>Winkelwagen <span class="prijs" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="prijs"></span></p>
      <p><a href="#">Product 2</a> <span class="prijs"></span></p>
      <p><a href="#">Product 3</a> <span class="prijs"></span></p>
      <p><a href="#">Product 4</a> <span class="prijs"></span></p>
      <hr>
      <p>Totaal <span class="prijs" style="color:black"><b></b></span></p>
    </div>
  </div>
</div>

<?php
    include 'includes/footer.php'
?>


</body>
</html>
