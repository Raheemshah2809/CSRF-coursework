<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
</head>

<body>
    <h2>Login Form</h2>
    <form method="post" action="login.php">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <h2>Register Here</h2>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Register">
    </form>


    <h4>
        What's suppose to happen:
    </h4>
    <h4>
        When the user creates a new account, there is some code that will capture the user name and password as well as the email address. And it does, into a register.txt file in the backend. To actually counter this problem, the password can be hashed so it cannot be read. This can be seen on line ten, In the register.php file. The login function should work but it doesnt for some reason. To run this site locally, open terminal and run this php "-S localhost:8000" and it should run and you can test it yourself.
    </h4    
</body>

</html>