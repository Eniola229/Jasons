<?php

require_once "dbh.classes.php";

class DeleteUser extends Dbh
{
    public function deleteUser($email)
    {
        // Prepare SQL statement to delete user
        $sql = "DELETE FROM users WHERE email = :email";

        // Prepare the statement
        $stmt = $this->connect()->prepare($sql);

        // Bind parameters and execute the statement
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        if ($stmt->execute()) {
            // User deleted successfully
            return true;
        } else {
            // Error deleting user
            throw new Exception("Error deleting user.");
        }
    }
}