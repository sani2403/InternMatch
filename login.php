<?php
session_start();
require("database/connect.php");

if (isset($_POST['euname']) && isset($_POST['password'])) {

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $euname = validate($_POST['euname']);
    $pass = validate($_POST['password']);

    if (empty($euname)) {
        header("Location:signin.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location:signin.php?error=Password is required");
        exit();
    } else {
        $querry = "SELECT * FROM users WHERE u_name = '$euname' AND u_password = '$pass'";
        $result = mysqli_query($con, $querry);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['u_name'] === $euname && $row['u_password'] === $pass) {
                $_SESSION['u_name'] = $row['u_name'];
                // $_SESSION['name'] = $row['name'];
                $_SESSION['u_id'] = $row['u_id'];
                header("Location: index.php?ses=<li><a href='logout.php'>Logout</a></li>");
                exit();
            } else {
                header("Location:signin.php?error=Incorrect User name or password");
                exit();
            }
        } else {
            header("Location:signin.php?error=Incorrect User name or password");
            exit();
        }
    }
} else {
    header("Location:signin.php");
    exit();
}
