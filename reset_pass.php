<?php
session_start();
include('inc/config.php');

//Check For Submit

}
?>
<!-- Header Include -->
<?php include("inc/header.php"); ?>
<div class="" id="panel-box" style="display: flex; flex-direction: column; justify-content: center; height: 75%;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    <div class="panel panel-auth">
                        <div class="panel-body">
                            <div class="row row-eq-height">
                                <div class="col-sm-4 hidden-xs">
                                  <!-- Background Image -->
                                </div>
                                <?php if(isset($_GET['hash']) && !empty($_GET['hash'])) { ?>
                                <div class="col-xs-12 col-sm-8">
                                    <div class="text-center heading">
                                       Reset Your Password</div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                            <form method="POST" action="" id="reform" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="password" class="form-control" name="new_password" id="new_pass" value="" placeholder="Enter New Password" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="password" class="form-control" name="retype_password" id="retype" value="" placeholder="Confirm New Password" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="button" value="Reset Password" id="pass_forgot" name="pass_forgot" class="btn btn-block btn-primary">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                            
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <?php }else{ 
                                    ?>
                                        <div class="text-center heading">
                                       You don't have rights to acess this page!!!</div>
                                       <script>
                                        setTimeout(function(){
                                            window.location.replace('index.php')                            
                                        },2000)
                                       </script>
                                    <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Include -->
<?php include("inc/footer.php"); ?>