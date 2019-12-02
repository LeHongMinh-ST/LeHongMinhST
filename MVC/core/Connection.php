<?php
class Connection
{
    public $conn;

    public function __construct()
    {
        $host_db = "localhost";
        $username_db = "root";
        $password_db = "";
        $name_db = "zent";

        $this->conn = new mysqli($host_db, $username_db, $password_db, $name_db);
        mysqli_set_charset($this->conn, "UTF8");

        if ($this->conn->connect_errno) {
            die("Connection faild: " . $this->conn->connect_errno);
        }
    }

    public function execute($qr)
    {
        return $this->conn->query($qr);
    }

    public function countRow($qr)
    {
        $rows = $this->execute($qr);
        return $rows->num_rows;
    }

    public function asoccDB($qr)
    {
        $arr = array();
        if ($rows = $this->execute($qr)) {
            while ($row = $rows->fetch_assoc()) {
                $arr[] = $row;
            }
            return $arr;
        } else {
            //Do something
            echo mysqli_error($this->conn);
        }
    }

}

?>