<!DOCTYPE html>
<html>
<head>
  <?php include("components/header.php");?>
  <title>The Society of Typographic Arts</title>
</head>
<body>
  <?php $title = ""; include("components/nav.php");?>
  <?php include("components/home_slider.php");?>

  <div class="grayBackground">
    <?php include("components/featured_event_section.php");?>
  </div>

  <?php include("components/home/upcomingEvents.php");?>

  <div class="grayBackground">
    <?php include("components/sponsors.php");?>
  </div>

  <div class="blackBackground">
    <?php include("components/footer.php");?>
  </div>
  <?php include("components/scripts.php");?>
  <script>
    $(".homeSlider").slick({
      arrows: false,
      variableWidth: true,
      slidesToScroll: 1,
      centerMode: true,
      autoplay: true,
      autoplaySpeed: 4000
    });
  </script>
</body>
</html>
