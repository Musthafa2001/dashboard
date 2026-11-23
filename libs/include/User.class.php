<?php

class User
{
    public $id = null;

        public function __construct($id)
        {
            $this->id = $id;
    }

    public function __call($name, $arguments)
    {
        if (substr($name,0,3) == "get") {
            $dbname=substr($name,3);
            return $this->usergetvalue($dbname);
        } elseif (substr($name, 0, 3) == "set") {
        } else {
        }
    }
    public function usersetvalue()
    {

        $sql = "INSERT INTO `user` (`id`, `fIrstName`, `lastname`, `dob`, `instagram`)
VALUES ('1', 'Mohamed', 'Musthafa', now(), 'dfdfdfdfd');";
    }


    public function usergetvalue($name)
    {
        $conn = Database::getConnection();

        $sql = "SELECT `$name` FROM `user` WHERE `id` = $this->id";
        $result = $conn->query($sql);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
        
            return $row[$name];
            
        }
    }

    public static function login($username, $password)
    {

        $conn = Database::getConnection();

        $sql = "SELECT * FROM `auth` WHERE `username` = '$username'";
        // Execute the SQL query
        $result = $conn->query($sql);

        // Process the result set
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $password) {
                Session::setvalue('isLoggedin', true);
                Session::setvalue('sessionid',$row['id']);
            } else {
                return false;
            }
        } else {
            throw new Exception("Can't find the query");
        }
    }
}
