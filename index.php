<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="result.php" method="GET"> 
        <label for="user-text">Inserisci il paragrafo da visualizzare</label>
        <textarea name="paragraph" id="user-text" cols="30" rows="10"></textarea>

        <label for="user-badword">Inserisci la parola da censurare</label>
        <input type="text" id="user-badword" name="badword" >

        <button type="submit">Invia</button>
        <button type="reset">Resetta</button>
    </form>
</body>
</html>