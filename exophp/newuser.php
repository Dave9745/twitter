<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>

<body>
    <form action='traitement2.php' method='post'>
        <div>
            <input type='hidden' name='id' />
        </div>
        <div>
            <label for='nom'>Nom :</label>
            <input type='text' name='nom' />
        </div>
         <div>
            <label for='prenom'>Prénom :</label>
            <input type='text' name='prenom' />
        </div>
         <div>
            <label for='age'>Age :</label>
            <input type='text' name='age' />
        </div>
        <div>
            <label for='tel'>Tel :</label>
            <input type='text' name='tel' />
        </div>

        <div class='button'>
            <button type='submit'>Send</button>
        </div>
    </form><br/><br/>
</body>
</html>
