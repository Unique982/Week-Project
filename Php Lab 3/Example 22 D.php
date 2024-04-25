<!-- d)	Write a program in PHP which reads a text file and write the contents into another file by replacing the words starting with "T or t"  by "HEHE". 
 -->
<?php 
$file = "example22A.txt";
$rep = "replaced.txt";

// Open source files for reading
$fr = fopen($file, "r");
$fw = fopen($rep, "w");
echo "Text in source file:<br>";

// Reading and display the content of the sourse file 
while($line = fgets($fr)){
    echo $line;
    // Replace 
    $mod = preg_replace("/\b[Tt]\w+\b/", "HEHE", $line);
    fwrite($fw, $mod);
}
echo "<br><br   >text in replaced file:<br>";
$fw1 = fopen($rep, "r");
echo fgets($fw1);
fclose($fr);
fclose($fw);
?>