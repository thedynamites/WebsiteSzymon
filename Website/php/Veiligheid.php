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
          <p>ID
             <?php 
              $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '100' or product_naam or product_prijs;";
              include 'includes/DB-laden.php'
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
         <p>ID
         <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '110' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
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
          <p>ID
          <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '120' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
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
         <p>ID
         <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '130' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
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
    
    <?php
    include 'includes/footer.php';
    ?>
    
  </body>
</html>