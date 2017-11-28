<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lab</title>

</head>
<body>

<?php
$CtoF = "";
if (isset($_GET["cel"])) {
    $cel = floatval($_GET["cel"]);
    $result = $cel * 9 / 5 + 32;
    $CtoF = "$cel &deg;C = $result &deg;F";
}
$FtoC = "";
if (isset($_GET["fah"])) {
    $fah = floatval($_GET["fah"]);
    $result = ($fah - 32) * 5 / 9;
    $FtoC = "$fah &deg;F = $result &deg;C";
}
?>

<form>
    Celsius: <input type="text" name="cel" />
    <input type="submit" value="Convert" />
    <?= $CtoF ?>
</form>

<form>
    Fahrenheit: <input type="text" name="fah" />
    <input type="submit" value="Convert" />
    <?= $FtoC ?>
</form>

</body>
</html>