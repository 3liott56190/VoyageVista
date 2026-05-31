<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>VoyageVista – Mon espace</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />

  <style>
    :root {
      --bg:          #f5f3ef;
      --surface:     #ffffff;
      --border:      #e2ddd6;
      --text:        #1a1714;
      --muted: #788a7b; 
      --accent: #013819;
      --accent-soft: #e4f5ea; 
      --header-h:    64px;
      --sidebar-w:   200px;
      --radius:      12px;
      --shadow:      0 2px 16px rgba(0,0,0,.07);
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--bg);
      color: var(--text);
      min-height: 100vh;
    }

    header {
      position: fixed;
      top: 0; left: 0; right: 0;
      height: var(--header-h);
      background: var(--surface);
      border-bottom: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 28px 0 0;
      z-index: 100;
      box-shadow: var(--shadow);
    }
    .logo { display: flex; align-items: center; height: 100%; text-decoration: none; }
    .logo-badge {
      position: relative;
      height: var(--header-h);
      background: var(--accent);
      display: flex;
      align-items: center;
      padding: 0 28px 0 24px;
      clip-path: polygon(0 0, calc(100% - 16px) 0, 100% 50%, calc(100% - 16px) 100%, 0 100%);
    }
    .logo-badge span {
      font-family: 'Playfair Display', serif;
      font-weight: 700;
      font-size: 1.25rem;
      color: #fff;
      letter-spacing: .02em;
      white-space: nowrap;
    }
    .header-right { display: flex; align-items: center; gap: 8px; }
    .icon-btn {
      width: 40px; height: 40px;
      border: 1.5px solid var(--border);
      border-radius: 50%;
      background: transparent;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      color: var(--text);
      transition: background .18s, border-color .18s;
      text-decoration: none;
      position: relative;
    }
    .icon-btn:hover { background: var(--accent-soft); border-color: var(--accent); }
    .icon-btn svg { width: 18px; height: 18px; stroke: currentColor; fill: none; stroke-width: 1.8; }
    .icon-btn .dot {
      position: absolute; top: 6px; right: 6px;
      width: 8px; height: 8px;
      background: var(--accent);
      border-radius: 50%;
      border: 2px solid var(--surface);
    }
    .btn-connexion {
      height: 36px; padding: 0 20px;
      border: 1.5px solid var(--text);
      border-radius: 8px;
      background: transparent;
      font-family: 'DM Sans', sans-serif;
      font-size: .875rem; font-weight: 500;
      cursor: pointer;
      transition: background .18s, color .18s;
    }
    .btn-connexion:hover { background: var(--accent); color: #fff; }

    .layout { display: flex; padding-top: var(--header-h); min-height: 100vh; }

    aside {
      width: var(--sidebar-w);
      background: var(--surface);
      border-right: 1px solid var(--border);
      position: fixed;
      top: var(--header-h);
      left: 0;
      bottom: 0;
      padding: 20px 12px;
      display: flex;
      flex-direction: column;
      gap: 4px;
      overflow-y: auto;
    }
    .nav-item {
      display: flex; align-items: center; gap: 10px;
      padding: 10px 14px;
      border-radius: 8px;
      text-decoration: none;
      font-size: .9rem; font-weight: 400;
      color: var(--muted);
      transition: background .15s, color .15s;
      cursor: pointer;
    }
    .nav-item svg { width: 16px; height: 16px; stroke: currentColor; fill: none; stroke-width: 1.8; flex-shrink: 0; }
    .nav-item:hover { background: var(--accent-soft); color: var(--accent); }
    .nav-item.active { background: var(--accent); color: #fff; font-weight: 500; }
    .nav-item.active svg { stroke: #fff; }

    main {
      margin-left: var(--sidebar-w);
      flex: 1;
      padding: 48px 48px 80px;
      max-width: 900px;
    }

    .profile-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 28px 32px;
      display: flex;
      align-items: center;
      gap: 24px;
      margin-bottom: 32px;
      position: relative;
    }
    .avatar {
      width: 72px; height: 72px;
      border-radius: 50%;
      background: #dde3f5;
      display: flex; align-items: center; justify-content: center;
      font-family: 'DM Sans', sans-serif;
      font-size: 1.5rem; font-weight: 600;
      color: #3a4fa8;
      flex-shrink: 0;
      border: 3px solid #c8d2f0;
    }
    .profile-info { flex: 1; }
    .profile-email {
      font-size: .9rem; color: var(--muted);
      margin-bottom: 10px;
    }
    .profile-email span { color: var(--text); font-weight: 500; }
    .profile-stats { display: flex; gap: 28px; }
    .stat { text-align: center; }
    .stat-num { font-size: 1.3rem; font-weight: 700; color: var(--text); line-height: 1; }
    .stat-label { font-size: .78rem; color: var(--muted); margin-top: 2px; }
    .btn-modifier {
      position: absolute; top: 24px; right: 28px;
      height: 36px; padding: 0 18px;
      border: 1.5px solid var(--border);
      border-radius: 8px;
      background: transparent;
      font-family: 'DM Sans', sans-serif;
      font-size: .85rem; font-weight: 500;
      cursor: pointer;
      color: var(--text);
      transition: background .18s, border-color .18s, color .18s;
    }
    .btn-modifier:hover { background: var(--accent-soft); border-color: var(--accent); color: var(--accent); }

    .tabs {
      display: flex; gap: 0;
      border-bottom: 2px solid var(--border);
      margin-bottom: 32px;
    }
    .tab-btn {
      padding: 10px 22px;
      background: transparent; border: none;
      font-family: 'DM Sans', sans-serif;
      font-size: .925rem; font-weight: 500;
      color: var(--muted); cursor: pointer;
      border-bottom: 2.5px solid transparent;
      margin-bottom: -2px;
      transition: color .18s, border-color .18s;
    }
    .tab-btn:hover { color: var(--text); }
    .tab-btn.active { color: var(--accent); border-bottom-color: var(--accent); font-weight: 600; }

    .tab-panel { display: none; }
    .tab-panel.active { display: block; }

    .section-title {
      font-size: 1rem; font-weight: 600;
      margin-bottom: 14px; color: var(--text);
    }

    .trip-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      display: flex;
      overflow: hidden;
      margin-bottom: 28px;
    }
    .trip-img {
      width: 160px; min-height: 130px; flex-shrink: 0;
      background: linear-gradient(135deg, #c4b5a0, #a89888);
      display: flex; align-items: center; justify-content: center;
      font-size: .75rem; color: rgba(255,255,255,.75); font-style: italic;
      text-align: center; padding: 8px;
    }
    .trip-body {
      flex: 1; padding: 18px 20px;
      display: flex; flex-direction: column; justify-content: space-between;
    }
    .trip-header { display: flex; align-items: flex-start; justify-content: space-between; margin-bottom: 8px; }
    .trip-date { font-size: .85rem; color: var(--muted); display: flex; align-items: center; gap: 6px; }
    .trip-date svg { width: 14px; height: 14px; stroke: var(--muted); fill: none; stroke-width: 2; flex-shrink: 0; }
    .badge-confirmed {
      background: #e8f8f0; color: #2a9d5c;
      border: 1px solid #b8e8d0;
      font-size: .75rem; font-weight: 600;
      padding: 3px 12px; border-radius: 99px;
      white-space: nowrap;
    }
    .trip-tags { display: flex; gap: 8px; flex-wrap: wrap; margin: 10px 0; }
    .trip-tag {
      display: flex; align-items: center; gap: 5px;
      padding: 4px 12px; border-radius: 99px;
      border: 1.5px solid var(--border);
      font-size: .8rem; font-weight: 500; color: var(--text);
      background: var(--bg);
    }
    .trip-tag svg { width: 13px; height: 13px; stroke: var(--muted); fill: none; stroke-width: 2; }
    .trip-actions { display: flex; gap: 10px; margin-top: 4px; }
    .btn-trip-primary {
      height: 34px; padding: 0 18px;
      background: var(--accent); color: #fff;
      border: none; border-radius: 8px;
      font-family: 'DM Sans', sans-serif; font-size: .85rem; font-weight: 600;
      cursor: pointer; transition: background .18s;
    }
    .btn-trip-primary:hover { background: #20b04b; }
    .btn-trip-secondary {
      height: 34px; padding: 0 18px;
      background: transparent; color: var(--text);
      border: 1.5px solid var(--border); border-radius: 8px;
      font-family: 'DM Sans', sans-serif; font-size: .85rem; font-weight: 500;
      cursor: pointer; transition: background .18s, border-color .18s;
    }
    .btn-trip-secondary:hover { background: var(--accent-soft); border-color: var(--accent); color: var(--accent); }

    .past-grid {
      display: grid; grid-template-columns: 1fr 1fr;
      gap: 16px;
    }
    .past-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      display: flex; overflow: hidden;
      transition: transform .2s, box-shadow .2s;
    }
    .past-card:hover { transform: translateY(-3px); box-shadow: 0 8px 28px rgba(0,0,0,.11); }
    .past-img {
      width: 88px; flex-shrink: 0;
      background: linear-gradient(135deg, #c4b5a0, #a89888);
      display: flex; align-items: center; justify-content: center;
      font-size: .7rem; color: rgba(255,255,255,.7); font-style: italic;
      text-align: center; padding: 6px;
    }
    .past-body { padding: 14px 16px; flex: 1; }
    .past-meta { font-size: .78rem; color: var(--muted); margin-bottom: 4px; }
    .past-stars { color: #f5a623; font-size: .85rem; letter-spacing: .04em; }

    .wishlist-grid {
      display: grid; grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }
    .wish-card {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      overflow: hidden;
      transition: transform .2s, box-shadow .2s;
    }
    .wish-card:hover { transform: translateY(-3px); box-shadow: 0 8px 28px rgba(0,0,0,.11); }
    .wish-img {
      width: 100%; height: 110px;
      background: linear-gradient(135deg, #d4c5b0, #b8a898);
      display: flex; align-items: center; justify-content: center;
      font-size: .75rem; color: rgba(255,255,255,.7); font-style: italic;
      position: relative;
    }
    .wish-heart {
      position: absolute; top: 8px; right: 8px;
      width: 28px; height: 28px; border-radius: 50%;
      background: rgba(255,255,255,.9);
      display: flex; align-items: center; justify-content: center;
      cursor: pointer; border: none;
      transition: background .15s;
    }
    .wish-heart:hover { background: #fff0f0; }
    .wish-heart svg { width: 14px; height: 14px; stroke: #e05555; fill: #e05555; stroke-width: 1.5; }
    .wish-body { padding: 12px 14px; }
    .wish-name { font-family: 'Playfair Display', serif; font-size: .95rem; font-weight: 700; margin-bottom: 4px; }
    .wish-meta { font-size: .77rem; color: var(--muted); }
    .wish-price { font-size: .9rem; font-weight: 600; color: var(--accent); margin-top: 6px; }

    .settings-section { margin-bottom: 28px; }
    .settings-section h3 {
      font-size: .8rem; font-weight: 600; text-transform: uppercase;
      letter-spacing: .08em; color: var(--muted);
      margin-bottom: 12px;
    }
    .settings-group {
      background: var(--surface);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      overflow: hidden;
    }
    .settings-row {
      display: flex; align-items: center; justify-content: space-between;
      padding: 16px 20px;
      border-bottom: 1px solid var(--border);
    }
    .settings-row:last-child { border-bottom: none; }
    .settings-label { font-size: .9rem; }
    .settings-label small { display: block; font-size: .78rem; color: var(--muted); margin-top: 2px; }
    .settings-value { font-size: .875rem; color: var(--muted); }
    .btn-edit-setting {
      padding: 5px 14px;
      border: 1.5px solid var(--border); border-radius: 6px;
      background: transparent; font-family: 'DM Sans', sans-serif;
      font-size: .8rem; font-weight: 500; cursor: pointer;
      transition: all .15s;
    }
    .btn-edit-setting:hover { border-color: var(--accent); color: var(--accent); background: var(--accent-soft); }
    .toggle {
      width: 44px; height: 24px; border-radius: 99px;
      background: var(--border); border: none; cursor: pointer;
      position: relative; transition: background .2s;
      flex-shrink: 0;
    }
    .toggle.on { background: var(--accent); }
    .toggle::after {
      content: '';
      position: absolute; top: 3px; left: 3px;
      width: 18px; height: 18px; border-radius: 50%;
      background: #fff;
      transition: transform .2s;
      box-shadow: 0 1px 4px rgba(0,0,0,.2);
    }
    .toggle.on::after { transform: translateX(20px); }
    .btn-danger {
      height: 38px; padding: 0 20px;
      background: #fff0f0; color: #d94040;
      border: 1.5px solid #f5c0c0; border-radius: 8px;
      font-family: 'DM Sans', sans-serif; font-size: .875rem; font-weight: 500;
      cursor: pointer; transition: background .18s, border-color .18s;
    }
    .btn-danger:hover { background: #ffe0e0; border-color: #d94040; }

    .empty-state {
      text-align: center; padding: 56px 24px;
      color: var(--muted);
    }
    .empty-state svg { width: 48px; height: 48px; stroke: var(--border); fill: none; stroke-width: 1.2; margin-bottom: 16px; }
    .empty-state p { font-size: .95rem; margin-bottom: 18px; }
    .btn-cta {
      height: 40px; padding: 0 24px;
      background: var(--accent); color: #fff;
      border: none; border-radius: 8px;
      font-family: 'DM Sans', sans-serif; font-size: .9rem; font-weight: 600;
      cursor: pointer; transition: background .18s;
      text-decoration: none; display: inline-flex; align-items: center;
    }
    .btn-cta:hover { background: #20b031; }

    footer {
      background: var(--text);
      color: rgba(255,255,255,.7);
      width: 100%;
    }
    .footer-inner {
      padding: 40px 48px 28px;
      margin-left: var(--sidebar-w);
    }
    .footer-grid {
      display: grid; grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 40px; margin-bottom: 32px;
    }
    .footer-brand-name {
      font-family: 'Playfair Display', serif;
      font-size: 1.4rem; font-weight: 700;
      color: #fff; margin-bottom: 10px;
    }
    .footer-tagline { font-size: .875rem; line-height: 1.6; margin-bottom: 16px; }
    .footer-col h4 {
      font-size: .8rem; font-weight: 600;
      text-transform: uppercase; letter-spacing: .08em;
      color: #fff; margin-bottom: 14px;
    }
    .footer-col a {
      display: block; color: rgba(255,255,255,.6);
      text-decoration: none; font-size: .875rem;
      margin-bottom: 8px; transition: color .15s;
    }
    .footer-col a:hover { color: var(--accent); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,.12);
      padding-top: 20px;
      display: flex; align-items: center; justify-content: space-between;
      font-size: .8rem;
    }
    .footer-bottom-links { display: flex; gap: 20px; }
    .footer-bottom-links a { color: rgba(255,255,255,.5); text-decoration: none; }
    .footer-bottom-links a:hover { color: #fff; }

    #backToTop {
      position: fixed; bottom: 32px; right: 32px;
      width: 46px; height: 46px; border-radius: 50%;
      background: var(--accent); color: #fff; border: none;
      cursor: pointer; display: flex; align-items: center; justify-content: center;
      box-shadow: 0 4px 16px rgba(201,103,43,.4);
      opacity: 0; pointer-events: none;
      transform: translateY(12px);
      transition: opacity .25s, transform .25s;
      z-index: 200;
    }
    #backToTop.visible { opacity: 1; pointer-events: auto; transform: translateY(0); }
    #backToTop:hover { background: #20b031; }
    #backToTop svg { width: 20px; height: 20px; stroke: #fff; fill: none; stroke-width: 2.5; }
  </style>
</head>
<body>

<header>
  <a href="Accueil.php" class="logo">
    <div class="logo-badge"><span>VoyageVista</span></div>
  </a>
  <div class="header-right">
    <a href="monespace.html" class="icon-btn" title="Mon espace">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
    </a>
    <a href="notifications.html" class="icon-btn" title="Notifications">
      <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
      <span class="dot"></span>
    </a>
    <button class="btn-connexion" onclick="window.location='connexion.php'">Connexion</button>
  </div>
</header>

<div class="layout">

  <aside id="sidebar">
    <a href="Accueil.php" class="nav-item">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Accueil
    </a>
    <a href="catalogue.php" class="nav-item">
      <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Catalogue
    </a>
    <a href="transport.php" class="nav-item">
      <svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>Transport
    </a>
    <a href="hebergement.php" class="nav-item">
      <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>Hébergement
    </a>
    <a href="activites.php" class="nav-item">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Activités
    </a>
    <a href="itineraire.php" class="nav-item">
      <svg viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><polyline points="8 7 3 12 8 17"/><polyline points="16 7 21 12 16 17"/></svg>Itinéraire
    </a>
    <a href="panier.php" class="nav-item">
      <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>Panier
    </a>
    <a href="notifications.php" class="nav-item">
      <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>Notifications
    </a>
    <a href="monespace.php" class="nav-item active">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>Mon espace
    </a>
  </aside>

  <main>
    <div class="profile-card">

      <div class="avatar" id="avatarEl">JD</div>

      <div class="profile-info">
        <div class="profile-email">
          <!-- DB : utilisateurs.email -->
          <span id="userEmail">jean.dupont@email.com</span>
          <!-- DB : "Membre depuis " + DATE_FORMAT(utilisateurs.date_inscription, '%M %Y') -->
          &nbsp;·&nbsp; Membre depuis mars 2024
        </div>

        <div class="profile-stats">
          <!-- DB : COUNT(*) FROM reservations WHERE utilisateur_id = $_SESSION['user_id'] -->
          <div class="stat">
            <div class="stat-num" id="statVoyages">7</div>
            <div class="stat-label">Voyages</div>
          </div>
          <!-- DB : COUNT(*) FROM favoris WHERE utilisateur_id = $_SESSION['user_id'] -->
          <div class="stat">
            <div class="stat-num" id="statFavoris">12</div>
            <div class="stat-label">Favoris</div>
          </div>
          <!-- DB : COUNT(*) FROM avis WHERE utilisateur_id = $_SESSION['user_id'] -->
          <div class="stat">
            <div class="stat-num" id="statAvis">4</div>
            <div class="stat-label">Avis</div>
          </div>
        </div>
      </div>

      <button class="btn-modifier" onclick="openModifier()">Modifier le profil</button>
    </div>

    <div class="tabs">
      <button class="tab-btn active" onclick="switchTab(this,'upcoming')">Voyages à venir</button>
      <button class="tab-btn" onclick="switchTab(this,'history')">Historique</button>
      <button class="tab-btn" onclick="switchTab(this,'wishlist')">Wishlist</button>
      <button class="tab-btn" onclick="switchTab(this,'settings')">Paramètres</button>
    </div>


    <!-- ========================================================
         TAB : VOYAGES À VENIR
         ======================================================== -->
    <div class="tab-panel active" id="tab-upcoming">
      <div class="section-title">Prochain voyage</div>

      <!-- --------------------------------------------------------
           CARTE DU PROCHAIN VOYAGE
           Entité DB : reservations JOIN sejours JOIN destinations
           Requête   : SELECT r.*, s.*, d.nom, d.pays, d.photo_url
                       FROM reservations r
                       JOIN sejours s ON s.reservation_id = r.id
                       JOIN destinations d ON d.id = s.destination_id
                       WHERE r.utilisateur_id = $_SESSION['user_id']
                         AND r.date_depart > NOW()
                         AND r.statut IN ('confirme','en_attente')
                       ORDER BY r.date_depart ASC
                       LIMIT 1
           -------------------------------------------------------- -->
      <div class="trip-card">

        <!-- DB : destinations.photo_url (balise <img>) ou destinations.nom en fallback -->
        <div class="trip-img">Bali, Indonésie</div>

        <div class="trip-body">
          <div class="trip-header">
            <div class="trip-date">
              <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              <!-- DB : DATE_FORMAT(reservations.date_depart, '%d %M %Y')
                        + " – " + DATE_FORMAT(reservations.date_retour, '%d %M %Y')
                        + " · " + DATEDIFF(date_retour, date_depart) + " nuits" -->
              15–22 juin 2026 &nbsp;·&nbsp; 7 nuits
            </div>
            <!-- DB : reservations.statut → 'confirme' affiche le badge vert,
                      'en_attente' afficherait un badge orange -->
            <span class="badge-confirmed">Confirmé</span>
          </div>

          <!-- Tags dynamiques selon les composants présents dans la réservation -->
          <div class="trip-tags">
            <!-- DB : afficher si reservations.transport_id IS NOT NULL
                      (JOIN transports → transports.type pour le libellé) -->
            <span class="trip-tag">
              <svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>
              Vol
            </span>
            <!-- DB : afficher si reservations.hebergement_id IS NOT NULL
                      (JOIN hebergements → hebergements.type pour le libellé) -->
            <span class="trip-tag">
              <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
              Hôtel
            </span>
            <!-- DB : COUNT(*) FROM reservation_activites
                      WHERE reservation_id = reservations.id
                      → afficher "X activité(s)" si > 0 -->
            <span class="trip-tag">
              <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              2 activités
            </span>
          </div>

          <div class="trip-actions">
            <button class="btn-trip-primary" onclick="window.location='itineraire.html'">Voir l'itinéraire</button>
            <!-- DB : lien vers la page de modification → reservations.id passé en paramètre URL -->
            <button class="btn-trip-secondary">Modifier</button>
          </div>
        </div>
      </div>

      <!-- --------------------------------------------------------
           VOYAGES PASSÉS (aperçu 4 derniers)
           Entité DB : reservations JOIN destinations
           Requête   : SELECT r.id, d.nom, d.photo_url,
                              r.date_depart, r.date_retour,
                              AVG(av.note) AS note_moyenne
                       FROM reservations r
                       JOIN sejours s ON s.reservation_id = r.id
                       JOIN destinations d ON d.id = s.destination_id
                       LEFT JOIN avis av ON av.reservation_id = r.id
                       WHERE r.utilisateur_id = $_SESSION['user_id']
                         AND r.date_retour < NOW()
                       GROUP BY r.id
                       ORDER BY r.date_retour DESC
                       LIMIT 4
           -------------------------------------------------------- -->
      <div class="section-title" style="margin-top:8px">Voyages passés</div>
      <div class="past-grid">

        <!-- DB : une .past-card par ligne retournée par la requête ci-dessus -->
        <div class="past-card">
          <!-- DB : destinations.photo_url (balise <img>) ou destinations.nom en fallback -->
          <div class="past-img">Tokyo</div>
          <div class="past-body">
            <!-- DB : DATE_FORMAT(reservations.date_depart, '%b %Y')
                      + " · " + DATEDIFF(date_retour, date_depart) + "j" -->
            <div class="past-meta">Mars 2026 &nbsp;·&nbsp; 10j</div>
            <!-- DB : note_moyenne arrondie depuis la table avis (avis.note) -->
            <div class="past-stars">★★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Barcelone</div>
          <div class="past-body">
            <div class="past-meta">Nov. 2025 &nbsp;·&nbsp; 4j</div>
            <div class="past-stars">★★★★½</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">New York</div>
          <div class="past-body">
            <div class="past-meta">Août 2025 &nbsp;·&nbsp; 8j</div>
            <div class="past-stars">★★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Lisbonne</div>
          <div class="past-body">
            <div class="past-meta">Avr. 2025 &nbsp;·&nbsp; 5j</div>
            <div class="past-stars">★★★★</div>
          </div>
        </div>

      </div>
    </div>


    <!-- ========================================================
         TAB : HISTORIQUE
         Entité DB : reservations JOIN sejours JOIN destinations JOIN avis
         Requête   : même que "voyages passés" ci-dessus
                     mais SANS LIMIT (tous les voyages terminés)
         ======================================================== -->
    <div class="tab-panel" id="tab-history">
      <div class="section-title">Tous les voyages</div>
      <div class="past-grid">

        <!-- DB : une .past-card par réservation passée (date_retour < NOW()) -->
        <div class="past-card">
          <div class="past-img">Tokyo</div>
          <div class="past-body">
            <div class="past-meta">Mars 2026 &nbsp;·&nbsp; 10j</div>
            <div class="past-stars">★★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Barcelone</div>
          <div class="past-body">
            <div class="past-meta">Nov. 2025 &nbsp;·&nbsp; 4j</div>
            <div class="past-stars">★★★★½</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">New York</div>
          <div class="past-body">
            <div class="past-meta">Août 2025 &nbsp;·&nbsp; 8j</div>
            <div class="past-stars">★★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Lisbonne</div>
          <div class="past-body">
            <div class="past-meta">Avr. 2025 &nbsp;·&nbsp; 5j</div>
            <div class="past-stars">★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Amsterdam</div>
          <div class="past-body">
            <div class="past-meta">Janv. 2025 &nbsp;·&nbsp; 3j</div>
            <div class="past-stars">★★★★</div>
          </div>
        </div>

        <div class="past-card">
          <div class="past-img">Kyoto</div>
          <div class="past-body">
            <div class="past-meta">Oct. 2024 &nbsp;·&nbsp; 7j</div>
            <div class="past-stars">★★★★★</div>
          </div>
        </div>

      </div>
    </div>


    <!-- ========================================================
         TAB : WISHLIST
         Entité DB : favoris JOIN destinations
         Requête   : SELECT f.id AS favori_id, d.*
                     FROM favoris f
                     JOIN destinations d ON d.id = f.destination_id
                     WHERE f.utilisateur_id = $_SESSION['user_id']
                     ORDER BY f.date_ajout DESC
         ======================================================== -->
    <div class="tab-panel" id="tab-wishlist">
      <div class="section-title">Mes destinations favorites</div>
      <div class="wishlist-grid">

        <!-- DB : une .wish-card par ligne de la table favoris de cet utilisateur -->
        <div class="wish-card">
          <div class="wish-img">
            <!-- DB : destinations.nom affiché en fallback texte ;
                      remplacer par <img src="destinations.photo_url"> quand disponible -->
            Santorini, Grèce
            <!-- DB : onclick → DELETE FROM favoris
                                WHERE destination_id = [destinations.id]
                                AND utilisateur_id   = $_SESSION['user_id'] -->
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <!-- DB : destinations.nom -->
            <div class="wish-name">Santorini</div>
            <!-- DB : destinations.pays + " · " + destinations.categorie -->
            <div class="wish-meta">Grèce · Romantique</div>
            <!-- DB : "à partir de " + destinations.prix_par_personne + " €" -->
            <div class="wish-price">à partir de 899 €</div>
          </div>
        </div>

        <div class="wish-card">
          <div class="wish-img">
            Maldives
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <div class="wish-name">Maldives</div>
            <div class="wish-meta">Asie · Plage</div>
            <div class="wish-price">à partir de 1 239 €</div>
          </div>
        </div>

        <div class="wish-card">
          <div class="wish-img">
            Cusco, Pérou
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <div class="wish-name">Cusco</div>
            <div class="wish-meta">Pérou · Aventure</div>
            <div class="wish-price">à partir de 1 099 €</div>
          </div>
        </div>

        <div class="wish-card">
          <div class="wish-img">
            Interlaken, Suisse
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <div class="wish-name">Interlaken</div>
            <div class="wish-meta">Suisse · Montagne</div>
            <div class="wish-price">à partir de 1 249 €</div>
          </div>
        </div>

        <div class="wish-card">
          <div class="wish-img">
            Kyoto, Japon
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <div class="wish-name">Kyoto</div>
            <div class="wish-meta">Japon · Culture</div>
            <div class="wish-price">à partir de 1 050 €</div>
          </div>
        </div>

        <div class="wish-card">
          <div class="wish-img">
            Dubai, ÉAU
            <button class="wish-heart" title="Retirer des favoris" onclick="removeWish(this)">
              <svg viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
            </button>
          </div>
          <div class="wish-body">
            <div class="wish-name">Dubai</div>
            <div class="wish-meta">Émirats · Ville</div>
            <div class="wish-price">à partir de 899 €</div>
          </div>
        </div>

      </div>
    </div>


    <!-- ========================================================
         TAB : PARAMÈTRES
         Entité DB : utilisateurs + preferences_utilisateur
         Requête   : SELECT u.*, p.*
                     FROM utilisateurs u
                     LEFT JOIN preferences_utilisateur p ON p.utilisateur_id = u.id
                     WHERE u.id = $_SESSION['user_id']
         ======================================================== -->
    <div class="tab-panel" id="tab-settings">

      <!-- --------------------------------------------------------
           INFORMATIONS PERSONNELLES
           Toutes les valeurs → table utilisateurs
           Mise à jour via UPDATE utilisateurs SET ... WHERE id = $_SESSION['user_id']
           -------------------------------------------------------- -->
      <div class="settings-section">
        <h3>Informations personnelles</h3>
        <div class="settings-group">

          <div class="settings-row">
            <div class="settings-label">Nom complet<small>Affiché sur vos réservations</small></div>
            <div style="display:flex;align-items:center;gap:12px">
              <!-- DB : utilisateurs.prenom + " " + utilisateurs.nom -->
              <span class="settings-value">Jean Dupont</span>
              <button class="btn-edit-setting">Modifier</button>
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">Adresse e-mail<small>Utilisée pour la connexion</small></div>
            <div style="display:flex;align-items:center;gap:12px">
              <!-- DB : utilisateurs.email -->
              <span class="settings-value">jean.dupont@email.com</span>
              <button class="btn-edit-setting">Modifier</button>
            </div>
          </div>

          <div class="settings-row">
            <div class="settings-label">Mot de passe
              <!-- DB : date calculée depuis utilisateurs.date_modif_mdp -->
              <small>Dernière modification il y a 3 mois</small>
            </div>
            <!-- Déclenche UPDATE utilisateurs SET mot_de_passe = password_hash(...) -->
            <button class="btn-edit-setting">Changer</button>
          </div>

          <div class="settings-row">
            <div class="settings-label">Téléphone<small>Pour les confirmations SMS</small></div>
            <div style="display:flex;align-items:center;gap:12px">
              <!-- DB : utilisateurs.telephone (afficher "Non renseigné" si NULL) -->
              <span class="settings-value">Non renseigné</span>
              <button class="btn-edit-setting">Ajouter</button>
            </div>
          </div>

        </div>
      </div>

      <!-- --------------------------------------------------------
           PRÉFÉRENCES DE NOTIFICATIONS
           Entité DB : preferences_utilisateur
           Colonnes  : notif_rappels, notif_offres, notif_newsletter, notif_modifs
           Chaque toggle → UPDATE preferences_utilisateur SET colonne = !valeur
                           WHERE utilisateur_id = $_SESSION['user_id']
           -------------------------------------------------------- -->
      <div class="settings-section">
        <h3>Notifications</h3>
        <div class="settings-group">

          <!-- DB : preferences_utilisateur.notif_rappels (1 → classe "on", 0 → sans classe) -->
          <div class="settings-row">
            <div class="settings-label">Rappels de voyage<small>7 jours et 24h avant le départ</small></div>
            <button class="toggle on" onclick="this.classList.toggle('on')"></button>
          </div>

          <!-- DB : preferences_utilisateur.notif_offres -->
          <div class="settings-row">
            <div class="settings-label">Offres et promotions<small>Réductions sur vos destinations favorites</small></div>
            <button class="toggle on" onclick="this.classList.toggle('on')"></button>
          </div>

          <!-- DB : preferences_utilisateur.notif_newsletter -->
          <div class="settings-row">
            <div class="settings-label">Newsletters<small>Inspirations de voyage mensuelles</small></div>
            <button class="toggle" onclick="this.classList.toggle('on')"></button>
          </div>

          <!-- DB : preferences_utilisateur.notif_modifs -->
          <div class="settings-row">
            <div class="settings-label">Modifications de réservation<small>Tout changement sur vos séjours confirmés</small></div>
            <button class="toggle on" onclick="this.classList.toggle('on')"></button>
          </div>

        </div>
      </div>

      <!-- --------------------------------------------------------
           CONFIDENTIALITÉ
           Entité DB : preferences_utilisateur
           Colonnes  : profil_public, partage_analytics
           -------------------------------------------------------- -->
      <div class="settings-section">
        <h3>Confidentialité</h3>
        <div class="settings-group">

          <!-- DB : preferences_utilisateur.profil_public -->
          <div class="settings-row">
            <div class="settings-label">Profil public<small>Visible par les autres membres</small></div>
            <button class="toggle" onclick="this.classList.toggle('on')"></button>
          </div>

          <!-- DB : preferences_utilisateur.partage_analytics -->
          <div class="settings-row">
            <div class="settings-label">Partage des données analytiques<small>Aide à améliorer l'expérience</small></div>
            <button class="toggle on" onclick="this.classList.toggle('on')"></button>
          </div>

        </div>
      </div>

      <!-- --------------------------------------------------------
           ZONE DANGEREUSE
           Requête : DELETE FROM utilisateurs WHERE id = $_SESSION['user_id']
           (penser à supprimer en cascade : reservations, favoris, avis, preferences)
           -------------------------------------------------------- -->
      <div class="settings-section">
        <h3>Zone dangereuse</h3>
        <div class="settings-group">
          <div class="settings-row">
            <div class="settings-label">Supprimer mon compte<small>Cette action est irréversible</small></div>
            <button class="btn-danger">Supprimer le compte</button>
          </div>
        </div>
      </div>

    </div>

  </main>
</div>

<!-- FOOTER -->
<footer id="footer">
  <div class="footer-inner">
    <div class="footer-grid">
      <div>
        <div class="footer-brand-name">VoyageVista</div>
        <p class="footer-tagline">Des voyages inoubliables pour les jeunes explorateurs. Partez loin, dépensez peu, vivez fort.</p>
      </div>
      <div class="footer-col">
        <h4>Explorer</h4>
        <a href="catalogue.php">Toutes les destinations</a>
        <a href="transport.php">Transports</a>
        <a href="hebergement.php">Hébergements</a>
        <a href="activites.php">Activités</a>
      </div>
      <div class="footer-col">
        <h4>Mon compte</h4>
        <a href="connexion.php">Connexion</a>
        <a href="monespace.php">Mon espace</a>
        <a href="panier.php">Mon panier</a>
        <a href="itineraire.php">Mes itinéraires</a>
      </div>
      <div class="footer-col">
        <h4>Informations</h4>
        <a href="a-propos.html">À propos</a>
        <a href="cgu.html">CGU</a>
        <a href="contact.html">Contact</a>
        <a href="#">Réseaux sociaux</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2025 VoyageVista — Tous droits réservés</span>
      <div class="footer-bottom-links">
        <a href="cgu.html">CGU</a>
        <a href="confidentialite.html">Politique de confidentialité</a>
        <a href="contact.html">Contact</a>
      </div>
    </div>
  </div>
</footer>

<!-- BACK TO TOP -->
<button id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script>
  /* ── Tab switching ── */
  function switchTab(btn, id) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById('tab-' + id).classList.add('active');
  }

  /* ── Remove from wishlist ──
     À remplacer par un appel fetch/AJAX vers un endpoint PHP :
     DELETE FROM favoris WHERE destination_id = X AND utilisateur_id = $_SESSION['user_id']
     Récupérer l'id de la destination depuis data-id sur .wish-card pour construire la requête. */
  function removeWish(btn) {
    const card = btn.closest('.wish-card');
    card.style.transition = 'opacity .3s, transform .3s';
    card.style.opacity = '0';
    card.style.transform = 'scale(.95)';
    setTimeout(() => card.remove(), 300);
  }

  /* ── Modifier le profil ──
     À remplacer par l'ouverture d'un formulaire (modal ou page dédiée)
     qui soumet un UPDATE utilisateurs SET prenom=?, nom=?, email=?, telephone=?
     WHERE id = $_SESSION['user_id'] via un endpoint PHP. */
  function openModifier() {
    alert('Fonctionnalité de modification du profil à venir.');
  }

  const sidebar = document.getElementById('sidebar');
  const footer  = document.getElementById('footer');
  function updateSidebarBottom() {
    const footerTop = footer.getBoundingClientRect().top;
    const winH = window.innerHeight;
    sidebar.style.bottom = footerTop < winH ? (winH - footerTop) + 'px' : '0px';
  }
  window.addEventListener('scroll', updateSidebarBottom);
  window.addEventListener('resize', updateSidebarBottom);
  updateSidebarBottom();

  const btn = document.getElementById('backToTop');
  window.addEventListener('scroll', () => btn.classList.toggle('visible', window.scrollY > 300));
</script>
</body>
</html>
