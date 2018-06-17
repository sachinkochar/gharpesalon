<?php
session_start();
include('inc/config.php');

//Check For Submit
if(isset($_POST['regbtn'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Run Query
    $sql = "INSERT INTO users (name, email, phone, address, pwd)
    VALUES ('$name', '$email', '$phone', '$address', '$pwd')";

    if (mysqli_query($conn, $sql)) {
        echo "Account Created Successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

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
                                <div class="col-xs-12 col-sm-8">
                                    <div class="text-center heading">
                                        Create Account For GharPeSalon</div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                            <form method="POST" action="" id="reform" class="form-horizontal">
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="text" class="form-control" name="name" id="name" value="" placeholder="Enter Name" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Enter Email Address" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="number" class="form-control" name="phone" id="phone" value="" placeholder="Enter Phone Number">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="text" class="form-control" name="address" id="address" placeholder="Enter Your Address" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Enter Your Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <input type="submit" value="Signup" name="regbtn" class="btn btn-block btn-primary">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-xs-12">
                                                        <p class="small text-center text-uppercase">
                                                            Already a member?
                                                            <a href="/">Sign in</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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