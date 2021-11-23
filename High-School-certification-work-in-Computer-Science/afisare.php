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

        $sql = " SELECT * FROM `intrebari` ORDER BY `nr` DESC";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_assoc($result)) 
            {
                echo "Intrebare: " . $row["intrebare"]. " <br><br>";
                echo "Raspuns: " . $row["raspuns"]. " <br><br><br><br><br>";
            }
        } 
    }
?>
