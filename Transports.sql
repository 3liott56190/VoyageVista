-- ============================================================
--  VoyageVista — Table transports
-- ============================================================

USE destination;

-- ============================================================
--  TABLE : transports
-- ============================================================
CREATE TABLE transports (
  id_transport          INT AUTO_INCREMENT PRIMARY KEY,
  compagnie             VARCHAR(100)  NOT NULL,
  type_transport        ENUM('avion','train','voiture','bus','ferrie') NOT NULL,
  numero_trajet         VARCHAR(50)   DEFAULT NULL,
  ville_depart          VARCHAR(100)  NOT NULL,
  ville_arrivee         VARCHAR(100)  NOT NULL,
  date_depart           DATE          NOT NULL,
  heure_depart          TIME          NOT NULL,
  date_arrivee          DATE          NOT NULL,
  heure_arrivee         TIME          NOT NULL,
  duree_minutes         INT           DEFAULT NULL,
  classe                ENUM('economique','business','premiere') DEFAULT 'economique',
  prix_par_personne     DECIMAL(8,2)  NOT NULL,
  places_disponibles    INT           DEFAULT 0,
  statut_validation     ENUM('en_attente','refuse','valide') DEFAULT 'en_attente',
  date_creation         DATETIME      DEFAULT CURRENT_TIMESTAMP,
  date_modification     DATETIME      DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================================
--  DONNÉES : ~110 transports (tous validés)
-- ============================================================
INSERT INTO transports (compagnie, type_transport, numero_trajet, ville_depart, ville_arrivee, date_depart, heure_depart, date_arrivee, heure_arrivee, duree_minutes, classe, prix_par_personne, places_disponibles, statut_validation) VALUES

-- ============================================================
--  AVIONS — Paris → destinations (30 vols)
-- ============================================================

-- Paris → Bali
('Air France',       'avion', 'AF257',  'Paris', 'Bali',      '2026-06-10', '09:00', '2026-06-11', '08:30', 1410, 'economique', 620.00, 180, 'valide'),
('Air France',       'avion', 'AF257',  'Paris', 'Bali',      '2026-06-17', '09:00', '2026-06-18', '08:30', 1410, 'economique', 650.00, 160, 'valide'),
('KLM',              'avion', 'KL836',  'Paris', 'Bali',      '2026-06-10', '11:30', '2026-06-11', '12:00', 1470, 'economique', 590.00, 200, 'valide'),
('KLM',              'avion', 'KL836',  'Paris', 'Bali',      '2026-07-01', '11:30', '2026-07-02', '12:00', 1470, 'economique', 680.00, 140, 'valide'),
('Emirates',         'avion', 'EK076',  'Paris', 'Bali',      '2026-06-15', '14:20', '2026-06-16', '16:50', 1470, 'business',   1850.00, 40, 'valide'),
('Emirates',         'avion', 'EK076',  'Paris', 'Bali',      '2026-07-10', '14:20', '2026-07-11', '16:50', 1470, 'business',   1950.00, 30, 'valide'),

-- Paris → Tenerife
('Vueling',          'avion', 'VY8320', 'Paris', 'Tenerife',  '2026-06-05', '07:15', '2026-06-05', '10:45', 210, 'economique', 89.00,  190, 'valide'),
('Vueling',          'avion', 'VY8320', 'Paris', 'Tenerife',  '2026-06-12', '07:15', '2026-06-12', '10:45', 210, 'economique', 110.00, 175, 'valide'),
('Transavia',        'avion', 'TO7410', 'Paris', 'Tenerife',  '2026-06-07', '10:30', '2026-06-07', '14:00', 210, 'economique', 95.00,  180, 'valide'),
('Transavia',        'avion', 'TO7410', 'Paris', 'Tenerife',  '2026-07-05', '10:30', '2026-07-05', '14:00', 210, 'economique', 130.00, 150, 'valide'),
('Air France',       'avion', 'AF1350', 'Paris', 'Tenerife',  '2026-06-20', '08:00', '2026-06-20', '11:30', 210, 'economique', 145.00, 160, 'valide'),

-- Paris → Lisbonne
('TAP Air Portugal', 'avion', 'TP432',  'Paris', 'Lisbonne',  '2026-06-03', '08:45', '2026-06-03', '10:55', 130, 'economique', 79.00,  200, 'valide'),
('TAP Air Portugal', 'avion', 'TP432',  'Paris', 'Lisbonne',  '2026-06-10', '08:45', '2026-06-10', '10:55', 130, 'economique', 95.00,  185, 'valide'),
('Easyjet',          'avion', 'U24571', 'Paris', 'Lisbonne',  '2026-06-05', '06:30', '2026-06-05', '08:40', 130, 'economique', 65.00,  220, 'valide'),
('Easyjet',          'avion', 'U24571', 'Paris', 'Lisbonne',  '2026-06-15', '06:30', '2026-06-15', '08:40', 130, 'economique', 72.00,  210, 'valide'),
('Air France',       'avion', 'AF1010', 'Paris', 'Lisbonne',  '2026-07-01', '09:15', '2026-07-01', '11:25', 130, 'business',   320.00,  50, 'valide'),

-- Paris → Budapest
('Wizz Air',         'avion', 'W6401',  'Paris', 'Budapest',  '2026-06-04', '07:00', '2026-06-04', '09:30', 150, 'economique', 55.00,  230, 'valide'),
('Wizz Air',         'avion', 'W6401',  'Paris', 'Budapest',  '2026-06-18', '07:00', '2026-06-18', '09:30', 150, 'economique', 68.00,  200, 'valide'),
('Ryanair',          'avion', 'FR8821', 'Paris', 'Budapest',  '2026-06-06', '11:20', '2026-06-06', '13:50', 150, 'economique', 48.00,  240, 'valide'),
('Ryanair',          'avion', 'FR8821', 'Paris', 'Budapest',  '2026-07-03', '11:20', '2026-07-03', '13:50', 150, 'economique', 75.00,  180, 'valide'),
('Air France',       'avion', 'AF1230', 'Paris', 'Budapest',  '2026-06-10', '14:00', '2026-06-10', '16:30', 150, 'business',   290.00,  45, 'valide'),

-- Paris → Hanoï
('Vietnam Airlines', 'avion', 'VN010',  'Paris', 'Hanoi',     '2026-06-08', '10:15', '2026-06-09', '05:30', 1155, 'economique', 550.00, 170, 'valide'),
('Vietnam Airlines', 'avion', 'VN010',  'Paris', 'Hanoi',     '2026-06-22', '10:15', '2026-06-23', '05:30', 1155, 'economique', 580.00, 150, 'valide'),
('Air France',       'avion', 'AF254',  'Paris', 'Hanoi',     '2026-07-01', '11:45', '2026-07-02', '07:00', 1155, 'economique', 610.00, 160, 'valide'),
('Air France',       'avion', 'AF254',  'Paris', 'Hanoi',     '2026-07-15', '11:45', '2026-07-16', '07:00', 1155, 'business',  1650.00,  35, 'valide'),
('Qatar Airways',    'avion', 'QR147',  'Paris', 'Hanoi',     '2026-06-12', '13:30', '2026-06-13', '10:00', 1230, 'economique', 490.00, 190, 'valide'),

-- Paris → Zanzibar
('Air France',       'avion', 'AF882',  'Paris', 'Zanzibar',  '2026-06-09', '08:30', '2026-06-09', '21:00', 750,  'economique', 480.00, 160, 'valide'),
('Air France',       'avion', 'AF882',  'Paris', 'Zanzibar',  '2026-07-07', '08:30', '2026-07-07', '21:00', 750,  'economique', 520.00, 140, 'valide'),
('Turkish Airlines', 'avion', 'TK18',   'Paris', 'Zanzibar',  '2026-06-14', '10:00', '2026-06-14', '23:30', 810,  'economique', 440.00, 200, 'valide'),
('Turkish Airlines', 'avion', 'TK18',   'Paris', 'Zanzibar',  '2026-07-05', '10:00', '2026-07-05', '23:30', 810,  'business',  1380.00,  40, 'valide'),

-- ============================================================
--  AVIONS — Autres villes de départ (20 vols)
-- ============================================================

-- Lyon → Lisbonne
('Vueling',          'avion', 'VY5610', 'Lyon',  'Lisbonne',  '2026-06-06', '07:30', '2026-06-06', '09:30', 120, 'economique', 72.00,  190, 'valide'),
('Vueling',          'avion', 'VY5610', 'Lyon',  'Lisbonne',  '2026-06-20', '07:30', '2026-06-20', '09:30', 120, 'economique', 88.00,  170, 'valide'),
('Transavia',        'avion', 'TO5412', 'Lyon',  'Tenerife',  '2026-06-08', '09:15', '2026-06-08', '12:30', 195, 'economique', 98.00,  175, 'valide'),
('Transavia',        'avion', 'TO5412', 'Lyon',  'Tenerife',  '2026-07-06', '09:15', '2026-07-06', '12:30', 195, 'economique', 120.00, 150, 'valide'),

-- Marseille → Marrakech
('Air Arabia Maroc', 'avion', 'MAC810', 'Marseille', 'Marrakech', '2026-06-05', '08:00', '2026-06-05', '09:40', 100, 'economique', 69.00,  210, 'valide'),
('Air Arabia Maroc', 'avion', 'MAC810', 'Marseille', 'Marrakech', '2026-06-19', '08:00', '2026-06-19', '09:40', 100, 'economique', 82.00,  195, 'valide'),
('Ryanair',          'avion', 'FR4510', 'Marseille', 'Marrakech', '2026-07-03', '11:00', '2026-07-03', '12:40', 100, 'economique', 55.00,  230, 'valide'),

-- Nice → Prague
('Easyjet',          'avion', 'U23301', 'Nice',  'Prague',    '2026-06-07', '10:00', '2026-06-07', '12:30', 150, 'economique', 62.00,  200, 'valide'),
('Easyjet',          'avion', 'U23301', 'Nice',  'Prague',    '2026-06-21', '10:00', '2026-06-21', '12:30', 150, 'economique', 75.00,  180, 'valide'),

-- Bordeaux → Budapest
('Ryanair',          'avion', 'FR9021', 'Bordeaux', 'Budapest', '2026-06-09', '06:45', '2026-06-09', '09:30', 165, 'economique', 58.00,  220, 'valide'),
('Ryanair',          'avion', 'FR9021', 'Bordeaux', 'Budapest', '2026-07-07', '06:45', '2026-07-07', '09:30', 165, 'economique', 79.00,  190, 'valide'),

-- Paris → El Nido (via Manille)
('Philippine Airlines','avion','PR731', 'Paris',  'El Nido',  '2026-06-10', '09:00', '2026-06-11', '18:30', 1770, 'economique', 720.00, 150, 'valide'),
('Philippine Airlines','avion','PR731', 'Paris',  'El Nido',  '2026-07-01', '09:00', '2026-07-02', '18:30', 1770, 'economique', 780.00, 130, 'valide'),

-- Paris → Costa Rica
('Air France',       'avion', 'AF488',  'Paris', 'San Jose',  '2026-06-12', '11:30', '2026-06-12', '19:45', 615, 'economique', 560.00, 165, 'valide'),
('Air France',       'avion', 'AF488',  'Paris', 'San Jose',  '2026-07-05', '11:30', '2026-07-05', '19:45', 615, 'business',  1480.00,  40, 'valide'),

-- Paris → Jordanie
('Royal Jordanian',  'avion', 'RJ119',  'Paris', 'Amman',     '2026-06-08', '14:00', '2026-06-08', '20:00', 360, 'economique', 290.00, 175, 'valide'),
('Royal Jordanian',  'avion', 'RJ119',  'Paris', 'Amman',     '2026-06-22', '14:00', '2026-06-22', '20:00', 360, 'economique', 310.00, 160, 'valide'),
('Air France',       'avion', 'AF2002', 'Paris', 'Amman',     '2026-07-10', '09:00', '2026-07-10', '15:00', 360, 'business',   990.00,  45, 'valide'),

-- ============================================================
--  TRAINS (25 trajets)
-- ============================================================

-- Paris → Lisbonne (train de nuit)
('Renfe-SNCF',       'train', 'TGV9731','Paris', 'Madrid',    '2026-06-05', '17:00', '2026-06-06', '09:30', 990, 'economique', 89.00,  300, 'valide'),
('Renfe-SNCF',       'train', 'TGV9731','Paris', 'Madrid',    '2026-06-19', '17:00', '2026-06-20', '09:30', 990, 'economique', 105.00, 280, 'valide'),
('Renfe-SNCF',       'train', 'TGV9731','Paris', 'Madrid',    '2026-07-03', '17:00', '2026-07-04', '09:30', 990, 'business',   195.00,  80, 'valide'),

-- Paris → Budapest
('Railjet',          'train', 'RJ40',   'Paris', 'Budapest',  '2026-06-06', '07:22', '2026-06-06', '21:40', 858, 'economique', 75.00,  350, 'valide'),
('Railjet',          'train', 'RJ40',   'Paris', 'Budapest',  '2026-06-20', '07:22', '2026-06-20', '21:40', 858, 'economique', 88.00,  320, 'valide'),
('Railjet',          'train', 'RJ40',   'Paris', 'Budapest',  '2026-07-04', '07:22', '2026-07-04', '21:40', 858, 'business',   180.00,  60, 'valide'),

-- Paris → Prague
('DB ICE',           'train', 'ICE373', 'Paris', 'Prague',    '2026-06-04', '09:55', '2026-06-04', '19:15', 560, 'economique', 65.00,  380, 'valide'),
('DB ICE',           'train', 'ICE373', 'Paris', 'Prague',    '2026-06-18', '09:55', '2026-06-18', '19:15', 560, 'economique', 79.00,  350, 'valide'),
('DB ICE',           'train', 'ICE373', 'Paris', 'Prague',    '2026-07-02', '09:55', '2026-07-02', '19:15', 560, 'business',   155.00,  70, 'valide'),

-- Paris → Séville
('Renfe AVE',        'train', 'AVE102', 'Paris', 'Seville',   '2026-06-07', '08:15', '2026-06-07', '15:30', 555, 'economique', 95.00,  290, 'valide'),
('Renfe AVE',        'train', 'AVE102', 'Paris', 'Seville',   '2026-06-21', '08:15', '2026-06-21', '15:30', 555, 'economique', 110.00, 270, 'valide'),

-- Lyon → Belgrade
('SNCF TGV',         'train', 'TGV6012','Lyon',  'Belgrade',  '2026-06-10', '06:30', '2026-06-10', '22:00', 930, 'economique', 82.00,  310, 'valide'),
('SNCF TGV',         'train', 'TGV6012','Lyon',  'Belgrade',  '2026-07-08', '06:30', '2026-07-08', '22:00', 930, 'economique', 98.00,  280, 'valide'),

-- Paris → Cracovie
('PKP Intercity',    'train', 'IC31',   'Paris', 'Cracovie',  '2026-06-05', '10:00', '2026-06-05', '22:30', 750, 'economique', 72.00,  360, 'valide'),
('PKP Intercity',    'train', 'IC31',   'Paris', 'Cracovie',  '2026-06-19', '10:00', '2026-06-19', '22:30', 750, 'economique', 85.00,  330, 'valide'),
('PKP Intercity',    'train', 'IC31',   'Paris', 'Cracovie',  '2026-07-10', '10:00', '2026-07-10', '22:30', 750, 'business',   165.00,  65, 'valide'),

-- Nice → Monténégro (train de nuit)
('Trenitalia',       'train', 'EN242',  'Nice',  'Bar (Montenegro)', '2026-06-08', '20:15', '2026-06-09', '15:30', 1155, 'economique', 88.00, 200, 'valide'),
('Trenitalia',       'train', 'EN242',  'Nice',  'Bar (Montenegro)', '2026-07-06', '20:15', '2026-07-07', '15:30', 1155, 'economique', 102.00,180, 'valide'),

-- Paris → Kotor (via train + correspondance)
('Trenitalia',       'train', 'IC504',  'Paris', 'Kotor',     '2026-06-09', '07:45', '2026-06-10', '08:00', 1455, 'economique', 98.00,  220, 'valide'),
('Trenitalia',       'train', 'IC504',  'Paris', 'Kotor',     '2026-07-07', '07:45', '2026-07-08', '08:00', 1455, 'economique', 115.00, 195, 'valide'),

-- Paris → Tbilissi (train trans-européen)
('Georgian Railway', 'train', 'GR101',  'Paris', 'Tbilissi',  '2026-06-11', '08:00', '2026-06-13', '18:00', 3000, 'economique', 145.00, 180, 'valide'),
('Georgian Railway', 'train', 'GR101',  'Paris', 'Tbilissi',  '2026-07-09', '08:00', '2026-07-11', '18:00', 3000, 'business',   310.00,  55, 'valide'),

-- ============================================================
--  BUS (20 trajets)
-- ============================================================

-- Paris → Lisbonne
('FlixBus',          'bus',   'FX1210', 'Paris', 'Lisbonne',  '2026-06-04', '08:00', '2026-06-05', '11:00', 1620, 'economique', 39.00,  55, 'valide'),
('FlixBus',          'bus',   'FX1210', 'Paris', 'Lisbonne',  '2026-06-18', '08:00', '2026-06-19', '11:00', 1620, 'economique', 45.00,  50, 'valide'),
('FlixBus',          'bus',   'FX1210', 'Paris', 'Lisbonne',  '2026-07-02', '08:00', '2026-07-03', '11:00', 1620, 'economique', 52.00,  48, 'valide'),

-- Paris → Madrid
('Eurolines',        'bus',   'EU2204', 'Paris', 'Madrid',    '2026-06-06', '07:30', '2026-06-07', '08:30', 1500, 'economique', 35.00,  60, 'valide'),
('Eurolines',        'bus',   'EU2204', 'Paris', 'Madrid',    '2026-06-20', '07:30', '2026-06-21', '08:30', 1500, 'economique', 42.00,  55, 'valide'),
('FlixBus',          'bus',   'FX980',  'Paris', 'Madrid',    '2026-07-04', '09:00', '2026-07-05', '10:00', 1500, 'economique', 38.00,  58, 'valide'),

-- Paris → Prague
('FlixBus',          'bus',   'FX4401', 'Paris', 'Prague',    '2026-06-05', '09:30', '2026-06-05', '22:00', 750, 'economique', 28.00,  60, 'valide'),
('FlixBus',          'bus',   'FX4401', 'Paris', 'Prague',    '2026-06-19', '09:30', '2026-06-19', '22:00', 750, 'economique', 33.00,  55, 'valide'),

-- Paris → Budapest
('FlixBus',          'bus',   'FX5512', 'Paris', 'Budapest',  '2026-06-07', '08:00', '2026-06-07', '23:30', 930, 'economique', 32.00,  60, 'valide'),
('FlixBus',          'bus',   'FX5512', 'Paris', 'Budapest',  '2026-07-05', '08:00', '2026-07-05', '23:30', 930, 'economique', 40.00,  52, 'valide'),

-- Paris → Cracovie
('Eurolines',        'bus',   'EU3301', 'Paris', 'Cracovie',  '2026-06-06', '07:00', '2026-06-06', '23:30', 990, 'economique', 36.00,  58, 'valide'),
('Eurolines',        'bus',   'EU3301', 'Paris', 'Cracovie',  '2026-06-20', '07:00', '2026-06-20', '23:30', 990, 'economique', 44.00,  52, 'valide'),

-- Lyon → Séville
('FlixBus',          'bus',   'FX7720', 'Lyon',  'Seville',   '2026-06-08', '06:30', '2026-06-09', '09:00', 1590, 'economique', 42.00,  55, 'valide'),
('FlixBus',          'bus',   'FX7720', 'Lyon',  'Seville',   '2026-07-06', '06:30', '2026-07-07', '09:00', 1590, 'economique', 51.00,  48, 'valide'),

-- Marseille → Belgrade
('Eurolines',        'bus',   'EU5501', 'Marseille', 'Belgrade', '2026-06-09', '07:00', '2026-06-10', '08:00', 1500, 'economique', 38.00, 55, 'valide'),
('Eurolines',        'bus',   'EU5501', 'Marseille', 'Belgrade', '2026-07-07', '07:00', '2026-07-08', '08:00', 1500, 'economique', 46.00, 50, 'valide'),

-- Paris → Marrakech (bus + ferry)
('Eurolines',        'bus',   'EU8810', 'Paris', 'Marrakech', '2026-06-05', '06:00', '2026-06-06', '20:00', 2160, 'economique', 55.00,  50, 'valide'),
('Eurolines',        'bus',   'EU8810', 'Paris', 'Marrakech', '2026-07-03', '06:00', '2026-07-04', '20:00', 2160, 'economique', 65.00,  45, 'valide'),

-- ============================================================
--  FERRIES (20 trajets)
-- ============================================================

-- Marseille → Alger
('Algerie Ferries',  'ferrie','AF501',  'Marseille', 'Alger',  '2026-06-05', '14:00', '2026-06-06', '09:00', 1140, 'economique', 95.00,  400, 'valide'),
('Algerie Ferries',  'ferrie','AF501',  'Marseille', 'Alger',  '2026-06-12', '14:00', '2026-06-13', '09:00', 1140, 'economique', 105.00, 380, 'valide'),
('SNCM',             'ferrie','SN205',  'Marseille', 'Alger',  '2026-06-19', '16:00', '2026-06-20', '11:00', 1140, 'economique', 89.00,  420, 'valide'),

-- Marseille → Tunis
('CTN',              'ferrie','CT301',  'Marseille', 'Tunis',  '2026-06-06', '12:00', '2026-06-07', '10:00', 1320, 'economique', 98.00,  380, 'valide'),
('CTN',              'ferrie','CT301',  'Marseille', 'Tunis',  '2026-06-20', '12:00', '2026-06-21', '10:00', 1320, 'economique', 110.00, 360, 'valide'),
('Grimaldi Lines',   'ferrie','GL102',  'Marseille', 'Tunis',  '2026-07-04', '10:00', '2026-07-05', '08:00', 1320, 'economique', 88.00,  400, 'valide'),

-- Barcelone → Ibiza
('Balearia',         'ferrie','BA401',  'Barcelone', 'Ibiza',  '2026-06-05', '09:00', '2026-06-05', '18:00', 540, 'economique', 55.00,  300, 'valide'),
('Balearia',         'ferrie','BA401',  'Barcelone', 'Ibiza',  '2026-06-19', '09:00', '2026-06-19', '18:00', 540, 'economique', 65.00,  280, 'valide'),
('Trasmediterranea', 'ferrie','TM501',  'Barcelone', 'Ibiza',  '2026-07-03', '10:00', '2026-07-03', '19:00', 540, 'economique', 72.00,  260, 'valide'),

-- Venise → Kotor
('Jadrolinija',      'ferrie','JA211',  'Venise', 'Kotor',     '2026-06-07', '08:00', '2026-06-08', '08:00', 1440, 'economique', 78.00,  250, 'valide'),
('Jadrolinija',      'ferrie','JA211',  'Venise', 'Kotor',     '2026-06-21', '08:00', '2026-06-22', '08:00', 1440, 'economique', 88.00,  230, 'valide'),
('Jadrolinija',      'ferrie','JA211',  'Venise', 'Kotor',     '2026-07-05', '08:00', '2026-07-06', '08:00', 1440, 'business',   165.00,  60, 'valide'),

-- Ancône → Split (Croatie, proche Monténégro)
('Jadrolinija',      'ferrie','JA315',  'Ancone', 'Split',     '2026-06-08', '20:00', '2026-06-09', '07:00', 660, 'economique', 62.00,  300, 'valide'),
('Jadrolinija',      'ferrie','JA315',  'Ancone', 'Split',     '2026-06-22', '20:00', '2026-06-23', '07:00', 660, 'economique', 72.00,  280, 'valide'),

-- Athènes → Santorin
('Blue Star Ferries','ferrie','BS701',  'Athenes', 'Santorin', '2026-06-06', '07:30', '2026-06-06', '17:00', 570, 'economique', 45.00,  400, 'valide'),
('Blue Star Ferries','ferrie','BS701',  'Athenes', 'Santorin', '2026-06-13', '07:30', '2026-06-13', '17:00', 570, 'economique', 52.00,  380, 'valide'),
('Blue Star Ferries','ferrie','BS701',  'Athenes', 'Santorin', '2026-07-04', '07:30', '2026-07-04', '17:00', 570, 'economique', 60.00,  360, 'valide'),
('Hellenic Seaways', 'ferrie','HS202',  'Athenes', 'Santorin', '2026-06-20', '08:00', '2026-06-20', '18:30', 630, 'economique', 48.00,  350, 'valide'),

-- Civitavecchia → Zanzibar (ferry longue distance)
('MSC Croisières',   'ferrie','MSC201', 'Civitavecchia', 'Zanzibar', '2026-06-10', '18:00', '2026-06-17', '08:00', 9960, 'economique', 390.00, 800, 'valide'),
('MSC Croisières',   'ferrie','MSC201', 'Civitavecchia', 'Zanzibar', '2026-07-08', '18:00', '2026-07-15', '08:00', 9960, 'business',   780.00, 200, 'valide'),

-- ============================================================
--  VOITURES DE LOCATION (15 entrées)
-- ============================================================

-- Location Paris
('Europcar',         'voiture','LOC-PAR-01', 'Paris', 'Paris',  '2026-06-05', '08:00', '2026-06-12', '08:00', 0, 'economique', 35.00,  50, 'valide'),
('Hertz',            'voiture','LOC-PAR-02', 'Paris', 'Paris',  '2026-06-05', '08:00', '2026-06-12', '08:00', 0, 'economique', 42.00,  45, 'valide'),
('Sixt',             'voiture','LOC-PAR-03', 'Paris', 'Paris',  '2026-06-10', '09:00', '2026-06-17', '09:00', 0, 'business',   68.00,  30, 'valide'),

-- Location Lisbonne
('Europcar',         'voiture','LOC-LIS-01', 'Lisbonne', 'Lisbonne', '2026-06-05', '10:00', '2026-06-12', '10:00', 0, 'economique', 28.00, 40, 'valide'),
('Hertz',            'voiture','LOC-LIS-02', 'Lisbonne', 'Lisbonne', '2026-06-12', '10:00', '2026-06-19', '10:00', 0, 'economique', 32.00, 35, 'valide'),

-- Location Bali
('Bali Car Rental',  'voiture','LOC-BAL-01', 'Bali', 'Bali',   '2026-06-11', '09:00', '2026-06-18', '09:00', 0, 'economique', 22.00,  60, 'valide'),
('Bali Car Rental',  'voiture','LOC-BAL-02', 'Bali', 'Bali',   '2026-07-02', '09:00', '2026-07-09', '09:00', 0, 'economique', 25.00,  55, 'valide'),

-- Location Marrakech
('Avis Maroc',       'voiture','LOC-MAR-01', 'Marrakech', 'Marrakech', '2026-06-06', '09:00', '2026-06-13', '09:00', 0, 'economique', 30.00, 40, 'valide'),
('Budget',           'voiture','LOC-MAR-02', 'Marrakech', 'Marrakech', '2026-07-04', '09:00', '2026-07-11', '09:00', 0, 'economique', 27.00, 45, 'valide'),

-- Location Tbilissi
('Georgian Car',     'voiture','LOC-TBI-01', 'Tbilissi', 'Tbilissi', '2026-06-08', '10:00', '2026-06-15', '10:00', 0, 'economique', 20.00, 50, 'valide'),
('Georgian Car',     'voiture','LOC-TBI-02', 'Tbilissi', 'Tbilissi', '2026-07-06', '10:00', '2026-07-13', '10:00', 0, 'economique', 22.00, 45, 'valide'),

-- Location Hanoï
('Vietnam Car',      'voiture','LOC-HAN-01', 'Hanoi', 'Hanoi',  '2026-06-09', '10:00', '2026-06-16', '10:00', 0, 'economique', 18.00,  55, 'valide'),
('Vietnam Car',      'voiture','LOC-HAN-02', 'Hanoi', 'Hanoi',  '2026-07-02', '10:00', '2026-07-09', '10:00', 0, 'economique', 20.00,  50, 'valide'),

-- Location Budapest
('Europcar',         'voiture','LOC-BUD-01', 'Budapest', 'Budapest', '2026-06-07', '09:00', '2026-06-14', '09:00', 0, 'economique', 25.00, 45, 'valide'),
('Sixt',             'voiture','LOC-BUD-02', 'Budapest', 'Budapest', '2026-07-05', '09:00', '2026-07-12', '09:00', 0, 'business',   55.00, 25, 'valide');