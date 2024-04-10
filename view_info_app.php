<?php
  session_start();
include "classes/dbh.classes.php";

class Users extends Dbh
{
    private $pdo;

    // Constructor receives an existing PDO instance
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getUserById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}

// Establish a database connection
$pdo = new PDO("mysql:host=localhost;dbname=jasons", 'root', '');

// Create an instance of the user class
$viewUser = new Users($pdo);

// Get the user ID from the URL parameter
$user_id = $_GET['id'];

// Retrieve user details by ID
$user = $viewUser->getUserById($user_id);
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
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['avatar_add']; ?>" />
            <div class="flag_wrapper">
                <img class="flag" src="img/logo.png" alt="Jasons logo" />
            </div>
        </div>

        <div class="profile_desc_section">
            <h2><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></h2>
            <h3>Occupation: <?php echo $user['job_pro']; ?></h3>
            <p class="description">Email: <?php echo $user['email']; ?></p>

            <div class="interests">
                <span class="interests_item"><?php echo $user['name_of_institution']; ?></span>
                <span class="interests_item"><?php echo $user['sec_qualification_obtained']; ?></span>
                <span class="interests_item"><?php echo $user['med_non_med']; ?></span>
                <span class="interests_item"><?php echo $user['unix_id']; ?></span>
                <p>Phone Number: <?php echo $user['phone']; ?></p>
                <p>Marital Status: <?php echo $user['marital_status']; ?></p>
                <p>Gender: <?php echo $user['gender']; ?></p>
                <p>Date Of Birth: <?php echo $user['birthday']; ?></p>
                <p>Medical Or Non Medical: <?php echo $user['med_non_med']; ?></p>
                <p>Address: <?php echo $user['street_address']; ?></p>
               
            </div>
        </div>
    </section>

    <div class="info">
        <ul>
            <li>
                <!-- <div class="link_img_wrapper">
                </div> -->
                <p>Highest Level Of Education: <?php echo $user['highest_level_of_edu']; ?></p>
            </li>
            <li>
                <p>Name Of Institution: <?php echo $user['name_of_institution']; ?></p>
            </li>
            <li>
                <p>Other Institute:  <?php echo $user['other_institute']; ?></p>
            </li>

        </ul>
         <ul>
            <li>
                <!-- <div class="link_img_wrapper">
                </div> -->
                <p>Department: <?php echo $user['department']; ?></p>
            </li>
            <li>
                <p>Qualification Obtained: <?php echo $user['qualification_obtained']; ?></p>
            </li>
            <li>
                <p>Secound Institute:  <?php echo $user['sec_other_institute']; ?></p>
            </li>
            <li>
                <p>Approved:  <?php echo $user['approved']; ?></p>
            </li>
        </ul>
        <ul>
            <li>
                <!-- <div class="link_img_wrapper">
                </div> -->
                <p>Employer: <?php echo $user['employer']; ?></p>
            </li>
            <li>
                <p>Payment Plan: <?php echo $user['payment_plan']; ?></p>
            </li>
            <li>
                <p>Verification Status:  <?php echo $user['verification_status']; ?></p>
            </li>
             <li>
                <p>Created At:  <?php echo $user['created_at']; ?></p>
            </li>
        </ul>
    </div>

    <h3 style="text-align: center; color: red; font-weight: bold;">Uploaded Documents</h3>
    <div class="documents">
     
     <div class="profile_img_section">
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['qualification_obtained']; ?>" />
            <div class="">
               <p>Qualification </p>
            </div>
        </div>
    </div>
    <div class="profile_img_section">
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['sec_attach_qualification_add']; ?>" />
            <div class="">
               <p>Secound Qualification </p>
            </div>
        </div>

         <div class="profile_img_section">
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['qua_1_add']; ?>" />
            <div class="">
               <p>Other Qualification 1 </p>
            </div>
        </div>
         <div class="profile_img_section">
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['qua_2_add']; ?>" />
            <div class="">
               <p>Other Qualification 2 </p>
            </div>
        </div>
         <div class="profile_img_section">
            <img class="profile_img-LG" src="http://localhost/json/avatar_uploads/<?php echo $user['qua_3_add']; ?>" />
            <div class="">
               <p>Other Qualification 3 </p>
            </div>
        </div>

    </div>
    
</body>
</html>