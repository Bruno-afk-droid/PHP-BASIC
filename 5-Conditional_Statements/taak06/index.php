<!DOCTYPE html>
<html>
<body>

<?php
$var1 = 3;
$var2 = 10;

if($var1 < 10 && $var2 > 5) {
    echo "var1 is kreiner dan 10 en var2 is groter dan 5!";
} else {
    echo "var1 is groter dan 10 of var2 is kleiner dan 5!";
}

if($var1 < 10 || $var2 > 5){
    echo "var1 is kreiner dan 10 of var2 is groter dan 5!";
} else {
    echo "var1 is groter dan 10 en var2 is kleiner dan 5!";
}

if($var1 < 10 xor $var2 > 5){
    echo "var1 is kreiner dan 10 of var2 is groter dan 5 maar niet allebij!";
} else {
    echo "var1 is groter dan 10 en var2 is kleiner dan 5 of var1 is groter dan 10 en var2 is kleiner dan 5 zijn waar!";
}

if($var1 != 10 && $var2 != 5){
    echo "var1 is niet gelijk aan 10 of var2 is niet gelijk aan 5!";
} else {
    echo "var1 is gelijk aan 10 of var2 is gelijk aan 5!";
}
?>

</body>
</html> 