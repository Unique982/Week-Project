<?php 

echo "Time and Date:".date("d-m-Y h:i:sa")."<br>";
echo date("d-m-Y h:i:sa",mktime(0,0,0,03,28,2021))."<br>";
echo date("l",mktime(0,0,0,03,28,2021))."<br>";

// strtotime
echo "Stototimr Example:<br>";
echo date("d-m-Y",strtotime("now"))."<br>";
echo date("d-m-Y",strtotime("3 march 2021"));
echo "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 21 B</p>";
?>