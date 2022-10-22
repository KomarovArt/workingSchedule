<?php
session_start();
if (array_key_exists("pagesession",$_SESSION)==false){
    $_SESSION["pagesession"]=0;
}
   echo  "<h1>Вы на 4ой страничке</h1>";
    echo "<h1>Поситили 3юю страницу {$_SESSION["pagesession"]} раз</h1>";

    echo  "<h2><a href=\"./page3.php\">Назад</a></h2>";
    echo  "<h2><a href=\"./index.html\">На главную</a></h2>";
?>