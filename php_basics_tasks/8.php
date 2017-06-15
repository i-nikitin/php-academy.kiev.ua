<?php
$age = erger;
if ($age> 18 and $age <= 59) {
    echo "Вам еще работать и работать";
}
if ($age > 59){
    echo "Вам пора на пенсию";
}
if ($age > 0 and $age <= 17) {
    echo "Вам еще рано работать";
}
if ($age<0 or (is_numeric($age)==false)) {
    echo "Неизвестный возраст";
}

?>
