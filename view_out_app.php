<?php
session_start();
include "classes/dbh.classes.php";

class Outreach extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUserByEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM outreaches_app WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->fetch();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the user class
$viewOutreach = new Outreach($pdo);

// Get the user email from the URL parameter
$user_email = $_GET['email'];

// Retrieve user details by email
$outrecah = $viewOutreach->getUserByEmail($user_email);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View  User | Jasons</title>
    <link rel="stylesheet" type="text/css" href="css/view_info_app.css">
</head>
<body>
    <!-- user donation card -->
<div class="card-wrap" id="card">
 
    <span class="back">
     <a href="cordinator.php" style="color: red; text-decoration: none;">
       <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-dasharray="48" stroke-dashoffset="48" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.25 14C5.14 17.45 8.27 20 12 20C16.42 20 20 16.42 20 12C20 7.58 16.42 4 12 4C9.61 4 7.47 5.05 6 6.71L4 9"><animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="48;0"/></path><g fill="currentColor"><path fill-opacity="0" d="M3.25 10H3.89645C4.11917 10 4.23071 9.73071 4.07322 9.57322L3.42678 8.92678C3.26929 8.76929 3 8.88083 3 9.10355V9.75C3 9.88807 3.11193 10 3.25 10Z"><set attributeName="fill-opacity" begin="0.6s" to="1"/><animate fill="freeze" attributeName="d" begin="0.6s" dur="0.2s" values="M3.25 10H3.89645C4.11917 10 4.23071 9.73071 4.07322 9.57322L3.42678 8.92678C3.26929 8.76929 3 8.88083 3 9.10355V9.75C3 9.88807 3.11193 10 3.25 10Z;M3.5 10H7.79289C8.23835 10 8.46143 9.46143 8.14645 9.14645L3.85355 4.85355C3.53857 4.53857 3 4.76165 3 5.20711V9.5C3 9.77614 3.22386 10 3.5 10Z"/></path><circle cx="12" cy="12" r="0"><animate fill="freeze" attributeName="r" begin="0.8s" dur="0.2s" values="0;2"/></circle></g></svg>
       back
    </a>
    </span>
     <section class="profile_container">
        <div class="profile_img_section">
            <img class="profile_img-LG" src="" />
            <div class="flag_wrapper">
                <img class="flag" src="img/logo.png" alt="Jasons logo" />
            </div>
        </div>

        <div class="profile_desc_section">
            <div class="interests">
                <span class="interests_item"><?php echo $outrecah['name']; ?></span>
                <span class="interests_item"><?php echo $outrecah['email']; ?></span>
                <span class="interests_item"><?php echo $outrecah['occupation']; ?></span>
                <span class="interests_item"><?php echo $outrecah['country']; ?></span>
                <p>Member Reason: <?php echo $outrecah['body']; ?></p>
                 <a href="includes/app_out.inc.php?email=<?php echo $outrecah['email']; ?>"><button style=" background-color: darkblue; border: none; color: white; font-weight: bold; padding: 8px 12px; text-align: center; text-decoration: none; display: inline-block; font-size: 14px; margin: 4px 2px; cursor: pointer; border-radius: 4px;">Approve</button></a>

            </div>
        </div>
    </section>

    
    
</body>
</html>