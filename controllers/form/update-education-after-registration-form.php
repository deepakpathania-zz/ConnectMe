<form action="components/update-education-after-registration.php" method="post" enctype="multipart/form-data" id="UploadForm" autocomplete="off">
<?php
    $user_username = mysqli_real_escape_string($database,$_REQUEST['user_username']);
    $sql = "SELECT * FROM user WHERE user_username='$user_username'";
    $result = mysqli_query($database,$sql);
    $rws = mysqli_fetch_array($result);
?>
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">University Name</label>
            <input type="text" class="form-control" placeholder="GGSIPU" name="user_university" value="<?php echo $rws['user_university'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Course Name</label>
            <input type="text" class="form-control" placeholder="B.tech" name="user_course" value="<?php echo $rws['user_course'];?>" required/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Expected graduation year</label>
            <input type="text" class="form-control" placeholder="2018" name="user_graduation_year" value="<?php echo $rws['user_graduation_year'];?>"/>
        </div>
    </div>    
    <div class="col-md-6">
        <div class="form-group float-label-control">
            <label for="">Current CGPA</label>
            <input type="text" class="form-control" placeholder="8.2" name="user_cgpa" value="<?php echo $rws['user_cgpa'];?>"/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Field of course</label>
            <input type="text" class="form-control" placeholder="Computer Science" name="user_course_field" value="<?php echo $rws['user_course_field'];?>" required/>
        </div>
        <div class="form-group float-label-control">
            <label for="">Extracurricular</label>
            <input type="text" class="form-control" placeholder="Founder of coding club" name="user_extra" value="<?php echo $rws['user_extra'];?>"/>
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