<html>
    <head>
        <title>stronka</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="javascript/jquery3.js" type="text/javascript"></script>

        <script src="javascript/tworzenie_auto.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="cont2">
            <form method="post" action="zamowienie.php" name="f1">

                <input type="text" name="nazwisko" class="form-control">
                <select name="kolor" class="form-control">
                    <option selected value="default">Wybierz kwiat:</option>
                    <!--                    <option value="Czerwony">Czerwony</option>
                                        <option value="Zielony">Zielony</option>
                                        <option value="Biały">Biały</option>-->
                    <?php
                    $conn = mysqli_connect('wojakiewicz.pl', 'wojakiewic_baza', 'bidn2912', 'wojakiewic_baza', '3306');
                    if (!$conn) {
                        die('Could not connect to MySQL: ' . mysqli_connect_error());
                    }
                    mysqli_query($conn, 'SET NAMES \'utf8\'');
// TODO: insert your code here.

                    $tablica = [];
                    $query = "SELECT Asortyment FROM kwiaty";
                    $result = mysqli_query($conn, $query);

                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                        echo "<option value='" . $row["Asortyment"] . "'>" . $row["Asortyment"] . "</option>";
                    } 
                    mysqli_close($conn);
                    ?>
                </select>
                <input type="number" name="ilosc" class="form-control">
                <button type="submit" class="btn btn-primary">Wstaw pojazd</button>

            </form>
            <div class="info alert alert-warning"></div>

        </div>

<?php
echo 'tutaj beda zamowienia';
?>
    </body>
</html>