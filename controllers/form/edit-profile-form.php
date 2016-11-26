<form action="components/update-profile.php" method="post" enctype="multipart/form-data" id="UploadForm">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#general" data-toggle="tab">General</a></li>
      <li><a href="#personal" data-toggle="tab">Personal</a></li>
      <li><a href="#education" data-toggle="tab">Education</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane fade in active" id="general">         
            <div class="col-md-6">
                <div class="form-group float-label-control">                      
                    <label for="">First Name</label>
                    <input type="text" class="form-control" placeholder="First Name" name="user_firstname" value="<?php echo $rws['user_firstname'];?>">
                </div>
                <div class="form-group float-label-control">  
                    <label for="">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last Name" name="user_lastname" value="<?php echo $rws['user_lastname'];?>">
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
                                <input type="text" class="form-control" placeholder="Username" name="user_username" value="<?php echo $rws['user_username'];?>" id="disabledTextInput" autocomplete="off">
                            </fieldset>  
                        </div>
                
                </div>
                <div class="form-group float-label-control">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="user_password" value="<?php echo $rws['user_password'];?>">
                </div>
                <div class="form-group float-label-control">
                    <label for="">Email</label> 
                    <input type="text" class="form-control" placeholder="Email id" name="user_email" value="<?php echo $rws['user_email'];?>">
                </div>
  
                                <div class="form-group float-label-control">
                                    <label for="">Gender</label> 
                                    <input type="text" class="form-control" placeholder="Male" name="user_gender" value="<?php echo $rws['user_gender'];?>">
                                </div>
      
 
                                <div class="form-group float-label-control">
                                    <label for="">Profession</label> 
                                    <input type="text" class="form-control" placeholder="Student" name="user_profession" value="<?php echo $rws['user_profession'];?>">
                                </div>
            
              
                                <div class="form-group float-label-control">
                                    <label for="">Country</label> 
                                    <input type="text" class="form-control" placeholder="India" name="user_country" value="<?php echo $rws['user_country'];?>">
                                </div>
                 
            </div>
        </div>
        <div class="tab-pane fade" id="personal">
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Short Bio</label>
                    <textarea class="form-control rsz" placeholder="Describe yourself briefly." rows="3" placeholder="<?php echo $rws['user_shortbio'];?>" name="user_shortbio" value="<?php echo $rws['user_shortbio'];?>"><?php echo $rws['user_shortbio'];?></textarea>
                </div>
                <div class="form-group float-label-control">
                    <label for="">Birthday</label>   
                    <input type="date" class="form-control" placeholder="<?php echo $rws['user_dob'];?>" name="user_dob" value="<?php echo $rws['user_dob'];?>">      
                </div>  
                    <div class="form-group float-label-control">
                        <label for="">Facebook</label> 
                        <input type="text" class="form-control" placeholder="http://facebook.com/profile_link" name="user_facebook" value="<?php echo $rws['user_facebook'];?>">
                    </div> 
                    <div class="form-group float-label-control">
                        <label for="">Github</label> 
                        <input type="text" class="form-control" placeholder="http://github.com/profile_link" name="user_github" value="<?php echo $rws['user_github'];?>">
                    </div> 
                    <div class="form-group float-label-control">
                        <label for="">Skype</label> 
                        <input type="text" class="form-control" placeholder="@abc.xyz" name="user_skype" value="<?php echo $rws['user_skype'];?>">
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group float-label-control">
                    <label for="">Address</label>
                    <textarea class="form-control rsz" placeholder="Current address." rows="3" placeholder="<?php echo $rws['user_address'];?>" name="user_address" value="<?php echo $rws['user_address'];?>"><?php echo $rws['user_address'];?></textarea>    
                </div>
                <label for="">Website</label>
                <div class="form-group float-label-control">
                    <div class="input-group">                  
                        <span class="input-group-addon">Portfolio:</span>
                        <input type="text" class="form-control" placeholder="http://username.com" name="user_website" value="<?php echo $rws['user_website'];?>">                  
                    </div>
                </div>
                    <div class="form-group float-label-control">
                        <label for="">Twitter</label> 
                        <input type="text" class="form-control" placeholder="http://twitter.com/profile_link" name="user_twitter" value="<?php echo $rws['user_twitter'];?>">
                    </div>
                    <div class="form-group float-label-control">
                        <label for="">Linkedin</label> 
                        <input type="text" class="form-control" placeholder="http://linkedin.com/profile_link" name="user_linkedin" value="<?php echo $rws['user_linkedin'];?>">
                    </div>
            </div>
        </div>
          <div class="tab-pane fade" id="education">
            <div class="col-md-6">
         
                    <div class="form-group float-label-control">
                        <label for="">University</label> 
                        <input type="text" class="form-control" placeholder="GGSIPU" name="user_university" value="<?php echo $rws['user_university'];?>">
                    </div>
        
                    <div class="form-group float-label-control">
                        <label for="">Course</label> 
                        <input type="text" class="form-control" placeholder="B.tech" name="user_course" value="<?php echo $rws['user_course'];?>">
                    </div>
          
                    <div class="form-group float-label-control">
                        <label for="">Graduation Year</label> 
                        <input type="text" class="form-control" placeholder="2018" name="user_graduation_year" value="<?php echo $rws['user_graduation_year'];?>">
                    </div>
               
            </div>
            <div class="col-md-6">
    
                    <div class="form-group float-label-control">
                        <label for="">CGPA</label> 
                        <input type="text" class="form-control" placeholder="9.0" name="user_cgpa" value="<?php echo $rws['user_cgpa'];?>">
                    </div>
        
     
                    <div class="form-group float-label-control">
                        <label for="">Course Field</label> 
                        <input type="text" class="form-control" placeholder="Computer Science" name="user_course_field" value="<?php echo $rws['user_course_field'];?>">
                    </div>
       
                    <div class="form-group float-label-control">
                        <label for="">Extracurricular</label> 
                        <input type="text" class="form-control" placeholder="Founder, XYZ Club" name="user_extra" value="<?php echo $rws['user_extra'];?>">
                    </div>
    
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