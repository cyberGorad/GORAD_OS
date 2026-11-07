<?php
$modules = [
    [
        'id' => 'ids',
        'code' => '01 / GARDE',
        'name' => 'IDS-GORAD',
        'title' => 'Surveiller. Comprendre. Réagir.',
        'description' => 'Un centre de détection local qui transforme chaque signal en décision claire, pour une sécurité maîtrisée et pédagogique.',
        'color' => 'cyan',
        'icon' => '◈',
        'stats' => ['Détections actives' => '04', 'Risque système' => 'Faible'],
    ],
    [
        'id' => 'cyberdrive',
        'code' => '02 / APPRENTISSAGE',
        'name' => 'CYBERDRIVE',
        'title' => 'Apprendre par l’aventure.',
        'description' => 'Des parcours de cybersécurité et de développement guidés par des histoires, des défis et des environnements concrets.',
        'color' => 'lime',
        'icon' => '✦',
        'stats' => ['Parcours ouverts' => '12', 'Progression' => '68%'],
    ],
    [
        'id' => 'aurai',
        'code' => '03 / PRÉSENCE',
        'name' => 'AURAI',
        'title' => 'Construire son propre rythme.',
        'description' => 'Un copilote de vie privée pour suivre les habitudes, l’attention et les objectifs sans disperser votre quotidien.',
        'color' => 'violet',
        'icon' => '⌁',
        'stats' => ['Séries actives' => '07 j', 'Énergie' => '82%'],
    ],
    [
        'id' => 'ai',
        'code' => '04 / CONSCIENCE',
        'name' => 'IA LOCALE',
        'title' => 'Votre intelligence. Vos données.',
        'description' => 'Un moteur cognitif souverain, pensé pour fonctionner hors ligne et garder les informations sensibles dans votre environnement.',
        'color' => 'blue',
        'icon' => '◎',
        'stats' => ['Mode réseau' => 'Local', 'Confidentialité' => '100%'],
    ],
];
$activePage = 'overview';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="GORAD OS — environnement d'exploitation intelligent, souverain et humain.">
    <title>GORAD OS / CORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="noise"></div>
    <div class="app-shell">
        <aside class="sidebar" id="sidebar">
            <a class="brand" href="#top" aria-label="GORAD OS accueil">
                <span class="brand-mark"><span></span></span>
                <span><b>GORAD</b><em>OS / CORE</em></span>
            </a>
            <div class="side-label">POSTES DE COMMANDE</div>
            <nav class="side-nav">
                <a class="active" href="#top"><span>⌂</span> Vue système</a>
                <a href="#modules"><span>◈</span> Modules</a>
                <a href="#architecture"><span>⌬</span> Architecture</a>
                <a href="#journal"><span>▤</span> Journal système</a>
            </nav>
            <div class="side-label">ÉTAT DU TERRAIN</div>
            <div class="environment-card">
                <div class="status-dot"></div><span>NOYAU DE PROXIMITÉ</span><strong>GORAD 1.0.0-alpha</strong>
                <small>Kernel actif · session privée</small>
            </div>
            <div class="side-bottom">
                <a href="assets/img/home_cybergorad_Desktop_INGENIERIE_SYSTEME_INDIVIDUELLE_GORAD_OS-job_24.pdf" target="_blank" class="report-link">↗ Lire la conception <small>PDF / 41 pages</small></a>
                <div class="user-chip"><div class="avatar">CG</div><span><b>CYBERGORAD</b><small>Architecte système</small></span><i>•••</i></div>
            </div>
        </aside>

        <main class="main" id="top">
            <header class="topbar">
                <button class="menu-toggle" aria-label="Ouvrir le menu">☰</button>
                <div class="breadcrumbs"><span>GORAD_OS</span><b>/</b> NOYAU <b>/</b> VUE GÉNÉRALE</div>
                <div class="top-actions"><span class="connection"><i></i> SIGNAL LOCAL <b>●</b></span><button class="icon-button" aria-label="Alertes">⌁<sup>2</sup></button><button class="command">⌘ K</button></div>
            </header>

            <section class="hero-grid">
                <div class="hero-copy">
                    <div class="eyebrow"><span></span> ENVIRONNEMENT D’EXPLOITATION INTELLIGENT</div>
                    <h1>Un système qui<br><em>évolue avec vous.</em></h1>
                    <p>GORAD OS rassemble cybersécurité, apprentissage, intelligence locale et développement personnel dans un même espace souverain.</p>
                    <div class="hero-actions"><a class="button primary" href="#modules">Explorer les modules <span>↗</span></a><a class="text-link" href="#architecture">Voir l’architecture <span>→</span></a></div>
                    <a class="download-button" href="#download" aria-disabled="true" title="Le téléchargement sera disponible prochainement"><span class="download-icon">↓</span><span><b>Télécharger GORAD OS</b><small>VERSION PUBLIQUE · BIENTÔT DISPONIBLE</small></span><i>⌁</i></a>
                    <div class="hero-meta"><span><b>4</b> piliers intégrés</span><span><b>13</b> fonctionnalités</span><span><b>100%</b> local-first</span></div>
                </div>
                <div class="hero-visual">
                    <div class="visual-top"><span>NOYAU / CHAMPS VISUELS</span><span>v1.0.0 <i></i></span></div>
                    <div class="orbital orbital-one"></div><div class="orbital orbital-two"></div>
                    <div class="core-wolf"><img src="assets/img/gorad_os.jpeg" alt="Logo loup cybernétique GORAD OS"><div class="logo-fallback">GORAD <b>OS</b></div></div>
                    <div class="visual-readout readout-left"><small>TEMPÉRATURE DU NOYAU</small><b>36.4°</b><span>ÉQUILIBRÉ</span></div>
                    <div class="visual-readout readout-right"><small>INTELLIGENCE LOCALE</small><b>PRÉSENTE</b><span>AUCUN RELAIS CLOUD</span></div>
                    <div class="scanline"></div><div class="visual-foot"><span>◉</span> NOYAU SOUVERAIN <span>RÉPONSE 0.02ms</span></div>
                </div>
            </section>

            <section class="system-bar">
                <div class="system-state"><i></i><span>ÉTAT DU NOYAU</span><b>ALIGNÉ</b></div>
                <div class="system-stat"><small>PRÉSENCE</small><strong>12<span>h</span> 42<span>m</span></strong></div>
                <div class="system-stat"><small>ESPACE MÉMOIRE</small><strong>4.8<span>/ 7.6 GB</span></strong></div>
                <div class="system-stat"><small>VEILLE ACTIVE</small><strong class="green">GARANTIE</strong></div>
                <div class="activity-bars"><small>FLUX EN COURS</small><span class="bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span></div>
            </section>

            <section class="section-heading" id="modules"><div><span class="section-kicker">NOYAU / 04</span><h2>Les piliers du système</h2></div><p>Une architecture modulaire pour garder le contrôle<br>sur ce qui compte vraiment.</p></section>
            <section class="module-grid">
                <?php foreach ($modules as $module): ?>
                <article class="module-card <?= $module['color'] ?>" id="<?= $module['id'] ?>">
                    <div class="card-top"><span class="module-icon"><?= $module['icon'] ?></span><span class="module-code"><?= $module['code'] ?></span><button aria-label="Ouvrir <?= $module['name'] ?>">↗</button></div>
                    <h3><?= $module['name'] ?></h3><h4><?= $module['title'] ?></h4><p><?= $module['description'] ?></p>
                    <div class="card-stats"><?php foreach ($module['stats'] as $label => $value): ?><span><small><?= $label ?></small><b><?= $value ?></b></span><?php endforeach; ?></div>
                    <div class="card-line"></div>
                </article>
                <?php endforeach; ?>
            </section>

            <section class="lower-grid" id="architecture">
                <div class="architecture-panel panel"><div class="panel-heading"><div><span class="section-kicker">TRACÉ / 01</span><h2>Architecture unifiée</h2></div><span class="live-tag"><i></i> CARTOGRAPHIE ACTIVE</span></div>
                    <div class="architecture-map"><div class="map-line line-a"></div><div class="map-line line-b"></div><div class="map-line line-c"></div><div class="map-node node-core"><span>◉</span><b>GORAD<br>NOYAU</b></div><div class="map-node node-ids"><span>◈</span><b>IDS<br>GORAD</b></div><div class="map-node node-cyber"><span>✦</span><b>CYBER<br>DRIVE</b></div><div class="map-node node-aurai"><span>⌁</span><b>AURAI</b></div><div class="map-node node-ai"><span>◎</span><b>IA<br>LOCALE</b></div></div>
                    <div class="architecture-legend"><span><i class="dot cyan"></i>Sécurité</span><span><i class="dot lime"></i>Apprentissage</span><span><i class="dot violet"></i>Équilibre</span><span><i class="dot blue"></i>Intelligence</span></div>
                </div>
                <div class="journal-panel panel" id="journal"><div class="panel-heading"><div><span class="section-kicker">FLUX / 04</span><h2>Journal système</h2></div><span class="live-tag"><i></i> EN DIRECT</span></div><div class="log-list"><div><time>14:32:08</time><i class="success">✓</i><span><b>IDS-GORAD</b> analyse terminée <small>aucune anomalie détectée</small></span></div><div><time>14:31:44</time><i class="info">+</i><span><b>IA LOCALE</b> indexation cognitive <small>24 éléments traités hors ligne</small></span></div><div><time>14:30:19</time><i class="success">✓</i><span><b>CYBERDRIVE</b> session sauvegardée <small>progression synchronisée localement</small></span></div><div><time>14:28:03</time><i class="warning">!</i><span><b>NOYAU</b> mise à jour disponible <small>GORAD OS / build 1.0.0-alpha</small></span></div></div><a href="#journal" class="all-link">Ouvrir le journal complet <span>→</span></a></div>
            </section>

            <section class="quote-section"><div class="quote-mark">“</div><blockquote>La technologie doit nous rendre<br><em>plus présents, pas plus dispersés.</em></blockquote><div class="quote-source"><span></span> PHILOSOPHIE GORAD OS <span></span></div></section>
            <footer><div class="footer-brand"><span class="brand-mark"><span></span></span><div><b>GORAD OS</b><small>CONÇU POUR LES ESPRITS SOUVERAINS</small></div></div><span>© 2026 CYBERGORAD · SYSTÈME EN CONSTRUCTION</span><a href="assets/img/home_cybergorad_Desktop_INGENIERIE_SYSTEME_INDIVIDUELLE_GORAD_OS-job_24.pdf" target="_blank">DOSSIER DE CONCEPTION ↗</a></footer>
        </main>
    </div>
    <script src="app.js"></script>
</body>
</html>
