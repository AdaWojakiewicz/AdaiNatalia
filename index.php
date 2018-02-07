<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Kwiaty</title>
        <style>
            div
            {
                background: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
                width:500px;
            }
        </style>
    </head>
    <body>
        
        <div>
            <a href="zamowienie.php">Złóż zamówienie</a>
            <br>
        <a href="oferta.php" >Obejrzyj ofertę</a>
        <br>
         
        </div>
        
        
    <?php
    $conn = mysqli_connect('wojakiewicz.pl', 'wojakiewic_baza', 'bidn2912', 'wojakiewic_baza', '3306');
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
    mysqli_close($conn);
        ?>
    
    </body>
</html>
