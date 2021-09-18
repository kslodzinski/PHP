<?php

require_once("db.php");

    if (isset($_GET['Del'])) {
        $user_id = $_GET['Del'];
        $query = " delete from records where user_id = '".$user_id."'";
        $result = mysqli_query($conn, $query);
        if($result) {
            header("location:index.php");
        }
        else {
            echo "Sprawdz połączenie";
        }
    }

    

?>