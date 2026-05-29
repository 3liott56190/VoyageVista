-- ============================================================
--  VoyageVista — Table destinations
-- ============================================================

CREATE DATABASE IF NOT EXISTS voyagevista
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE voyagevista;

-- ============================================================
--  TABLE : destinations
-- ============================================================
CREATE TABLE destinations (
  id_destination     INT AUTO_INCREMENT PRIMARY KEY,
  nom                VARCHAR(100)   NOT NULL,
  pays               VARCHAR(100)   NOT NULL,
  continent          VARCHAR(50)    NOT NULL,
  categorie          ENUM('Plage','Montagne','Ville','Aventure','Culture','Nature','Romantique') NOT NULL,
  description        TEXT,
  prix_par_personne  DECIMAL(8,2)   NOT NULL,
  duree_min_jours    INT            DEFAULT 1,
  duree_max_jours    INT            DEFAULT 30,
  note_moyenne       DECIMAL(3,1)   DEFAULT 0.0,
  image_url          VARCHAR(255),
  tag_populaire      TINYINT(1)     DEFAULT 0,
  tag_recommande     TINYINT(1)     DEFAULT 0,
  badge              ENUM('Réduction','Coup de cœur') DEFAULT NULL,
  statut_validation  ENUM('en_attente','refuse','valide') DEFAULT 'en_attente',
  date_creation      DATETIME       DEFAULT CURRENT_TIMESTAMP,
  date_modification  DATETIME       DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- ============================================================
--  DONNÉES : 30 destinations (toutes validées)
-- ============================================================
INSERT INTO destinations (nom, pays, continent, categorie, description, prix_par_personne, duree_min_jours, duree_max_jours, note_moyenne, image_url, tag_populaire, tag_recommande, badge, statut_validation) VALUES

-- PLAGE (8)
('Bali',          'Indonésie',  'Asie',    'Plage', 'Île des dieux aux rizières en terrasses, temples mystiques et plages paradisiaques. Un incontournable pour les voyageurs en quête d\'authenticité.', 890.00,  7, 21, 4.8, 'bali.jpg',          1, 0, 'Coup de cœur', 'valide'),
('Tenerife',      'Espagne',    'Europe',  'Plage', 'La plus grande des Canaries offre volcans, plages noires et soleil toute l\'année à prix accessible depuis l\'Europe.',                           480.00,  5, 14, 4.4, 'tenerife.jpg',      1, 0,  NULL,           'valide'),
('Albanie Sud',   'Albanie',    'Europe',  'Plage', 'La riviera albanaise cache des criques turquoise quasi-vierges à des prix défiant toute concurrence. Le secret le mieux gardé de la Méditerranée.', 350.00, 5, 14, 4.5, 'albanie-sud.jpg',   0, 1, 'Coup de cœur', 'valide'),
('Monténégro',    'Monténégro', 'Europe',  'Plage', 'Fjords adriatiques, vieilles villes médiévales et plages immaculées dans un pays encore préservé du tourisme de masse.',                          420.00,  5, 12, 4.3, 'montenegro.jpg',    0, 1,  NULL,           'valide'),
('Koh Lanta',     'Thaïlande',  'Asie',    'Plage', 'Île paisible du sud de la Thaïlande avec ses longues plages de sable fin, ses bungalows sur pilotis et son ambiance décontractée.',               750.00,  7, 21, 4.6, 'koh-lanta.jpg',     1, 0, 'Réduction',    'valide'),
('Essaouira',     'Maroc',      'Afrique', 'Plage', 'Cité portugaise des alizés sur l\'Atlantique, médina bleue et blanche, plages venteuses idéales pour le surf et cuisine généreuse.',               390.00,  4, 10, 4.4, 'essaouira.jpg',     0, 0,  NULL,           'valide'),
('El Nido',       'Philippines','Asie',    'Plage', 'Lagons émeraude, falaises karstiques et snorkeling exceptionnel dans l\'archipel de Palawan, régulièrement élu plus belle île du monde.',          820.00,  7, 18, 4.9, 'el-nido.jpg',       1, 0, 'Coup de cœur', 'valide'),
('Zanzibar',      'Tanzanie',   'Afrique', 'Plage', 'Eaux cristallines, épices envoûtantes et Stone Town classée à l\'UNESCO. Un cocktail unique entre Afrique, Arabie et Portugal.',                  950.00,  7, 14, 4.7, 'zanzibar.jpg',      0, 1,  NULL,           'valide'),

-- MONTAGNE (5)
('Géorgie',             'Géorgie',          'Asie',   'Montagne', 'Villages caucasiens perchés, randonnées épiques en Svanétie et hospitalité légendaire. L\'un des pays les plus abordables au monde.',         520.00,  7, 21, 4.8, 'georgie.jpg',            1, 1, 'Coup de cœur', 'valide'),
('Albanie Nord',        'Albanie',          'Europe', 'Montagne', 'Les Alpes albanaises et le trek Peaks of the Balkans offrent des paysages sauvages comparables aux Alpes suisses pour dix fois moins cher.',  380.00,  5, 14, 4.6, 'albanie-nord.jpg',       0, 1, 'Réduction',    'valide'),
('Macédoine du Nord',   'Macédoine du Nord','Europe', 'Montagne', 'Lac d\'Ohrid turquoise, monastères byzantins et massifs montagneux quasi-déserts. Une destination confidentielle à prix ridiculement bas.',   340.00,  5, 12, 4.4, 'macedoine.jpg',          0, 0,  NULL,           'valide'),
('Kirghizistan',        'Kirghizistan',     'Asie',   'Montagne', 'Steppes infinies, yourtes au bord de lacs d\'altitude et cols à couper le souffle sur la route de la soie. L\'aventure ultime en Asie Centrale.', 680.00, 10, 21, 4.7, 'kirghizistan.jpg',  0, 0,  NULL,           'valide'),
('Monténégro Intérieur','Monténégro',       'Europe', 'Montagne', 'Le parc national de Durmitor et ses lacs glaciaires, ses canyons vertigineux et ses pistes de ski accessibles au cœur des Balkans.',          410.00,  5, 12, 4.3, 'montenegro-montagne.jpg',0, 0,  NULL,           'valide'),

-- VILLE (7)
('Lisbonne',    'Portugal',            'Europe',  'Ville', 'Sept collines, tramways vintage, fado mélancolique et pasteis de nata. La capitale européenne la plus chaleureuse et l\'une des plus abordables.',  450.00,  3, 10, 4.7, 'lisbonne.jpg',  1, 0,  NULL,           'valide'),
('Budapest',    'Hongrie',             'Europe',  'Ville', 'La perle du Danube avec ses bains thermaux Art Nouveau, sa ruin-bar scène unique et sa gastronomie généreuse à petit prix.',                        380.00,  3,  8, 4.6, 'budapest.jpg',  1, 0, 'Réduction',    'valide'),
('Tbilissi',    'Géorgie',             'Asie',    'Ville', 'Vieille ville aux balcons sculptés, scène artistique bouillonnante et vie nocturne underground. Tbilissi est la nouvelle Berlin de l\'Est.',        490.00,  4, 10, 4.8, 'tbilissi.jpg',  0, 1, 'Coup de cœur', 'valide'),
('Hanoï',       'Vietnam',             'Asie',    'Ville', 'Vieux quartier des 36 corporations, lacs sacrés et street food légendaire. Point de départ idéal pour explorer le nord du Vietnam.',               720.00,  5, 21, 4.5, 'hanoi.jpg',     1, 0,  NULL,           'valide'),
('Cracovie',    'Pologne',             'Europe',  'Ville', 'Centre médiéval épargné par la guerre, château du Wawel royal et vie étudiante animée. L\'une des destinations les moins chères d\'Europe.',        310.00,  3,  7, 4.5, 'cracovie.jpg',  0, 0, 'Réduction',    'valide'),
('Mexico City', 'Mexique',             'Amérique','Ville', 'Méga-ville aux mille visages : musées de classe mondiale, street food addictive et ruines aztèques en plein centre-ville.',                         780.00,  5, 14, 4.6, 'mexico.jpg',    0, 1,  NULL,           'valide'),
('Belgrade',    'Serbie',              'Europe',  'Ville', 'La ville la plus festive des Balkans avec ses clubs sur l\'eau, sa forteresse millénaire et ses prix imbattables.',                                  290.00,  3,  7, 4.3, 'belgrade.jpg',  0, 0,  NULL,           'valide'),

-- CULTURE (2)
('Médina de Marrakech', 'Maroc',            'Afrique', 'Culture', 'Souks labyrinthiques, riads cachés, place Jemaa el-Fna envoûtante et cuisine berbère somptueuse. Un voyage dans le temps à quelques heures de l\'Europe.', 420.00, 4, 10, 4.6, 'marrakech.jpg', 1, 0, NULL, 'valide'),
('Prague',              'République Tchèque','Europe', 'Culture', 'Cent tours et clochers, pont Charles médiéval et bière la moins chère d\'Europe. Le joyau gothique et baroque de l\'Europe centrale.',                    370.00, 3,  7, 4.5, 'prague.jpg',    1, 0, NULL, 'valide'),

-- ROMANTIQUE (2)
('Séville', 'Espagne',    'Europe', 'Romantique', 'Flamenco, orangers en fleurs, tapas jusqu\'à l\'aube et Alcazar de conte de fées. La ville la plus romantique et festive d\'Espagne.',   490.00, 4, 10, 4.7, 'seville.jpg', 0, 1, 'Coup de cœur', 'valide'),
('Kotor',   'Monténégro', 'Europe', 'Romantique', 'Cité médiévale fortifiée au fond d\'un fjord adriatique, chats sacrés et couchers de soleil incendiaires. Un bijou hors du temps.',      430.00, 4, 10, 4.8, 'kotor.jpg',   0, 1, 'Coup de cœur', 'valide'),

-- AVENTURE (4)
('Trek Atlas Marocain', 'Maroc',      'Afrique', 'Aventure', 'Ascension du Toubkal, plus haut sommet d\'Afrique du Nord, villages berbères accrochés aux falaises et nuits sous les étoiles du désert.',    560.00,  7, 14, 4.7, 'atlas.jpg',        0, 0,  NULL,           'valide'),
('Costa Rica',          'Costa Rica', 'Amérique','Aventure', 'Volcans actifs, forêts tropicales et surf world-class. Le Costa Rica concentre 6% de la biodiversité mondiale dans un pays grand comme la Bretagne.', 1100.00, 10, 21, 4.8, 'costa-rica.jpg', 0, 0, NULL,      'valide'),
('Vietnam en Moto',     'Vietnam',    'Asie',    'Aventure', 'Relier Hanoï à Hô Chi Minh-Ville sur une Honda Win le long de la côte : rizières, cols montagneux et rencontres inoubliables.',                850.00, 14, 30, 4.9, 'vietnam-moto.jpg', 1, 1, 'Coup de cœur', 'valide'),
('Jordanie',            'Jordanie',   'Asie',    'Aventure', 'Pétra la rose, Wadi Rum martien, mer Morte et snorkeling à Aqaba. Un condensé d\'histoire et de paysages extraordinaires.',                    870.00,  7, 14, 4.7, 'jordanie.jpg',     0, 0,  NULL,           'valide'),

-- NATURE (2)
('Îles Canaries Hors Sentiers', 'Espagne',  'Europe', 'Nature', 'La Gomera, El Hierro et La Palma : forêts de laurisilva millénaires, observatoires astronomiques et randonnées sauvages sans touristes.', 510.00, 5, 14, 4.5, 'canaries-nature.jpg', 0, 0, 'Réduction',    'valide'),
('Açores',                      'Portugal', 'Europe', 'Nature', 'Caldeiras fumantes, lacs de cratère émeraude, baleines en liberté et sources chaudes naturelles. L\'archipel volcanique le plus spectaculaire d\'Europe.', 590.00, 5, 14, 4.8, 'acores.jpg', 1, 1, 'Coup de cœur', 'valide');