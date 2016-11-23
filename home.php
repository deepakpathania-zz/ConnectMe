<?php include 'components/authentication.php' ?>     
<?php include 'components/session-check.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/first-navigation.php' ?>     
<?php 
    if($_GET["request"]=="profile-update" && $_GET["status"]=="success"){
        $dialogue="Your profile update was successful! ";
    }
    else if($_GET["request"]=="profile-update" && $_GET["status"]=="unsuccess"){
        $dialogue="Your profile update was not at all successful! ";
    }
    else if($_GET["request"]=="login" && $_GET["status"]=="success"){
        $dialogue="Welcome back again! ";
    }
?>
    <script>
        $.growl("<?php echo $dialogue; ?> ", {
            animate: {
                enter: 'animated zoomInDown',
                exit: 'animated zoomOutUp'
            }								
        });
    </script>
<div class="container">
    <div class="row clearfix mtop">
        <div class="col-md-12">
            <h1 class="text-center big">Welcome to your profile!</h1>
        </div>
    </div>
    <br/>
    <div class="row clearfix mtops">
        <div class="col-md-1"></div>
            <div class="col-md-4 panel dshadow widthfix">
                <div class="member centered pad">
                      <img src="assets/img/edit.png" alt="">
                      <div class="caption text-center">
                          <h3>
                            <a href="edit-profile.php" style="color:#256b9b"><b>Edit your profile</b></a>
                          </h3>
                      </div>
                  </div>
        </div>
        <div class="col-md-2"></div>
            <div class="col-md-4 panel dshadow widthfix">
                <div class="member centered pad">
                      <img src="assets/img/users.png" alt="">
                      <div class="caption text-center">
                          <h3>
                            <a href="all-users.php" style="color:#256b9b"><b>View other users</b></a>
                          </h3>
                      </div>
                </div>
            </div>
        <div class="col-md-1"></div>
    </div>
</div>