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
