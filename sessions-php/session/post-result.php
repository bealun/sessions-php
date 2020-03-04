<p>Tack för ditt meddelande!</p>

<?php mail("b-b-ea@hotmail.com", "My subject", "Hej hej"); ?>
<!-- <?php var_dump($_SESSION); ?> -->
<p>Från: <br>
<?php print($_SESSION["email"]); ?> </p>
<p>Meddelande: <br>
<?php print($_SESSION["message"]); ?> </p>
