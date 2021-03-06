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
    <div class="container videosContainer">
        <div class="row">
            <div class="five columns">
                <div class="sortVideos">
                    <span>Sort by:</span>
                    <a class="filter active" href="#">Latest</a>
                    <a class="filter" href="#">All</a>
                    <a class="filter" href="#">STA</a>
                    <a class="filter" href="#">Community</a>
                </div>
            </div>
            <div class="seven columns">
                <input class="u-full-width memberInputs" type="text" placeholder="Search Events">
            </div>
        </div>
        <div class="row">
            <div class="four columns">
                <div class="row">
                    <div class="twelve columns">
                        <div class="eventVideo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p class="videoEventTitle">Event Title</p>
                        <p class="videoEventSubtitle">Subtitle</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="four columns">
                <div class="row">
                    <div class="twelve columns">
                        <div class="eventVideo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p class="videoEventTitle">Event Title</p>
                        <p class="videoEventSubtitle">Subtitle</p>
                    </div>
                </div>
                <hr>
            </div>
            <div class="four columns">
                <div class="row">
                    <div class="twelve columns">
                        <div class="eventVideo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="twelve columns">
                        <p class="videoEventTitle">Event Title</p>
                        <p class="videoEventSubtitle">Subtitle</p>
                    </div>
                </div>
                <hr>
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
