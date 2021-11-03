<html>
    <body>
        <h1>Login</h1>
        <form action="../controller/handleLogin.php" method="post">
            <label for="id">User Id</label>
            <input type="text" name="id">
            <label for="password">Pasword</label>
            <input type="text" name="password">
            <input type="submit" name="submit" value="Submit">
        </form>
        <a href="../views/registration.php">Registration</a>
    </body>
</html>