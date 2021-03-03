
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>jQuery Countdown Clock Plugin</title>
 <!--  <link type="text/css" href="demo.css" rel="stylesheet"> -->
  <link type="text/css" href="<?= base_url() ?>countdown/jquery.countdown.css" rel="stylesheet">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>countdown/jquery.countdown.min.js"></script>
</head>
<body>
  <ul id="example">
    <li><span class="days">00</span><p class="days_text">Days</p></li>
    <li class="seperator">:</li>
    <li><span class="hours">00</span><p class="hours_text">Hours</p></li>
    <li class="seperator">:</li>
    <li><span class="minutes">00</span><p class="minutes_text">Minutes</p></li>
    <li class="seperator">:</li>
    <li><span class="seconds">00</span><p class="seconds_text">Seconds</p></li>
  </ul>

  <script class="source" type="text/javascript">
    $('#example').countdown({
    date: '03/31/2021 23:59:59'
    }, function () {
      alert('Merry Christmas!');
    });
  </script>

  
</body>
</html>