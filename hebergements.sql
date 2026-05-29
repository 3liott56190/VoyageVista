-- ============================================================
--  VoyageVista — Table hebergements
-- ============================================================

USE voyagevista;

-- ============================================================
--  TABLE : hebergements
-- ============================================================
CREATE TABLE hebergements (
  id_hebergement        INT AUTO_INCREMENT PRIMARY KEY,
  nom_hebergement       VARCHAR(150)  NOT NULL,
  type_hebergement      ENUM('auberge_jeunesse','hotel_budget','appartement','camping','guesthouse','bungalow','riad','yourte') NOT NULL,
  ville                 VARCHAR(100)  NOT NULL,
  pays                  VARCHAR(100)  NOT NULL,
  adresse               VARCHAR(255)  DEFAULT NULL,
  id_destination        INT           DEFAULT NULL,                    -- FK vers destinations.id_destination
  capacite              INT           NOT NULL,                        -- nombre max de personnes / lits
  prix_nuit             DECIMAL(8,2)  NOT NULL,                        -- prix par nuit et par personne
  note_moyenne          DECIMAL(3,1)  DEFAULT 0.0,
  nombre_avis           INT           DEFAULT 0,
  equipements           VARCHAR(255)  DEFAULT NULL,                    -- liste CSV : WiFi, Cuisine, Clim, Piscine...
  petit_dejeuner_inclus TINYINT(1)    DEFAULT 0,
  annulation_gratuite   TINYINT(1)    DEFAULT 0,
  description           TEXT,
  image_url             VARCHAR(255)  DEFAULT NULL,
  disponible            TINYINT(1)    DEFAULT 1,
  date_dispo_debut      DATE          DEFAULT NULL,
  date_dispo_fin        DATE          DEFAULT NULL,
  statut_validation_hb  ENUM('en_attente','refuse','valide') DEFAULT 'en_attente',
  date_creation         DATETIME      DEFAULT CURRENT_TIMESTAMP,
  date_modification     DATETIME      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================================
--  DONNÉES : 75 hébergements (tous validés)
--  Positionnement : budget / jeunes voyageurs
--  Prix : auberge 8-20€ | guesthouse 15-45€ | bungalow 18-55€
--         riad 25-55€   | yourte 18-30€     | camping 6-18€
--         appartement 25-65€ | hotel_budget 30-75€
-- ============================================================
INSERT INTO hebergements (nom_hebergement, type_hebergement, ville, pays, adresse, id_destination, capacite, prix_nuit, note_moyenne, nombre_avis, equipements, petit_dejeuner_inclus, annulation_gratuite, description, image_url, disponible, date_dispo_debut, date_dispo_fin, statut_validation_hb) VALUES

-- ============================================================
--  BALI — id_destination 1
-- ============================================================
('The Surfer\'s Inn Hostel',    'auberge_jeunesse', 'Kuta',  'Indonésie', 'Jl. Pantai Kuta 42, Kuta',         1, 32, 12.00, 4.4, 312, 'WiFi,Cuisine,Casiers,Laverie,Terrasse',           0, 1, 'Auberge emblématique de Kuta à deux pas de la plage. Ambiance surf garantie, soirées BBQ sur le rooftop et dortoirs propres. Le meilleur rapport qualité-prix de Bali.',       'bali-surfer-inn.jpg',    1, '2026-06-01', '2026-09-30', 'valide'),
('Green Garden Hostel Ubud',    'auberge_jeunesse', 'Ubud',  'Indonésie', 'Jl. Monkey Forest 18, Ubud',        1, 20, 10.00, 4.2, 198, 'WiFi,Cuisine,Terrasse,Laverie',                   0, 1, 'Petit hostel caché dans les jardins tropicaux d\'Ubud. Idéal pour les voyageurs solos cherchant calme et authenticité. Cours de yoga le matin inclus.',                       'ubud-garden-hostel.jpg', 1, '2026-06-01', '2026-10-31', 'valide'),
('Rice Field Bungalow',         'bungalow',         'Ubud',  'Indonésie', 'Jl. Tegallalang 7, Ubud',           1,  4, 35.00, 4.7, 145, 'WiFi,Clim,Terrasse,Petit-dejeuner',               1, 0, 'Bungalow posé au bord des rizières en terrasses. Vue imprenable, petit-déjeuner local inclus et vélos disponibles gratuitement.',                                            'ubud-rice-bungalow.jpg', 1, '2026-06-01', '2026-12-31', 'valide'),
('Sunset Kuta Guesthouse',      'guesthouse',       'Kuta',  'Indonésie', 'Jl. Legian 55, Kuta',               1,  8, 25.00, 4.3, 221, 'WiFi,Clim,Piscine,Terrasse',                      0, 1, 'Guesthouse familiale avec petite piscine, à 5 min de la plage de Kuta. Chambres privées climatisées à prix doux, parfait pour les couples et petits groupes.',              'kuta-sunset-guesthouse.jpg',1,'2026-06-01','2026-12-31','valide'),

-- ============================================================
--  TENERIFE — id_destination 2
-- ============================================================
('Hostal Sol Santa Cruz',       'hotel_budget',     'Santa Cruz',     'Espagne', 'Calle Castillo 12, Santa Cruz de Tenerife', 2, 24, 22.00, 4.1, 187, 'WiFi,Clim,Terrasse',                              0, 1, 'Hôtel budget bien situé dans le centre historique de Santa Cruz. Chambres simples et propres, idéal pour explorer l\'île depuis la capitale.',                             'tenerife-hostal-sol.jpg',1, '2026-05-01', '2026-11-30', 'valide'),
('Apartamentos Vista Mar',      'appartement',      'Los Cristianos', 'Espagne', 'Av. Las Americas 8, Los Cristianos',        2,  4, 42.00, 4.4, 263, 'WiFi,Cuisine,Piscine,Parking,Terrasse',           0, 1, 'Appartement lumineux avec vue mer à Los Cristianos. Cuisine équipée et piscine commune. Idéal pour 2-4 personnes souhaitant l\'indépendance à petit prix.',              'tenerife-apart-marvista.jpg',1,'2026-05-01','2026-12-31','valide'),

-- ============================================================
--  ALBANIE SUD — id_destination 3
-- ============================================================
('Riviera Hostel Saranda',      'auberge_jeunesse', 'Saranda',  'Albanie', 'Rruga Skenderbeu 4, Saranda',    3, 30, 10.00, 4.5, 142, 'WiFi,Cuisine,Terrasse,Casiers',                   0, 1, 'L\'auberge de référence de la riviera albanaise. Terrasse avec vue sur la mer Ionienne, ambiance internationale et accès facile aux criques secrètes.',                    'saranda-riviera-hostel.jpg',1,'2026-05-01','2026-10-31','valide'),
('Himara Beach Bungalow',       'bungalow',         'Himara',   'Albanie', 'Rruga Butrinti 2, Himara',       3,  3, 22.00, 4.6, 98,  'WiFi,Terrasse,Cuisine',                           0, 1, 'Bungalows en bois à 30 mètres d\'une plage de sable blanc quasi-déserte. Prix imbattables pour un cadre digne des îles grecques.',                                         'himara-beach-bungalow.jpg',1,'2026-05-15','2026-10-15','valide'),

-- ============================================================
--  MONTÉNÉGRO (côte) — id_destination 4
-- ============================================================
('Budva Bay Hostel',            'auberge_jeunesse', 'Budva',    'Monténégro', 'Ul. Mediteranska 9, Budva',  4, 28, 15.00, 4.3, 176, 'WiFi,Cuisine,Casiers,Terrasse',                   0, 1, 'Hostel central à Budva, à 5 min à pied de la vieille ville médiévale et de la plage Slovenska. Ambiance festive et bonne humeur garanties.',                              'budva-bay-hostel.jpg',   1, '2026-05-01', '2026-10-31', 'valide'),
('Kotor Old City Hostel',       'auberge_jeunesse', 'Kotor',    'Monténégro', 'Ul. Stari Grad 14, Kotor',   4, 20, 18.00, 4.7, 231, 'WiFi,Casiers,Terrasse',                           0, 1, 'Hostel insolite installé dans une maison vénitienne du XVIIe siècle au cœur de la vieille ville fortifiée. Vue sur les remparts depuis la terrasse.',                      'kotor-old-hostel.jpg',   1, '2026-04-01', '2026-11-30', 'valide'),

-- ============================================================
--  KOH LANTA — id_destination 5
-- ============================================================
('Lanta Backpackers Hostel',    'auberge_jeunesse', 'Koh Lanta', 'Thaïlande', 'Ban Saladan, Koh Lanta',    5, 22, 10.00, 4.2, 189, 'WiFi,Cuisine,Hammac,Terrasse',                    0, 1, 'Hostel décontracté à deux pas du débarcadère. Location de motos et de kayaks sur place. La meilleure base pour explorer les plages de l\'île.',                          'lanta-backpackers.jpg',  1, '2026-11-01', '2027-04-30', 'valide'),
('Long Beach Bungalow',         'bungalow',         'Koh Lanta', 'Thaïlande', 'Klong Dao Beach, Koh Lanta',5,  2, 28.00, 4.5, 112, 'WiFi,Terrasse,Hamac',                             0, 1, 'Bungalows en bambou directement sur la plage de Klong Dao, l\'une des plus belles de Thaïlande. Lever de soleil magique et couchers de soleil spectaculaires.',          'lanta-longbeach-bungalow.jpg',1,'2026-11-01','2027-04-30','valide'),

-- ============================================================
--  ESSAOUIRA — id_destination 6
-- ============================================================
('Hostel des Alizés Essaouira', 'auberge_jeunesse', 'Essaouira', 'Maroc', 'Rue de la Skala 11, Médina',    6, 20, 12.00, 4.3, 155, 'WiFi,Cuisine,Terrasse,Casiers',                   0, 1, 'Auberge bleue et blanche en pleine médina d\'Essaouira. Parfaite pour les surfeurs et kitesurfeurs. Personnel local qui connaît toutes les adresses secrètes.',          'essaouira-hostel-alizes.jpg',1,'2026-01-01','2026-12-31','valide'),
('Maison d\'hôtes des Remparts','guesthouse',       'Essaouira', 'Maroc', 'Rue Laalouj 5, Médina',         6,  6, 32.00, 4.6, 88,  'WiFi,Petit-dejeuner,Terrasse',                    1, 1, 'Maison d\'hôtes authentique avec patio fleuri à l\'intérieur des remparts. Petit-déjeuner marocain copieux inclus, accès terrasse panoramique.',                          'essaouira-maison-remparts.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  EL NIDO — id_destination 7
-- ============================================================
('El Nido Backpackers Hideout', 'auberge_jeunesse', 'El Nido',  'Philippines', 'Calle Real, El Nido, Palawan', 7, 24, 12.00, 4.4, 203, 'WiFi,Cuisine,Casiers,Terrasse',                 0, 1, 'Le hostel de référence des routards à El Nido. Organisation des island-hoppings à prix d\'ami et ambiance jungle & mer incomparable.',                                  'el-nido-backpackers.jpg',1, '2026-01-01', '2026-12-31', 'valide'),
('Palawan Secret Guesthouse',   'guesthouse',       'El Nido',  'Philippines', 'Barangay Masagana, El Nido', 7,  8, 28.00, 4.6, 117, 'WiFi,Terrasse,Hamac,Cuisine',                   0, 1, 'Guesthouse familiale tenue par des locaux à 10 min du bourg. Jardins tropicaux, hamacs et accès à une plage privée peu fréquentée.',                                     'el-nido-palawan-guest.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  ZANZIBAR — id_destination 8
-- ============================================================
('Stone Town Budget Hostel',    'auberge_jeunesse', 'Stone Town', 'Tanzanie', 'Hurumzi St, Stone Town, Zanzibar', 8, 20, 14.00, 4.2, 168, 'WiFi,Cuisine,Terrasse,Casiers',              0, 1, 'Hostel installé dans une ancienne maison arabe de Stone Town classé UNESCO. Dortoirs ventilés, terrasse sur les toits et organisation de tours en boutre.',            'zanzibar-stone-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Nungwi Beach Bungalow',       'bungalow',         'Nungwi',    'Tanzanie', 'Nungwi Beach, Zanzibar North', 8,  3, 42.00, 4.7, 94,  'WiFi,Terrasse,Petit-dejeuner',                  1, 0, 'Bungalows les pieds dans l\'eau sur la plage de Nungwi. Eaux turquoise, couchers de soleil depuis la terrasse et petit-déjeuner aux fruits tropicaux inclus.',          'zanzibar-nungwi-bungalow.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  GÉORGIE (Montagne / Kazbegi) — id_destination 9
-- ============================================================
('Kazbegi Mountain Guesthouse', 'guesthouse',       'Kazbegi',   'Géorgie', 'Stepantsminda Village, Kazbegi', 9, 14, 18.00, 4.8, 276, 'WiFi,Petit-dejeuner,Cuisine,Terrasse',          1, 1, 'Guesthouse familiale avec vue directe sur la tour de Guérgéti et le Kazbek. La patronne cuisine les meilleurs khinkali de la région. Incontournable.',               'kazbegi-mountain-guest.jpg',1,'2026-05-01','2026-10-31','valide'),
('Stepantsminda Hostel',        'auberge_jeunesse', 'Kazbegi',   'Géorgie', 'Stepantsminda Main Rd, Kazbegi',9, 20, 13.00, 4.5, 198, 'WiFi,Cuisine,Casiers,Terrasse',                 0, 1, 'Hostel de randonneurs à Stepantsminda. Point de départ idéal pour le trek vers la trinité de Guérgéti. Navettes organisées depuis Tbilissi.',                         'kazbegi-stepantsminda-hostel.jpg',1,'2026-05-01','2026-10-31','valide'),

-- ============================================================
--  ALBANIE NORD — id_destination 10
-- ============================================================
('Shkoder Backpackers Hostel',  'auberge_jeunesse', 'Shkodër',   'Albanie', 'Rruga 13 Dhjetori 6, Shkodër',  10, 22, 9.00,  4.4, 134, 'WiFi,Cuisine,Casiers,Vélos',                    0, 1, 'Le hostel le mieux noté du nord de l\'Albanie. Location de vélos incluse, carte des randonnées offerte et ambiance 100% routards. Base parfaite pour les Alpes albanaises.',  'shkoder-backpackers.jpg',1,'2026-05-01','2026-10-31','valide'),
('Thethi Valley Guesthouse',    'guesthouse',       'Thethi',    'Albanie', 'Thethi Village, Shkodër County',10,  8, 20.00, 4.7, 88,  'Petit-dejeuner,Cuisine,Terrasse',               1, 0, 'Guesthouse au cœur de la vallée secrète de Thethi. Repas traditionnels copieux inclus dans le prix. Randonnées guidées vers le Peaks of the Balkans disponibles.',       'thethi-valley-guesthouse.jpg',1,'2026-06-01','2026-09-30','valide'),

-- ============================================================
--  MACÉDOINE DU NORD — id_destination 11
-- ============================================================
('Ohrid Lake Hostel',           'auberge_jeunesse', 'Ohrid',     'Macédoine du Nord', 'Ul. Kosta Abrash 12, Ohrid',   11, 20, 10.00, 4.5, 167, 'WiFi,Cuisine,Terrasse,Casiers',             0, 1, 'Hostel avec terrasse surplombant le lac d\'Ohrid, classé UNESCO. Location de kayaks, soirées conviviales et accès aux monastères byzantins à pied.',                  'ohrid-lake-hostel.jpg',  1, '2026-04-01', '2026-10-31', 'valide'),
('Old Bazaar Guesthouse Skopje','guesthouse',       'Skopje',    'Macédoine du Nord', 'Čaršija, Skopje',              11,  8, 22.00, 4.3, 112, 'WiFi,Clim,Cuisine,Terrasse',                0, 1, 'Guesthouse charmante dans le vieux bazar ottoman de Skopje. Chambres décorées à la façon traditionnelle macédonienne, petit-déjeuner balkanique en option.',            'skopje-bazaar-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  KIRGHIZISTAN — id_destination 12
-- ============================================================
('Bishkek Budget Backpackers',  'auberge_jeunesse', 'Bichkek',   'Kirghizistan', 'Ul. Sovetskaya 22, Bichkek',  12, 20,  8.00, 4.2, 98,  'WiFi,Cuisine,Casiers,Laverie',                  0, 1, 'Hostel central à Bichkek. L\'équipe organise des excursions vers Song-Köl, le lac Issyk-Koul et les camps de yourtes de la Route de la Soie.',                       'bishkek-backpackers.jpg',1, '2026-05-01', '2026-10-31', 'valide'),
('Song-Köl Yurt Camp',          'yourte',           'Son-Kol',   'Kirghizistan', 'Song-Köl Lake, Naryn Region', 12, 16, 28.00, 4.8, 143, 'Repas-inclus,Randonnée',                        1, 0, 'Camp de yourtes authentique au bord du lac Song-Köl à 3000m d\'altitude. Petit-déjeuner et dîner kirghiz inclus. Randonnées à cheval, nuits étoilées sans égales.',  'songkol-yurt-camp.jpg',  1, '2026-06-15', '2026-09-15', 'valide'),
('Issyk-Koul Lakeside Hostel',  'auberge_jeunesse', 'Karakol',   'Kirghizistan', 'Ul. Toktogul 8, Karakol',     12, 18, 10.00, 4.3, 87,  'WiFi,Cuisine,Terrasse',                         0, 1, 'Hostel convivial à Karakol sur les rives de l\'Issyk-Koul. Départ de randonnées vers les Tian Shan, organisation de treks et location de matériel.',                  'karakol-lakeside-hostel.jpg',1,'2026-05-15','2026-10-15','valide'),

-- ============================================================
--  MONTÉNÉGRO INTÉRIEUR — id_destination 13
-- ============================================================
('Durmitor Adventure Hostel',   'auberge_jeunesse', 'Žabljak',   'Monténégro', 'Ul. Durmitorska 3, Žabljak',  13, 24, 14.00, 4.6, 132, 'WiFi,Cuisine,Casiers,Terrasse',                 0, 1, 'Hostel de montagne au pied du massif du Durmitor. Idéal pour le ski en hiver et les randonnées en été. Canyon de la Tara à 20 min.',                                 'durmitor-adventure-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Canyon View Guesthouse',      'guesthouse',       'Žabljak',   'Monténégro', 'Ul. Narodnih Heroja 5, Žabljak',13, 8, 25.00, 4.5, 99,  'WiFi,Petit-dejeuner,Terrasse,Parking',          1, 1, 'Guesthouse familiale avec vue sur le canyon de la Tara. Petit-déjeuner monténégrin généreux et propriétaires passionnés de montagne.',                                'zabljak-canyon-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  LISBONNE — id_destination 14
-- ============================================================
('Lisbon City Hostel',          'auberge_jeunesse', 'Lisbonne',  'Portugal', 'Rua do Alecrim 28, Bairro Alto', 14, 42, 20.00, 4.5, 487, 'WiFi,Cuisine,Casiers,Terrasse,Petit-dejeuner',  0, 1, 'Le hostel le plus animé du Bairro Alto. Soirées fado organisées, bar sur la terrasse et petit-déjeuner inclus certains jours. À deux pas des tramways vintage.',      'lisbon-city-hostel.jpg', 1, '2026-01-01', '2026-12-31', 'valide'),
('Alfama Backpackers',          'auberge_jeunesse', 'Lisbonne',  'Portugal', 'Beco do Carneiro 6, Alfama',     14, 28, 17.00, 4.4, 321, 'WiFi,Casiers,Terrasse,Cuisine',                 0, 1, 'Hostel caché dans les ruelles d\'Alfama, le quartier le plus authentique de Lisbonne. Terrasse avec vue sur le Tage et le château Saint-Georges.',                  'alfama-backpackers.jpg', 1, '2026-01-01', '2026-12-31', 'valide'),
('Casa Lisboa Guesthouse',      'guesthouse',       'Lisbonne',  'Portugal', 'Rua Santa Catarina 41, Chiado', 14,  8, 48.00, 4.7, 214, 'WiFi,Clim,Petit-dejeuner,Terrasse',             1, 1, 'Guesthouse élégante dans le quartier branché du Chiado. Chambres avec azulejos authentiques, petit-déjeuner inclus avec pão de queijo et pasteis de nata.',         'lisbon-casa-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  BUDAPEST — id_destination 15
-- ============================================================
('Budapest Budget Hostel',      'auberge_jeunesse', 'Budapest',  'Hongrie',  'Dob utca 12, VII. ker, Budapest',15, 52, 14.00, 4.4, 512, 'WiFi,Cuisine,Casiers,Laverie,Bar',              0, 1, 'Hostel au cœur du quartier des ruin-bars. Ambiance électrique, bar sur place et location de vélos. À 10 min à pied des bains thermaux Széchenyi.',                   'budapest-budget-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Danube View Guesthouse',      'guesthouse',       'Budapest',  'Hongrie',  'Bem rakpart 22, I. ker, Buda',   15, 10, 45.00, 4.6, 278, 'WiFi,Clim,Terrasse,Petit-dejeuner',             1, 1, 'Guesthouse avec vue sur le Danube et le Parlement depuis la terrasse. Chambres Art Nouveau soignées, petit-déjeuner hongrois généreux inclus.',                    'budapest-danube-guest.jpg',1,'2026-01-01','2026-12-31','valide'),
('Party District Hostel',       'auberge_jeunesse', 'Budapest',  'Hongrie',  'Kazinczy utca 5, VII. ker',      15, 40, 16.00, 4.3, 389, 'WiFi,Bar,Casiers,Terrasse',                     0, 1, 'L\'hostel le plus festif de Budapest, en plein quartier des ruin-bars. Fêtes organisées chaque weekend, ambiance internationale et dortoirs modernes.',            'budapest-party-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  TBILISSI — id_destination 16
-- ============================================================
('Tbilisi Old Town Hostel',     'auberge_jeunesse', 'Tbilissi',  'Géorgie',  'Shardeni St 8, Old Town, Tbilisi', 16, 30, 12.00, 4.7, 342, 'WiFi,Cuisine,Casiers,Terrasse,Vin-local',     0, 1, 'Hostel dans une maison géorgienne typique avec balcon en bois sculpté. Dégustation de vin naturel géorgien organisée chaque soir. Le meilleur rapport qualité-prix de Tbilissi.',  'tbilisi-old-hostel.jpg', 1, '2026-01-01', '2026-12-31', 'valide'),
('Georgian Dream Guesthouse',   'guesthouse',       'Tbilissi',  'Géorgie',  'Kote Abkhazi 14, Tbilisi',        16,  8, 28.00, 4.8, 198, 'WiFi,Petit-dejeuner,Terrasse,Cuisine',          1, 1, 'Guesthouse familiale tenue par Nino et sa mère. Petit-déjeuner géorgien traditionnel (khachapuri, churchkhela, fromage sulguni) inclus. Chaleur humaine légendaire.', 'tbilisi-georgian-dream.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  HANOÏ — id_destination 17
-- ============================================================
('Hanoi Old Quarter Hostel',    'auberge_jeunesse', 'Hanoï',     'Vietnam',  '29 Hang Bong St, Hoan Kiem, Hanoi', 17, 32, 8.00,  4.3, 421, 'WiFi,Cuisine,Casiers,Laverie',                0, 1, 'Hostel bien situé dans le vieux quartier des 36 corporations. Tours de street food organisés, cours de cuisine vietnamienne et location de motos.',               'hanoi-old-quarter-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Lotus Backpackers Hanoï',     'auberge_jeunesse', 'Hanoï',     'Vietnam',  '15 Ma May St, Hoan Kiem, Hanoi',    17, 24, 10.00, 4.5, 287, 'WiFi,Cuisine,Bar,Terrasse',                   0, 1, 'Hostel branché dans la rue la plus vivante du vieux Hanoï. Happy hour quotidien, organisation des excursions vers la baie d\'Ha Long et Ninh Binh.',             'hanoi-lotus-backpackers.jpg',1,'2026-01-01','2026-12-31','valide'),
('Hanoï Backstreet Guesthouse', 'guesthouse',       'Hanoï',     'Vietnam',  '7 Hang Ga St, Hoan Kiem, Hanoi',    17, 10, 18.00, 4.4, 176, 'WiFi,Clim,Cuisine,Terrasse',                  0, 1, 'Guesthouse boutique dans une ruelle calme à deux pas de l\'agitation du vieux quartier. Chambres avec AC, propriétaire guide francophone.',                     'hanoi-backstreet-guest.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  CRACOVIE — id_destination 18
-- ============================================================
('Krakow Central Hostel',       'auberge_jeunesse', 'Cracovie',  'Pologne',  'ul. Floriańska 22, Stare Miasto', 18, 44, 11.00, 4.5, 398, 'WiFi,Cuisine,Casiers,Bar,Laverie',              0, 1, 'Hostel au cœur de la vieille ville médiévale de Cracovie. Marché de la Grand-Place à 2 min, nuits à partir de 11€. Le rapport qualité-prix le plus fou d\'Europe.',  'krakow-central-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Kazimierz Budget Inn',        'guesthouse',       'Cracovie',  'Pologne',  'ul. Miodowa 8, Kazimierz',         18, 10, 28.00, 4.4, 212, 'WiFi,Cuisine,Terrasse',                         0, 1, 'Guesthouse dans le quartier bohème de Kazimierz, ancien quartier juif. Galeries d\'art, cafés indépendants et vie nocturne accessible à pied.',                  'krakow-kazimierz-inn.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  MEXICO CITY — id_destination 19
-- ============================================================
('Mexico City Social Hostel',   'auberge_jeunesse', 'Mexico City','Mexique',  'Calle Tamaulipas 94, Condesa',    19, 50, 15.00, 4.5, 334, 'WiFi,Cuisine,Bar,Terrasse,Casiers,Laverie',     0, 1, 'Hostel animé dans le quartier de la Condesa avec ses parcs et cafés. Tours street food organisés chaque soir, accès facile aux musées de classe mondiale.',        'mexico-social-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Coyoacan Guesthouse',         'guesthouse',       'Mexico City','Mexique',  'Calle Aguayo 12, Coyoacan',        19, 10, 35.00, 4.6, 178, 'WiFi,Cuisine,Parking,Terrasse',                 0, 1, 'Guesthouse colorée dans le quartier de Frida Kahlo. Casa Azul à 5 min à pied, marché de Coyoacan à 2 min. Ambiance artistique et mexicaine authentique.',       'mexico-coyoacan-guest.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  BELGRADE — id_destination 20
-- ============================================================
('Belgrade Downtown Hostel',    'auberge_jeunesse', 'Belgrade',  'Serbie',   'Ul. Knez Mihailova 8, Beograd',   20, 36, 10.00, 4.3, 298, 'WiFi,Cuisine,Bar,Casiers,Terrasse',             0, 1, 'Hostel au cœur de la rue piétonne de Belgrade. Clubs flottants (splavovi) à 10 min, forteresse de Kalemegdan à 5 min. Nuits les moins chères des Balkans.',       'belgrade-downtown-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Savamala Guesthouse',         'guesthouse',       'Belgrade',  'Serbie',   'Ul. Karadjordjevă 4, Savamala',   20, 10, 22.00, 4.5, 145, 'WiFi,Terrasse,Cuisine,Clim',                    0, 1, 'Guesthouse dans le quartier artistique de Savamala. Galeries, bars alternatifs et scène musicale underground à portée de main. Belgrade la festive à moindre coût.',  'belgrade-savamala-guest.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  MARRAKECH — id_destination 21
-- ============================================================
('Riad Jeune Explorateur',      'riad',             'Marrakech', 'Maroc',    'Derb Sraghna 14, Médina, Marrakech',21,12, 30.00, 4.7, 267, 'WiFi,Piscine,Petit-dejeuner,Clim,Terrasse',   1, 0, 'Riad authentique au cœur de la médina avec patio, fontaine et terrasse sur les toits. Petit-déjeuner marocain généreux. À 5 min de la place Jemaa el-Fna.',     'marrakech-riad-explorateur.jpg',1,'2026-01-01','2026-12-31','valide'),
('Hostel de la Médina Marrakech','auberge_jeunesse','Marrakech', 'Maroc',    'Rue Riad Zitoun Kedim 22, Médina',21, 30, 12.00, 4.2, 198, 'WiFi,Cuisine,Terrasse,Casiers',                 0, 1, 'L\'auberge la moins chère de la médina de Marrakech. Terrasse avec vue sur les minarets, organisation de circuits dans le désert et l\'Atlas.',                   'marrakech-hostel-medina.jpg',1,'2026-01-01','2026-12-31','valide'),
('Riad des Épices',             'riad',             'Marrakech', 'Maroc',    'Derb Tahtah 7, Médina, Marrakech',21,  8, 48.00, 4.9, 189, 'WiFi,Piscine,Clim,Terrasse,Petit-dejeuner',   1, 1, 'Riad de charme avec plunge pool sur la terrasse. Chambres décorées à la zellij, argan et thuya. Brunch marocain fastueux inclus. Un petit palais pour petits prix.', 'marrakech-riad-epices.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  PRAGUE — id_destination 22
-- ============================================================
('Prague Backpackers Hostel',   'auberge_jeunesse', 'Prague',    'République Tchèque', 'Náměstí Míru 9, Vinohrady, Praha', 22, 62, 13.00, 4.5, 534, 'WiFi,Cuisine,Bar,Casiers,Laverie',   0, 1, 'Le plus grand hostel de Prague dans le quartier bohème de Vinohrady. Bières tchèques à 1€ au bar, tours à pied gratuits chaque matin. Légendaire parmi les routards.','prague-backpackers.jpg', 1, '2026-01-01', '2026-12-31', 'valide'),
('Old Town Budget Guesthouse',  'guesthouse',       'Prague',    'République Tchèque', 'Celetná 28, Staré Město, Praha',   22, 10, 38.00, 4.4, 231, 'WiFi,Clim,Terrasse,Petit-dejeuner',  1, 1, 'Guesthouse boutique à deux pas de la place de la Vieille Ville et du pont Charles. Chambres Gothic-moderne, petit-déjeuner tchèque inclus.',                    'prague-oldtown-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  SÉVILLE — id_destination 23
-- ============================================================
('Sevilla Flamenco Hostel',     'auberge_jeunesse', 'Séville',   'Espagne',  'Calle Sierpes 33, Centro, Sevilla',23, 40, 18.00, 4.6, 312, 'WiFi,Bar,Terrasse,Casiers,Cuisine',             0, 1, 'Hostel avec spectacle flamenco organisé chaque semaine. Terrasse sur les toits avec vue sur la Giralda. À 5 min de l\'Alcazar et de la cathédrale.',             'sevilla-flamenco-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Triana Guesthouse Sevilla',   'guesthouse',       'Séville',   'Espagne',  'Calle San Jacinto 12, Triana',     23,  8, 42.00, 4.7, 187, 'WiFi,Clim,Terrasse,Petit-dejeuner',             1, 1, 'Guesthouse andalouse dans le quartier de Triana, côté flamenco authentique. Patio floral, petit-déjeuner inclus avec churros et torta de aceite.',             'sevilla-triana-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  KOTOR — id_destination 24
-- ============================================================
('Kotor Bay View Hostel',       'auberge_jeunesse', 'Kotor',     'Monténégro', 'Stari Grad bb, Kotor',           24, 18, 18.00, 4.8, 224, 'WiFi,Casiers,Terrasse',                         0, 1, 'Hostel dans la vieille ville fortifiée de Kotor. Les remparts illuminés depuis la terrasse, chats sacrés de la ville partout. UNESCO à portée de main.',          'kotor-bayview-hostel.jpg',1,'2026-04-01','2026-11-30','valide'),
('Dobrota Seaside Guesthouse',  'guesthouse',       'Kotor',     'Monténégro', 'Dobrota bb, Kotor Bay',          24,  6, 35.00, 4.6, 112, 'WiFi,Terrasse,Petit-dejeuner',                  1, 1, 'Guesthouse paisible sur la rive du fjord adriatique à Dobrota. Vue sur les bouches de Kotor, kayak disponible, ambiance hors du temps.',                       'kotor-dobrota-guesthouse.jpg',1,'2026-04-01','2026-11-30','valide'),

-- ============================================================
--  TREK ATLAS MAROCAIN — id_destination 25
-- ============================================================
('Gîte de Montagne Imlil',      'guesthouse',       'Imlil',     'Maroc',    'Village d\'Imlil, Province d\'Al Haouz', 25, 16, 15.00, 4.7, 198, 'Petit-dejeuner,Cuisine,Terrasse',           1, 0, 'Gîte de montagne au village d\'Imlil, point de départ du Toubkal. Mules disponibles, guides locaux agréés et cuisine berbère traditionnelle incluse.',            'imlil-gite-montagne.jpg',1,'2026-04-01','2026-11-30','valide'),
('Camp des Étoiles Atlas',      'camping',          'Agafay',    'Maroc',    'Désert d\'Agafay, Marrakech Region',  25, 20, 20.00, 4.5, 134, 'Repas-inclus,Feu-camp,Randonnée',           1, 0, 'Camp sous les étoiles dans le désert d\'Agafay aux portes de l\'Atlas. Tentes berbères, dîner au feu de camp, nuit à la belle étoile et lever de soleil sur les montagnes.',  'agafay-camp-etoiles.jpg',1,'2026-03-01','2026-11-30','valide'),

-- ============================================================
--  COSTA RICA — id_destination 26
-- ============================================================
('San José Eco Hostel',         'auberge_jeunesse', 'San José',  'Costa Rica', 'Av. Central, Barrio Escalante, San José', 26, 40, 20.00, 4.3, 267, 'WiFi,Cuisine,Casiers,Terrasse,Laverie', 0, 1, 'Hostel écolo dans le quartier branché de Barrio Escalante. Organisation de tours vers les volcans, cours de surf et aventures en forêt tropicale.',             'san-jose-eco-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('La Fortuna Volcano Hostel',   'auberge_jeunesse', 'La Fortuna','Costa Rica', 'Calle Principal, La Fortuna de San Carlos', 26, 24, 22.00, 4.6, 189, 'WiFi,Piscine,Cuisine,Terrasse',      0, 1, 'Hostel avec piscine face au volcan Arenal. Le mieux noté de La Fortuna. Accès aux sources chaudes naturelles, randonnées dans la forêt tropicale et tyroliennes.',  'fortuna-volcano-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  VIETNAM (Hô Chi Minh / Hoi An) — id_destination 27
-- ============================================================
('Saigon Backpackers Hostel',   'auberge_jeunesse', 'Hô Chi Minh-Ville', 'Vietnam', 'Bui Vien St 245, District 1, Ho Chi Minh City', 27, 44,  8.00, 4.2, 398, 'WiFi,Bar,Cuisine,Casiers,Laverie', 0, 1, 'Hostel en plein cœur de la rue des backpackers de Saigon. Happy hour 18h-21h, organisation de tours sur la moto Honda Win et circuits dans le delta du Mékong.', 'saigon-backpackers.jpg', 1, '2026-01-01', '2026-12-31', 'valide'),
('Hoi An Ancient Town Hostel',  'auberge_jeunesse', 'Hoi An',            'Vietnam', 'Nguyen Thai Hoc 25, Hoi An, Quang Nam', 27, 26, 10.00, 4.7, 312, 'WiFi,Cuisine,Vélos,Terrasse',          0, 1, 'Hostel dans la ville ancienne de Hoi An classée UNESCO. Vélos inclus dans le tarif, cours de cuisine locale et location de motos pour explorer la campagne.',     'hoian-ancient-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  JORDANIE — id_destination 28
-- ============================================================
('Petra Moon Hostel',           'auberge_jeunesse', 'Wadi Musa', 'Jordanie', 'Main St, Wadi Musa, Petra',           28, 30, 14.00, 4.5, 221, 'WiFi,Cuisine,Terrasse,Casiers',                 0, 1, 'Le hostel de référence à Petra. Entrée de la cité rose accessible à pied. Tours du trésor à l\'aube et nuits dans la cité nabatéenne organisés.',               'petra-moon-hostel.jpg',  1, '2026-01-01', '2026-12-31', 'valide'),
('Aqaba Red Sea Hostel',        'auberge_jeunesse', 'Aqaba',     'Jordanie', 'Al-Nahda St 12, Aqaba',               28, 22, 12.00, 4.3, 167, 'WiFi,Cuisine,Casiers,Clim',                     0, 1, 'Hostel économique sur les rives de la mer Rouge à Aqaba. Accès aux spots de plongée et snorkeling parmi les meilleurs de la mer Rouge, équipement en location.',   'aqaba-redsea-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  ÎLES CANARIES HORS SENTIERS — id_destination 29
-- ============================================================
('La Gomera Wild Hostel',       'auberge_jeunesse', 'Valle Gran Rey', 'Espagne', 'Calle Los Órganos 4, Valle Gran Rey, La Gomera', 29, 20, 15.00, 4.6, 142, 'WiFi,Cuisine,Terrasse,Hamac', 0, 1, 'Hostel alternatif dans la vallée luxuriante de Valle Gran Rey. Forêt de laurisilva millénaire à portée de randonnée, hippies bienvenus, ambiance end-of-the-world.','la-gomera-wild-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('El Hierro Eco-Lodge',         'guesthouse',       'Valverde',      'Espagne', 'Calle Dr. Quintero Magdaleno 3, Valverde, El Hierro', 29, 10, 30.00, 4.7, 89, 'WiFi,Petit-dejeuner,Terrasse', 1, 1, 'Guesthouse écologique sur l\'île la plus préservée des Canaries. Observatoire astronomique à 30 min, plongée avec des raies manta et randonnées sauvages.',       'el-hierro-eco-lodge.jpg',1,'2026-01-01','2026-12-31','valide'),

-- ============================================================
--  AÇORES — id_destination 30
-- ============================================================
('Ponta Delgada City Hostel',   'auberge_jeunesse', 'Ponta Delgada', 'Portugal', 'Rua de Lisboa 18, Ponta Delgada, São Miguel',30, 32, 18.00, 4.5, 198, 'WiFi,Cuisine,Casiers,Terrasse,Laverie', 0, 1, 'Hostel moderne dans la capitale des Açores. Organisation des randonnées vers les caldeiras et lacs de cratère, observation des baleines et sources chaudes naturelles.', 'azores-ponta-delgada-hostel.jpg',1,'2026-01-01','2026-12-31','valide'),
('Furnas Valley Guesthouse',    'guesthouse',       'Furnas',        'Portugal', 'Rua Dr. Frederico Moniz Pereira 2, Furnas, São Miguel', 30, 8, 38.00, 4.8, 134, 'WiFi,Petit-dejeuner,Terrasse,Sources-chaudes', 1, 1, 'Guesthouse au cœur de la vallée volcanique de Furnas. Accès direct aux caldeiras fumantes et aux sources chaudes naturelles. Petit-déjeuner fait maison inclus.',  'azores-furnas-guesthouse.jpg',1,'2026-01-01','2026-12-31','valide');