

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="cart.css" rel="stylesheet">
</head>
<body>

<h2>Winkelwagen</h2>
<p>Vuurwerk.nl.</p>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="includes/signup.inc.php" method="post">
      
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
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
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
    <div class="container">
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

</body>
</html>
