<h1>Öka värdet i sessionen</h1>

<!-- <p>Prova att uppdatera sidan för dubblera sessionens värde.</p>
<p>Och kika på resultatet nedan!</p>
<br>
<p>Inkommande värdet för <code>$_SESSION</code> är:</p>
<pre><?= var_dump($_SESSION) ?></pre> -->
<p>Varje gång du uppdaterar sidan så dubbleras nedanstående värde!</p><br>
<?php
// var_dump($_SESSION["number"]);
if (!isset($_SESSION["number"])) {
    $_SESSION["number"] = 0.5;
}

$_SESSION["number"] *= 2;

?>
<br>
<p>Nu ökar värdet i <code>$_SESSION["number"]</code> till <b>'<?= $_SESSION["number"] ?>'</b>.</p>

<!-- <p>Utgående värde för <code>$_SESSION</code> blir då:</p>
<pre><?= var_dump($_SESSION) ?></pre><br> -->

<p>För att avsluta och börja om - välj 'Avsluta' i menyvalet.</p><br>
