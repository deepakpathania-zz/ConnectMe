<?php
    session_start();
    $temp= $_SESSION['user_username'];
    ini_set("display_errors",1);
    if(isset($_POST)){
        require '../_database/database.php';
        $Destination = '../userfiles/avatars';
        if(!isset($_FILES['ImageFile']) || !is_uploaded_file($_FILES['ImageFile']['tmp_name'])){
            $NewImageName= 'default.jpg';
            // move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        else{
            $RandomNum = rand(0, 9999999999);
            $ImageName = str_replace(' ','-',strtolower($_FILES['ImageFile']['name']));
            $ImageType = $_FILES['ImageFile']['type'];
            $ImageExt = substr($ImageName, strrpos($ImageName, '.'));
            $ImageExt = str_replace('.','',$ImageExt);
            $ImageName = preg_replace("/\.[^.\s]{3,4}$/", "", $ImageName);
            $NewImageName = $ImageName.'-'.$RandomNum.'.'.$ImageExt;
            // move_uploaded_file($_FILES['ImageFile']['tmp_name'], "$Destination/$NewImageName");
        }
        $user_firstname=$_REQUEST['user_firstname'];
        $user_lastname=$_REQUEST['user_lastname'];
        $user_email=$_REQUEST['user_email'];
        $user_password=$_REQUEST['user_password'];
        $user_gender = $_REQUEST['user_gender'];
        $user_facebook = $_REQUEST['user_facebook'];
        $user_twitter = $_REQUEST['user_twitter'];
        $user_linkedin = $_REQUEST['user_linkedin'];
        $user_github = $_REQUEST['user_github'];
        $user_website = $_REQUEST['user_website'];
        $sql3="UPDATE user SET user_firstname='$user_firstname',user_lastname='$user_lastname',user_email='$user_email',user_password='$user_password',user_avatar='$NewImageName',user_gender='$user_gender',user_facebook='$user_facebook',user_linkedin='$user_linkedin',user_github='$user_github',user_website='$user_website' WHERE user_username = '$temp'";
        $user_username=$_SESSION['user_username'];
        if( mysqli_num_rows($result) > 0) {
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-bio-after-registration.php?user_username=$user_username&current_user=$user_username");
        }
        else{
            mysqli_query($database,$sql3)or die(mysqli_error($database));
            header("location:../update-bio-after-registration.php?user_username=$user_username&current_user=$user_username");
        }  
    }    
?>