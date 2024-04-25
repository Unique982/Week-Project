<!-- the fread() function is used to read a specified length of data from a file.
The fwrite() function is used to write data to a file -->
<?php 
$file = "example22A.txt";
$openfw =fopen($file, "w");
$str = "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 22 B</p>";
fwrite($openfw, $str);
$openfr = fopen($file, "r");
echo fread($openfr, filesize($file));
fclose($openfr);
fclose($openfw);

?>