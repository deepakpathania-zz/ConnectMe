<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        session_start();
        $user_shortbio=$_REQUEST['user_shortbio'];
        $user_dob=$_REQUEST['user_dob'];
        $user_address = $_REQUEST['user_address'];
        $user_profession= $_REQUEST['user_profession'];
        $user_country = $_REQUEST['user_country'];
        $user_skype = $_REQUEST['user_skype'];
        $sql3="UPDATE user SET user_shortbio='$user_shortbio',user_dob='$user_dob',user_address='$user_address',user_country='$user_country',user_profession='$user_profession',user_skype='$user_skype' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        $sql4="INSERT INTO user (user_shortbio,user_dob) VALUES ('$user_shortbio','$user_dob') WHERE user_username = $temp";
        $result = mysqli_query($database,"SELECT * FROM user WHERE user_username = '$user_username'");
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-education-after-registration.php?user_username=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-education-after-registration.php?user_username=$user_username");
        }  
    }    
?>