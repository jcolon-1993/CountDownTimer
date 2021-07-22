<!DOCTYPE html>
<html>
  <head>
    <title>Countdown Timer</title>
  </head>
  <body>
    <?php
      // Used to get timestamp for target date
      $target = mktime(0, 0, 0, 9, 22, 2021);
      // Gets todays timestamp
      $today = time();
      // Gets the difference between todays date and target date
      $difference = $target - $today;
      /*
        Parse days to integer and we divide the difference by 86400 to get the numbe of days
      */
      $days = (int) ($difference / 86400);
      // Prints out when birthday will occur
      print "Your birthday will occur in $days days";
    ?>
  </body>
</html>
