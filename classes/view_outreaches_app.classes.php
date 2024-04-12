<?php


class OutReach_all extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOutreach() {
        $stmt = $this->pdo->prepare("SELECT * FROM outreaches_app WHERE approved = 0 ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the OutReach_all class
$outreach_all_obj = new OutReach_all($pdo);

// Retrieve users
$outreach_all = $outreach_all_obj->getOutreach();
?>
