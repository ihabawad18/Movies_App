<?php

class UserController
{
    public $loginEmail;
    public $loginPassword;
    public $registerEmail;
    public $registerPassword;

    public $registerFirstName;
    public $registerLastName;

    public $registerDOB;

    public $UserModel;
    
    public function __construct($userModel){
        // $this->db = $conn;
        $this->UserModel = $userModel;
    }
    public function showLoginForm()
    {
        // echo print_r($_POST);
        session_start();
        if(isset($_SESSION["email"])){
            header('Location:/Movies_App');
            return ;
        }

        if (isset($_POST["login-submit"])) {            
            if ($this->login() === true) {
                header('Location:/Movies_App');
            } else {
                $email = isset($this->loginEmail) ? $this->loginEmail : '';
                $password = isset($this->loginPassword) ? $this->loginPassword : '';
                include 'views/user/login.php';
            }
        } else {
            include 'views/user/login.php';
        }
    }

    public function login()
    {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $this->loginEmail = $_POST['email'];
            $this->loginPassword = $_POST['password'];
            
            $user = array("email"=> $this->loginEmail,"password"=> $this->loginPassword);
            
            if($this->UserModel->loginUser($user)){
                session_start();
                $_SESSION["email"] = $this->loginEmail;
                if($this->UserModel->getIsAdmin($_SESSION["email"])===1){
                    $_SESSION["role"]="admin";
                }
                return true;
            }
            else{
                return false;
            }

        }
    }

    public function showRegisterForm()
    {

        session_start();
        if(isset($_SESSION["email"])){
            echo $_SESSION["email"];
            header('Location:/Movies_App');
            return ;
        }
        
        if (isset($_POST["register-submit"])) {           
            if ($this->register() === true) {
                header('Location:/Movies_App');
            } else {
                $email = isset($this->registerEmail) ? $this->registerEmail : '';
                $password = isset($this->registerPassword) ? $this->registerPassword : '';
                $firstName = isset($this->registerFirstName) ? $this->registerFirstName : '';
                $lastName = isset($this->registerLastName) ? $this->registerLastName : '';
                $dob = isset($this->registerDOB) ? $this->registerDOB : '';
                include 'views/user/register.php';
            }
        } else {
            include 'views/user/register.php';
        }
    }

    public function register()
    {

        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
            $this->registerEmail = $_POST['email-register'];
            $this->registerPassword = $_POST['password-register'];
            $this->registerFirstName = $_POST['firstName-register'];
            $this->registerLastName = $_POST['lastName-register'];
            $this->registerDOB = $_POST['dob-register'];

            $user = array("email"=> $this->registerEmail,"password"=> $this->registerPassword,"firstName"=>$this->registerFirstName,"lastName"=>$this->registerLastName,"DOB"=>$this->registerDOB);

            if($this->UserModel->registerUser($user)){
                session_start();
                $_SESSION["email"] = $this->registerEmail;
                if($this->UserModel->getIsAdmin($_SESSION["email"])===1){
                    $_SESSION["role"]="admin";
                }
                return true;
            }
            else{
                return false;
            }


        }
    }


}

?>