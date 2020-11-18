<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require('.\includes\functions.php'); ?>
    <?php include('.\includes\menu.php'); ?>
    <title>Title</title>
  </head>
  <body>
    <form action="index.php" method="get"><!-- dit laten staan! -->

    <p>Op deze website kun je checken welk datatype je hebt ingevoerd.</p>
    <p>Vul hieronder een getal, een decimaal, een tekst of de tekst true/false in en klik op check!</p> 
    <input type="text" name="input"><!-- dit laten staan! -->
    <button type="submit" name="submit">Check</button><!-- dit laten staan! -->
    <?php $var1=getInput();?>
    <p>Het datatype van de waarde: <?php echo getInput(); ?> is <?php echo gettype($var1); ?></p>

    </form><!-- dit laten staan! -->
    <?php include('.\includes\footer.php'); ?>
  </body>
</html>
