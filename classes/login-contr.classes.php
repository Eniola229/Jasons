<?php 
class LoginContr extends Login
{
    private $email;
    private $pass_word;

    public function __construct($email, $pass_word)
    {
        $this->email = $email;
        $this->pass_word = $pass_word;
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header('Location: ../index.php?status=emptyinput');
            exit;
        }
        
        $userData = $this->getUser($this->email, $this->pass_word);
        if (!$userData) {
            header('Location: ../index.php?status=loginfailed');
            exit;
        }
        if (!$this->sendEmailCheckLater($this->email, $userData['unix_id'])) {
            error_log("Failed to send login email notification.");
        }
       
         if (!$this->CheckLogin($this->email, $userData['unix_id'])) {
            error_log("Failed to send login email notification.");
        }
        

        $this->setLoginCookie($userData['user_id'], $this->email);

        if ($_SESSION['role'] == "") {
            if ($_SESSION['approved'] == "1") {
                header("Location: ../memberhome.php");
                 $this->CheckLogin($this->email, $userData['unix_id']);
                exit;  
            }
             else {
                header("Location: ../checkbacklater.php");
                $this->sendEmailCheckLater($this->email, $userData['unix_id']);
                exit;  
            }
            } elseif ($_SESSION['role'] == "2") {
                $this->CheckLogin($this->email, $userData['unix_id']);
                header('Location: ../admin.php');
                exit;
            } elseif ($_SESSION['role'] == "1") {
                $this->CheckLogin($this->email, $userData['unix_id']);
                header('Location: ../cordinator.php');
                exit;
            } else {
                header('Location: ../index.php?status=errorlogginyouin');
                exit;
            }
    }


    public function setLoginCookie($user_id, $email)
    {
        $expiration = time() + (30 * 24 * 60 * 60); // 30 days * 24 hours * 60 minutes * 60 seconds

        setcookie('user_id', $user_id, $expiration, '/');
        setcookie('email', $email, $expiration, '/');
    }

    private function emptyInput()
    {
        return (!empty($this->email) && !empty($this->pass_word));
    }
}