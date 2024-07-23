<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST</title>
</head>
<body>
    <H1>FORM POST</H1>

    <h2>Copiare ed incollare il testo</h2>
    <h3>“Le avventure di Pinocchio. Storia di un burattino” di Carlo Collodi, è una delle favole per bambini più famose al mondo, e ci parla di come ognuno di noi, crescendo, possa diventare un meraviglioso essere umano e non essere più un burattino che si lascia trasportare dagli eventi.</h3>

    <form action="pagina-atterraggio-post.php" method="POST">
        <label for="text">testo</label>
        <input type="text" placeholder="inserisci teso" name="text">
        <br>
        <button type="submit">invio</button>
    </form>
</body>
</html>