<?php
class User extends Connection
{
    public function SignUp($email,$pass)
    {
        $qr = "SELECT * FROM users where email = '$email' AND  password = '$pass'";
        $arr =$this->asoccDB($qr);
        return $arr[0];
    }

    public function insertUser($username,$email,$pass)
    {
        $qr = "INSERT INTO users(name, email, password, created_at,auth) VALUES ('$username','$email','$pass',CURRENT_TIMESTAMP(),0)";
        return $this->execute($qr);
    }
}
?>