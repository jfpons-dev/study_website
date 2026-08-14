<?php
$version = '1.0.0';
$phpVersion = PHP_VERSION;
$serverTime = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Study Website</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      min-height: 100vh;
      display: grid;
      place-items: center;
      font-family: system-ui, sans-serif;
      background: #0f172a;
      color: #e2e8f0;
    }
    main {
      text-align: center;
      padding: 2rem;
    }
    h1 {
      font-size: 2.5rem;
      margin-bottom: 0.75rem;
    }
    p {
      color: #94a3b8;
      margin-bottom: 1.5rem;
    }
    .version {
      display: inline-block;
      padding: 0.5rem 1rem;
      border: 1px solid #334155;
      border-radius: 999px;
      font-family: ui-monospace, monospace;
      font-size: 0.95rem;
      color: #38bdf8;
      margin-bottom: 1.5rem;
    }
    .meta {
      font-size: 0.85rem;
      color: #64748b;
      font-family: ui-monospace, monospace;
    }
    .meta span {
      display: block;
      margin-top: 0.35rem;
    }
  </style>
</head>
<body>
  <main>
    <h1>Study Website</h1>
    <p>Projet DevOps — déploiement continu</p>
    <div class="version">v<?= htmlspecialchars($version) ?></div>
    <div class="meta">
      <span>PHP <?= htmlspecialchars($phpVersion) ?></span>
      <span><?= htmlspecialchars($serverTime) ?></span>
    </div>
  </main>
</body>
</html>
