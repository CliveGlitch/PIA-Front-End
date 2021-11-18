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

