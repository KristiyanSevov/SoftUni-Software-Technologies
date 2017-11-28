<!doctype html>
<html>
<head>
    <title>PHP Lab</title>
</head>
<body>
    <ul>
        <?php
            for($i = 1; $i <= 20; $i++) {
                if ($i % 2 == 0) {
                    $color = "green";
                } else {
                    $color = "blue";
                }
                if ($i !== 1) {echo "\t\t";}
                echo "<li><span style='color:$color'>$i</span></li>\r\n";
            }
        ?>
    </ul>
</body>
</html>
