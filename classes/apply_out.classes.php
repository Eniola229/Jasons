<?php
class ApplyOut extends Dbh {
    protected function setPost($name, $email, $country, $outreache_id, $title, $body, $occupation) {    
        // Insert data into the database
        $stmt = $this->connect()->prepare('INSERT INTO outreaches_app (name, email, country, outreache_id, title, body, occupation) VALUES (?, ?, ?, ?, ?, ?, ?)');

        if ($stmt->execute(array($name, $email, $country, $outreache_id, $title, $body, $occupation))) {   
            // Success: redirect to home page
            header("location: ../apply_for_out_succ.php?status=postsuccess");
            exit();
        } else {
            // Database insertion failed
            header("location: ../apply_for_out.php?status=stmtfailed");
            exit();
        }
    }
}