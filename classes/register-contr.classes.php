<?php
class RegisterContr extends Register
{
    private $first_name;
    private $last_name;
    private $avatar_add;
    private $gender;
    private $marital_status;
    private $email;
    private $phone;
    private $unix_id;
    private $birthday;
    private $street_address;
    private $street_address_2;
    private $city;
    private $region;
    private $country;
    private $highest_level_of_edu;
    private $name_of_institution;
    private $department;
    private $other_institute;
    private $sec_name_of_institution;
    private $sec_other_institute;
    private $sec_department;
    private $sec_qualification_obtained;
    private $sec_attach_qualification_add;
    private $qualification_obtained;
    private $qua_1_add;
    private $qua_2_add;
    private $qua_3_add;
    private $job_pro;
    private $med_non_med;
    private $employer;
    private $job_region;
    private $mode_of_com;
    private $message;
    private $zip;
    private $payment_plan;
    private $ser_of_area;
    private $verification_status;
    private $pass_word;

   public function __construct($first_name, $last_name, $gender, $marital_status, $email, $phone, $unix_id, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $department, $qualification_obtained, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pass_word)

    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->avatar_add = $avatar_add;
        $this->gender = $gender;
        $this->marital_status = $marital_status;
        $this->email = $email;
        $this->phone = $phone;
        $this->unix_id = $unix_id;
        $this->birthday = $birthday;
        $this->street_address = $street_address;
        $this->street_address_2 = $street_address_2;
        $this->name_of_institution = $name_of_institution;
        $this->department = $department;
        $this->other_institute = $other_institute;
        $this->sec_name_of_institution = $sec_name_of_institution;
        $this->sec_department = $sec_department;
        $this->sec_other_institute = $sec_other_institute;
        $this->sec_qualification_obtained = $sec_qualification_obtained;
        $this->sec_attach_qualification_add = $sec_attach_qualification_add;
        $this->qua_1_add = $qua_1_add;
        $this->qua_2_add = $qua_2_add;
        $this->qua_3_add = $qua_3_add;
        $this->job_pro = $job_pro;
        $this->med_non_med = $med_non_med;
        $this->employer = $employer;
        $this->job_region = $job_region;
        $this->mode_of_com = $mode_of_com; 
        $this->message = $message;
        $this->zip = $zip;
        $this->payment_plan = $payment_plan;
        $this->ser_of_area = $ser_of_area;
        $this->verification_status = $verification_status;
        $this->pass_word = $pass_word;
    }

    public function RegisterUser()
    {
        if ($this->emptyInput() == false) {
            echo "All Field Required";
            header('location: ../signup.php?status=emptyInput');
            exit();
        }
        if ($this->invalidEmail() == false) {
            echo "Invalid Email";
            header('location: ../signup.php?status=invalidEmail');
            exit();
        }
     
        if ($this->idTakenCheck() == false) {
            echo "User Name Or Email Taken";
            header('location: ../signup.php?status=useroremailtaken');
            exit();
        }

        // If all checks pass, proceed with user registration
        $this->setUser(
    $this->first_name,
    $this->last_name,
    $this->gender,
    $this->marital_status,
    $this->email,
    $this->phone,
    $this->unix_id, 
    $this->birthday,
    $this->street_address,
    $this->street_address_2,
    $this->city,
    $this->zip,
    $this->region,
    $this->country,
    $this->highest_level_of_edu,
    $this->name_of_institution,
    $this->department,
    $this->other_institute,
    $this->sec_name_of_institution,
    $this->qualification_obtained,
    $this->sec_other_institute,
    $this->sec_department,
    $this->sec_qualification_obtained,
    $this->sec_attach_qualification_add,
    $this->qua_1_add,
    $this->qua_2_add,
    $this->qua_3_add,
    $this->job_pro,
    $this->med_non_med,
    $this->employer,
    $this->job_region,
    $this->ser_of_area, 
    $this->mode_of_com,
    $this->message,
    $this->avatar_add,
    $this->payment_plan,
    $this->verification_status,
    $this->pass_word
);


        // Send confirmation email
        $this->sendEmail($this->first_name, $this->email, $this->unix_id);
    }

    private function emptyInput()
    {
        // Check for empty inputs
        return empty($this->first_name) || empty($this->last_name) || empty($this->avatar_add) || empty($this->email) || empty($this->phone) || empty($this->birthday) || empty($this->street_address) || empty($this->city) || empty($this->region) || empty($this->country) || empty($this->highest_level_of_edu) || empty($this->name_of_institution) || empty($this->sec_department) || empty($this->sec_qualification_obtained) || empty($this->job_pro) || empty($this->med_non_med) || empty($this->employer) || empty($this->job_region);
    }


    private function invalidEmail()
    {
        // Validate email format
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    


    private function idTakenCheck()
    {
        // Check if username or email is already taken
        return $this->checkUser($this->email);
    }
}
?>
