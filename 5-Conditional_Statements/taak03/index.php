<!DOCTYPE html>
<html>
<body>

<?php
$variabele1 = 3;
$variabele2 = 6;

if($variabele1 == $variabele2) echo "<br>gelijk</br>"; else echo "<br>ongelijk</br>";
if($variabele1 === $variabele2)  echo "<br>identiek</br>"; else echo "<br>niet indentiek</br>";
if($variabele1 != $variabele2) echo "<br>ongelijk</br>";else echo "<br>gelijk</br>";
if($variabele1 > $variabele2) echo "<br>test1 is groter dan test2</br>"; else echo "<br>test1 is kleiner dan test2</br>";
if($variabele1 < $variabele2) echo "<br>test1 is kleiner dan test2</br>"; else echo "<br> test1 is groter dan test2</br>";
if($variabele1 >= $variabele2)echo "<br>test1 is groter of gelijk aan test2</br>";else  echo "<br>test1 is kleiner of gelijk aan test2</br>";
if($variabele1 <= $variabele2) echo "<br>test1 is kleiner of gelijk aan test2</br>"; else echo "<br>test1 is groter of gelijk aan test2</br>";

?>

</body>
</html> 