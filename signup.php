<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align:center;
        }
    </style>
</head>
<body>
<div class='signup'>

<form action="register.php" method='POST'>
    <h1 >Please sign up</h1>

    <label  >name</label><br>
    <input type="text"  placeholder='name' name='name' required><br><br>
    
    <label >Surname</label><br>
    <input type="text"  placeholder='Surname' name='surname' required><br><br>

    <label >Username</label><br>
    <input type="text"  placeholder='username' name='username' required><br><br>

    <label >Email</label><br>
    <input type="email"  placeholder='Email' name='email' required><br><br>

    <button     type='submit' name='submit'>Sign Up</button><br><br>

    <small>You already have an account ? <br>
    <a href="login.php">Log in</a></small>


</form>
</div>

</body>
</html>