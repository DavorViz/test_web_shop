<?php

    $server = "localhost";
    $database = "mobiteli";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($server, $username, $password, $database);
    $query = "SELECT * FROM mobiteli";
    $res = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($res)){
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['NAZIV']."</td>";

        echo "</tr>";
    }

    mysqli_close($conn);
?>