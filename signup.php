<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home</title>
        <?php include_once('components/site-head.php') ?>
    </head>

    <body>
        <?php include_once('components/header.php') ?>

        <!-- ===== -->

        <section class="sec_login">
            <div class="contain">
                <div class="flex">
                    <div class="logo_text">
                        <h3><a href="index.php">BidonAGprojects.com</a></h3>
                    </div>
                    <div class="colS colA">
                        <div class="col_inner">

                            <form action="">
                                <h2>Sign Up</h2>
                                <p>Sign up to enjoy the feature of Revolutie</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="textBlock lab_box">
                                            <input type="text" class="txtBox" placeholder="Name">
                                            <!-- <label>Name</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock lab_box">
                                            <input type="text" class="txtBox" placeholder="Email">
                                            <!-- <label>Email</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock lab_box">
                                            <input type="text" class="txtBox" placeholder="Phone">
                                            <!-- <label>Phone</label> -->
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock lab_box">
                                            <input type="text" class="txtBox" placeholder="Password">
                                            <!-- <label>Password</label> -->
                                            <i class="fa fa-eye-slash"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock">
                                            <button class="siteBtn">Sign Up</button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock or_box">
                                            <p>or</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock">
                                            <button class="siteBtn transBtn">Sign Up with Google <div class="gol">
                                                    <img src="images/google-1.svg" alt="">
                                                </div></button>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="textBlock text-center">
                                            <p>Already have an account? <a href="">Sign in </a></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="colS colB">
                        <div class="image">
                            <img src="images/login.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('components/footer.php') ?>
        <?php include_once('components/basicjs.php') ?>

    </body>

</html>