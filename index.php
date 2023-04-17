<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body style="font-family:arial;">

    <div style="max-width:1170px; margin:auto;">

        <h1>PHP BADWORDS</h1>
        <form method="GET" action="censura.php" style="display:flex; flex-direction:column; gap:20px;">
            <label for="paragraph">Paragrafo</label>
            <textarea name="paragraph" id="paragraph" cols="30" rows="10" placeholder="Inserisci il testo da censurare"></textarea>
    
            <label for="badword">Badword</label>
            <input name="badword" id="badword" type="text" placeholder="Inserisci la parola da censurare">
    
            <button type="submit">Invia</button>
        </form>
    </div>
    
</body>
</html>