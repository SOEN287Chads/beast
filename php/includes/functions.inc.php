<?php

function legalPassword()
{
    $pass = $_POST['password'];
    $capRegex = "/[A-Z].*[A-Z]/";
    $lowRegex = "/[a-z]/";
    $splRegex = "/[!@#$%^&]/";
    $numRegex = "/[0-9]/";

    if (!(preg_match($capRegex, $pass) && preg_match($lowRegex, $pass) && preg_match($splRegex, $pass)
        && preg_match($numRegex, $pass) && strlen($pass) >= 8)) {
        return -1;
    }

    return 0;
}

function emailExists($con, $email)
{
    $sql = "SELECT * FROM Users WHERE Email = ? ;";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../php/error.php");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
}

function createUser($con, $email, $password)
{
    $sql2 = "INSERT INTO Users (Email, Passwd) VALUES (?, ?);";
    $stmt2 = mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt2, $sql2)) {
        header("location: ../php/error.php");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt2, "ss", $email, $hashedPwd);
    mysqli_stmt_execute($stmt2);
    mysqli_stmt_close($stmt2);
}

function emptyInputLogin($usr, $pwd)
{
    if (empty($usr) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $usr, $pwd)
{
    $emailExists = emailExists($conn, $usr, $pwd);

    if ($emailExists == false) {
        header('Location: /beast/php/signUp.php?error=wronglogin');
        exit();
    }

    $pwdHashed = $emailExists["Passwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header('Location: /beast/php/signUp.php?error=wronglogin');
        exit();
    } else if ($checkPwd === true) {
        session_start();
        $_SESSION["email"] = $emailExists["Email"];
        header('Location: /beast/php/home.php');
        exit();
    }
}
