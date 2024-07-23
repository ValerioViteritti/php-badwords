<!-- Inizio Codice PHP -->
<?php

$text = $_POST['text'];
$lunghezza_text = strlen($text);

$text_diverso = str_replace('Pinocchio', '***', $text);
$lunghezza_text_diverso = strlen($text_diverso)

?>
<!-- Fine Codice PHP -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina atterraggio POST</title>
</head>
<body>
    
    <h2><mark>Testo 1: </mark><?php echo $text?></h2>
    <strong>Questo testo ha <?php echo $lunghezza_text ?> caratteri</strong>

    <h2><mark>Testo diverso: </mark><?php echo $text_diverso?></h2>
    <strong>Questo testo ha <?php echo $lunghezza_text_diverso ?> caratteri</strong>

    
</body>
</html>