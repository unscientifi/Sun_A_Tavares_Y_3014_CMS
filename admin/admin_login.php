<?php
require_once '../load.php';

$ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (!empty($username) && !empty($password)) {
        //Do the ligin here
        $message = login($username, $password, $ip);
    } else {
        $message = 'Please fill out the required fields';
    }
}

//Failed login attempts
if (!empty($password)) { //if the password is not correct or empty, it will count as a failed login
    if (isset($_SESSION['loginAttempts'])) {
        $_SESSION['loginAttempts']++; //this adds the number of logins
        if ($_SESSION['loginAttempts'] > 2) {
            echo 'You have exceeded the amount of login attempts! Please try again later.';
?>

<?php
        }
    } else {
        $_SESSION['loginAttempts'] = 1; //Shows a message on the first attempt
        echo 'Please make sure to fill in the correct information';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Login page</title>
</head>

<body>
    <?php echo !empty($message) ? $message : ''; ?>
    <form action="admin_login.php" method="post">
        <label>Username: </label><br>
        <input type="text" name="username" value="" /><br>

        <label>Password: </label><br>
        <input type="password" name="password" value="" /><br>

        <button name="submit">Submit</button>
    </form>
</body>

</html>