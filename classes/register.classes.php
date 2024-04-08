<?php

	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Register extends Dbh
{


	protected function sendEmail($first_name, $email, $unix_id)
{

    //Load Composer's autoloader
    require '../vendor/autoload.php';

    try {
        // code...
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'joshuaadeyemi445@gmail.com';           //SMTP username
        $mail->Password   = 'zfqqiuyjflogdmqq';                     //App-specific password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to

        //Recipients
        $mail->setFrom('joshuaadeyemi445@gmail.com', $first_name);
        $mail->addAddress($email);    

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Jasons Membership';
        $email_template  = "<strong>We Welcome You". $first_name ." <p>Unique Id</p> " . $unix_id . "</strong><br/>" ."
         <p>Kindly Verify Your Email</p>
         <a href='http://localhost/jason'>Click here to Login</a>
         <br/><b>Jasons Team</b>
         ";
        $mail->Body = $email_template;
        
        // Attempt to send the email
        if ($mail->send()) {
          header("location: ../index.php?status=emailsent");
        } else {
            header("location: ../index.php?status=sentemailfailed". $mail->ErrorInfo);
        }
    } catch (Exception $e) {
       header("location: ../index.php?status=sentemailfailed&error=" . urlencode($mail->ErrorInfo));

    }
}


	protected function setUser($first_name, $last_name, $gender, $marital_status, $email, $phone, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pass_word)
	{   



	    // Hash the password
	    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

	    // Prepare the SQL statement
	    $stmt = $this->connect()->prepare('INSERT INTO users (first_name, last_name, gender, marital_status, email, phone, birthday, street_address, street_address_2, city, zip, region, country, highest_level_of_edu, name_of_institution, other_institute, sec_name_of_institution, sec_other_institute, sec_department, sec_qualification_obtained, sec_attach_qualification_add, qua_1_add, qua_2_add, qua_3_add, job_pro, med_non_med, employer, job_region, ser_of_area, mode_of_com, message, avatar_add, payment_plan, verification_status, pass_word)) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);');

	    // Bind the parameters and execute the statement
	    if (!$stmt->execute(array($first_name, $last_name, $gender, $marital_status, $email, $phone, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $hashedPwd)))
	    {
	        $stmt = null;
	        header("location: ../index.php?status=stmtfailed");
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
			header("location: ../index.php?status=usertaken");
			exit();
		}

		$resultCheck;
		if ($stmt->rowCount() > 0)
		{
			$resultCheck = false;
		}
		else
		{
			$resultCheck = true;
		}
		return $resultCheck;
	}

	protected function getUserId($email)
{
    $stmt = $this->connect()->prepare('SELECT user_id FROM users WHERE email = ?;');

    $stmt->execute([$email]); // Execute the prepared statement

    if ($stmt->rowCount() == 0) {
        // If no user is found, redirect with an appropriate status
        header("location: ../index.php?status=stmtfailed");
        exit();
    }

	$userData = $stmt->fetch(PDO::FETCH_ASSOC);
	return $userData['email'];
}
}