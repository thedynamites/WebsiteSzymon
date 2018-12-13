<?php
    include_once 'dbh.inc.php';  

    $naam = $_POST['naam'];
    $email = $_POST['email'];
    $adres = $_POST['adres'];
    $stad = $_POST['stad'];
    $provincie = $_POST['provincie'];
    $postcode = $_POST['postcode'];
    $naamopcard = $_POST['naamopcard'];
    $cardnummer = $_POST['cardnummer'];
    $vervalmaand = $_POST['vervalmaand'];
    $vervaljaar = $_POST['vervaljaar'];
    $cvv = $_POST['cvv'];
    

    $sql = "INSERT INTO gekocht ( naam, email, adres, stad, provincie, postcode, naamopcard, cardnummer, vervalmaand, vervaljaar, cvv)
    VALUES ('$naam', '$email', '$adres', '$stad', '$provincie', '$postcode', '$naamopcard', '$cardnummer', '$vervalmaand', '$vervaljaar', '$cvv');";
    mysqli_query($conn, $sql);

    header("location: ../cart.php?kopen=success");

   