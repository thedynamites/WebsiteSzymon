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
        <h1 class="display-4 font-weight-normal">Kindervuurwerk</h1>
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
              $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '200';";
              include 'includes/DB-laden.php'
          ?>  
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"><a href="https://www.youtube.com/watch?v=KsWJlEZF0f8">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/826.1538745048.jpeg" width="200" height="300">
          </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
         <?php
            $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '210';";
            include 'includes/DB-laden.php'
         ?>      
         </p>
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=EzfW7LSRdCc">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/259.1447683371.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
      
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>ID
          <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '220';";
                include 'includes/DB-laden.php'
          ?>      
          </p>    
          <h2 class="display-5"></h2>
           <p class="lead"><a href="https://www.youtube.com/watch?v=Cl1qxnLK7FM">Korte filmpje</a></p>
          <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/829.1538745716.jpeg" width="200" height="300">
          </div>
      </div>
    
            
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
         <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '230';";    
                include 'includes/DB-laden.php'
         ?>     
         </p>   
         <h2 class="display-5"></h2>
        <p class="lead"><a href="https://www.youtube.com/watch?v=dT8AC0GXU7E">Korte filmpje</a></p>
         <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/256.1509474001.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
         <p>ID
         <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '240';";
                  include 'includes/DB-laden.php'
         ?>   
         </p>
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=cPSpYC0XfSA">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/595.1507283225.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
    </body>
     
     <?php
    include 'includes/footer.php';
    ?>
    
  </body>
</html>