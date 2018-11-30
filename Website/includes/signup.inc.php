<?php
    include_once 'dbh.inc.php';  

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    $stad = $_POST['stad'];
    $provincie = $_POST['provincie'];
    $postcode = $_POST['postcode'];

    $sql = "INSERT INTO gekocht ( naam, email, adres, stad, provincie, postcode)
    VALUES ('$naam', ' $email', '$adres', '$stad', '$provincie', '$postcode');";
    mysqli_query($conn, $sql);

    header("location: ../cart.php?signup=success");

   