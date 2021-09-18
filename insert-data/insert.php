<<?php

    include_once("db.php");

    if (isset($_POST['submit'])) {
        if (empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email'])) {
            echo ' Proszę wypełnić puste pola ';
        } 
        // sprawdzam email
        else if (!preg_match("/^[a-zA-z]*$/", $first_name)) {
            $ErrMsg = "Only alphabets and whitespace are allowed.";
            echo $ErrMsg;
        } else {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];

            $query = " insert into records (first_name, last_name, email) values('$first_name','$last_name','$email')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                header("location:index.php");
            } else {
                echo '  Sprawdz poprawnosc zapytania ';
            }
        }
    }
    ?>