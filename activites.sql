-- ============================================================
--  VoyageVista — Table activites
-- ============================================================

USE destination;

-- ============================================================
--  TABLE : activites
-- ============================================================
CREATE TABLE activites (
  id_activite           INT AUTO_INCREMENT PRIMARY KEY,
  nom_activite          VARCHAR(150)  NOT NULL,
  description           TEXT,
  ville                 VARCHAR(100)  NOT NULL,
  pays                  VARCHAR(100)  NOT NULL,
  categorie             ENUM('Culture','Nature','Sport','Gastronomie','Detente','Aventure','Visite','Nightlife') NOT NULL,
  prix_par_personne     DECIMAL(8,2)  NOT NULL,
  capacite_max          INT           DEFAULT 20,
  duree_minutes         INT           DEFAULT 120,
  date_activite         DATE          NOT NULL,
  heure_debut           TIME          DEFAULT '09:00',
  difficulte            ENUM('facile','modere','difficile') DEFAULT 'facile',
  note_moyenne          DECIMAL(3,1)  DEFAULT 0.0,
  statut_validation     ENUM('en_attente','refuse','valide') DEFAULT 'en_attente',
  date_creation         DATETIME      DEFAULT CURRENT_TIMESTAMP,
  date_modification     DATETIME      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================================
--  DONNÉES : activites par destination (toutes validées)
-- ============================================================
INSERT INTO activites (nom_activite, description, ville, pays, categorie, prix_par_personne, capacite_max, duree_minutes, date_activite, heure_debut, difficulte, note_moyenne, statut_validation) VALUES

-- ============================================================
--  BALI (8 activités)
-- ============================================================
('Cours de surf à Kuta',             'Initiation au surf sur la plage de Kuta avec moniteur certifié. Matériel fourni, niveau débutant bienvenu.', 'Bali', 'Indonésie', 'Sport',       18.00, 10, 180, '2026-06-11', '08:00', 'facile',   4.7, 'valide'),
('Visite des temples de Bedugul',    'Tour guidé des temples flottants Pura Ulun Danu au bord du lac Bratan. Coucher de soleil inclus.', 'Bali', 'Indonésie', 'Culture',     12.00, 20, 240, '2026-06-12', '15:00', 'facile',   4.8, 'valide'),
('Trekking volcan Batur au lever',   'Ascension nocturne du Mont Batur pour admirer le lever de soleil depuis le sommet. Guide et petit-déjeuner inclus.', 'Bali', 'Indonésie', 'Aventure',    22.00, 12, 360, '2026-06-13', '02:00', 'difficile',4.9, 'valide'),
('Cours de cuisine balinaise',       'Marché local le matin, puis préparation de 4 plats traditionnels balinais avec un chef local.', 'Bali', 'Indonésie', 'Gastronomie', 15.00, 10, 300, '2026-06-14', '09:00', 'facile',   4.8, 'valide'),
('Massage traditionnel balinais',    'Soin de 90 minutes dans un spa local avec huiles essentielles et techniques balinaises ancestrales.', 'Bali', 'Indonésie', 'Detente',     14.00, 6,  90,  '2026-06-15', '10:00', 'facile',   4.9, 'valide'),
('Visite des rizières de Tegallalang','Balade guidée dans les rizières en terrasses classées UNESCO avec arrêt photo et swing panoramique.', 'Bali', 'Indonésie', 'Nature',      8.00,  20, 180, '2026-06-16', '07:00', 'facile',   4.7, 'valide'),
('Snorkeling à Nusa Penida',         'Excursion en bateau vers Nusa Penida avec snorkeling sur les récifs coralliens et rencontre avec les raies manta.', 'Bali', 'Indonésie', 'Nature',      25.00, 15, 480, '2026-06-17', '07:30', 'modere',   4.8, 'valide'),
('Soirée Kecak au temple Uluwatu',   'Spectacle de danse traditionnelle Kecak au coucher du soleil dans le temple falaise d\'Uluwatu.', 'Bali', 'Indonésie', 'Culture',     10.00, 50, 90,  '2026-06-18', '17:30', 'facile',   4.9, 'valide'),

-- ============================================================
--  TENERIFE (6 activités)
-- ============================================================
('Ascension du Teide',               'Randonnée guidée jusqu\'au sommet du plus haut volcan d\'Espagne à 3718m. Transport inclus depuis Santa Cruz.', 'Tenerife', 'Espagne', 'Aventure',    20.00, 15, 480, '2026-06-06', '06:00', 'difficile',4.8, 'valide'),
('Whale watching',                   'Sortie en mer de 3h pour observer dauphins et baleines pilotes dans leur habitat naturel.', 'Tenerife', 'Espagne', 'Nature',      28.00, 20, 180, '2026-06-07', '10:00', 'facile',   4.7, 'valide'),
('Surf et bodyboard à El Medano',    'Cours de surf ou bodyboard sur la plage la plus venteuse de Tenerife, idéale pour les débutants.', 'Tenerife', 'Espagne', 'Sport',       22.00, 10, 180, '2026-06-08', '09:00', 'facile',   4.6, 'valide'),
('Visite du Loro Parque',            'Visite du parc animalier le plus réputé de Tenerife avec orques, dauphins et spectacles.', 'Tenerife', 'Espagne', 'Visite',      32.00, 100,360, '2026-06-09', '10:00', 'facile',   4.5, 'valide'),
('Dégustation de vins canarios',     'Tour de 3 caves locales dans le nord de l\'île avec dégustation de vins volcaniques typiques.', 'Tenerife', 'Espagne', 'Gastronomie', 18.00, 12, 240, '2026-06-10', '11:00', 'facile',   4.6, 'valide'),
('Randonnée Anaga Rural Park',       'Trek dans la forêt de lauriers millénaire du parc d\'Anaga avec guide naturaliste.', 'Tenerife', 'Espagne', 'Nature',      12.00, 15, 300, '2026-06-11', '08:00', 'modere',   4.7, 'valide'),

-- ============================================================
--  ALBANIE SUD (4 activités)
-- ============================================================
('Snorkeling criques de Himara',     'Excursion en bateau dans les criques secrètes de la riviera albanaise avec équipement de snorkeling fourni.', 'Himara', 'Albanie', 'Nature',      10.00, 12, 300, '2026-06-06', '09:00', 'facile',   4.8, 'valide'),
('Visite de Butrint UNESCO',         'Visite guidée du site archéologique gréco-romain de Butrint, classé au patrimoine mondial.', 'Saranda', 'Albanie', 'Culture',     6.00,  20, 180, '2026-06-07', '10:00', 'facile',   4.7, 'valide'),
('Kayak de mer côte ionienne',       'Randonnée en kayak le long de la côte ionienne avec pause baignade dans une crique isolée.', 'Himara', 'Albanie', 'Sport',       14.00, 10, 240, '2026-06-08', '08:30', 'modere',   4.6, 'valide'),
('Soirée taverne traditionnelle',    'Dîner dans une taverne locale avec musique folk albanaise, mezze et raki maison.', 'Saranda', 'Albanie', 'Gastronomie', 12.00, 20, 180, '2026-06-09', '19:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  MONTENEGRO PLAGE (4 activités)
-- ============================================================
('Kayak dans la baie de Kotor',      'Paddle en kayak dans la baie de Kotor au lever du soleil avec vue sur les Bouches de Kotor.', 'Kotor', 'Monténégro', 'Sport',       16.00, 10, 240, '2026-06-06', '07:00', 'facile',   4.8, 'valide'),
('Visite de la vieille ville Kotor', 'Tour guidé de la cité médiévale fortifiée de Kotor avec montée aux remparts.', 'Kotor', 'Monténégro', 'Culture',     8.00,  20, 180, '2026-06-07', '10:00', 'modere',   4.9, 'valide'),
('Journée plage Sveti Stefan',       'Accès à la plage privée de Sveti Stefan avec transats et snorkeling dans les eaux cristallines.', 'Budva', 'Monténégro', 'Detente',     15.00, 30, 480, '2026-06-08', '09:00', 'facile',   4.7, 'valide'),
('Croisière au coucher du soleil',   'Sortie en bateau traditionnel dans la baie de Kotor avec verre de bienvenue et arrêt baignade.', 'Kotor', 'Monténégro', 'Detente',     20.00, 15, 180, '2026-06-09', '17:30', 'facile',   4.8, 'valide'),

-- ============================================================
--  KOH LANTA (5 activités)
-- ============================================================
('Cours de plongée certifié PADI',   'Formation PADI Open Water sur 3 jours avec plongées sur les récifs de Koh Haa.', 'Koh Lanta', 'Thaïlande', 'Sport',       85.00, 6,  2880,'2026-06-11', '08:00', 'modere',   4.9, 'valide'),
('Tour des 4 îles en bateau',        'Excursion en speedboat vers les îles Koh Rok, Koh Mook et Koh Kradan avec snorkeling.', 'Koh Lanta', 'Thaïlande', 'Nature',      25.00, 20, 540, '2026-06-12', '08:00', 'facile',   4.8, 'valide'),
('Cours de cuisine thaï',            'Marché matinal puis cours de cuisine avec 5 plats traditionnels dans une ferme locale.', 'Koh Lanta', 'Thaïlande', 'Gastronomie', 18.00, 8,  300, '2026-06-13', '09:00', 'facile',   4.7, 'valide'),
('Yoga au bord de la mer',           'Séance de yoga au lever du soleil sur la plage avec vue sur la mer d\'Andaman.', 'Koh Lanta', 'Thaïlande', 'Detente',     8.00,  15, 90,  '2026-06-14', '06:30', 'facile',   4.8, 'valide'),
('Kayak mangrove',                   'Exploration des mangroves de Koh Lanta en kayak avec guide pour découvrir la faune locale.', 'Koh Lanta', 'Thaïlande', 'Nature',      14.00, 10, 240, '2026-06-15', '08:00', 'facile',   4.6, 'valide'),

-- ============================================================
--  ESSAOUIRA (3 activités)
-- ============================================================
('Cours de kitesurf',                'Initiation au kitesurf sur la plage d\'Essaouira, réputée pour ses vents réguliers. Matériel inclus.', 'Essaouira', 'Maroc', 'Sport',       35.00, 6,  240, '2026-06-06', '09:00', 'modere',   4.7, 'valide'),
('Visite de la médina et ramparts',  'Tour guidé de la médina bleue et blanche d\'Essaouira avec ses remparts face à l\'Atlantique.', 'Essaouira', 'Maroc', 'Culture',     8.00,  15, 180, '2026-06-07', '10:00', 'facile',   4.6, 'valide'),
('Atelier de cuisine marocaine',     'Cours de cuisine avec une famille locale : tajine, couscous et pâtisseries berbères.', 'Essaouira', 'Maroc', 'Gastronomie', 20.00, 8,  300, '2026-06-08', '10:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  EL NIDO (5 activités)
-- ============================================================
('Tour A : lagons secrets',          'Excursion en bangka vers le grand lagon, la plage cachée et la cathédrale karstique.', 'El Nido', 'Philippines', 'Nature',      15.00, 15, 480, '2026-06-11', '08:00', 'facile',   4.9, 'valide'),
('Tour C : plages isolées',          'Journée vers la plage de Papaya, le lac Shimizu et la grotte de Cudugnon.', 'El Nido', 'Philippines', 'Nature',      15.00, 15, 480, '2026-06-12', '08:00', 'facile',   4.8, 'valide'),
('Plongée récifs Palawan',           'Plongée guidée sur les récifs de Palawan parmi les plus riches en biodiversité du monde.', 'El Nido', 'Philippines', 'Sport',       28.00, 8,  300, '2026-06-13', '07:00', 'modere',   4.9, 'valide'),
('Kayak au coucher de soleil',       'Paddle en kayak autour des formations karstiques au coucher du soleil depuis la plage Corong Corong.', 'El Nido', 'Philippines', 'Detente',     10.00, 12, 180, '2026-06-14', '16:00', 'facile',   4.8, 'valide'),
('Cours de cuisine philippine',      'Apprendre à cuisiner le kare-kare et le sinigang avec une famille locale d\'El Nido.', 'El Nido', 'Philippines', 'Gastronomie', 14.00, 8,  240, '2026-06-15', '10:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  ZANZIBAR (5 activités)
-- ============================================================
('Tour de Stone Town',               'Visite guidée de la ville historique de Zanzibar classée UNESCO : palais du Sultan, marché aux épices, maisons arabes.', 'Stone Town', 'Tanzanie', 'Culture',     10.00, 15, 240, '2026-06-09', '09:00', 'facile',   4.8, 'valide'),
('Tour des épices',                  'Visite d\'une plantation d\'épices avec dégustation de clous de girofle, vanille, cannelle et cardamome.', 'Stone Town', 'Tanzanie', 'Nature',      12.00, 20, 240, '2026-06-10', '09:30', 'facile',   4.7, 'valide'),
('Plongée Mnemba Atoll',             'Plongée sur l\'atoll de Mnemba, sanctuaire marin avec tortues et dauphins spinner.', 'Nungwi', 'Tanzanie', 'Sport',       35.00, 8,  300, '2026-06-11', '08:00', 'modere',   4.9, 'valide'),
('Coucher de soleil dhow cruise',    'Croisière sur un boutre traditionnel zanzibari au coucher du soleil avec fruits de mer.', 'Stone Town', 'Tanzanie', 'Detente',     20.00, 15, 180, '2026-06-12', '17:00', 'facile',   4.9, 'valide'),
('Safari Jozani Forest',             'Visite guidée de la forêt de Jozani pour observer les colobes rouges endémiques de Zanzibar.', 'Jozani', 'Tanzanie', 'Nature',      15.00, 12, 240, '2026-06-13', '08:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  GEORGIE MONTAGNE (5 activités)
-- ============================================================
('Trek Svanétie Mestia–Ushguli',     'Trek mythique de 4 jours entre tours médiévales et glaciers du Caucase. Guide et hébergement en gîte inclus.', 'Mestia', 'Géorgie', 'Aventure',    45.00, 10, 5760,'2026-06-09', '07:00', 'difficile',4.9, 'valide'),
('Dégustation de vins géorgiens',    'Visite d\'une cave traditionnelle en Kakhétie avec dégustation de vins en amphore et repas géorgien.', 'Sighnaghi', 'Géorgie', 'Gastronomie', 15.00, 12, 240, '2026-06-10', '11:00', 'facile',   4.8, 'valide'),
('Randonnée Kazbegi',                'Trek vers l\'église Gergeti dominant le mont Kazbek à 2170m, vue spectaculaire garantie.', 'Kazbegi', 'Géorgie', 'Aventure',    12.00, 15, 300, '2026-06-11', '08:00', 'modere',   4.9, 'valide'),
('Cours de cuisine géorgienne',      'Apprendre à préparer les khinkali, khachapuri et lobiani avec une grand-mère géorgienne.', 'Tbilissi', 'Géorgie', 'Gastronomie', 18.00, 8,  240, '2026-06-12', '10:00', 'facile',   4.8, 'valide'),
('Bains sulfureux Abanotubani',      'Bain dans les thermes sulfureux historiques du quartier d\'Abanotubani à Tbilissi.', 'Tbilissi', 'Géorgie', 'Detente',     8.00,  20, 120, '2026-06-13', '10:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  ALBANIE NORD (3 activités)
-- ============================================================
('Trek Peaks of the Balkans',        'Tronçon du célèbre trek transfrontalier dans les Alpes albanaises avec guide local.', 'Shkoder', 'Albanie', 'Aventure',    20.00, 10, 480, '2026-06-06', '07:00', 'difficile',4.9, 'valide'),
('Balade lac de Shkodra en canoë',   'Exploration du plus grand lac des Balkans en canoë avec observation des oiseaux migrateurs.', 'Shkoder', 'Albanie', 'Nature',      12.00, 10, 240, '2026-06-07', '08:00', 'facile',   4.7, 'valide'),
('Visite château de Rozafa',         'Visite de la forteresse médiévale de Rozafa avec panorama sur le lac et les montagnes.', 'Shkoder', 'Albanie', 'Culture',     5.00,  20, 150, '2026-06-08', '10:00', 'facile',   4.6, 'valide'),

-- ============================================================
--  MACEDOINE DU NORD (3 activités)
-- ============================================================
('Tour du lac d\'Ohrid en bateau',   'Croisière sur le lac Ohrid avec arrêt à l\'église Saint-Jean-de-Kaneo et baignade.', 'Ohrid', 'Macédoine du Nord', 'Nature',      10.00, 20, 240, '2026-06-06', '10:00', 'facile',   4.8, 'valide'),
('Visite monastères byzantins',      'Tour des monastères byzantins du lac Ohrid avec guide spécialisé en art orthodoxe.', 'Ohrid', 'Macédoine du Nord', 'Culture',     8.00,  15, 300, '2026-06-07', '09:00', 'facile',   4.7, 'valide'),
('Randonnée mont Galicica',          'Trek dans le parc national de Galicica avec panorama sur les lacs Ohrid et Prespa.', 'Ohrid', 'Macédoine du Nord', 'Aventure',    6.00,  12, 360, '2026-06-08', '07:30', 'modere',   4.6, 'valide'),

-- ============================================================
--  KIRGHIZISTAN (3 activités)
-- ============================================================
('Nuit en yourte bord de Son Kol',   'Séjour d\'une nuit dans une yourte traditionnelle au bord du lac Son Kol à 3000m avec dîner nomade.', 'Son Kol', 'Kirghizistan', 'Culture',     25.00, 8,  1440,'2026-06-09', '14:00', 'modere',   4.9, 'valide'),
('Randonnée à cheval vallée Jyrgalan','Trek à cheval dans la vallée de Jyrgalan avec guide nomade et pique-nique au bord d\'un torrent.', 'Jyrgalan', 'Kirghizistan', 'Aventure',    30.00, 6,  360, '2026-06-10', '09:00', 'modere',   4.8, 'valide'),
('Visite bazar Osh',                 'Tour guidé du plus grand bazar d\'Asie Centrale à Osh avec dégustation de lagman et samsa.', 'Osh', 'Kirghizistan', 'Gastronomie', 10.00, 15, 240, '2026-06-11', '09:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  MONTENEGRO INTERIEUR (3 activités)
-- ============================================================
('Rafting canyon de la Tara',        'Descente en rafting du plus profond canyon d\'Europe après le Grand Canyon. Guide et équipement inclus.', 'Zabljak', 'Monténégro', 'Aventure',    30.00, 10, 480, '2026-06-06', '08:00', 'modere',   4.9, 'valide'),
('Randonnée lac Noir Durmitor',      'Trek dans le parc national de Durmitor jusqu\'au lac Noir glaciaire au pied des sommets.', 'Zabljak', 'Monténégro', 'Nature',      8.00,  15, 300, '2026-06-07', '08:00', 'facile',   4.8, 'valide'),
('Via ferrata Durmitor',             'Parcours de via ferrata sur les falaises du massif de Durmitor avec vue sur les lacs glaciaires.', 'Zabljak', 'Monténégro', 'Sport',       22.00, 8,  360, '2026-06-08', '07:30', 'difficile',4.7, 'valide'),

-- ============================================================
--  LISBONNE (6 activités)
-- ============================================================
('Tour Fado et gastronomie',         'Soirée dans une maison de Fado à Alfama avec dîner traditionnel et concert de fado authentique.', 'Lisbonne', 'Portugal', 'Culture',     28.00, 20, 240, '2026-06-04', '19:30', 'facile',   4.9, 'valide'),
('Surf à Cascais',                   'Cours de surf débutant à Cascais à 30 minutes de Lisbonne. Transport, combinaison et planche inclus.', 'Cascais', 'Portugal', 'Sport',       35.00, 8,  240, '2026-06-05', '09:00', 'facile',   4.7, 'valide'),
('Tour en tuk-tuk Alfama',           'Visite des 7 collines de Lisbonne en tuk-tuk électrique avec arrêts panoramiques et dégustation de pasteis.', 'Lisbonne', 'Portugal', 'Visite',      18.00, 6,  120, '2026-06-06', '10:00', 'facile',   4.8, 'valide'),
('Atelier de céramique azulejo',     'Atelier créatif de peinture sur carreaux azulejos avec un artisan lisbonnais. À emporter.', 'Lisbonne', 'Portugal', 'Culture',     22.00, 10, 180, '2026-06-07', '14:00', 'facile',   4.7, 'valide'),
('Excursion Sintra palais royaux',   'Visite des palais de Sintra classés UNESCO avec guide : Pena, Regaleira et Queluz.', 'Sintra', 'Portugal', 'Visite',      25.00, 15, 480, '2026-06-08', '09:00', 'facile',   4.9, 'valide'),
('Food tour Mercado da Ribeira',     'Tour gastronomique au marché da Ribeira avec dégustation de bacalhau, ginjinha et pastel de nata.', 'Lisbonne', 'Portugal', 'Gastronomie', 15.00, 12, 180, '2026-06-09', '11:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  BUDAPEST (5 activités)
-- ============================================================
('Bain thermal Széchenyi',           'Entrée au plus grand bain thermal d\'Europe en plein air dans un palais baroque.', 'Budapest', 'Hongrie', 'Detente',     18.00, 100,180, '2026-06-05', '10:00', 'facile',   4.8, 'valide'),
('Croisière Danube by night',        'Croisière nocturne sur le Danube avec vue sur le Parlement illuminé et le château de Buda.', 'Budapest', 'Hongrie', 'Visite',      15.00, 40, 90,  '2026-06-06', '20:30', 'facile',   4.9, 'valide'),
('Tour ruin bars de Budapest',       'Visite guidée des ruin bars légendaires du quartier juif avec premier verre inclus.', 'Budapest', 'Hongrie', 'Nightlife',   12.00, 20, 180, '2026-06-07', '20:00', 'facile',   4.8, 'valide'),
('Vélo tour de la ville',            'Tour à vélo de 3h des incontournables de Budapest avec guide francophone et vélo inclus.', 'Budapest', 'Hongrie', 'Visite',      14.00, 15, 180, '2026-06-08', '09:30', 'facile',   4.7, 'valide'),
('Atelier cuisine hongroise',        'Cours de cuisine pour préparer goulash, langos et strudel avec un chef budapestois.', 'Budapest', 'Hongrie', 'Gastronomie', 20.00, 8,  240, '2026-06-09', '11:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  TBILISSI (5 activités)
-- ============================================================
('Tour street art Fabrika',          'Balade guidée dans le quartier artistique de Fabrika avec ses ateliers, bars et street art.', 'Tbilissi', 'Géorgie', 'Culture',     10.00, 15, 180, '2026-06-05', '11:00', 'facile',   4.7, 'valide'),
('Bain sulfureux Abanotubani',       'Bain privatif dans les thermes sulfureux historiques du quartier Abanotubani.', 'Tbilissi', 'Géorgie', 'Detente',     8.00,  4,  90,  '2026-06-06', '12:00', 'facile',   4.8, 'valide'),
('Dégustation vin naturel géorgien', 'Visite d\'un bar à vins naturels avec dégustation de 6 vins en amphore qvevri et fromages locaux.', 'Tbilissi', 'Géorgie', 'Gastronomie', 15.00, 10, 120, '2026-06-07', '18:00', 'facile',   4.9, 'valide'),
('Randonnée Mtatsminda',             'Montée à pied jusqu\'au parc de Mtatsminda avec téléphérique retour et vue panoramique sur Tbilissi.', 'Tbilissi', 'Géorgie', 'Nature',      6.00,  20, 240, '2026-06-08', '09:00', 'modere',   4.7, 'valide'),
('Visite vieille ville et forteresse','Tour guidé de la vieille ville de Tbilissi, la forteresse Narikala et l\'église Metekhi.', 'Tbilissi', 'Géorgie', 'Visite',      12.00, 15, 180, '2026-06-09', '10:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  HANOI (5 activités)
-- ============================================================
('Street food tour Hanoi by night',  'Tour à pied des meilleurs stands de street food du vieux quartier : pho, bun cha, banh mi.', 'Hanoi', 'Vietnam', 'Gastronomie', 12.00, 12, 180, '2026-06-09', '18:30', 'facile',   4.9, 'valide'),
('Cours de cuisine vietnamienne',    'Marché matinal au Dong Xuan puis cuisine de 5 plats traditionnels avec chef local.', 'Hanoi', 'Vietnam', 'Gastronomie', 18.00, 8,  300, '2026-06-10', '09:00', 'facile',   4.8, 'valide'),
('Vélo vieux quartier',              'Tour à vélo dans les 36 rues du vieux quartier de Hanoi avec guide francophone.', 'Hanoi', 'Vietnam', 'Visite',      10.00, 10, 180, '2026-06-11', '08:00', 'facile',   4.7, 'valide'),
('Excursion baie d\'Ha Long 2 jours','Croisière 2 jours 1 nuit dans la baie d\'Ha Long sur jonque traditionnelle avec kayak.', 'Hanoi', 'Vietnam', 'Nature',      75.00, 16, 2880,'2026-06-12', '08:00', 'facile',   4.9, 'valide'),
('Spectacle eau marionnettes',       'Spectacle traditionnel de marionnettes sur eau au théâtre Thang Long de Hanoi.', 'Hanoi', 'Vietnam', 'Culture',     5.00,  100,60,  '2026-06-13', '18:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  CRACOVIE (3 activités)
-- ============================================================
('Visite Auschwitz-Birkenau',        'Excursion guidée au camp d\'Auschwitz-Birkenau, site mémoriel classé UNESCO. Transport inclus.', 'Cracovie', 'Pologne', 'Culture',     15.00, 15, 480, '2026-06-06', '08:00', 'facile',   4.9, 'valide'),
('Tour de la vieille ville',         'Visite guidée de la place du marché, du château du Wawel et du quartier juif de Kazimierz.', 'Cracovie', 'Pologne', 'Visite',      10.00, 20, 240, '2026-06-07', '10:00', 'facile',   4.8, 'valide'),
('Food tour polonais',               'Dégustation de pierogi, kielbasa, zapiekanka et zurek dans les meilleures adresses locales.', 'Cracovie', 'Pologne', 'Gastronomie', 14.00, 10, 180, '2026-06-08', '12:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  MEXICO CITY (4 activités)
-- ============================================================
('Visite Teotihuacan',               'Excursion aux pyramides du Soleil et de la Lune de Teotihuacan avec guide archéologue.', 'Mexico', 'Mexique', 'Visite',      18.00, 15, 480, '2026-06-06', '08:00', 'modere',   4.9, 'valide'),
('Street food tour Coyoacan',        'Tour gastronomique dans le quartier de Frida Kahlo avec tacos, tlayudas et mezcal.', 'Mexico', 'Mexique', 'Gastronomie', 15.00, 12, 180, '2026-06-07', '12:00', 'facile',   4.8, 'valide'),
('Visite musée Frida Kahlo',         'Visite guidée de la Casa Azul de Frida Kahlo dans le quartier de Coyoacan.', 'Mexico', 'Mexique', 'Culture',     12.00, 10, 150, '2026-06-08', '10:00', 'facile',   4.8, 'valide'),
('Lucha Libre en soirée',            'Soirée catch mexicain à l\'Arena Mexico avec places en tribune et ambiance garantie.', 'Mexico', 'Mexique', 'Culture',     15.00, 50, 180, '2026-06-09', '19:30', 'facile',   4.9, 'valide'),

-- ============================================================
--  BELGRADE (3 activités)
-- ============================================================
('Soirée splavovi sur la Sava',      'Visite guidée des clubs flottants (splavovi) sur la Sava avec entrée dans 2 clubs incluse.', 'Belgrade', 'Serbie', 'Nightlife',   15.00, 20, 300, '2026-06-06', '22:00', 'facile',   4.8, 'valide'),
('Tour forteresse Kalemegdan',       'Visite guidée de la forteresse millénaire de Kalemegdan avec panorama sur le confluent Sava-Danube.', 'Belgrade', 'Serbie', 'Visite',      8.00,  20, 180, '2026-06-07', '10:00', 'facile',   4.7, 'valide'),
('Food tour serbe',                  'Dégustation de cevapi, pljeskavica et rakija dans les meilleurs kafanas du vieux Belgrade.', 'Belgrade', 'Serbie', 'Gastronomie', 14.00, 12, 180, '2026-06-08', '13:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  MARRAKECH (5 activités)
-- ============================================================
('Tour des souks et médina',         'Visite guidée dans le labyrinthe des souks de Marrakech avec arrêt chez les artisans locaux.', 'Marrakech', 'Maroc', 'Culture',     12.00, 12, 240, '2026-06-06', '09:00', 'facile',   4.8, 'valide'),
('Excursion désert Agafay',          'Journée dans le désert de pierres d\'Agafay avec balade à dromadaire et dîner berbère.', 'Marrakech', 'Maroc', 'Aventure',    35.00, 15, 480, '2026-06-07', '09:00', 'facile',   4.9, 'valide'),
('Hammam traditionnel',              'Séance complète de hammam marocain avec gommage au savon beldi et massage à l\'argan.', 'Marrakech', 'Maroc', 'Detente',     18.00, 8,  120, '2026-06-08', '10:00', 'facile',   4.8, 'valide'),
('Cours de cuisine marocaine',       'Cours de cuisine dans un riad avec préparation de tajine, pastilla et thé à la menthe.', 'Marrakech', 'Maroc', 'Gastronomie', 22.00, 8,  300, '2026-06-09', '10:00', 'facile',   4.9, 'valide'),
('Spectacle place Jemaa el-Fna',     'Soirée guidée sur la place des conteurs avec musiciens, cracheurs de feu et dîner de rue.', 'Marrakech', 'Maroc', 'Culture',     10.00, 15, 180, '2026-06-10', '19:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  PRAGUE (4 activités)
-- ============================================================
('Tour à vélo de Prague',            'Balade à vélo de 3h dans les quartiers historiques de Prague avec guide francophone.', 'Prague', 'République Tchèque', 'Visite',      14.00, 15, 180, '2026-06-05', '10:00', 'facile',   4.8, 'valide'),
('Dégustation de bières tchèques',   'Tour de 4 brasseries artisanales de Prague avec dégustation commentée et planche de charcuteries.', 'Prague', 'République Tchèque', 'Gastronomie', 18.00, 12, 240, '2026-06-06', '17:00', 'facile',   4.8, 'valide'),
('Visite château de Prague',         'Tour guidé du château de Prague, le plus grand complexe castral du monde, avec cathédrale gothique.', 'Prague', 'République Tchèque', 'Visite',      12.00, 20, 240, '2026-06-07', '09:00', 'facile',   4.9, 'valide'),
('Soirée concert classique',         'Concert de musique classique dans une église baroque du centre historique de Prague.', 'Prague', 'République Tchèque', 'Culture',     20.00, 80, 90,  '2026-06-08', '20:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  SEVILLE (4 activités)
-- ============================================================
('Cours de flamenco',                'Initiation d\'1h30 au flamenco avec une danseuse professionnelle dans une escuela du centre.', 'Seville', 'Espagne', 'Culture',     20.00, 12, 90,  '2026-06-05', '18:00', 'facile',   4.9, 'valide'),
('Tour tapas Triana',                'Tour gastronomique dans le quartier de Triana avec dégustation de 8 tapas et vino de Jerez.', 'Seville', 'Espagne', 'Gastronomie', 22.00, 12, 180, '2026-06-06', '13:00', 'facile',   4.8, 'valide'),
('Visite Alcazar et cathédrale',     'Tour guidé de l\'Alcazar mudéjar et de la cathédrale gothique, plus grande au monde.', 'Seville', 'Espagne', 'Visite',      15.00, 15, 240, '2026-06-07', '09:00', 'facile',   4.9, 'valide'),
('Balade en calèche',                'Promenade en calèche dans les ruelles de Barrio Santa Cruz au coucher du soleil.', 'Seville', 'Espagne', 'Visite',      12.00, 4,  60,  '2026-06-08', '17:30', 'facile',   4.7, 'valide'),

-- ============================================================
--  TREK ATLAS MAROCAIN (3 activités)
-- ============================================================
('Ascension du Toubkal J1',          'Première journée d\'ascension du Toubkal depuis Imlil jusqu\'au refuge à 3207m. Guide de montagne inclus.', 'Imlil', 'Maroc', 'Aventure',    30.00, 8,  480, '2026-06-08', '07:00', 'difficile',4.9, 'valide'),
('Ascension du Toubkal J2 sommet',   'Deuxième journée : sommet du Toubkal à 4167m au lever du soleil puis descente vers Imlil.', 'Imlil', 'Maroc', 'Aventure',    30.00, 8,  600, '2026-06-09', '04:00', 'difficile',4.9, 'valide'),
('Nuit chez l\'habitant berbère',    'Dîner et nuit dans une maison berbère traditionnelle à Imlil avec cuisine de montagne.', 'Imlil', 'Maroc', 'Culture',     25.00, 6,  720, '2026-06-08', '18:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  COSTA RICA (4 activités)
-- ============================================================
('Surf à Santa Teresa',              'Cours de surf débutant sur les vagues de Santa Teresa, l\'une des meilleures plages pour apprendre.', 'Santa Teresa', 'Costa Rica', 'Sport',       35.00, 8,  240, '2026-06-13', '08:00', 'facile',   4.8, 'valide'),
('Randonnée volcan Arenal',          'Randonnée dans le parc national du volcan Arenal avec bains chauds naturels en soirée.', 'La Fortuna', 'Costa Rica', 'Aventure',    40.00, 12, 480, '2026-06-14', '08:00', 'modere',   4.9, 'valide'),
('Zip-line forêt tropicale',         'Tyrolienne de 2km au-dessus de la canopée de la forêt tropicale de Monteverde.', 'Monteverde', 'Costa Rica', 'Aventure',    45.00, 10, 240, '2026-06-15', '09:00', 'modere',   4.8, 'valide'),
('Observation tortues Tortuguero',   'Excursion nocturne pour observer les tortues luth pondre leurs oeufs sur la plage de Tortuguero.', 'Tortuguero', 'Costa Rica', 'Nature',      30.00, 10, 180, '2026-06-16', '21:00', 'facile',   4.9, 'valide'),

-- ============================================================
--  VIETNAM EN MOTO (3 activités)
-- ============================================================
('Location moto Honda Win',          'Location d\'une Honda Win 110cc avec casque et assistance GPS pour le voyage Hanoi–Hô Chi Minh.', 'Hanoi', 'Vietnam', 'Aventure',    12.00, 1,  20160,'2026-06-09', '08:00', 'difficile',4.8, 'valide'),
('Easy Rider tour col Hai Van',      'Tour en moto avec guide Easy Rider sur le mythique col de Hai Van entre Da Nang et Hue.', 'Da Nang', 'Vietnam', 'Aventure',    25.00, 6,  300, '2026-06-14', '07:00', 'modere',   4.9, 'valide'),
('Visite hoi an by night en vélo',   'Balade à vélo dans la vieille ville de Hoi An illuminée de lanternes avec dîner local.', 'Hoi An', 'Vietnam', 'Visite',      10.00, 12, 240, '2026-06-15', '17:00', 'facile',   4.8, 'valide'),

-- ============================================================
--  JORDANIE (4 activités)
-- ============================================================
('Visite de Pétra',                  'Journée complète à Pétra avec guide : Siq, Trésor, rue des façades et monastère Ed-Deir.', 'Petra', 'Jordanie', 'Visite',      20.00, 15, 600, '2026-06-09', '07:00', 'modere',   4.9, 'valide'),
('Nuit sous les étoiles Wadi Rum',   'Nuit dans un camp bédouin au Wadi Rum avec dîner, feu de camp et ciel étoilé exceptionnel.', 'Wadi Rum', 'Jordanie', 'Aventure',    45.00, 10, 1440,'2026-06-10', '16:00', 'facile',   4.9, 'valide'),
('Flottaison mer Morte',             'Journée à la mer Morte avec flottaison dans les eaux les plus salées du monde et soin à la boue.', 'Mer Morte', 'Jordanie', 'Detente',     15.00, 20, 240, '2026-06-11', '09:00', 'facile',   4.8, 'valide'),
('Snorkeling à Aqaba',               'Snorkeling sur les récifs coralliens du golfe d\'Aqaba, l\'une des mers les plus riches au monde.', 'Aqaba', 'Jordanie', 'Nature',      20.00, 10, 240, '2026-06-12', '08:00', 'facile',   4.7, 'valide'),

-- ============================================================
--  CANARIES NATURE (2 activités)
-- ============================================================
('Randonnée La Gomera Garajonay',    'Trek dans la forêt de laurisilva millénaire du parc national de Garajonay classé UNESCO.', 'San Sebastian', 'Espagne', 'Nature',      10.00, 12, 360, '2026-06-06', '08:00', 'modere',   4.8, 'valide'),
('Observation des étoiles La Palma', 'Soirée astronomique avec télescopede l\'observatoire du Roque de Los Muchachos à 2400m.', 'Santa Cruz de La Palma', 'Espagne', 'Nature',      25.00, 10, 180, '2026-06-07', '21:00', 'facile',   4.9, 'valide'),

-- ============================================================
--  ACORES (3 activités)
-- ============================================================
('Whale watching São Miguel',        'Sortie en mer pour observer les cachalots, dauphins et parfois baleines bleues autour des Açores.', 'Ponta Delgada', 'Portugal', 'Nature',      45.00, 12, 300, '2026-06-06', '08:00', 'facile',   4.9, 'valide'),
('Bain caldeira Furnas',             'Trempage dans les piscines thermales naturelles de la caldeira de Furnas à São Miguel.', 'Furnas', 'Portugal', 'Detente',     5.00,  50, 180, '2026-06-07', '10:00', 'facile',   4.8, 'valide'),
('Randonnée lac des Sept Cités',     'Trek autour du lac de cratère des Sete Cidades avec vue sur les deux lacs vert et bleu.', 'Sete Cidades', 'Portugal', 'Nature',      8.00,  15, 300, '2026-06-08', '08:00', 'modere',   4.9, 'valide');
