<?php

include "../classes/dbh.classes.php";
include "../classes/register.classes.php";
include "../classes/register-contr.classes.php";
// include "../classes/profileinfo.classes.php";
// include "../classes/profileinfo-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // grabbing the data 
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $gender = htmlspecialchars($_POST['gender']);
    $marital_status = htmlspecialchars($_POST['marital_status']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $birthday = htmlspecialchars($_POST['birthday']);
    $street_address = htmlspecialchars($_POST['street_address']);
    $street_address_2 = htmlspecialchars($_POST['street_address_2']);
    $city = htmlspecialchars($_POST['city']);
    $region = htmlspecialchars($_POST['region']);
    $zip = htmlspecialchars($_POST['zip']);
    $country = htmlspecialchars($_POST['country']);
    $highest_level_of_edu = htmlspecialchars($_POST['highest_level_of_edu']);
    $name_of_institution = htmlspecialchars($_POST['name_of_institution']);
    $other_institute = htmlspecialchars($_POST['other_institute']);
    $sec_name_of_institution = htmlspecialchars($_POST['sec_name_of_institution']);
    $sec_other_institute = htmlspecialchars($_POST['sec_other_institute']);
    $sec_department = htmlspecialchars($_POST['sec_department']);
    $sec_qualification_obtained = htmlspecialchars($_POST['sec_qualification_obtained']);
    $sec_attach_qualification_add = htmlspecialchars($_POST['sec_attach_qualification_add']);
    $qua_1_add = htmlspecialchars($_POST['qua_1_add']);
    $qua_2_add = htmlspecialchars($_POST['qua_2_add']);
    $qua_3_add = htmlspecialchars($_POST['qua_3_add']);
    $job_pro = htmlspecialchars($_POST['job_pro']);
    $med_non_med = htmlspecialchars($_POST['med_non_med']);
    $employer = htmlspecialchars($_POST['employer']);
    $job_region = htmlspecialchars($_POST['job_region']);
    $ser_of_area = htmlspecialchars($_POST['ser_of_area']);
    $mode_of_com = htmlspecialchars($_POST['mode_of_com']);
    $message = htmlspecialchars($_POST['message']);
    $avatar_add = htmlspecialchars($_POST['avatar_add']);
    $payment_plan = "null";
    $verification_status = "0";
    $pass_word = htmlspecialchars($_POST['pass_word']);
    $pwdRepeat = htmlspecialchars($_POST['pwdRepeat']);

    //Generating unique_id
	// Extract the first word from the name
	$firstWord = strtok($first_name, ' ');
	// Generate a random four-digit number
	$randomNumber = rand(1000, 9999);

	$unix_id = '@' .$firstWord . $randomNumber;
	    




    // Instantiate RegisterContr class
    $register = new RegisterContr($first_name, $last_name, $gender, $marital_status, $email, $phone, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pass_word, $pwdRepeat);

    // Running error handlers and user register
    $register->RegisterUser();

    // Get user ID after registration
    $userId = $register->FetchUserIdByEmail($email);

    
    // head to sub page when successful
    header("location: ../index.php?status=userId=$userId");
    exit();

}

