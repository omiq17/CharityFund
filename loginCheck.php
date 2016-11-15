<?php
require_once 'connect.php';//connect to DB

        $username = mysqli_real_escape_string($link, $_POST['username']);
        $password = mysqli_real_escape_string($link, $_POST['password']);
        //$password_hash = md5($password);
        // $password_hash = sha1( md5($password).'raqib_hasan1993omiq' );
                $query = "Select * from `username` where u_name= '$username'
                                And u_pass= '$password' ";
                $result = mysqli_query($link, $query);
                $row = mysqli_num_rows($result);

                if($row==0){
                    //echo 'Invalid Username/Password';
                    $_SESSION['invalid']="invalid";
                    header('Location: index.php');
                }
                else if($row==1){
                    //echo 'yes';
                     //take user name for create session
                    $rowuser = mysqli_fetch_assoc($result);
                    // $session = $rowuser['u_name'];
                    $_SESSION['user']='Admin'; //creating a session
                    header('Location: admin.php'); //back to home page and check the session
                }
                else
                    echo 'Don\'t mess with me';

?>
