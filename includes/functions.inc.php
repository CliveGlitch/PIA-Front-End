<?php
function emptyInputSignup($name, $email, $username, $pwd, $pwdrepeat){
    $result;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat)){
        $result = true;
    } else {
        $result = false;
    }

    return = $result;
}

function invalidUid($username){
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }

    return = $result;
}

function invalidEmail($email){
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }

    return = $result;
}

function pwdMatch($pwd, $pwdrepeat){
    $result;
    if($pwd !== $pwdrepeat){
        $result = true;
    } else {
        $result = false;
    }

    return = $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = $1 OR usersEmail = $2;";
    $stmt = pg_prepare($conn, "checkUidEmail", $sql);
    if(!$stmt){
        header("location: ../SignUp.php?error=stmtfailed");
        exit();
    } 

    pg_execute($conn, "checkUidEmail", array($usernamem, $email));

    $resultData = pg_get_result($conn);
    if($row = pg_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ($1, $2, $3, $4);";
    $stmt = pg_prepare($conn, "signup", $sql);
    if(!$stmt){
        header("location: ../SignUp.php?error=stmtfailed");
        exit();
    } 

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    pg_execute($conn, "signup", array($name, $email, $username, $hashedPwd));

    header("location: ../SignUp.php?error=none");
    exit();

}