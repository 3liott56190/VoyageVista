<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VoyageVista – Mon Panier</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <style>
    :root{
      --bg:#f5f3ef; --surface:#fff; --border:#e2ddd6; --text:#1a1714;
      --muted:#788a7b; --accent:#013819; --accent-soft:#e4f5ea; --accent-dark:#012503;
      --red:#dc2626; --red-soft:#fef2f2; --red-border:#fecaca;
      --green:#16a34a; --green-soft:#f0fdf4; --green-border:#bbf7d0;
      --header-h:64px; --sidebar-w:200px; --radius:14px; --shadow:0 2px 16px rgba(0,0,0,.07);
    }
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    body{font-family:'DM Sans',sans-serif;background:var(--bg);color:var(--text);min-height:100vh;display:flex;flex-direction:column}

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

    /* ── SIDEBAR ── */
    aside{width:var(--sidebar-w);background:var(--surface);border-right:1px solid var(--border);position:fixed;top:var(--header-h);left:0;bottom:0;padding:20px 12px;display:flex;flex-direction:column;gap:4px;overflow-y:auto;z-index:80}
    .nav-item{display:flex;align-items:center;gap:10px;padding:10px 14px;border-radius:8px;text-decoration:none;font-size:.9rem;font-weight:400;color:var(--muted);transition:background .15s,color .15s}
    .nav-item svg{width:16px;height:16px;stroke:currentColor;fill:none;stroke-width:1.8;flex-shrink:0}
    .nav-item:hover{background:var(--accent-soft);color:var(--accent)}
    .nav-item.active{background:var(--accent);color:#fff;font-weight:500}
    .nav-item.active svg{stroke:#fff}

    /* ── PAGE HEADER ── */
    .page-header{margin-top:var(--header-h);margin-left:var(--sidebar-w);background:var(--surface);border-bottom:1px solid var(--border);padding:22px 32px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:12px}
    .page-eyebrow{font-size:.7rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:var(--accent);margin-bottom:4px}
    .page-title{font-family:'Playfair Display',serif;font-size:1.5rem;font-weight:700}
    .page-sub{font-size:.82rem;color:var(--muted);margin-top:2px}
    .btn-vider{height:36px;padding:0 16px;border:1.5px solid var(--red-border);border-radius:8px;background:none;font-family:'DM Sans',sans-serif;font-size:.82rem;font-weight:500;color:var(--red);cursor:pointer;display:flex;align-items:center;gap:6px;transition:all .18s}
    .btn-vider svg{width:14px;height:14px;stroke:currentColor;fill:none;stroke-width:2}
    .btn-vider:hover{background:var(--red);color:#fff}

    /* ── LAYOUT ── */
    .main-layout{margin-left:var(--sidebar-w);display:flex;gap:24px;padding:28px 28px 80px;flex:1;align-items:flex-start}
    .panier-items{flex:1;min-width:0;display:flex;flex-direction:column;gap:14px}

    /* ── CARTE ARTICLE ── */
    .article-card{background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);display:flex;transition:border-color .2s,box-shadow .2s}
    .article-card:hover{border-color:var(--accent);box-shadow:0 8px 28px rgba(1,56,25,.1)}
    .article-picto{width:80px;flex-shrink:0;display:flex;align-items:center;justify-content:center;font-size:2.2rem}
    .article-picto.dest    {background:linear-gradient(135deg,#e4f5ea,#c8e6d4)}
    .article-picto.heberg  {background:linear-gradient(135deg,#e8f4fd,#c8dff5)}
    .article-picto.transport{background:linear-gradient(135deg,#fff3e0,#ffe0b2)}
    .article-picto.activite{background:linear-gradient(135deg,#f3e5f5,#e1bee7)}
    .article-body{flex:1;padding:16px 18px;min-width:0}
    .article-type-badge{font-size:.62rem;font-weight:700;letter-spacing:.06em;text-transform:uppercase;padding:2px 8px;border-radius:99px;display:inline-block;margin-bottom:6px}
    .badge-dest    {background:#e4f5ea;color:#013819;border:1px solid #b8dfc0}
    .badge-heberg  {background:#e8f4fd;color:#0d47a1;border:1px solid #b3d4f5}
    .badge-transport{background:#fff3e0;color:#b8860b;border:1px solid #ffe082}
    .badge-activite{background:#f3e5f5;color:#6a1b9a;border:1px solid #ce93d8}
    .article-nom{font-family:'Playfair Display',serif;font-size:1.05rem;font-weight:700;color:var(--text);margin-bottom:4px;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
    .article-details{font-size:.78rem;color:var(--muted);line-height:1.6;margin-bottom:8px}
    .article-details span{margin-right:12px}
    .article-details svg{width:12px;height:12px;stroke:var(--muted);fill:none;stroke-width:2;vertical-align:middle;margin-right:3px}
    .article-footer{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;padding-top:10px;border-top:1px solid var(--border)}
    .article-voyageurs{font-size:.78rem;color:var(--muted)}
    .article-prix{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;color:var(--accent)}
    .article-prix-sub{font-size:.7rem;color:var(--muted);font-family:'DM Sans',sans-serif;font-weight:400}
    .btn-suppr{width:30px;height:30px;border:1.5px solid var(--border);border-radius:8px;background:none;cursor:pointer;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin:16px 14px 16px 0;transition:all .15s;align-self:center}
    .btn-suppr:hover{border-color:var(--red);background:var(--red-soft)}
    .btn-suppr svg{width:13px;height:13px;stroke:var(--muted);fill:none;stroke-width:2.5}
    .btn-suppr:hover svg{stroke:var(--red)}

    /* ── ÉTAT VIDE ── */
    .panier-vide{background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);padding:60px 24px;text-align:center;box-shadow:var(--shadow)}
    .panier-vide svg{width:48px;height:48px;stroke:var(--muted);fill:none;stroke-width:1.2;opacity:.35;margin-bottom:16px}
    .panier-vide h3{font-family:'Playfair Display',serif;font-size:1.2rem;font-weight:700;margin-bottom:8px}
    .panier-vide p{font-size:.85rem;color:var(--muted);margin-bottom:20px}
    .btn-explorer{display:inline-flex;align-items:center;gap:8px;height:40px;padding:0 20px;background:var(--accent);color:#fff;border:none;border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.85rem;font-weight:600;cursor:pointer;text-decoration:none;transition:background .18s}
    .btn-explorer:hover{background:var(--accent-dark)}

    /* ── SIDEBAR RÉCAP ── */
    .recap-sidebar{width:280px;flex-shrink:0;position:sticky;top:calc(var(--header-h) + 24px)}
    .recap-box{background:var(--surface);border:1.5px solid var(--border);border-radius:var(--radius);padding:22px;box-shadow:var(--shadow);margin-bottom:12px}
    .recap-title{font-family:'Playfair Display',serif;font-size:1rem;font-weight:700;margin-bottom:14px;padding-bottom:12px;border-bottom:1px solid var(--border)}
    .recap-line{display:flex;justify-content:space-between;align-items:center;font-size:.84rem;margin-bottom:9px;color:var(--text)}
    .recap-line .label{color:var(--muted)}
    .recap-line .val{font-weight:600}
    .recap-sep{height:1px;background:var(--border);margin:12px 0}
    .recap-total{display:flex;justify-content:space-between;align-items:baseline;margin-bottom:4px}
    .recap-total-label{font-size:.82rem;color:var(--muted)}
    .recap-total-val{font-family:'Playfair Display',serif;font-size:1.7rem;font-weight:700;color:var(--accent)}
    .recap-mention{font-size:.7rem;color:var(--muted);margin-bottom:16px}
    .btn-payer{width:100%;height:46px;background:var(--accent);color:#fff;border:none;border-radius:10px;font-family:'DM Sans',sans-serif;font-size:.92rem;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:8px;transition:background .18s;margin-bottom:8px}
    .btn-payer:hover{background:var(--accent-dark)}
    .btn-payer:disabled{opacity:.4;cursor:not-allowed}
    .btn-payer svg{width:15px;height:15px;stroke:#fff;fill:none;stroke-width:2.2}
    .btn-itin{width:100%;height:38px;background:none;border:1.5px solid var(--border);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.82rem;font-weight:500;color:var(--text);cursor:pointer;transition:border-color .18s,color .18s}
    .btn-itin:hover{border-color:var(--accent);color:var(--accent)}

    /* ── MODAL PAIEMENT ── */
    .modal-overlay{position:fixed;inset:0;background:rgba(0,0,0,.45);z-index:500;display:flex;align-items:center;justify-content:center;opacity:0;pointer-events:none;transition:opacity .22s}
    .modal-overlay.open{opacity:1;pointer-events:auto}
    .modal{background:var(--surface);border-radius:16px;width:480px;max-width:calc(100vw - 32px);max-height:88vh;overflow-y:auto;padding:28px;box-shadow:0 24px 64px rgba(0,0,0,.2);transform:translateY(18px);transition:transform .22s}
    .modal-overlay.open .modal{transform:translateY(0)}
    .modal-header{display:flex;align-items:center;justify-content:space-between;margin-bottom:20px}
    .modal-title{font-family:'Playfair Display',serif;font-size:1.15rem;font-weight:700}
    .modal-close{width:30px;height:30px;border:1.5px solid var(--border);border-radius:50%;background:none;cursor:pointer;display:flex;align-items:center;justify-content:center}
    .modal-close:hover{background:var(--accent-soft)}
    .modal-close svg{width:13px;height:13px;stroke:var(--text);fill:none;stroke-width:2}

    /* Résumé commande dans modal */
    .order-summary{background:var(--bg);border:1px solid var(--border);border-radius:10px;padding:14px 16px;margin-bottom:20px}
    .order-summary-title{font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);margin-bottom:10px}
    .order-line{display:flex;justify-content:space-between;font-size:.82rem;margin-bottom:6px}
    .order-line:last-child{margin-bottom:0;padding-top:8px;border-top:1px solid var(--border);font-weight:700;font-size:.9rem;color:var(--accent)}

    /* Formulaire paiement */
    .pay-section-label{font-size:.7rem;font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--muted);margin:16px 0 8px}
    .form-group{margin-bottom:12px}
    .form-label{display:block;font-size:.72rem;font-weight:600;letter-spacing:.05em;text-transform:uppercase;color:var(--muted);margin-bottom:5px}
    .form-input{width:100%;height:40px;padding:0 12px;border:1.5px solid var(--border);border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.86rem;color:var(--text);background:var(--bg);outline:none;transition:border-color .18s}
    .form-input:focus{border-color:var(--accent);background:#fff}
    .form-row{display:grid;grid-template-columns:1fr 1fr;gap:10px}

    /* Icones de carte */
    .card-icons{display:flex;gap:6px;margin-bottom:12px}
    .card-pill{padding:4px 10px;border:1px solid var(--border);border-radius:6px;font-size:.7rem;font-weight:700;color:var(--muted);background:var(--bg)}

    /* Sécurité SSL */
    .ssl-badge{display:flex;align-items:center;gap:8px;background:var(--green-soft);border:1px solid var(--green-border);border-radius:8px;padding:9px 12px;font-size:.74rem;color:var(--green);margin-bottom:16px}
    .ssl-badge svg{width:13px;height:13px;stroke:var(--green);fill:none;stroke-width:2;flex-shrink:0}

    .modal-footer{display:flex;gap:10px;padding-top:14px;border-top:1px solid var(--border);justify-content:flex-end}
    .btn-cancel{height:38px;padding:0 16px;border:1.5px solid var(--border);border-radius:8px;background:none;font-family:'DM Sans',sans-serif;font-size:.86rem;font-weight:500;color:var(--text);cursor:pointer}
    .btn-confirm{height:38px;padding:0 20px;border:none;border-radius:8px;background:var(--accent);font-family:'DM Sans',sans-serif;font-size:.86rem;font-weight:600;color:#fff;cursor:pointer;transition:background .18s;display:flex;align-items:center;gap:6px}
    .btn-confirm:hover{background:var(--accent-dark)}
    .btn-confirm svg{width:13px;height:13px;stroke:#fff;fill:none;stroke-width:2.5}

    /* Confirmation paiement */
    .confirm-box{text-align:center;padding:16px 0 8px}
    .confirm-check{width:58px;height:58px;background:var(--green-soft);border-radius:50%;display:flex;align-items:center;justify-content:center;margin:0 auto 16px}
    .confirm-check svg{width:26px;height:26px;stroke:var(--green);fill:none;stroke-width:2.5}
    .confirm-title{font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;margin-bottom:8px}
    .confirm-sub{font-size:.84rem;color:var(--muted);line-height:1.65}
    .confirm-num{display:inline-block;margin-top:12px;background:var(--accent-soft);color:var(--accent);font-weight:700;font-size:.85rem;padding:6px 16px;border-radius:8px;border:1px solid #b8dfc0}

    /* ── TOAST ── */
    .toast{position:fixed;bottom:24px;right:24px;background:var(--accent);color:#fff;padding:12px 20px;border-radius:10px;font-size:.84rem;font-weight:500;box-shadow:0 8px 24px rgba(0,0,0,.18);z-index:999;display:flex;align-items:center;gap:8px;transform:translateY(80px);opacity:0;transition:all .35s cubic-bezier(.22,.68,0,1.2);pointer-events:none}
    .toast.show{transform:translateY(0);opacity:1}
    .toast svg{width:15px;height:15px;stroke:#fff;fill:none;stroke-width:2.5}

    /* ── FOOTER ── */
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
  
    /* ── BANNIÈRE CONNEXION ── */
    .login-banner{margin-left:var(--sidebar-w);background:#fff9e6;border-bottom:2px solid #f5d87a;padding:12px 32px;display:flex;align-items:center;justify-content:space-between;gap:16px;flex-wrap:wrap}
    .login-banner-text{display:flex;align-items:center;gap:10px;font-size:.85rem;color:#92610a}
    .login-banner-text svg{width:16px;height:16px;stroke:#92610a;fill:none;stroke-width:2;flex-shrink:0}
    .btn-login-now{height:34px;padding:0 18px;background:#92610a;color:#fff;border:none;border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.82rem;font-weight:600;cursor:pointer;transition:background .18s;white-space:nowrap}
    .btn-login-now:hover{background:#7a5108}
    /* Overlay connexion requis */
    .pay-lock{position:relative}
    .pay-lock-overlay{position:absolute;inset:0;background:rgba(245,243,239,.85);backdrop-filter:blur(2px);border-radius:var(--radius);display:flex;flex-direction:column;align-items:center;justify-content:center;gap:12px;z-index:10;text-align:center;padding:20px}
    .pay-lock-overlay svg{width:32px;height:32px;stroke:var(--muted);fill:none;stroke-width:1.5;opacity:.6}
    .pay-lock-overlay p{font-size:.84rem;color:var(--muted);line-height:1.5}
    .btn-login-lock{height:38px;padding:0 20px;background:var(--accent);color:#fff;border:none;border-radius:8px;font-family:'DM Sans',sans-serif;font-size:.84rem;font-weight:600;cursor:pointer;transition:background .18s}
    .btn-login-lock:hover{background:var(--accent-dark)}
  </style>
</head>
<body>

<!-- HEADER -->
<header>
  <a href="catalogue.php" class="logo"><div class="logo-badge"><span>VoyageVista</span></div></a>
  <div class="header-right">
    <a href="mon-espace.php" class="icon-btn"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg></a>
    <a href="notifications.php" class="icon-btn"><svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg><span class="dot"></span></a>
    <button class="btn-connexion" id="btn-header-connexion" onclick="window.location='connexion.php'">Connexion</button>
  </div>
</header>

<!-- SIDEBAR -->
<aside>
  <a href="accueil.php"      class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>Accueil</a>
  <a href="catalogue.php"   class="nav-item"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>Catalogue</a>
  <a href="transport.php"   class="nav-item"><svg viewBox="0 0 24 24"><path d="M17.8 19.2 16 11l3.5-3.5C21 6 21 4 19.5 2.5S18 2 16.5 3.5L13 7 4.8 5.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.5 5.3c.3.4.8.5 1.3.3l.5-.2c.4-.3.6-.7.5-1.2z"/></svg>Transport</a>
  <a href="hebergement.php" class="nav-item"><svg viewBox="0 0 24 24"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg>Hébergement</a>
  <a href="activites.php"   class="nav-item"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>Activités</a>
  <a href="itineraire.php"  class="nav-item"><svg viewBox="0 0 24 24"><line x1="3" y1="12" x2="21" y2="12"/><polyline points="8 7 3 12 8 17"/><polyline points="16 7 21 12 16 17"/></svg>Itinéraire</a>
  <a href="panier.php"      class="nav-item active"><svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>Panier</a>
  <a href="notifications.php" class="nav-item"><svg viewBox="0 0 24 24"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>Notifications</a>
  <a href="mon-espace.php"  class="nav-item"><svg viewBox="0 0 24 24"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>Mon espace</a>
</aside>

<!-- PAGE HEADER -->
<div class="page-header">
  <div>
    <div class="page-eyebrow">Mon espace</div>
    <h1 class="page-title">Mon panier <span id="panier-count" style="font-size:1rem;font-weight:400;color:var(--muted);font-family:'DM Sans',sans-serif"></span></h1>
    <p class="page-sub">Vérifiez vos sélections et procédez au paiement.</p>
  </div>
  <button class="btn-vider" onclick="viderPanier()">
    <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/><path d="M10 11v6"/><path d="M14 11v6"/></svg>
    Vider le panier
  </button>
</div>

<!-- BANNIÈRE CONNEXION (visible si non connecté) -->
<div class="login-banner" id="login-banner" style="display:none">
  <div class="login-banner-text">
    <svg viewBox="0 0 24 24"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
    Vous devez être connecté pour finaliser votre achat.
  </div>
  <button class="btn-login-now" onclick="window.location.href='connexion.php'">Se connecter</button>
</div>

<!-- LAYOUT -->
<div class="main-layout">

  <!-- ARTICLES -->
  <div class="panier-items" id="panier-items"></div>

  <!-- RÉCAPITULATIF -->
  <div class="recap-sidebar pay-lock" id="recap-sidebar">
    <div class="recap-box">
      <div class="recap-title">Récapitulatif</div>
      <div id="recap-lines"></div>
      <div class="recap-sep"></div>
      <div class="recap-total">
        <span class="recap-total-label">Total</span>
        <span class="recap-total-val" id="recap-total">0 €</span>
      </div>
      <p class="recap-mention">TVA et frais inclus · Prix définitifs</p>
      <button class="btn-payer" id="btn-payer" onclick="ouvrirPaiement()" disabled>
        <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
        Payer maintenant
      </button>
      <button class="btn-itin" onclick="window.location.href='itineraire.php'">
        Ajouter à mon itinéraire
      </button>
    </div>
    <div style="background:var(--accent-soft);border:1px solid #b8dfc0;border-radius:10px;padding:12px 14px;font-size:.76rem;color:var(--accent);line-height:1.6">
      <strong>🔒 Paiement 100% sécurisé</strong><br>
      Vos données bancaires sont chiffrées et protégées.
    </div>
  </div>

</div>

<!-- MODAL PAIEMENT -->
<div class="modal-overlay" id="modal-paiement">
  <div class="modal">
    <div class="modal-header">
      <div class="modal-title" id="modal-title">💳 Paiement sécurisé</div>
      <button class="modal-close" onclick="fermerModal()">
        <svg viewBox="0 0 24 24"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div id="modal-body">
      <!-- Résumé commande -->
      <div class="order-summary">
        <div class="order-summary-title">Récapitulatif de la commande</div>
        <div id="modal-order-lines"></div>
      </div>

      <!-- Informations personnelles -->
      <div class="pay-section-label">Informations personnelles</div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Prénom</label>
          <input class="form-input" id="pay-prenom" type="text" placeholder="Marie"/>
        </div>
        <div class="form-group">
          <label class="form-label">Nom</label>
          <input class="form-input" id="pay-nom" type="text" placeholder="Dupont"/>
        </div>
      </div>
      <div class="form-group">
        <label class="form-label">E-mail de confirmation</label>
        <input class="form-input" id="pay-email" type="email" placeholder="marie.dupont@email.com"/>
      </div>

      <!-- Paiement -->
      <div class="pay-section-label">Informations de paiement</div>
      <div class="card-icons">
        <span class="card-pill">VISA</span>
        <span class="card-pill">Mastercard</span>
        <span class="card-pill">PayPal</span>
        <span class="card-pill">Apple Pay</span>
      </div>
      <div class="form-group">
        <label class="form-label">Titulaire de la carte</label>
        <input class="form-input" id="pay-titulaire" type="text" placeholder="MARIE DUPONT"/>
      </div>
      <div class="form-group">
        <label class="form-label">Numéro de carte</label>
        <input class="form-input" id="pay-carte" type="text" placeholder="1234 5678 9012 3456" maxlength="19" oninput="formatCarte(this)"/>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label class="form-label">Expiration</label>
          <input class="form-input" id="pay-exp" type="text" placeholder="MM/AA" maxlength="5" oninput="formatExp(this)"/>
        </div>
        <div class="form-group">
          <label class="form-label">CVV</label>
          <input class="form-input" id="pay-cvv" type="password" placeholder="123" maxlength="3"/>
        </div>
      </div>
      <div class="ssl-badge">
        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        Paiement chiffré SSL 256 bits · Vos données sont protégées
      </div>
    </div>
    <div class="modal-footer" id="modal-footer">
      <button class="btn-cancel" onclick="fermerModal()">Annuler</button>
      <button class="btn-confirm" onclick="confirmerPaiement()">
        <svg viewBox="0 0 24 24"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
        Payer <span id="btn-total-payer">0 €</span>
      </button>
    </div>
  </div>
</div>

<!-- TOAST -->
<div class="toast" id="toast">
  <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
  <span id="toast-msg"></span>
</div>

<footer>
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
        <a href="identifiant.php">Connexion</a>
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

<script>
// ══════════════════════════════════════════════════════
//  PANIER — lit depuis sessionStorage (clé voyagevista_panier)
//  Compatible avec activite_detail, hebergement_detail,
//  transport_detail et destination.php
// ══════════════════════════════════════════════════════

// Récupérer le panier
function getPanier() {
  try { return JSON.parse(sessionStorage.getItem('voyagevista_panier') || '[]'); }
  catch(e) { return []; }
}
function savePanier(p) {
  sessionStorage.setItem('voyagevista_panier', JSON.stringify(p));
}

// Icônes et labels par type
const typeConfig = {
  destination: { emoji:'🌍', label:'Destination',  badgeClass:'badge-dest',      pictoClass:'dest'      },
  hebergement: { emoji:'🏨', label:'Hébergement',  badgeClass:'badge-heberg',    pictoClass:'heberg'    },
  transport:   { emoji:'✈',  label:'Transport',    badgeClass:'badge-transport', pictoClass:'transport' },
  activite:    { emoji:'🎯', label:'Activité',     badgeClass:'badge-activite',  pictoClass:'activite'  },
};

function getType(item) {
  if (item.type_article) return item.type_article;
  if (item.id_destination) return 'destination';
  return 'autre';
}

function getNom(item) {
  return item.nom || `${item.depart} → ${item.arrivee}` || 'Article';
}

function getDetails(item) {
  const parts = [];
  const t = getType(item);
  if (t === 'destination') {
    if (item.adultes)  parts.push(`${item.adultes} adulte${item.adultes>1?'s':''}`);
    if (item.enfants)  parts.push(`${item.enfants} enfant${item.enfants>1?'s':''}`);
  }
  if (t === 'hebergement') {
    if (item.ville)         parts.push(item.ville + (item.pays ? ', '+item.pays : ''));
    if (item.nb_nuits)      parts.push(`${item.nb_nuits} nuit${item.nb_nuits>1?'s':''}`);
    if (item.date_arrivee)  parts.push(`Arrivée : ${item.date_arrivee}`);
    if (item.date_depart)   parts.push(`Départ : ${item.date_depart}`);
  }
  if (t === 'transport') {
    if (item.dateDepart)    parts.push(item.dateDepart);
    if (item.heureDepart)   parts.push(item.heureDepart);
    if (item.type_transport) parts.push(item.type_transport);
    if (item.classe)        parts.push(item.classe);
  }
  if (t === 'activite') {
    if (item.ville)         parts.push(item.ville + (item.pays ? ', '+item.pays : ''));
    if (item.date_activite) parts.push(item.date_activite);
    if (item.heure)         parts.push(item.heure);
    if (item.duree)         parts.push(item.duree);
  }
  return parts.join(' · ');
}

function getVoyageurs(item) {
  const t = getType(item);
  if (t === 'transport' && item.duree_jours) {
    return `${item.adultes || 1} véhicule${(item.adultes||1)>1?'s':''} · ${item.duree_jours} jour${item.duree_jours>1?'s':''}`;
  }
  const parts = [];
  if (item.adultes) parts.push(`${item.adultes} adulte${item.adultes>1?'s':''}`);
  if (item.enfants) parts.push(`${item.enfants} enfant${item.enfants>1?'s':''}`);
  return parts.join(', ');
}

// ── RENDU PANIER ──
function renderPanier() {
  const panier = getPanier();
  const container = document.getElementById('panier-items');
  const n = panier.length;

  // Compteur titre
  document.getElementById('panier-count').textContent = n > 0 ? `(${n} article${n>1?'s':''})` : '';

  // Panier vide
  if (!n) {
    container.innerHTML = `
      <div class="panier-vide">
        <svg viewBox="0 0 24 24"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
        <h3>Votre panier est vide</h3>
        <p>Explorez nos destinations, hébergements, transports et activités<br>pour composer votre voyage idéal.</p>
        <a class="btn-explorer" href="catalogue.php">
          <svg viewBox="0 0 24 24" width="14" height="14" stroke="#fff" fill="none" stroke-width="2"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
          Explorer le catalogue
        </a>
      </div>`;
    renderRecap([]);
    document.getElementById('btn-payer').disabled = true;
    return;
  }

  // Articles
  container.innerHTML = panier.map((item, i) => {
    const t   = getType(item);
    const cfg = typeConfig[t] || { emoji:'📦', label:'Article', badgeClass:'badge-dest', pictoClass:'dest' };
    const det = getDetails(item);
    const voy = getVoyageurs(item);
    const prix = item.montant_total || 0;

    return `
      <div class="article-card" id="article-${i}">
        <div class="article-picto ${cfg.pictoClass}">${cfg.emoji}</div>
        <div class="article-body">
          <span class="article-type-badge ${cfg.badgeClass}">${cfg.label}</span>
          <div class="article-nom">${getNom(item)}</div>
          ${det ? `<div class="article-details">${det}</div>` : ''}
          <div class="article-footer">
            <div class="article-voyageurs">${voy || ''}</div>
            <div>
              <span class="article-prix">${prix.toLocaleString('fr-FR')} €</span>
              ${item.prix_unitaire ? `<span class="article-prix-sub"> · ${item.prix_unitaire} €/pers.</span>` : ''}
            </div>
          </div>
        </div>
        <button class="btn-suppr" onclick="supprimerArticle(${i})" title="Supprimer">
          <svg viewBox="0 0 24 24"><polyline points="3 6 5 6 21 6"/><path d="M19 6l-1 14a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2L5 6"/></svg>
        </button>
      </div>`;
  }).join('');

  renderRecap(panier);
  document.getElementById('btn-payer').disabled = false;
}

// ── RÉCAPITULATIF ──
function renderRecap(panier) {
  const byType = {};
  panier.forEach(item => {
    const t = getType(item);
    const label = (typeConfig[t] || {label:'Autre'}).label;
    byType[label] = (byType[label] || 0) + (item.montant_total || 0);
  });

  const total = panier.reduce((s, i) => s + (i.montant_total || 0), 0);
  let html = Object.entries(byType).map(([l, p]) =>
    `<div class="recap-line"><span class="label">${l}</span><span class="val">${p.toLocaleString('fr-FR')} €</span></div>`
  ).join('');
  if (!html) html = `<div class="recap-line"><span class="label">Aucun article</span><span class="val">—</span></div>`;

  document.getElementById('recap-lines').innerHTML = html;
  document.getElementById('recap-total').textContent = total.toLocaleString('fr-FR') + ' €';
  document.getElementById('btn-total-payer').textContent = total.toLocaleString('fr-FR') + ' €';
}

// ── SUPPRESSION ──
function supprimerArticle(i) {
  const panier = getPanier();
  const nom = getNom(panier[i]);
  panier.splice(i, 1);
  savePanier(panier);
  renderPanier();
  toast(`"${nom}" retiré du panier`);
}

function viderPanier() {
  if (!getPanier().length) return;
  if (!confirm('Vider tout le panier ?')) return;
  savePanier([]);
  renderPanier();
  toast('Panier vidé');
}

// ── PAIEMENT ──
function ouvrirPaiement() {
  const panier = getPanier();
  if (!panier.length) return;

  // Remplir le résumé dans la modal
  const total = panier.reduce((s, i) => s + (i.montant_total || 0), 0);
  let lines = panier.map(item => `
    <div class="order-line">
      <span>${getNom(item)}</span>
      <span>${(item.montant_total || 0).toLocaleString('fr-FR')} €</span>
    </div>`).join('');
  lines += `<div class="order-line"><span>Total</span><span>${total.toLocaleString('fr-FR')} €</span></div>`;
  document.getElementById('modal-order-lines').innerHTML = lines;
  document.getElementById('btn-total-payer').textContent = total.toLocaleString('fr-FR') + ' €';

  // Réinitialiser les champs
  ['pay-prenom','pay-nom','pay-email','pay-titulaire','pay-carte','pay-exp','pay-cvv'].forEach(id => {
    const el = document.getElementById(id);
    if (el) el.value = '';
  });

  // Afficher le formulaire (pas la confirmation)
  document.getElementById('modal-body').style.display = '';
  document.getElementById('modal-footer').style.display = '';
  document.getElementById('modal-title').textContent = '💳 Paiement sécurisé';

  document.getElementById('modal-paiement').classList.add('open');
  document.body.style.overflow = 'hidden';
  setTimeout(() => document.getElementById('pay-prenom').focus(), 80);
}

function fermerModal() {
  document.getElementById('modal-paiement').classList.remove('open');
  document.body.style.overflow = '';
}

document.getElementById('modal-paiement').addEventListener('click', e => {
  if (e.target === document.getElementById('modal-paiement')) fermerModal();
});

document.addEventListener('keydown', e => { if (e.key === 'Escape') fermerModal(); });

function confirmerPaiement() {
  const prenom   = document.getElementById('pay-prenom').value.trim();
  const nom      = document.getElementById('pay-nom').value.trim();
  const email    = document.getElementById('pay-email').value.trim();
  const titulaire= document.getElementById('pay-titulaire').value.trim();
  const carte    = document.getElementById('pay-carte').value.replace(/\s/g,'');
  const exp      = document.getElementById('pay-exp').value;
  const cvv      = document.getElementById('pay-cvv').value;

  if (!prenom || !nom)        { toast('⚠ Prénom et nom obligatoires.'); return; }
  if (!email || !email.includes('@')) { toast('⚠ E-mail invalide.'); return; }
  if (!titulaire)             { toast('⚠ Titulaire de la carte manquant.'); return; }
  if (carte.length < 16)     { toast('⚠ Numéro de carte invalide.'); return; }
  if (exp.length < 5)        { toast('⚠ Date d\'expiration invalide.'); return; }
  if (cvv.length < 3)        { toast('⚠ CVV invalide.'); return; }

  // Simuler traitement
  document.getElementById('modal-title').textContent = '⏳ Traitement en cours…';
  document.getElementById('modal-body').style.display = 'none';
  document.getElementById('modal-footer').style.display = 'none';

  setTimeout(() => {
    const ref = 'VV-' + Math.floor(Math.random() * 900000 + 100000);
    const total = getPanier().reduce((s, i) => s + (i.montant_total || 0), 0);

    document.getElementById('modal-title').textContent = '';
    document.getElementById('modal-body').innerHTML = `
      <div class="confirm-box">
        <div class="confirm-check"><svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg></div>
        <div class="confirm-title">Paiement confirmé !</div>
        <div class="confirm-sub">
          Merci <strong>${prenom} ${nom}</strong> pour votre réservation.<br>
          Un e-mail de confirmation a été envoyé à <strong>${email}</strong>.<br><br>
          Montant débité : <strong>${total.toLocaleString('fr-FR')} €</strong>
        </div>
        <div class="confirm-num">${ref}</div>
      </div>`;
    document.getElementById('modal-body').style.display = '';
    document.getElementById('modal-footer').innerHTML = `
      <button class="btn-confirm" onclick="fermerModal();savePanier([]);renderPanier();toast('Merci pour votre réservation !')">
        <svg viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>
        Fermer
      </button>`;
    document.getElementById('modal-footer').style.display = '';
  }, 1800);
}

// Formatage carte
function formatCarte(inp) {
  let v = inp.value.replace(/\D/g,'').substring(0,16);
  inp.value = v.replace(/(.{4})/g,'$1 ').trim();
}
function formatExp(inp) {
  let v = inp.value.replace(/\D/g,'').substring(0,4);
  if (v.length >= 2) v = v.substring(0,2) + '/' + v.substring(2);
  inp.value = v;
}

// Toast
let toastTimer;
function toast(msg) {
  const t = document.getElementById('toast');
  document.getElementById('toast-msg').textContent = msg;
  t.classList.add('show');
  clearTimeout(toastTimer);
  toastTimer = setTimeout(() => t.classList.remove('show'), 3000);
}

// Écouter les mises à jour depuis les autres pages (même onglet navigateur)
window.addEventListener('storage', () => renderPanier());

// ══════════════════════════════════════
//  GESTION CONNEXION
// ══════════════════════════════════════

function getUser() {
  try {
    return JSON.parse(sessionStorage.getItem('vv_user') || localStorage.getItem('vv_user') || 'null');
  } catch(e) { return null; }
}

function verifierConnexion() {
  const user = getUser();
  const banner     = document.getElementById('login-banner');
  const btnHeader  = document.getElementById('btn-header-connexion');
  const recapSidebar = document.getElementById('recap-sidebar');

  if (user) {
    // Connecté — adapter le header
    banner.style.display = 'none';
    btnHeader.textContent = '👤 ' + user.nom;
    btnHeader.onclick = () => {
      if (confirm('Se déconnecter ?')) {
        sessionStorage.removeItem('vv_user');
        localStorage.removeItem('vv_user');
        window.location.reload();
      }
    };
    // Retirer le verrou si présent
    const existingLock = recapSidebar.querySelector('.pay-lock-overlay');
    if (existingLock) existingLock.remove();
  } else {
    // Non connecté — afficher la bannière et verrouiller le paiement
    banner.style.display = '';
    // Ajouter overlay de verrouillage sur la sidebar
    if (!recapSidebar.querySelector('.pay-lock-overlay')) {
      const overlay = document.createElement('div');
      overlay.className = 'pay-lock-overlay';
      overlay.innerHTML = `
        <svg viewBox="0 0 24 24"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
        <p>Connectez-vous pour<br>procéder au paiement</p>
        <button class="btn-login-lock" onclick="window.location.href='connexion.php'">Se connecter</button>`;
      recapSidebar.appendChild(overlay);
    }
    // Désactiver le bouton payer
    document.getElementById('btn-payer').disabled = true;
  }
}

// Surcharger ouvrirPaiement pour vérifier la connexion
const _ouvrirPaiementOriginal = ouvrirPaiement;
function ouvrirPaiement() {
  const user = getUser();
  if (!user) {
    toast('⚠ Vous devez être connecté pour payer.');
    setTimeout(() => window.location.href = 'identifiant.php', 1500);
    return;
  }
  // Pré-remplir le nom si disponible
  if (user.nom) {
    const parts = user.nom.split(' ');
    const prenomEl = document.getElementById('pay-prenom');
    const nomEl    = document.getElementById('pay-nom');
    if (prenomEl && parts[0]) prenomEl.value = parts[0];
    if (nomEl    && parts[1]) nomEl.value    = parts.slice(1).join(' ');
  }
  _ouvrirPaiementOriginal();
}

// Init
verifierConnexion();
renderPanier();
</script>
</body>
</html>
