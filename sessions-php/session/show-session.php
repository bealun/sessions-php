<h1>Innehåll för sessionen</h1>

<?php if (session_status() === PHP_SESSION_ACTIVE) : ?>

    <p>Här ser du mer i detalj vad sessionen faktiskt innehåller.</p>

    <p>Namn: <code><?= session_name() ?></code></p>
    <p>ID: <code><?= session_id() ?></code></p>
    <p>Avslutas inom: <?= session_cache_expire() ?> minuter.</p>

    <p>Just nu innehåller <code>$_SESSION</code> värdet:</p>
    <pre><?= var_dump($_SESSION) ?></pre>

<?php else : ?>

    <p>The session is not active, have you started the session?</p>

<?php endif; ?>
