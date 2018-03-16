<?php

  if(isset($_GET['day'])&&isset($_GET['date'])&&isset($_GET['year']))
  {
      $day = htmlentites($_GET['day']);
      $date = htmlentities($_GET['date']);
      $year = htmlentities($_GET['year']);
      
      if(!empty($day)&&!empty($date)&&!empty($year))
      {
          echo $day.' and date is '.$date.' and year is '.$year;

      }
       else {
      echo 'please fill the data';
  }
  }
 
?>

<form action="get.php" method="GET">
 Day:<br><input type="text" name="day"><br>
 Date:<br><input type="text" name="date"><br>
 Year:<br><input type="text" name="year"><br><br>
 <input type="submit" value="submit">
</form>