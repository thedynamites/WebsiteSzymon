<?php
    include_once 'includes/dbh.inc.php';
?>
<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

     <title>Vuurwerk.nl</title>

    <!-- Bootstrap core CSS -->
    <link href="bt.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styl.css" rel="stylesheet">
  </head>
    
<body>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="assortiment.php">Assortiment</a>
        <a class="py-2 d-none d-md-inline-block" href="product.php">Producten</a>
        <a class="py-2 d-none d-md-inline-block" href="cart.php">Winkelwagen</a>
      </div>
    </nav>
    
    <ul>
  <li><a href="Veiligheid.php">Veiligheid</a></li>
  <li><a href="kindervuurwerk.php">Kindervuurwerk</a></li>
  <li><a href="knalvuurwerk.php">Knalvuurwerk</a></li>
  <li><a href="siervuurwerk.php">Siervuurwerk</a></li>
  <li><a href="assortiment.php">Compleet assortiment</a></li>   
</ul>
    
    
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Veiligheid</h1>
        <p class="lead font-weight-normal">Vuurwerk.nl</p>
      </div>
      <div class="product-device shadow-sm d-none d-md-block">
       
       </div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block">
        </div>
    </div>
    
    <div class="text">
    <h1></h1>
    </div>
     
<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>
<?php
    
    $sql = "SELECT product_id, product_naam, product_prijs FROM `veiligheid` WHERE product_id = '100' or product_naam or product_prijs;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
            
              if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_id'] . "<br>";
            echo $row['product_naam'] . "<br>";
            echo $row['product_prijs'] . "<br>";
            }
              }

              ?>
</p>
          
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://vuurwerktotaal.nl/img/vuurwerktotaal/prod/031020181235571881_390_390.png" width="200" height="300">
          </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>
    <?php
    
    $sql = "SELECT product_id, product_naam, product_prijs FROM `veiligheid` WHERE product_id = '110' or product_naam or product_prijs;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
            
              if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_id'] . "<br>";
            echo $row['product_naam'] . "<br>";
            echo $row['product_prijs'] . "<br>";
            }
              }

              ?>
            </p>
            
         <h2 class="display-5"></h2>
         <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://vuurwerktotaal.nl/img/vuurwerktotaal/prod/260920181220092010%20%201_390_390.png" width="200" height="300">
          </div>
      </div>
    </div>
      
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>
            
            <?php
    
    $sql = "SELECT product_id, product_naam, product_prijs FROM `veiligheid` WHERE product_id = '120' or product_naam or product_prijs;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
            
              if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_id'] . "<br>";
            echo $row['product_naam'] . "<br>";
            echo $row['product_prijs'] . "<br>";
            }
              }

              ?>
              
            </p>
          <h2 class="display-5"></h2>
          <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://vuurwerktotaal.nl/img/vuurwerktotaal/prod/151020141124191875Aansteeklont_390_390.png" width="200" height="300">
          </div>
      </div>
    
            
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>
            
            <?php
    
    $sql = "SELECT product_id, product_naam, product_prijs FROM `veiligheid` WHERE product_id = '130' or product_naam or product_prijs;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
            
              if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_id'] . "<br>";
            echo $row['product_naam'] . "<br>";
            echo $row['product_prijs'] . "<br>";
            }
              }

              ?>
             
            </p>
         <h2 class="display-5"></h2>
         <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://vuurwerktotaal.nl/img/vuurwerktotaal/prod/27112017112207Veiligheidspakket%20Vuurwerk_390_390.png" width="200" height="300">
          </div>
      </div>
    </div> 
    </body>
<footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2018-2019</small>
        </div>
        <div class="col-6 col-md">
          <h5>Contact</h5>
          <ul class="list-unstyled text-small">
            <li><a href="tel:555-555-1212">Neem contact met ons telefonisch</a></li>
            <li><a href="mailto:vuurwerk.nl@gmail.com">Neem contact met ons via e-mail</a></li>
            <li><a class="text-muted" href="product.html">vuurwerk kopen</a></li>
          </ul>
        </div>
        
       
        <div class="col-6 col-md">
          <h5>Informatie</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="https://www.veiligheid.nl/vuurwerk/veiligheidstips?gclid=Cj0KCQiAuf7fBRD7ARIsACqb8w5gzSJ1N3QjPQYPbOdoO1DZ9lwaiFqVdZwQDhrHW5vWGOSezS6Xv-EaAjWpEALw_wcB">Vuurwerkregels</a></li>
            <li><a class="text-muted" href="#">Bestelinformatie</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>