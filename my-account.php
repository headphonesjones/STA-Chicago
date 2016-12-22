<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Membership"; include("components/nav.php");?>
<div class="blackBackground">
    <?php include("components/membership/membership-nav.php");?>
</div>
<div class="whiteBackground">
    <div class="container">
        <div class="row">
            <div class="twelve columns">
                <ul class="tab-nav">
                  <li>
                    <a class="button active" href="#profile">Profile</a>
                  </li>
                  <li>
                    <a class="button" href="#updatepassword">Update Password</a>
                  </li>
                  <li>
                    <a class="button" href="#billinginformation">Billing Information</a>
                  </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <div class="container">
                        <div class="row">
                            <div class="eight columns">
                                <div class="memberPhoto"></div>
                            </div>
                            <div class="four columns">
                                <a class="button" href="#">Change Photo</a>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="updatepassword">...</div>
                  <div class="tab-pane" id="billinginformation">...</div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>
</body>
</html>
