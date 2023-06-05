<?php

// =============================================================================
// FUNCTIONS/GLOBAL/ADMIN/CUSTOMIZER/FONTS.PHP
// -----------------------------------------------------------------------------
// Font data for the theme.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Families
//   02. Family Weights
//   03. All Weights
//   04. Is Font Italic
//   05. Get Font Weight
//   06. Get Font Family Query
// =============================================================================

// Families
// =============================================================================

function x_font_data_families() {

  $families = array(
    'ABeeZee'                  => 'ABeeZee',
    'Abel'                     => 'Abel',
    'Abril Fatface'            => 'Abril Fatface',
    'Aclonica'                 => 'Aclonica',
    'Acme'                     => 'Acme',
    'Actor'                    => 'Actor',
    'Adamina'                  => 'Adamina',
    'Advent Pro'               => 'Advent Pro',
    'Aguafina Script'          => 'Aguafina Script',
    'Akronim'                  => 'Akronim',
    'Aladin'                   => 'Aladin',
    'Aldrich'                  => 'Aldrich',
    'Alef'                     => 'Alef',
    'Alegreya'                 => 'Alegreya',
    'Alegreya SC'              => 'Alegreya SC',
    'Alegreya Sans'            => 'Alegreya Sans',
    'Alegreya Sans SC'         => 'Alegreya Sans SC',
    'Alex Brush'               => 'Alex Brush',
    'Alfa Slab One'            => 'Alfa Slab One',
    'Alice'                    => 'Alice',
    'Alike'                    => 'Alike',
    'Alike Angular'            => 'Alike Angular',
    'Allan'                    => 'Allan',
    'Allerta'                  => 'Allerta',
    'Allerta Stencil'          => 'Allerta Stencil',
    'Allura'                   => 'Allura',
    'Almendra'                 => 'Almendra',
    'Almendra Display'         => 'Almendra Display',
    'Almendra SC'              => 'Almendra SC',
    'Amarante'                 => 'Amarante',
    'Amaranth'                 => 'Amaranth',
    'Amatic SC'                => 'Amatic SC',
    'Amethysta'                => 'Amethysta',
    'Anaheim'                  => 'Anaheim',
    'Andada'                   => 'Andada',
    'Andika'                   => 'Andika',
    'Angkor'                   => 'Angkor',
    'Annie Use Your Telescope' => 'Annie Use Your Telescope',
    'Anonymous Pro'            => 'Anonymous Pro',
    'Antic'                    => 'Antic',
    'Antic Didone'             => 'Antic Didone',
    'Antic Slab'               => 'Antic Slab',
    'Anton'                    => 'Anton',
    'Arapey'                   => 'Arapey',
    'Arbutus'                  => 'Arbutus',
    'Arbutus Slab'             => 'Arbutus Slab',
    'Architects Daughter'      => 'Architects Daughter',
    'Archivo Black'            => 'Archivo Black',
    'Archivo Narrow'           => 'Archivo Narrow',
    'Arimo'                    => 'Arimo',
    'Arizonia'                 => 'Arizonia',
    'Armata'                   => 'Armata',
    'Artifika'                 => 'Artifika',
    'Arvo'                     => 'Arvo',
    'Asap'                     => 'Asap',
    'Asset'                    => 'Asset',
    'Astloch'                  => 'Astloch',
    'Asul'                     => 'Asul',
    'Atomic Age'               => 'Atomic Age',
    'Aubrey'                   => 'Aubrey',
    'Audiowide'                => 'Audiowide',
    'Autour One'               => 'Autour One',
    'Average'                  => 'Average',
    'Average Sans'             => 'Average Sans',
    'Averia Gruesa Libre'      => 'Averia Gruesa Libre',
    'Averia Libre'             => 'Averia Libre',
    'Averia Sans Libre'        => 'Averia Sans Libre',
    'Averia Serif Libre'       => 'Averia Serif Libre',
    'Bad Script'               => 'Bad Script',
    'Balthazar'                => 'Balthazar',
    'Bangers'                  => 'Bangers',
    'Basic'                    => 'Basic',
    'Battambang'               => 'Battambang',
    'Baumans'                  => 'Baumans',
    'Bayon'                    => 'Bayon',
    'Belgrano'                 => 'Belgrano',
    'Belleza'                  => 'Belleza',
    'BenchNine'                => 'BenchNine',
    'Bentham'                  => 'Bentham',
    'Berkshire Swash'          => 'Berkshire Swash',
    'Bevan'                    => 'Bevan',
    'Bigelow Rules'            => 'Bigelow Rules',
    'Bigshot One'              => 'Bigshot One',
    'Bilbo'                    => 'Bilbo',
    'Bilbo Swash Caps'         => 'Bilbo Swash Caps',
    'Bitter'                   => 'Bitter',
    'Black Ops One'            => 'Black Ops One',
    'Bokor'                    => 'Bokor',
    'Bonbon'                   => 'Bonbon',
    'Boogaloo'                 => 'Boogaloo',
    'Bowlby One'               => 'Bowlby One',
    'Bowlby One SC'            => 'Bowlby One SC',
    'Brawler'                  => 'Brawler',
    'Bree Serif'               => 'Bree Serif',
    'Bubblegum Sans'           => 'Bubblegum Sans',
    'Bubbler One'              => 'Bubbler One',
    'Buda'                     => 'Buda',
    'Buenard'                  => 'Buenard',
    'Butcherman'               => 'Butcherman',
    'Butterfly Kids'           => 'Butterfly Kids',
    'Cabin'                    => 'Cabin',
    'Cabin Condensed'          => 'Cabin Condensed',
    'Cabin Sketch'             => 'Cabin Sketch',
    'Caesar Dressing'          => 'Caesar Dressing',
    'Cagliostro'               => 'Cagliostro',
    'Calligraffitti'           => 'Calligraffitti',
    'Cambo'                    => 'Cambo',
    'Candal'                   => 'Candal',
    'Cantarell'                => 'Cantarell',
    'Cantata One'              => 'Cantata One',
    'Cantora One'              => 'Cantora One',
    'Capriola'                 => 'Capriola',
    'Cardo'                    => 'Cardo',
    'Carme'                    => 'Carme',
    'Carrois Gothic'           => 'Carrois Gothic',
    'Carrois Gothic SC'        => 'Carrois Gothic SC',
    'Carter One'               => 'Carter One',
    'Caudex'                   => 'Caudex',
    'Cedarville Cursive'       => 'Cedarville Cursive',
    'Ceviche One'              => 'Ceviche One',
    'Changa One'               => 'Changa One',
    'Chango'                   => 'Chango',
    'Chau Philomene One'       => 'Chau Philomene One',
    'Chela One'                => 'Chela One',
    'Chelsea Market'           => 'Chelsea Market',
    'Chenla'                   => 'Chenla',
    'Cherry Cream Soda'        => 'Cherry Cream Soda',
    'Cherry Swash'             => 'Cherry Swash',
    'Chewy'                    => 'Chewy',
    'Chicle'                   => 'Chicle',
    'Chivo'                    => 'Chivo',
    'Cinzel'                   => 'Cinzel',
    'Cinzel Decorative'        => 'Cinzel Decorative',
    'Clicker Script'           => 'Clicker Script',
    'Coda'                     => 'Coda',
    'Coda Caption'             => 'Coda Caption',
    'Codystar'                 => 'Codystar',
    'Combo'                    => 'Combo',
    'Comfortaa'                => 'Comfortaa',
    'Coming Soon'              => 'Coming Soon',
    'Concert One'              => 'Concert One',
    'Condiment'                => 'Condiment',
    'Content'                  => 'Content',
    'Contrail One'             => 'Contrail One',
    'Convergence'              => 'Convergence',
    'Cookie'                   => 'Cookie',
    'Copse'                    => 'Copse',
    'Corben'                   => 'Corben',
    'Courgette'                => 'Courgette',
    'Cousine'                  => 'Cousine',
    'Coustard'                 => 'Coustard',
    'Covered By Your Grace'    => 'Covered By Your Grace',
    'Crafty Girls'             => 'Crafty Girls',
    'Creepster'                => 'Creepster',
    'Crete Round'              => 'Crete Round',
    'Crimson Text'             => 'Crimson Text',
    'Croissant One'            => 'Croissant One',
    'Crushed'                  => 'Crushed',
    'Cuprum'                   => 'Cuprum',
    'Cutive'                   => 'Cutive',
    'Cutive Mono'              => 'Cutive Mono',
    'Damion'                   => 'Damion',
    'Dancing Script'           => 'Dancing Script',
    'Dangrek'                  => 'Dangrek',
    'Dawning of a New Day'     => 'Dawning of a New Day',
    'Days One'                 => 'Days One',
    'Delius'                   => 'Delius',
    'Delius Swash Caps'        => 'Delius Swash Caps',
    'Delius Unicase'           => 'Delius Unicase',
    'Della Respira'            => 'Della Respira',
    'Denk One'                 => 'Denk One',
    'Devonshire'               => 'Devonshire',
    'Didact Gothic'            => 'Didact Gothic',
    'Diplomata'                => 'Diplomata',
    'Diplomata SC'             => 'Diplomata SC',
    'Domine'                   => 'Domine',
    'Donegal One'              => 'Donegal One',
    'Doppio One'               => 'Doppio One',
    'Dorsa'                    => 'Dorsa',
    'Dosis'                    => 'Dosis',
    'Dr Sugiyama'              => 'Dr Sugiyama',
    'Droid Sans'               => 'Droid Sans',
    'Droid Sans Mono'          => 'Droid Sans Mono',
    'Droid Serif'              => 'Droid Serif',
    'Duru Sans'                => 'Duru Sans',
    'Dynalight'                => 'Dynalight',
    'EB Garamond'              => 'EB Garamond',
    'Eagle Lake'               => 'Eagle Lake',
    'Eater'                    => 'Eater',
    'Economica'                => 'Economica',
    'Electrolize'              => 'Electrolize',
    'Elsie'                    => 'Elsie',
    'Elsie Swash Caps'         => 'Elsie Swash Caps',
    'Emblema One'              => 'Emblema One',
    'Emilys Candy'             => 'Emilys Candy',
    'Engagement'               => 'Engagement',
    'Englebert'                => 'Englebert',
    'Enriqueta'                => 'Enriqueta',
    'Erica One'                => 'Erica One',
    'Esteban'                  => 'Esteban',
    'Euphoria Script'          => 'Euphoria Script',
    'Ewert'                    => 'Ewert',
    'Exo'                      => 'Exo',
    'Exo 2'                    => 'Exo 2',
    'Expletus Sans'            => 'Expletus Sans',
    'Fanwood Text'             => 'Fanwood Text',
    'Fascinate'                => 'Fascinate',
    'Fascinate Inline'         => 'Fascinate Inline',
    'Faster One'               => 'Faster One',
    'Fasthand'                 => 'Fasthand',
    'Fauna One'                => 'Fauna One',
    'Federant'                 => 'Federant',
    'Federo'                   => 'Federo',
    'Felipa'                   => 'Felipa',
    'Fenix'                    => 'Fenix',
    'Finger Paint'             => 'Finger Paint',
    'Fjalla One'               => 'Fjalla One',
    'Fjord One'                => 'Fjord One',
    'Flamenco'                 => 'Flamenco',
    'Flavors'                  => 'Flavors',
    'Fondamento'               => 'Fondamento',
    'Fontdiner Swanky'         => 'Fontdiner Swanky',
    'Forum'                    => 'Forum',
    'Francois One'             => 'Francois One',
    'Freckle Face'             => 'Freckle Face',
    'Fredericka the Great'     => 'Fredericka the Great',
    'Fredoka One'              => 'Fredoka One',
    'Freehand'                 => 'Freehand',
    'Fresca'                   => 'Fresca',
    'Frijole'                  => 'Frijole',
    'Fruktur'                  => 'Fruktur',
    'Fugaz One'                => 'Fugaz One',
    'GFS Didot'                => 'GFS Didot',
    'GFS Neohellenic'          => 'GFS Neohellenic',
    'Gabriela'                 => 'Gabriela',
    'Gafata'                   => 'Gafata',
    'Galdeano'                 => 'Galdeano',
    'Galindo'                  => 'Galindo',
    'Gentium Basic'            => 'Gentium Basic',
    'Gentium Book Basic'       => 'Gentium Book Basic',
    'Geo'                      => 'Geo',
    'Geostar'                  => 'Geostar',
    'Geostar Fill'             => 'Geostar Fill',
    'Germania One'             => 'Germania One',
    'Gilda Display'            => 'Gilda Display',
    'Give You Glory'           => 'Give You Glory',
    'Glass Antiqua'            => 'Glass Antiqua',
    'Glegoo'                   => 'Glegoo',
    'Gloria Hallelujah'        => 'Gloria Hallelujah',
    'Goblin One'               => 'Goblin One',
    'Gochi Hand'               => 'Gochi Hand',
    'Gorditas'                 => 'Gorditas',
    'Goudy Bookletter 1911'    => 'Goudy Bookletter 1911',
    'Graduate'                 => 'Graduate',
    'Grand Hotel'              => 'Grand Hotel',
    'Gravitas One'             => 'Gravitas One',
    'Great Vibes'              => 'Great Vibes',
    'Griffy'                   => 'Griffy',
    'Gruppo'                   => 'Gruppo',
    'Gudea'                    => 'Gudea',
    'Habibi'                   => 'Habibi',
    'Hammersmith One'          => 'Hammersmith One',
    'Hanalei'                  => 'Hanalei',
    'Hanalei Fill'             => 'Hanalei Fill',
    'Handlee'                  => 'Handlee',
    'Hanuman'                  => 'Hanuman',
    'Happy Monkey'             => 'Happy Monkey',
    'Headland One'             => 'Headland One',
    'Henny Penny'              => 'Henny Penny',
    'Herr Von Muellerhoff'     => 'Herr Von Muellerhoff',
    'Holtwood One SC'          => 'Holtwood One SC',
    'Homemade Apple'           => 'Homemade Apple',
    'Homenaje'                 => 'Homenaje',
    'IM Fell DW Pica'          => 'IM Fell DW Pica',
    'IM Fell DW Pica SC'       => 'IM Fell DW Pica SC',
    'IM Fell Double Pica'      => 'IM Fell Double Pica',
    'IM Fell Double Pica SC'   => 'IM Fell Double Pica SC',
    'IM Fell English'          => 'IM Fell English',
    'IM Fell English SC'       => 'IM Fell English SC',
    'IM Fell French Canon'     => 'IM Fell French Canon',
    'IM Fell French Canon SC'  => 'IM Fell French Canon SC',
    'IM Fell Great Primer'     => 'IM Fell Great Primer',
    'IM Fell Great Primer SC'  => 'IM Fell Great Primer SC',
    'Iceberg'                  => 'Iceberg',
    'Iceland'                  => 'Iceland',
    'Imprima'                  => 'Imprima',
    'Inconsolata'              => 'Inconsolata',
    'Inder'                    => 'Inder',
    'Indie Flower'             => 'Indie Flower',
    'Inika'                    => 'Inika',
    'Irish Grover'             => 'Irish Grover',
    'Istok Web'                => 'Istok Web',
    'Italiana'                 => 'Italiana',
    'Italianno'                => 'Italianno',
    'Jacques Francois'         => 'Jacques Francois',
    'Jacques Francois Shadow'  => 'Jacques Francois Shadow',
    'Jim Nightshade'           => 'Jim Nightshade',
    'Jockey One'               => 'Jockey One',
    'Jolly Lodger'             => 'Jolly Lodger',
    'Josefin Sans'             => 'Josefin Sans',
    'Josefin Slab'             => 'Josefin Slab',
    'Joti One'                 => 'Joti One',
    'Judson'                   => 'Judson',
    'Julee'                    => 'Julee',
    'Julius Sans One'          => 'Julius Sans One',
    'Junge'                    => 'Junge',
    'Jura'                     => 'Jura',
    'Just Another Hand'        => 'Just Another Hand',
    'Just Me Again Down Here'  => 'Just Me Again Down Here',
    'Kameron'                  => 'Kameron',
    'Kantumruy'                => 'Kantumruy',
    'Karla'                    => 'Karla',
    'Kaushan Script'           => 'Kaushan Script',
    'Kavoon'                   => 'Kavoon',
    'Kdam Thmor'               => 'Kdam Thmor',
    'Keania One'               => 'Keania One',
    'Kelly Slab'               => 'Kelly Slab',
    'Kenia'                    => 'Kenia',
    'Khmer'                    => 'Khmer',
    'Kite One'                 => 'Kite One',
    'Knewave'                  => 'Knewave',
    'Kotta One'                => 'Kotta One',
    'Koulen'                   => 'Koulen',
    'Kranky'                   => 'Kranky',
    'Kreon'                    => 'Kreon',
    'Kristi'                   => 'Kristi',
    'Krona One'                => 'Krona One',
    'La Belle Aurore'          => 'La Belle Aurore',
    'Lancelot'                 => 'Lancelot',
    'Lato'                     => 'Lato',
    'League Script'            => 'League Script',
    'Leckerli One'             => 'Leckerli One',
    'Ledger'                   => 'Ledger',
    'Lekton'                   => 'Lekton',
    'Lemon'                    => 'Lemon',
    'Libre Baskerville'        => 'Libre Baskerville',
    'Life Savers'              => 'Life Savers',
    'Lilita One'               => 'Lilita One',
    'Lily Script One'          => 'Lily Script One',
    'Limelight'                => 'Limelight',
    'Linden Hill'              => 'Linden Hill',
    'Lobster'                  => 'Lobster',
    'Lobster Two'              => 'Lobster Two',
    'Londrina Outline'         => 'Londrina Outline',
    'Londrina Shadow'          => 'Londrina Shadow',
    'Londrina Sketch'          => 'Londrina Sketch',
    'Londrina Solid'           => 'Londrina Solid',
    'Lora'                     => 'Lora',
    'Love Ya Like A Sister'    => 'Love Ya Like A Sister',
    'Loved by the King'        => 'Loved by the King',
    'Lovers Quarrel'           => 'Lovers Quarrel',
    'Luckiest Guy'             => 'Luckiest Guy',
    'Lusitana'                 => 'Lusitana',
    'Lustria'                  => 'Lustria',
    'Macondo'                  => 'Macondo',
    'Macondo Swash Caps'       => 'Macondo Swash Caps',
    'Magra'                    => 'Magra',
    'Maiden Orange'            => 'Maiden Orange',
    'Mako'                     => 'Mako',
    'Marcellus'                => 'Marcellus',
    'Marcellus SC'             => 'Marcellus SC',
    'Marck Script'             => 'Marck Script',
    'Margarine'                => 'Margarine',
    'Marko One'                => 'Marko One',
    'Marmelad'                 => 'Marmelad',
    'Marvel'                   => 'Marvel',
    'Mate'                     => 'Mate',
    'Mate SC'                  => 'Mate SC',
    'Maven Pro'                => 'Maven Pro',
    'McLaren'                  => 'McLaren',
    'Meddon'                   => 'Meddon',
    'MedievalSharp'            => 'MedievalSharp',
    'Medula One'               => 'Medula One',
    'Megrim'                   => 'Megrim',
    'Meie Script'              => 'Meie Script',
    'Merienda'                 => 'Merienda',
    'Merienda One'             => 'Merienda One',
    'Merriweather'             => 'Merriweather',
    'Merriweather Sans'        => 'Merriweather Sans',
    'Metal'                    => 'Metal',
    'Metal Mania'              => 'Metal Mania',
    'Metamorphous'             => 'Metamorphous',
    'Metrophobic'              => 'Metrophobic',
    'Michroma'                 => 'Michroma',
    'Milonga'                  => 'Milonga',
    'Miltonian'                => 'Miltonian',
    'Miltonian Tattoo'         => 'Miltonian Tattoo',
    'Miniver'                  => 'Miniver',
    'Miss Fajardose'           => 'Miss Fajardose',
    'Modern Antiqua'           => 'Modern Antiqua',
    'Molengo'                  => 'Molengo',
    'Molle'                    => 'Molle',
    'Monda'                    => 'Monda',
    'Monofett'                 => 'Monofett',
    'Monoton'                  => 'Monoton',
    'Monsieur La Doulaise'     => 'Monsieur La Doulaise',
    'Montaga'                  => 'Montaga',
    'Montez'                   => 'Montez',
    'Montserrat'               => 'Montserrat',
    'Montserrat Alternates'    => 'Montserrat Alternates',
    'Montserrat Subrayada'     => 'Montserrat Subrayada',
    'Moul'                     => 'Moul',
    'Moulpali'                 => 'Moulpali',
    'Mountains of Christmas'   => 'Mountains of Christmas',
    'Mouse Memoirs'            => 'Mouse Memoirs',
    'Mr Bedfort'               => 'Mr Bedfort',
    'Mr Dafoe'                 => 'Mr Dafoe',
    'Mr De Haviland'           => 'Mr De Haviland',
    'Mrs Saint Delafield'      => 'Mrs Saint Delafield',
    'Mrs Sheppards'            => 'Mrs Sheppards',
    'Muli'                     => 'Muli',
    'Mystery Quest'            => 'Mystery Quest',
    'Neucha'                   => 'Neucha',
    'Neuton'                   => 'Neuton',
    'New Rocker'               => 'New Rocker',
    'News Cycle'               => 'News Cycle',
    'Niconne'                  => 'Niconne',
    'Nixie One'                => 'Nixie One',
    'Nobile'                   => 'Nobile',
    'Nokora'                   => 'Nokora',
    'Norican'                  => 'Norican',
    'Nosifer'                  => 'Nosifer',
    'Nothing You Could Do'     => 'Nothing You Could Do',
    'Noticia Text'             => 'Noticia Text',
    'Noto Sans'                => 'Noto Sans',
    'Noto Serif'               => 'Noto Serif',
    'Nova Cut'                 => 'Nova Cut',
    'Nova Flat'                => 'Nova Flat',
    'Nova Mono'                => 'Nova Mono',
    'Nova Oval'                => 'Nova Oval',
    'Nova Round'               => 'Nova Round',
    'Nova Script'              => 'Nova Script',
    'Nova Slim'                => 'Nova Slim',
    'Nova Square'              => 'Nova Square',
    'Numans'                   => 'Numans',
    'Nunito'                   => 'Nunito',
    'Odor Mean Chey'           => 'Odor Mean Chey',
    'Offside'                  => 'Offside',
    'Old Standard TT'          => 'Old Standard TT',
    'Oldenburg'                => 'Oldenburg',
    'Oleo Script'              => 'Oleo Script',
    'Oleo Script Swash Caps'   => 'Oleo Script Swash Caps',
    'Open Sans'                => 'Open Sans',
    'Open Sans Condensed'      => 'Open Sans Condensed',
    'Oranienbaum'              => 'Oranienbaum',
    'Orbitron'                 => 'Orbitron',
    'Oregano'                  => 'Oregano',
    'Orienta'                  => 'Orienta',
    'Original Surfer'          => 'Original Surfer',
    'Oswald'                   => 'Oswald',
    'Over the Rainbow'         => 'Over the Rainbow',
    'Overlock'                 => 'Overlock',
    'Overlock SC'              => 'Overlock SC',
    'Ovo'                      => 'Ovo',
    'Oxygen'                   => 'Oxygen',
    'Oxygen Mono'              => 'Oxygen Mono',
    'PT Mono'                  => 'PT Mono',
    'PT Sans'                  => 'PT Sans',
    'PT Sans Caption'          => 'PT Sans Caption',
    'PT Sans Narrow'           => 'PT Sans Narrow',
    'PT Serif'                 => 'PT Serif',
    'PT Serif Caption'         => 'PT Serif Caption',
    'Pacifico'                 => 'Pacifico',
    'Paprika'                  => 'Paprika',
    'Parisienne'               => 'Parisienne',
    'Passero One'              => 'Passero One',
    'Passion One'              => 'Passion One',
    'Pathway Gothic One'       => 'Pathway Gothic One',
    'Patrick Hand'             => 'Patrick Hand',
    'Patrick Hand SC'          => 'Patrick Hand SC',
    'Patua One'                => 'Patua One',
    'Paytone One'              => 'Paytone One',
    'Peralta'                  => 'Peralta',
    'Permanent Marker'         => 'Permanent Marker',
    'Petit Formal Script'      => 'Petit Formal Script',
    'Petrona'                  => 'Petrona',
    'Philosopher'              => 'Philosopher',
    'Piedra'                   => 'Piedra',
    'Pinyon Script'            => 'Pinyon Script',
    'Pirata One'               => 'Pirata One',
    'Plaster'                  => 'Plaster',
    'Play'                     => 'Play',
    'Playball'                 => 'Playball',
    'Playfair Display'         => 'Playfair Display',
    'Playfair Display SC'      => 'Playfair Display SC',
    'Podkova'                  => 'Podkova',
    'Poiret One'               => 'Poiret One',
    'Poller One'               => 'Poller One',
    'Poly'                     => 'Poly',
    'Pompiere'                 => 'Pompiere',
    'Pontano Sans'             => 'Pontano Sans',
    'Port Lligat Sans'         => 'Port Lligat Sans',
    'Port Lligat Slab'         => 'Port Lligat Slab',
    'Prata'                    => 'Prata',
    'Preahvihear'              => 'Preahvihear',
    'Press Start 2P'           => 'Press Start 2P',
    'Princess Sofia'           => 'Princess Sofia',
    'Prociono'                 => 'Prociono',
    'Prosto One'               => 'Prosto One',
    'Puritan'                  => 'Puritan',
    'Purple Purse'             => 'Purple Purse',
    'Quando'                   => 'Quando',
    'Quantico'                 => 'Quantico',
    'Quattrocento'             => 'Quattrocento',
    'Quattrocento Sans'        => 'Quattrocento Sans',
    'Questrial'                => 'Questrial',
    'Quicksand'                => 'Quicksand',
    'Quintessential'           => 'Quintessential',
    'Qwigley'                  => 'Qwigley',
    'Racing Sans One'          => 'Racing Sans One',
    'Radley'                   => 'Radley',
    'Raleway'                  => 'Raleway',
    'Raleway Dots'             => 'Raleway Dots',
    'Rambla'                   => 'Rambla',
    'Rammetto One'             => 'Rammetto One',
    'Ranchers'                 => 'Ranchers',
    'Rancho'                   => 'Rancho',
    'Rationale'                => 'Rationale',
    'Redressed'                => 'Redressed',
    'Reenie Beanie'            => 'Reenie Beanie',
    'Revalia'                  => 'Revalia',
    'Ribeye'                   => 'Ribeye',
    'Ribeye Marrow'            => 'Ribeye Marrow',
    'Righteous'                => 'Righteous',
    'Risque'                   => 'Risque',
    'Roboto'                   => 'Roboto',
    'Roboto Condensed'         => 'Roboto Condensed',
    'Roboto Slab'              => 'Roboto Slab',
    'Rochester'                => 'Rochester',
    'Rock Salt'                => 'Rock Salt',
    'Rokkitt'                  => 'Rokkitt',
    'Romanesco'                => 'Romanesco',
    'Ropa Sans'                => 'Ropa Sans',
    'Rosario'                  => 'Rosario',
    'Rosarivo'                 => 'Rosarivo',
    'Rouge Script'             => 'Rouge Script',
    'Ruda'                     => 'Ruda',
    'Rufina'                   => 'Rufina',
    'Ruge Boogie'              => 'Ruge Boogie',
    'Ruluko'                   => 'Ruluko',
    'Rum Raisin'               => 'Rum Raisin',
    'Ruslan Display'           => 'Ruslan Display',
    'Russo One'                => 'Russo One',
    'Ruthie'                   => 'Ruthie',
    'Rye'                      => 'Rye',
    'Sacramento'               => 'Sacramento',
    'Sail'                     => 'Sail',
    'Salsa'                    => 'Salsa',
    'Sanchez'                  => 'Sanchez',
    'Sancreek'                 => 'Sancreek',
    'Sansita One'              => 'Sansita One',
    'Sarina'                   => 'Sarina',
    'Satisfy'                  => 'Satisfy',
    'Scada'                    => 'Scada',
    'Schoolbell'               => 'Schoolbell',
    'Seaweed Script'           => 'Seaweed Script',
    'Sevillana'                => 'Sevillana',
    'Seymour One'              => 'Seymour One',
    'Shadows Into Light'       => 'Shadows Into Light',
    'Shadows Into Light Two'   => 'Shadows Into Light Two',
    'Shanti'                   => 'Shanti',
    'Share'                    => 'Share',
    'Share Tech'               => 'Share Tech',
    'Share Tech Mono'          => 'Share Tech Mono',
    'Shojumaru'                => 'Shojumaru',
    'Short Stack'              => 'Short Stack',
    'Siemreap'                 => 'Siemreap',
    'Sigmar One'               => 'Sigmar One',
    'Signika'                  => 'Signika',
    'Signika Negative'         => 'Signika Negative',
    'Simonetta'                => 'Simonetta',
    'Sintony'                  => 'Sintony',
    'Sirin Stencil'            => 'Sirin Stencil',
    'Six Caps'                 => 'Six Caps',
    'Skranji'                  => 'Skranji',
    'Slackey'                  => 'Slackey',
    'Smokum'                   => 'Smokum',
    'Smythe'                   => 'Smythe',
    'Sniglet'                  => 'Sniglet',
    'Snippet'                  => 'Snippet',
    'Snowburst One'            => 'Snowburst One',
    'Sofadi One'               => 'Sofadi One',
    'Sofia'                    => 'Sofia',
    'Sonsie One'               => 'Sonsie One',
    'Sorts Mill Goudy'         => 'Sorts Mill Goudy',
    'Source Code Pro'          => 'Source Code Pro',
    'Source Sans Pro'          => 'Source Sans Pro',
    'Special Elite'            => 'Special Elite',
    'Spicy Rice'               => 'Spicy Rice',
    'Spinnaker'                => 'Spinnaker',
    'Spirax'                   => 'Spirax',
    'Squada One'               => 'Squada One',
    'Stalemate'                => 'Stalemate',
    'Stalinist One'            => 'Stalinist One',
    'Stardos Stencil'          => 'Stardos Stencil',
    'Stint Ultra Condensed'    => 'Stint Ultra Condensed',
    'Stint Ultra Expanded'     => 'Stint Ultra Expanded',
    'Stoke'                    => 'Stoke',
    'Strait'                   => 'Strait',
    'Sue Ellen Francisco'      => 'Sue Ellen Francisco',
    'Sunshiney'                => 'Sunshiney',
    'Supermercado One'         => 'Supermercado One',
    'Suwannaphum'              => 'Suwannaphum',
    'Swanky and Moo Moo'       => 'Swanky and Moo Moo',
    'Syncopate'                => 'Syncopate',
    'Tangerine'                => 'Tangerine',
    'Taprom'                   => 'Taprom',
    'Tauri'                    => 'Tauri',
    'Telex'                    => 'Telex',
    'Tenor Sans'               => 'Tenor Sans',
    'Text Me One'              => 'Text Me One',
    'The Girl Next Door'       => 'The Girl Next Door',
    'Tienne'                   => 'Tienne',
    'Tinos'                    => 'Tinos',
    'Titan One'                => 'Titan One',
    'Titillium Web'            => 'Titillium Web',
    'Trade Winds'              => 'Trade Winds',
    'Trocchi'                  => 'Trocchi',
    'Trochut'                  => 'Trochut',
    'Trykker'                  => 'Trykker',
    'Tulpen One'               => 'Tulpen One',
    'Ubuntu'                   => 'Ubuntu',
    'Ubuntu Condensed'         => 'Ubuntu Condensed',
    'Ubuntu Mono'              => 'Ubuntu Mono',
    'Ultra'                    => 'Ultra',
    'Uncial Antiqua'           => 'Uncial Antiqua',
    'Underdog'                 => 'Underdog',
    'Unica One'                => 'Unica One',
    'UnifrakturCook'           => 'UnifrakturCook',
    'UnifrakturMaguntia'       => 'UnifrakturMaguntia',
    'Unkempt'                  => 'Unkempt',
    'Unlock'                   => 'Unlock',
    'Unna'                     => 'Unna',
    'VT323'                    => 'VT323',
    'Vampiro One'              => 'Vampiro One',
    'Varela'                   => 'Varela',
    'Varela Round'             => 'Varela Round',
    'Vast Shadow'              => 'Vast Shadow',
    'Vibur'                    => 'Vibur',
    'Vidaloka'                 => 'Vidaloka',
    'Viga'                     => 'Viga',
    'Voces'                    => 'Voces',
    'Volkhov'                  => 'Volkhov',
    'Vollkorn'                 => 'Vollkorn',
    'Voltaire'                 => 'Voltaire',
    'Waiting for the Sunrise'  => 'Waiting for the Sunrise',
    'Wallpoet'                 => 'Wallpoet',
    'Walter Turncoat'          => 'Walter Turncoat',
    'Warnes'                   => 'Warnes',
    'Wellfleet'                => 'Wellfleet',
    'Wendy One'                => 'Wendy One',
    'Wire One'                 => 'Wire One',
    'Yanone Kaffeesatz'        => 'Yanone Kaffeesatz',
    'Yellowtail'               => 'Yellowtail',
    'Yeseva One'               => 'Yeseva One',
    'Yesteryear'               => 'Yesteryear',
    'Zeyada'                   => 'Zeyada'
  );

  return $families;

}



// Family Weights
// =============================================================================

function x_font_data_family_weights() {

  $weights = array(
    'ABeeZee' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Abel' => array(
      0 => '400',
    ),
    'Abril Fatface' => array(
      0 => '400',
    ),
    'Aclonica' => array(
      0 => '400',
    ),
    'Acme' => array(
      0 => '400',
    ),
    'Actor' => array(
      0 => '400',
    ),
    'Adamina' => array(
      0 => '400',
    ),
    'Advent Pro' => array(
      0 => '100',
      1 => '200',
      2 => '300',
      3 => '400',
      4 => '500',
      5 => '600',
      6 => '700',
    ),
    'Aguafina Script' => array(
      0 => '400',
    ),
    'Akronim' => array(
      0 => '400',
    ),
    'Aladin' => array(
      0 => '400',
    ),
    'Aldrich' => array(
      0 => '400',
    ),
    'Alef' => array(
      0 => '400',
      1 => '700',
    ),
    'Alegreya' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
      4 => '900',
      5 => '900italic',
    ),
    'Alegreya SC' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
      4 => '900',
      5 => '900italic',
    ),
    'Alegreya Sans' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '500',
      7 => '500italic',
      8 => '700',
      9 => '700italic',
      10 => '800',
      11 => '800italic',
      12 => '900',
      13 => '900italic',
    ),
    'Alegreya Sans SC' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '500',
      7 => '500italic',
      8 => '700',
      9 => '700italic',
      10 => '800',
      11 => '800italic',
      12 => '900',
      13 => '900italic',
    ),
    'Alex Brush' => array(
      0 => '400',
    ),
    'Alfa Slab One' => array(
      0 => '400',
    ),
    'Alice' => array(
      0 => '400',
    ),
    'Alike' => array(
      0 => '400',
    ),
    'Alike Angular' => array(
      0 => '400',
    ),
    'Allan' => array(
      0 => '400',
      1 => '700',
    ),
    'Allerta' => array(
      0 => '400',
    ),
    'Allerta Stencil' => array(
      0 => '400',
    ),
    'Allura' => array(
      0 => '400',
    ),
    'Almendra' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Almendra Display' => array(
      0 => '400',
    ),
    'Almendra SC' => array(
      0 => '400',
    ),
    'Amarante' => array(
      0 => '400',
    ),
    'Amaranth' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Amatic SC' => array(
      0 => '400',
      1 => '700',
    ),
    'Amethysta' => array(
      0 => '400',
    ),
    'Anaheim' => array(
      0 => '400',
    ),
    'Andada' => array(
      0 => '400',
    ),
    'Andika' => array(
      0 => '400',
    ),
    'Angkor' => array(
      0 => '400',
    ),
    'Annie Use Your Telescope' => array(
      0 => '400',
    ),
    'Anonymous Pro' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Antic' => array(
      0 => '400',
    ),
    'Antic Didone' => array(
      0 => '400',
    ),
    'Antic Slab' => array(
      0 => '400',
    ),
    'Anton' => array(
      0 => '400',
    ),
    'Arapey' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Arbutus' => array(
      0 => '400',
    ),
    'Arbutus Slab' => array(
      0 => '400',
    ),
    'Architects Daughter' => array(
      0 => '400',
    ),
    'Archivo Black' => array(
      0 => '400',
    ),
    'Archivo Narrow' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Arimo' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Arizonia' => array(
      0 => '400',
    ),
    'Armata' => array(
      0 => '400',
    ),
    'Artifika' => array(
      0 => '400',
    ),
    'Arvo' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Asap' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Asset' => array(
      0 => '400',
    ),
    'Astloch' => array(
      0 => '400',
      1 => '700',
    ),
    'Asul' => array(
      0 => '400',
      1 => '700',
    ),
    'Atomic Age' => array(
      0 => '400',
    ),
    'Aubrey' => array(
      0 => '400',
    ),
    'Audiowide' => array(
      0 => '400',
    ),
    'Autour One' => array(
      0 => '400',
    ),
    'Average' => array(
      0 => '400',
    ),
    'Average Sans' => array(
      0 => '400',
    ),
    'Averia Gruesa Libre' => array(
      0 => '400',
    ),
    'Averia Libre' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
    ),
    'Averia Sans Libre' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
    ),
    'Averia Serif Libre' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
    ),
    'Bad Script' => array(
      0 => '400',
    ),
    'Balthazar' => array(
      0 => '400',
    ),
    'Bangers' => array(
      0 => '400',
    ),
    'Basic' => array(
      0 => '400',
    ),
    'Battambang' => array(
      0 => '400',
      1 => '700',
    ),
    'Baumans' => array(
      0 => '400',
    ),
    'Bayon' => array(
      0 => '400',
    ),
    'Belgrano' => array(
      0 => '400',
    ),
    'Belleza' => array(
      0 => '400',
    ),
    'BenchNine' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Bentham' => array(
      0 => '400',
    ),
    'Berkshire Swash' => array(
      0 => '400',
    ),
    'Bevan' => array(
      0 => '400',
    ),
    'Bigelow Rules' => array(
      0 => '400',
    ),
    'Bigshot One' => array(
      0 => '400',
    ),
    'Bilbo' => array(
      0 => '400',
    ),
    'Bilbo Swash Caps' => array(
      0 => '400',
    ),
    'Bitter' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Black Ops One' => array(
      0 => '400',
    ),
    'Bokor' => array(
      0 => '400',
    ),
    'Bonbon' => array(
      0 => '400',
    ),
    'Boogaloo' => array(
      0 => '400',
    ),
    'Bowlby One' => array(
      0 => '400',
    ),
    'Bowlby One SC' => array(
      0 => '400',
    ),
    'Brawler' => array(
      0 => '400',
    ),
    'Bree Serif' => array(
      0 => '400',
    ),
    'Bubblegum Sans' => array(
      0 => '400',
    ),
    'Bubbler One' => array(
      0 => '400',
    ),
    'Buda' => array(
      0 => '300',
    ),
    'Buenard' => array(
      0 => '400',
      1 => '700',
    ),
    'Butcherman' => array(
      0 => '400',
    ),
    'Butterfly Kids' => array(
      0 => '400',
    ),
    'Cabin' => array(
      0 => '400',
      1 => '400italic',
      2 => '500',
      3 => '500italic',
      4 => '600',
      5 => '600italic',
      6 => '700',
      7 => '700italic',
    ),
    'Cabin Condensed' => array(
      0 => '400',
      1 => '500',
      2 => '600',
      3 => '700',
    ),
    'Cabin Sketch' => array(
      0 => '400',
      1 => '700',
    ),
    'Caesar Dressing' => array(
      0 => '400',
    ),
    'Cagliostro' => array(
      0 => '400',
    ),
    'Calligraffitti' => array(
      0 => '400',
    ),
    'Cambo' => array(
      0 => '400',
    ),
    'Candal' => array(
      0 => '400',
    ),
    'Cantarell' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Cantata One' => array(
      0 => '400',
    ),
    'Cantora One' => array(
      0 => '400',
    ),
    'Capriola' => array(
      0 => '400',
    ),
    'Cardo' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Carme' => array(
      0 => '400',
    ),
    'Carrois Gothic' => array(
      0 => '400',
    ),
    'Carrois Gothic SC' => array(
      0 => '400',
    ),
    'Carter One' => array(
      0 => '400',
    ),
    'Caudex' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Cedarville Cursive' => array(
      0 => '400',
    ),
    'Ceviche One' => array(
      0 => '400',
    ),
    'Changa One' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Chango' => array(
      0 => '400',
    ),
    'Chau Philomene One' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Chela One' => array(
      0 => '400',
    ),
    'Chelsea Market' => array(
      0 => '400',
    ),
    'Chenla' => array(
      0 => '400',
    ),
    'Cherry Cream Soda' => array(
      0 => '400',
    ),
    'Cherry Swash' => array(
      0 => '400',
      1 => '700',
    ),
    'Chewy' => array(
      0 => '400',
    ),
    'Chicle' => array(
      0 => '400',
    ),
    'Chivo' => array(
      0 => '400',
      1 => '400italic',
      2 => '900',
      3 => '900italic',
    ),
    'Cinzel' => array(
      0 => '400',
      1 => '700',
      2 => '900',
    ),
    'Cinzel Decorative' => array(
      0 => '400',
      1 => '700',
      2 => '900',
    ),
    'Clicker Script' => array(
      0 => '400',
    ),
    'Coda' => array(
      0 => '400',
      1 => '800',
    ),
    'Coda Caption' => array(
      0 => '800',
    ),
    'Codystar' => array(
      0 => '300',
      1 => '400',
    ),
    'Combo' => array(
      0 => '400',
    ),
    'Comfortaa' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Coming Soon' => array(
      0 => '400',
    ),
    'Concert One' => array(
      0 => '400',
    ),
    'Condiment' => array(
      0 => '400',
    ),
    'Content' => array(
      0 => '400',
      1 => '700',
    ),
    'Contrail One' => array(
      0 => '400',
    ),
    'Convergence' => array(
      0 => '400',
    ),
    'Cookie' => array(
      0 => '400',
    ),
    'Copse' => array(
      0 => '400',
    ),
    'Corben' => array(
      0 => '400',
      1 => '700',
    ),
    'Courgette' => array(
      0 => '400',
    ),
    'Cousine' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Coustard' => array(
      0 => '400',
      1 => '900',
    ),
    'Covered By Your Grace' => array(
      0 => '400',
    ),
    'Crafty Girls' => array(
      0 => '400',
    ),
    'Creepster' => array(
      0 => '400',
    ),
    'Crete Round' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Crimson Text' => array(
      0 => '400',
      1 => '400italic',
      2 => '600',
      3 => '600italic',
      4 => '700',
      5 => '700italic',
    ),
    'Croissant One' => array(
      0 => '400',
    ),
    'Crushed' => array(
      0 => '400',
    ),
    'Cuprum' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Cutive' => array(
      0 => '400',
    ),
    'Cutive Mono' => array(
      0 => '400',
    ),
    'Damion' => array(
      0 => '400',
    ),
    'Dancing Script' => array(
      0 => '400',
      1 => '700',
    ),
    'Dangrek' => array(
      0 => '400',
    ),
    'Dawning of a New Day' => array(
      0 => '400',
    ),
    'Days One' => array(
      0 => '400',
    ),
    'Delius' => array(
      0 => '400',
    ),
    'Delius Swash Caps' => array(
      0 => '400',
    ),
    'Delius Unicase' => array(
      0 => '400',
      1 => '700',
    ),
    'Della Respira' => array(
      0 => '400',
    ),
    'Denk One' => array(
      0 => '400',
    ),
    'Devonshire' => array(
      0 => '400',
    ),
    'Didact Gothic' => array(
      0 => '400',
    ),
    'Diplomata' => array(
      0 => '400',
    ),
    'Diplomata SC' => array(
      0 => '400',
    ),
    'Domine' => array(
      0 => '400',
      1 => '700',
    ),
    'Donegal One' => array(
      0 => '400',
    ),
    'Doppio One' => array(
      0 => '400',
    ),
    'Dorsa' => array(
      0 => '400',
    ),
    'Dosis' => array(
      0 => '200',
      1 => '300',
      2 => '400',
      3 => '500',
      4 => '600',
      5 => '700',
      6 => '800',
    ),
    'Dr Sugiyama' => array(
      0 => '400',
    ),
    'Droid Sans' => array(
      0 => '400',
      1 => '700',
    ),
    'Droid Sans Mono' => array(
      0 => '400',
    ),
    'Droid Serif' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Duru Sans' => array(
      0 => '400',
    ),
    'Dynalight' => array(
      0 => '400',
    ),
    'EB Garamond' => array(
      0 => '400',
    ),
    'Eagle Lake' => array(
      0 => '400',
    ),
    'Eater' => array(
      0 => '400',
    ),
    'Economica' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Electrolize' => array(
      0 => '400',
    ),
    'Elsie' => array(
      0 => '400',
      1 => '900',
    ),
    'Elsie Swash Caps' => array(
      0 => '400',
      1 => '900',
    ),
    'Emblema One' => array(
      0 => '400',
    ),
    'Emilys Candy' => array(
      0 => '400',
    ),
    'Engagement' => array(
      0 => '400',
    ),
    'Englebert' => array(
      0 => '400',
    ),
    'Enriqueta' => array(
      0 => '400',
      1 => '700',
    ),
    'Erica One' => array(
      0 => '400',
    ),
    'Esteban' => array(
      0 => '400',
    ),
    'Euphoria Script' => array(
      0 => '400',
    ),
    'Ewert' => array(
      0 => '400',
    ),
    'Exo' => array(
      0 => '100',
      1 => '100italic',
      2 => '200',
      3 => '200italic',
      4 => '300',
      5 => '300italic',
      6 => '400',
      7 => '400italic',
      8 => '500',
      9 => '500italic',
      10 => '600',
      11 => '600italic',
      12 => '700',
      13 => '700italic',
      14 => '800',
      15 => '800italic',
      16 => '900',
      17 => '900italic',
    ),
    'Exo 2' => array(
      0 => '100',
      1 => '100italic',
      2 => '200',
      3 => '200italic',
      4 => '300',
      5 => '300italic',
      6 => '400',
      7 => '400italic',
      8 => '500',
      9 => '500italic',
      10 => '600',
      11 => '600italic',
      12 => '700',
      13 => '700italic',
      14 => '800',
      15 => '800italic',
      16 => '900',
      17 => '900italic',
    ),
    'Expletus Sans' => array(
      0 => '400',
      1 => '400italic',
      2 => '500',
      3 => '500italic',
      4 => '600',
      5 => '600italic',
      6 => '700',
      7 => '700italic',
    ),
    'Fanwood Text' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Fascinate' => array(
      0 => '400',
    ),
    'Fascinate Inline' => array(
      0 => '400',
    ),
    'Faster One' => array(
      0 => '400',
    ),
    'Fasthand' => array(
      0 => '400',
    ),
    'Fauna One' => array(
      0 => '400',
    ),
    'Federant' => array(
      0 => '400',
    ),
    'Federo' => array(
      0 => '400',
    ),
    'Felipa' => array(
      0 => '400',
    ),
    'Fenix' => array(
      0 => '400',
    ),
    'Finger Paint' => array(
      0 => '400',
    ),
    'Fjalla One' => array(
      0 => '400',
    ),
    'Fjord One' => array(
      0 => '400',
    ),
    'Flamenco' => array(
      0 => '300',
      1 => '400',
    ),
    'Flavors' => array(
      0 => '400',
    ),
    'Fondamento' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Fontdiner Swanky' => array(
      0 => '400',
    ),
    'Forum' => array(
      0 => '400',
    ),
    'Francois One' => array(
      0 => '400',
    ),
    'Freckle Face' => array(
      0 => '400',
    ),
    'Fredericka the Great' => array(
      0 => '400',
    ),
    'Fredoka One' => array(
      0 => '400',
    ),
    'Freehand' => array(
      0 => '400',
    ),
    'Fresca' => array(
      0 => '400',
    ),
    'Frijole' => array(
      0 => '400',
    ),
    'Fruktur' => array(
      0 => '400',
    ),
    'Fugaz One' => array(
      0 => '400',
    ),
    'GFS Didot' => array(
      0 => '400',
    ),
    'GFS Neohellenic' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Gabriela' => array(
      0 => '400',
    ),
    'Gafata' => array(
      0 => '400',
    ),
    'Galdeano' => array(
      0 => '400',
    ),
    'Galindo' => array(
      0 => '400',
    ),
    'Gentium Basic' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Gentium Book Basic' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Geo' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Geostar' => array(
      0 => '400',
    ),
    'Geostar Fill' => array(
      0 => '400',
    ),
    'Germania One' => array(
      0 => '400',
    ),
    'Gilda Display' => array(
      0 => '400',
    ),
    'Give You Glory' => array(
      0 => '400',
    ),
    'Glass Antiqua' => array(
      0 => '400',
    ),
    'Glegoo' => array(
      0 => '400',
    ),
    'Gloria Hallelujah' => array(
      0 => '400',
    ),
    'Goblin One' => array(
      0 => '400',
    ),
    'Gochi Hand' => array(
      0 => '400',
    ),
    'Gorditas' => array(
      0 => '400',
      1 => '700',
    ),
    'Goudy Bookletter 1911' => array(
      0 => '400',
    ),
    'Graduate' => array(
      0 => '400',
    ),
    'Grand Hotel' => array(
      0 => '400',
    ),
    'Gravitas One' => array(
      0 => '400',
    ),
    'Great Vibes' => array(
      0 => '400',
    ),
    'Griffy' => array(
      0 => '400',
    ),
    'Gruppo' => array(
      0 => '400',
    ),
    'Gudea' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Habibi' => array(
      0 => '400',
    ),
    'Hammersmith One' => array(
      0 => '400',
    ),
    'Hanalei' => array(
      0 => '400',
    ),
    'Hanalei Fill' => array(
      0 => '400',
    ),
    'Handlee' => array(
      0 => '400',
    ),
    'Hanuman' => array(
      0 => '400',
      1 => '700',
    ),
    'Happy Monkey' => array(
      0 => '400',
    ),
    'Headland One' => array(
      0 => '400',
    ),
    'Henny Penny' => array(
      0 => '400',
    ),
    'Herr Von Muellerhoff' => array(
      0 => '400',
    ),
    'Holtwood One SC' => array(
      0 => '400',
    ),
    'Homemade Apple' => array(
      0 => '400',
    ),
    'Homenaje' => array(
      0 => '400',
    ),
    'IM Fell DW Pica' => array(
      0 => '400',
      1 => '400italic',
    ),
    'IM Fell DW Pica SC' => array(
      0 => '400',
    ),
    'IM Fell Double Pica' => array(
      0 => '400',
      1 => '400italic',
    ),
    'IM Fell Double Pica SC' => array(
      0 => '400',
    ),
    'IM Fell English' => array(
      0 => '400',
      1 => '400italic',
    ),
    'IM Fell English SC' => array(
      0 => '400',
    ),
    'IM Fell French Canon' => array(
      0 => '400',
      1 => '400italic',
    ),
    'IM Fell French Canon SC' => array(
      0 => '400',
    ),
    'IM Fell Great Primer' => array(
      0 => '400',
      1 => '400italic',
    ),
    'IM Fell Great Primer SC' => array(
      0 => '400',
    ),
    'Iceberg' => array(
      0 => '400',
    ),
    'Iceland' => array(
      0 => '400',
    ),
    'Imprima' => array(
      0 => '400',
    ),
    'Inconsolata' => array(
      0 => '400',
      1 => '700',
    ),
    'Inder' => array(
      0 => '400',
    ),
    'Indie Flower' => array(
      0 => '400',
    ),
    'Inika' => array(
      0 => '400',
      1 => '700',
    ),
    'Irish Grover' => array(
      0 => '400',
    ),
    'Istok Web' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Italiana' => array(
      0 => '400',
    ),
    'Italianno' => array(
      0 => '400',
    ),
    'Jacques Francois' => array(
      0 => '400',
    ),
    'Jacques Francois Shadow' => array(
      0 => '400',
    ),
    'Jim Nightshade' => array(
      0 => '400',
    ),
    'Jockey One' => array(
      0 => '400',
    ),
    'Jolly Lodger' => array(
      0 => '400',
    ),
    'Josefin Sans' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '600',
      7 => '600italic',
      8 => '700',
      9 => '700italic',
    ),
    'Josefin Slab' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '600',
      7 => '600italic',
      8 => '700',
      9 => '700italic',
    ),
    'Joti One' => array(
      0 => '400',
    ),
    'Judson' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Julee' => array(
      0 => '400',
    ),
    'Julius Sans One' => array(
      0 => '400',
    ),
    'Junge' => array(
      0 => '400',
    ),
    'Jura' => array(
      0 => '300',
      1 => '400',
      2 => '500',
      3 => '600',
    ),
    'Just Another Hand' => array(
      0 => '400',
    ),
    'Just Me Again Down Here' => array(
      0 => '400',
    ),
    'Kameron' => array(
      0 => '400',
      1 => '700',
    ),
    'Kantumruy' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Karla' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Kaushan Script' => array(
      0 => '400',
    ),
    'Kavoon' => array(
      0 => '400',
    ),
    'Kdam Thmor' => array(
      0 => '400',
    ),
    'Keania One' => array(
      0 => '400',
    ),
    'Kelly Slab' => array(
      0 => '400',
    ),
    'Kenia' => array(
      0 => '400',
    ),
    'Khmer' => array(
      0 => '400',
    ),
    'Kite One' => array(
      0 => '400',
    ),
    'Knewave' => array(
      0 => '400',
    ),
    'Kotta One' => array(
      0 => '400',
    ),
    'Koulen' => array(
      0 => '400',
    ),
    'Kranky' => array(
      0 => '400',
    ),
    'Kreon' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Kristi' => array(
      0 => '400',
    ),
    'Krona One' => array(
      0 => '400',
    ),
    'La Belle Aurore' => array(
      0 => '400',
    ),
    'Lancelot' => array(
      0 => '400',
    ),
    'Lato' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '700',
      7 => '700italic',
      8 => '900',
      9 => '900italic',
    ),
    'League Script' => array(
      0 => '400',
    ),
    'Leckerli One' => array(
      0 => '400',
    ),
    'Ledger' => array(
      0 => '400',
    ),
    'Lekton' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Lemon' => array(
      0 => '400',
    ),
    'Libre Baskerville' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Life Savers' => array(
      0 => '400',
      1 => '700',
    ),
    'Lilita One' => array(
      0 => '400',
    ),
    'Lily Script One' => array(
      0 => '400',
    ),
    'Limelight' => array(
      0 => '400',
    ),
    'Linden Hill' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Lobster' => array(
      0 => '400',
    ),
    'Lobster Two' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Londrina Outline' => array(
      0 => '400',
    ),
    'Londrina Shadow' => array(
      0 => '400',
    ),
    'Londrina Sketch' => array(
      0 => '400',
    ),
    'Londrina Solid' => array(
      0 => '400',
    ),
    'Lora' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Love Ya Like A Sister' => array(
      0 => '400',
    ),
    'Loved by the King' => array(
      0 => '400',
    ),
    'Lovers Quarrel' => array(
      0 => '400',
    ),
    'Luckiest Guy' => array(
      0 => '400',
    ),
    'Lusitana' => array(
      0 => '400',
      1 => '700',
    ),
    'Lustria' => array(
      0 => '400',
    ),
    'Macondo' => array(
      0 => '400',
    ),
    'Macondo Swash Caps' => array(
      0 => '400',
    ),
    'Magra' => array(
      0 => '400',
      1 => '700',
    ),
    'Maiden Orange' => array(
      0 => '400',
    ),
    'Mako' => array(
      0 => '400',
    ),
    'Marcellus' => array(
      0 => '400',
    ),
    'Marcellus SC' => array(
      0 => '400',
    ),
    'Marck Script' => array(
      0 => '400',
    ),
    'Margarine' => array(
      0 => '400',
    ),
    'Marko One' => array(
      0 => '400',
    ),
    'Marmelad' => array(
      0 => '400',
    ),
    'Marvel' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Mate' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Mate SC' => array(
      0 => '400',
    ),
    'Maven Pro' => array(
      0 => '400',
      1 => '500',
      2 => '700',
      3 => '900',
    ),
    'McLaren' => array(
      0 => '400',
    ),
    'Meddon' => array(
      0 => '400',
    ),
    'MedievalSharp' => array(
      0 => '400',
    ),
    'Medula One' => array(
      0 => '400',
    ),
    'Megrim' => array(
      0 => '400',
    ),
    'Meie Script' => array(
      0 => '400',
    ),
    'Merienda' => array(
      0 => '400',
      1 => '700',
    ),
    'Merienda One' => array(
      0 => '400',
    ),
    'Merriweather' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
      6 => '900',
      7 => '900italic',
    ),
    'Merriweather Sans' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
      6 => '800',
      7 => '800italic',
    ),
    'Metal' => array(
      0 => '400',
    ),
    'Metal Mania' => array(
      0 => '400',
    ),
    'Metamorphous' => array(
      0 => '400',
    ),
    'Metrophobic' => array(
      0 => '400',
    ),
    'Michroma' => array(
      0 => '400',
    ),
    'Milonga' => array(
      0 => '400',
    ),
    'Miltonian' => array(
      0 => '400',
    ),
    'Miltonian Tattoo' => array(
      0 => '400',
    ),
    'Miniver' => array(
      0 => '400',
    ),
    'Miss Fajardose' => array(
      0 => '400',
    ),
    'Modern Antiqua' => array(
      0 => '400',
    ),
    'Molengo' => array(
      0 => '400',
    ),
    'Molle' => array(
      0 => '400italic',
    ),
    'Monda' => array(
      0 => '400',
      1 => '700',
    ),
    'Monofett' => array(
      0 => '400',
    ),
    'Monoton' => array(
      0 => '400',
    ),
    'Monsieur La Doulaise' => array(
      0 => '400',
    ),
    'Montaga' => array(
      0 => '400',
    ),
    'Montez' => array(
      0 => '400',
    ),
    'Montserrat' => array(
      0 => '400',
      1 => '700',
    ),
    'Montserrat Alternates' => array(
      0 => '400',
      1 => '700',
    ),
    'Montserrat Subrayada' => array(
      0 => '400',
      1 => '700',
    ),
    'Moul' => array(
      0 => '400',
    ),
    'Moulpali' => array(
      0 => '400',
    ),
    'Mountains of Christmas' => array(
      0 => '400',
      1 => '700',
    ),
    'Mouse Memoirs' => array(
      0 => '400',
    ),
    'Mr Bedfort' => array(
      0 => '400',
    ),
    'Mr Dafoe' => array(
      0 => '400',
    ),
    'Mr De Haviland' => array(
      0 => '400',
    ),
    'Mrs Saint Delafield' => array(
      0 => '400',
    ),
    'Mrs Sheppards' => array(
      0 => '400',
    ),
    'Muli' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
    ),
    'Mystery Quest' => array(
      0 => '400',
    ),
    'Neucha' => array(
      0 => '400',
    ),
    'Neuton' => array(
      0 => '200',
      1 => '300',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '800',
    ),
    'New Rocker' => array(
      0 => '400',
    ),
    'News Cycle' => array(
      0 => '400',
      1 => '700',
    ),
    'Niconne' => array(
      0 => '400',
    ),
    'Nixie One' => array(
      0 => '400',
    ),
    'Nobile' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Nokora' => array(
      0 => '400',
      1 => '700',
    ),
    'Norican' => array(
      0 => '400',
    ),
    'Nosifer' => array(
      0 => '400',
    ),
    'Nothing You Could Do' => array(
      0 => '400',
    ),
    'Noticia Text' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Noto Sans' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Noto Serif' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Nova Cut' => array(
      0 => '400',
    ),
    'Nova Flat' => array(
      0 => '400',
    ),
    'Nova Mono' => array(
      0 => '400',
    ),
    'Nova Oval' => array(
      0 => '400',
    ),
    'Nova Round' => array(
      0 => '400',
    ),
    'Nova Script' => array(
      0 => '400',
    ),
    'Nova Slim' => array(
      0 => '400',
    ),
    'Nova Square' => array(
      0 => '400',
    ),
    'Numans' => array(
      0 => '400',
    ),
    'Nunito' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Odor Mean Chey' => array(
      0 => '400',
    ),
    'Offside' => array(
      0 => '400',
    ),
    'Old Standard TT' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Oldenburg' => array(
      0 => '400',
    ),
    'Oleo Script' => array(
      0 => '400',
      1 => '700',
    ),
    'Oleo Script Swash Caps' => array(
      0 => '400',
      1 => '700',
    ),
    'Open Sans' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '600',
      5 => '600italic',
      6 => '700',
      7 => '700italic',
      8 => '800',
      9 => '800italic',
    ),
    'Open Sans Condensed' => array(
      0 => '300',
      1 => '300italic',
      2 => '700',
    ),
    'Oranienbaum' => array(
      0 => '400',
    ),
    'Orbitron' => array(
      0 => '400',
      1 => '500',
      2 => '700',
      3 => '900',
    ),
    'Oregano' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Orienta' => array(
      0 => '400',
    ),
    'Original Surfer' => array(
      0 => '400',
    ),
    'Oswald' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Over the Rainbow' => array(
      0 => '400',
    ),
    'Overlock' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
      4 => '900',
      5 => '900italic',
    ),
    'Overlock SC' => array(
      0 => '400',
    ),
    'Ovo' => array(
      0 => '400',
    ),
    'Oxygen' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Oxygen Mono' => array(
      0 => '400',
    ),
    'PT Mono' => array(
      0 => '400',
    ),
    'PT Sans' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'PT Sans Caption' => array(
      0 => '400',
      1 => '700',
    ),
    'PT Sans Narrow' => array(
      0 => '400',
      1 => '700',
    ),
    'PT Serif' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'PT Serif Caption' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Pacifico' => array(
      0 => '400',
    ),
    'Paprika' => array(
      0 => '400',
    ),
    'Parisienne' => array(
      0 => '400',
    ),
    'Passero One' => array(
      0 => '400',
    ),
    'Passion One' => array(
      0 => '400',
      1 => '700',
      2 => '900',
    ),
    'Pathway Gothic One' => array(
      0 => '400',
    ),
    'Patrick Hand' => array(
      0 => '400',
    ),
    'Patrick Hand SC' => array(
      0 => '400',
    ),
    'Patua One' => array(
      0 => '400',
    ),
    'Paytone One' => array(
      0 => '400',
    ),
    'Peralta' => array(
      0 => '400',
    ),
    'Permanent Marker' => array(
      0 => '400',
    ),
    'Petit Formal Script' => array(
      0 => '400',
    ),
    'Petrona' => array(
      0 => '400',
    ),
    'Philosopher' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Piedra' => array(
      0 => '400',
    ),
    'Pinyon Script' => array(
      0 => '400',
    ),
    'Pirata One' => array(
      0 => '400',
    ),
    'Plaster' => array(
      0 => '400',
    ),
    'Play' => array(
      0 => '400',
      1 => '700',
    ),
    'Playball' => array(
      0 => '400',
    ),
    'Playfair Display' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
      4 => '900',
      5 => '900italic',
    ),
    'Playfair Display SC' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
      4 => '900',
      5 => '900italic',
    ),
    'Podkova' => array(
      0 => '400',
      1 => '700',
    ),
    'Poiret One' => array(
      0 => '400',
    ),
    'Poller One' => array(
      0 => '400',
    ),
    'Poly' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Pompiere' => array(
      0 => '400',
    ),
    'Pontano Sans' => array(
      0 => '400',
    ),
    'Port Lligat Sans' => array(
      0 => '400',
    ),
    'Port Lligat Slab' => array(
      0 => '400',
    ),
    'Prata' => array(
      0 => '400',
    ),
    'Preahvihear' => array(
      0 => '400',
    ),
    'Press Start 2P' => array(
      0 => '400',
    ),
    'Princess Sofia' => array(
      0 => '400',
    ),
    'Prociono' => array(
      0 => '400',
    ),
    'Prosto One' => array(
      0 => '400',
    ),
    'Puritan' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Purple Purse' => array(
      0 => '400',
    ),
    'Quando' => array(
      0 => '400',
    ),
    'Quantico' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Quattrocento' => array(
      0 => '400',
      1 => '700',
    ),
    'Quattrocento Sans' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Questrial' => array(
      0 => '400',
    ),
    'Quicksand' => array(
      0 => '300',
      1 => '400',
      2 => '700',
    ),
    'Quintessential' => array(
      0 => '400',
    ),
    'Qwigley' => array(
      0 => '400',
    ),
    'Racing Sans One' => array(
      0 => '400',
    ),
    'Radley' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Raleway' => array(
      0 => '100',
      1 => '200',
      2 => '300',
      3 => '400',
      4 => '500',
      5 => '600',
      6 => '700',
      7 => '800',
      8 => '900',
    ),
    'Raleway Dots' => array(
      0 => '400',
    ),
    'Rambla' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Rammetto One' => array(
      0 => '400',
    ),
    'Ranchers' => array(
      0 => '400',
    ),
    'Rancho' => array(
      0 => '400',
    ),
    'Rationale' => array(
      0 => '400',
    ),
    'Redressed' => array(
      0 => '400',
    ),
    'Reenie Beanie' => array(
      0 => '400',
    ),
    'Revalia' => array(
      0 => '400',
    ),
    'Ribeye' => array(
      0 => '400',
    ),
    'Ribeye Marrow' => array(
      0 => '400',
    ),
    'Righteous' => array(
      0 => '400',
    ),
    'Risque' => array(
      0 => '400',
    ),
    'Roboto' => array(
      0 => '100',
      1 => '100italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '500',
      7 => '500italic',
      8 => '700',
      9 => '700italic',
      10 => '900',
      11 => '900italic',
    ),
    'Roboto Condensed' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '700',
      5 => '700italic',
    ),
    'Roboto Slab' => array(
      0 => '100',
      1 => '300',
      2 => '400',
      3 => '700',
    ),
    'Rochester' => array(
      0 => '400',
    ),
    'Rock Salt' => array(
      0 => '400',
    ),
    'Rokkitt' => array(
      0 => '400',
      1 => '700',
    ),
    'Romanesco' => array(
      0 => '400',
    ),
    'Ropa Sans' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Rosario' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Rosarivo' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Rouge Script' => array(
      0 => '400',
    ),
    'Ruda' => array(
      0 => '400',
      1 => '700',
      2 => '900',
    ),
    'Rufina' => array(
      0 => '400',
      1 => '700',
    ),
    'Ruge Boogie' => array(
      0 => '400',
    ),
    'Ruluko' => array(
      0 => '400',
    ),
    'Rum Raisin' => array(
      0 => '400',
    ),
    'Ruslan Display' => array(
      0 => '400',
    ),
    'Russo One' => array(
      0 => '400',
    ),
    'Ruthie' => array(
      0 => '400',
    ),
    'Rye' => array(
      0 => '400',
    ),
    'Sacramento' => array(
      0 => '400',
    ),
    'Sail' => array(
      0 => '400',
    ),
    'Salsa' => array(
      0 => '400',
    ),
    'Sanchez' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Sancreek' => array(
      0 => '400',
    ),
    'Sansita One' => array(
      0 => '400',
    ),
    'Sarina' => array(
      0 => '400',
    ),
    'Satisfy' => array(
      0 => '400',
    ),
    'Scada' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Schoolbell' => array(
      0 => '400',
    ),
    'Seaweed Script' => array(
      0 => '400',
    ),
    'Sevillana' => array(
      0 => '400',
    ),
    'Seymour One' => array(
      0 => '400',
    ),
    'Shadows Into Light' => array(
      0 => '400',
    ),
    'Shadows Into Light Two' => array(
      0 => '400',
    ),
    'Shanti' => array(
      0 => '400',
    ),
    'Share' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Share Tech' => array(
      0 => '400',
    ),
    'Share Tech Mono' => array(
      0 => '400',
    ),
    'Shojumaru' => array(
      0 => '400',
    ),
    'Short Stack' => array(
      0 => '400',
    ),
    'Siemreap' => array(
      0 => '400',
    ),
    'Sigmar One' => array(
      0 => '400',
    ),
    'Signika' => array(
      0 => '300',
      1 => '400',
      2 => '600',
      3 => '700',
    ),
    'Signika Negative' => array(
      0 => '300',
      1 => '400',
      2 => '600',
      3 => '700',
    ),
    'Simonetta' => array(
      0 => '400',
      1 => '400italic',
      2 => '900',
      3 => '900italic',
    ),
    'Sintony' => array(
      0 => '400',
      1 => '700',
    ),
    'Sirin Stencil' => array(
      0 => '400',
    ),
    'Six Caps' => array(
      0 => '400',
    ),
    'Skranji' => array(
      0 => '400',
      1 => '700',
    ),
    'Slackey' => array(
      0 => '400',
    ),
    'Smokum' => array(
      0 => '400',
    ),
    'Smythe' => array(
      0 => '400',
    ),
    'Sniglet' => array(
      0 => '400',
      1 => '800',
    ),
    'Snippet' => array(
      0 => '400',
    ),
    'Snowburst One' => array(
      0 => '400',
    ),
    'Sofadi One' => array(
      0 => '400',
    ),
    'Sofia' => array(
      0 => '400',
    ),
    'Sonsie One' => array(
      0 => '400',
    ),
    'Sorts Mill Goudy' => array(
      0 => '400',
      1 => '400italic',
    ),
    'Source Code Pro' => array(
      0 => '200',
      1 => '300',
      2 => '400',
      3 => '500',
      4 => '600',
      5 => '700',
      6 => '900',
    ),
    'Source Sans Pro' => array(
      0 => '200',
      1 => '200italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '600',
      7 => '600italic',
      8 => '700',
      9 => '700italic',
      10 => '900',
      11 => '900italic',
    ),
    'Special Elite' => array(
      0 => '400',
    ),
    'Spicy Rice' => array(
      0 => '400',
    ),
    'Spinnaker' => array(
      0 => '400',
    ),
    'Spirax' => array(
      0 => '400',
    ),
    'Squada One' => array(
      0 => '400',
    ),
    'Stalemate' => array(
      0 => '400',
    ),
    'Stalinist One' => array(
      0 => '400',
    ),
    'Stardos Stencil' => array(
      0 => '400',
      1 => '700',
    ),
    'Stint Ultra Condensed' => array(
      0 => '400',
    ),
    'Stint Ultra Expanded' => array(
      0 => '400',
    ),
    'Stoke' => array(
      0 => '300',
      1 => '400',
    ),
    'Strait' => array(
      0 => '400',
    ),
    'Sue Ellen Francisco' => array(
      0 => '400',
    ),
    'Sunshiney' => array(
      0 => '400',
    ),
    'Supermercado One' => array(
      0 => '400',
    ),
    'Suwannaphum' => array(
      0 => '400',
    ),
    'Swanky and Moo Moo' => array(
      0 => '400',
    ),
    'Syncopate' => array(
      0 => '400',
      1 => '700',
    ),
    'Tangerine' => array(
      0 => '400',
      1 => '700',
    ),
    'Taprom' => array(
      0 => '400',
    ),
    'Tauri' => array(
      0 => '400',
    ),
    'Telex' => array(
      0 => '400',
    ),
    'Tenor Sans' => array(
      0 => '400',
    ),
    'Text Me One' => array(
      0 => '400',
    ),
    'The Girl Next Door' => array(
      0 => '400',
    ),
    'Tienne' => array(
      0 => '400',
      1 => '700',
      2 => '900',
    ),
    'Tinos' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Titan One' => array(
      0 => '400',
    ),
    'Titillium Web' => array(
      0 => '200',
      1 => '200italic',
      2 => '300',
      3 => '300italic',
      4 => '400',
      5 => '400italic',
      6 => '600',
      7 => '600italic',
      8 => '700',
      9 => '700italic',
      10 => '900',
    ),
    'Trade Winds' => array(
      0 => '400',
    ),
    'Trocchi' => array(
      0 => '400',
    ),
    'Trochut' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
    ),
    'Trykker' => array(
      0 => '400',
    ),
    'Tulpen One' => array(
      0 => '400',
    ),
    'Ubuntu' => array(
      0 => '300',
      1 => '300italic',
      2 => '400',
      3 => '400italic',
      4 => '500',
      5 => '500italic',
      6 => '700',
      7 => '700italic',
    ),
    'Ubuntu Condensed' => array(
      0 => '400',
    ),
    'Ubuntu Mono' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Ultra' => array(
      0 => '400',
    ),
    'Uncial Antiqua' => array(
      0 => '400',
    ),
    'Underdog' => array(
      0 => '400',
    ),
    'Unica One' => array(
      0 => '400',
    ),
    'UnifrakturCook' => array(
      0 => '700',
    ),
    'UnifrakturMaguntia' => array(
      0 => '400',
    ),
    'Unkempt' => array(
      0 => '400',
      1 => '700',
    ),
    'Unlock' => array(
      0 => '400',
    ),
    'Unna' => array(
      0 => '400',
    ),
    'VT323' => array(
      0 => '400',
    ),
    'Vampiro One' => array(
      0 => '400',
    ),
    'Varela' => array(
      0 => '400',
    ),
    'Varela Round' => array(
      0 => '400',
    ),
    'Vast Shadow' => array(
      0 => '400',
    ),
    'Vibur' => array(
      0 => '400',
    ),
    'Vidaloka' => array(
      0 => '400',
    ),
    'Viga' => array(
      0 => '400',
    ),
    'Voces' => array(
      0 => '400',
    ),
    'Volkhov' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Vollkorn' => array(
      0 => '400',
      1 => '400italic',
      2 => '700',
      3 => '700italic',
    ),
    'Voltaire' => array(
      0 => '400',
    ),
    'Waiting for the Sunrise' => array(
      0 => '400',
    ),
    'Wallpoet' => array(
      0 => '400',
    ),
    'Walter Turncoat' => array(
      0 => '400',
    ),
    'Warnes' => array(
      0 => '400',
    ),
    'Wellfleet' => array(
      0 => '400',
    ),
    'Wendy One' => array(
      0 => '400',
    ),
    'Wire One' => array(
      0 => '400',
    ),
    'Yanone Kaffeesatz' => array(
      0 => '200',
      1 => '300',
      2 => '400',
      3 => '700',
    ),
    'Yellowtail' => array(
      0 => '400',
    ),
    'Yeseva One' => array(
      0 => '400',
    ),
    'Yesteryear' => array(
      0 => '400',
    ),
    'Zeyada' => array(
      0 => '400',
    ),
  );

  return $weights;

}



// All Weights
// =============================================================================

function x_font_data_all_weights() {

  $all_weights = array(
    '100'       => __( 'Ultra Light', '__x__' ),
    '100italic' => __( 'Ultra Light Italic', '__x__' ),
    '200'       => __( 'Light', '__x__' ),
    '200italic' => __( 'Light Italic', '__x__' ),
    '300'       => __( 'Book', '__x__' ),
    '300italic' => __( 'Book Italic', '__x__' ),
    '400'       => __( 'Regular', '__x__' ),
    '400italic' => __( 'Regular Italic', '__x__' ),
    '500'       => __( 'Medium', '__x__' ),
    '500italic' => __( 'Medium Italic', '__x__' ),
    '600'       => __( 'Semi-Bold', '__x__' ),
    '600italic' => __( 'Semi-Bold Italic', '__x__' ),
    '700'       => __( 'Bold', '__x__' ),
    '700italic' => __( 'Bold Italic', '__x__' ),
    '800'       => __( 'Extra Bold', '__x__' ),
    '800italic' => __( 'Extra Bold Italic', '__x__' ),
    '900'       => __( 'Ultra Bold', '__x__' ),
    '900italic' => __( 'Ultra Bold Italic', '__x__' )
  );

  return $all_weights;

}



// Is Font Italic
// =============================================================================

function x_is_font_italic( $font_weight_and_style ) {

  if ( strpos( $font_weight_and_style, 'italic' ) ) {
    return true;
  } else {
    return false;
  }

}



// Get Font Weight
// =============================================================================

function x_get_font_weight( $font_weight_and_style ) {

  $font_weight = ( x_is_font_italic( $font_weight_and_style ) ) ? str_replace( 'italic', '', $font_weight_and_style ) : $font_weight_and_style;

  return $font_weight;

}



// Get Font Family Query
// =============================================================================

function x_get_font_family_query( $font_family ) {

  $font_family_query = str_replace( ' ', '+', $font_family );

  return $font_family_query;

}