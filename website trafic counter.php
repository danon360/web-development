<!DOCTYPE html>
<?php
//dont forget to reset your cookies in you browser
$date;
date_default_timezone_set("America/New_York");
//if date is empty, set it to cookie date
if(empty($date)){$date=date("l jS \of F Y G:i:s A");}
if(isset($_COOKIE["date"])){$date=$_COOKIE["date"];}
$_COOKIE["date"]=date("l jS \of F Y G:i:s A");
setcookie("date");


$count;
if(!isset($_COOKIE["visits"])) {$_COOKIE["visits"]=0;}
$count=$_COOKIE["visits"]+1;
setcookie("visits","$count");
?>
<html>
<title>quest3</title>
<body>
  <?php
    if($_COOKIE["visits"]==0){print_r("Welcome! You are a new customer here.");}
    else{print_r("Hello, this is your ".$_COOKIE["visits"]." time here.Last visit was on $date");}
   ?>
</body>

</html>
