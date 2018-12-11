<?php
    include_once 'dbh.inc.php';  

    $datum = $_POST['datum'];
    $tijd = $_POST['tijd'];
    $afspraak = $_POST['afspraak'];
    $adres = $_POST['adres'];

    $sql = "INSERT INTO afspraak ( datum, tijd, afspraak, adres)
    VALUES ('$datum', ' $tijd', '$afspraak', '$adres');";
    mysqli_query($conn, $sql);

    header("location: ../index.php?signup=success");


