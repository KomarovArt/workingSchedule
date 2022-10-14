<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 2</title>
</head>
<body>

</body>
<?php
header('Content-Type: application/txt');
header('Content-Disposition: attachment; filename="downloaded.txt"');
readfile('original.txt');
?>

</html>
