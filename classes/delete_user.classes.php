<?php

require_once "dbh.classes.php";

class DeleteUser extends Dbh
{
    public function deleteUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
            $email = $_POST["email"];

            try {
                // Prepare SQL statement to delete post
                $sql = "DELETE FROM users WHERE email = :email";

                // Prepare the statement
                $stmt = $this->connect()->prepare($sql);

                // Bind parameters and execute the statement
                $stmt->bindParam(":email", $email, PDO::PARAM_INT);
                if ($stmt->execute()) {
                   header("location: ../cordinator.php?status=user_deleted");
                   exit();
                } else {
                   header("location: ../cordinator.php?status=user_deleted_error");
                   exit();
                }
            } catch (PDOException $e) {
                echo "Error deleting post: " . $e->getMessage();
                exit();
            }
        }
    }
}

?>
