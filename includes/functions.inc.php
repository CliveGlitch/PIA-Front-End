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

    $resultData = pg_query($conn, $sql);
    if($row = pg_fetch_assoc($resultData)){
        return $row;

    } else {
        $result = false;
        return $result;
    }

}

function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO users VALUES ($1, $2, $3, $4);";
    
    pg_query($conn, $sql);

    header("location: ../SignUp.php?error=none");
    exit();

}