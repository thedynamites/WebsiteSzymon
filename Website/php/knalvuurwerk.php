<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/head.php'
?>

<body>
    
    
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
          <p>ID
          <?php 
             $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '300' or product_naam or product_prijs;";
             include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"<p><a href="https://www.youtube.com/watch?v=Ra57y8P9XQ4">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/820.1538740496.jpeg" width="200" height="300">
          </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '310' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=HWp24ysBfxo">Korte filmpje</a></p>
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
          <p>ID
          <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '320' or product_naam or product_prijs;";
                include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=d5fpeeCHSM4">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/820.1538740496.jpeg" width="200" height="300">
          </div>
      </div>
    
            
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '330' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=DVMQLRqG-Us">Korte filmpje</a></p>
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
         <p>ID
         <?php 
                 $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '340' or product_naam or product_prijs;";
                 include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=UTC0UM1ToQA">Korte filmpje</a></p>
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