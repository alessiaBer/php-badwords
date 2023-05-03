<?php 
$paragraph = ($_POST["paragraph"]);
$stringLength = strlen($paragraph);
$badWord = ($_POST["badword"]);
$replacedParagraph = str_replace($badWord, "***", $paragraph);

echo 'The paragraph is ', $stringLength, ' characters long<br>';
echo $paragraph,'<br>';
echo $replacedParagraph;

