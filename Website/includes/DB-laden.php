 <?php
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