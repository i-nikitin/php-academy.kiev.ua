<?php
var_dump((bool) -20);
?>

Результат - true

При преобразовании в boolean, следующие значения рассматриваются как FALSE:
-пустая строка, и строка "0"
все остальные значения рассматриваются как TRUE -20 рассматривается как TRUE,
как и любое другое ненулевое (отрицательное или положительное) число!
