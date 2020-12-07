<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent() {
$koopPrijs = 75.00;
$korting = 10.00;

return sprintf(($koopPrijs/100)*(100-$korting));
}

echo geefTienProcent()
?>

</body>
</html>
