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
        <h1 class="display-4 font-weight-normal">Siervuurwerk</h1>
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
              $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '400' or product_naam or product_prijs;";
              include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"><a href="https://www.youtube.com/watch?v=ox9R1idrd0g">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/742.1507883141.jpeg" width="200" height="300">
          </div>
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
          <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '410' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=bZkCtWJE3UU">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/356.1507881858.jpeg" width="400" height="300">
          </div>
      </div>
    </div>
      
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>ID
           <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '420' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
          ?>      
          </p>
          <h2 class="display-5"></h2>
          <p class="lead"><a href="https://www.youtube.com/watch?v=fEY_tLF1Dpg">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="cart.php">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/action_package/22.1540391817.jpeg" width="200" height="300">
          </div>
      </div>
    
            
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p>ID
          <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '430' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
         <p class="lead"><a href="https://www.youtube.com/watch?v=0udgwTw8jG0">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/736.1507882492.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
         <p>ID
          <?php 
                  $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '440' or product_naam or product_prijs;";
                  include 'includes/DB-laden.php'
          ?>       
         </p>   
         <h2 class="display-5"></h2>
          <p class="lead"><a href="https://www.youtube.com/watch?v=igosDockTPY">Korte filmpje</a></p>
            <a class="btn btn-outline-secondary" href="#">Naar winkelwagen</a>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
          <img src="https://anypos.o.auroraobjects.eu/286/article/739.1507882805.jpeg" width="200" height="300">
          </div>
      </div>
    </div>
</body>
    
    <?php
    include 'includes/footer.php';
    ?>
    
  </body>
</html>
