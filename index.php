<?php include 'components/session-check-index.php' ?>
<?php require '_database/database.php'; ?>
<?php include 'controllers/base/head.php' ?>
<body>	
<?php include 'controllers/navigation/index-before-login-navigation.php' ?>
    <section id="home" name="home"></section>
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <div class="col-lg-12">
                    </div>
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <h1 class="big"><b>ConnectMe</b></h1>
                            <h3>Build a portfolio and explore others.</h3>
                            <?php include 'controllers/form/registration-form.php' ?>
                        </div>
                        <div class="col-lg-3"></div>
                    </div>
                <div class="col-lg-8">
                </div>
                <div class="col-lg-2">
                    <br>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->
</body>    