<?php

$conn = new mysqli("localhost", "root", "", "olivian_scent");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>