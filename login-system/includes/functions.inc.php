<?php

/*Sign up functions *////////////////////////////////////////////
function emptyInputSignup($fname,$lname,$bdate,$sex,$email, $pwd, $pwdRepeat){
    $result = null;
    if(empty($fname) || empty($lname) || empty($bdate) 
    || empty($sex) || empty($email) || empty($pwd) || empty($pwdRepeat) ){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}



function invalidEmail($email){
    $result = null;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}

function pwdMatch($pwd, $pwdRepeat){
    $result = null;
    if($pwd !== $pwdRepeat){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}



 function emailExists($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    //now we want to submit the sql statement to the db
    $stmt = mysqli_stmt_init($conn); // initializes a new statement to the db

    //run this sql statement into the db and see if there is any error
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
   
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row; 
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
 }



function createUser($conn, $fname,$lname,$bdate,$sex, $email, $pwd){
    $sql = "INSERT INTO users (fname,lname,bdate,gender,email,pwd) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
         header("location: ../signup.php?error=stmtfailed");//take you to the previous folder
         exit(); //stops the script from running
    }

    /*Important *//*Scurity:  */
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
 
    mysqli_stmt_bind_param($stmt, "ssssss",$fname,$lname,$bdate,$sex, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: signup_success.php");
    exit();

 }


 /*Log in Functions  *///////////////////////////////////////
 function emptyInputLogin($email, $pwd){
    $result = null;
    if(empty($email) || empty($pwd) ){
        $result = true;
    }
    else{
        $result = false;
    }

    return $result;
}



function loginUser($conn, $email, $pwd){
    $emailExists = emailExists($conn, $email);
    
    
    if($emailExists === false){
        header("location: ../login.php?error=wrongemail ");
        exit(); 
    }
                             //pwd in db
    $pwdHashed = $emailExists["pwd"];
    $checkPwd = password_verify($pwd,$pwdHashed);
    
    if($checkPwd === false){
        header("location: ../login.php?error=wronglogin ");
        exit(); 
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["userid"] = $emailExists["id"];
        $_SESSION["userEmail"] = $emailExists["email"];
        $_SESSION["userFname"] = $emailExists["fname"];
        $_SESSION["userLname"] = $emailExists["lname"];
        header("location: ../index.php");
        exit(); 
    }

    
}


