<?php
    include_once 'dbh.inc.php';  

    $naam = $_POST['naam'];
    $achternaam = $_POST['achternaam'];
    $comment = $_POST['comment'];
    /*$stad = $_POST['stad'];
    $provincie = $_POST['provincie'];
    $postcode = $_POST['postcode'];
    */

    $sql = "INSERT INTO klanten ( naam, achternaam, comment)
    VALUES ('$naam', ' $achternaam', '$comment');";
    mysqli_query($conn, $sql);

    header("location: ../contact.php?comment=success");

   