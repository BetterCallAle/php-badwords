<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="result.php" method="GET"> 
            <label for="user-text">Inserisci il paragrafo da visualizzare</label>
            <textarea name="paragraph" id="user-text" cols="30" rows="10"></textarea>
    
            <label for="user-badword">Inserisci la parola da censurare</label>
            <input type="text" id="user-badword" name="badword" placeholder="Inserisci una sola parola">
    
            <button type="submit" class="submit">Invia</button>
            <button type="reset" class="reset">Resetta</button>
        </form>
    </div>
</body>
</html>