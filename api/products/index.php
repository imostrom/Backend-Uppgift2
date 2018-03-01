<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Produkter</title>
</head>
<body class='container'>
    <h2>Lista på våra produkter</h2>

<?php

// steg 1: hämta data via en endpoint/resource
$data = file_get_contents(
    "https://localhost/Uppgift-2/index.php");


    //Testa at skriva us JSON
    // echo "<pre>";
    //echo $data;
    // echo "</pre>";

    //steg 2: konvertera JSON-dataa till en PHP-array
    $array = json_decode($data, true);
    // OBS! True genererar en associative array
    //Testa att skriva ut arrayen
    echo "<pre>";
    print_r($array);
    echo "</pre>";

?>
</body>
</html>