<?php

include_once("db.php");
$query = "select * from records";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Podstawowe zapytania SQL.</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="page-wrapper">
    <div class="container">

        <h1>Dodawanie danych</h1>
        <form action="insert.php" method="POST">
            <p>
                <label for="firstName">Imię</label>
                <input type="text" name="first_name" id="firstName">
            </p>
            <p>
                <label for="lastName">Nazwisko</label>
                <input type="text" name="last_name" id="lastName">
            </p>
            <p>
                <label for="emailAdress">Adres email</label>
                <input type="text" name="email" id="emailAdress">
            </p>
            <button type="submit" name="submit">Dodaj</button>
        </form>
        

    </div>
    
    

    
    <div class="result-box">

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            $user_id = $row['user_id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
        ?>

            <?php echo $user_id ?> . <?php echo $first_name ?> <?php echo $last_name ?> | <?php echo $email . "<br>" . "<br>"; ?> <div class="btn-holder"> <a href="edit.php?GetID=<?php echo $user_id ?>">Edit</a>  <a href="delete.php?Del=<?php echo $user_id ?>">Delete</a></div> 
          
            <br>

        <?php
        }
        ?>
        </table>

    </div>
    </div>
</body>

</html>