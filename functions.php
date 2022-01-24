<<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "petsociety";
 
    $conn = new PDO("mysql:host=$db_server;dbname=$db_database", $db_username, $db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<?php

class func 
{
    public static function checkLoginState($dbh)
    {
        if (!isset($_SESSION))
        {
            session_start();
        }
        if (isset($_SESSION['id']) || isset($_COOKIE['PHPSESSID']) && isset($_COOKIE['serial']))
        {
            $query = "SELECT * FROM sessions WHERE 
            session_userid = :userid AND 
            session_token = :token AND 
            session_serial = :serial;";

            $id = $_COOKIE['id'];
            $token = $_COOKIE['token'];
            $serial = $_COOKIE['serial'];

            $row = $dbh->prepare($query);
            $stmt->execute(array(':userid' => $userid, ':token' => $token, ':serial' => $serial));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['session_userid'] > 0)
            {
                if (
                    row['session_userid'] == $_COOKIE['userid'] && 
                    row['session_token'] == $_COOKIE['token'] && 
                    row['session_serial'] == $_COOKIE['serial'] 
                    )
                {
                    if (
                        row['session_userid'] == $_SESSION['userid'] && 
                        row['session_token'] == $_SESSION['token'] && 
                        row['session_serial'] == $_SESSION['serial'] 
                    )
                    {
                        return true;
                    }
                    else
                    {
                        func::createSession (
                            $_COOKIE['email'], 
                            $_COOKIE['userid'], 
                            $_COOKIE['token'], 
                            $_COOKIE['serial']
                        );
                        return true;
                    }
                }
            }
        }
        else
        {

        }
    }

    public static function createString($len)
    {
        $string = "1qay2wsx3edc4rfvt5gb6zhn7ujm8ik9olpYAQWSXEDCVFRTGBNHYZUJMKILOP";
        return substr(str_shuffle($string), 0, 30);
    }

    public static function createRecord($dbh, $user_email, $user_id)
    {
        $query = 'INSERT INTO sessions(session_userid, session_token, session_serial, session_date) VALUES (:user_id,:token,:serial), "14/12/2021")';
        $dbh->prepare("DELETE FROM sessions WHERE session_userid= :session_userid;")->execute(array(':session_userid'));

        $token = func::createString(30);
        $serial = func::createString(30);

        func::createCookie($user_email, $user_id, $token, $serial);
        func::createSession($user_email, $user_id, $token, $serial);

        $stmt = $dbh->prepare($query); 
        $stmt->execute(array(':user_id'=> $user_id, ':token' => $token, ':serial' => $serial));
    }

    public static function createCookie($user_email, $user_id, $token, $serial)
    {
        setcookie('user_id', $user_id, time() + (86400) * 30, "/");
        setcookie('user_email', $user_email, time() + (86400) * 30, "/");
        setcookie('token', $token, time() + (86400) * 30, "/");
        setcookie('serial', $serial, time() + (86400) * 30, "/");
    }

    public static function createSession($user_email, $user_id, $token, $serial)
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        $_SESSION['user_email'] = $user_email;
    }

    public static function deleteCookie()
    {
        setcookie('user_id', '', time() - 1, "/");
        setcookie('user_email', '', time() - 1, "/");
        setcookie('token', '', time() - 1, "/");
        setcookie('serial', '', time() - 1, "/");
        session_destroy();
    }

    public static function getUsers()
    {
        $sql = "SELECT * FROM 'users_table'";
        $result = $this->dbh->query($sql);
        return $result;
    }
    function pdo_connect_mysql() {
        $DATABASE_HOST = 'localhost';
        $DATABASE_USER = 'root';
        $DATABASE_PASS = '';
        $DATABASE_NAME = 'petsociety';
        try {
            return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
    }
    
    public function delete_user($user_id)
    {
        try
        {
            $sql = "delete from users_table where user_id = :user_id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam('user_id', $user_id);
            $stmt->execute();
            return true;    
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
    }
    
  
}

?>