<?php
session_start();
if (isset($_COOKIE['isLoggedIn'])) {
    if ($_COOKIE['isLoggedIn'] == 'true') {
        header('location:../views/home.php');
    }
}

?>
<html>

<body>
    <h1>Registration</h1>
    <form action="../controller/handleRegistration.php" method="post">
        <label for="id">User Id</label>
        <input type="text" name="id">
        <label for="password">Pasword</label>
        <input type="text" name="password">
        <label for="password2">Confirm Password</label>
        <input type="text" name="password2">
        <label for="name">Name</label>
        <input type="text" name="name">

        <br>

        <input type="radio" name="userType" value="User" checked>Manager
        <input type="radio" name="userType" value="Admin">Admin

        <br>

        <input type="submit" name="submit" value="Submit">
    </form>
    <a href="../views/login.php">Sign In</a>
</body>

</html>