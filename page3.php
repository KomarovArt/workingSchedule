<?php
session_start();

if (array_key_exists("pagesession",$_SESSION)==false){
    $_SESSION["pagesession"]=0;
}
$new_url = './page4.php';


$_SESSION["pagesession"]=$_SESSION["pagesession"]+1;
if ($_SESSION["pagesession"]%3===0) {
    header('Location: '.$new_url);
   
} else {
     
}

echo "<h1>Вы на странице {$_SESSION["pagesession"]} раз</h1>";
?>