<?php 
    $user_paragraph = $_GET["paragraph"];
    $user_paragraph_len = strlen($user_paragraph);
    $user_bad_word = $_GET["badword"];
    $user_paragraph_censored = str_replace($user_bad_word, "***", $user_paragraph)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    
    <h2>Paragrafo Originale:</h2>
    <p><?php echo $user_paragraph ?></p>
    <small>Lunghezza del paragrafo: <?php echo $user_paragraph_len ?></small>
    <hr>

    <h2>Paragrafo Censurato:</h2>
    <p> <?php echo $user_paragraph_censored ?> </p>

    <hr>

    <a href="index.php">Scrivi un nuovo paragrafo</a>

</body>
</html>