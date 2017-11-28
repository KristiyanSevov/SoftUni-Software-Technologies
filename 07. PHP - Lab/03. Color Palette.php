<!doctype html>
<html>
<head>
    <title>PHP Lab</title>
    <style>
        div {
            display: inline-block;
            width: 150px;
            padding: 2px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php
        $red = $green = $blue = 0;
        do {
            echo "<div style='background:rgb($red, $green, $blue)'>rgb($red, $green, $blue)</div>\r\n";
            $blue += 51;
            if ($blue > 255) {
                $green += 51;
                $blue = 0;
            }
            if ($green > 255) {
                $red += 51;
                $green = 0;
            }
            if ($red > 255) {
                $red = 0;
            }
        } while (!($red == 0 and $green == 0 and $blue == 0));
    ?>
</body>
</html>
