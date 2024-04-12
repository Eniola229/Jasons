<?php

require_once "dbh.classes.php";

class DeleteUser extends Dbh
{
    public function deleteUser($outreach_id)
    {
        // Prepare SQL statement to delete user
        $sql = "DELETE FROM outreaches WHERE outreach_id = :outreach_id";

        // Prepare the statement
        $stmt = $this->connect()->prepare($sql);

        // Bind parameters and execute the statement
        $stmt->bindParam(":outreach_id", $outreach_id, PDO::PARAM_STR);
        if ($stmt->execute()) {
            // User deleted successfully
            return true;
        } else {
            // Error deleting user
            throw new Exception("Error deleting user.");
        }
    }
}