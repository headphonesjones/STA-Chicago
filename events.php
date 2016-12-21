<!DOCTYPE html>
<html>
<head>
    <?php include("components/header.php");?>
    <title>The Society of Typographic Arts</title>
</head>
<body>
<?php $title = "Events"; include("components/nav.php");?>
<div class="blackBackground">
    <?php include("components/featured_event_section.php");?>
</div>

<div class="grayBackground">
    <?php include("components/events/events.php");?>
</div>

<div class="blackBackground">
    <?php include("components/events/pastEvents.php");?>
</div>

<div class="grayBackground">
    <?php include("components/getInvolved.php");?>
</div>

<div class="blackBackground">
    <?php include("components/sponsors.php");?>
</div>
<div class="blackBackground">
    <?php include("components/footer.php");?>
</div>
<?php include("components/scripts.php");?>
</body>
</html>
