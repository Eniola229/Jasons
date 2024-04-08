<?php
	
	class RegisterContr extends Register
{
    private $first_name;
    private $last_name;
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
    private $other_institute;
    private $sec_name_of_institution;
    private $sec_other_institute;
    private $sec_department;
    private $sec_qualification_obtained;
    private $sec_attach_qualification_add;
    private $qua_1_add;
    private $qua_2_add;
    private $qua_3_add;
    private $job_pro;
    private $med_non_med;
    private $employer;
    private $job_region;
    private $ser_of_area;
    private $mode_of_com;
    private $message;
    private $payment_plan;
    private $Verification_status;
    private $pwd;
    private $pwdRepeat;

    public function __construct($first_name, $last_name, $gender, $marital_status, $email, $phone, $birthday, $street_address, $street_address_2, $city, $zip, $region, $country, $highest_level_of_edu, $name_of_institution, $other_institute, $sec_name_of_institution, $sec_other_institute, $sec_department, $sec_qualification_obtained, $sec_attach_qualification_add, $qua_1_add, $qua_2_add, $qua_3_add, $job_pro, $med_non_med, $employer, $job_region, $ser_of_area, $mode_of_com, $message, $avatar_add, $payment_plan, $verification_status, $pwd, $pwdRepeat)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->gender = $gender;
        $this->marital_status = $marital_status;
        $this->email = $email;
        $this->phone = $phone;
        $this->unix_id = $unix_id;
        $this->birthday = $birthday;
        $this->street_address = $street_address;
        $this->street_address_2 = $street_address_2;
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
        $this->ser_of_area = $ser_of_area;
        $this->med_non_med = $med_non_med;
        $this->message = $message;
        $this->payment_plan = $payment_plan;
        $this->employer = $employer;
        $this->Subscription_plan = $Subscription_plan;
        $this->Verification_status = $Verification_status;
        $this->pwd = $pwd;
        $this->pwdRepeat = $pwdRepeat;
    }

    public function RegisterUser()
    {
        if ($this->emptyInput() == false) {
            echo "All Field Required";
            header('location: ../register.php?status=emptyInput');
            exit();
        }
        if ($this->invalidEmail() == false) {
            echo "Invalid Email";
            header('location: ../register.php?status=invalidEmail');
            exit();
        }
        if ($this->pwdMatch() == false) {
            echo "Password dont Match!";
            header('location: ../register.php?status=passwordmatch');
            exit();
        }
        if ($this->idTakenCheck() == false) {
            echo "User Name Of Email Taken";
            header('location: ../register.php?status=useroremailtaken');
            exit();
        }

        // If all checks pass, proceed with user registration
        $this->setUser($this->name, $this->email, $this->phone_number, $this->unix_id, $this->Subscription_plan, $this->Verification_status, $this->pwd);

        // Send confirmation email
    	$this->sendEmail($this->name, $this->email, $this->unix_id);

    }

    private function emptyInput()
    {
        return !empty($this->name) && !empty($this->email) && !empty($this->phone_number);
    }

    private function invalidEmail()
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL);
    }

    private function pwdMatch()
    {
        return $this->pwd === $this->pwdRepeat;
    }

    private function idTakenCheck()
    {
        return $this->checkUser($this->name, $this->email);
    }

    public function FetchUserIdByEmail($email) {
        // Prepare and execute SQL query to fetch user ID by email
        $stmt = $this->connect()->prepare("SELECT user_id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user['user_id'] ?? null; // Return user ID or null if not found
    }
}
