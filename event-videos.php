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
            <div class="five columns">
                <div>
                    <span>Sort by:</span>
                    <a href="#">Latest</a>
                    <a href="#">All</a>
                    <a href="#">STA</a>
                    <a href="#">Community</a>
                </div>
            </div>
            <div class="seven columns">
                <input class="u-full-width memberInputs" type="text" placeholder="Search Events">
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
                    <div class="twelve columns">
                        <p>Event Title</p>
                    </div>
                </div>
                <div class="twelve columns">
                    <p>Subtitle</p>
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
