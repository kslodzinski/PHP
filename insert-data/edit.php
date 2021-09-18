<?php

require_once("db.php");
$user_id = $_GET['GetID'];
$query = "SELECT * FROM records WHERE user_id='" . $user_id . "'";
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['user_id'];
    $first_name =  $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>


    <div class="edit-holder">
        <form action="update.php?ID=<?php echo $user_id ?>" method="post">
            <input type="text" placeholder=" User Name " name="first_name" value="<?php echo $first_name ?>">
            <input type="email" placeholder=" User Email " name="last_name" value="<?php echo $last_name ?>">
            <input type="text" placeholder=" User Age " name="email" value="<?php echo $email ?>">
            <button name="update">Update</button>
        </form>
    </div>


</body>

</html>