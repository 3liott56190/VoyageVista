<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>VoyageVista – Activités</title>
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
html,body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);min-height:100vh;overflow-x:hidden}

/* ── HEADER ── */
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

/* ── LAYOUT ── */
.layout{display:flex;padding-top:var(--header-h);min-height:100vh}

/* ── SIDEBAR ── */
aside{width:var(--sidebar-w);background:var(--surface);border-right:1px solid var(--border);position:fixed;top:var(--header-h);left:0;bottom:0;padding:20px 12px;display:flex;flex-direction:column;gap:4px;overflow-y:auto;overflow-x:hidden;z-index:40}
.nav-item{display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:8px;text-decoration:none;font-size:.9rem;font-weight:400;color:var(--muted);transition:background .15s,color .15s;cursor:pointer;border:none;background:transparent;width:100%;font-family:'DM Sans',sans-serif}
.nav-item svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:1.8;flex-shrink:0}
.nav-item:hover{background:var(--accent-soft);color:var(--accent)}
.nav-item.active{background:var(--accent);color:#fff;font-weight:500}
.nav-item.active svg{stroke:#fff}

/* ── MAIN ── */
main{margin-left:var(--sidebar-w);flex:1;min-width:0;display:flex;flex-direction:column}

/* ── SEARCH ZONE (fixed) ── */
.search-zone{position:fixed;top:var(--header-h);left:var(--sidebar-w);right:0;z-index:50;background:var(--surface);border-bottom:1px solid var(--border);padding:14px 32px 16px;box-shadow:var(--shadow)}
.search-bar{display:flex;align-items:stretch;background:var(--surface);border:1.5px solid var(--border);border-radius:12px;overflow:visible;box-shadow:0 2px 8px rgba(0,0,0,.05)}
.sf{flex:1;border:none;border-right:1px solid var(--border);padding:0;display:flex;flex-direction:column;justify-content:center;min-width:0}
.sf label{font-size:.62rem;font-weight:600;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);padding:8px 14px 2px;display:block}
.sf input,.sf select{width:100%;border:none;outline:none;font-family:'DM Sans',sans-serif;font-size:.875rem;color:var(--text);background:transparent;padding:2px 14px 8px;appearance:none}
.sf input::placeholder{color:#c5bfb8}
.sf.wide{flex:1.5}
.sf-voy{position:relative;cursor:pointer;user-select:none;flex:1;border-right:1px solid var(--border)}
.sf-voy .voy-val{padding:2px 14px 8px;font-size:.875rem;color:var(--text)}
.sf-voy .voy-val.ph{color:#c5bfb8}
.btn-search{background:var(--accent);color:#fff;border:none;padding:0 28px;font-family:'DM Sans',sans-serif;font-size:.9rem;font-weight:600;cursor:pointer;transition:background .18s;white-space:nowrap;border-radius:0 10px 10px 0;flex-shrink:0}
.btn-search:hover{background:#025a28}
.btn-search:active{transform:scale(.97)}

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

/* ── CONTENT AREA ── */
.content-area{display:flex;flex:1;padding:150px 32px 80px;gap:24px;align-items:flex-start}

/* ── RESULTS ── */
.results-col{flex:1;min-width:0}
.results-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px;flex-wrap:wrap;gap:8px}
.results-count{font-size:.9rem;color:var(--muted)}
.results-count strong{color:var(--text);font-weight:600}
.sort-select{padding:7px 32px 7px 12px;border:1.5px solid var(--border);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.85rem;background:var(--surface);color:var(--text);cursor:pointer;outline:none;appearance:none;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 24 24' fill='none' stroke='%23788a7b' stroke-width='2'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");background-repeat:no-repeat;background-position:right 10px center}
.sort-select:focus{border-color:var(--accent)}

/* ── ACTIVITIES GRID ── */
.activities-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px}

/* ── ACTIVITY CARD ── */
.act-card{background:var(--surface);border:1.5px solid var(--border);border-radius:14px;overflow:hidden;transition:box-shadow .2s,transform .18s,border-color .2s;cursor:pointer}
.act-card:hover{box-shadow:0 8px 24px rgba(0,0,0,.12);transform:translateY(-3px);border-color:#c8d8cb}

/* Card photo zone */
.ac-photo{height:155px;display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.ac-photo-icon{font-size:2.8rem;opacity:.75;filter:drop-shadow(0 2px 4px rgba(0,0,0,.15))}
.cat-badge{position:absolute;top:10px;left:10px;padding:3px 10px;border-radius:99px;font-size:.68rem;font-weight:700;letter-spacing:.03em}
.heart-btn{position:absolute;top:8px;right:10px;width:32px;height:32px;border-radius:50%;border:none;background:rgba(255,255,255,.85);cursor:pointer;font-size:1rem;display:flex;align-items:center;justify-content:center;transition:background .15s,transform .12s;backdrop-filter:blur(4px)}
.heart-btn:hover{background:#fff;transform:scale(1.12)}
.heart-btn.liked{color:#e74c3c}

/* Category backgrounds */
.bg-culture   {background:linear-gradient(135deg,#fde8c8,#fef3e2)}
.bg-nature    {background:linear-gradient(135deg,#c8e6c9,#e8f5e9)}
.bg-sport     {background:linear-gradient(135deg,#bbdefb,#e3f2fd)}
.bg-gastronomie{background:linear-gradient(135deg,#ffecb3,#fff8e1)}
.bg-detente   {background:linear-gradient(135deg,#e1bee7,#f3e5f5)}
.bg-aventure  {background:linear-gradient(135deg,#ffcdd2,#fce4ec)}
.bg-visite    {background:linear-gradient(135deg,#b2ebf2,#e0f7fa)}
.bg-nightlife {background:linear-gradient(135deg,#c5cae9,#e8eaf6)}

/* Category badge colors */
.badge-culture    {background:#fff3e0;color:#e65100}
.badge-nature     {background:#e8f5e9;color:#1b5e20}
.badge-sport      {background:#e3f2fd;color:#0d47a1}
.badge-gastronomie{background:#fff8e1;color:#f57f17}
.badge-detente    {background:#f3e5f5;color:#4a148c}
.badge-aventure   {background:#fce4ec;color:#880e4f}
.badge-visite     {background:#e0f7fa;color:#004d40}
.badge-nightlife  {background:#e8eaf6;color:#283593}

/* Card body */
.ac-body{padding:12px 14px 14px}
.ac-name{font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;color:var(--text);margin-bottom:4px;line-height:1.3;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical}
.ac-location{font-size:.78rem;color:var(--muted);margin-bottom:10px}
.ac-footer{display:flex;align-items:center;gap:10px;flex-wrap:wrap;margin-bottom:10px}
.ac-info-tag{display:inline-flex;align-items:center;gap:4px;font-size:.75rem;font-weight:500;padding:3px 8px;border-radius:99px;background:var(--bg);border:1px solid var(--border);color:var(--muted)}
.ac-stars{display:flex;align-items:center;gap:3px;font-size:.78rem;font-weight:600;color:#c87941}
.ac-price{font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:700;color:var(--text);margin-left:auto;white-space:nowrap}
.ac-price small{font-family:'DM Sans',sans-serif;font-size:.7rem;font-weight:400;color:var(--muted)}
.btn-reserver{width:100%;padding:8px;border-radius:8px;border:1.5px solid var(--accent);background:transparent;color:var(--accent);font-size:.83rem;font-weight:600;cursor:pointer;transition:all .15s;font-family:'DM Sans',sans-serif}
.btn-reserver:hover{background:var(--accent);color:#fff}

/* Difficulty dots */
.diff-easy{color:#2e7d32}
.diff-med {color:#e65100}
.diff-hard{color:#b71c1c}

/* No results */
.no-results{text-align:center;padding:60px 20px;color:var(--muted);grid-column:1/-1}
.no-results .emoji{font-size:2.5rem;margin-bottom:12px}
.no-results p{font-size:.95rem;margin-top:6px}

/* ── FILTERS PANEL ── */
.filters-panel{width:230px;flex-shrink:0}
.filters-sticky{position:sticky;top:160px;max-height:calc(100vh - 170px);overflow-y:auto;padding-right:2px}
.filters-sticky::-webkit-scrollbar{width:3px}
.filters-sticky::-webkit-scrollbar-thumb{background:var(--border);border-radius:3px}
.filter-card{background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:18px;box-shadow:var(--shadow)}
.filter-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:16px}
.filter-title{font-size:.8rem;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--text)}
.filter-reset{font-size:.75rem;font-weight:500;color:var(--accent);cursor:pointer;text-decoration:underline;background:none;border:none;font-family:'DM Sans',sans-serif}
.f-section{margin-bottom:16px;padding-bottom:16px;border-bottom:1px solid var(--border)}
.f-section:last-child{margin-bottom:0;padding-bottom:0;border-bottom:none}
.f-section-title{font-size:.75rem;font-weight:600;color:var(--text);margin-bottom:8px;text-transform:uppercase;letter-spacing:.04em}
.f-check,.f-radio{display:flex;align-items:center;gap:7px;padding:3px 0;cursor:pointer;font-size:.84rem;color:var(--text);user-select:none}
.f-check input,.f-radio input{accent-color:var(--accent);width:14px;height:14px;flex-shrink:0;cursor:pointer}
.price-wrap{margin-top:6px}
.price-slider{width:100%;accent-color:var(--accent);cursor:pointer}
.price-info{display:flex;justify-content:space-between;align-items:center;margin-top:6px}
.price-val{font-size:.82rem;font-weight:600;background:var(--bg);border:1px solid var(--border);border-radius:6px;padding:3px 10px;color:var(--text)}
.price-min{font-size:.75rem;color:var(--muted)}

/* ── FOOTER ── */
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
    <button class="btn-connexion" onclick="window.location='connexion.php'">Connexion</button>
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
  <a href="transport.php" class="nav-item">
    <svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>Transport
  </a>
  <a href="hebergement.php" class="nav-item">
    <svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>Hebergement
  </a>
  <a href="activites.php" class="nav-item active">
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

  <!-- SEARCH ZONE (fixed) -->
  <div class="search-zone" id="searchZone">
    <div class="search-bar">
      <div class="sf wide">
        <label for="inDest">Destination</label>
        <input id="inDest" type="text" placeholder="Ville, pays ou destination…" list="destList" autocomplete="off"/>
        <datalist id="destList"></datalist>
      </div>
      <div class="sf">
        <label for="inDate">Date de l'activité</label>
        <input id="inDate" type="date" min="2026-06-01"/>
      </div>
      <div class="sf">
        <label for="inCat">Catégorie</label>
        <select id="inCat">
          <option value="">Toutes les catégories</option>
          <option value="Aventure">🧗 Aventure</option>
          <option value="Culture">🏛️ Culture</option>
          <option value="Detente">🧘 Détente</option>
          <option value="Gastronomie">🍽️ Gastronomie</option>
          <option value="Nature">🌿 Nature</option>
          <option value="Nightlife">🎵 Nightlife</option>
          <option value="Sport">🏄 Sport</option>
          <option value="Visite">🗺️ Visite</option>
        </select>
      </div>
      <div class="sf-voy" id="voyField" onclick="toggleVoy(event)">
        <label>Participants</label>
        <div class="voy-val ph" id="voyDisplay">Nombre de personnes</div>
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
            <div class="voy-label">Enfants <small>moins de 18 ans</small></div>
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

  <!-- CONTENT AREA -->
  <div class="content-area">

    <!-- Results -->
    <div class="results-col">
      <div class="results-header">
        <div class="results-count" id="resultsCount">Chargement…</div>
        <select class="sort-select" id="sortSelect" onchange="applyAndRender()">
          <option value="prix-asc">Prix croissants</option>
          <option value="prix-desc">Prix décroissants</option>
          <option value="note-desc">Mieux notées</option>
          <option value="duree-asc">Durée croissante</option>
        </select>
      </div>
      <div class="activities-grid" id="resultsList"></div>
    </div>

    <!-- Filters panel -->
    <div class="filters-panel">
      <div class="filters-sticky">
        <div class="filter-card">
          <div class="filter-header">
            <span class="filter-title">Filtres</span>
            <button class="filter-reset" onclick="resetFilters()">Réinitialiser</button>
          </div>
          <div id="filtersContent"></div>
        </div>
      </div>
    </div>

  </div>
</main>
</div>

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
/* ═══════════════════════════════════════
   DATA — all activities from SQL
═══════════════════════════════════════ */
const ACTIVITIES = [
  // BALI
  {id:1,  nom:'Cours de surf à Kuta',              ville:'Bali',    pays:'Indonésie',           cat:'Sport',       prix:18,  duree:180,  date:'2026-06-11',heure:'08:00',diff:'facile',   note:4.7, cap:10},
  {id:2,  nom:'Visite des temples de Bedugul',     ville:'Bali',    pays:'Indonésie',           cat:'Culture',     prix:12,  duree:240,  date:'2026-06-12',heure:'15:00',diff:'facile',   note:4.8, cap:20},
  {id:3,  nom:'Trekking volcan Batur au lever',    ville:'Bali',    pays:'Indonésie',           cat:'Aventure',    prix:22,  duree:360,  date:'2026-06-13',heure:'02:00',diff:'difficile',note:4.9, cap:12},
  {id:4,  nom:'Cours de cuisine balinaise',        ville:'Bali',    pays:'Indonésie',           cat:'Gastronomie', prix:15,  duree:300,  date:'2026-06-14',heure:'09:00',diff:'facile',   note:4.8, cap:10},
  {id:5,  nom:'Massage traditionnel balinais',     ville:'Bali',    pays:'Indonésie',           cat:'Detente',     prix:14,  duree:90,   date:'2026-06-15',heure:'10:00',diff:'facile',   note:4.9, cap:6},
  {id:6,  nom:'Rizières en terrasses Tegallalang', ville:'Bali',    pays:'Indonésie',           cat:'Nature',      prix:8,   duree:180,  date:'2026-06-16',heure:'07:00',diff:'facile',   note:4.7, cap:20},
  {id:7,  nom:'Snorkeling à Nusa Penida',          ville:'Bali',    pays:'Indonésie',           cat:'Nature',      prix:25,  duree:480,  date:'2026-06-17',heure:'07:30',diff:'modere',   note:4.8, cap:15},
  {id:8,  nom:'Soirée Kecak au temple Uluwatu',    ville:'Bali',    pays:'Indonésie',           cat:'Culture',     prix:10,  duree:90,   date:'2026-06-18',heure:'17:30',diff:'facile',   note:4.9, cap:50},
  // TENERIFE
  {id:9,  nom:'Ascension du Teide',                ville:'Tenerife',pays:'Espagne',             cat:'Aventure',    prix:20,  duree:480,  date:'2026-06-06',heure:'06:00',diff:'difficile',note:4.8, cap:15},
  {id:10, nom:'Whale watching',                    ville:'Tenerife',pays:'Espagne',             cat:'Nature',      prix:28,  duree:180,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.7, cap:20},
  {id:11, nom:'Surf et bodyboard à El Medano',     ville:'Tenerife',pays:'Espagne',             cat:'Sport',       prix:22,  duree:180,  date:'2026-06-08',heure:'09:00',diff:'facile',   note:4.6, cap:10},
  {id:12, nom:'Visite du Loro Parque',             ville:'Tenerife',pays:'Espagne',             cat:'Visite',      prix:32,  duree:360,  date:'2026-06-09',heure:'10:00',diff:'facile',   note:4.5, cap:100},
  {id:13, nom:'Dégustation vins canariens',        ville:'Tenerife',pays:'Espagne',             cat:'Gastronomie', prix:18,  duree:240,  date:'2026-06-10',heure:'11:00',diff:'facile',   note:4.6, cap:12},
  {id:14, nom:'Randonnée Parc Anaga',              ville:'Tenerife',pays:'Espagne',             cat:'Nature',      prix:12,  duree:300,  date:'2026-06-11',heure:'08:00',diff:'modere',   note:4.7, cap:15},
  // ALBANIE SUD
  {id:15, nom:'Snorkeling criques de Himara',      ville:'Himara',  pays:'Albanie',             cat:'Nature',      prix:10,  duree:300,  date:'2026-06-06',heure:'09:00',diff:'facile',   note:4.8, cap:12},
  {id:16, nom:'Visite de Butrint UNESCO',          ville:'Saranda', pays:'Albanie',             cat:'Culture',     prix:6,   duree:180,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.7, cap:20},
  {id:17, nom:'Kayak de mer côte ionienne',        ville:'Himara',  pays:'Albanie',             cat:'Sport',       prix:14,  duree:240,  date:'2026-06-08',heure:'08:30',diff:'modere',   note:4.6, cap:10},
  {id:18, nom:'Soirée taverne albanaise',          ville:'Saranda', pays:'Albanie',             cat:'Gastronomie', prix:12,  duree:180,  date:'2026-06-09',heure:'19:00',diff:'facile',   note:4.8, cap:20},
  // MONTENEGRO
  {id:19, nom:'Kayak dans la baie de Kotor',       ville:'Kotor',   pays:'Monténégro',          cat:'Sport',       prix:16,  duree:240,  date:'2026-06-06',heure:'07:00',diff:'facile',   note:4.8, cap:10},
  {id:20, nom:'Visite de la vieille ville Kotor',  ville:'Kotor',   pays:'Monténégro',          cat:'Culture',     prix:8,   duree:180,  date:'2026-06-07',heure:'10:00',diff:'modere',   note:4.9, cap:20},
  {id:21, nom:'Journée plage Sveti Stefan',        ville:'Budva',   pays:'Monténégro',          cat:'Detente',     prix:15,  duree:480,  date:'2026-06-08',heure:'09:00',diff:'facile',   note:4.7, cap:30},
  {id:22, nom:'Croisière coucher de soleil',       ville:'Kotor',   pays:'Monténégro',          cat:'Detente',     prix:20,  duree:180,  date:'2026-06-09',heure:'17:30',diff:'facile',   note:4.8, cap:15},
  // KOH LANTA
  {id:23, nom:'Cours de plongée certifié PADI',    ville:'Koh Lanta',pays:'Thaïlande',          cat:'Sport',       prix:85,  duree:2880, date:'2026-06-11',heure:'08:00',diff:'modere',   note:4.9, cap:6},
  {id:24, nom:'Tour des 4 îles en bateau',         ville:'Koh Lanta',pays:'Thaïlande',          cat:'Nature',      prix:25,  duree:540,  date:'2026-06-12',heure:'08:00',diff:'facile',   note:4.8, cap:20},
  {id:25, nom:'Cours de cuisine thaïlandaise',     ville:'Koh Lanta',pays:'Thaïlande',          cat:'Gastronomie', prix:18,  duree:300,  date:'2026-06-13',heure:'09:00',diff:'facile',   note:4.7, cap:8},
  {id:26, nom:'Yoga au bord de la mer',            ville:'Koh Lanta',pays:'Thaïlande',          cat:'Detente',     prix:8,   duree:90,   date:'2026-06-14',heure:'06:30',diff:'facile',   note:4.8, cap:15},
  {id:27, nom:'Kayak dans la mangrove',            ville:'Koh Lanta',pays:'Thaïlande',          cat:'Nature',      prix:14,  duree:240,  date:'2026-06-15',heure:'08:00',diff:'facile',   note:4.6, cap:10},
  // ESSAOUIRA
  {id:28, nom:'Cours de kitesurf',                 ville:'Essaouira',pays:'Maroc',              cat:'Sport',       prix:35,  duree:240,  date:'2026-06-06',heure:'09:00',diff:'modere',   note:4.7, cap:6},
  {id:29, nom:'Visite médina et remparts',         ville:'Essaouira',pays:'Maroc',              cat:'Culture',     prix:8,   duree:180,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.6, cap:15},
  {id:30, nom:'Atelier de cuisine marocaine',      ville:'Essaouira',pays:'Maroc',              cat:'Gastronomie', prix:20,  duree:300,  date:'2026-06-08',heure:'10:00',diff:'facile',   note:4.8, cap:8},
  // EL NIDO
  {id:31, nom:'Tour A : lagons secrets',           ville:'El Nido', pays:'Philippines',         cat:'Nature',      prix:15,  duree:480,  date:'2026-06-11',heure:'08:00',diff:'facile',   note:4.9, cap:15},
  {id:32, nom:'Tour C : plages isolées',           ville:'El Nido', pays:'Philippines',         cat:'Nature',      prix:15,  duree:480,  date:'2026-06-12',heure:'08:00',diff:'facile',   note:4.8, cap:15},
  {id:33, nom:'Plongée récifs de Palawan',         ville:'El Nido', pays:'Philippines',         cat:'Sport',       prix:28,  duree:300,  date:'2026-06-13',heure:'07:00',diff:'modere',   note:4.9, cap:8},
  {id:34, nom:'Kayak au coucher de soleil',        ville:'El Nido', pays:'Philippines',         cat:'Detente',     prix:10,  duree:180,  date:'2026-06-14',heure:'16:00',diff:'facile',   note:4.8, cap:12},
  {id:35, nom:'Cours de cuisine philippine',       ville:'El Nido', pays:'Philippines',         cat:'Gastronomie', prix:14,  duree:240,  date:'2026-06-15',heure:'10:00',diff:'facile',   note:4.7, cap:8},
  // ZANZIBAR
  {id:36, nom:'Tour historique de Stone Town',     ville:'Stone Town',pays:'Tanzanie',          cat:'Culture',     prix:10,  duree:240,  date:'2026-06-09',heure:'09:00',diff:'facile',   note:4.8, cap:15},
  {id:37, nom:'Tour de la plantation d\'épices',   ville:'Stone Town',pays:'Tanzanie',          cat:'Nature',      prix:12,  duree:240,  date:'2026-06-10',heure:'09:30',diff:'facile',   note:4.7, cap:20},
  {id:38, nom:'Plongée Mnemba Atoll',              ville:'Nungwi',  pays:'Tanzanie',            cat:'Sport',       prix:35,  duree:300,  date:'2026-06-11',heure:'08:00',diff:'modere',   note:4.9, cap:8},
  {id:39, nom:'Croisière coucher de soleil dhow',  ville:'Stone Town',pays:'Tanzanie',          cat:'Detente',     prix:20,  duree:180,  date:'2026-06-12',heure:'17:00',diff:'facile',   note:4.9, cap:15},
  {id:40, nom:'Safari forêt de Jozani',            ville:'Jozani',  pays:'Tanzanie',            cat:'Nature',      prix:15,  duree:240,  date:'2026-06-13',heure:'08:00',diff:'facile',   note:4.7, cap:12},
  // GEORGIE
  {id:41, nom:'Trek Svanétie Mestia–Ushguli',      ville:'Mestia',  pays:'Géorgie',             cat:'Aventure',    prix:45,  duree:5760, date:'2026-06-09',heure:'07:00',diff:'difficile',note:4.9, cap:10},
  {id:42, nom:'Dégustation vins de Kakhétie',      ville:'Sighnaghi',pays:'Géorgie',            cat:'Gastronomie', prix:15,  duree:240,  date:'2026-06-10',heure:'11:00',diff:'facile',   note:4.8, cap:12},
  {id:43, nom:'Randonnée vers Kazbegi',            ville:'Kazbegi', pays:'Géorgie',             cat:'Aventure',    prix:12,  duree:300,  date:'2026-06-11',heure:'08:00',diff:'modere',   note:4.9, cap:15},
  {id:44, nom:'Cours de cuisine géorgienne',       ville:'Tbilissi',pays:'Géorgie',             cat:'Gastronomie', prix:18,  duree:240,  date:'2026-06-12',heure:'10:00',diff:'facile',   note:4.8, cap:8},
  {id:45, nom:'Bains sulfureux Abanotubani',       ville:'Tbilissi',pays:'Géorgie',             cat:'Detente',     prix:8,   duree:120,  date:'2026-06-13',heure:'10:00',diff:'facile',   note:4.7, cap:20},
  // ALBANIE NORD
  {id:46, nom:'Trek Peaks of the Balkans',         ville:'Shkodër', pays:'Albanie',             cat:'Aventure',    prix:20,  duree:480,  date:'2026-06-06',heure:'07:00',diff:'difficile',note:4.9, cap:10},
  {id:47, nom:'Canoë sur le lac de Shkodra',       ville:'Shkodër', pays:'Albanie',             cat:'Nature',      prix:12,  duree:240,  date:'2026-06-07',heure:'08:00',diff:'facile',   note:4.7, cap:10},
  {id:48, nom:'Visite château de Rozafa',          ville:'Shkodër', pays:'Albanie',             cat:'Culture',     prix:5,   duree:150,  date:'2026-06-08',heure:'10:00',diff:'facile',   note:4.6, cap:20},
  // MACEDOINE
  {id:49, nom:'Tour du lac d\'Ohrid en bateau',    ville:'Ohrid',   pays:'Macédoine du Nord',   cat:'Nature',      prix:10,  duree:240,  date:'2026-06-06',heure:'10:00',diff:'facile',   note:4.8, cap:20},
  {id:50, nom:'Visite des monastères byzantins',   ville:'Ohrid',   pays:'Macédoine du Nord',   cat:'Culture',     prix:8,   duree:300,  date:'2026-06-07',heure:'09:00',diff:'facile',   note:4.7, cap:15},
  {id:51, nom:'Randonnée mont Galicica',           ville:'Ohrid',   pays:'Macédoine du Nord',   cat:'Aventure',    prix:6,   duree:360,  date:'2026-06-08',heure:'07:30',diff:'modere',   note:4.6, cap:12},
  // KIRGHIZISTAN
  {id:52, nom:'Nuit en yourte bord de Son Kol',    ville:'Son-Kol', pays:'Kirghizistan',        cat:'Culture',     prix:25,  duree:1440, date:'2026-06-09',heure:'14:00',diff:'modere',   note:4.9, cap:8},
  {id:53, nom:'Randonnée à cheval Jyrgalan',       ville:'Jyrgalan',pays:'Kirghizistan',        cat:'Aventure',    prix:30,  duree:360,  date:'2026-06-10',heure:'09:00',diff:'modere',   note:4.8, cap:6},
  {id:54, nom:'Visite bazar de Osh',               ville:'Osh',     pays:'Kirghizistan',        cat:'Gastronomie', prix:10,  duree:240,  date:'2026-06-11',heure:'09:00',diff:'facile',   note:4.7, cap:15},
  // MONTENEGRO INTERIEUR
  {id:55, nom:'Rafting canyon de la Tara',         ville:'Žabljak', pays:'Monténégro',          cat:'Aventure',    prix:30,  duree:480,  date:'2026-06-06',heure:'08:00',diff:'modere',   note:4.9, cap:10},
  {id:56, nom:'Randonnée lac Noir Durmitor',       ville:'Žabljak', pays:'Monténégro',          cat:'Nature',      prix:8,   duree:300,  date:'2026-06-07',heure:'08:00',diff:'facile',   note:4.8, cap:15},
  {id:57, nom:'Via ferrata Durmitor',              ville:'Žabljak', pays:'Monténégro',          cat:'Sport',       prix:22,  duree:360,  date:'2026-06-08',heure:'07:30',diff:'difficile',note:4.7, cap:8},
  // LISBONNE
  {id:58, nom:'Soirée Fado et gastronomie',        ville:'Lisbonne',pays:'Portugal',            cat:'Culture',     prix:28,  duree:240,  date:'2026-06-04',heure:'19:30',diff:'facile',   note:4.9, cap:20},
  {id:59, nom:'Cours de surf à Cascais',           ville:'Cascais', pays:'Portugal',            cat:'Sport',       prix:35,  duree:240,  date:'2026-06-05',heure:'09:00',diff:'facile',   note:4.7, cap:8},
  {id:60, nom:'Tour en tuk-tuk Alfama',            ville:'Lisbonne',pays:'Portugal',            cat:'Visite',      prix:18,  duree:120,  date:'2026-06-06',heure:'10:00',diff:'facile',   note:4.8, cap:6},
  {id:61, nom:'Atelier de céramique azulejo',      ville:'Lisbonne',pays:'Portugal',            cat:'Culture',     prix:22,  duree:180,  date:'2026-06-07',heure:'14:00',diff:'facile',   note:4.7, cap:10},
  {id:62, nom:'Excursion Sintra palais royaux',    ville:'Sintra',  pays:'Portugal',            cat:'Visite',      prix:25,  duree:480,  date:'2026-06-08',heure:'09:00',diff:'facile',   note:4.9, cap:15},
  {id:63, nom:'Food tour Mercado da Ribeira',      ville:'Lisbonne',pays:'Portugal',            cat:'Gastronomie', prix:15,  duree:180,  date:'2026-06-09',heure:'11:00',diff:'facile',   note:4.8, cap:12},
  // BUDAPEST
  {id:64, nom:'Bain thermal Széchenyi',            ville:'Budapest',pays:'Hongrie',             cat:'Detente',     prix:18,  duree:180,  date:'2026-06-05',heure:'10:00',diff:'facile',   note:4.8, cap:100},
  {id:65, nom:'Croisière Danube by night',         ville:'Budapest',pays:'Hongrie',             cat:'Visite',      prix:15,  duree:90,   date:'2026-06-06',heure:'20:30',diff:'facile',   note:4.9, cap:40},
  {id:66, nom:'Tour des ruin-bars de Budapest',    ville:'Budapest',pays:'Hongrie',             cat:'Nightlife',   prix:12,  duree:180,  date:'2026-06-07',heure:'20:00',diff:'facile',   note:4.8, cap:20},
  {id:67, nom:'Vélo tour de Budapest',             ville:'Budapest',pays:'Hongrie',             cat:'Visite',      prix:14,  duree:180,  date:'2026-06-08',heure:'09:30',diff:'facile',   note:4.7, cap:15},
  {id:68, nom:'Atelier cuisine hongroise',         ville:'Budapest',pays:'Hongrie',             cat:'Gastronomie', prix:20,  duree:240,  date:'2026-06-09',heure:'11:00',diff:'facile',   note:4.8, cap:8},
  // TBILISSI
  {id:69, nom:'Tour street art Fabrika',           ville:'Tbilissi',pays:'Géorgie',             cat:'Culture',     prix:10,  duree:180,  date:'2026-06-05',heure:'11:00',diff:'facile',   note:4.7, cap:15},
  {id:70, nom:'Bain sulfureux privatif Tbilissi',  ville:'Tbilissi',pays:'Géorgie',             cat:'Detente',     prix:8,   duree:90,   date:'2026-06-06',heure:'12:00',diff:'facile',   note:4.8, cap:4},
  {id:71, nom:'Dégustation vin naturel géorgien',  ville:'Tbilissi',pays:'Géorgie',             cat:'Gastronomie', prix:15,  duree:120,  date:'2026-06-07',heure:'18:00',diff:'facile',   note:4.9, cap:10},
  {id:72, nom:'Randonnée Mtatsminda',              ville:'Tbilissi',pays:'Géorgie',             cat:'Nature',      prix:6,   duree:240,  date:'2026-06-08',heure:'09:00',diff:'modere',   note:4.7, cap:20},
  {id:73, nom:'Visite vieille ville de Tbilissi',  ville:'Tbilissi',pays:'Géorgie',             cat:'Visite',      prix:12,  duree:180,  date:'2026-06-09',heure:'10:00',diff:'facile',   note:4.8, cap:15},
  // HANOI
  {id:74, nom:'Street food tour Hanoï by night',   ville:'Hanoï',   pays:'Vietnam',             cat:'Gastronomie', prix:12,  duree:180,  date:'2026-06-09',heure:'18:30',diff:'facile',   note:4.9, cap:12},
  {id:75, nom:'Cours de cuisine vietnamienne',     ville:'Hanoï',   pays:'Vietnam',             cat:'Gastronomie', prix:18,  duree:300,  date:'2026-06-10',heure:'09:00',diff:'facile',   note:4.8, cap:8},
  {id:76, nom:'Vélo dans le vieux quartier',       ville:'Hanoï',   pays:'Vietnam',             cat:'Visite',      prix:10,  duree:180,  date:'2026-06-11',heure:'08:00',diff:'facile',   note:4.7, cap:10},
  {id:77, nom:'Croisière baie d\'Ha Long 2 jours', ville:'Hanoï',   pays:'Vietnam',             cat:'Nature',      prix:75,  duree:2880, date:'2026-06-12',heure:'08:00',diff:'facile',   note:4.9, cap:16},
  {id:78, nom:'Spectacle marionnettes sur eau',    ville:'Hanoï',   pays:'Vietnam',             cat:'Culture',     prix:5,   duree:60,   date:'2026-06-13',heure:'18:00',diff:'facile',   note:4.7, cap:100},
  // CRACOVIE
  {id:79, nom:'Visite Auschwitz-Birkenau',         ville:'Cracovie',pays:'Pologne',             cat:'Culture',     prix:15,  duree:480,  date:'2026-06-06',heure:'08:00',diff:'facile',   note:4.9, cap:15},
  {id:80, nom:'Tour vieille ville de Cracovie',    ville:'Cracovie',pays:'Pologne',             cat:'Visite',      prix:10,  duree:240,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.8, cap:20},
  {id:81, nom:'Food tour polonais',                ville:'Cracovie',pays:'Pologne',             cat:'Gastronomie', prix:14,  duree:180,  date:'2026-06-08',heure:'12:00',diff:'facile',   note:4.7, cap:10},
  // MEXICO CITY
  {id:82, nom:'Visite de Teotihuacan',             ville:'Mexico City',pays:'Mexique',          cat:'Visite',      prix:18,  duree:480,  date:'2026-06-06',heure:'08:00',diff:'modere',   note:4.9, cap:15},
  {id:83, nom:'Street food tour Coyoacan',         ville:'Mexico City',pays:'Mexique',          cat:'Gastronomie', prix:15,  duree:180,  date:'2026-06-07',heure:'12:00',diff:'facile',   note:4.8, cap:12},
  {id:84, nom:'Visite musée Frida Kahlo',          ville:'Mexico City',pays:'Mexique',          cat:'Culture',     prix:12,  duree:150,  date:'2026-06-08',heure:'10:00',diff:'facile',   note:4.8, cap:10},
  {id:85, nom:'Soirée Lucha Libre',                ville:'Mexico City',pays:'Mexique',          cat:'Culture',     prix:15,  duree:180,  date:'2026-06-09',heure:'19:30',diff:'facile',   note:4.9, cap:50},
  // BELGRADE
  {id:86, nom:'Soirée splavovi sur la Sava',       ville:'Belgrade',pays:'Serbie',              cat:'Nightlife',   prix:15,  duree:300,  date:'2026-06-06',heure:'22:00',diff:'facile',   note:4.8, cap:20},
  {id:87, nom:'Tour forteresse Kalemegdan',        ville:'Belgrade',pays:'Serbie',              cat:'Visite',      prix:8,   duree:180,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.7, cap:20},
  {id:88, nom:'Food tour serbe traditionnel',      ville:'Belgrade',pays:'Serbie',              cat:'Gastronomie', prix:14,  duree:180,  date:'2026-06-08',heure:'13:00',diff:'facile',   note:4.8, cap:12},
  // MARRAKECH
  {id:89, nom:'Tour des souks de la médina',       ville:'Marrakech',pays:'Maroc',              cat:'Culture',     prix:12,  duree:240,  date:'2026-06-06',heure:'09:00',diff:'facile',   note:4.8, cap:12},
  {id:90, nom:'Excursion désert d\'Agafay',        ville:'Marrakech',pays:'Maroc',              cat:'Aventure',    prix:35,  duree:480,  date:'2026-06-07',heure:'09:00',diff:'facile',   note:4.9, cap:15},
  {id:91, nom:'Hammam traditionnel marocain',      ville:'Marrakech',pays:'Maroc',              cat:'Detente',     prix:18,  duree:120,  date:'2026-06-08',heure:'10:00',diff:'facile',   note:4.8, cap:8},
  {id:92, nom:'Cours de cuisine marocaine',        ville:'Marrakech',pays:'Maroc',              cat:'Gastronomie', prix:22,  duree:300,  date:'2026-06-09',heure:'10:00',diff:'facile',   note:4.9, cap:8},
  {id:93, nom:'Soirée place Jemaa el-Fna',         ville:'Marrakech',pays:'Maroc',              cat:'Culture',     prix:10,  duree:180,  date:'2026-06-10',heure:'19:00',diff:'facile',   note:4.7, cap:15},
  // PRAGUE
  {id:94, nom:'Tour à vélo de Prague',             ville:'Prague',  pays:'République Tchèque',  cat:'Visite',      prix:14,  duree:180,  date:'2026-06-05',heure:'10:00',diff:'facile',   note:4.8, cap:15},
  {id:95, nom:'Dégustation de bières tchèques',    ville:'Prague',  pays:'République Tchèque',  cat:'Gastronomie', prix:18,  duree:240,  date:'2026-06-06',heure:'17:00',diff:'facile',   note:4.8, cap:12},
  {id:96, nom:'Visite château de Prague',          ville:'Prague',  pays:'République Tchèque',  cat:'Visite',      prix:12,  duree:240,  date:'2026-06-07',heure:'09:00',diff:'facile',   note:4.9, cap:20},
  {id:97, nom:'Concert classique baroque',         ville:'Prague',  pays:'République Tchèque',  cat:'Culture',     prix:20,  duree:90,   date:'2026-06-08',heure:'20:00',diff:'facile',   note:4.8, cap:80},
  // SEVILLE
  {id:98, nom:'Cours de flamenco',                 ville:'Séville', pays:'Espagne',             cat:'Culture',     prix:20,  duree:90,   date:'2026-06-05',heure:'18:00',diff:'facile',   note:4.9, cap:12},
  {id:99, nom:'Tour tapas dans Triana',            ville:'Séville', pays:'Espagne',             cat:'Gastronomie', prix:22,  duree:180,  date:'2026-06-06',heure:'13:00',diff:'facile',   note:4.8, cap:12},
  {id:100,nom:'Visite Alcazar et cathédrale',      ville:'Séville', pays:'Espagne',             cat:'Visite',      prix:15,  duree:240,  date:'2026-06-07',heure:'09:00',diff:'facile',   note:4.9, cap:15},
  {id:101,nom:'Balade en calèche andalouse',       ville:'Séville', pays:'Espagne',             cat:'Visite',      prix:12,  duree:60,   date:'2026-06-08',heure:'17:30',diff:'facile',   note:4.7, cap:4},
  // ATLAS MAROCAIN
  {id:102,nom:'Ascension Toubkal J1',              ville:'Imlil',   pays:'Maroc',               cat:'Aventure',    prix:30,  duree:480,  date:'2026-06-08',heure:'07:00',diff:'difficile',note:4.9, cap:8},
  {id:103,nom:'Ascension Toubkal J2 – Sommet',     ville:'Imlil',   pays:'Maroc',               cat:'Aventure',    prix:30,  duree:600,  date:'2026-06-09',heure:'04:00',diff:'difficile',note:4.9, cap:8},
  {id:104,nom:'Nuit chez l\'habitant berbère',     ville:'Imlil',   pays:'Maroc',               cat:'Culture',     prix:25,  duree:720,  date:'2026-06-08',heure:'18:00',diff:'facile',   note:4.8, cap:6},
  // COSTA RICA
  {id:105,nom:'Cours de surf à Santa Teresa',      ville:'Santa Teresa',pays:'Costa Rica',      cat:'Sport',       prix:35,  duree:240,  date:'2026-06-13',heure:'08:00',diff:'facile',   note:4.8, cap:8},
  {id:106,nom:'Randonnée volcan Arenal',           ville:'La Fortuna',pays:'Costa Rica',        cat:'Aventure',    prix:40,  duree:480,  date:'2026-06-14',heure:'08:00',diff:'modere',   note:4.9, cap:12},
  {id:107,nom:'Zip-line forêt de Monteverde',      ville:'Monteverde',pays:'Costa Rica',        cat:'Aventure',    prix:45,  duree:240,  date:'2026-06-15',heure:'09:00',diff:'modere',   note:4.8, cap:10},
  {id:108,nom:'Observation tortues Tortuguero',    ville:'Tortuguero',pays:'Costa Rica',        cat:'Nature',      prix:30,  duree:180,  date:'2026-06-16',heure:'21:00',diff:'facile',   note:4.9, cap:10},
  // VIETNAM MOTO
  {id:109,nom:'Easy Rider col de Hai Van',         ville:'Da Nang',  pays:'Vietnam',            cat:'Aventure',    prix:25,  duree:300,  date:'2026-06-14',heure:'07:00',diff:'modere',   note:4.9, cap:6},
  {id:110,nom:'Hoi An by night en vélo',           ville:'Hoi An',   pays:'Vietnam',            cat:'Visite',      prix:10,  duree:240,  date:'2026-06-15',heure:'17:00',diff:'facile',   note:4.8, cap:12},
  {id:111,nom:'Location moto Honda Win',           ville:'Hanoï',    pays:'Vietnam',            cat:'Aventure',    prix:12,  duree:20160,date:'2026-06-09',heure:'08:00',diff:'difficile',note:4.8, cap:1},
  // JORDANIE
  {id:112,nom:'Journée complète à Pétra',          ville:'Petra',    pays:'Jordanie',           cat:'Visite',      prix:20,  duree:600,  date:'2026-06-09',heure:'07:00',diff:'modere',   note:4.9, cap:15},
  {id:113,nom:'Nuit sous les étoiles Wadi Rum',    ville:'Wadi Rum', pays:'Jordanie',           cat:'Aventure',    prix:45,  duree:1440, date:'2026-06-10',heure:'16:00',diff:'facile',   note:4.9, cap:10},
  {id:114,nom:'Flottaison à la mer Morte',         ville:'Mer Morte',pays:'Jordanie',           cat:'Detente',     prix:15,  duree:240,  date:'2026-06-11',heure:'09:00',diff:'facile',   note:4.8, cap:20},
  {id:115,nom:'Snorkeling à Aqaba',                ville:'Aqaba',    pays:'Jordanie',           cat:'Nature',      prix:20,  duree:240,  date:'2026-06-12',heure:'08:00',diff:'facile',   note:4.7, cap:10},
  // CANARIES NATURE
  {id:116,nom:'Randonnée forêt de Garajonay',      ville:'San Sebastian',pays:'Espagne',        cat:'Nature',      prix:10,  duree:360,  date:'2026-06-06',heure:'08:00',diff:'modere',   note:4.8, cap:12},
  {id:117,nom:'Observation des étoiles La Palma',  ville:'Santa Cruz de La Palma',pays:'Espagne',cat:'Nature',     prix:25,  duree:180,  date:'2026-06-07',heure:'21:00',diff:'facile',   note:4.9, cap:10},
  // ACORES
  {id:118,nom:'Whale watching à São Miguel',       ville:'Ponta Delgada',pays:'Portugal',       cat:'Nature',      prix:45,  duree:300,  date:'2026-06-06',heure:'08:00',diff:'facile',   note:4.9, cap:12},
  {id:119,nom:'Bain thermal caldeira Furnas',      ville:'Furnas',   pays:'Portugal',           cat:'Detente',     prix:5,   duree:180,  date:'2026-06-07',heure:'10:00',diff:'facile',   note:4.8, cap:50},
  {id:120,nom:'Randonnée lac des Sept Cités',      ville:'Sete Cidades',pays:'Portugal',        cat:'Nature',      prix:8,   duree:300,  date:'2026-06-08',heure:'08:00',diff:'modere',   note:4.9, cap:15},
];

/* ═══════════════════════════════════════
   CONFIG
═══════════════════════════════════════ */
const CAT_INFO = {
  Culture:     {bg:'bg-culture',    badge:'badge-culture'},
  Nature:      {bg:'bg-nature',     badge:'badge-nature'},
  Sport:       {bg:'bg-sport',      badge:'badge-sport'},
  Gastronomie: {bg:'bg-gastronomie',badge:'badge-gastronomie'},
  Detente:     {bg:'bg-detente',    badge:'badge-detente'},
  Aventure:    {bg:'bg-aventure',   badge:'badge-aventure'},
  Visite:      {bg:'bg-visite',     badge:'badge-visite'},
  Nightlife:   {bg:'bg-nightlife',  badge:'badge-nightlife'},
};

const DIFF_LABEL = {facile:'Facile', modere:'Modéré', difficile:'Difficile'};
const DIFF_COLOR = {facile:'diff-easy', modere:'diff-med', difficile:'diff-hard'};

const state = {
  dest: '', date: '', cat: '', participants: 0,
  searched: false, sort: 'prix-asc',
};

const liked = new Set();

/* ═══════════════════════════════════════
   HELPERS
═══════════════════════════════════════ */
function fmtDuree(min) {
  if (min >= 1440) return Math.round(min/1440) + 'j';
  const h = Math.floor(min/60), m = min%60;
  return m ? `${h}h${String(m).padStart(2,'0')}` : `${h}h`;
}
function getMoment(h) {
  const n = parseInt(h);
  if (n < 12) return 'Matin';
  if (n < 18) return 'Après-midi';
  return 'Soir';
}
function getDureeLabel(min) {
  if (min < 240) return 'Demi-journée';
  if (min < 480) return 'Journée';
  return 'Journée complète';
}
function starHTML(note) {
  const full = Math.floor(note), half = note%1>=0.5?1:0;
  let s='';
  for(let i=0;i<full;i++) s+='★';
  if(half) s+='½';
  return s;
}

/* ═══════════════════════════════════════
   FILTER & RENDER
═══════════════════════════════════════ */
function applyAndRender() {
  state.sort = document.getElementById('sortSelect').value;
  let data = [...ACTIVITIES];

  if (state.searched) {
    if (state.dest) {
      const q = state.dest.toLowerCase();
      data = data.filter(a => a.ville.toLowerCase().includes(q) || a.pays.toLowerCase().includes(q));
    }
    if (state.date) data = data.filter(a => a.date >= state.date);
    if (state.cat)  data = data.filter(a => a.cat === state.cat);
  }

  /* Filter: categories */
  const catChecked = [...document.querySelectorAll('.f-cat:checked')].map(e=>e.value);
  if (catChecked.length) data = data.filter(a => catChecked.includes(a.cat));

  /* Filter: prix max */
  const pm = document.getElementById('prixSlider');
  if (pm) data = data.filter(a => a.prix <= parseInt(pm.value));

  /* Filter: durée */
  const durChecked = [...document.querySelectorAll('.f-duree:checked')].map(e=>e.value);
  if (durChecked.length) data = data.filter(a => durChecked.includes(getDureeLabel(a.duree)));

  /* Filter: moment */
  const momChecked = [...document.querySelectorAll('.f-moment:checked')].map(e=>e.value);
  if (momChecked.length) data = data.filter(a => momChecked.includes(getMoment(a.heure)));

  /* Filter: difficulté */
  const diffChecked = [...document.querySelectorAll('.f-diff:checked')].map(e=>e.value);
  if (diffChecked.length) data = data.filter(a => diffChecked.includes(a.diff));

  /* Filter: note min */
  const noteMin = document.querySelector('.f-note:checked');
  if (noteMin && noteMin.value !== 'all') data = data.filter(a => a.note >= parseFloat(noteMin.value));

  /* Sort */
  data.sort((a,b) => {
    if (state.sort==='prix-asc')  return a.prix-b.prix;
    if (state.sort==='prix-desc') return b.prix-a.prix;
    if (state.sort==='note-desc') return b.note-a.note;
    if (state.sort==='duree-asc') return a.duree-b.duree;
    return 0;
  });

  renderResults(data);
}

function renderResults(data) {
  const list = document.getElementById('resultsList');
  const cnt  = document.getElementById('resultsCount');
  const n = data.length;
  cnt.innerHTML = `<strong>${n}</strong> activité${n>1?'s':''} disponible${n>1?'s':''}`;
  if (!n) {
    list.innerHTML = `<div class="no-results"><div class="emoji">🔍</div><p>Aucune activité ne correspond à vos critères.</p><p style="font-size:.85rem;margin-top:4px">Essayez de modifier vos filtres ou votre recherche.</p></div>`;
    return;
  }
  list.innerHTML = data.map(a => renderCard(a)).join('');
}

function renderCard(a) {
  const ci = CAT_INFO[a.cat] || CAT_INFO['Visite'];
  const isLiked = liked.has(a.id);
  return `
  <div class="act-card" onclick="openActivity(${a.id})">
    <div class="ac-photo ${ci.bg}">
      <span class="cat-badge ${ci.badge}">${a.cat}</span>
      <div class="ac-photo-icon">${ci.icon}</div>
      <button class="heart-btn ${isLiked?'liked':''}" onclick="event.stopPropagation();toggleLike(${a.id},this)" title="Ajouter aux favoris">${isLiked?'♥':'♡'}</button>
    </div>
    <div class="ac-body">
      <div class="ac-name">${a.nom}</div>
      <div class="ac-location">📍 ${a.ville}, ${a.pays}</div>
      <div class="ac-footer">
        <span class="ac-info-tag">⏱ ${fmtDuree(a.duree)}</span>
        <span class="ac-info-tag ${DIFF_COLOR[a.diff]}">${DIFF_LABEL[a.diff]}</span>
        <span class="ac-info-tag">${getMoment(a.heure)}</span>
        <span class="ac-stars">${starHTML(a.note)} ${a.note.toFixed(1)}</span>
        <span class="ac-price">${a.prix}€<small>/pers.</small></span>
      </div>
      <button class="btn-reserver" onclick="event.stopPropagation();reserverActivity(${a.id})">Réserver</button>
    </div>
  </div>`;
}

/* ═══════════════════════════════════════
   FILTERS PANEL
═══════════════════════════════════════ */
function renderFilters() {
  const allPrix = ACTIVITIES.map(a=>a.prix);
  const maxPrix = Math.ceil(Math.max(...allPrix)/10)*10;

  let html = '';

  /* Prix */
  html += `<div class="f-section">
    <div class="f-section-title">Prix max / personne</div>
    <div class="price-wrap">
      <input type="range" class="price-slider" id="prixSlider" min="0" max="${maxPrix}" value="${maxPrix}" step="5"
        oninput="document.getElementById('prixVal').textContent=this.value;applyAndRender()">
      <div class="price-info">
        <span class="price-min">0 €</span>
        <span class="price-val"><span id="prixVal">${maxPrix}</span> €</span>
      </div>
    </div>
  </div>`;

  /* Catégorie */
  const cats = [...new Set(ACTIVITIES.map(a=>a.cat))].sort();
  html += `<div class="f-section">
    <div class="f-section-title">Catégorie</div>
    ${cats.map(c=>`<label class="f-check"><input type="checkbox" class="f-cat" value="${c}" onchange="applyAndRender()"> ${CAT_INFO[c]?.icon||''} ${c}</label>`).join('')}
  </div>`;

  /* Durée */
  html += `<div class="f-section">
    <div class="f-section-title">Durée</div>
    <label class="f-check"><input type="checkbox" class="f-duree" value="Demi-journée" onchange="applyAndRender()"> Demi-journée (&lt; 4h)</label>
    <label class="f-check"><input type="checkbox" class="f-duree" value="Journée" onchange="applyAndRender()"> Journée (4h – 8h)</label>
    <label class="f-check"><input type="checkbox" class="f-duree" value="Journée complète" onchange="applyAndRender()"> Journée complète (&gt; 8h)</label>
  </div>`;

  /* Moment */
  html += `<div class="f-section">
    <div class="f-section-title">Moment de la journée</div>
    <label class="f-check"><input type="checkbox" class="f-moment" value="Matin" onchange="applyAndRender()"> Matin (avant 12h)</label>
    <label class="f-check"><input type="checkbox" class="f-moment" value="Après-midi" onchange="applyAndRender()"> Après-midi (12h–18h)</label>
    <label class="f-check"><input type="checkbox" class="f-moment" value="Soir" onchange="applyAndRender()"> Soir (après 18h)</label>
  </div>`;

  /* Difficulté */
  html += `<div class="f-section">
    <div class="f-section-title">Difficulté</div>
    <label class="f-check"><input type="checkbox" class="f-diff" value="facile" onchange="applyAndRender()"> <span class="diff-easy">● Facile</span></label>
    <label class="f-check"><input type="checkbox" class="f-diff" value="modere" onchange="applyAndRender()"> <span class="diff-med">● Modéré</span></label>
    <label class="f-check"><input type="checkbox" class="f-diff" value="difficile" onchange="applyAndRender()"> <span class="diff-hard">● Difficile</span></label>
  </div>`;

  /* Note minimale */
  html += `<div class="f-section">
    <div class="f-section-title">Note minimale</div>
    <label class="f-radio"><input type="radio" class="f-note" name="note" value="all" checked onchange="applyAndRender()"> Toutes les notes</label>
    <label class="f-radio"><input type="radio" class="f-note" name="note" value="4" onchange="applyAndRender()"> ★ 4.0 et plus</label>
    <label class="f-radio"><input type="radio" class="f-note" name="note" value="4.5" onchange="applyAndRender()"> ★ 4.5 et plus</label>
    <label class="f-radio"><input type="radio" class="f-note" name="note" value="4.8" onchange="applyAndRender()"> ★ 4.8 et plus</label>
  </div>`;

  document.getElementById('filtersContent').innerHTML = html;
}

function resetFilters() {
  document.querySelectorAll('.f-cat,.f-duree,.f-moment,.f-diff').forEach(e=>e.checked=false);
  document.querySelectorAll('.f-note').forEach((e,i)=>e.checked=i===0);
  const ps = document.getElementById('prixSlider');
  if (ps) { ps.value=ps.max; document.getElementById('prixVal').textContent=ps.max; }
  applyAndRender();
}

/* ═══════════════════════════════════════
   SEARCH
═══════════════════════════════════════ */
function doSearch() {
  state.dest  = document.getElementById('inDest').value.trim();
  state.date  = document.getElementById('inDate').value;
  state.cat   = document.getElementById('inCat').value;
  state.searched = true;
  applyAndRender();
}

/* Enter key triggers search */
document.addEventListener('keydown', e => { if(e.key==='Enter') doSearch(); });

/* Autocomplete datalist */
function buildDataLists() {
  const villes = [...new Set(ACTIVITIES.map(a=>a.ville))].sort();
  const pays   = [...new Set(ACTIVITIES.map(a=>a.pays))].sort();
  const all    = [...new Set([...villes,...pays])].sort();
  document.getElementById('destList').innerHTML = all.map(v=>`<option value="${v}">`).join('');
}

/* ═══════════════════════════════════════
   VOYAGEURS
═══════════════════════════════════════ */
const voy = {adults:0, children:0};
function toggleVoy(e) {
  if(e.target.classList.contains('voy-btn')) return;
  document.getElementById('voyPanel').classList.toggle('open');
}
document.addEventListener('click', e => {
  if(!document.getElementById('voyField').contains(e.target))
    document.getElementById('voyPanel').classList.remove('open');
});
function changeVoy(type, delta, e) {
  e.stopPropagation();
  voy[type] = Math.max(0, voy[type]+delta);
  document.getElementById(type==='adults'?'cntAdults':'cntChildren').textContent = voy[type];
  const total = voy.adults+voy.children;
  const el = document.getElementById('voyDisplay');
  if(!total){el.textContent='Nombre de personnes';el.className='voy-val ph';return;}
  const parts=[];
  if(voy.adults)   parts.push(voy.adults+' adulte'+(voy.adults>1?'s':''));
  if(voy.children) parts.push(voy.children+' enfant'+(voy.children>1?'s':''));
  el.textContent=parts.join(', ');
  el.className='voy-val';
}

/* ═══════════════════════════════════════
   LIKE & RESERVE
═══════════════════════════════════════ */
function toggleLike(id, btn) {
  if(liked.has(id)){liked.delete(id);btn.textContent='♡';btn.classList.remove('liked');}
  else{liked.add(id);btn.textContent='♥';btn.classList.add('liked');}
}
function openActivity(id) {
  const a = ACTIVITIES.find(x=>x.id===id);
  if(!a) return;
  alert(`🎯 ${a.nom}\n📍 ${a.ville}, ${a.pays}\n⏱ Durée : ${fmtDuree(a.duree)} · ${getMoment(a.heure)}\n⭐ Note : ${a.note}/5\n💰 ${a.prix}€/pers.\n🎯 Difficulté : ${DIFF_LABEL[a.diff]}`);
}
function reserverActivity(id) {
  const a = ACTIVITIES.find(x=>x.id===id);
  if(!a) return;
  alert(`✅ Activité réservée !\n\n${a.nom}\n${a.ville}, ${a.pays}\n${a.prix}€/pers.\n\nAjoutée à votre itinéraire.`);
}

/* ═══════════════════════════════════════
   SIDEBAR / SCROLL
═══════════════════════════════════════ */
function updateSidebarBottom() {
  const footer = document.getElementById('footer');
  const sidebar = document.getElementById('sidebar');
  const footerTop = footer.getBoundingClientRect().top;
  const winH = window.innerHeight;
  sidebar.style.bottom = footerTop < winH ? (winH-footerTop)+'px' : '0px';
}
const btt = document.getElementById('backToTop');
window.addEventListener('scroll', () => {
  btt.classList.toggle('visible', window.scrollY>300);
  updateSidebarBottom();
});
window.addEventListener('resize', updateSidebarBottom);

/* ═══════════════════════════════════════
   INIT
═══════════════════════════════════════ */
buildDataLists();
renderFilters();
applyAndRender();
updateSidebarBottom();
</script>
</body>
</html>
