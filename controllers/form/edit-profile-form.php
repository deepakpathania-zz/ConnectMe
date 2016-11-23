<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_firstname'];?>" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_lastname'];?>" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Avatar</label>
                    <input name="ImageFile" type="file" id="uploadFile"/>
                    <div class="col-md-6">
                        <div class="shortpreview">
                            <label for="">Previous Avatar </label>
                            <br> 
                            <img src="userfiles/avatars/<?php echo $rws['user_avatar'];?>" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="shortpreview" id="uploadImagePreview">
                            <label for="">Current Uploaded Avatar </label>
                            <br> 
                            <div id="imagePreview"></div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="col-md-6">
                <label for="">Username</label>
                <div class="form-group float-label-control">
       
                        <div class="input-group">
                            <span class="input-group-addon">Username</span>
                            <fieldset disabled> 
                                <input type="text" class="form-control" placeholder="<?php echo $rws['user_username'];?>" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>  
                        </div>
                
                </div>
                <div class="form-group float-label-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="<?php echo $rws['user_password'];?>" name="user_password" value="<?php echo $rws['user_password'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_email'];?>" name="user_email" value="<?php echo $rws['user_email'];?>">
                </div>
                <?php
                    if ($rws['user_gender']){
                ?>   
                                <div class="form-group float-label-control">
                                    <label for="">Gender</label> 
                                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_gender'];?>" name="user_gender" value="<?php echo $rws['user_gender'];?>">
                                </div>
                <?php } ?>
                <?php
                    if ($rws['user_profession']){
                ?>   
                                <div class="form-group float-label-control">
                                    <label for="">Profession</label> 
                                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_profession'];?>" name="user_profession" value="<?php echo $rws['user_profession'];?>">
                                </div>
                <?php } ?>
                <?php
                    if ($rws['user_country']){
                ?>   
                                <div class="form-group float-label-control">
                                    <label for="">Country</label> 
                                    <input type="text" class="form-control" placeholder="<?php echo $rws['user_cuntry'];?>" name="user_country" value="<?php echo $rws['user_country'];?>">
                                </div>
                <?php } ?>     
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Short Bio</label>
                    <textarea class="form-control rsz" placeholder="<?php echo $rws['user_shortbio'];?>" rows="3" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Birthday</label>   
                    <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
                </div>
                <?php
                    if ($rws['user_facebook']){
                ?>   
                    <div class="form-group float-label-control">
                        <label for="">Facebook</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_facebook'];?>" name="user_facebook" value="<?php echo $rws['user_facebook'];?>">
                    </div>
                <?php } ?>
                <?php
                    if ($rws['user_github']){
                ?>   
                    <div class="form-group float-label-control">
                        <label for="">Github</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_github'];?>" name="user_github" value="<?php echo $rws['user_github'];?>">
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <textarea class="form-control rsz" placeholder="<?php echo $rws['user_address'];?>" rows="3" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>"><?php echo $rws['user_address'];?></textarea>    
                </div>
                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">Portfolio:</span>
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_website'];?>" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div>
                <?php
                    if ($rws['user_twitter']){
                ?>   
                    <div class="form-group float-label-control">
                        <label for="">Twitter</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_twitter'];?>" name="user_twitter" value="<?php echo $rws['user_twitter'];?>">
                    </div>
                <?php } ?>
                <?php
                    if ($rws['user_linkedin']){
                ?>   
                    <div class="form-group float-label-control">
                        <label for="">Linkedin</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_linkedin'];?>" name="user_linkedin" value="<?php echo $rws['user_linkedin'];?>">
                    </div>
                <?php } ?> 
                <?php
                    if ($rws['user_skype']){
                ?>   
                    <div class="form-group float-label-control">
                        <label for="">Skype</label> 
                        <input type="text" class="form-control" placeholder="<?php echo $rws['user_skype'];?>" name="user_skype" value="<?php echo $rws['user_skype'];?>">
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>     
    <br>
    <div class="submit row">
        <div class="col-lg-8 col-lg-offset-2">
        <center>
            <button class="btn btn-primary ladda-button zbor" data-style="zoom-in" type="submit"  id="SubmitButton" value="Upload" />Save Your Profile</button>
        </center>
    </div>
</div>
</form>