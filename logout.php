<?php
session_start(); // start session
session_unset(); // unset session variables
session_destroy(); // destroy session
header("Location: index.php"); // redirect to login page
exit();
?>
