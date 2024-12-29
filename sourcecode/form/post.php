<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
    <style>
        body{
            font-family:arial;
            text-align:center;
        }
        input{
            margin:10px;
            padding:10px;
            filter:drop-shadow(5px 5px gray);
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <input type="text" name="username" id="username" placeholder="Username">
        <br>
        <input type="password" name="password" id="password" placeholder="Password">
        <br>
        <input type="reset" value="Batal">
        <input type="submit" value="Login">
        <br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            echo "Username : <b>$_POST[username]</b>";
            echo "<br>";
            echo "Password : <b>$_POST[password]</b>";
        }
    ?>
</body>
</html>