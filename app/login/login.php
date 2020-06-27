<?php

class login
{
    /*
     * Construct
     *
     * Construct and start values for a session
     *
     * @param (none) none
     * @return (none) none
     */

    public function __construct()
    {
        /* Load Connection */
        include('app/connection/connection.php');

        /* If sesssion exists and logout don't exists */
        if (isset($_SESSION['mysession']) && !isset($_POST['logout'])) {
            include('resources/views/logout.php');

            /* Logout, session destroy */
        } else if (isset($_SESSION['mysession']) && isset($_POST['logout'])) {
            session_destroy();
            header("Location: index.php");

            /* login */
        } else {

            if (isset($_POST['login'])) {

                if ($this->validateEmail($_POST['email']) && $this->validatePassword($_POST['password'])) {
                    $email    = $_POST['email'];
                    $password = $_POST['password'];

                    /* Get email and password */
                    $sql    = "SELECT email, password FROM users WHERE status='1'";
                    $result = $conn->query($sql);
                    $check  = array();

                    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                        $check[$row['password']] = $row['email'];
                    }

                    $password_crypt = crypt($password, $sal);

                    if (isset($check[$password_crypt]) && $email == $check[$password_crypt]) {
                        /* Here we can add more security */
//                        $email=mysql_real_escape_string($email);
//                        Use prepare, etc
                        $sql    = "SELECT id, firstname, lastname, email, password FROM users WHERE email='{$email}' LIMIT 1";
                        $result = $conn->query($sql);
                        $row    = $result->fetch(PDO::FETCH_ASSOC);

                        /* Assign Session Value */
                        $_SESSION['mysession'] = "mysession";
                        $_SESSION["firstname"] = $row['firstname'];
                        $_SESSION["lastname"]  = $row['lastname'];
                        $_SESSION["email"]     = $row['email'];

                        include('resources/views/logout.php');
                    } else {
                        header("Location: index.php");
                    }
                } else {
                    header("Location: index.php");
                }
            } else {
                include('resources/views/login.php');
            }
        }

        $conn = null;
    }
    /*
     * validate email
     *
     * Check values for a email
     *
     * @param ($email) string
     * @return ($boolean) boolean
     */

    private function validateEmail($email)
    {
        if (isset($email) && $email != '' && filter_var($email,
                FILTER_VALIDATE_EMAIL)) {
            return true;
        }
    }
    /*
     * validatePassword
     *
     * Check if password has a value
     *
     * @param ($password) string
     * @return ($boolean) boolean
     */

    private function validatePassword($password)
    {
        if (isset($password) && $password !== '') {
            return true;
        }
    }
}
$login = new login();
