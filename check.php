<?php
$correct_password = "hackingtool"; // Hardcoded password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_password = $_POST["password"];

    if ($entered_password === $correct_password) {
        echo "Access Granted!";
    } else {
        echo "Access Denied!";
    }
}
?>
