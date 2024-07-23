<!-- Inizio Codice PHP -->
<?php

$name = $_GET['name'];
$lastname = $_GET['lastname'];

$fullname = $name.' '.$lastname;

?>
<!-- Fine Codice PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina atterraggio GET</title>
</head>
<body>
    <h1>Ciao <?php echo $fullname?>, Benvenuto!</h1>
</body>
</html>