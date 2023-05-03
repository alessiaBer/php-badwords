<?php
/*
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.
Il primo file (index.php) dovrà permettere all’utente di inserire i dati (tramite un form) e inviare la richiesta al server.
Il secondo file (nome a piacere) riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. 
*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center py-4">PHP Badwords</h1>
    <div class="container d-flex justify-content-center">
        <div class="card rounded-0 col-8 shadow">
            <div class="card-body">
                <form action="script.php" method="post">
                    <div class="mb-3">
                        <label for="paragraph" class="form-label">Type your paragraph</label>
                        <textarea class="form-control" name="paragraph" id="paragraph" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="badword" class="form-label">Type the bad word</label>
                        <input type="text" class="form-control" name="badword" id="badword">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>