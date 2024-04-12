<?php
include "dbh.classes.php";
class Out extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOut() {
        $stmt = $this->pdo->prepare("SELECT * FROM outreaches ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the Out class
$outreachHandler = new Out($pdo);

// Retrieve outreach data
$outreaches = $outreachHandler->getOut();
