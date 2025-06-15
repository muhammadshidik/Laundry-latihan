<?php
require_once 'controller/connection.php';
$validationID = $_SESSION['id'];
$validationUserQuery = mysqli_query($connection, "SELECT * FROM user WHERE id = '$validationID'");
$dataValidation = mysqli_fetch_assoc($validationUserQuery);

if ($dataValidation['id_level'] != 2) {
    header('Location: index.php');
    die;
}
