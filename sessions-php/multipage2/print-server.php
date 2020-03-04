<h1>Innehåll i $_SERVER</h1>

<p>Innehållet PHP-variabeln <code>$_SERVER</code> är:<p>

<pre>
<?= htmlentities(print_r($_SERVER, true)); ?>
</pre>

<p>
Det finns <?php echo count($_SERVER);?> element i arrayen för $_SERVER.
</p>


<?php
if (!function_exists('array_key_first')) {
    function array_key_first(array $arr)
    {
        foreach ($arr as $key => $value) {
            return $key;
            return $value;
        }
        return null;
    }
}


$firstkey = array_key_first($_SERVER);
$firstvalue = array_shift($_SERVER);

$lastkey = key(array_slice($_SERVER, -1, 1, true));
$lastvalue = end($_SERVER);
?>
<p>Den första nyckeln <?php echo $firstkey; ?> innehåller <?php echo $firstvalue; ?>.</p>
<p>Och den sista nyckeln <?php echo $lastkey; ?> innehåller <?php echo end($_SERVER); ?>.</p>
<p>Du kan även checka värdena med koden ovanför, så ser du att det stämmer bra. Visst?</p>
