<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num" />
    <input type="submit" />
</form>

<?php
if (isset($_GET["num"])) {
    $num = intval($_GET["num"]);
    $a = 1;
    $b = 1;
    $c = 2;
    for ($i = 0; $i < $num; $i++) {
        echo "$a ";
        $temp_a = $a;
        $temp_b = $b;
        $a = $b;
        $b = $c;
        $c = $temp_a + $temp_b + $c;
    }
}
?>
</body>
</html>