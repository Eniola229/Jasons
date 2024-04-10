<?php
include "dbh.classes.php";

class Users extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUsers() {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE approved IS NULL ORDER BY created_at DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the user class
$viewUser = new Users($pdo);

// Retrieve users
$users = $viewUser->getUsers();
