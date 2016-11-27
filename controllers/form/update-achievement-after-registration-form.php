<form action="components/update-achievement-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Achievement Title</label>
            <input type="text" class="form-control" placeholder="First Prize, Coding competition" name="user_achievement_title" value="<?php echo $rws['user_achievement_title'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Issuer</label>
            <input type="text" class="form-control" placeholder="Competition organizer" name="user_achievement_issuer" value="<?php echo $rws['user_achievement_issuer'];?>" />
        </div>
        <div class="form-group float-label-control">
            <label for="">Relevant link</label>
            <input type="text" class="form-control" placeholder="Project repo/demo link" name="user_achievement_link" value="<?php echo $rws['user_achievement_link'];?>" />
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Date</label>   
            <input type="date" class="form-control" placeholder="<?php echo $rws['user_achievement_date'];?>" name="user_achievement_date" value="<?php echo $rws['user_achievement_date'];?>">
        </div>
        <div class="form-group float-label-control">
            <label for="">Description</label>
            <textarea class="form-control rsz" rows="3" placeholder="Describe achievement brefly." name="user_achievement_description" value="<?php echo $rws['user_achievement_description'];?>"><?php echo $rws['user_achievement_description'];?></textarea>
        </div>
    </div>          
<?php
    $user_username =  $_POST['user_username'];
?>     
                     
    <div class="submit">          
        <center>
            <button class="btn btn-primary ladda-button zbor mtops" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>