<h1>Nyckel och värde:</h1>

<?php

$lengthArray = array();
foreach ($_SERVER as $key => $value) {
    $lengthArray[$key] = strlen($value);
}
$maxKey = max(array_values($lengthArray));
print("<pre>");
print_r($lengthArray);
print("</pre>");
?>

<p>Nyckeln för det längsta värdet är <?php print(array_search($maxKey, $lengthArray)); ?>
  och det inehåller <?php print($maxKey); ?>.</p>
<p>Du kan alltid dubbelkolla om resultatet stämmer!</p>
