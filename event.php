<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Events"; include("components/nav.php");?>
<div class="blackBackground singleEventInfo">
    <div class="container">
        <div class="row">
            <div class="nine columns">
                <h4 class="whiteText">Sidebar: Stefanie Hajer</h4>
                <h4>Stefanie Hajer is an experiential designer in
                CallisonRTKL’s Chicago office. She enjoys following
                the latest trends in art, fashion and design and infuses
                her work with this fresh perspective. Stefanie crafts
                strategy-driven solutions in her collaboration with
                other designers and architects to create branded
                environments for retail, entertainment, commercial and
                residential projects. She will be sharing her ideas and
                process about environmental graphic and interior
                design and how it shapes our experience in a space.</h4>
                <p>Sidebar is new salon style event for STA members to share ideas, network, and discuss
                    happenings in the design community. Each gathering will feature a short inspirational
                    presentation, “either to please or to educate.”<br><br>
                    This event is free to the public, 21+, cash bar.</p>
            </div>
            <div class="three columns singleEventExtraInfo">
                <a href="#" class="buyTickets">Buy Tickets</a>
                <p class="eventDate whiteText">Thursday, November 05</p>
                <p class="eventDoors">Doors open 6:00 PM</p>
                <p class="eventTime">Presentation starts at 6:30 PM</p>
                <p class="eventEnd">Event ends at 8:00 PM</p>
                <br>
                <p><span class="whiteText">The School of the Art Institute</span> (Columbus
                Auditorium)</p>
                <p class="addressLine1">280 S. Columbus Dr.</p>
                <p class="addressLine2">Chicago, IL 60603</p>
                <p class="memberPrice">Member $20</p>
                <p class="nonMemberPrice">Non Member $40</p>
                <p class="studentPrice">Student $10</p>
                <p class="ticketsLeft">66 Tickets Available</p>
            </div>
        </div>
    </div>
    <div class="bottomMarginSmall"></div>
    <div class="plusDivider"></div>
</div>

<div class="grayBackground">
    <?php include("components/sponsors.php");?>
</div>
<?php include("components/event/slider.php");?>

<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>

<script>
    $(".eventSlider").slick({
        arrows: true,
        variableWidth: true,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000
    });
</script>
</body>
</html>
