<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
  $User      =filter_var($_POST['UserName'],FILTER_SANITIZE_STRING);
  $phone     =filter_var($_POST['phone_num'],FILTER_SANITIZE_NUMBER_INT);
  $mail      =filter_var($_POST['email' ],FILTER_SANITIZE_EMAIL);
  $password      =filter_var($_POST['password'],FILTER_SANITIZE_STRING);
  $con_pass  =filter_var($_POST['confirm_password'],FILTER_SANITIZE_STRING);


  if ($password==$con_pass) {
    echo 'UserName is : '.$User.'<br>';
    echo 'Your phone_num is : '.$phone.'<br>';
    echo 'Your Email is : '.$mail.'<br>';
    echo "Your Password Is : ".$password;

    //data base connection
    $dsn='mysql:host=localhost;dbname=register_form';
    $user='root';
    $pass='';
    try {
    $dbconnect=new PDO($dsn,$user,$pass);
    $q="INSERT INTO `table_user` (`ID_user`, `UserName`, `phone_num`, `Email`, `Password`) VALUES ( '', '$User', '$phone', '$mail', '$password')";
    $dbconnect->exec($q);

    }
     catch (PDOException $e) {
      echo "faild" . $e->getmessage();

    }

  }else {
    echo "you have error in your password";
  }
}
else {
  echo " sorry you can/'t conatact with this page!";
}
?>
