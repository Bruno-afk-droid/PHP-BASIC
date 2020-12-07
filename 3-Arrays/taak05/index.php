<!DOCTYPE html>
<html>
<body>

<?php 
    $numbers =  [676,5345,78657,3,46,21,47];
    asort($numbers);
    $laag_hoog = $numbers;
    print_r($laag_hoog);
    arsort($numbers);
    $hoog_laag = $numbers;
    print_r($hoog_laag);

?>

</body>
</html>
