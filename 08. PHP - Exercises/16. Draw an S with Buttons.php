<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
    for ($i = 0; $i < 9; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($i == 0 or $i == 4 or $i == 8 or ($i < 4 and $j == 0) or ($i > 4 and $j == 4)) {
                echo "<button style='background-color: blue'>1</button>\r\n";
            } else {
                echo "<button>0</button>\r\n";
            }
        }
        echo "<br />\r\n";
    }
?>
</body>
</html>