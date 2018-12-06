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
    <link href="css/bt.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/styl.css" rel="stylesheet">
  </head>

<body>
    <nav class="site-header sticky-top py-1">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="index.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
         <a class="py-2 d-none d-md-inline-block" href="assortiment.php">Home</a>
        <a class="py-2 d-none d-md-inline-block" href="product.php">Contact</a>
        <a class="py-2 d-none d-md-inline-block" href="cart.php">cart</a>
      </div>
    </nav>
    
    <?php
    include 'includes/nav.php';
    ?>
    
   
    
     <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Knalvuurwerk</h1>
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
             $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` `knalvuurwerk` WHERE product_id = '300' or product_naam or product_prijs;";
             include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/820.1538740496.jpeg" width="200" height="300">
          </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` `knalvuurwerk` WHERE product_id = '310' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>
         <h2 class="display-5"></h2>
         <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/676.1507379014.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
      
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>
          <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` `knalvuurwerk` WHERE product_id = '320' or product_naam or product_prijs;";
                include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/820.1538740496.jpeg" width="200" height="300">
          </div>
      </div>
    
            
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` `knalvuurwerk` WHERE product_id = '330' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/676.1507379014.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
         <p>
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` `knalvuurwerk` WHERE product_id = '340' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/490.1476705650.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
    </body>
    
    <?php
    include 'includes/footer.php';
    ?>
    
  </body>
</html>