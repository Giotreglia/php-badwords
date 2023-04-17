<?php
    $paragrafo = $_GET['paragraph'];
    $censura = $_GET['badword'];
    $paragrafoCensurato = str_ireplace($censura, '*** ', $paragrafo); 
?>

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
        <div>
            <h1>Paragrafo Uncensored</h1>
            <p>
                "<?php echo $paragrafo; ?>"
            </p>
            <h4>Il paragrafo è lungo <?php echo strlen($paragrafo);?> caratteri</h4>
        </div>

        <div>
            <h1>Paragrafo Censored</h1>
            <p>
                "<?php echo $paragrafoCensurato; ?>"
            </p>
            <h4>Il paragrafo è lungo <?php echo strlen($paragrafoCensurato);?> caratteri</h4>
        </div>

    </div>
    
</body>
</html>