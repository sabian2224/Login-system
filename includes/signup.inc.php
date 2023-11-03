<?php

//security issue: with this statement a user cannot go manually to signup.inc file
//isset : if this is set inside, do something...
//$_POST is a superglobal variable ("submit" is the name of the submit button)
if($_SERVER["REQUEST_METHOD"] == "POST"){
   //now we grap data from url
   $fname = htmlspecialchars($_POST["fname"]);
   $lname = htmlspecialchars($_POST["lname"]);
   $bdate = htmlspecialchars($_POST["bdate"]);
   $sex = htmlspecialchars($_POST["sex"]);
   $email = htmlspecialchars($_POST["email"]);
   $pwd = htmlspecialchars($_POST["pwd"]);
   $pwdRepeat = htmlspecialchars($_POST["pwdRepeat"]);
   
   require_once 'dbh.inc.php';
   require_once 'functions.inc.php';

   if (emptyInputSignup($fname,$lname,$bdate,$sex,$email, $pwd, $pwdRepeat)!== false){
        header("location: ../signup.php?error=emptyinput");
        exit();//stops the script from running
   }
   /*
   if (invalidUid($username)!== false){
        header("location: ../signup.php?error=invaliduid");
        exit();
   }*/
       
   if (invalidEmail($email)!== false){
        header("location: ../signup.php?error=indvalidemail");
        exit();
   }
   if (pwdMatch($pwd, $pwdRepeat)!== false){
       header("location: ../signup.php?error=passwordsdontmatch");//take you to the previous folder
       exit(); //stops the script from running
   }   
   /*********************************EMAIL TAKEN */
   if (emailExists($conn,$email)!== false){
    header("location: ../signup.php?error=emailtaken");
    exit();
   }

   createUser($conn, $fname,$lname,$bdate,$sex, $email, $pwd);
}
else{
    header("location: ../signup.php"); //take you to the previous folder
    exit(); //stops the script from running 
}