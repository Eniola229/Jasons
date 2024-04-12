<?php
include_once "../classes/dbh.classes.php";
include_once "../vendor/autoload.php"; // Adjust the path to autoload.php if necessary

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class UserDecline extends Dbh {
    public function approveUser($email) {
        try {
            // Establish a database connection
            $pdo = $this->connect();

            // Prepare and execute the update query
            $stmt = $pdo->prepare("UPDATE outreaches_app SET approved = '2' WHERE email = :email");
            $stmt->execute(['email' => $email]);

            // Send confirmation email
            $this->sendEmail($email);

            // Redirect back to the previous page with status=approved parameter
            header("Location: ../cordinator.php?status=declined");
            exit();
        } catch (PDOException $e) {
            // Handle database errors
            error_log("Database error: " . $e->getMessage());
            header("Location: ../cordinator.php?status=errora");
            exit();
        }
    }

    protected function sendEmail($email) {
        try {
            $mail = new PHPMailer(true);
            
            // SMTP Configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'joshuaadeyemi445@gmail.com';
            $mail->Password = 'zfqqiuyjflogdmqq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Email content
            $mail->setFrom('joshuaadeyemi445@gmail.com', 'Jasons Team');
            $mail->addAddress($email);
            $mail->isHTML(true);
            $mail->Subject = 'Sorry!!! | Jasons OutReach';
            $email_template = "You have been declined to attend the Outreach you applied for!!!" .
                "<h4>We are sorry you saw this!!!</h4>" .
                 "<a href=''>Login Here</a>" .
                 "<br><br>" .
                "<b>Jasons Team</b>";
            $mail->Body = $email_template;

            // Send the email
            $mail->send();
        } catch (Exception $e) {
            // Handle email sending errors
            error_log("Error sending email: " . $e->getMessage());
        }
    }
}

// Check if email parameter exists
if (isset($_GET['email'])) {
    $email = $_GET['email'];

    // Create an instance of UserApproval class
    $userApproval = new UserDecline();

    // Approve the user and send confirmation email
    $userApproval->approveUser($email);
} else {
    // If email parameter is not provided, redirect to an error page or handle the error accordingly
    header("Location: ../cordinator.php?status=errora");
    exit();
}
?>
