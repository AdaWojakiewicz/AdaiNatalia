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
