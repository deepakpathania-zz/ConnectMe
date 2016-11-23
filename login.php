<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<div class="container jumbotron dshadow wlim mtop">
    <div class="row">
      <div class="main">
          <h3 style="color:#65aeee;">Please Log In or <a href="index.php" style="color:#55af55">Sign Up</a></h3>
          <!-- <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <button class="btn btn-lg btn-primary btn-block ladda-button" data-style="zoom-in" >Facebook</button>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                  <button class="btn btn-lg btn-info btn-block ladda-button" data-style="zoom-in" >Google</button>
              </div>
          </div>
          <div class="login-or">
              <hr class="hr-or">
              <span class="span-or">or</span>
          </div> -->
          <form role="form" action="components/login-process.php" method="post" name="login">
              <div class="form-group">
                  <label for="inputUsernameEmail">Username</label>
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                  <label for="inputPassword">Password</label>
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              </div><hr/>
              <button type="submit" class="btn btn btn-primary marleft zbor ladda-button" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In  
              </button>
          </form>
        </div>
    </div>
</div>