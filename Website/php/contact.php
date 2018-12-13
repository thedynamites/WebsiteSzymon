<?php
    include 'includes/head.php';
    include_once 'includes/dbh.inc.php';  
 ?>
  <body>
    <?php 
      include 'includes/nav.php';
    ?>
      
   <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Contact ons</h1>
        <p class="lead font-weight-normal">Vuurwerk.nl</p>
      </div>
      <div class="product-device shadow-sm d-none d-md-block">
       <img src="https://raw.githubusercontent.com/thedynamites/Website-Stefan/master/Website/logo.png" width="500" height="500">
       </div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block">
       <img src="http://www.chezbo.nl/wp-content/uploads/2017/12/nordwood-themes-467442-1024x500.jpg" width="300" height="300">
       </div>
    </div>
    
<div class="formu">
    <form action="includes/signup.inc.php" method="post">
        <label for="naam">Naam</label>
        <input type="text" id="naam" name="naam" placeholder="Uw naam..">
        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" placeholder="Uw achternaam..">
        <label for="comment">Comment</label>
        <textarea class="area" id="comment" name="comment" placeholder="Uw comment.." style="height:170px"></textarea>
        <input class="button" type="submit" value="Akkoord">
    </form>
</div>
   
   s
</body>
   
    <?php
      include 'includes/footer.php';  
    ?>
    
   
  
 