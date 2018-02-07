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
        <title></title>
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
        <button type="submit" id="btn1" >Złóż zamówienie</button>
        <br>
         <button type="submit" id="btn2">Obejrzyj ofertę</button>
        </div>
        
        
    <?php
    $conn = mysqli_connect('wojakiewicz.pl', 'wojakiewic_baza', 'bidn2912', 'wojakiewic_baza', '3306');
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
    mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.
    
    
  
     
        echo'<div class="tabela"><table class="table table-striped">';
        echo '<tr><thead class="thead-dark">';
        echo '<th>Id</th>';
        echo '<th><Asortyment/th>';
        echo '<th>Cena</th>';
        echo'<th>Zdjęcie</th>';
        echo '</thead></tr>';
        $result = mysqli_query($conn, 'SELECT id, Asortyment, Cena, Zdjecie FROM kwiaty');
        $id = 1;
        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
            echo '<tr>';
            echo '<td>' . $id++ . '</td>';
            echo '<td>' . $row['Asortyment'] . '</td>';
            echo '<td>' . $row['Cena'] . '</td>';
            echo '<td>' . $row['Zdjecie'] . '</td>';
            echo '</tr>';
        }
        mysqli_free_result($result);
        echo '</table></div>';
        mysqli_close($conn);
        ?>
    
    </body>
</html>
