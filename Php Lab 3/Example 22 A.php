<!-- 
a)	Write a program to read and write file using fgetc() and fputc() functions. 
the fgetc() function is used to read a single character from a file.
the fputc() function is used to write a single character to a file.
 -->
 <?php 
 $file = "example22A.txt";
 $openfw = fopen($file, "w");
 $str = "<p><b>Name:Khemraj Neupane</b><br> Roll No: 19<br> Lab 3 :Q.N 22 A</p>";
 fputs($openfw, $str);
$openfr=fopen($file,"r");
echo fgetc($openfr);
fclose($openfr);
fclose($openfw);
 
 ?>