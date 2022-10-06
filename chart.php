<?php




function  calculateSchedule($month = 4, $year = 2022,$counter = 0,$red=31,$green=32)
{

 switch($month){
    case 1:
    echo "название месяца: Январь" . PHP_EOL;
    break;
    case 2:
        echo "название месяца: Февраль" . PHP_EOL;
        break;
    case 3:
        echo "название месяца: Март" . PHP_EOL;
        break;
    case 4:
        echo "название месяца: Апрель" . PHP_EOL;
        break;
    case 5:
        echo "название месяца: Май" . PHP_EOL;
        break;
    case 6:
        echo "название месяца: Июнь" . PHP_EOL;
        break;
    case 7:
        echo "название месяца: Июль" . PHP_EOL;
        break;
    case 8:
        echo "название месяца: Август" . PHP_EOL;
        break;
    case 9:
        echo "название месяца: Сентябрь" . PHP_EOL;
        break;
    case 10:
        echo "название месяца: Октябрь" . PHP_EOL;
        break;
    case 11:
        echo "название месяца: Ноябрь" . PHP_EOL;
        break;
    case 12:
        echo "название месяца: Декабрь" . PHP_EOL;
        break;
    default:
    echo "Выбран неверный месяц";
    break;

 }
 echo "список всех дней месяца: ".cal_days_in_month(0, date($month), date($year)).PHP_EOL;

for ($x=1;$x<=cal_days_in_month(0, date($month), date($year));$x++){

if(date('w',mktime(0,0,0,$month,$x,$year))==6||date('w',mktime(0,0,0,$month,$x,$year))==0){
    $color = $red;
} else {
    if ($counter !=2) {
        $color = $red;
        $counter++;
    } else {
        $color = $green;
        $counter = 0;
    }
}


if ($x==cal_days_in_month(0, date($month), date($year))) {
    echo "\033[{$color}m $x \033[0m". PHP_EOL;
} else {
    echo "\033[{$color}m $x \033[0m".',';
}

if(date('w',mktime(0,0,0,$month,$x,$year))==0){
    echo PHP_EOL;
}

}

}

calculateSchedule();