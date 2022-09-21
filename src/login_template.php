<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="includes/validation.php" method="post">
            <label for="username">Username</label>
                <input type="text" name="username" 
                placeholder="Enter your username" required>
            <label for="password"></label>
                <input type="text" name="password"
                placeholder="Enter your Password" required>
            
            <input type="submit" value="Log In">
        </form>

        <a href="../index.php">
            <p>Return to Homepage</p>
        </a>
    </body>
</html>