<?php

class Admin extends controllers
{
    private $UserModel;

    public function __construct()
    {
        $this->UserModel = $this->models("User");
    }

    public function Show()
    {
        if (isset($_SESSION['login'])) {
            $data = ["page" => "HomeAdmin"];
            $this->views("Admin", $data);
        } else {
            $this->Login();
            header("Location:" . MAIN_URL . "Admin/Login");
        }

    }

    public function Register()
    {
        $this->views("Register");
    }

    public function Login()
    {
        $this->views("Login");
    }

    public function Process()
    {
        //1.Lấy thông tin đăng nhập
        if (isset($_POST["signin"])) {
            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $result = $this->UserModel->SignUp($email,$pass);
            if (!isset($result)) {
                header("Location:" . MAIN_URL . "Admin/Login");
            } else {
                $_SESSION['user'] = $result;
                $_SESSION['login'] = true;
                header("Location:" . MAIN_URL . "Admin/Home");
            }
        }
    }

    public function handlingRegister()
    {
        //1.Gét thông in đăng kí
        if (isset($_POST["signup"])) {
            $username = $_POST["name"];
            $email = $_POST["email"];
            $pass = $_POST["pass"];

            $result = false;
            if ($this->UserModel->insertUser($username, $email, $pass)) {
                $result = true;
            };
            $data = ["result" => $result];
            $this->views("Register", $data);
        }
    }

    public function Logout()
    {
        session_destroy();
        header("Location:" . MAIN_URL . "Admin/Login");
    }
}