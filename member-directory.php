<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Membership"; include("components/nav.php");?>
<div class="blackBackground membershipNavContainer">
    <?php include("components/membership/membership-nav.php");?>
</div>
<div class="whiteBackground">
    <div class="container">
        <div class="row">
            <div class="eight columns">
                <input class="u-full-width memberInputs" type="text" placeholder="Search Members or Skills">
            </div>
            <div class="one columns">
                <p>All</p>
            </div>
            <div class="one columns">
                <label class="switch">
                    <input type="checkbox">
                    <div class="slider round"></div>
                </label>
            </div>
            <div class="two columns">
                <p>Available for work</p>
            </div>
        </div>
        <div class="row">
            <div class="three columns">
                <div class="row">
                    <div class="twelve columns">
                        <div class="memberPhoto"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="eleven columns">
                        <p>Allison Catuira</p>
                    </div>
                    <div class="one columns">
                        <span>Email Icon</span>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p>Art Director at Anthem</p>
                    </div>
                </div>
                <div class="twelve columns">
                    <p><a href=#">allisoninc.com</a></p>
                </div>
                <div class="row">
                    <div class="two columns">
                        <span>LinkedIn Icon</span>
                    </div>
                    <div class="two columns">
                        <span>Twitter Icon</span>
                    </div>
                    <div class="two columns">
                        <span>Drbbble Icon</span>
                    </div>
                    <div class="two columns">
                        <span>Facebook Icon</span>
                    </div>
                    <div class="two columns">
                        <span>Instagram Icon</span>
                    </div>
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
