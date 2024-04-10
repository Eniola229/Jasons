<?php
include "../classes/delete_user.classes.php"; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create an instance of the DeletePost class
    $deleteUser = new DeleteUser();

    // Call the deletePost() method to delete the post
    $deleteUser->deleteUser();
}
