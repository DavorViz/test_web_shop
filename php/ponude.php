<?php

    $server = "localhost";
    $database = "mobiteli";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password, $database);
    $query = "SELECT * FROM mobiteli";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){
<<<<<<< HEAD
        echo $row['naziv'];
=======
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['NAZIV']."</td>";

        echo "</tr>";
>>>>>>> 30506fbfc0ea67d942170b9311e999991ba0d4e5
    }

    mysqli_close($conn);
?>