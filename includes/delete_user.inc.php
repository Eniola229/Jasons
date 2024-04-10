<?php

include "../classes/delete_user.classes.php";

// Check if the request method is GET and email is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"])) {
    $email = $_GET["email"];

    try {
        // Create an instance of the DeleteUser class
        $deleteUser = new DeleteUser();

        // Call the deleteUser() method to delete the user
        $deleteUser->deleteUser($email);

        // Redirect to index.php with success message
        header("location: ../cordinator.php?status=user_deleted");
        exit();
    } catch (Exception $e) {
        // Redirect to index.php with error message
        header("location: ../cordinator.php?status=errora");
        exit();
    }
}
?>
