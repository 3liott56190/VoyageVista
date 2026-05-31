<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VoyageVista – Transport</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --bg:#f5f3ef; --surface:#ffffff; --border:#e2ddd6; --text:#1a1714;
      --muted:#788a7b; --accent:#013819; --accent-soft:#e4f5ea;
      --header-h:64px; --sidebar-w:200px; --radius:14px;
      --shadow:0 2px 16px rgba(0,0,0,.07);
    }
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    html,body{overflow-x:hidden;font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);min-height:100vh}

    header{position:fixed;top:0;left:0;right:0;height:var(--header-h);background:var(--surface);border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;padding:0 28px 0 0;z-index:100;box-shadow:var(--shadow)}
    .header-left{display:flex;align-items:center;height:100%}
    .logo{display:flex;align-items:center;height:100%;text-decoration:none}
    .logo-badge{height:var(--header-h);background:var(--accent);display:flex;align-items:center;padding:0 28px 0 24px;clip-path:polygon(0 0,calc(100% - 16px) 0,100% 50%,calc(100% - 16px) 100%,0 100%)}
    .logo-badge span{font-family:'Playfair Display',serif;font-weight:700;font-size:1.25rem;color:#fff;letter-spacing:.02em;white-space:nowrap}
    .btn-back{display:flex;align-items:center;gap:7px;margin-left:24px;color:var(--muted);font-size:.875rem;font-weight:500;text-decoration:none;transition:color .18s}
    .btn-back svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:2}
    .btn-back:hover{color:var(--accent)}
    .header-right{display:flex;align-items:center;gap:8px}
    .icon-btn{width:40px;height:40px;border:1.5px solid var(--border);border-radius:50%;background:transparent;cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--text);transition:background .18s,border-color .18s;text-decoration:none;position:relative}
    .icon-btn:hover{background:var(--accent-soft);border-color:var(--accent)}
    .icon-btn svg{width:18px;height:18px;stroke:currentColor;fill:none;stroke-width:1.8}
    .icon-btn .dot{position:absolute;top:6px;right:6px;width:8px;height:8px;background:var(--accent);border-radius:50%;border:2px solid var(--surface)}
    .btn-connexion{height:36px;padding:0 20px;border:1.5px solid var(--accent);border-radius:8px;background:transparent;font-family:'DM Sans',sans-serif;font-size:.875rem;font-weight:500;cursor:pointer;transition:background .18s,color .18s}
    .btn-connexion:hover{background:var(--accent);color:#fff}

    aside#sidebar{width:var(--sidebar-w);background:var(--surface);border-right:1px solid var(--border);position:fixed;top:var(--header-h);left:0;bottom:0;padding:20px 12px;display:flex;flex-direction:column;gap:4px;overflow-y:auto;z-index:80}
    .nav-item{display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:8px;text-decoration:none;font-size:.9rem;font-weight:400;color:var(--muted);transition:background .15s,color .15s}
    .nav-item svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:1.8;flex-shrink:0}
    .nav-item:hover{background:var(--accent-soft);color:var(--accent)}
    .nav-item.active{background:var(--accent);color:#fff;font-weight:500}
    .nav-item.active svg{stroke:#fff}

    main{margin-left:var(--sidebar-w);padding-top:var(--header-h);min-height:100vh}
 
    .transport-hero{
      position:relative;width:100%;height:300px;
      display:flex;align-items:center;justify-content:center;overflow:hidden;
    }
    .hero-bg{position:absolute;inset:0;display:flex;align-items:center;justify-content:center}
    .hero-icon-big{width:120px;height:120px;opacity:.08}
    .hero-icon-big svg{width:100%;height:100%;stroke:var(--text);fill:none;stroke-width:1}
    .hero-overlay{position:absolute;inset:0;background:linear-gradient(135deg,rgba(1,56,25,.85) 0%,rgba(1,56,25,.6) 100%)}
    .hero-content{position:relative;z-index:2;text-align:center;color:#fff;padding:0 40px}
    .hero-compagnie{font-size:.78rem;font-weight:600;letter-spacing:.12em;text-transform:uppercase;opacity:.8;margin-bottom:8px}
    .hero-route{font-family:'Playfair Display',serif;font-size:2.6rem;font-weight:700;line-height:1.1;margin-bottom:12px}
    .hero-route .arrow{font-family:'DM Sans',sans-serif;font-weight:300;opacity:.7;margin:0 12px}
    .hero-meta{display:flex;align-items:center;justify-content:center;gap:16px;flex-wrap:wrap}
    .hero-chip{background:rgba(255,255,255,.15);border:1px solid rgba(255,255,255,.25);backdrop-filter:blur(4px);padding:5px 14px;border-radius:99px;font-size:.78rem;font-weight:500;display:flex;align-items:center;gap:5px}
    .hero-chip svg{width:12px;height:12px;stroke:currentColor;fill:none;stroke-width:2}
    .type-badge{position:absolute;top:20px;left:20px;padding:6px 16px;border-radius:99px;font-size:.72rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;backdrop-filter:blur(4px);border:1px solid rgba(255,255,255,.3);background:rgba(255,255,255,.2);color:#fff}

    .content-wrap{display:flex;gap:32px;padding:36px 40px 80px;align-items:flex-start}
    .content-main{flex:1;min-width:0}

    .info-cards{display:flex;gap:14px;flex-wrap:wrap;margin-bottom:28px}
    .info-card{background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);padding:16px 20px;display:flex;flex-direction:column;gap:4px;flex:1;min-width:110px}
    .info-card-label{font-size:.66rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}
    .info-card-value{font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:700;color:var(--accent)}
    .info-card-sub{font-size:.72rem;color:var(--muted)}

    .section-label{font-size:.72rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:10px}
    .section-title-lg{font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;margin-bottom:16px}

    .timeline{position:relative;padding-left:28px;margin-bottom:28px}
    .timeline::before{content:'';position:absolute;left:8px;top:6px;bottom:6px;width:2px;background:var(--border)}
    .tl-item{position:relative;margin-bottom:20px}
    .tl-item:last-child{margin-bottom:0}
    .tl-dot{position:absolute;left:-24px;top:4px;width:12px;height:12px;border-radius:50%;background:var(--accent);border:2px solid var(--surface);box-shadow:0 0 0 2px var(--accent)}
    .tl-dot.empty{background:var(--surface);border-color:var(--border);box-shadow:0 0 0 2px var(--border)}
    .tl-time{font-size:.72rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;color:var(--muted);margin-bottom:2px}
    .tl-city{font-size:1rem;font-weight:600;color:var(--text)}
    .tl-sub{font-size:.78rem;color:var(--muted);margin-top:2px}
    .tl-dur{display:flex;align-items:center;gap:6px;padding:8px 0 8px 0;font-size:.78rem;color:var(--muted);font-style:italic}
    .tl-dur::before{content:'';display:block;width:18px;height:1px;background:var(--border)}

    .tags-row{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:28px}
    .tag{display:inline-flex;align-items:center;gap:5px;padding:5px 13px;border-radius:99px;font-size:.75rem;font-weight:600}
    .tag svg{width:11px;height:11px;stroke:currentColor;fill:none;stroke-width:2}
    .tag-eco{background:#e4f5ea;color:#013819;border:1px solid #c0dcc4}
    .tag-biz{background:#fff8e1;color:#b8860b;border:1px solid #ffe082}
    .tag-pre{background:#f3e5f5;color:#6a1b9a;border:1px solid #ce93d8}
    .tag-direct{background:#e4f5ea;color:#013819;border:1px solid #c0dcc4}
    .tag-escale{background:#fff3e0;color:#e65100;border:1px solid #ffcc80}
    .tag-places{background:#fce4ec;color:#880e4f;border:1px solid #f48fb1}
    .tag-info{background:var(--bg);color:var(--muted);border:1px solid var(--border)}

    .detail-table{background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);overflow:hidden;margin-bottom:28px}
    .dt-row{display:flex;align-items:center;padding:12px 18px;border-bottom:1px solid var(--border)}
    .dt-row:last-child{border-bottom:none}
    .dt-label{font-size:.78rem;font-weight:600;color:var(--muted);width:160px;flex-shrink:0;text-transform:uppercase;letter-spacing:.04em}
    .dt-value{font-size:.88rem;color:var(--text)}

    .booking-sidebar{width:300px;flex-shrink:0;background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);padding:24px;position:sticky;top:calc(var(--header-h) + 24px);box-shadow:0 4px 24px rgba(0,0,0,.08)}
    .booking-price-label{font-size:.72rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);margin-bottom:4px}
    .booking-price-val{font-family:'Playfair Display',serif;font-size:2rem;font-weight:700;color:var(--accent)}
    .booking-price-pp{font-size:.78rem;color:var(--muted)}
    .booking-divider{height:1px;background:var(--border);margin:16px 0}
    .booking-section-label{font-size:.68rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);margin-bottom:10px}
    .voy-row{display:flex;align-items:center;justify-content:space-between;padding:10px 0;border-bottom:1px solid var(--border)}
    .voy-row:last-of-type{border-bottom:none}
    .voy-label{font-size:.875rem;font-weight:500}
    .voy-label small{display:block;font-size:.72rem;color:var(--muted);font-weight:400}
    .voy-counter{display:flex;align-items:center;gap:10px}
    .voy-btn{width:30px;height:30px;border-radius:50%;border:1.5px solid var(--border);background:transparent;font-size:1.1rem;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:background .15s,border-color .15s;color:var(--text)}
    .voy-btn:hover{background:var(--accent-soft);border-color:var(--accent);color:var(--accent)}
    .voy-count{font-weight:700;min-width:22px;text-align:center;font-size:1rem}
    .booking-total{margin-top:16px;padding:14px 16px;background:var(--accent-soft);border:1.5px solid #c0dcc4;border-radius:10px;display:flex;align-items:center;justify-content:space-between}
    .booking-total-label{font-size:.8rem;font-weight:600;color:var(--accent)}
    .booking-total-val{font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;color:var(--accent)}
    .booking-total-detail{font-size:.72rem;color:var(--muted);text-align:right;margin-top:4px}
    .btn-reserver{display:block;width:100%;margin-top:16px;height:48px;background:var(--accent);color:#fff;border:none;border-radius:10px;font-family:'DM Sans',sans-serif;font-size:1rem;font-weight:600;cursor:pointer;transition:background .18s,transform .12s}
    .btn-reserver:hover{background:#086720}
    .btn-reserver:active{transform:scale(.98)}
    .btn-reserver:disabled{background:var(--border);color:var(--muted);cursor:not-allowed}
    .booking-note-info{margin-top:12px;font-size:.75rem;color:var(--muted);text-align:center;line-height:1.5}

    .places-bar-wrap{margin-bottom:28px}
    .places-bar-label{display:flex;justify-content:space-between;font-size:.78rem;color:var(--muted);margin-bottom:6px}
    .places-bar-track{height:6px;background:var(--border);border-radius:3px;overflow:hidden}
    .places-bar-fill{height:100%;border-radius:3px;background:var(--accent);transition:width .4s ease}

    .error-state{margin-left:var(--sidebar-w);padding-top:var(--header-h);display:flex;flex-direction:column;align-items:center;justify-content:center;min-height:60vh;gap:16px;text-align:center}
    .error-state svg{width:56px;height:56px;stroke:var(--muted);fill:none;stroke-width:1.2;opacity:.4}
    .error-state h2{font-family:'Playfair Display',serif;font-size:1.6rem}
    .error-state p{color:var(--muted);font-size:.9rem}
    .error-state a{margin-top:8px;padding:10px 24px;background:var(--accent);color:#fff;border-radius:8px;text-decoration:none;font-weight:600;font-size:.9rem}

    footer{background:var(--text);color:rgba(255,255,255,.7)}
    .footer-inner{padding:40px 48px 28px;margin-left:var(--sidebar-w)}
    .footer-grid{display:grid;grid-template-columns:2fr 1fr 1fr 1fr;gap:40px;margin-bottom:32px}
    .footer-brand-name{font-family:'Playfair Display',serif;font-size:1.4rem;font-weight:700;color:#fff;margin-bottom:10px}
    .footer-tagline{font-size:.875rem;line-height:1.6;margin-bottom:16px}
    .footer-col h4{font-size:.8rem;font-weight:600;text-transform:uppercase;letter-spacing:.08em;color:#fff;margin-bottom:14px}
    .footer-col a{display:block;color:rgba(255,255,255,.6);text-decoration:none;font-size:.875rem;margin-bottom:8px;transition:color .15s}
    .footer-col a:hover{color:var(--accent-soft)}
    .footer-bottom{border-top:1px solid rgba(255,255,255,.12);padding-top:20px;display:flex;align-items:center;justify-content:space-between;font-size:.8rem}
    .footer-bottom-links{display:flex;gap:20px}
    .footer-bottom-links a{color:rgba(255,255,255,.5);text-decoration:none}
    .footer-bottom-links a:hover{color:#fff}

    #toast{position:fixed;bottom:32px;left:50%;transform:translateX(-50%) translateY(20px);background:var(--text);color:#fff;padding:14px 24px;border-radius:10px;font-size:.875rem;font-weight:500;opacity:0;pointer-events:none;transition:opacity .3s,transform .3s;z-index:999;white-space:nowrap;box-shadow:0 4px 20px rgba(0,0,0,.25)}
    #toast.show{opacity:1;transform:translateX(-50%) translateY(0)}
  </style>
</head>
<body>

<header>
  <div class="header-left">
    <a href="Accueil.php" class="logo">
      <div class="logo-badge"><span>VoyageVista</span></div>
    </a>
    <a href="transport.php" class="btn-back">
      <svg viewBox="0 0 24 24"><polyline points="15 18 9 12 15 6"/></svg>
      Retour aux transports
    </a>
  </div>
  <div class="header-right">
    <a href="mon-espace.php" class="icon-btn" title="Mon espace">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
    </a>
    <a href="notifications.php" class="icon-btn" title="Notifications">
      <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
      <span class="dot"></span>
    </a>
    <button class="btn-connexion" onclick="window.location='connexion.html'">Connexion</button>
  </div>
</header>

<aside id="sidebar">
  <a href="Accueil.php" class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Accueil</a>
  <a href="catalogue.php" class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Catalogue</a>
  <a href="transport.php" class="nav-item active"><svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>Transport</a>
  <a href="hebergement.php" class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>Hébergement</a>
  <a href="activites.php" class="nav-item"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Activités</a>
  <a href="itineraire.php" class="nav-item"><svg viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><polyline points="8 7 3 12 8 17"/><polyline points="16 7 21 12 16 17"/></svg>Itinéraire</a>
  <a href="panier.php" class="nav-item"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>Panier</a>
  <a href="notifications.php" class="nav-item"><svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>Notifications</a>
  <a href="mon-espace.php" class="nav-item"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>Mon espace</a>
</aside>

<div id="app"></div>

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
        <a href="mon-espace.php">Mon espace</a>
        <a href="panier.php">Mon panier</a>
        <a href="itineraire.php">Mes itinéraires</a>
      </div>
      <div class="footer-col">
        <h4>Informations</h4>
        <a href="a_propos.html">À propos</a>
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

<div id="toast"></div>

<script>
// ══════════════════════════════════════════════
//  DONNÉES (identiques à transport.html)
// ══════════════════════════════════════════════
const TRANSPORTS = [
  {id:1,  compagnie:'Ryanair',         type:'avion',  numero:'FR3401',     depart:'Paris Beauvais', arrivee:'Lisbonne',  dateDepart:'2026-06-03', heureDepart:'06:30', dateArrivee:'2026-06-03', heureArrivee:'08:35', duree:125,  classe:'economique', prix:29,  places:189},
  {id:2,  compagnie:'Ryanair',         type:'avion',  numero:'FR3401',     depart:'Paris Beauvais', arrivee:'Lisbonne',  dateDepart:'2026-06-10', heureDepart:'06:30', dateArrivee:'2026-06-10', heureArrivee:'08:35', duree:125,  classe:'economique', prix:39,  places:175},
  {id:3,  compagnie:'Easyjet',         type:'avion',  numero:'U24571',     depart:'Paris CDG',      arrivee:'Lisbonne',  dateDepart:'2026-06-05', heureDepart:'07:15', dateArrivee:'2026-06-05', heureArrivee:'09:20', duree:125,  classe:'economique', prix:52,  places:156},
  {id:4,  compagnie:'Easyjet',         type:'avion',  numero:'U24571',     depart:'Paris CDG',      arrivee:'Lisbonne',  dateDepart:'2026-06-15', heureDepart:'07:15', dateArrivee:'2026-06-15', heureArrivee:'09:20', duree:125,  classe:'economique', prix:65,  places:140},
  {id:5,  compagnie:'Transavia',       type:'avion',  numero:'TO6310',     depart:'Paris Orly',     arrivee:'Lisbonne',  dateDepart:'2026-07-01', heureDepart:'09:45', dateArrivee:'2026-07-01', heureArrivee:'11:50', duree:125,  classe:'economique', prix:48,  places:168},
  {id:6,  compagnie:'Wizz Air',        type:'avion',  numero:'W6401',      depart:'Paris CDG',      arrivee:'Budapest',  dateDepart:'2026-06-04', heureDepart:'07:00', dateArrivee:'2026-06-04', heureArrivee:'09:25', duree:145,  classe:'economique', prix:28,  places:230},
  {id:7,  compagnie:'Wizz Air',        type:'avion',  numero:'W6401',      depart:'Paris CDG',      arrivee:'Budapest',  dateDepart:'2026-06-18', heureDepart:'07:00', dateArrivee:'2026-06-18', heureArrivee:'09:25', duree:145,  classe:'economique', prix:35,  places:210},
  {id:8,  compagnie:'Ryanair',         type:'avion',  numero:'FR8821',     depart:'Paris Beauvais', arrivee:'Budapest',  dateDepart:'2026-06-06', heureDepart:'11:20', dateArrivee:'2026-06-06', heureArrivee:'13:45', duree:145,  classe:'economique', prix:22,  places:189},
  {id:9,  compagnie:'Ryanair',         type:'avion',  numero:'FR8821',     depart:'Paris Beauvais', arrivee:'Budapest',  dateDepart:'2026-07-03', heureDepart:'11:20', dateArrivee:'2026-07-03', heureArrivee:'13:45', duree:145,  classe:'economique', prix:42,  places:170},
  {id:10, compagnie:'Easyjet',         type:'avion',  numero:'U28801',     depart:'Paris CDG',      arrivee:'Budapest',  dateDepart:'2026-06-20', heureDepart:'14:00', dateArrivee:'2026-06-20', heureArrivee:'16:25', duree:145,  classe:'economique', prix:38,  places:156},
  {id:11, compagnie:'Ryanair',         type:'avion',  numero:'FR5521',     depart:'Paris Beauvais', arrivee:'Prague',    dateDepart:'2026-06-04', heureDepart:'08:10', dateArrivee:'2026-06-04', heureArrivee:'10:20', duree:130,  classe:'economique', prix:19,  places:189},
  {id:12, compagnie:'Ryanair',         type:'avion',  numero:'FR5521',     depart:'Paris Beauvais', arrivee:'Prague',    dateDepart:'2026-06-18', heureDepart:'08:10', dateArrivee:'2026-06-18', heureArrivee:'10:20', duree:130,  classe:'economique', prix:31,  places:180},
  {id:13, compagnie:'Easyjet',         type:'avion',  numero:'U23301',     depart:'Paris CDG',      arrivee:'Prague',    dateDepart:'2026-06-07', heureDepart:'10:00', dateArrivee:'2026-06-07', heureArrivee:'12:10', duree:130,  classe:'economique', prix:45,  places:156},
  {id:14, compagnie:'Wizz Air',        type:'avion',  numero:'W6551',      depart:'Paris CDG',      arrivee:'Prague',    dateDepart:'2026-07-02', heureDepart:'06:45', dateArrivee:'2026-07-02', heureArrivee:'08:55', duree:130,  classe:'economique', prix:25,  places:200},
  {id:15, compagnie:'Transavia',       type:'avion',  numero:'TO4210',     depart:'Paris Orly',     arrivee:'Prague',    dateDepart:'2026-06-21', heureDepart:'12:30', dateArrivee:'2026-06-21', heureArrivee:'14:40', duree:130,  classe:'economique', prix:55,  places:145},
  {id:16, compagnie:'Ryanair',         type:'avion',  numero:'FR7210',     depart:'Paris Beauvais', arrivee:'Tenerife',  dateDepart:'2026-06-05', heureDepart:'06:00', dateArrivee:'2026-06-05', heureArrivee:'09:30', duree:210,  classe:'economique', prix:45,  places:189},
  {id:17, compagnie:'Ryanair',         type:'avion',  numero:'FR7210',     depart:'Paris Beauvais', arrivee:'Tenerife',  dateDepart:'2026-06-12', heureDepart:'06:00', dateArrivee:'2026-06-12', heureArrivee:'09:30', duree:210,  classe:'economique', prix:59,  places:175},
  {id:18, compagnie:'Transavia',       type:'avion',  numero:'TO7410',     depart:'Paris Orly',     arrivee:'Tenerife',  dateDepart:'2026-06-07', heureDepart:'10:30', dateArrivee:'2026-06-07', heureArrivee:'14:00', duree:210,  classe:'economique', prix:62,  places:168},
  {id:19, compagnie:'Transavia',       type:'avion',  numero:'TO7410',     depart:'Paris Orly',     arrivee:'Tenerife',  dateDepart:'2026-07-05', heureDepart:'10:30', dateArrivee:'2026-07-05', heureArrivee:'14:00', duree:210,  classe:'economique', prix:78,  places:150},
  {id:20, compagnie:'Vueling',         type:'avion',  numero:'VY8320',     depart:'Paris CDG',      arrivee:'Tenerife',  dateDepart:'2026-06-20', heureDepart:'07:15', dateArrivee:'2026-06-20', heureArrivee:'10:45', duree:210,  classe:'economique', prix:72,  places:156},
  {id:21, compagnie:'Vueling',         type:'avion',  numero:'VY4410',     depart:'Paris CDG',      arrivee:'Seville',   dateDepart:'2026-06-07', heureDepart:'08:00', dateArrivee:'2026-06-07', heureArrivee:'10:15', duree:135,  classe:'economique', prix:35,  places:180},
  {id:22, compagnie:'Ryanair',         type:'avion',  numero:'FR6610',     depart:'Paris Beauvais', arrivee:'Seville',   dateDepart:'2026-06-14', heureDepart:'06:45', dateArrivee:'2026-06-14', heureArrivee:'09:00', duree:135,  classe:'economique', prix:22,  places:189},
  {id:23, compagnie:'Ryanair',         type:'avion',  numero:'FR6610',     depart:'Paris Beauvais', arrivee:'Seville',   dateDepart:'2026-07-05', heureDepart:'06:45', dateArrivee:'2026-07-05', heureArrivee:'09:00', duree:135,  classe:'economique', prix:48,  places:170},
  {id:24, compagnie:'Transavia',       type:'avion',  numero:'TO5510',     depart:'Paris Orly',     arrivee:'Seville',   dateDepart:'2026-06-21', heureDepart:'11:00', dateArrivee:'2026-06-21', heureArrivee:'13:15', duree:135,  classe:'economique', prix:55,  places:145},
  {id:25, compagnie:'Easyjet',         type:'avion',  numero:'U29901',     depart:'Paris CDG',      arrivee:'Seville',   dateDepart:'2026-06-28', heureDepart:'09:30', dateArrivee:'2026-06-28', heureArrivee:'11:45', duree:135,  classe:'economique', prix:42,  places:156},
  {id:26, compagnie:'Ryanair',         type:'avion',  numero:'FR4401',     depart:'Paris Beauvais', arrivee:'Cracovie',  dateDepart:'2026-06-05', heureDepart:'07:30', dateArrivee:'2026-06-05', heureArrivee:'10:10', duree:160,  classe:'economique', prix:18,  places:189},
  {id:27, compagnie:'Ryanair',         type:'avion',  numero:'FR4401',     depart:'Paris Beauvais', arrivee:'Cracovie',  dateDepart:'2026-06-19', heureDepart:'07:30', dateArrivee:'2026-06-19', heureArrivee:'10:10', duree:160,  classe:'economique', prix:29,  places:175},
  {id:28, compagnie:'Wizz Air',        type:'avion',  numero:'W6301',      depart:'Paris CDG',      arrivee:'Cracovie',  dateDepart:'2026-07-03', heureDepart:'06:00', dateArrivee:'2026-07-03', heureArrivee:'08:40', duree:160,  classe:'economique', prix:24,  places:200},
  {id:29, compagnie:'Easyjet',         type:'avion',  numero:'U27701',     depart:'Paris CDG',      arrivee:'Cracovie',  dateDepart:'2026-06-12', heureDepart:'10:00', dateArrivee:'2026-06-12', heureArrivee:'12:40', duree:160,  classe:'economique', prix:49,  places:156},
  {id:30, compagnie:'Transavia',       type:'avion',  numero:'TO3310',     depart:'Paris Orly',     arrivee:'Cracovie',  dateDepart:'2026-06-26', heureDepart:'12:00', dateArrivee:'2026-06-26', heureArrivee:'14:40', duree:160,  classe:'economique', prix:58,  places:140},
  {id:31, compagnie:'Ryanair',         type:'avion',  numero:'FR2210',     depart:'Paris Beauvais', arrivee:'Marrakech', dateDepart:'2026-06-05', heureDepart:'07:00', dateArrivee:'2026-06-05', heureArrivee:'08:50', duree:110,  classe:'economique', prix:25,  places:189},
  {id:32, compagnie:'Ryanair',         type:'avion',  numero:'FR2210',     depart:'Paris Beauvais', arrivee:'Marrakech', dateDepart:'2026-06-12', heureDepart:'07:00', dateArrivee:'2026-06-12', heureArrivee:'08:50', duree:110,  classe:'economique', prix:32,  places:175},
  {id:33, compagnie:'Transavia',       type:'avion',  numero:'TO1810',     depart:'Paris Orly',     arrivee:'Marrakech', dateDepart:'2026-06-08', heureDepart:'09:00', dateArrivee:'2026-06-08', heureArrivee:'10:50', duree:110,  classe:'economique', prix:39,  places:168},
  {id:34, compagnie:'Transavia',       type:'avion',  numero:'TO1810',     depart:'Paris Orly',     arrivee:'Marrakech', dateDepart:'2026-07-06', heureDepart:'09:00', dateArrivee:'2026-07-06', heureArrivee:'10:50', duree:110,  classe:'economique', prix:52,  places:150},
  {id:35, compagnie:'Easyjet',         type:'avion',  numero:'U21101',     depart:'Paris CDG',      arrivee:'Marrakech', dateDepart:'2026-06-19', heureDepart:'10:15', dateArrivee:'2026-06-19', heureArrivee:'12:05', duree:110,  classe:'economique', prix:45,  places:156},
  {id:36, compagnie:'AirAsia X',       type:'avion',  numero:'D7301',      depart:'Paris CDG',      arrivee:'Bali',      dateDepart:'2026-06-10', heureDepart:'21:00', dateArrivee:'2026-06-12', heureArrivee:'07:00', duree:1440, classe:'economique', prix:380, places:150},
  {id:37, compagnie:'AirAsia X',       type:'avion',  numero:'D7301',      depart:'Paris CDG',      arrivee:'Bali',      dateDepart:'2026-06-24', heureDepart:'21:00', dateArrivee:'2026-06-26', heureArrivee:'07:00', duree:1440, classe:'economique', prix:420, places:130},
  {id:38, compagnie:'Scoot',           type:'avion',  numero:'TR901',      depart:'Paris CDG',      arrivee:'Bali',      dateDepart:'2026-07-01', heureDepart:'19:30', dateArrivee:'2026-07-03', heureArrivee:'05:30', duree:1440, classe:'economique', prix:350, places:160},
  {id:39, compagnie:'Scoot',           type:'avion',  numero:'TR901',      depart:'Paris CDG',      arrivee:'Bali',      dateDepart:'2026-07-15', heureDepart:'19:30', dateArrivee:'2026-07-17', heureArrivee:'05:30', duree:1440, classe:'economique', prix:395, places:140},
  {id:40, compagnie:'Norwegian',       type:'avion',  numero:'DY7510',     depart:'Paris CDG',      arrivee:'Bali',      dateDepart:'2026-06-17', heureDepart:'20:45', dateArrivee:'2026-06-19', heureArrivee:'06:45', duree:1440, classe:'economique', prix:410, places:145},
  {id:41, compagnie:'AirAsia X',       type:'avion',  numero:'D7201',      depart:'Paris CDG',      arrivee:'Hanoi',     dateDepart:'2026-06-08', heureDepart:'20:00', dateArrivee:'2026-06-09', heureArrivee:'17:30', duree:1290, classe:'economique', prix:290, places:160},
  {id:42, compagnie:'AirAsia X',       type:'avion',  numero:'D7201',      depart:'Paris CDG',      arrivee:'Hanoi',     dateDepart:'2026-06-22', heureDepart:'20:00', dateArrivee:'2026-06-23', heureArrivee:'17:30', duree:1290, classe:'economique', prix:320, places:145},
  {id:43, compagnie:'Scoot',           type:'avion',  numero:'TR801',      depart:'Paris CDG',      arrivee:'Hanoi',     dateDepart:'2026-07-06', heureDepart:'18:30', dateArrivee:'2026-07-07', heureArrivee:'16:00', duree:1290, classe:'economique', prix:275, places:170},
  {id:44, compagnie:'VietJet Air',     type:'avion',  numero:'VJ901',      depart:'Paris CDG',      arrivee:'Hanoi',     dateDepart:'2026-06-15', heureDepart:'21:00', dateArrivee:'2026-06-16', heureArrivee:'18:30', duree:1290, classe:'economique', prix:305, places:155},
  {id:45, compagnie:'Jetstar',         type:'avion',  numero:'JQ501',      depart:'Paris CDG',      arrivee:'Hanoi',     dateDepart:'2026-07-01', heureDepart:'19:45', dateArrivee:'2026-07-02', heureArrivee:'17:15', duree:1290, classe:'economique', prix:260, places:180},
  {id:46, compagnie:'Corsair',         type:'avion',  numero:'SS901',      depart:'Paris Orly',     arrivee:'Zanzibar',  dateDepart:'2026-06-09', heureDepart:'10:00', dateArrivee:'2026-06-09', heureArrivee:'22:00', duree:720,  classe:'economique', prix:320, places:200},
  {id:47, compagnie:'Corsair',         type:'avion',  numero:'SS901',      depart:'Paris Orly',     arrivee:'Zanzibar',  dateDepart:'2026-07-07', heureDepart:'10:00', dateArrivee:'2026-07-07', heureArrivee:'22:00', duree:720,  classe:'economique', prix:360, places:185},
  {id:48, compagnie:'Condor',          type:'avion',  numero:'DE901',      depart:'Paris CDG',      arrivee:'Zanzibar',  dateDepart:'2026-06-14', heureDepart:'08:30', dateArrivee:'2026-06-14', heureArrivee:'20:30', duree:720,  classe:'economique', prix:298, places:210},
  {id:49, compagnie:'Condor',          type:'avion',  numero:'DE901',      depart:'Paris CDG',      arrivee:'Zanzibar',  dateDepart:'2026-07-05', heureDepart:'08:30', dateArrivee:'2026-07-05', heureArrivee:'20:30', duree:720,  classe:'economique', prix:335, places:190},
  {id:50, compagnie:'TUI fly',         type:'avion',  numero:'X31001',     depart:'Paris CDG',      arrivee:'Zanzibar',  dateDepart:'2026-06-28', heureDepart:'09:15', dateArrivee:'2026-06-28', heureArrivee:'21:15', duree:720,  classe:'economique', prix:280, places:220},
  {id:51, compagnie:'AirAsia X',       type:'avion',  numero:'D7401',      depart:'Paris CDG',      arrivee:'El Nido',   dateDepart:'2026-06-10', heureDepart:'20:00', dateArrivee:'2026-06-12', heureArrivee:'14:00', duree:1680, classe:'economique', prix:450, places:140},
  {id:52, compagnie:'AirAsia X',       type:'avion',  numero:'D7401',      depart:'Paris CDG',      arrivee:'El Nido',   dateDepart:'2026-07-01', heureDepart:'20:00', dateArrivee:'2026-07-03', heureArrivee:'14:00', duree:1680, classe:'economique', prix:490, places:125},
  {id:53, compagnie:'Cebu Pacific',    type:'avion',  numero:'5J901',      depart:'Paris CDG',      arrivee:'El Nido',   dateDepart:'2026-06-17', heureDepart:'21:30', dateArrivee:'2026-06-19', heureArrivee:'15:30', duree:1680, classe:'economique', prix:420, places:155},
  {id:54, compagnie:'Iberia Express',  type:'avion',  numero:'I2601',      depart:'Paris CDG',      arrivee:'San Jose',  dateDepart:'2026-06-12', heureDepart:'10:30', dateArrivee:'2026-06-12', heureArrivee:'18:30', duree:600,  classe:'economique', prix:380, places:160},
  {id:55, compagnie:'Iberia Express',  type:'avion',  numero:'I2601',      depart:'Paris CDG',      arrivee:'San Jose',  dateDepart:'2026-07-03', heureDepart:'10:30', dateArrivee:'2026-07-03', heureArrivee:'18:30', duree:600,  classe:'economique', prix:420, places:145},
  {id:56, compagnie:'Condor',          type:'avion',  numero:'DE501',      depart:'Paris CDG',      arrivee:'San Jose',  dateDepart:'2026-06-19', heureDepart:'09:00', dateArrivee:'2026-06-19', heureArrivee:'17:00', duree:600,  classe:'economique', prix:355, places:175},
  {id:57, compagnie:'Wizz Air',        type:'avion',  numero:'W6901',      depart:'Paris CDG',      arrivee:'Amman',     dateDepart:'2026-06-08', heureDepart:'06:00', dateArrivee:'2026-06-08', heureArrivee:'11:45', duree:345,  classe:'economique', prix:89,  places:200},
  {id:58, compagnie:'Wizz Air',        type:'avion',  numero:'W6901',      depart:'Paris CDG',      arrivee:'Amman',     dateDepart:'2026-06-22', heureDepart:'06:00', dateArrivee:'2026-06-22', heureArrivee:'11:45', duree:345,  classe:'economique', prix:105, places:185},
  {id:59, compagnie:'Ryanair',         type:'avion',  numero:'FR9901',     depart:'Paris Beauvais', arrivee:'Amman',     dateDepart:'2026-07-06', heureDepart:'05:30', dateArrivee:'2026-07-06', heureArrivee:'11:15', duree:345,  classe:'economique', prix:79,  places:189},
  {id:60, compagnie:'Ryanair',         type:'avion',  numero:'FR4510',     depart:'Marseille',      arrivee:'Marrakech', dateDepart:'2026-06-05', heureDepart:'08:00', dateArrivee:'2026-06-05', heureArrivee:'09:50', duree:110,  classe:'economique', prix:22,  places:189},
  {id:61, compagnie:'Ryanair',         type:'avion',  numero:'FR4510',     depart:'Marseille',      arrivee:'Marrakech', dateDepart:'2026-07-03', heureDepart:'08:00', dateArrivee:'2026-07-03', heureArrivee:'09:50', duree:110,  classe:'economique', prix:38,  places:175},
  {id:62, compagnie:'Vueling',         type:'avion',  numero:'VY5610',     depart:'Lyon',           arrivee:'Lisbonne',  dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-06', heureArrivee:'09:25', duree:115,  classe:'economique', prix:42,  places:156},
  {id:63, compagnie:'Vueling',         type:'avion',  numero:'VY5610',     depart:'Lyon',           arrivee:'Lisbonne',  dateDepart:'2026-06-20', heureDepart:'07:30', dateArrivee:'2026-06-20', heureArrivee:'09:25', duree:115,  classe:'economique', prix:55,  places:140},
  {id:64, compagnie:'Transavia',       type:'avion',  numero:'TO5412',     depart:'Lyon',           arrivee:'Tenerife',  dateDepart:'2026-06-08', heureDepart:'09:15', dateArrivee:'2026-06-08', heureArrivee:'12:25', duree:190,  classe:'economique', prix:58,  places:155},
  {id:65, compagnie:'Easyjet',         type:'avion',  numero:'U23301',     depart:'Nice',           arrivee:'Prague',    dateDepart:'2026-06-07', heureDepart:'10:00', dateArrivee:'2026-06-07', heureArrivee:'12:10', duree:130,  classe:'economique', prix:35,  places:156},
  {id:66, compagnie:'Ryanair',         type:'avion',  numero:'FR9021',     depart:'Bordeaux',       arrivee:'Budapest',  dateDepart:'2026-06-09', heureDepart:'06:45', dateArrivee:'2026-06-09', heureArrivee:'09:20', duree:155,  classe:'economique', prix:28,  places:189},
  {id:67, compagnie:'Ryanair',         type:'avion',  numero:'FR9021',     depart:'Bordeaux',       arrivee:'Budapest',  dateDepart:'2026-07-07', heureDepart:'06:45', dateArrivee:'2026-07-07', heureArrivee:'09:20', duree:155,  classe:'economique', prix:45,  places:175},
  {id:68, compagnie:'Renfe-SNCF',      type:'train',  numero:'TGV9731',    depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-06-05', heureDepart:'17:00', dateArrivee:'2026-06-06', heureArrivee:'09:30', duree:990,  classe:'economique', prix:52,  places:300},
  {id:69, compagnie:'Renfe-SNCF',      type:'train',  numero:'TGV9731',    depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-06-19', heureDepart:'17:00', dateArrivee:'2026-06-20', heureArrivee:'09:30', duree:990,  classe:'economique', prix:65,  places:280},
  {id:70, compagnie:'Renfe-SNCF',      type:'train',  numero:'TGV9731',    depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-07-03', heureDepart:'17:00', dateArrivee:'2026-07-04', heureArrivee:'09:30', duree:990,  classe:'economique', prix:78,  places:80},
  {id:71, compagnie:'Railjet',         type:'train',  numero:'RJ40',       depart:'Paris',          arrivee:'Budapest',  dateDepart:'2026-06-06', heureDepart:'07:22', dateArrivee:'2026-06-06', heureArrivee:'21:40', duree:858,  classe:'economique', prix:49,  places:350},
  {id:72, compagnie:'Railjet',         type:'train',  numero:'RJ40',       depart:'Paris',          arrivee:'Budapest',  dateDepart:'2026-06-20', heureDepart:'07:22', dateArrivee:'2026-06-20', heureArrivee:'21:40', duree:858,  classe:'economique', prix:58,  places:320},
  {id:73, compagnie:'Railjet',         type:'train',  numero:'RJ40',       depart:'Paris',          arrivee:'Budapest',  dateDepart:'2026-07-04', heureDepart:'07:22', dateArrivee:'2026-07-04', heureArrivee:'21:40', duree:858,  classe:'economique', prix:72,  places:60},
  {id:74, compagnie:'DB ICE',          type:'train',  numero:'ICE373',     depart:'Paris',          arrivee:'Prague',    dateDepart:'2026-06-04', heureDepart:'09:55', dateArrivee:'2026-06-04', heureArrivee:'19:15', duree:560,  classe:'economique', prix:39,  places:380},
  {id:75, compagnie:'DB ICE',          type:'train',  numero:'ICE373',     depart:'Paris',          arrivee:'Prague',    dateDepart:'2026-06-18', heureDepart:'09:55', dateArrivee:'2026-06-18', heureArrivee:'19:15', duree:560,  classe:'economique', prix:49,  places:350},
  {id:76, compagnie:'DB ICE',          type:'train',  numero:'ICE373',     depart:'Paris',          arrivee:'Prague',    dateDepart:'2026-07-02', heureDepart:'09:55', dateArrivee:'2026-07-02', heureArrivee:'19:15', duree:560,  classe:'economique', prix:62,  places:70},
  {id:77, compagnie:'Renfe AVE',       type:'train',  numero:'AVE102',     depart:'Paris',          arrivee:'Seville',   dateDepart:'2026-06-07', heureDepart:'08:15', dateArrivee:'2026-06-07', heureArrivee:'17:30', duree:615,  classe:'economique', prix:55,  places:290},
  {id:78, compagnie:'Renfe AVE',       type:'train',  numero:'AVE102',     depart:'Paris',          arrivee:'Seville',   dateDepart:'2026-06-21', heureDepart:'08:15', dateArrivee:'2026-06-21', heureArrivee:'17:30', duree:615,  classe:'economique', prix:69,  places:270},
  {id:79, compagnie:'SNCF + OBB',      type:'train',  numero:'NJ421',      depart:'Lyon',           arrivee:'Belgrade',  dateDepart:'2026-06-10', heureDepart:'18:30', dateArrivee:'2026-06-11', heureArrivee:'14:00', duree:1170, classe:'economique', prix:55,  places:200},
  {id:80, compagnie:'SNCF + OBB',      type:'train',  numero:'NJ421',      depart:'Lyon',           arrivee:'Belgrade',  dateDepart:'2026-07-08', heureDepart:'18:30', dateArrivee:'2026-07-09', heureArrivee:'14:00', duree:1170, classe:'economique', prix:68,  places:185},
  {id:81, compagnie:'PKP Intercity',   type:'train',  numero:'IC31',       depart:'Paris',          arrivee:'Cracovie',  dateDepart:'2026-06-05', heureDepart:'10:00', dateArrivee:'2026-06-05', heureArrivee:'22:30', duree:750,  classe:'economique', prix:45,  places:360},
  {id:82, compagnie:'PKP Intercity',   type:'train',  numero:'IC31',       depart:'Paris',          arrivee:'Cracovie',  dateDepart:'2026-06-19', heureDepart:'10:00', dateArrivee:'2026-06-19', heureArrivee:'22:30', duree:750,  classe:'economique', prix:55,  places:330},
  {id:83, compagnie:'PKP Intercity',   type:'train',  numero:'IC31',       depart:'Paris',          arrivee:'Cracovie',  dateDepart:'2026-07-10', heureDepart:'10:00', dateArrivee:'2026-07-10', heureArrivee:'22:30', duree:750,  classe:'economique', prix:68,  places:65},
  {id:84, compagnie:'Trenitalia',      type:'train',  numero:'EN242',      depart:'Nice',           arrivee:'Bar',       dateDepart:'2026-06-08', heureDepart:'20:15', dateArrivee:'2026-06-09', heureArrivee:'15:30', duree:1155, classe:'economique', prix:49,  places:200},
  {id:85, compagnie:'Trenitalia',      type:'train',  numero:'EN242',      depart:'Nice',           arrivee:'Bar',       dateDepart:'2026-07-06', heureDepart:'20:15', dateArrivee:'2026-07-07', heureArrivee:'15:30', duree:1155, classe:'economique', prix:59,  places:180},
  {id:86, compagnie:'Trenitalia',      type:'train',  numero:'IC504',      depart:'Paris',          arrivee:'Kotor',     dateDepart:'2026-06-09', heureDepart:'07:45', dateArrivee:'2026-06-10', heureArrivee:'18:00', duree:1455, classe:'economique', prix:65,  places:220},
  {id:87, compagnie:'Trenitalia',      type:'train',  numero:'IC504',      depart:'Paris',          arrivee:'Kotor',     dateDepart:'2026-07-07', heureDepart:'07:45', dateArrivee:'2026-07-08', heureArrivee:'18:00', duree:1455, classe:'economique', prix:79,  places:195},
  {id:88, compagnie:'TCDD',            type:'train',  numero:'TC101',      depart:'Paris',          arrivee:'Tbilissi',  dateDepart:'2026-06-11', heureDepart:'08:00', dateArrivee:'2026-06-14', heureArrivee:'10:00', duree:4320, classe:'economique', prix:98,  places:120},
  {id:89, compagnie:'TCDD',            type:'train',  numero:'TC101',      depart:'Paris',          arrivee:'Tbilissi',  dateDepart:'2026-07-09', heureDepart:'08:00', dateArrivee:'2026-07-12', heureArrivee:'10:00', duree:4320, classe:'economique', prix:112, places:100},
  {id:90, compagnie:'FlixBus',         type:'bus',    numero:'FX1210',     depart:'Paris',          arrivee:'Lisbonne',  dateDepart:'2026-06-04', heureDepart:'08:00', dateArrivee:'2026-06-05', heureArrivee:'11:00', duree:1620, classe:'economique', prix:29,  places:55},
  {id:91, compagnie:'FlixBus',         type:'bus',    numero:'FX1210',     depart:'Paris',          arrivee:'Lisbonne',  dateDepart:'2026-06-18', heureDepart:'08:00', dateArrivee:'2026-06-19', heureArrivee:'11:00', duree:1620, classe:'economique', prix:35,  places:50},
  {id:92, compagnie:'FlixBus',         type:'bus',    numero:'FX1210',     depart:'Paris',          arrivee:'Lisbonne',  dateDepart:'2026-07-02', heureDepart:'08:00', dateArrivee:'2026-07-03', heureArrivee:'11:00', duree:1620, classe:'economique', prix:42,  places:48},
  {id:93, compagnie:'FlixBus',         type:'bus',    numero:'FX2204',     depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-07', heureArrivee:'07:30', duree:1440, classe:'economique', prix:19,  places:60},
  {id:94, compagnie:'FlixBus',         type:'bus',    numero:'FX2204',     depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-06-20', heureDepart:'07:30', dateArrivee:'2026-06-21', heureArrivee:'07:30', duree:1440, classe:'economique', prix:24,  places:55},
  {id:95, compagnie:'Eurolines',       type:'bus',    numero:'EU2204',     depart:'Paris',          arrivee:'Madrid',    dateDepart:'2026-07-04', heureDepart:'09:00', dateArrivee:'2026-07-05', heureArrivee:'09:00', duree:1440, classe:'economique', prix:29,  places:58},
  {id:96, compagnie:'FlixBus',         type:'bus',    numero:'FX4401',     depart:'Paris',          arrivee:'Prague',    dateDepart:'2026-06-05', heureDepart:'09:30', dateArrivee:'2026-06-05', heureArrivee:'21:30', duree:720,  classe:'economique', prix:15,  places:60},
  {id:97, compagnie:'FlixBus',         type:'bus',    numero:'FX4401',     depart:'Paris',          arrivee:'Prague',    dateDepart:'2026-06-19', heureDepart:'09:30', dateArrivee:'2026-06-19', heureArrivee:'21:30', duree:720,  classe:'economique', prix:19,  places:55},
  {id:98, compagnie:'FlixBus',         type:'bus',    numero:'FX5512',     depart:'Paris',          arrivee:'Budapest',  dateDepart:'2026-06-07', heureDepart:'08:00', dateArrivee:'2026-06-07', heureArrivee:'23:30', duree:930,  classe:'economique', prix:18,  places:60},
  {id:99, compagnie:'FlixBus',         type:'bus',    numero:'FX5512',     depart:'Paris',          arrivee:'Budapest',  dateDepart:'2026-07-05', heureDepart:'08:00', dateArrivee:'2026-07-05', heureArrivee:'23:30', duree:930,  classe:'economique', prix:25,  places:52},
  {id:100,compagnie:'FlixBus',         type:'bus',    numero:'FX3301',     depart:'Paris',          arrivee:'Cracovie',  dateDepart:'2026-06-06', heureDepart:'07:00', dateArrivee:'2026-06-06', heureArrivee:'22:30', duree:930,  classe:'economique', prix:16,  places:58},
  {id:101,compagnie:'FlixBus',         type:'bus',    numero:'FX3301',     depart:'Paris',          arrivee:'Cracovie',  dateDepart:'2026-06-20', heureDepart:'07:00', dateArrivee:'2026-06-20', heureArrivee:'22:30', duree:930,  classe:'economique', prix:22,  places:52},
  {id:102,compagnie:'FlixBus',         type:'bus',    numero:'FX7720',     depart:'Lyon',           arrivee:'Seville',   dateDepart:'2026-06-08', heureDepart:'06:30', dateArrivee:'2026-06-09', heureArrivee:'08:00', duree:1530, classe:'economique', prix:32,  places:55},
  {id:103,compagnie:'FlixBus',         type:'bus',    numero:'FX7720',     depart:'Lyon',           arrivee:'Seville',   dateDepart:'2026-07-06', heureDepart:'06:30', dateArrivee:'2026-07-07', heureArrivee:'08:00', duree:1530, classe:'economique', prix:39,  places:48},
  {id:104,compagnie:'FlixBus',         type:'bus',    numero:'FX5501',     depart:'Marseille',      arrivee:'Belgrade',  dateDepart:'2026-06-09', heureDepart:'07:00', dateArrivee:'2026-06-10', heureArrivee:'07:00', duree:1440, classe:'economique', prix:28,  places:55},
  {id:105,compagnie:'FlixBus',         type:'bus',    numero:'FX5501',     depart:'Marseille',      arrivee:'Belgrade',  dateDepart:'2026-07-07', heureDepart:'07:00', dateArrivee:'2026-07-08', heureArrivee:'07:00', duree:1440, classe:'economique', prix:35,  places:50},
  {id:106,compagnie:'Eurolines',       type:'bus',    numero:'EU8810',     depart:'Paris',          arrivee:'Marrakech', dateDepart:'2026-06-05', heureDepart:'06:00', dateArrivee:'2026-06-06', heureArrivee:'21:00', duree:2220, classe:'economique', prix:42,  places:50},
  {id:107,compagnie:'Eurolines',       type:'bus',    numero:'EU8810',     depart:'Paris',          arrivee:'Marrakech', dateDepart:'2026-07-03', heureDepart:'06:00', dateArrivee:'2026-07-04', heureArrivee:'21:00', duree:2220, classe:'economique', prix:48,  places:45},
  {id:108,compagnie:'FlixBus',         type:'bus',    numero:'FX6610',     depart:'Paris',          arrivee:'Seville',   dateDepart:'2026-06-07', heureDepart:'07:00', dateArrivee:'2026-06-08', heureArrivee:'08:30', duree:1530, classe:'economique', prix:22,  places:58},
  {id:109,compagnie:'FlixBus',         type:'bus',    numero:'FX6610',     depart:'Paris',          arrivee:'Seville',   dateDepart:'2026-06-21', heureDepart:'07:00', dateArrivee:'2026-06-22', heureArrivee:'08:30', duree:1530, classe:'economique', prix:28,  places:52},
  {id:110,compagnie:'Algerie Ferries', type:'ferrie', numero:'AF501',      depart:'Marseille',      arrivee:'Alger',     dateDepart:'2026-06-05', heureDepart:'14:00', dateArrivee:'2026-06-06', heureArrivee:'09:00', duree:1140, classe:'economique', prix:58,  places:400},
  {id:111,compagnie:'Algerie Ferries', type:'ferrie', numero:'AF501',      depart:'Marseille',      arrivee:'Alger',     dateDepart:'2026-06-12', heureDepart:'14:00', dateArrivee:'2026-06-13', heureArrivee:'09:00', duree:1140, classe:'economique', prix:65,  places:380},
  {id:112,compagnie:'SNCM',            type:'ferrie', numero:'SN205',      depart:'Marseille',      arrivee:'Alger',     dateDepart:'2026-06-19', heureDepart:'16:00', dateArrivee:'2026-06-20', heureArrivee:'11:00', duree:1140, classe:'economique', prix:52,  places:420},
  {id:113,compagnie:'CTN',             type:'ferrie', numero:'CT301',      depart:'Marseille',      arrivee:'Tunis',     dateDepart:'2026-06-06', heureDepart:'12:00', dateArrivee:'2026-06-07', heureArrivee:'10:00', duree:1320, classe:'economique', prix:62,  places:380},
  {id:114,compagnie:'CTN',             type:'ferrie', numero:'CT301',      depart:'Marseille',      arrivee:'Tunis',     dateDepart:'2026-06-20', heureDepart:'12:00', dateArrivee:'2026-06-21', heureArrivee:'10:00', duree:1320, classe:'economique', prix:70,  places:360},
  {id:115,compagnie:'Grimaldi Lines',  type:'ferrie', numero:'GL102',      depart:'Marseille',      arrivee:'Tunis',     dateDepart:'2026-07-04', heureDepart:'10:00', dateArrivee:'2026-07-05', heureArrivee:'08:00', duree:1320, classe:'economique', prix:55,  places:400},
  {id:116,compagnie:'Balearia',        type:'ferrie', numero:'BA401',      depart:'Barcelone',      arrivee:'Ibiza',     dateDepart:'2026-06-05', heureDepart:'09:00', dateArrivee:'2026-06-05', heureArrivee:'17:30', duree:510,  classe:'economique', prix:28,  places:300},
  {id:117,compagnie:'Balearia',        type:'ferrie', numero:'BA401',      depart:'Barcelone',      arrivee:'Ibiza',     dateDepart:'2026-06-19', heureDepart:'09:00', dateArrivee:'2026-06-19', heureArrivee:'17:30', duree:510,  classe:'economique', prix:35,  places:280},
  {id:118,compagnie:'Trasmediterranea',type:'ferrie', numero:'TM501',      depart:'Barcelone',      arrivee:'Ibiza',     dateDepart:'2026-07-03', heureDepart:'10:00', dateArrivee:'2026-07-03', heureArrivee:'18:30', duree:510,  classe:'economique', prix:42,  places:260},
  {id:119,compagnie:'Jadrolinija',     type:'ferrie', numero:'JA211',      depart:'Venise',         arrivee:'Split',     dateDepart:'2026-06-07', heureDepart:'10:00', dateArrivee:'2026-06-08', heureArrivee:'06:00', duree:1200, classe:'economique', prix:38,  places:250},
  {id:120,compagnie:'Jadrolinija',     type:'ferrie', numero:'JA211',      depart:'Venise',         arrivee:'Split',     dateDepart:'2026-06-21', heureDepart:'10:00', dateArrivee:'2026-06-22', heureArrivee:'06:00', duree:1200, classe:'economique', prix:45,  places:230},
  {id:121,compagnie:'Jadrolinija',     type:'ferrie', numero:'JA211',      depart:'Venise',         arrivee:'Split',     dateDepart:'2026-07-05', heureDepart:'10:00', dateArrivee:'2026-07-06', heureArrivee:'06:00', duree:1200, classe:'economique', prix:52,  places:210},
  {id:122,compagnie:'Jadrolinija',     type:'ferrie', numero:'JA315',      depart:'Ancone',         arrivee:'Split',     dateDepart:'2026-06-08', heureDepart:'20:00', dateArrivee:'2026-06-09', heureArrivee:'06:00', duree:600,  classe:'economique', prix:28,  places:300},
  {id:123,compagnie:'Jadrolinija',     type:'ferrie', numero:'JA315',      depart:'Ancone',         arrivee:'Split',     dateDepart:'2026-06-22', heureDepart:'20:00', dateArrivee:'2026-06-23', heureArrivee:'06:00', duree:600,  classe:'economique', prix:35,  places:280},
  {id:124,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',      depart:'Athenes',        arrivee:'Santorin',  dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-06', heureArrivee:'16:00', duree:510,  classe:'economique', prix:25,  places:400},
  {id:125,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',      depart:'Athenes',        arrivee:'Santorin',  dateDepart:'2026-06-13', heureDepart:'07:30', dateArrivee:'2026-06-13', heureArrivee:'16:00', duree:510,  classe:'economique', prix:28,  places:380},
  {id:126,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',      depart:'Athenes',        arrivee:'Santorin',  dateDepart:'2026-07-04', heureDepart:'07:30', dateArrivee:'2026-07-04', heureArrivee:'16:00', duree:510,  classe:'economique', prix:35,  places:360},
  {id:127,compagnie:'Hellenic Seaways',type:'ferrie', numero:'HS202',      depart:'Athenes',        arrivee:'Santorin',  dateDepart:'2026-06-20', heureDepart:'08:00', dateArrivee:'2026-06-20', heureArrivee:'17:30', duree:570,  classe:'economique', prix:22,  places:350},
  {id:128,compagnie:'FRS',             type:'ferrie', numero:'FR101',      depart:'Algeciras',      arrivee:'Tanger',    dateDepart:'2026-06-05', heureDepart:'10:00', dateArrivee:'2026-06-05', heureArrivee:'11:20', duree:80,   classe:'economique', prix:12,  places:500},
  {id:129,compagnie:'Balearia',        type:'ferrie', numero:'BA201',      depart:'Algeciras',      arrivee:'Tanger',    dateDepart:'2026-06-12', heureDepart:'09:00', dateArrivee:'2026-06-12', heureArrivee:'10:20', duree:80,   classe:'economique', prix:10,  places:480},
  {id:130,compagnie:'Europcar',        type:'voiture',numero:'LOC-PAR-01', depart:'Paris',          arrivee:'Paris',     dateDepart:'2026-06-05', heureDepart:'08:00', dateArrivee:'2026-06-12', heureArrivee:'08:00', duree:0,    classe:'economique', prix:22,  places:50},
  {id:131,compagnie:'Sixt',            type:'voiture',numero:'LOC-PAR-02', depart:'Paris',          arrivee:'Paris',     dateDepart:'2026-06-10', heureDepart:'09:00', dateArrivee:'2026-06-17', heureArrivee:'09:00', duree:0,    classe:'economique', prix:18,  places:45},
  {id:132,compagnie:'Europcar',        type:'voiture',numero:'LOC-LIS-01', depart:'Lisbonne',       arrivee:'Lisbonne',  dateDepart:'2026-06-05', heureDepart:'10:00', dateArrivee:'2026-06-12', heureArrivee:'10:00', duree:0,    classe:'economique', prix:15,  places:40},
  {id:133,compagnie:'Hertz',           type:'voiture',numero:'LOC-LIS-02', depart:'Lisbonne',       arrivee:'Lisbonne',  dateDepart:'2026-06-12', heureDepart:'10:00', dateArrivee:'2026-06-19', heureArrivee:'10:00', duree:0,    classe:'economique', prix:18,  places:35},
  {id:134,compagnie:'Bali Car Rental', type:'voiture',numero:'LOC-BAL-01', depart:'Bali',           arrivee:'Bali',      dateDepart:'2026-06-11', heureDepart:'09:00', dateArrivee:'2026-06-18', heureArrivee:'09:00', duree:0,    classe:'economique', prix:8,   places:60},
  {id:135,compagnie:'Bali Car Rental', type:'voiture',numero:'LOC-BAL-02', depart:'Bali',           arrivee:'Bali',      dateDepart:'2026-07-02', heureDepart:'09:00', dateArrivee:'2026-07-09', heureArrivee:'09:00', duree:0,    classe:'economique', prix:10,  places:55},
  {id:136,compagnie:'Avis Maroc',      type:'voiture',numero:'LOC-MAR-01', depart:'Marrakech',      arrivee:'Marrakech', dateDepart:'2026-06-06', heureDepart:'09:00', dateArrivee:'2026-06-13', heureArrivee:'09:00', duree:0,    classe:'economique', prix:12,  places:40},
  {id:137,compagnie:'Budget',          type:'voiture',numero:'LOC-MAR-02', depart:'Marrakech',      arrivee:'Marrakech', dateDepart:'2026-07-04', heureDepart:'09:00', dateArrivee:'2026-07-11', heureArrivee:'09:00', duree:0,    classe:'economique', prix:10,  places:45},
  {id:138,compagnie:'Georgian Car',    type:'voiture',numero:'LOC-TBI-01', depart:'Tbilissi',       arrivee:'Tbilissi',  dateDepart:'2026-06-08', heureDepart:'10:00', dateArrivee:'2026-06-15', heureArrivee:'10:00', duree:0,    classe:'economique', prix:9,   places:50},
  {id:139,compagnie:'Georgian Car',    type:'voiture',numero:'LOC-TBI-02', depart:'Tbilissi',       arrivee:'Tbilissi',  dateDepart:'2026-07-06', heureDepart:'10:00', dateArrivee:'2026-07-13', heureArrivee:'10:00', duree:0,    classe:'economique', prix:11,  places:45},
  {id:140,compagnie:'Vietnam Car',     type:'voiture',numero:'LOC-HAN-01', depart:'Hanoi',          arrivee:'Hanoi',     dateDepart:'2026-06-09', heureDepart:'10:00', dateArrivee:'2026-06-16', heureArrivee:'10:00', duree:0,    classe:'economique', prix:7,   places:55},
  {id:141,compagnie:'Vietnam Car',     type:'voiture',numero:'LOC-HAN-02', depart:'Hanoi',          arrivee:'Hanoi',     dateDepart:'2026-07-02', heureDepart:'10:00', dateArrivee:'2026-07-09', heureArrivee:'10:00', duree:0,    classe:'economique', prix:8,   places:50},
  {id:142,compagnie:'Europcar',        type:'voiture',numero:'LOC-BUD-01', depart:'Budapest',       arrivee:'Budapest',  dateDepart:'2026-06-07', heureDepart:'09:00', dateArrivee:'2026-06-14', heureArrivee:'09:00', duree:0,    classe:'economique', prix:14,  places:45},
  {id:143,compagnie:'Sixt',            type:'voiture',numero:'LOC-BUD-02', depart:'Budapest',       arrivee:'Budapest',  dateDepart:'2026-07-05', heureDepart:'09:00', dateArrivee:'2026-07-12', heureArrivee:'09:00', duree:0,    classe:'economique', prix:16,  places:40},
];

function fmtDuree(min) {
  if (!min) return '–';
  const h = Math.floor(min/60), m = min%60;
  return m > 0 ? `${h}h${String(m).padStart(2,'0')}` : `${h}h`;
}
function fmtDate(d) {
  if (!d) return '';
  const [y,mo,da] = d.split('-');
  const months = ['janvier','février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre'];
  return `${parseInt(da)} ${months[parseInt(mo)-1]} ${y}`;
}
const TYPE_LABELS  = {avion:'Vol',train:'Train',bus:'Bus',voiture:'Location de voiture',ferrie:'Ferry'};
const TYPE_COLORS  = {avion:'#013819',train:'#0d47a1',bus:'#e65100',voiture:'#6a1b9a',ferrie:'#00695c'};
const CLASSE_LABELS= {economique:'Économique',business:'Business',premiere:'Première classe'};

function typeIcon(type) {
  const icons = {
    avion: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>`,
    train: `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16"/><path d="M12 3v8"/><circle cx="8.5" cy="17" r="1.5"/><circle cx="15.5" cy="17" r="1.5"/></svg>`,
    bus:   `<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 6v6M15 6v6M2 12h19.6M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3"/><circle cx="7" cy="18" r="2"/><path d="M9 18h5"/><circle cx="16" cy="18" r="2"/></svg>`,
    voiture:`<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M19 17H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2z"/><circle cx="7.5" cy="17" r="1.5"/><circle cx="16.5" cy="17" r="1.5"/><path d="m5 9 2-4h10l2 4"/></svg>`,
    ferrie:`<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.2.5 4 1.62 6"/><path d="M10 11V2l3 3 3-3v9"/></svg>`,
  };
  return icons[type] || '';
}

const params = new URLSearchParams(window.location.search);
const id = parseInt(params.get('id'));
const t  = TRANSPORTS.find(x => x.id === id);

if (!t) {
  document.getElementById('app').innerHTML = `
    <div class="error-state">
      <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <h2>Transport introuvable</h2>
      <p>Ce transport n'existe pas ou a été supprimé.</p>
      <a href="transport.html">← Retour aux transports</a>
    </div>`;
} else {
  document.title = `VoyageVista – ${t.compagnie} · ${t.depart} → ${t.arrivee}`;

  const isVoiture = t.type === 'voiture';
  const days = isVoiture ? Math.round((new Date(t.dateArrivee) - new Date(t.dateDepart)) / 86400000) : 0;
  const isEscale = t.type === 'avion' && t.duree >= 300;
  const prixLabel = isVoiture ? `${t.prix} €/jour` : `${t.prix} €`;
  const prixSub   = isVoiture ? 'par jour' : 'par personne';
  const placesRatio = Math.min(100, Math.round((t.places / 500) * 100));

  const classeBadge = t.classe === 'economique'
    ? `<span class="tag tag-eco"><svg viewBox="0 0 24 24"><path d="M20 7H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/></svg>Économique</span>`
    : t.classe === 'business'
    ? `<span class="tag tag-biz">Business</span>`
    : `<span class="tag tag-pre">Première classe</span>`;

  const escaleBadge = t.type === 'avion'
    ? (isEscale ? `<span class="tag tag-escale">1 escale</span>` : `<span class="tag tag-direct">Direct</span>`)
    : '';

  const placesBadge = t.places <= 50
    ? `<span class="tag tag-places">${t.places} places restantes</span>` : '';

  document.getElementById('app').innerHTML = `
  <main>

    <!-- HERO -->
    <div class="transport-hero" style="background:${TYPE_COLORS[t.type]};">
      <div class="hero-bg">
        <div class="hero-icon-big" style="color:#fff">${typeIcon(t.type)}</div>
      </div>
      <div class="hero-overlay"></div>
      <div class="type-badge">${TYPE_LABELS[t.type]}</div>
      <div class="hero-content">
        <div class="hero-compagnie">${t.compagnie} · ${t.numero}</div>
        ${isVoiture
          ? `<div class="hero-route">${t.compagnie}<span class="arrow">–</span>Location</div>`
          : `<div class="hero-route">${t.depart}<span class="arrow">→</span>${t.arrivee}</div>`
        }
        <div class="hero-meta">
          <span class="hero-chip">
            <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
            ${fmtDate(t.dateDepart)}
          </span>
          ${!isVoiture ? `<span class="hero-chip">
            <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            ${fmtDuree(t.duree)}
          </span>` : `<span class="hero-chip">${days} jour${days>1?'s':''} de location</span>`}
          <span class="hero-chip">${t.prix} € ${isVoiture ? '/jour' : '/pers.'}</span>
        </div>
      </div>
    </div>

    <!-- CONTENT -->
    <div class="content-wrap">
      <div class="content-main">

        <!-- INFO CARDS -->
        <div class="info-cards">
          <div class="info-card">
            <span class="info-card-label">Compagnie</span>
            <span class="info-card-value" style="font-size:.95rem;">${t.compagnie}</span>
            <span class="info-card-sub">N° ${t.numero}</span>
          </div>
          ${isVoiture ? `
          <div class="info-card">
            <span class="info-card-label">Lieu</span>
            <span class="info-card-value" style="font-size:.95rem;">${t.depart}</span>
            <span class="info-card-sub">Prise en charge</span>
          </div>
          <div class="info-card">
            <span class="info-card-label">Durée</span>
            <span class="info-card-value">${days} j</span>
            <span class="info-card-sub">${fmtDate(t.dateDepart)} → ${fmtDate(t.dateArrivee)}</span>
          </div>` : `
          <div class="info-card">
            <span class="info-card-label">Départ</span>
            <span class="info-card-value" style="font-size:.95rem;">${t.heureDepart}</span>
            <span class="info-card-sub">${fmtDate(t.dateDepart)}</span>
          </div>
          <div class="info-card">
            <span class="info-card-label">Arrivée</span>
            <span class="info-card-value" style="font-size:.95rem;">${t.heureArrivee}</span>
            <span class="info-card-sub">${fmtDate(t.dateArrivee)}</span>
          </div>
          <div class="info-card">
            <span class="info-card-label">Durée</span>
            <span class="info-card-value">${fmtDuree(t.duree)}</span>
            <span class="info-card-sub">${isEscale ? '1 escale' : 'Direct'}</span>
          </div>`}
          <div class="info-card">
            <span class="info-card-label">Prix</span>
            <span class="info-card-value">${t.prix} €</span>
            <span class="info-card-sub">${prixSub}</span>
          </div>
        </div>

        <!-- TAGS -->
        <div class="tags-row">
          ${classeBadge}${escaleBadge}${placesBadge}
          <span class="tag tag-info">${TYPE_LABELS[t.type]}</span>
          <span class="tag tag-info">${t.numero}</span>
        </div>

        <!-- TIMELINE (pas pour voitures) -->
        ${!isVoiture ? `
        <div class="section-label">Itinéraire</div>
        <div class="timeline">
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-time">${t.heureDepart} · ${fmtDate(t.dateDepart)}</div>
            <div class="tl-city">${t.depart}</div>
            <div class="tl-sub">Départ</div>
          </div>
          ${isEscale ? `
          <div class="tl-item">
            <div class="tl-dot empty"></div>
            <div class="tl-dur">Escale en route · durée variable</div>
          </div>` : `
          <div class="tl-item">
            <div class="tl-dur">${fmtDuree(t.duree)} de trajet</div>
          </div>`}
          <div class="tl-item">
            <div class="tl-dot"></div>
            <div class="tl-time">${t.heureArrivee} · ${fmtDate(t.dateArrivee)}</div>
            <div class="tl-city">${t.arrivee}</div>
            <div class="tl-sub">Arrivée</div>
          </div>
        </div>` : ''}

        <!-- TABLEAU DE DÉTAILS -->
        <div class="section-label" style="margin-top:8px;">Informations détaillées</div>
        <div class="detail-table">
          <div class="dt-row"><span class="dt-label">Compagnie</span><span class="dt-value">${t.compagnie}</span></div>
          <div class="dt-row"><span class="dt-label">Numéro</span><span class="dt-value">${t.numero}</span></div>
          <div class="dt-row"><span class="dt-label">Type</span><span class="dt-value">${TYPE_LABELS[t.type]}</span></div>
          <div class="dt-row"><span class="dt-label">Classe</span><span class="dt-value">${CLASSE_LABELS[t.classe] || t.classe}</span></div>
          ${isVoiture ? `
          <div class="dt-row"><span class="dt-label">Lieu de retrait</span><span class="dt-value">${t.depart}</span></div>
          <div class="dt-row"><span class="dt-label">Date de retrait</span><span class="dt-value">${fmtDate(t.dateDepart)} à ${t.heureDepart}</span></div>
          <div class="dt-row"><span class="dt-label">Date de retour</span><span class="dt-value">${fmtDate(t.dateArrivee)} à ${t.heureArrivee}</span></div>
          <div class="dt-row"><span class="dt-label">Durée location</span><span class="dt-value">${days} jour${days>1?'s':''}</span></div>` : `
          <div class="dt-row"><span class="dt-label">Ville de départ</span><span class="dt-value">${t.depart}</span></div>
          <div class="dt-row"><span class="dt-label">Ville d'arrivée</span><span class="dt-value">${t.arrivee}</span></div>
          <div class="dt-row"><span class="dt-label">Date de départ</span><span class="dt-value">${fmtDate(t.dateDepart)} à ${t.heureDepart}</span></div>
          <div class="dt-row"><span class="dt-label">Date d'arrivée</span><span class="dt-value">${fmtDate(t.dateArrivee)} à ${t.heureArrivee}</span></div>
          <div class="dt-row"><span class="dt-label">Durée</span><span class="dt-value">${fmtDuree(t.duree)}${isEscale ? ' (avec escale)' : ' (direct)'}</span></div>`}
          <div class="dt-row"><span class="dt-label">Places disponibles</span><span class="dt-value">${t.places}</span></div>
        </div>

        <!-- BARRE PLACES -->
        <div class="places-bar-wrap">
          <div class="places-bar-label">
            <span>Disponibilité</span>
            <span>${t.places} places restantes</span>
          </div>
          <div class="places-bar-track">
            <div class="places-bar-fill" style="width:${placesRatio}%"></div>
          </div>
        </div>

      </div>

      <!-- BOOKING SIDEBAR -->
      <aside class="booking-sidebar">
        <div class="booking-price">
          <div class="booking-price-label">Prix ${isVoiture ? 'par jour' : 'par personne'}</div>
          <div>
            <span class="booking-price-val">${t.prix} €</span>
            <span class="booking-price-pp"> ${isVoiture ? '/jour' : '/pers.'}</span>
          </div>
          ${isVoiture ? `<div style="font-size:.78rem;color:var(--muted);margin-top:6px;">Location ${days} jour${days>1?'s':''} · du ${fmtDate(t.dateDepart)} au ${fmtDate(t.dateArrivee)}</div>` : ''}
        </div>

        <div class="booking-divider"></div>

        ${isVoiture ? `
        <!-- Voiture : 1 véhicule, prix total = jours × prix/jour -->
        <div class="booking-section-label">Véhicules</div>
        <div class="voy-row">
          <div class="voy-label">Nombre de véhicules <small>1 véhicule max par réservation</small></div>
          <div class="voy-counter">
            <button class="voy-btn" onclick="changeCount('vehicules',-1)">−</button>
            <span class="voy-count" id="vehiculesCount">1</span>
            <button class="voy-btn" onclick="changeCount('vehicules',1)">+</button>
          </div>
        </div>
        ` : `
        <!-- Transport passagers -->
        <div class="booking-section-label">Voyageurs</div>
        <div class="voy-row">
          <div class="voy-label">Adultes <small>18 ans et +</small></div>
          <div class="voy-counter">
            <button class="voy-btn" onclick="changeCount('adults',-1)">−</button>
            <span class="voy-count" id="adultsCount">1</span>
            <button class="voy-btn" onclick="changeCount('adults',1)">+</button>
          </div>
        </div>
        <div class="voy-row">
          <div class="voy-label">Enfants <small>2 – 17 ans</small></div>
          <div class="voy-counter">
            <button class="voy-btn" onclick="changeCount('children',-1)">−</button>
            <span class="voy-count" id="childrenCount">0</span>
            <button class="voy-btn" onclick="changeCount('children',1)">+</button>
          </div>
        </div>`}

        <div class="booking-total">
          <div class="booking-total-label">Total estimé</div>
          <div class="booking-total-val" id="totalPrice">${isVoiture ? t.prix * days : t.prix} €</div>
        </div>
        <div class="booking-total-detail" id="totalDetail">
          ${isVoiture ? `1 véhicule × ${days} jours × ${t.prix} €` : `1 adulte × ${t.prix} €`}
        </div>

        <button class="btn-reserver" id="btnReserver" onclick="ajouterAuPanier()">
          ${isVoiture ? 'Réserver ce véhicule' : 'Réserver ce transport'}
        </button>
        <p class="booking-note-info">Annulation gratuite sous 48 h. Sans frais cachés.</p>
      </aside>

    </div>
  </main>`;

  const sidebar = document.getElementById('sidebar');
  const footer  = document.getElementById('footer');
  function updateSidebarBottom() {
    const footerTop = footer.getBoundingClientRect().top;
    const winH = window.innerHeight;
    sidebar.style.bottom = footerTop < winH ? (winH - footerTop)+'px' : '0px';
  }
  window.addEventListener('scroll', updateSidebarBottom);
  window.addEventListener('resize', updateSidebarBottom);
  updateSidebarBottom();
}

const isVoiture = t ? t.type === 'voiture' : false;
const days = t && isVoiture ? Math.round((new Date(t.dateArrivee) - new Date(t.dateDepart)) / 86400000) : 0;
const counts = { adults: 1, children: 0, vehicules: 1 };

function changeCount(type, delta) {
  const min = 1; 
  counts[type] = Math.max(min, counts[type] + delta);
  const el = document.getElementById(type + 'Count');
  if (el) el.textContent = counts[type];
  updateTotal();
}

function updateTotal() {
  if (!t) return;
  let montant, detail;

  if (isVoiture) {
    montant = counts.vehicules * days * t.prix;
    detail  = `${counts.vehicules} véhicule${counts.vehicules>1?'s':''} × ${days} jours × ${t.prix} €`;
  } else {
    const total = counts.adults + counts.children;
    montant = total * t.prix;
    let parts = [];
    if (counts.adults)   parts.push(`${counts.adults} adulte${counts.adults>1?'s':''} × ${t.prix} €`);
    if (counts.children) parts.push(`${counts.children} enfant${counts.children>1?'s':''} × ${t.prix} €`);
    detail = parts.join(' + ');
  }

  const tp = document.getElementById('totalPrice');
  const td = document.getElementById('totalDetail');
  if (tp) tp.textContent = montant.toLocaleString('fr-FR') + ' €';
  if (td) td.textContent = detail;
}

function ajouterAuPanier() {
  if (!t) return;

  let montant, adultes, enfants, total_personnes;

  if (isVoiture) {
    montant       = counts.vehicules * days * t.prix;
    adultes       = counts.vehicules;
    enfants       = 0;
    total_personnes = counts.vehicules;
  } else {
    adultes        = counts.adults;
    enfants        = counts.children;
    total_personnes= counts.adults + counts.children;
    montant        = total_personnes * t.prix;
  }

  const item = {
    type_article:    'transport',          
    id_article:      t.id,
    nom:             `${t.compagnie} · ${t.depart} → ${t.arrivee}`,
    prix_unitaire:   t.prix,
    adultes:         adultes,
    enfants:         enfants,
    total_personnes: total_personnes,
    montant_total:   montant,
    type_transport:  t.type,
    numero:          t.numero,
    depart:          t.depart,
    arrivee:         t.arrivee,
    dateDepart:      t.dateDepart,
    heureDepart:     t.heureDepart,
    dateArrivee:     t.dateArrivee,
    heureArrivee:    t.heureArrivee,
    classe:          t.classe,
    duree_jours:     isVoiture ? days : null,
  };

  let panier = [];
  try { panier = JSON.parse(sessionStorage.getItem('voyagevista_panier') || '[]'); } catch(e) {}
  const idx = panier.findIndex(p => p.type_article === 'transport' && p.id_article === t.id);
  if (idx >= 0) panier[idx] = item; else panier.push(item);
  sessionStorage.setItem('voyagevista_panier', JSON.stringify(panier));

  showToast(`✓ ${t.compagnie} · ${t.depart} → ${t.arrivee} ajouté au panier !`);
}

function showToast(msg) {
  const toast = document.getElementById('toast');
  toast.textContent = msg;
  toast.classList.add('show');
  setTimeout(() => toast.classList.remove('show'), 3500);
}
</script>
</body>
</html>
