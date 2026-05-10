<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home</title>
        <?php include_once('components/site-head.php') ?>
    </head>

    <body>
        <?php include_once('components/header.php') ?>

        <section class="dashboard">
            <div class="contain">
                <div class="dash_inner">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="inner_links">
                                <ul>
                                    <li class="active">
                                        <a href="">Profile</a>
                                    </li>
                                    <li><a href="">Order</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="dash_content">
                                <div class="profile_area">
                                    <div class="top_heading">
                                        <h3>User Profile</h3>
                                    </div>
                                    <form action="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="textBlock lab_box">
                                                    <label>First Name
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="txtBox">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock lab_box">
                                                    <label>Last Name
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="txtBox">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock lab_box">
                                                    <label>Email
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="txtBox">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock lab_box">
                                                    <label>Phone
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="txtBox">

                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="textBlock lab_box">
                                                    <label>Password
                                                        <abbr class="required" title="required">*</abbr>
                                                    </label>
                                                    <input type="text" class="txtBox">
                                                </div>
                                            </div>



                                        </div>
                                    </form>

                                </div>
                                <div class="dash_btn">
                                    <button class="siteBtn">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once('components/footer.php') ?>
        <?php include_once('components/basicjs.php') ?>

    </body>

</html>