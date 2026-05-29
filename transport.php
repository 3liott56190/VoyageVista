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
:root{
  --bg:#f5f3ef;--surface:#ffffff;--border:#e2ddd6;
  --text:#1a1714;--muted:#788a7b;--accent:#013819;--accent-soft:#e4f5ea;
  --header-h:64px;--sidebar-w:200px;--radius:12px;
  --shadow:0 2px 16px rgba(0,0,0,.07);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html,body{overflow-x:hidden;font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);min-height:100vh}

/* HEADER */
header{position:fixed;top:0;left:0;right:0;height:var(--header-h);background:var(--surface);border-bottom:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;padding:0 28px 0 0;z-index:100;box-shadow:var(--shadow)}
.logo{display:flex;align-items:center;height:100%;text-decoration:none}
.logo-badge{height:var(--header-h);background:var(--accent);display:flex;align-items:center;padding:0 28px 0 24px;clip-path:polygon(0 0,calc(100% - 16px) 0,100% 50%,calc(100% - 16px) 100%,0 100%)}
.logo-badge span{font-family:'Playfair Display',serif;font-weight:700;font-size:1.25rem;color:#fff;letter-spacing:.02em;white-space:nowrap}
.header-right{display:flex;align-items:center;gap:8px}
.icon-btn{width:40px;height:40px;border:1.5px solid var(--border);border-radius:50%;background:transparent;cursor:pointer;display:flex;align-items:center;justify-content:center;color:var(--text);transition:background .18s,border-color .18s;text-decoration:none;position:relative}
.icon-btn:hover{background:var(--accent-soft);border-color:var(--accent)}
.icon-btn svg{width:18px;height:18px;stroke:currentColor;fill:none;stroke-width:1.8}
.icon-btn .dot{position:absolute;top:6px;right:6px;width:8px;height:8px;background:var(--accent);border-radius:50%;border:2px solid var(--surface)}
.btn-connexion{height:36px;padding:0 20px;border:1.5px solid var(--accent);border-radius:8px;background:transparent;font-family:'DM Sans',sans-serif;font-size:.875rem;font-weight:500;cursor:pointer;transition:background .18s,color .18s}
.btn-connexion:hover{background:var(--accent);color:#fff}

/* LAYOUT */
.layout{display:flex;padding-top:var(--header-h);min-height:100vh}

/* SIDEBAR */
aside{width:var(--sidebar-w);background:var(--surface);border-right:1px solid var(--border);position:fixed;top:var(--header-h);left:0;bottom:0;padding:20px 12px;display:flex;flex-direction:column;gap:4px;overflow-y:auto;overflow-x:hidden;z-index:40}
.nav-item{display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:8px;text-decoration:none;font-size:.9rem;font-weight:400;color:var(--muted);transition:background .15s,color .15s;cursor:pointer;border:none;background:transparent;width:100%;font-family:'DM Sans',sans-serif}
.nav-item svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:1.8;flex-shrink:0}
.nav-item:hover{background:var(--accent-soft);color:var(--accent)}
.nav-item.active{background:var(--accent);color:#fff;font-weight:500}
.nav-item.active svg{stroke:#fff}

/* MAIN */
main{margin-left:var(--sidebar-w);flex:1;min-width:0;display:flex;flex-direction:column}

/* STICKY SEARCH ZONE */
.search-zone{position:fixed;top:var(--header-h);left: var(--sidebar-w);right:0;z-index:50;background:var(--surface);border-bottom:1px solid var(--border);padding:0 32px;box-shadow:var(--shadow)}

/* TYPE TABS */
.type-tabs{display:flex;gap:0;border-bottom:2px solid var(--border)}
.type-tab{display:flex;align-items:center;gap:7px;padding:14px 18px;border:none;background:transparent;font-family:'DM Sans',sans-serif;font-size:.875rem;font-weight:500;color:var(--muted);cursor:pointer;border-bottom:2.5px solid transparent;margin-bottom:-2px;transition:color .18s,border-color .18s;white-space:nowrap}
.type-tab svg{width:15px;height:15px;stroke:currentColor;fill:none;stroke-width:1.8}
.type-tab:hover{color:var(--accent)}
.type-tab.active{color:var(--accent);border-bottom-color:var(--accent);font-weight:600}

/* SEARCH FORM */
.search-form-wrap{padding:14px 0 16px}
.trip-type-row{display:flex;gap:20px;margin-bottom:12px}
.radio-label{display:flex;align-items:center;gap:6px;font-size:.875rem;cursor:pointer;color:var(--muted)}
.radio-label input[type=radio]{accent-color:var(--accent);width:15px;height:15px}
.radio-label.active-label{color:var(--text);font-weight:500}

.search-bar{display:flex;align-items:stretch;background:var(--surface);border:1.5px solid var(--border);border-radius:12px;overflow:visible;box-shadow:0 2px 8px rgba(0,0,0,.05);position:relative}
.sf{flex:1;border:none;border-right:1px solid var(--border);padding:0;display:flex;flex-direction:column;justify-content:center;min-width:0}
.sf:last-of-type{border-right:none}
.sf label{font-size:.62rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);padding:8px 14px 2px;display:block}
.sf input{width:100%;border:none;outline:none;font-family:'DM Sans',sans-serif;font-size:.875rem;color:var(--text);background:transparent;padding:2px 14px 8px}
.sf input::placeholder{color:#c5bfb8}
.sf.wide{flex:1.4}
.sf-voy{position:relative;cursor:pointer;user-select:none;flex:1;border-right:1px solid var(--border)}
.sf-voy .voy-val{padding:2px 14px 8px;font-size:.875rem;color:var(--text)}
.sf-voy .voy-val.ph{color:#c5bfb8}
.btn-search{background:var(--accent);color:#fff;border:none;padding:0 28px;font-family:'DM Sans',sans-serif;font-size:.9rem;font-weight:600;cursor:pointer;transition:background .18s;white-space:nowrap;border-radius:0 10px 10px 0;flex-shrink:0}
.btn-search:hover{background:#025a28}
.btn-search:active{transform:scale(.97)}
#retourField{transition:opacity .2s}
#retourField.hidden{opacity:0;pointer-events:none;flex:0;border:none;padding:0;overflow:hidden;min-width:0;max-width:0}

/* Voyageurs dropdown */
.voy-panel{position:absolute;top:calc(100% + 8px);left:0;background:var(--surface);border:1px solid var(--border);border-radius:10px;box-shadow:0 8px 24px rgba(0,0,0,.12);padding:16px;min-width:220px;z-index:300;display:none}
.voy-panel.open{display:block}
.voy-row{display:flex;align-items:center;justify-content:space-between;padding:8px 0;border-bottom:1px solid var(--border)}
.voy-row:last-child{border-bottom:none}
.voy-label{font-size:.875rem}
.voy-label small{display:block;font-size:.72rem;color:var(--muted)}
.voy-counter{display:flex;align-items:center;gap:10px}
.voy-btn{width:26px;height:26px;border-radius:50%;border:1.5px solid var(--border);background:transparent;font-size:1rem;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all .15s;font-family:'DM Sans',sans-serif}
.voy-btn:hover{background:var(--accent-soft);border-color:var(--accent);color:var(--accent)}
.voy-count{font-weight:600;min-width:18px;text-align:center;font-size:.9rem}

/* CONTENT AREA */
.content-area{display:flex;flex:1;padding: 180px 32px 80px;gap:24px;align-items:flex-start}

/* RESULTS */
.results-col{flex:1;min-width:0}
.results-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;flex-wrap:wrap;gap:8px}
.results-count{font-size:.9rem;color:var(--muted)}
.results-count strong{color:var(--text);font-weight:600}
.sort-select{padding:7px 32px 7px 12px;border:1.5px solid var(--border);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.85rem;background:var(--surface);color:var(--text);cursor:pointer;outline:none;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23788a7b' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 10px center}
.sort-select:focus{border-color:var(--accent)}

/* TRANSPORT CARD */
.t-card{background:var(--surface);border:1.5px solid var(--border);border-radius:12px;padding:16px 20px;margin-bottom:12px;display:flex;align-items:center;gap:16px;transition:box-shadow .2s,transform .15s,border-color .2s;cursor:pointer}
.t-card:hover{box-shadow:0 6px 20px rgba(0,0,0,.1);transform:translateY(-2px);border-color:#c8d8cb}
.t-card:last-child{margin-bottom:0}

/* Company logo box */
.tc-logo{width:54px;height:54px;border-radius:10px;background:var(--bg);border:1px solid var(--border);display:flex;align-items:center;justify-content:center;font-size:.7rem;font-weight:700;color:var(--accent);flex-shrink:0;text-align:center;line-height:1.2;padding:4px;letter-spacing:.02em}
.tc-logo.train-logo{background:#e8f4fd;color:#0d47a1;border-color:#b3d4f5}
.tc-logo.bus-logo{background:#fff8e1;color:#e65100;border-color:#ffe082}
.tc-logo.ferry-logo{background:#e0f7fa;color:#00695c;border-color:#b2dfdb}
.tc-logo.car-logo{background:#f3e5f5;color:#6a1b9a;border-color:#ce93d8}

/* Card body */
.tc-body{flex:1;min-width:0}
.tc-route{display:flex;align-items:center;gap:8px;margin-bottom:5px;flex-wrap:wrap}
.tc-city{font-size:1rem;font-weight:600}
.tc-arrow{color:var(--muted);font-size:.85rem;flex-shrink:0}
.tc-time-range{font-size:.88rem;color:var(--muted);margin-bottom:5px}
.tc-tags{display:flex;align-items:center;gap:6px;flex-wrap:wrap}
.tag{display:inline-flex;align-items:center;padding:2px 9px;border-radius:99px;font-size:.7rem;font-weight:600}
.tag-eco{background:#e4f5ea;color:#013819}
.tag-biz{background:#fff8e1;color:#b8860b}
.tag-pre{background:#f3e5f5;color:#6a1b9a}
.tag-direct{background:#e4f5ea;color:#013819}
.tag-escale{background:#fff3e0;color:#e65100}
.tag-dur{background:var(--bg);color:var(--muted);border:1px solid var(--border)}
.tag-num{background:var(--bg);color:var(--muted);border:1px solid var(--border)}
.tag-places{background:#fce4ec;color:#880e4f}

/* Price */
.tc-price-col{text-align:right;flex-shrink:0;display:flex;flex-direction:column;align-items:flex-end;gap:6px}
.tc-price{font-family:'Playfair Display',serif;font-size:1.45rem;font-weight:700;color:var(--text);white-space:nowrap}
.tc-price-sub{font-size:.72rem;color:var(--muted)}
.btn-select{padding:6px 18px;border-radius:8px;border:1.5px solid var(--accent);background:transparent;color:var(--accent);font-size:.82rem;font-weight:600;cursor:pointer;transition:all .15s;font-family:'DM Sans',sans-serif;white-space:nowrap}
.btn-select:hover{background:var(--accent);color:#fff}

/* No results */
.no-results{text-align:center;padding:60px 20px;color:var(--muted)}
.no-results .emoji{font-size:2.5rem;margin-bottom:12px}
.no-results p{font-size:.95rem;margin-top:6px}

/* FILTERS PANEL */
.filters-panel{width:230px;flex-shrink:0}
.filters-sticky{position:sticky;top:190px;max-height:calc(100vh - 80px);overflow-y:auto;padding-right:2px}
.filters-sticky::-webkit-scrollbar{width:3px}
.filters-sticky::-webkit-scrollbar-thumb{background:var(--border);border-radius:3px}
.filter-card{background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:18px;box-shadow:var(--shadow)}
.filter-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px}
.filter-title{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--text)}
.filter-reset{font-size:.75rem;font-weight:500;color:var(--accent);cursor:pointer;text-decoration:underline;background:none;border:none;font-family:'DM Sans',sans-serif}
.f-section{margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid var(--border)}
.f-section:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.f-section-title{font-size:.78rem;font-weight:600;color:var(--text);margin-bottom:8px;text-transform:uppercase;letter-spacing:.04em}
.f-check,.f-radio{display:flex;align-items:center;gap:7px;padding:3px 0;cursor:pointer;font-size:.84rem;color:var(--text);user-select:none}
.f-check input,.f-radio input{accent-color:var(--accent);width:14px;height:14px;flex-shrink:0;cursor:pointer}
.price-wrap{margin-top:6px}
.price-slider{width:100%;accent-color:var(--accent);cursor:pointer}
.price-info{display:flex;justify-content:space-between;align-items:center;margin-top:6px}
.price-val{font-size:.82rem;font-weight:600;background:var(--bg);border:1px solid var(--border);border-radius:6px;padding:3px 10px;color:var(--text)}
.price-min{font-size:.75rem;color:var(--muted)}

/* FOOTER */
footer{background:var(--text);color:rgba(255,255,255,.7);width:100%}
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

#backToTop{position:fixed;bottom:32px;right:32px;width:46px;height:46px;border-radius:50%;background:var(--accent);color:#fff;border:none;cursor:pointer;display:flex;align-items:center;justify-content:center;box-shadow:0 4px 16px rgba(1,56,25,.4);opacity:0;pointer-events:none;transform:translateY(12px);transition:opacity .25s,transform .25s;z-index:200}
#backToTop.visible{opacity:1;pointer-events:auto;transform:translateY(0)}
#backToTop svg{width:20px;height:20px;stroke:#fff;fill:none;stroke-width:2.5}
</style>
</head>
<body>

<!-- ══ HEADER ══ -->
<header>
  <a href="Accueil.php" class="logo">
    <div class="logo-badge"><span>VoyageVista</span></div>
  </a>
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

<div class="layout">

<!-- ══ SIDEBAR ══ -->
<aside id="sidebar">
  <a href="Accueil.php" class="nav-item">
    <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Accueil
  </a>
  <a href="catalogue.php" class="nav-item">
    <svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Catalogue
  </a>
  <a href="transport.php" class="nav-item active">
    <svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>Transport
  </a>
  <a href="hebergement.php" class="nav-item">
    <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>Hebergement
  </a>
  <a href="activites.php" class="nav-item">
    <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Activites
  </a>
  <a href="itineraire.php" class="nav-item">
    <svg viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><polyline points="8 7 3 12 8 17"/><polyline points="16 7 21 12 16 17"/></svg>Itineraire
  </a>
  <a href="panier.php" class="nav-item">
    <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>Panier
  </a>
  <a href="notifications.php" class="nav-item">
    <svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>Notifications
  </a>
  <a href="mon-espace.php" class="nav-item">
    <svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>Mon espace
  </a>
</aside>

<!-- ══ MAIN ══ -->
<main>

  <!-- STICKY SEARCH ZONE -->
  <div class="search-zone" id="searchZone">

    <!-- Type tabs -->
    <div class="type-tabs">
      <button class="type-tab active" data-type="avion" onclick="switchType('avion',this)">
        <svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>
        Vols
      </button>
      <button class="type-tab" data-type="train" onclick="switchType('train',this)">
        <svg viewBox="0 0 24 24"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16"/><path d="M12 3v8"/><circle cx="8.5" cy="17" r="1.5"/><circle cx="15.5" cy="17" r="1.5"/><path d="M8.5 19 7 21"/><path d="m15.5 19 1.5 2"/></svg>
        Trains
      </button>
      <button class="type-tab" data-type="bus" onclick="switchType('bus',this)">
        <svg viewBox="0 0 24 24"><path d="M8 6v6"/><path d="M15 6v6"/><path d="M2 12h19.6"/><path d="M18 18h3s.5-1.7.8-2.8c.1-.4.2-.8.2-1.2 0-.4-.1-.8-.2-1.2l-1.4-5C20.1 6.8 19.1 6 18 6H4a2 2 0 0 0-2 2v10h3"/><circle cx="7" cy="18" r="2"/><path d="M9 18h5"/><circle cx="16" cy="18" r="2"/></svg>
        Bus
      </button>
      <button class="type-tab" data-type="voiture" onclick="switchType('voiture',this)">
        <svg viewBox="0 0 24 24"><path d="M19 17H5a2 2 0 0 1-2-2V9a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2z"/><circle cx="7.5" cy="17" r="1.5"/><circle cx="16.5" cy="17" r="1.5"/><path d="m5 9 2-4h10l2 4"/></svg>
        Voitures
      </button>
      <button class="type-tab" data-type="ferrie" onclick="switchType('ferrie',this)">
        <svg viewBox="0 0 24 24"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.2.5 4 1.62 6"/><path d="M10 11V2l3 3 3-3v9"/></svg>
        Ferries
      </button>
    </div>

    <!-- Search form -->
    <div class="search-form-wrap">
      <div class="trip-type-row" id="tripTypeRow">
        <label class="radio-label active-label">
          <input type="radio" name="tripType" value="aller-retour" checked onchange="onTripTypeChange(this)"> Aller-retour
        </label>
        <label class="radio-label">
          <input type="radio" name="tripType" value="aller" onchange="onTripTypeChange(this)"> Aller simple
        </label>
      </div>
      <div class="search-bar" id="searchBar">
        <div class="sf wide" id="departField">
          <label for="inDepart">Départ</label>
          <input id="inDepart" type="text" placeholder="Ville de départ" list="citiesDepart" autocomplete="off"/>
          <datalist id="citiesDepart"></datalist>
        </div>
        <div class="sf wide" id="arriveeField">
          <label for="inArrivee">Arrivée</label>
          <input id="inArrivee" type="text" placeholder="Ville d'arrivée" list="citiesArrivee" autocomplete="off"/>
          <datalist id="citiesArrivee"></datalist>
        </div>
        <div class="sf" id="dateAllerField">
          <label for="inDateAller">Date aller</label>
          <input id="inDateAller" type="date" min="2026-01-01"/>
        </div>
        <div class="sf" id="retourField">
          <label for="inDateRetour">Date retour</label>
          <input id="inDateRetour" type="date" min="2026-01-01"/>
        </div>
        <div class="sf-voy" id="voyField" onclick="toggleVoy(event)">
          <label>Voyageurs</label>
          <div class="voy-val ph" id="voyDisplay">Ajouter des voyageurs</div>
          <div class="voy-panel" id="voyPanel">
            <div class="voy-row">
              <div class="voy-label">Adultes <small>18 ans et +</small></div>
              <div class="voy-counter">
                <button class="voy-btn" onclick="changeVoy('adults',-1,event)">−</button>
                <span class="voy-count" id="cntAdults">0</span>
                <button class="voy-btn" onclick="changeVoy('adults',1,event)">+</button>
              </div>
            </div>
            <div class="voy-row">
              <div class="voy-label">Enfants <small>2–17 ans</small></div>
              <div class="voy-counter">
                <button class="voy-btn" onclick="changeVoy('children',-1,event)">−</button>
                <span class="voy-count" id="cntChildren">0</span>
                <button class="voy-btn" onclick="changeVoy('children',1,event)">+</button>
              </div>
            </div>
          </div>
        </div>
        <button class="btn-search" onclick="doSearch()">Rechercher</button>
      </div>
    </div>
  </div><!-- /search-zone -->

  <!-- CONTENT AREA -->
  <div class="content-area">

    <!-- Results column -->
    <div class="results-col">
      <div class="results-header">
        <div class="results-count" id="resultsCount">Chargement…</div>
        <select class="sort-select" id="sortSelect" onchange="applyAndRender()">
          <option value="prix-asc">Prix croissants</option>
          <option value="prix-desc">Prix décroissants</option>
          <option value="heure-asc">Heure de départ</option>
          <option value="duree-asc">Durée la plus courte</option>
        </select>
      </div>
      <div id="resultsList"></div>
    </div>

    <!-- Filters panel -->
    <div class="filters-panel">
      <div class="filters-sticky" id="filtersSticky">
        <div class="filter-card">
          <div class="filter-header">
            <span class="filter-title">Filtres</span>
            <button class="filter-reset" onclick="resetFilters()">Réinitialiser</button>
          </div>
          <div id="filtersContent"></div>
        </div>
      </div>
    </div>

  </div><!-- /content-area -->

</main>
</div><!-- /layout -->

<!-- ══ FOOTER ══ -->
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
        <a href="a-propos.php">À propos</a>
        <a href="cgu.php">CGU</a>
        <a href="contact.php">Contact</a>
        <a href="#">Réseaux sociaux</a>
      </div>
    </div>
    <div class="footer-bottom">
      <span>2025 VoyageVista – Tous droits réservés</span>
      <div class="footer-bottom-links">
        <a href="cgu.php">CGU</a>
        <a href="#">Confidentialité</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </div>
</footer>

<button id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
  <svg viewBox="0 0 24 24"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<script>
/* ═══════════════════════════════════════════════
   DATA — all transports from SQL
═══════════════════════════════════════════════ */
const TRANSPORTS = [
  // ── AVIONS Paris → destinations ──
  {id:1, compagnie:'Air France',       type:'avion', numero:'AF257',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-06-10', heureDepart:'09:00', dateArrivee:'2026-06-11', heureArrivee:'08:30', duree:1410, classe:'economique', prix:620,  places:180},
  {id:2, compagnie:'Air France',       type:'avion', numero:'AF257',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-06-17', heureDepart:'09:00', dateArrivee:'2026-06-18', heureArrivee:'08:30', duree:1410, classe:'economique', prix:650,  places:160},
  {id:3, compagnie:'KLM',              type:'avion', numero:'KL836',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-06-10', heureDepart:'11:30', dateArrivee:'2026-06-11', heureArrivee:'12:00', duree:1470, classe:'economique', prix:590,  places:200},
  {id:4, compagnie:'KLM',              type:'avion', numero:'KL836',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-07-01', heureDepart:'11:30', dateArrivee:'2026-07-02', heureArrivee:'12:00', duree:1470, classe:'economique', prix:680,  places:140},
  {id:5, compagnie:'Emirates',         type:'avion', numero:'EK076',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-06-15', heureDepart:'14:20', dateArrivee:'2026-06-16', heureArrivee:'16:50', duree:1470, classe:'business',   prix:1850, places:40},
  {id:6, compagnie:'Emirates',         type:'avion', numero:'EK076',   depart:'Paris',       arrivee:'Bali',             dateDepart:'2026-07-10', heureDepart:'14:20', dateArrivee:'2026-07-11', heureArrivee:'16:50', duree:1470, classe:'business',   prix:1950, places:30},
  {id:7, compagnie:'Vueling',          type:'avion', numero:'VY8320',  depart:'Paris',       arrivee:'Tenerife',         dateDepart:'2026-06-05', heureDepart:'07:15', dateArrivee:'2026-06-05', heureArrivee:'10:45', duree:210,  classe:'economique', prix:89,   places:190},
  {id:8, compagnie:'Vueling',          type:'avion', numero:'VY8320',  depart:'Paris',       arrivee:'Tenerife',         dateDepart:'2026-06-12', heureDepart:'07:15', dateArrivee:'2026-06-12', heureArrivee:'10:45', duree:210,  classe:'economique', prix:110,  places:175},
  {id:9, compagnie:'Transavia',        type:'avion', numero:'TO7410',  depart:'Paris',       arrivee:'Tenerife',         dateDepart:'2026-06-07', heureDepart:'10:30', dateArrivee:'2026-06-07', heureArrivee:'14:00', duree:210,  classe:'economique', prix:95,   places:180},
  {id:10,compagnie:'Transavia',        type:'avion', numero:'TO7410',  depart:'Paris',       arrivee:'Tenerife',         dateDepart:'2026-07-05', heureDepart:'10:30', dateArrivee:'2026-07-05', heureArrivee:'14:00', duree:210,  classe:'economique', prix:130,  places:150},
  {id:11,compagnie:'Air France',       type:'avion', numero:'AF1350',  depart:'Paris',       arrivee:'Tenerife',         dateDepart:'2026-06-20', heureDepart:'08:00', dateArrivee:'2026-06-20', heureArrivee:'11:30', duree:210,  classe:'economique', prix:145,  places:160},
  {id:12,compagnie:'TAP Air Portugal', type:'avion', numero:'TP432',   depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-03', heureDepart:'08:45', dateArrivee:'2026-06-03', heureArrivee:'10:55', duree:130,  classe:'economique', prix:79,   places:200},
  {id:13,compagnie:'TAP Air Portugal', type:'avion', numero:'TP432',   depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-10', heureDepart:'08:45', dateArrivee:'2026-06-10', heureArrivee:'10:55', duree:130,  classe:'economique', prix:95,   places:185},
  {id:14,compagnie:'Easyjet',          type:'avion', numero:'U24571',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-05', heureDepart:'06:30', dateArrivee:'2026-06-05', heureArrivee:'08:40', duree:130,  classe:'economique', prix:65,   places:220},
  {id:15,compagnie:'Easyjet',          type:'avion', numero:'U24571',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-15', heureDepart:'06:30', dateArrivee:'2026-06-15', heureArrivee:'08:40', duree:130,  classe:'economique', prix:72,   places:210},
  {id:16,compagnie:'Air France',       type:'avion', numero:'AF1010',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-07-01', heureDepart:'09:15', dateArrivee:'2026-07-01', heureArrivee:'11:25', duree:130,  classe:'business',   prix:320,  places:50},
  {id:17,compagnie:'Wizz Air',         type:'avion', numero:'W6401',   depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-04', heureDepart:'07:00', dateArrivee:'2026-06-04', heureArrivee:'09:30', duree:150,  classe:'economique', prix:55,   places:230},
  {id:18,compagnie:'Wizz Air',         type:'avion', numero:'W6401',   depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-18', heureDepart:'07:00', dateArrivee:'2026-06-18', heureArrivee:'09:30', duree:150,  classe:'economique', prix:68,   places:200},
  {id:19,compagnie:'Ryanair',          type:'avion', numero:'FR8821',  depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-06', heureDepart:'11:20', dateArrivee:'2026-06-06', heureArrivee:'13:50', duree:150,  classe:'economique', prix:48,   places:240},
  {id:20,compagnie:'Ryanair',          type:'avion', numero:'FR8821',  depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-07-03', heureDepart:'11:20', dateArrivee:'2026-07-03', heureArrivee:'13:50', duree:150,  classe:'economique', prix:75,   places:180},
  {id:21,compagnie:'Air France',       type:'avion', numero:'AF1230',  depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-10', heureDepart:'14:00', dateArrivee:'2026-06-10', heureArrivee:'16:30', duree:150,  classe:'business',   prix:290,  places:45},
  {id:22,compagnie:'Vietnam Airlines', type:'avion', numero:'VN010',   depart:'Paris',       arrivee:'Hanoi',            dateDepart:'2026-06-08', heureDepart:'10:15', dateArrivee:'2026-06-09', heureArrivee:'05:30', duree:1155, classe:'economique', prix:550,  places:170},
  {id:23,compagnie:'Vietnam Airlines', type:'avion', numero:'VN010',   depart:'Paris',       arrivee:'Hanoi',            dateDepart:'2026-06-22', heureDepart:'10:15', dateArrivee:'2026-06-23', heureArrivee:'05:30', duree:1155, classe:'economique', prix:580,  places:150},
  {id:24,compagnie:'Air France',       type:'avion', numero:'AF254',   depart:'Paris',       arrivee:'Hanoi',            dateDepart:'2026-07-01', heureDepart:'11:45', dateArrivee:'2026-07-02', heureArrivee:'07:00', duree:1155, classe:'economique', prix:610,  places:160},
  {id:25,compagnie:'Air France',       type:'avion', numero:'AF254',   depart:'Paris',       arrivee:'Hanoi',            dateDepart:'2026-07-15', heureDepart:'11:45', dateArrivee:'2026-07-16', heureArrivee:'07:00', duree:1155, classe:'business',   prix:1650, places:35},
  {id:26,compagnie:'Qatar Airways',    type:'avion', numero:'QR147',   depart:'Paris',       arrivee:'Hanoi',            dateDepart:'2026-06-12', heureDepart:'13:30', dateArrivee:'2026-06-13', heureArrivee:'10:00', duree:1230, classe:'economique', prix:490,  places:190},
  {id:27,compagnie:'Air France',       type:'avion', numero:'AF882',   depart:'Paris',       arrivee:'Zanzibar',         dateDepart:'2026-06-09', heureDepart:'08:30', dateArrivee:'2026-06-09', heureArrivee:'21:00', duree:750,  classe:'economique', prix:480,  places:160},
  {id:28,compagnie:'Air France',       type:'avion', numero:'AF882',   depart:'Paris',       arrivee:'Zanzibar',         dateDepart:'2026-07-07', heureDepart:'08:30', dateArrivee:'2026-07-07', heureArrivee:'21:00', duree:750,  classe:'economique', prix:520,  places:140},
  {id:29,compagnie:'Turkish Airlines', type:'avion', numero:'TK18',    depart:'Paris',       arrivee:'Zanzibar',         dateDepart:'2026-06-14', heureDepart:'10:00', dateArrivee:'2026-06-14', heureArrivee:'23:30', duree:810,  classe:'economique', prix:440,  places:200},
  {id:30,compagnie:'Turkish Airlines', type:'avion', numero:'TK18',    depart:'Paris',       arrivee:'Zanzibar',         dateDepart:'2026-07-05', heureDepart:'10:00', dateArrivee:'2026-07-05', heureArrivee:'23:30', duree:810,  classe:'business',   prix:1380, places:40},
  // ── Autres villes ──
  {id:31,compagnie:'Vueling',          type:'avion', numero:'VY5610',  depart:'Lyon',        arrivee:'Lisbonne',         dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-06', heureArrivee:'09:30', duree:120,  classe:'economique', prix:72,   places:190},
  {id:32,compagnie:'Vueling',          type:'avion', numero:'VY5610',  depart:'Lyon',        arrivee:'Lisbonne',         dateDepart:'2026-06-20', heureDepart:'07:30', dateArrivee:'2026-06-20', heureArrivee:'09:30', duree:120,  classe:'economique', prix:88,   places:170},
  {id:33,compagnie:'Transavia',        type:'avion', numero:'TO5412',  depart:'Lyon',        arrivee:'Tenerife',         dateDepart:'2026-06-08', heureDepart:'09:15', dateArrivee:'2026-06-08', heureArrivee:'12:30', duree:195,  classe:'economique', prix:98,   places:175},
  {id:34,compagnie:'Transavia',        type:'avion', numero:'TO5412',  depart:'Lyon',        arrivee:'Tenerife',         dateDepart:'2026-07-06', heureDepart:'09:15', dateArrivee:'2026-07-06', heureArrivee:'12:30', duree:195,  classe:'economique', prix:120,  places:150},
  {id:35,compagnie:'Air Arabia Maroc', type:'avion', numero:'MAC810',  depart:'Marseille',   arrivee:'Marrakech',        dateDepart:'2026-06-05', heureDepart:'08:00', dateArrivee:'2026-06-05', heureArrivee:'09:40', duree:100,  classe:'economique', prix:69,   places:210},
  {id:36,compagnie:'Air Arabia Maroc', type:'avion', numero:'MAC810',  depart:'Marseille',   arrivee:'Marrakech',        dateDepart:'2026-06-19', heureDepart:'08:00', dateArrivee:'2026-06-19', heureArrivee:'09:40', duree:100,  classe:'economique', prix:82,   places:195},
  {id:37,compagnie:'Ryanair',          type:'avion', numero:'FR4510',  depart:'Marseille',   arrivee:'Marrakech',        dateDepart:'2026-07-03', heureDepart:'11:00', dateArrivee:'2026-07-03', heureArrivee:'12:40', duree:100,  classe:'economique', prix:55,   places:230},
  {id:38,compagnie:'Easyjet',          type:'avion', numero:'U23301',  depart:'Nice',        arrivee:'Prague',           dateDepart:'2026-06-07', heureDepart:'10:00', dateArrivee:'2026-06-07', heureArrivee:'12:30', duree:150,  classe:'economique', prix:62,   places:200},
  {id:39,compagnie:'Easyjet',          type:'avion', numero:'U23301',  depart:'Nice',        arrivee:'Prague',           dateDepart:'2026-06-21', heureDepart:'10:00', dateArrivee:'2026-06-21', heureArrivee:'12:30', duree:150,  classe:'economique', prix:75,   places:180},
  {id:40,compagnie:'Ryanair',          type:'avion', numero:'FR9021',  depart:'Bordeaux',    arrivee:'Budapest',         dateDepart:'2026-06-09', heureDepart:'06:45', dateArrivee:'2026-06-09', heureArrivee:'09:30', duree:165,  classe:'economique', prix:58,   places:220},
  {id:41,compagnie:'Ryanair',          type:'avion', numero:'FR9021',  depart:'Bordeaux',    arrivee:'Budapest',         dateDepart:'2026-07-07', heureDepart:'06:45', dateArrivee:'2026-07-07', heureArrivee:'09:30', duree:165,  classe:'economique', prix:79,   places:190},
  {id:42,compagnie:'Philippine Airlines',type:'avion',numero:'PR731',  depart:'Paris',       arrivee:'El Nido',          dateDepart:'2026-06-10', heureDepart:'09:00', dateArrivee:'2026-06-11', heureArrivee:'18:30', duree:1770, classe:'economique', prix:720,  places:150},
  {id:43,compagnie:'Philippine Airlines',type:'avion',numero:'PR731',  depart:'Paris',       arrivee:'El Nido',          dateDepart:'2026-07-01', heureDepart:'09:00', dateArrivee:'2026-07-02', heureArrivee:'18:30', duree:1770, classe:'economique', prix:780,  places:130},
  {id:44,compagnie:'Air France',       type:'avion', numero:'AF488',   depart:'Paris',       arrivee:'San Jose',         dateDepart:'2026-06-12', heureDepart:'11:30', dateArrivee:'2026-06-12', heureArrivee:'19:45', duree:615,  classe:'economique', prix:560,  places:165},
  {id:45,compagnie:'Air France',       type:'avion', numero:'AF488',   depart:'Paris',       arrivee:'San Jose',         dateDepart:'2026-07-05', heureDepart:'11:30', dateArrivee:'2026-07-05', heureArrivee:'19:45', duree:615,  classe:'business',   prix:1480, places:40},
  {id:46,compagnie:'Royal Jordanian',  type:'avion', numero:'RJ119',   depart:'Paris',       arrivee:'Amman',            dateDepart:'2026-06-08', heureDepart:'14:00', dateArrivee:'2026-06-08', heureArrivee:'20:00', duree:360,  classe:'economique', prix:290,  places:175},
  {id:47,compagnie:'Royal Jordanian',  type:'avion', numero:'RJ119',   depart:'Paris',       arrivee:'Amman',            dateDepart:'2026-06-22', heureDepart:'14:00', dateArrivee:'2026-06-22', heureArrivee:'20:00', duree:360,  classe:'economique', prix:310,  places:160},
  {id:48,compagnie:'Air France',       type:'avion', numero:'AF2002',  depart:'Paris',       arrivee:'Amman',            dateDepart:'2026-07-10', heureDepart:'09:00', dateArrivee:'2026-07-10', heureArrivee:'15:00', duree:360,  classe:'business',   prix:990,  places:45},
  // ── TRAINS ──
  {id:49,compagnie:'Renfe-SNCF',       type:'train', numero:'TGV9731', depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-06-05', heureDepart:'17:00', dateArrivee:'2026-06-06', heureArrivee:'09:30', duree:990,  classe:'economique', prix:89,   places:300},
  {id:50,compagnie:'Renfe-SNCF',       type:'train', numero:'TGV9731', depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-06-19', heureDepart:'17:00', dateArrivee:'2026-06-20', heureArrivee:'09:30', duree:990,  classe:'economique', prix:105,  places:280},
  {id:51,compagnie:'Renfe-SNCF',       type:'train', numero:'TGV9731', depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-07-03', heureDepart:'17:00', dateArrivee:'2026-07-04', heureArrivee:'09:30', duree:990,  classe:'business',   prix:195,  places:80},
  {id:52,compagnie:'Railjet',          type:'train', numero:'RJ40',    depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-06', heureDepart:'07:22', dateArrivee:'2026-06-06', heureArrivee:'21:40', duree:858,  classe:'economique', prix:75,   places:350},
  {id:53,compagnie:'Railjet',          type:'train', numero:'RJ40',    depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-20', heureDepart:'07:22', dateArrivee:'2026-06-20', heureArrivee:'21:40', duree:858,  classe:'economique', prix:88,   places:320},
  {id:54,compagnie:'Railjet',          type:'train', numero:'RJ40',    depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-07-04', heureDepart:'07:22', dateArrivee:'2026-07-04', heureArrivee:'21:40', duree:858,  classe:'business',   prix:180,  places:60},
  {id:55,compagnie:'DB ICE',           type:'train', numero:'ICE373',  depart:'Paris',       arrivee:'Prague',           dateDepart:'2026-06-04', heureDepart:'09:55', dateArrivee:'2026-06-04', heureArrivee:'19:15', duree:560,  classe:'economique', prix:65,   places:380},
  {id:56,compagnie:'DB ICE',           type:'train', numero:'ICE373',  depart:'Paris',       arrivee:'Prague',           dateDepart:'2026-06-18', heureDepart:'09:55', dateArrivee:'2026-06-18', heureArrivee:'19:15', duree:560,  classe:'economique', prix:79,   places:350},
  {id:57,compagnie:'DB ICE',           type:'train', numero:'ICE373',  depart:'Paris',       arrivee:'Prague',           dateDepart:'2026-07-02', heureDepart:'09:55', dateArrivee:'2026-07-02', heureArrivee:'19:15', duree:560,  classe:'business',   prix:155,  places:70},
  {id:58,compagnie:'Renfe AVE',        type:'train', numero:'AVE102',  depart:'Paris',       arrivee:'Seville',          dateDepart:'2026-06-07', heureDepart:'08:15', dateArrivee:'2026-06-07', heureArrivee:'15:30', duree:555,  classe:'economique', prix:95,   places:290},
  {id:59,compagnie:'Renfe AVE',        type:'train', numero:'AVE102',  depart:'Paris',       arrivee:'Seville',          dateDepart:'2026-06-21', heureDepart:'08:15', dateArrivee:'2026-06-21', heureArrivee:'15:30', duree:555,  classe:'economique', prix:110,  places:270},
  {id:60,compagnie:'SNCF TGV',         type:'train', numero:'TGV6012', depart:'Lyon',        arrivee:'Belgrade',         dateDepart:'2026-06-10', heureDepart:'06:30', dateArrivee:'2026-06-10', heureArrivee:'22:00', duree:930,  classe:'economique', prix:82,   places:310},
  {id:61,compagnie:'SNCF TGV',         type:'train', numero:'TGV6012', depart:'Lyon',        arrivee:'Belgrade',         dateDepart:'2026-07-08', heureDepart:'06:30', dateArrivee:'2026-07-08', heureArrivee:'22:00', duree:930,  classe:'economique', prix:98,   places:280},
  {id:62,compagnie:'PKP Intercity',    type:'train', numero:'IC31',    depart:'Paris',       arrivee:'Cracovie',         dateDepart:'2026-06-05', heureDepart:'10:00', dateArrivee:'2026-06-05', heureArrivee:'22:30', duree:750,  classe:'economique', prix:72,   places:360},
  {id:63,compagnie:'PKP Intercity',    type:'train', numero:'IC31',    depart:'Paris',       arrivee:'Cracovie',         dateDepart:'2026-06-19', heureDepart:'10:00', dateArrivee:'2026-06-19', heureArrivee:'22:30', duree:750,  classe:'economique', prix:85,   places:330},
  {id:64,compagnie:'PKP Intercity',    type:'train', numero:'IC31',    depart:'Paris',       arrivee:'Cracovie',         dateDepart:'2026-07-10', heureDepart:'10:00', dateArrivee:'2026-07-10', heureArrivee:'22:30', duree:750,  classe:'business',   prix:165,  places:65},
  {id:65,compagnie:'Trenitalia',       type:'train', numero:'EN242',   depart:'Nice',        arrivee:'Bar (Montenegro)', dateDepart:'2026-06-08', heureDepart:'20:15', dateArrivee:'2026-06-09', heureArrivee:'15:30', duree:1155, classe:'economique', prix:88,   places:200},
  {id:66,compagnie:'Trenitalia',       type:'train', numero:'EN242',   depart:'Nice',        arrivee:'Bar (Montenegro)', dateDepart:'2026-07-06', heureDepart:'20:15', dateArrivee:'2026-07-07', heureArrivee:'15:30', duree:1155, classe:'economique', prix:102,  places:180},
  {id:67,compagnie:'Trenitalia',       type:'train', numero:'IC504',   depart:'Paris',       arrivee:'Kotor',            dateDepart:'2026-06-09', heureDepart:'07:45', dateArrivee:'2026-06-10', heureArrivee:'08:00', duree:1455, classe:'economique', prix:98,   places:220},
  {id:68,compagnie:'Trenitalia',       type:'train', numero:'IC504',   depart:'Paris',       arrivee:'Kotor',            dateDepart:'2026-07-07', heureDepart:'07:45', dateArrivee:'2026-07-08', heureArrivee:'08:00', duree:1455, classe:'economique', prix:115,  places:195},
  {id:69,compagnie:'Georgian Railway', type:'train', numero:'GR101',   depart:'Paris',       arrivee:'Tbilissi',         dateDepart:'2026-06-11', heureDepart:'08:00', dateArrivee:'2026-06-13', heureArrivee:'18:00', duree:3000, classe:'economique', prix:145,  places:180},
  {id:70,compagnie:'Georgian Railway', type:'train', numero:'GR101',   depart:'Paris',       arrivee:'Tbilissi',         dateDepart:'2026-07-09', heureDepart:'08:00', dateArrivee:'2026-07-11', heureArrivee:'18:00', duree:3000, classe:'business',   prix:310,  places:55},
  // ── BUS ──
  {id:71,compagnie:'FlixBus',          type:'bus',   numero:'FX1210',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-04', heureDepart:'08:00', dateArrivee:'2026-06-05', heureArrivee:'11:00', duree:1620, classe:'economique', prix:39,   places:55},
  {id:72,compagnie:'FlixBus',          type:'bus',   numero:'FX1210',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-06-18', heureDepart:'08:00', dateArrivee:'2026-06-19', heureArrivee:'11:00', duree:1620, classe:'economique', prix:45,   places:50},
  {id:73,compagnie:'FlixBus',          type:'bus',   numero:'FX1210',  depart:'Paris',       arrivee:'Lisbonne',         dateDepart:'2026-07-02', heureDepart:'08:00', dateArrivee:'2026-07-03', heureArrivee:'11:00', duree:1620, classe:'economique', prix:52,   places:48},
  {id:74,compagnie:'Eurolines',        type:'bus',   numero:'EU2204',  depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-07', heureArrivee:'08:30', duree:1500, classe:'economique', prix:35,   places:60},
  {id:75,compagnie:'Eurolines',        type:'bus',   numero:'EU2204',  depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-06-20', heureDepart:'07:30', dateArrivee:'2026-06-21', heureArrivee:'08:30', duree:1500, classe:'economique', prix:42,   places:55},
  {id:76,compagnie:'FlixBus',          type:'bus',   numero:'FX980',   depart:'Paris',       arrivee:'Madrid',           dateDepart:'2026-07-04', heureDepart:'09:00', dateArrivee:'2026-07-05', heureArrivee:'10:00', duree:1500, classe:'economique', prix:38,   places:58},
  {id:77,compagnie:'FlixBus',          type:'bus',   numero:'FX4401',  depart:'Paris',       arrivee:'Prague',           dateDepart:'2026-06-05', heureDepart:'09:30', dateArrivee:'2026-06-05', heureArrivee:'22:00', duree:750,  classe:'economique', prix:28,   places:60},
  {id:78,compagnie:'FlixBus',          type:'bus',   numero:'FX4401',  depart:'Paris',       arrivee:'Prague',           dateDepart:'2026-06-19', heureDepart:'09:30', dateArrivee:'2026-06-19', heureArrivee:'22:00', duree:750,  classe:'economique', prix:33,   places:55},
  {id:79,compagnie:'FlixBus',          type:'bus',   numero:'FX5512',  depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-06-07', heureDepart:'08:00', dateArrivee:'2026-06-07', heureArrivee:'23:30', duree:930,  classe:'economique', prix:32,   places:60},
  {id:80,compagnie:'FlixBus',          type:'bus',   numero:'FX5512',  depart:'Paris',       arrivee:'Budapest',         dateDepart:'2026-07-05', heureDepart:'08:00', dateArrivee:'2026-07-05', heureArrivee:'23:30', duree:930,  classe:'economique', prix:40,   places:52},
  {id:81,compagnie:'Eurolines',        type:'bus',   numero:'EU3301',  depart:'Paris',       arrivee:'Cracovie',         dateDepart:'2026-06-06', heureDepart:'07:00', dateArrivee:'2026-06-06', heureArrivee:'23:30', duree:990,  classe:'economique', prix:36,   places:58},
  {id:82,compagnie:'Eurolines',        type:'bus',   numero:'EU3301',  depart:'Paris',       arrivee:'Cracovie',         dateDepart:'2026-06-20', heureDepart:'07:00', dateArrivee:'2026-06-20', heureArrivee:'23:30', duree:990,  classe:'economique', prix:44,   places:52},
  {id:83,compagnie:'FlixBus',          type:'bus',   numero:'FX7720',  depart:'Lyon',        arrivee:'Seville',          dateDepart:'2026-06-08', heureDepart:'06:30', dateArrivee:'2026-06-09', heureArrivee:'09:00', duree:1590, classe:'economique', prix:42,   places:55},
  {id:84,compagnie:'FlixBus',          type:'bus',   numero:'FX7720',  depart:'Lyon',        arrivee:'Seville',          dateDepart:'2026-07-06', heureDepart:'06:30', dateArrivee:'2026-07-07', heureArrivee:'09:00', duree:1590, classe:'economique', prix:51,   places:48},
  {id:85,compagnie:'Eurolines',        type:'bus',   numero:'EU5501',  depart:'Marseille',   arrivee:'Belgrade',         dateDepart:'2026-06-09', heureDepart:'07:00', dateArrivee:'2026-06-10', heureArrivee:'08:00', duree:1500, classe:'economique', prix:38,   places:55},
  {id:86,compagnie:'Eurolines',        type:'bus',   numero:'EU5501',  depart:'Marseille',   arrivee:'Belgrade',         dateDepart:'2026-07-07', heureDepart:'07:00', dateArrivee:'2026-07-08', heureArrivee:'08:00', duree:1500, classe:'economique', prix:46,   places:50},
  {id:87,compagnie:'Eurolines',        type:'bus',   numero:'EU8810',  depart:'Paris',       arrivee:'Marrakech',        dateDepart:'2026-06-05', heureDepart:'06:00', dateArrivee:'2026-06-06', heureArrivee:'20:00', duree:2160, classe:'economique', prix:55,   places:50},
  {id:88,compagnie:'Eurolines',        type:'bus',   numero:'EU8810',  depart:'Paris',       arrivee:'Marrakech',        dateDepart:'2026-07-03', heureDepart:'06:00', dateArrivee:'2026-07-04', heureArrivee:'20:00', duree:2160, classe:'economique', prix:65,   places:45},
  // ── FERRIES ──
  {id:89, compagnie:'Algerie Ferries', type:'ferrie',numero:'AF501',   depart:'Marseille',   arrivee:'Alger',            dateDepart:'2026-06-05', heureDepart:'14:00', dateArrivee:'2026-06-06', heureArrivee:'09:00', duree:1140, classe:'economique', prix:95,   places:400},
  {id:90, compagnie:'Algerie Ferries', type:'ferrie',numero:'AF501',   depart:'Marseille',   arrivee:'Alger',            dateDepart:'2026-06-12', heureDepart:'14:00', dateArrivee:'2026-06-13', heureArrivee:'09:00', duree:1140, classe:'economique', prix:105,  places:380},
  {id:91, compagnie:'SNCM',            type:'ferrie',numero:'SN205',   depart:'Marseille',   arrivee:'Alger',            dateDepart:'2026-06-19', heureDepart:'16:00', dateArrivee:'2026-06-20', heureArrivee:'11:00', duree:1140, classe:'economique', prix:89,   places:420},
  {id:92, compagnie:'CTN',             type:'ferrie',numero:'CT301',   depart:'Marseille',   arrivee:'Tunis',            dateDepart:'2026-06-06', heureDepart:'12:00', dateArrivee:'2026-06-07', heureArrivee:'10:00', duree:1320, classe:'economique', prix:98,   places:380},
  {id:93, compagnie:'CTN',             type:'ferrie',numero:'CT301',   depart:'Marseille',   arrivee:'Tunis',            dateDepart:'2026-06-20', heureDepart:'12:00', dateArrivee:'2026-06-21', heureArrivee:'10:00', duree:1320, classe:'economique', prix:110,  places:360},
  {id:94, compagnie:'Grimaldi Lines',  type:'ferrie',numero:'GL102',   depart:'Marseille',   arrivee:'Tunis',            dateDepart:'2026-07-04', heureDepart:'10:00', dateArrivee:'2026-07-05', heureArrivee:'08:00', duree:1320, classe:'economique', prix:88,   places:400},
  {id:95, compagnie:'Balearia',        type:'ferrie',numero:'BA401',   depart:'Barcelone',   arrivee:'Ibiza',            dateDepart:'2026-06-05', heureDepart:'09:00', dateArrivee:'2026-06-05', heureArrivee:'18:00', duree:540,  classe:'economique', prix:55,   places:300},
  {id:96, compagnie:'Balearia',        type:'ferrie',numero:'BA401',   depart:'Barcelone',   arrivee:'Ibiza',            dateDepart:'2026-06-19', heureDepart:'09:00', dateArrivee:'2026-06-19', heureArrivee:'18:00', duree:540,  classe:'economique', prix:65,   places:280},
  {id:97, compagnie:'Trasmediterranea',type:'ferrie',numero:'TM501',   depart:'Barcelone',   arrivee:'Ibiza',            dateDepart:'2026-07-03', heureDepart:'10:00', dateArrivee:'2026-07-03', heureArrivee:'19:00', duree:540,  classe:'economique', prix:72,   places:260},
  {id:98, compagnie:'Jadrolinija',     type:'ferrie',numero:'JA211',   depart:'Venise',      arrivee:'Kotor',            dateDepart:'2026-06-07', heureDepart:'08:00', dateArrivee:'2026-06-08', heureArrivee:'08:00', duree:1440, classe:'economique', prix:78,   places:250},
  {id:99, compagnie:'Jadrolinija',     type:'ferrie',numero:'JA211',   depart:'Venise',      arrivee:'Kotor',            dateDepart:'2026-06-21', heureDepart:'08:00', dateArrivee:'2026-06-22', heureArrivee:'08:00', duree:1440, classe:'economique', prix:88,   places:230},
  {id:100,compagnie:'Jadrolinija',     type:'ferrie',numero:'JA211',   depart:'Venise',      arrivee:'Kotor',            dateDepart:'2026-07-05', heureDepart:'08:00', dateArrivee:'2026-07-06', heureArrivee:'08:00', duree:1440, classe:'business',   prix:165,  places:60},
  {id:101,compagnie:'Jadrolinija',     type:'ferrie',numero:'JA315',   depart:'Ancone',      arrivee:'Split',            dateDepart:'2026-06-08', heureDepart:'20:00', dateArrivee:'2026-06-09', heureArrivee:'07:00', duree:660,  classe:'economique', prix:62,   places:300},
  {id:102,compagnie:'Jadrolinija',     type:'ferrie',numero:'JA315',   depart:'Ancone',      arrivee:'Split',            dateDepart:'2026-06-22', heureDepart:'20:00', dateArrivee:'2026-06-23', heureArrivee:'07:00', duree:660,  classe:'economique', prix:72,   places:280},
  {id:103,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',  depart:'Athenes',     arrivee:'Santorin',         dateDepart:'2026-06-06', heureDepart:'07:30', dateArrivee:'2026-06-06', heureArrivee:'17:00', duree:570,  classe:'economique', prix:45,   places:400},
  {id:104,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',  depart:'Athenes',     arrivee:'Santorin',         dateDepart:'2026-06-13', heureDepart:'07:30', dateArrivee:'2026-06-13', heureArrivee:'17:00', duree:570,  classe:'economique', prix:52,   places:380},
  {id:105,compagnie:'Blue Star Ferries',type:'ferrie',numero:'BS701',  depart:'Athenes',     arrivee:'Santorin',         dateDepart:'2026-07-04', heureDepart:'07:30', dateArrivee:'2026-07-04', heureArrivee:'17:00', duree:570,  classe:'economique', prix:60,   places:360},
  {id:106,compagnie:'Hellenic Seaways', type:'ferrie',numero:'HS202',  depart:'Athenes',     arrivee:'Santorin',         dateDepart:'2026-06-20', heureDepart:'08:00', dateArrivee:'2026-06-20', heureArrivee:'18:30', duree:630,  classe:'economique', prix:48,   places:350},
  {id:107,compagnie:'MSC Croisières',  type:'ferrie',numero:'MSC201',  depart:'Civitavecchia',arrivee:'Zanzibar',        dateDepart:'2026-06-10', heureDepart:'18:00', dateArrivee:'2026-06-17', heureArrivee:'08:00', duree:9960, classe:'economique', prix:390,  places:800},
  {id:108,compagnie:'MSC Croisières',  type:'ferrie',numero:'MSC201',  depart:'Civitavecchia',arrivee:'Zanzibar',        dateDepart:'2026-07-08', heureDepart:'18:00', dateArrivee:'2026-07-15', heureArrivee:'08:00', duree:9960, classe:'business',   prix:780,  places:200},
  // ── VOITURES ──
  {id:109,compagnie:'Europcar',        type:'voiture',numero:'LOC-PAR-01',depart:'Paris',    arrivee:'Paris',            dateDepart:'2026-06-05', heureDepart:'08:00', dateArrivee:'2026-06-12', heureArrivee:'08:00', duree:0,    classe:'economique', prix:35,   places:50},
  {id:110,compagnie:'Hertz',           type:'voiture',numero:'LOC-PAR-02',depart:'Paris',    arrivee:'Paris',            dateDepart:'2026-06-05', heureDepart:'08:00', dateArrivee:'2026-06-12', heureArrivee:'08:00', duree:0,    classe:'economique', prix:42,   places:45},
  {id:111,compagnie:'Sixt',            type:'voiture',numero:'LOC-PAR-03',depart:'Paris',    arrivee:'Paris',            dateDepart:'2026-06-10', heureDepart:'09:00', dateArrivee:'2026-06-17', heureArrivee:'09:00', duree:0,    classe:'business',   prix:68,   places:30},
  {id:112,compagnie:'Europcar',        type:'voiture',numero:'LOC-LIS-01',depart:'Lisbonne', arrivee:'Lisbonne',         dateDepart:'2026-06-05', heureDepart:'10:00', dateArrivee:'2026-06-12', heureArrivee:'10:00', duree:0,    classe:'economique', prix:28,   places:40},
  {id:113,compagnie:'Hertz',           type:'voiture',numero:'LOC-LIS-02',depart:'Lisbonne', arrivee:'Lisbonne',         dateDepart:'2026-06-12', heureDepart:'10:00', dateArrivee:'2026-06-19', heureArrivee:'10:00', duree:0,    classe:'economique', prix:32,   places:35},
  {id:114,compagnie:'Bali Car Rental', type:'voiture',numero:'LOC-BAL-01',depart:'Bali',     arrivee:'Bali',             dateDepart:'2026-06-11', heureDepart:'09:00', dateArrivee:'2026-06-18', heureArrivee:'09:00', duree:0,    classe:'economique', prix:22,   places:60},
  {id:115,compagnie:'Bali Car Rental', type:'voiture',numero:'LOC-BAL-02',depart:'Bali',     arrivee:'Bali',             dateDepart:'2026-07-02', heureDepart:'09:00', dateArrivee:'2026-07-09', heureArrivee:'09:00', duree:0,    classe:'economique', prix:25,   places:55},
  {id:116,compagnie:'Avis Maroc',      type:'voiture',numero:'LOC-MAR-01',depart:'Marrakech',arrivee:'Marrakech',        dateDepart:'2026-06-06', heureDepart:'09:00', dateArrivee:'2026-06-13', heureArrivee:'09:00', duree:0,    classe:'economique', prix:30,   places:40},
  {id:117,compagnie:'Budget',          type:'voiture',numero:'LOC-MAR-02',depart:'Marrakech',arrivee:'Marrakech',        dateDepart:'2026-07-04', heureDepart:'09:00', dateArrivee:'2026-07-11', heureArrivee:'09:00', duree:0,    classe:'economique', prix:27,   places:45},
  {id:118,compagnie:'Georgian Car',    type:'voiture',numero:'LOC-TBI-01',depart:'Tbilissi', arrivee:'Tbilissi',         dateDepart:'2026-06-08', heureDepart:'10:00', dateArrivee:'2026-06-15', heureArrivee:'10:00', duree:0,    classe:'economique', prix:20,   places:50},
  {id:119,compagnie:'Georgian Car',    type:'voiture',numero:'LOC-TBI-02',depart:'Tbilissi', arrivee:'Tbilissi',         dateDepart:'2026-07-06', heureDepart:'10:00', dateArrivee:'2026-07-13', heureArrivee:'10:00', duree:0,    classe:'economique', prix:22,   places:45},
  {id:120,compagnie:'Vietnam Car',     type:'voiture',numero:'LOC-HAN-01',depart:'Hanoi',    arrivee:'Hanoi',            dateDepart:'2026-06-09', heureDepart:'10:00', dateArrivee:'2026-06-16', heureArrivee:'10:00', duree:0,    classe:'economique', prix:18,   places:55},
  {id:121,compagnie:'Vietnam Car',     type:'voiture',numero:'LOC-HAN-02',depart:'Hanoi',    arrivee:'Hanoi',            dateDepart:'2026-07-02', heureDepart:'10:00', dateArrivee:'2026-07-09', heureArrivee:'10:00', duree:0,    classe:'economique', prix:20,   places:50},
  {id:122,compagnie:'Europcar',        type:'voiture',numero:'LOC-BUD-01',depart:'Budapest', arrivee:'Budapest',         dateDepart:'2026-06-07', heureDepart:'09:00', dateArrivee:'2026-06-14', heureArrivee:'09:00', duree:0,    classe:'economique', prix:25,   places:45},
  {id:123,compagnie:'Sixt',            type:'voiture',numero:'LOC-BUD-02',depart:'Budapest', arrivee:'Budapest',         dateDepart:'2026-07-05', heureDepart:'09:00', dateArrivee:'2026-07-12', heureArrivee:'09:00', duree:0,    classe:'business',   prix:55,   places:25},
];

/* ═══════════════════════════════════════════════
   STATE
═══════════════════════════════════════════════ */
const state = {
  type: 'avion',
  tripType: 'aller-retour',
  depart: '',
  arrivee: '',
  dateAller: '',
  dateRetour: '',
  voyageurs: { adults: 0, children: 0 },
  searched: false,
  sort: 'prix-asc',
  filters: {}
};

/* ═══════════════════════════════════════════════
   HELPERS
═══════════════════════════════════════════════ */
function fmtDuree(min) {
  if (!min) return '–';
  const h = Math.floor(min / 60), m = min % 60;
  return m > 0 ? `${h}h${String(m).padStart(2,'0')}` : `${h}h`;
}
function fmtDate(d) {
  if (!d) return '';
  const [y,mo,da] = d.split('-');
  const months = ['jan','fév','mar','avr','mai','jun','jul','aoû','sep','oct','nov','déc'];
  return `${parseInt(da)} ${months[parseInt(mo)-1]} ${y}`;
}
function isEscale(t) {
  return t.type === 'avion' && t.duree >= 300;
}
function getHeureTranche(heure) {
  const h = parseInt(heure.split(':')[0]);
  if (h >= 0  && h < 6)  return '0h-6h';
  if (h >= 6  && h < 12) return '6h-12h';
  if (h >= 12 && h < 18) return '12h-18h';
  return '18h-24h';
}
function getLogoClass(type) {
  return {avion:'',train:'train-logo',bus:'bus-logo',ferrie:'ferry-logo',voiture:'car-logo'}[type] || '';
}
function getCode(compagnie) {
  const map = {
    'Air France':'AF','KLM':'KLM','Emirates':'EK','Qatar Airways':'QR',
    'Vueling':'VY','Transavia':'TO','TAP Air Portugal':'TAP','Easyjet':'EZY',
    'Wizz Air':'W6','Ryanair':'FR','Vietnam Airlines':'VN','Turkish Airlines':'TK',
    'Air Arabia Maroc':'MAC','Philippine Airlines':'PR','Royal Jordanian':'RJ',
    'Renfe-SNCF':'TGV','Railjet':'RJ','DB ICE':'ICE','Renfe AVE':'AVE',
    'SNCF TGV':'TGV','PKP Intercity':'PKP','Trenitalia':'TI','Georgian Railway':'GR',
    'FlixBus':'FB','Eurolines':'EU','Algerie Ferries':'ALF','SNCM':'SN',
    'CTN':'CTN','Grimaldi Lines':'GL','Balearia':'BA','Trasmediterranea':'TM',
    'Jadrolinija':'JL','Blue Star Ferries':'BS','Hellenic Seaways':'HS',
    'MSC Croisières':'MSC','Europcar':'EPC','Hertz':'HTZ','Sixt':'SXT',
    'Bali Car Rental':'BCR','Avis Maroc':'AVM','Budget':'BGT',
    'Georgian Car':'GC','Vietnam Car':'VNC',
  };
  return map[compagnie] || compagnie.substring(0,3).toUpperCase();
}

/* Unique values for a field on the current type */
function uniqueVals(field) {
  return [...new Set(TRANSPORTS.filter(t=>t.type===state.type).map(t=>t[field]))].sort();
}

/* Max price for current type */
function maxPriceForType() {
  const prices = TRANSPORTS.filter(t=>t.type===state.type).map(t=>t.prix);
  return Math.ceil(Math.max(...prices) / 50) * 50;
}

/* ═══════════════════════════════════════════════
   FILTER LOGIC
═══════════════════════════════════════════════ */
function applyAndRender() {
  state.sort = document.getElementById('sortSelect').value;
  let data = TRANSPORTS.filter(t => t.type === state.type);

  /* Search filters */
  if (state.searched) {
    if (state.depart)  data = data.filter(t => t.depart.toLowerCase().includes(state.depart.toLowerCase()));
    if (state.arrivee) data = data.filter(t => t.arrivee.toLowerCase().includes(state.arrivee.toLowerCase()));
    if (state.dateAller) data = data.filter(t => t.dateDepart >= state.dateAller);
  }

  /* Filter: compagnie */
  const compChecked = [...document.querySelectorAll('.f-compagnie:checked')].map(el=>el.value);
  if (compChecked.length) data = data.filter(t => compChecked.includes(t.compagnie));

  /* Filter: classe */
  const classeChecked = [...document.querySelectorAll('.f-classe:checked')].map(el=>el.value);
  if (classeChecked.length) data = data.filter(t => classeChecked.includes(t.classe));

  /* Filter: escale (avion only) */
  const escaleVal = document.querySelector('.f-escale:checked');
  if (escaleVal && escaleVal.value !== 'tous') {
    if (escaleVal.value === 'direct') data = data.filter(t => !isEscale(t));
    else data = data.filter(t => isEscale(t));
  }

  /* Filter: prix max */
  const prixMax = document.getElementById('prixMaxSlider');
  if (prixMax) data = data.filter(t => t.prix <= parseInt(prixMax.value));

  /* Filter: horaire */
  const horaireChecked = [...document.querySelectorAll('.f-horaire:checked')].map(el=>el.value);
  if (horaireChecked.length) data = data.filter(t => horaireChecked.includes(getHeureTranche(t.heureDepart)));

  /* Filter: durée max (bus) */
  const durMax = document.getElementById('durMaxSlider');
  if (durMax) data = data.filter(t => t.duree <= parseInt(durMax.value));

  /* Filter: ville (voiture) */
  const villeChecked = [...document.querySelectorAll('.f-ville:checked')].map(el=>el.value);
  if (villeChecked.length) data = data.filter(t => villeChecked.includes(t.depart));

  /* Sort */
  data.sort((a,b) => {
    if (state.sort === 'prix-asc')   return a.prix - b.prix;
    if (state.sort === 'prix-desc')  return b.prix - a.prix;
    if (state.sort === 'heure-asc')  return a.heureDepart.localeCompare(b.heureDepart);
    if (state.sort === 'duree-asc')  return a.duree - b.duree;
    return 0;
  });

  renderResults(data);
}

/* ═══════════════════════════════════════════════
   RENDER RESULTS
═══════════════════════════════════════════════ */
function renderResults(data) {
  const list = document.getElementById('resultsList');
  const cnt  = document.getElementById('resultsCount');
  const label = {avion:'vol',train:'train',bus:'bus',voiture:'véhicule',ferrie:'ferry'};
  const plural= {avion:'vols',train:'trains',bus:'bus',voiture:'véhicules',ferrie:'ferries'};
  const n = data.length;
  const word = n > 1 ? plural[state.type] : label[state.type];
  cnt.innerHTML = `<strong>${n}</strong> ${word} disponible${n>1?'s':''}`;

  if (!n) {
    list.innerHTML = `<div class="no-results"><div class="emoji">🔍</div><p>Aucun résultat ne correspond à vos critères.</p><p style="margin-top:4px;font-size:.85rem;">Essayez de modifier vos filtres ou votre recherche.</p></div>`;
    return;
  }

  if (state.type === 'voiture') {
    list.innerHTML = data.map(t => renderCarCard(t)).join('');
  } else {
    list.innerHTML = data.map(t => renderTransportCard(t)).join('');
  }
}

function renderTransportCard(t) {
  const dureeStr = fmtDuree(t.duree);
  const classBadge = t.classe === 'economique'
    ? '<span class="tag tag-eco">Économique</span>'
    : t.classe === 'business'
    ? '<span class="tag tag-biz">Business</span>'
    : '<span class="tag tag-pre">Première</span>';

  let escaleBadge = '';
  if (t.type === 'avion') {
    escaleBadge = isEscale(t)
      ? '<span class="tag tag-escale">1 escale</span>'
      : '<span class="tag tag-direct">Direct</span>';
  }

  const placesBadge = t.places <= 30
    ? `<span class="tag tag-places">${t.places} places restantes</span>`
    : '';

  const prixSuffix = t.type === 'voiture' ? '/jour' : '/pers.';

  return `<div class="t-card" onclick="this.classList.toggle('selected')">
    <div class="tc-logo ${getLogoClass(t.type)}">${getCode(t.compagnie)}</div>
    <div class="tc-body">
      <div class="tc-route">
        <span class="tc-city">${t.depart}</span>
        <span class="tc-arrow">→</span>
        <span class="tc-city">${t.arrivee}</span>
      </div>
      <div class="tc-time-range">${t.heureDepart} → ${t.heureArrivee} · ${fmtDate(t.dateDepart)}
        ${t.dateDepart !== t.dateArrivee ? ' (arrivée le '+fmtDate(t.dateArrivee)+')' : ''}</div>
      <div class="tc-tags">
        <span class="tag tag-num">${t.numero}</span>
        <span class="tag tag-dur">${dureeStr}</span>
        ${classBadge}${escaleBadge}${placesBadge}
      </div>
    </div>
    <div class="tc-price-col">
      <div>
        <div class="tc-price">${t.prix}€</div>
        <div class="tc-price-sub">${prixSuffix}</div>
      </div>
      <button class="btn-select" onclick="event.stopPropagation();selectTransport(${t.id})">Sélectionner</button>
    </div>
  </div>`;
}

function renderCarCard(t) {
  const days = Math.round((new Date(t.dateArrivee) - new Date(t.dateDepart)) / 86400000);
  const classBadge = t.classe === 'economique'
    ? '<span class="tag tag-eco">Économique</span>'
    : t.classe === 'business'
    ? '<span class="tag tag-biz">Confort</span>'
    : '<span class="tag tag-pre">Premium</span>';
  const placesBadge = t.places <= 10
    ? `<span class="tag tag-places">${t.places} restants</span>` : '';

  return `<div class="t-card" onclick="this.classList.toggle('selected')">
    <div class="tc-logo car-logo" style="font-size:.6rem;">${getCode(t.compagnie)}</div>
    <div class="tc-body">
      <div class="tc-route">
        <span class="tc-city" style="font-size:.95rem;">${t.compagnie}</span>
      </div>
      <div class="tc-time-range">
        📍 ${t.depart} · Du ${fmtDate(t.dateDepart)} au ${fmtDate(t.dateArrivee)} (${days} jour${days>1?'s':''})
      </div>
      <div class="tc-tags">
        ${classBadge}${placesBadge}
        <span class="tag tag-dur">${t.places} véh. dispo</span>
      </div>
    </div>
    <div class="tc-price-col">
      <div>
        <div class="tc-price">${t.prix}€</div>
        <div class="tc-price-sub">/jour</div>
      </div>
      <button class="btn-select" onclick="event.stopPropagation();selectTransport(${t.id})">Réserver</button>
    </div>
  </div>`;
}

/* ═══════════════════════════════════════════════
   RENDER FILTERS
═══════════════════════════════════════════════ */
function renderFilters() {
  const companies = uniqueVals('compagnie');
  const maxPrix = maxPriceForType();
  let html = '';

  /* ── Compagnies ── */
  html += `<div class="f-section">
    <div class="f-section-title">Compagnie</div>
    ${companies.map(c => `<label class="f-check"><input type="checkbox" class="f-compagnie" value="${c}" onchange="applyAndRender()"> ${c}</label>`).join('')}
  </div>`;

  /* ── Escale (avion only) ── */
  if (state.type === 'avion') {
    html += `<div class="f-section">
      <div class="f-section-title">Escale</div>
      <label class="f-radio"><input type="radio" class="f-escale" name="escale" value="tous" checked onchange="applyAndRender()"> Tous les vols</label>
      <label class="f-radio"><input type="radio" class="f-escale" name="escale" value="direct" onchange="applyAndRender()"> Direct uniquement</label>
      <label class="f-radio"><input type="radio" class="f-escale" name="escale" value="escale" onchange="applyAndRender()"> 1 escale</label>
    </div>`;
  }

  /* ── Classe ── */
  const classes = uniqueVals('classe');
  const classeLabels = {economique:'Économique',business:'Business',premiere:'Première'};
  html += `<div class="f-section">
    <div class="f-section-title">Classe</div>
    ${classes.map(c => `<label class="f-check"><input type="checkbox" class="f-classe" value="${c}" onchange="applyAndRender()"> ${classeLabels[c]||c}</label>`).join('')}
  </div>`;

  /* ── Prix max ── */
  const prixLabel = state.type === 'voiture' ? 'Prix max / jour' : 'Prix max / personne';
  html += `<div class="f-section">
    <div class="f-section-title">${prixLabel}</div>
    <div class="price-wrap">
      <input type="range" class="price-slider" id="prixMaxSlider" min="0" max="${maxPrix}" value="${maxPrix}" step="10" oninput="document.getElementById('prixMaxVal').textContent=this.value;applyAndRender()">
      <div class="price-info">
        <span class="price-min">0 €</span>
        <span class="price-val"><span id="prixMaxVal">${maxPrix}</span> €</span>
      </div>
    </div>
  </div>`;

  /* ── Horaire départ (not for voitures) ── */
  if (state.type !== 'voiture') {
    html += `<div class="f-section">
      <div class="f-section-title">Horaire de départ</div>
      ${['0h-6h','6h-12h','12h-18h','18h-24h'].map(h =>
        `<label class="f-check"><input type="checkbox" class="f-horaire" value="${h}" onchange="applyAndRender()"> ${h}</label>`
      ).join('')}
    </div>`;
  }

  /* ── Durée max (bus) ── */
  if (state.type === 'bus') {
    const maxDur = 2500;
    html += `<div class="f-section">
      <div class="f-section-title">Durée max du trajet</div>
      <div class="price-wrap">
        <input type="range" class="price-slider" id="durMaxSlider" min="0" max="${maxDur}" value="${maxDur}" step="60" oninput="document.getElementById('durMaxVal').textContent=Math.floor(this.value/60)+'h';applyAndRender()">
        <div class="price-info">
          <span class="price-min">0h</span>
          <span class="price-val"><span id="durMaxVal">${Math.floor(maxDur/60)}h</span></span>
        </div>
      </div>
    </div>`;
  }

  /* ── Ville de prise en charge (voiture) ── */
  if (state.type === 'voiture') {
    const villes = uniqueVals('depart');
    html += `<div class="f-section">
      <div class="f-section-title">Ville</div>
      ${villes.map(v => `<label class="f-check"><input type="checkbox" class="f-ville" value="${v}" onchange="applyAndRender()"> ${v}</label>`).join('')}
    </div>`;
  }

  document.getElementById('filtersContent').innerHTML = html;
}

/* ═══════════════════════════════════════════════
   DATALISTS for search autocomplete
═══════════════════════════════════════════════ */
function buildDataLists() {
  const departsAll   = [...new Set(TRANSPORTS.map(t=>t.depart))].sort();
  const arrivesAll   = [...new Set(TRANSPORTS.map(t=>t.arrivee))].sort();
  document.getElementById('citiesDepart').innerHTML  = departsAll.map(c=>`<option value="${c}">`).join('');
  document.getElementById('citiesArrivee').innerHTML = arrivesAll.map(c=>`<option value="${c}">`).join('');
}

/* ═══════════════════════════════════════════════
   UI EVENTS
═══════════════════════════════════════════════ */
function switchType(type, btn) {
  state.type = type;
  state.searched = false;
  document.querySelectorAll('.type-tab').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  /* Adjust search bar for voitures */
  const departLabel = document.querySelector('#departField label');
  const arriveeField = document.getElementById('arriveeField');
  const tripTypeRow = document.getElementById('tripTypeRow');
  const retourField = document.getElementById('retourField');
  if (type === 'voiture') {
    departLabel.textContent = 'Lieu de prise en charge';
    document.getElementById('inDepart').placeholder = 'Ville';
    arriveeField.style.display = 'none';
    tripTypeRow.style.display = 'none';
    retourField.querySelector('label').textContent = 'Date de retour';
  } else {
    departLabel.textContent = 'Départ';
    document.getElementById('inDepart').placeholder = 'Ville de départ';
    arriveeField.style.display = '';
    tripTypeRow.style.display = '';
    retourField.querySelector('label').textContent = 'Date retour';
    if (state.tripType === 'aller') retourField.classList.add('hidden');
    else retourField.classList.remove('hidden');
  }

  renderFilters();
  applyAndRender();
}

function onTripTypeChange(radio) {
  state.tripType = radio.value;
  document.querySelectorAll('.radio-label').forEach(l => l.classList.remove('active-label'));
  radio.closest('.radio-label').classList.add('active-label');
  const retour = document.getElementById('retourField');
  if (radio.value === 'aller') retour.classList.add('hidden');
  else retour.classList.remove('hidden');
}

function doSearch() {
  state.depart    = document.getElementById('inDepart').value.trim();
  state.arrivee   = document.getElementById('inArrivee').value.trim();
  state.dateAller = document.getElementById('inDateAller').value;
  state.dateRetour= document.getElementById('inDateRetour').value;
  state.searched  = true;
  applyAndRender();
}

function resetFilters() {
  document.querySelectorAll('.f-compagnie,.f-classe,.f-horaire,.f-ville').forEach(el => el.checked = false);
  document.querySelectorAll('.f-escale').forEach((el,i) => el.checked = i===0);
  const pm = document.getElementById('prixMaxSlider');
  if (pm) { pm.value = pm.max; document.getElementById('prixMaxVal').textContent = pm.max; }
  const dm = document.getElementById('durMaxSlider');
  if (dm) { dm.value = dm.max; document.getElementById('durMaxVal').textContent = Math.floor(dm.max/60)+'h'; }
  applyAndRender();
}

/* Voyageurs */
const voy = {adults:0, children:0};
function toggleVoy(e) {
  if (e.target.classList.contains('voy-btn')) return;
  document.getElementById('voyPanel').classList.toggle('open');
}
document.addEventListener('click', e => {
  if (!document.getElementById('voyField').contains(e.target))
    document.getElementById('voyPanel').classList.remove('open');
});
function changeVoy(type, delta, e) {
  e.stopPropagation();
  voy[type] = Math.max(0, voy[type] + delta);
  document.getElementById(type==='adults'?'cntAdults':'cntChildren').textContent = voy[type];
  const total = voy.adults + voy.children;
  const el = document.getElementById('voyDisplay');
  if (!total) { el.textContent='Ajouter des voyageurs'; el.className='voy-val ph'; return; }
  let parts=[];
  if (voy.adults)   parts.push(voy.adults   + ' adulte'  + (voy.adults>1?'s':''));
  if (voy.children) parts.push(voy.children + ' enfant'  + (voy.children>1?'s':''));
  el.textContent = parts.join(', ');
  el.className='voy-val';
}

/* Select transport → could add to cart */
function selectTransport(id) {
  const t = TRANSPORTS.find(x=>x.id===id);
  if (!t) return;
  alert(`✅ Transport sélectionné :\n${t.compagnie} · ${t.depart} → ${t.arrivee}\n${t.dateDepart} à ${t.heureDepart} · ${t.prix}€/pers.\n\nAjouté à votre itinéraire.`);
}

/* Sticky filters top offset */
function updateFiltersTop() {
  const sz = document.getElementById('searchZone');
  const fs = document.getElementById('filtersSticky');
  const offset = sz.getBoundingClientRect().height + 64 + 24;
  fs.style.top = offset + 'px';
}

/* Sidebar stops at footer */
function updateSidebarBottom() {
  const footer = document.getElementById('footer');
  const sidebar = document.getElementById('sidebar');
  const footerTop = footer.getBoundingClientRect().top;
  const winH = window.innerHeight;
  sidebar.style.bottom = footerTop < winH ? (winH - footerTop) + 'px' : '0px';
}

/* Back to top */
const btt = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  btt.classList.toggle('visible', window.scrollY > 300);
  updateSidebarBottom();
});
window.addEventListener('resize', () => { updateSidebarBottom(); updateFiltersTop(); });

/* ═══════════════════════════════════════════════
   INIT
═══════════════════════════════════════════════ */
buildDataLists();
renderFilters();
applyAndRender();
updateSidebarBottom();
setTimeout(updateFiltersTop, 100);
</script>
</body>
</html>
