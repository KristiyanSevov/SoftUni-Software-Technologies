<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Lab</title>

</head>
<body>

<form>
    <textarea rows="10" name="text"></textarea>
    <br/>
    <input type="submit" value="Extract"/>
</form>

<?php
if (isset($_GET["text"])) {
    preg_match_all('/\w+/', $_GET["text"], $words);
    $words = $words[0];
    $result = array_filter($words, 'word_filter');
    echo implode(", ", $result);
}

function word_filter($word)
{
    if ($word === strtoupper($word)) {
        return true;
    } else {
        return false;
    }
}
?>

</body>
</html>