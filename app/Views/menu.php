<?php
$menus = [
    'alacarte' => [
        'label_short'    => 'Ala Carte',
        'label'          => 'Ala Carte & Dim Sum',
        'url'            => 'https://online.fliphtml5.com/theempressdiningpalace/EMPRESS_ALA_CARTE_DIMSUM_MENU_LOWRES/',
        'default_orient' => 'landscape',   // wide double-page layout
    ],
    'celebrations' => [
        'label_short'    => 'Celebrations',
        'label'          => 'Celebrations 2026',
        'url'            => 'https://online.fliphtml5.com/theempressdiningpalace/The-Empress-Celebrations-Menu-2026/',
        'default_orient' => 'landscape',   // tall single-page layout
    ],
];

$active = isset($_GET['menu']) && array_key_exists($_GET['menu'], $menus) ? $_GET['menu'] : 'alacarte';

// Use explicitly chosen orientation if set, otherwise fall back to this menu's default
$validOrients = ['portrait', 'landscape'];
$orientation  = isset($_GET['orient']) && in_array($_GET['orient'], $validOrients)
    ? $_GET['orient']
    : $menus[$active]['default_orient'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>The Empress Dining Palace — Menus</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@400;500&family=Playfair+Display:wght@600;700&family=Cormorant+Garamond:wght@400;500&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html, body {
      width: 100%; height: 100%;
      overflow: hidden;
      background: #6b0000;
      font-family: 'Cormorant Garamond', Georgia, serif;
    }

    /* ════════════════════════
       HEADER
    ════════════════════════ */
    header {
      position: fixed;
      top: 0; left: 0; right: 0;
      z-index: 100;
      display: flex;
      align-items: center;
      padding: 0 20px;
      gap: 10px;
      background: linear-gradient(180deg, #b20000 0%, #7a0000 100%);
      border-bottom: 2px solid #d4a017;
      box-shadow: 0 3px 18px rgba(0,0,0,0.6);
    }

    /* top gold shimmer stripe */
    header::before {
      content: '';
      position: absolute;
      top: 0; left: 0; right: 0;
      height: 3px;
      background: linear-gradient(90deg, #7a0000, #d4a017 30%, #ffe066 50%, #d4a017 70%, #7a0000);
      pointer-events: none;
    }

    /* subtle pattern */
    header::after {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='60'%3E%3Ccircle cx='20' cy='30' r='18' fill='none' stroke='rgba(255,220,80,0.06)' stroke-width='1.5'/%3E%3Ccircle cx='60' cy='30' r='18' fill='none' stroke='rgba(255,220,80,0.06)' stroke-width='1.5'/%3E%3C/svg%3E");
      background-size: 80px 60px;
      pointer-events: none;
    }

    /* ── BRAND ── */
    .brand {
      position: relative;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-shrink: 0;
    }

    .brand-cn {
      font-family: 'Noto Serif TC', serif;
      font-weight: 500;
      color: #ffe066;
      text-shadow: 0 1px 4px rgba(0,0,0,0.5);
      white-space: nowrap;
      line-height: 1;
    }

    .brand-divider {
      width: 1px;
      background: rgba(212,160,23,0.5);
      flex-shrink: 0;
    }

    .brand-en {
      font-family: 'Playfair Display', serif;
      font-weight: 600;
      color: #fdf0c0;
      letter-spacing: 0.08em;
      text-shadow: 0 1px 4px rgba(0,0,0,0.4);
      white-space: nowrap;
    }

    /* ── CONTROLS (tabs + orient) grouped right ── */
    .controls {
      position: relative;
      margin-left: auto;
      display: flex;
      align-items: center;
      gap: 6px;
      flex-shrink: 0;
    }

    /* ── TABS ── */
    .tab {
      display: inline-block;
      font-family: 'Cormorant Garamond', serif;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      text-decoration: none;
      border: 1px solid rgba(212,160,23,0.45);
      color: rgba(255,224,102,0.65);
      transition: background .2s, color .2s, border-color .2s, box-shadow .2s;
      white-space: nowrap;
      position: relative;
    }

    .tab:hover {
      color: #ffe066;
      border-color: rgba(212,160,23,0.85);
      background: rgba(212,160,23,0.1);
    }

    .tab.active {
      background: linear-gradient(180deg, #d4a017, #b8860b);
      color: #3d0000;
      border-color: #d4a017;
      font-weight: 600;
      box-shadow: 0 2px 10px rgba(212,160,23,0.35), inset 0 1px 0 rgba(255,235,130,0.4);
    }

    /* ── SEPARATOR between tabs and orient ── */
    .sep {
      width: 1px;
      background: rgba(212,160,23,0.35);
      flex-shrink: 0;
      align-self: stretch;
      margin: 8px 2px;
    }

    /* ── ORIENTATION BUTTONS ── */
    .orient-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      text-decoration: none;
      border: 1px solid rgba(212,160,23,0.35);
      color: rgba(255,224,102,0.55);
      transition: background .2s, color .2s, border-color .2s;
      flex-shrink: 0;
    }

    .orient-btn:hover {
      color: #ffe066;
      border-color: rgba(212,160,23,0.8);
      background: rgba(212,160,23,0.1);
    }

    .orient-btn.active {
      background: linear-gradient(180deg, #d4a017, #b8860b);
      color: #3d0000;
      border-color: #d4a017;
      box-shadow: 0 2px 8px rgba(212,160,23,0.3);
    }

    .orient-btn svg { display: block; }

    /* ── IFRAME ── */
    .frame-wrap {
      position: fixed;
      left: 0; right: 0; bottom: 0;
      /* top set by JS */
    }

    /* portrait: normal full width */
    .frame-wrap.portrait { width: 100%; }

    /* landscape: constrain to 16:9-ish centred */
    .frame-wrap.landscape {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #3d0000;
    }

    .frame-wrap.landscape iframe {
      /* fill width or height while keeping 16:9 */
      width: 100%;
      height: 100%;
      max-width: calc((100vh - var(--hdr)) * 16 / 9);
      max-height: 100%;
    }

    iframe {
      width: 100%;
      height: 100%;
      border: none;
      display: block;
    }

    /* ════════════════════════
       SIZES — desktop default
    ════════════════════════ */
    header          { height: 56px; }
    .brand-cn       { font-size: 1.1rem; }
    .brand-divider  { height: 22px; }
    .brand-en       { font-size: 0.92rem; }
    .tab            { font-size: 0.82rem; padding: 7px 18px; }
    .orient-btn     { width: 34px; height: 34px; }
    .orient-btn svg { width: 18px; height: 18px; }

    /* ════════════════════════
       TABLET ≤ 640px
    ════════════════════════ */
    @media (max-width: 640px) {
      .brand-divider { display: none; }
      .brand-cn { font-size: 1.2rem;display: none;  }
      .tab  { font-size: 0.78rem; letter-spacing: 0.08em; padding: 7px 13px; }
    }

    /* ════════════════════════
       MOBILE ≤ 460px — two rows
    ════════════════════════ */
    @media (max-width: 460px) {
      header {
        flex-wrap: wrap;
        height: auto;
        padding: 8px 12px 0;
        gap: 0;
      }

      .brand {
        width: 100%;
        justify-content: center;
        padding-bottom: 8px;
        border-bottom: 1px solid rgba(212,160,23,0.2);
      }

      .controls {
        width: 100%;
        margin-left: 0;
        justify-content: center;
        gap: 0;
        border-top: none;
      }

      .tab {
        flex: 1;
        text-align: center;
        font-size: 0.74rem;
        letter-spacing: 0.05em;
        padding: 9px 6px;
        border-left: none;
        border-right: none;
        border-top: none;
        border-bottom: none;
        border-top: 1px solid rgba(212,160,23,0.2);
      }

      /* divider between tabs */
      .tab + .tab { border-left: 1px solid rgba(212,160,23,0.25); }

      .sep { display: none; }

      .orient-btn {
        border-top: 1px solid rgba(212,160,23,0.2);
        border-left: 1px solid rgba(212,160,23,0.25);
        border-right: none;
        border-bottom: none;
        width: 44px;
        height: auto;
        padding: 9px 0;
        align-self: stretch;
        flex-shrink: 0;
      }

      .orient-btn + .orient-btn {
        border-left: 1px solid rgba(212,160,23,0.2);
      }

      .orient-btn svg { width: 16px; height: 16px; }
    }
  </style>
</head>
<body>

<header id="hdr">
  <div class="brand">
    <span class="brand-en">The Empress Dining Palace</span>
  </div>

  <div class="controls">
    <?php foreach ($menus as $key => $menu):
        // When switching menus use that menu's default; when staying on same menu keep current
        $tabOrient = ($key === $active) ? $orientation : $menu['default_orient'];
    ?>
      <a href="?menu=<?= $key ?>&orient=<?= $tabOrient ?>"
         class="tab <?= $key === $active ? 'active' : '' ?>"
         title="<?= htmlspecialchars($menu['label']) ?>">
        <?= htmlspecialchars($menu['label_short']) ?>
      </a>
    <?php endforeach; ?>

    <div class="sep"></div>

    <!-- Portrait -->
    <a href="?menu=<?= $active ?>&orient=portrait"
       class="orient-btn <?= $orientation === 'portrait' ? 'active' : '' ?>"
       title="Portrait view">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="6" y="2" width="12" height="20" rx="2"/>
      </svg>
    </a>

    <!-- Landscape -->
    <a href="?menu=<?= $active ?>&orient=landscape"
       class="orient-btn <?= $orientation === 'landscape' ? 'active' : '' ?>"
       title="Landscape view">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="2" y="6" width="20" height="12" rx="2"/>
      </svg>
    </a>
  </div>
</header>

<div class="frame-wrap <?= $orientation ?>" id="frame">
  <iframe
    src="<?= htmlspecialchars($menus[$active]['url']) ?>"
    title="<?= htmlspecialchars($menus[$active]['label']) ?>"
    allowfullscreen>
  </iframe>
</div>

<script>
  function fitFrame() {
    var hh = document.getElementById('hdr').offsetHeight;
    var f  = document.getElementById('frame');
    f.style.top = hh + 'px';
    // expose for CSS calc
    document.documentElement.style.setProperty('--hdr', hh + 'px');
  }
  fitFrame();
  window.addEventListener('resize', fitFrame);
</script>

</body>
</html>