<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // retrieve form values
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // connect to database
    $db = new SQLite3('logindetails.sqlite', SQLITE3_OPEN_READWRITE);

    // retrieve user from database
    $stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
    $stmt->bindValue(':username', $username, SQLITE3_TEXT);
    $result = $stmt->execute();

    // check if user exists
    if($row = $result->fetchArray(SQLITE3_ASSOC)) {
        // verify password
        if(password_verify($password, $row['password'])) {
            // set session variable
            $_SESSION['username'] = $username;
            // redirect to home page
            header("Location: home.php");
            exit();
        }
        else {
            // password is incorrect
            echo "Invalid password.";
            error_log("Invalid password for user $username", 0);
        }
    }
    else {
        // user does not exist
        echo "Invalid username.";
        error_log("Invalid username $username", 0);
    }

    $db->close();
}
?>
