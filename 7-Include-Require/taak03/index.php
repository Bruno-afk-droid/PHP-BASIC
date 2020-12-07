<?php  
    require '.\includes\database.php';

    $leeftijd = 20;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include '.\includes\menu.php'; ?> <!-- Op deze regel wordt een menu ingevoegd -->
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd >= 18){
                echo "<h6>Je bent meerderJarig</h6>";
            }
        ?>
    </div>

</body>
</html>
