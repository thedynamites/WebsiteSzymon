<?php
    include_once 'includes/dbh.inc.php';
    include 'includes/head.php';
?>





<body>
    <?php
        include 'includes/nav.php'
    ?>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Gekocht</h1>
        <p class="lead font-weight-normal">Vuurwerk.nl</p>
      </div>
      <div class="product-device shadow-sm d-none d-md-block">
       <img src="https://previews.123rf.com/images/amankris/amankris1711/amankris171100132/90837044-nieuw-jaar-2019-concept-met-wekker-op-witte-achtergrond-wordt-ge%C3%AFsoleerd-die-.jpg" width="300" height="300">
       </div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block">
       <img src="http://www.chezbo.nl/wp-content/uploads/2017/12/nordwood-themes-467442-1024x500.jpg" width="300" height="300">
       </div>
    </div>
    
    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-dark mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <p></p>
          <h2 class="display-5">Klant</h2>
          <p class="lead">Gegevens</p>
          <p>
    <?php
    $sql = "SELECT * FROM gekocht;";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['id'] . "<br>";
            echo $row['naam'] . "<br>";
            echo $row['email'] . "<br>";
            echo $row['adres'] . "<br>";
            echo $row['stad'] . "<br>";
            echo $row['provincie'] . "<br>";
            echo $row['postcode'] . "<br>" . "<br>";
            echo "card" . "<br>"; 
            echo $row['naamopcard'] . "<br>";
            echo $row['cardnummer'] . "<br>";
            echo $row['vervalmaand'] . "<br>";
            echo $row['vervaljaar'] . "<br>";
            echo $row['cvv'] . "<br>";
        }
    }
?>


</p>
        </div>
        
      </div>
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
         <p></p>
         <h2 class="display-5">Bestelde</h2>
         <p class="lead">Producten</p>
         <p>
    <?php
    $sql = "SELECT * FROM `compleet_assortiment` WHERE product_id = '200';";
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    
    if ($resultcheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['product_id'] . "<br>";
            echo $row['product_naam'] . "<br>" ;
            echo $row['product_prijs'] . "<br>" ;
            echo $row['product_aantal'] . "<br>" . "<br>";
        }
    }
?>


</p>
          
        </div>
       
      </div>
    </div>
    


<?php
  include 'includes/footer.php'  
?>
</body>
</html>
       
