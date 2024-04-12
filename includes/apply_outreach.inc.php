<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/apply_out.classes.php";
include_once "../classes/apply_out-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; 
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    $outreache_id = isset($_POST['outreache_id']) ? htmlspecialchars($_POST['outreache_id']) : '';
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '';
    $body = isset($_POST['body']) ? htmlspecialchars($_POST['body']) : '';
    $occupation = isset($_POST['occupation']) ? htmlspecialchars($_POST['occupation']) : '';
    

    // Instantiate ApplyOutContr object
    $applyOutController = new ApplyOutContr();
    $applyOutController->handlePost($name, $email, $country, $outreache_id, $title, $body, $occupation);
}