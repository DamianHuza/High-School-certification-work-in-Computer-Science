<?php
    $servername = "localhost";
    $username = "root";
    $dbname = "hamstermania";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)
        echo "Eroare!<br><br>";
    else
    {
        $q = $_POST['intrebare'];

        $sql = "INSERT INTO `intrebari`(`intrebare`) VALUES ('$q')";
                
        $rez = mysqli_query($conn, $sql);
        if(!$rez)
            echo "Eroare!<br><br>";
        else
            echo "Intrebarea dumneavoastra a fost inregistrata<br><br>";
    }
?>
