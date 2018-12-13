<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/head.php';
?>

<body>
 
    <?php
    include 'includes/nav.php';
    ?>

    
    
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Vuurwerk.nl</h1>
        <p class="com">Compleet assortiment</p>
      </div>
    <div class="product-device shadow-sm d-none d-md-block">
    </div>
       
    <div class="product-device product-device-2 shadow-sm d-none d-md-block">
    </div>
    </div>
    
    <div class="texta">
    <h1>Veiligheid</h1>
    </div>
     
     <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>ID
            <?php
              $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '100';";
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
            $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '110';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '120';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '130';";
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
    
    <div class="texta">
    <h1>Kindervuurwerk</h1>
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
    
    <div class="texta">
    <h1>Knalvuurwerk</h1>
    </div>
     
     <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>ID
          <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '300';";
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
               $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '310';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '320';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '330';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '340';";
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
    
    <div class="texta">
    <h1>Siervuurwerk</h1>
    </div>
     
     <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p>ID
          <?php 
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '400';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '410';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '420';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '430';";
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
                $sql = "SELECT product_id, product_naam, product_prijs FROM `compleet_assortiment` WHERE product_id = '440';";
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
    
    <?php
    include 'includes/footer.php';
    ?>
    
</body>
</html>