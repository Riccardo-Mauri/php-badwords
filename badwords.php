<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>parola censurata</title>
</head>
<body>
   <?php 
   // ricevo i dati da index con tutto quello che riguarda paragrafo
    $paragraph = $_POST['paragraph'];
    // ora calcolo la sua lunghezza effettiva della stringa
    $originalLength = strlen($paragraph);
    //ricevo i dati riguardanti la paralo da censurare
    $word = $_POST['word'];
    //censuro quindi la parola dal mio paragrafo con degli asterischi 
    $censoredparagraph = str_ireplace($word, '***', $paragraph);
    //ora infine calcolo la nuova lunghezza del paragrafo senza la parola ma con gli asterischi
    $censoredLength = strlen($censoredparagraph);
    //e per ultimo stampo in pagina badwords.php il risultato della sottomissione del form con il paragrafo normale e successivamente la sua parlo censurata, ristampando il tutto
    echo "<p>Nel paragrafo hai scritto: <h4>$paragraph</h4> e la sua lunghezza è: <h4>$originalLength caratteri</h4></p>";
    echo "<p> Paragrafo con parola censurata : <h4>$censoredparagraph</h4> con la sua lunghezza di <h4>$censoredLength caratteri</h4>";
    ?>
</body>
</html>