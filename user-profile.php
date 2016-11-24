<?php include 'components/authentication.php' ?> 
<?php include 'components/session-check-user-profile.php' ?>
<?php include 'controllers/base/head.php' ?>
<?php include 'controllers/navigation/index-before-login-navigation.php' ?> 
<?php include 'controllers/base/style.php' ?>
<?php 
    if($_GET["follow"]=="same"){
        $dialogue="Your can't follow yourself! ";
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
<?php 
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $current_user = $_SESSION['user_username'];
    $profile_username=$rws['user_username'];
?>
<?php
    $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
?>
<div class="profile">
    <div class="row clearfix">
        <!-- <div class="col-xs-12 column"> -->
            <div>
                <center>
                    <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="mtops bcircle img-responsive profile-avatar">
                </center>
                <h1 class="text-center profile-text profile-name whitecol capitalize"><?php echo $rws['user_firstname'];?> <?php echo $rws['user_lastname'];?></h1>
                <h1 class="text-center profile-text profile-profession whitecol capitalize"><?php echo $rws['user_profession'];?></h1>
                <br>
                <div class="panel-group white widthfix dshadow mtopn" id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <div class="col-md-8 column">
                                    <p class="text-center profile-title"><i class="fa fa-id-card-o"></i> Basic</p>
                                    <hr>
                                    <?php
                                        if ($rws['user_shortbio']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-info"></i> Bio</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $rws['user_shortbio'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_email']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-envelope"></i> Email</p>
                                        </div>
                                        <div class="col-xs-8">                                    
                                            <p><?php echo $rws['user_email'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_country']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-map-marker"></i> Country</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $rws['user_country'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="col-md-4 column">
                                    <p class="centered profile-title"><i class="fa fa-info"></i> Personal</p>
                                    <hr>
                                    <?php
                                        if ($rws['user_gender']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-user"></i> Gender</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $rws['user_gender'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_dob']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-calendar"></i> DOB</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $rws['user_dob'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_address']){
                                    ?>   
                                        <div class="col-xs-4">
                                            <p class="profile-details"><i class="fa fa-globe"></i> Address</p>
                                        </div>
                                        <div class="col-xs-8">
                                            <p><?php echo $rws['user_address'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group white widthfix dshadow " id="panel-profile">
                    <div class="panel panel-default">
                        <div id="panel-element-info" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <p class="text-center profile-title"><i class="fa fa-share-square-o"></i> Social profiles</p>
                                <hr/>
                                <div class="col-md-4 column">
                                    <?php
                                        if ($rws['user_facebook']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-facebook"></i></p>
                                        </div>
                                        <div class="col-xs-10">
                                            <p><?php echo $rws['user_facebook'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_twitter']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-twitter"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_twitter'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-md-4 column">
                                    <?php
                                        if ($rws['user_linkedin']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-linkedin"></i></p>
                                        </div>
                                       <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_linkedin'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_github']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-github"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_github'];?></p>
                                        </div>
                                    <?php } ?>
                                    </div>
                                    <div class="col-md-4 column">
                                    <?php
                                        if ($rws['user_skype']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-skype"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_skype'];?></p>
                                        </div>
                                    <?php } ?>
                                    <?php
                                        if ($rws['user_website']){
                                    ?>   
                                        <div class="col-xs-2">
                                            <p class="profile-details"><i class="fa fa-2x fa-star-o"></i></p>
                                        </div>
                                        <div class="col-xs-10">                                    
                                            <p><?php echo $rws['user_website'];?></p>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </div>
        <!-- </div> -->
    </div>
</div>