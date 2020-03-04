<?php if ($_POST["submit"] ?? false) : ?>
<output>
    <p>This is the content of the posted form.</p>
    <pre>
        <?= var_dump($_POST) ?>
    </pre>
</output>
<?php endif; ?>
