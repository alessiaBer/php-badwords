<?php 
$stringLength = strlen($_POST['paragraph']);
$replacedParagraph = str_replace($_POST["badword"], "***", $_POST["paragraph"]);

echo 'The paragraph is ', $stringLength, ' characters long<br>';
echo $_POST["paragraph"];
echo $replacedParagraph;

