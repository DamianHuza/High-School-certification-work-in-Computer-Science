<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "hamstermania";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
        echo "Eroare! Comanda NU a fost plasata<br><br>";
    else
    {
        $nume = $_POST['nume'];
        $prenume = $_POST['prenume'];
        $produs = $_POST['produs'];
        $nr_ex = $_POST['nr_ex'];
        $judet = $_POST['judet'];
        $loc = $_POST['loc'];
        $adresa = $_POST['adresa'];
        $tel = $_POST['tel'];
        

        $sql = "INSERT INTO `comenzi`(`nume`, `prenume`, `produs`,`nr_ex`,`judet`,`loc`,`adresa`,`tel`) 
                VALUES ('$nume','$prenume','$produs','$nr_ex','$judet','$loc','$adresa','$tel')";
                
        $rez = mysqli_query($conn, $sql);
        if(!$rez)
            echo "Eroare! Comanda NU a fost plasata<br><br>";
        else
            echo "Comanda plasata cu succes<br><br>";
    }
?>
