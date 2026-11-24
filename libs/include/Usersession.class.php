<?php

class Usersession
{
    public static $id;
    public static $logintime = null;

    public static function signup($username, $password, $email)
    {
        $conn = Database::getConnection();

        $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`)
VALUES ('$username', '$password', '$email','0');";
        // Execute the SQL query
        $result = $conn->query($sql);
        if ($result) {
            return true;
        }
    }

    public static function authenticate($user, $pass)
    {
        $conn = Database::getConnection();

        $sql = "SELECT * FROM `auth` WHERE `username` = '$user'";
        // Execute the SQL query
        $result = $conn->query($sql);


        // Process the result set
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // print_r($row);
            if ($row['password'] == $pass) {
                $ip_addr = $_SERVER["REMOTE_ADDR"];
                $user_agent = $_SERVER["HTTP_USER_AGENT"];
                $token = md5(rand(0, 99999) . $ip_addr . $user_agent . time());
                $id = $row['id'];
                $sql = "INSERT INTO `usersession` (`uid`, `token`, `logintime`, `useragent`, `ip`, `active`)
VALUES ('$id', '$token', now(), '$user_agent', '$ip_addr', '1');";
                if ($conn->query($sql) === TRUE) {
                    session::setvalue('sessiontoken', $token);
                    print($token);
                    return true;
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                return false;
            }
        } else {
            throw new Exception("Can't find the query");
        }
    }

    public static function authorization($token)
    {
        $conn = Database::getConnection();

        $sql = "SELECT `logintime`, `id` FROM `usersession` WHERE `token` = '$token' ";

        $result = $conn->query($sql);
        $logintime = $result->fetch_assoc()['logintime'];
        // print($logintime);
        if ($logintime) {
            Usersession::$logintime = $logintime;
            $session = new Usersession($token);

            if ($session) {
                session::$userdata = new User(Usersession::$id);
            }
        }
    }


    public static function isvalid()
    {
        $loginTimestamp = strtotime(Usersession::$logintime);
        $currentTimestamp = time();

        // 2. Define 30 minutes in seconds (30 minutes * 60 seconds)
        $sessionLifetime = 30 * 60;

        // 3. Check if current time has exceeded login time + 30 minutes
        if (($currentTimestamp - $loginTimestamp) > $sessionLifetime) {
            // session::unset();
            // session::destroy();
            // echo "Session expired!";
            return false;
        } else {
            // echo "Session is valid.";
            return true;
        }
    }

    public function __construct($token)
    {

        $conn = Database::getConnection();

        $sql = "SELECT * FROM `usersession` WHERE `token` = '$token'";
        // print("yes");

        $result = $conn->query($sql);
        // print_r($result);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            Usersession::$id = $row['uid'];
            //  print($this->id);
            return true;
        } else {
            print("no data");
        }
    }
}
