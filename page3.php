<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 3</title>
</head>
<body>

</body>
<?php
$new_url = './page4.php';
$_SESSION["pagesession"];
session_start();

$_SESSION["pagesession"]=$_SESSION["pagesession"]+1;
if ($_SESSION["pagesession"]%3===0) {
    header('Location: '.$new_url);
   
} else {
     
}

echo "<h1>{$_SESSION["pagesession"]}</h1>"

?>
</html>