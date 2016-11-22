<form action="components/update-profile-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">First Name</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Last Name</label>
            <input type="text" class="form-control"  placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>" required>
        </div>
        <div class="form-group float-label-control">
            <label for="">Email</label>
            <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>" required>
        </div>
         <div class="form-group float-label-control">
            <label for="">Facebook profile</label>
            <input type="text" class="form-control" placeholder="http://facebook.com/profile_link" name="user_facebook" value="<?php echo $rws['user_facebook'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Twitter profile</label>
            <input type="text" class="form-control" placeholder="http://twitter.com/profile_link" name="user_twitter" value="<?php echo $rws['user_twitter'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Website</label>
            <input type="text" class="form-control" placeholder="http://personal_website.com" name="user_website" value="<?php echo $rws['user_website'];?>"/>
        </div>          
    </div>    
    <div class="col-md-6">
        <label for="">Username</label>
        <div class="form-group float-label-control">
                   
                <div class="input-group">
                    <span class="input-group-addon">Username :</span>
                    <fieldset disabled> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off" required>
                    </fieldset>
                </div>
            
        </div>
        <div class="form-group float-label-control">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>" required>
        </div>
        <div class="form-groupfloat-label-control">
            <label for="">Gender</label>
            <select class="form-control" name="user_gender" style="height:8%" required>
                <option selected>Male</option>
                <option>Female</option>
            </select>
        </div> 
        <div class="form-group float-label-control">
            <label for="">Github profile</label>
            <input type="text" class="form-control" placeholder="http://github.com/profile_link" name="user_github" value="<?php echo $rws['user_github'];?>"/>
        </div> 
        <div class="form-group float-label-control">
            <label for="">Linkedin profile</label>
            <input type="text" class="form-control" placeholder="http://linkedin.com/profile_link" name="user_linkedin" value="<?php echo $rws['user_linkedin'];?>"/>
        </div> 
        <div class="form-group float-label-control">
            <label for="">Avatar</label>
            <center><input name="ImageFile"  class="btn btn-primary ladda-button" data-style="zoom-in"  type="file"/></center>
        </div> 

    </div>          
<?php
    $user_username =  $_POST['user_username'];
?>     
    <hr>                 
    <div class="submit">           
        <center>
            <button class="btn btn-primary zbor ladda-button" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</form>