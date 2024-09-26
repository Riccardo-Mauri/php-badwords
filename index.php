<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Inserisci la parola da censurare</h1>
    <!--creo il form da inviare poi il paragrafo con la parola da censurare-->
    <form action="badwords.php" method="POST">
    <label for="paragraph">Paragrafo:</label><br>
        <textarea id="paragraph" name="paragraph" rows="5" cols="40" required></textarea><br><br>

        <label for="word">Parola da censurare:</label><br>
        <input type="text" id="word" name="word" required><br><br>

        <input type="submit" value="Invia">
    </form>

</body>
</html>