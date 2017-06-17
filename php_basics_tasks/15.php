<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
<form method=POST>

    <?php

    $a = $_POST ['a'];
    $b = $_POST ['b'];
    $operator = $_POST ['operator'];
    if ($b==0 and $operator=='/'){
        echo "Внимание!! На 0 делить нельзя!";
    }else {
        if ($operator == '+') {$result=$a + $b; }
        if ($operator == '-') {$result=$a - $b;}
        if ($operator =='/')  {$result=$a / $b;}
        if ($operator == '*') {$result=$a * $b;}
        if ($operator == '%') {$result=$a % $b;}
        echo "РЕЗУЛЬТАТ: " . $a .$operator .$b .'='  .$result;
    }
    ?><br>

    <label for="first">Число №1<br></label>
    <input type="text" id="first" name="a"><br>
    <label for="second">Число №2<br></label>
    <input type="text"id="second" name="b"><br>
    <select name="operator">
        <option>+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <input type="submit" value="Вычислить">
</form>
</body>
</html>
