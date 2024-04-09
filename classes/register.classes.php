<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Register extends Dbh
{
    protected function sendEmail($first_name, $email, $unix_id)
    {
        // Load Composer's autoloader
        require '../vendor/autoload.php';

        try {
            $mail = new PHPMailer(true);
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth   = true; // Enable SMTP authentication
            $mail->Username   = 'joshuaadeyemi445@gmail.com'; // SMTP username
            $mail->Password   = 'zfqqiuyjflogdmqq'; // App-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable implicit TLS encryption
            $mail->Port       = 465; // TCP port to connect to

            //Recipients
            $mail->setFrom('joshuaadeyemi445@gmail.com', 'Jason'); // Fixed sender name
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = 'Jasons Membership Registration ';
            $email_template  = "<strong>Welcome ". $first_name ."!</strong><br/><p>Your Unique ID: " . $unix_id . "</p>"
                             . "<p>Kindly verify your email by clicking the link below:</p>"
                             . "<a href='http://localhost/jason'>Click here to Login</a>"
                             . "<br/><b>Jasons Team</b>";
            $mail->Body = $email_template;

            // Attempt to send the email
            if ($mail->send()) {
                header("location: ../index.php?status=emailsent");
                exit(); // Added exit after header redirect
            } else {
                header("location: ../index.php?status=sentemailfailed&error=" . urlencode($mail->ErrorInfo));
                exit(); // Added exit after header redirect
            }
        } catch (Exception $e) {
            header("location: ../index.php?status=sentemailfailed&error=" . urlencode($e->getMessage()));
            exit(); // Added exit after header redirect
        }
    }

    protected function setUser($first_name, $last_name, $gender, $marital_status, $email, $phone, $unix_id, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $department, $qualification_obtained, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pass_word)
    {   
        // Hash the password
        $hashedPwd = password_hash($pass_word, PASSWORD_DEFAULT);

        // Check if a file was uploaded
        if(isset($_FILES['avatar_add'])) {
            $file_name = $_FILES['avatar_add']['name'];
            $file_tmp = $_FILES['avatar_add']['tmp_name'];
            $file_type = $_FILES['avatar_add']['type'];

            // Array of allowed image file types
            $allowed_image_types = array('image/jpeg', 'image/png', 'image/gif');

            // Check if the uploaded file type is allowed
            if(in_array($file_type, $allowed_image_types)) {
                // File is an image
                $uploadDirectory = '../avatar_uploads/';

                // Generate a unique name for the file
                $uniqueFileName = uniqid() . '_' . $file_name;

                // Move the uploaded file to the server
                $uploadPath = $uploadDirectory . $uniqueFileName;

                if (!move_uploaded_file($file_tmp, $uploadPath)) {
                    // Error in moving the file
                    header("location: ../signup.php?status=fileuploaderror");
                    exit();
                }
            } else {
                // File type is not allowed
                header("location: ../signup.php?status=invalidfiletype");
                exit();
            }
        }

        // Prepare the SQL statement
        $stmt = $this->connect()->prepare('INSERT INTO users (first_name, last_name, gender, marital_status, email, phone, birthday, street_address, street_address_2, city, zip, region, country, highest_level_of_edu, name_of_institution, department, qualification_obtained, other_institute, sec_name_of_institution, sec_other_institute, sec_department, sec_qualification_obtained, sec_attach_qualification_add, qua_1_add, qua_2_add, qua_3_add, job_pro, med_non_med, employer, job_region, ser_of_area, mode_of_com, message, avatar_add, payment_plan, verification_status, pass_word) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');


        // Bind the parameters and execute the statement
       if (!$stmt->execute(array($first_name, $last_name, $gender, $marital_status, $email, $phone, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $department, $qualification_obtained, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $uniqueFileName, $payment_plan, $verification_status, $hashedPwd)))

        {
            $stmt = null;
            header("location: ../signup.php?status=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT user_id FROM users WHERE email = ?');

        if (!$stmt->execute(array($email))) 
        {
            $stmt = null;
            header("location: ../signup.php?status=usertaken");
            exit();
        }

        $resultCheck = $stmt->rowCount() > 0 ? false : true;
        return $resultCheck;
    }

    protected function getUserId($email)
    {
        $stmt = $this->connect()->prepare('SELECT user_id FROM users WHERE email = ?;');

        $stmt->execute([$email]); // Execute the prepared statement

        if ($stmt->rowCount() == 0) {
            // If no user is found, redirect with an appropriate status
            header("location: ../signup.php?status=stmtfailed");
            exit();
        }

        $userData = $stmt->fetch(PDO::FETCH_ASSOC);
        return $userData['email'];
    }
}
