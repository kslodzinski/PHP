<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff

        $conn = mysqli_connect("localhost", "phpmyadmin", "abc123", "crud");

        if(!$conn) {
            die("Connection error");
        }
        
        $user_id = $_REQUEST['user_id'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];
        

?>