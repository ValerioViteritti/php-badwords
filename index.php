<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM POST</title>
</head>
<body>
    <H1>FORM POST</H1>

    <form action="pagina-atterraggio-post.php" method="POST">
        <label for="text">Inserisci del testo e decidi quale parola censurare</label>
        <br>
        <hr>
        <input type="text" placeholder="inserisci del testo" name="text">
        <br>
        <br>
        <input type="text" placeholder="parola da censurare" name="blind">
        <br>
        <br>
        <button type="submit">invio</button>
    </form>
</body>
</html>