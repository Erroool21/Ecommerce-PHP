<?php 
session_start();
include "../dbcon.php";

if(isset($_POST['username']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if(empty($uname)){
        header ("Location: ../index.php?error=Username is required");
        exit();
    }else if (empty($pass)){
        header ("Location: ../index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM acc_tbl WHERE user_name='$uname' AND pass_word = '$pass'";
        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user_name'] === $uname && $row['pass_word'] === $pass){
                $SESSION['user_name'] = $row['user_name'];
                $SESSION['name'] = $row['name'];
                $SESSION['acc_id'] = $row['acc_id'];
                header ("Location: ../home.php");
                exit();
            }
        }else {
            header ("Location: ../index.php?error=Username or Password is incorrect");
        exit();
        }
    }
}else{
    header ("Location: ../index.php");
    exit();
}
?>