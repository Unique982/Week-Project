<!--19.	Write a program to demonstrate regular expression in PHP using the functions like preg_match(), preg_match_all() and preg_replace() .   -->
<?php 
$str = "Happy New year!";
$pattern  = "/HAPPY New YEAR/i";
echo "preg_match():";
echo preg_match($pattern,$str);
echo "<br />";
echo "preg_match_all():";

echo preg_match_all($pattern,$str);
echo "<br />";
echo "preg_match_all():";

echo preg_replace($pattern,"new",$str);
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 19</p>";
?>