<?php


class OutReach_all_app_dec extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOutreach() {
         $stmt = $this->pdo->prepare("SELECT * FROM outreaches_app ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the OutReach_all_app_dec class
$outreach_all_obj = new OutReach_all_app_dec($pdo);

// Retrieve users
$OutReach_all_app_dec_shows = $outreach_all_obj->getOutreach();
?>
