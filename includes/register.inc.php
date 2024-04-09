<?php
include "../classes/dbh.classes.php";
include "../classes/register.classes.php";
include "../classes/register-contr.classes.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize input data
    $first_name = isset($_POST['first_name']) ? htmlspecialchars($_POST['first_name']) : "";
    $last_name = isset($_POST['last_name']) ? htmlspecialchars($_POST['last_name']) : "";
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "";
    $marital_status = isset($_POST['marital_status']) ? htmlspecialchars($_POST['marital_status']) : "";
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "";
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "";
    $birthday = isset($_POST['birthday']) ? htmlspecialchars($_POST['birthday']) : "";
    $street_address = isset($_POST['street_address']) ? htmlspecialchars($_POST['street_address']) : "";
    $street_address_2 = isset($_POST['street_address_2']) ? htmlspecialchars($_POST['street_address_2']) : "";
    $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : "";
    $region = isset($_POST['region']) ? htmlspecialchars($_POST['region']) : "";
    $zip = isset($_POST['zip']) ? htmlspecialchars($_POST['zip']) : "";
    $country = isset($_POST['country']) ? htmlspecialchars($_POST['country']) : "";
    $highest_level_of_edu = isset($_POST['highest_level_of_edu']) ? htmlspecialchars($_POST['highest_level_of_edu']) : "";
    $name_of_institution = isset($_POST['name_of_institution']) ? htmlspecialchars($_POST['name_of_institution']) : "";
    $department = isset($_POST['department']) ? htmlspecialchars($_POST['department']) : "";
    $qualification_obtained = isset($_POST['qualification_obtained']) ? htmlspecialchars($_POST['qualification_obtained']) : "";
    $other_institute = isset($_POST['other_institute']) ? htmlspecialchars($_POST['other_institute']) : "";
    $sec_name_of_institution = isset($_POST['sec_name_of_institution']) ? htmlspecialchars($_POST['sec_name_of_institution']) : "";
    $sec_other_institute = isset($_POST['sec_other_institute']) ? htmlspecialchars($_POST['sec_other_institute']) : "";
    $sec_department = isset($_POST['sec_department']) ? htmlspecialchars($_POST['sec_department']) : "";
    $sec_qualification_obtained = isset($_POST['sec_qualification_obtained']) ? htmlspecialchars($_POST['sec_qualification_obtained']) : "";
    $sec_attach_qualification_add = isset($_POST['sec_attach_qualification_add']) ? htmlspecialchars($_POST['sec_attach_qualification_add']) : "";
    $qua_1_add = isset($_POST['qua_1_add']) ? htmlspecialchars($_POST['qua_1_add']) : "";
    $qua_2_add = isset($_POST['qua_2_add']) ? htmlspecialchars($_POST['qua_2_add']) : "";
    $qua_3_add = isset($_POST['qua_3_add']) ? htmlspecialchars($_POST['qua_3_add']) : "";
    $job_pro = isset($_POST['job_pro']) ? htmlspecialchars($_POST['job_pro']) : "";
    $med_non_med = isset($_POST['med_non_med']) ? htmlspecialchars($_POST['med_non_med']) : "";
    $employer = isset($_POST['employer']) ? htmlspecialchars($_POST['employer']) : "";
    $job_region = isset($_POST['job_region']) ? htmlspecialchars($_POST['job_region']) : "";
    $ser_of_area = isset($_POST['ser_of_area']) ? htmlspecialchars($_POST['ser_of_area']) : "";
    $mode_of_com = isset($_POST['mode_of_com']) ? htmlspecialchars($_POST['mode_of_com']) : "";
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : "";
    $avatar_add = isset($_POST['avatar_add']) ? htmlspecialchars($_POST['avatar_add']) : "";
    $pass_word = isset($_POST['pass_word']) ? htmlspecialchars($_POST['pass_word']) : "";
    $verification_status = "0";
    $payment_plan = "null";
    // Generate unique_id
    $firstWord = strtok($first_name, ' ');
    $randomNumber = rand(1000, 9999);
    $unix_id = '@' .$firstWord . $randomNumber;

    // Instantiate RegisterContr class
     $register = new RegisterContr($first_name, $last_name, $gender, $marital_status, $email, $phone, $unix_id, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $department, $qualification_obtained, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pass_word);

    // Run error handlers and user register
    if ($register->RegisterUser()) {
        // Get user ID after registration
        $userId = $register->FetchUserIdByEmail($email);

        // Redirect to appropriate page after registration
        header("location: ../signp.php?status=registration_success&userId=$userId");
        exit();
    } else {
        // Handle registration failure
        echo "Registration failed. Please try again.";
    }
}
?>
