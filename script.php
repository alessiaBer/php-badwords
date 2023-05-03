<?php 
$paragraph = ($_POST["paragraph"]);
$stringLength = strlen($paragraph);
$badWord = ($_POST["badword"]);
$replacedParagraph = str_replace($badWord, "***", $paragraph);

/* echo 'The paragraph is ', $stringLength, ' characters long<br>';
echo $paragraph,'<br>';
echo $replacedParagraph;
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
                <p>The paragraph is <?php $stringLength; ?> characters long</p>
                <div class="paragraph">
                    <p> <?php $paragraph; ?> </p>
                </div>
                <div class="replaced"> <?php $replacedParagraph; ?> </div>
            </div>
        </div>
    </div>
</body>

</html>