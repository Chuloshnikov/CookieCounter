<?php
setcookie('test', plus());

echo " Счетчик посещений сервера/страницы test{$_COOKIE['test']}";

function plus(){
    if (isset($_COOKIE['test'])) {
        $_COOKIE['test']++;
    } else {
        $_COOKIE['test'] = 1;
    }
    return $_COOKIE['test'];
}



$lastElement = 0; // создаём переменную в которую будет записано значение последнего созданного нами куки
foreach ($_COOKIE as $value){
    $lastElement = $value; // после прохода массива по всем элементам, в итоге мы получим значение последнего созданного куки.
}
echo "<br>" . "Количество посещения" $lastElement; // Получаем 2 (обновите страницу 2 раза)


?>
