<?php
?><!doctype html>
<meta charset="utf-8">
<title>Konatkta mig</title>
<form class="form" method="post" action="?page=post-process">
    <fieldset>
        <label>Skriv ett kort meddelande så hör jag av mig.</label>
        <p>
            <label for="name">Namn:</label><br>
            <input id="title" type="text" name="title" value="<?= htmlentities($_POST["title"] ?? null) ?>"><br>
            <label for="email">Mejladress: </label><br>
            <input type="email" name="email" id="email"><br>
            <label for="subject">Ämne: </label><br>
            <input type="subject" name="subject"><br>
            <label for="message">Meddelande:</label><br>
            <textarea name="message" id="message"></textarea><br>
        </p>
        <p>
            <input type="submit" name="submit" value="Skicka">
            <input type="reset" value="Avbryt">
        </p>
    </fieldset>
</form>
