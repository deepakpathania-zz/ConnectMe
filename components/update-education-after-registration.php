<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        $user_university=$_REQUEST['user_university'];
        $user_course=$_REQUEST['user_course'];
        $user_graduation_year = $_REQUEST['user_graduation_year'];
        $user_cgpa= $_REQUEST['user_cgpa'];
        $user_course_field = $_REQUEST['user_course_field'];
        $user_extra = $_REQUEST['user_extra'];
        $sql3="UPDATE user SET user_university='$user_university',user_course='$user_course',user_graduation_year='$user_graduation_year',user_cgpa='$user_cgpa',user_course_field='$user_course_field',user_extra='$user_extra' WHERE user_username = '$temp'";
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