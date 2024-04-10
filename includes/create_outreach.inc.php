<?php
include_once "../classes/dbh.classes.php";
include_once "../classes/post.classes.php";
include_once "../classes/post-contr.classes.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Retrieve form data
    $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : ''; 
    $about = isset($_POST['about']) ? htmlspecialchars($_POST['about']) : '';
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : '';
    $date_time = isset($_POST['date_time']) ? htmlspecialchars($_POST['date_time']) : '';
    $file = isset($_POST['file']) ? htmlspecialchars($_POST['file']) : '';
    $location = isset($_POST['location']) ? htmlspecialchars($_POST['location']) : '';
    $body = isset($_POST['body']) ? htmlspecialchars($_POST['body']) : '';
    

    // Instantiate PostContr object
    $postController = new PostContr();
    $postController->handlePost($title, $about, $country, $date_time, $file, $location, $body);
}
