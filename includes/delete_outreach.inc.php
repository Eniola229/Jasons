<?php

include "../classes/delete_outreach.classes.php";

// Check if the request method is GET and outreach_id is set
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["outreach_id"])) {
    $outreach_id = $_GET["outreach_id"];

    try {
        // Create an instance of the DeleteUser class
        $deleteUser = new DeleteUser();

        // Call the deleteUser() method to delete the user
        $deleteUser->deleteUser($outreach_id);

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
