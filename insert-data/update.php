<?php

require_once("db.php");

if (isset($_POST['update'])) {
    $user_id = $_GET['ID'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $query = " update records set first_name = '" . $first_name . "', last_name='" . $last_name . "',email='" . $email . "' where user_id='" . $user_id . "'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("location:index.php");
    } else {
        echo ' Sprawdz poprawnosc zapytania ';
    }
}
