<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        $user_achievement_title=$_REQUEST['user_achievement_title'];
        $user_achievement_issuer=$_REQUEST['user_achievement_issuer'];
        $user_achievement_link = $_REQUEST['user_achievement_link'];
        $user_achievement_date= $_REQUEST['user_achievement_date'];
        $user_achievement_description = $_REQUEST['user_achievement_description'];
        $sql3="UPDATE user SET user_achievement_title='$user_achievement_title',user_achievement_issuer='$user_achievement_issuer',user_achievement_link='$user_achievement_link',user_achievement_date='$user_achievement_date',user_achievement_description='$user_achievement_description' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../edit-profile.php?user_username=$user_username");
        }  
    }    
?>