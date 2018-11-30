<?php
    include_once 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
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
            echo $row['postcode'] . "<br>";
        }
    }
?>



</body>
</html>
       



