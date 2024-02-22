<?php

include("config.php");

if (isset($_POST["userSignup"])) {
    $username = $_POST["userName"];
    $password = $_POST["userPassword"];
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $role = $_POST["roles"];

    $query = "INSERT INTO `users`(`username`, `password`, `email`, `firstName`, `lastName`, `role`) VALUES ( '$username', '$password', '$email', '$firstName', '$lastName', '$role')";

    if ($conn->query($query) === TRUE) {
        echo "Inserted Successfully";
    } else {
        echo "Error";
    }

    $conn->close();
}

?>