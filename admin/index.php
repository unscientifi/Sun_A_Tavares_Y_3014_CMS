<?php
require_once('../load.php');
confirm_logged_in();
setcookie(time()); //I read that this needs to be before html
date_default_timezone_set("America/Toronto"); //This sets the timezone to EST (America/Toronto)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>

    <h2>Hello, <?php echo $_SESSION['user_name']; ?></h2>

    <hr>

    <?php
    $hour = date("H");
    if ($hour < "12") {
        echo "Morning!";
    } else if ($hour >= "12" && $hour < "22") {
        echo "Good Afternoon!";
    } else {
        echo "Late night work";
    }


    //Start of login time

    // $loginTime = ($_COOKIE['user_date']); //sets the cookie for when user is last logged in
    // $timeQuery = 'SELECT * FROM tbl_user WHERE user_date = ' . $loginTime;

    // if (!isset($_COOKIE[$timeQuery])) {
    //     echo 'You last visited on: ' . date('D, M. d, Y \a\t g:ia'); //Formats as Day, Month, day (number), year at hour:minute
    // } else {
    //     //Ideally this would what would show up if they haven't visited the site before?
    //     // Don't how this would work, will have to do further research
    //     echo 'Welcome to my site!';
    // }
    //End of login time

    ?>


   
    <a href="admin_edituser.php">Edit User</a>
    <a href="admin_createuser.php">Create User</a>
    <a href="admin_deleteuser.php">Delete User</a>
    <br>
    <a href="admin_editproduct.php">Edit Product</a>
    <a href="admin_addproduct.php">Add Product</a>
    <a href="admin_deleteproduct.php">Delete Product</a>

    
    <a href="admin_logout.php">Logout</a>

</body>

</html>