<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Login extends Dbh
{
    protected function sendEmailCheckLater($email, $unix_id)
    {
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'joshuaadeyemi445@gmail.com'; // Replace with your email
            $mail->Password = 'zfqqiuyjflogdmqq'; // Replace with your password or use environment variables
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('joshuaadeyemi445@gmail.com', 'Jasons Team'); // Replace with your email
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Jasons Membership Verification';
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $email_template = "Your Account have to be approved by Jasons before you can login" .
                "<p>This may take 24hr</p>" .
                "<p>Thanks for understanding</p>" .
                "<b>Jasons Team</b>";

            $mail->Body = $email_template;
            
            if ($mail->send()) {
                return true;
            } else {
                throw new Exception('Email sending failed.');
            }
        } catch (Exception $e) {
            error_log("Error sending email: " . $e->getMessage());
            return false;
        }
    }

    protected function CheckLogin($email, $unix_id)
    {
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'joshuaadeyemi445@gmail.com'; // Replace with your email
            $mail->Password = 'zfqqiuyjflogdmqq'; // Replace with your password or use environment variables
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            $mail->setFrom('joshuaadeyemi445@gmail.com', 'Jasons Team'); // Replace with your email
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Alert!!! | Jasons Team';
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $email_template = "Someone tried to login! Was this you?" .
                "" .
                "<p>Time Logged In: " . date('Y-m-d H:i:s') . 
                "<p>$userAgent</p>".
                "<b>Jasons Team</b>";

            $mail->Body = $email_template;
            
            if ($mail->send()) {
                return true;
            } else {
                throw new Exception('Email sending failed.');
            }
        } catch (Exception $e) {
            error_log("Error sending email: " . $e->getMessage());
            return false;
        }
    }

    

    protected function getUser($email, $pass_word)
    {
        try {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE email = ?;');
            if (!$stmt->execute([$email])) {
                throw new Exception('Error executing query.');
            }

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$user || !password_verify($pass_word, $user['pass_word'])) {
                return false;
            }

            session_start();
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['unix_id'] = $user['unix_id'];
            $_SESSION['payment_plan'] = $user['payment_plan'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['approved'] = $user['approved'];
            $_SESSION['avatar_add'] = $user['avatar_add'];
            $_SESSION['job_pro'] = $user['job_pro'];

            $stmt = null;

            return $user;
        } catch (Exception $e) {
            error_log("Error fetching user data: " . $e->getMessage());
            return false;
        }
    }
}
