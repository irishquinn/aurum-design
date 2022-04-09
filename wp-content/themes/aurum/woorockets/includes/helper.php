<?php
/**
 * @version    1.0.1
 * @package    Aurum_Theme
 * @author     Chris Quinn <https://github.com/irishquinn>
 * @copyright  Copyright (C) 2019 Chris Quinn. All Rights Reserved.
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: https://aurumdesign.com
 */

/**
 * Class that provides common helper functions.
 *
 * @package  WR_Theme
 * @since    1.0
 */

class WR_Nitro_Helper
{
    /**
     * Get list of Google fonts.
     *
     * @return  array
     */
    public static function google_fonts()
    {
        return [
            'ABeeZee' => [400],
            'Abel' => [400],
            'Abril Fatface' => [400],
            'Aclonica' => [400],
            'Acme' => [400],
            'Actor' => [400],
            'Adamina' => [400],
            'Advent Pro' => [100, 200, 300, 400, 500, 600, 700],
            'Aguafina Script' => [400],
            'Akronim' => [400],
            'Aladin' => [400],
            'Aldrich' => [400],
            'Alef' => [400, 700],
            'Alegreya' => [400, 700, 900],
            'Alegreya SC' => [400, 700, 900],
            'Alegreya Sans' => [100, 300, 400, 500, 700, 800, 900],
            'Alegreya Sans SC' => [100, 300, 400, 500, 700, 800, 900],
            'Alex Brush' => [400],
            'Alfa Slab One' => [400],
            'Alice' => [400],
            'Alike' => [400],
            'Alike Angular' => [400],
            'Allan' => [400, 700],
            'Allerta' => [400],
            'Allerta Stencil' => [400],
            'Allura' => [400],
            'Almendra' => [400, 700],
            'Almendra Display' => [400],
            'Almendra SC' => [400],
            'Amarante' => [400],
            'Amaranth' => [400, 700],
            'Amatic SC' => [400, 700],
            'Amethysta' => [400],
            'Amiri' => [400, 700],
            'Amita' => [400, 700],
            'Anaheim' => [400],
            'Andada' => [400],
            'Andika' => [400],
            'Angkor' => [400],
            'Annie Use Your Telescope' => [400],
            'Anonymous Pro' => [400, 700],
            'Antic' => [400],
            'Antic Didone' => [400],
            'Antic Slab' => [400],
            'Anton' => [400],
            'Arapey' => [400],
            'Arbutus' => [400],
            'Arbutus Slab' => [400],
            'Architects Daughter' => [400],
            'Archivo Black' => [400],
            'Archivo Narrow' => [400, 700],
            'Arimo' => [400, 700],
            'Arizonia' => [400],
            'Armata' => [400],
            'Artifika' => [400],
            'Arvo' => [400, 700],
            'Arya' => [400, 700],
            'Asap' => [400, 700],
            'Asar' => [400],
            'Asset' => [400],
            'Astloch' => [400, 700],
            'Asul' => [400, 700],
            'Atomic Age' => [400],
            'Aubrey' => [400],
            'Audiowide' => [400],
            'Autour One' => [400],
            'Average' => [400],
            'Average Sans' => [400],
            'Averia Gruesa Libre' => [400],
            'Averia Libre' => [300, 400, 700],
            'Averia Sans Libre' => [300, 400, 700],
            'Averia Serif Libre' => [300, 400, 700],
            'Bad Script' => [400],
            'Balthazar' => [400],
            'Bangers' => [400],
            'Basic' => [400],
            'Battambang' => [400, 700],
            'Baumans' => [400],
            'Bayon' => [400],
            'Belgrano' => [400],
            'Belleza' => [400],
            'BenchNine' => [300, 400, 700],
            'Bentham' => [400],
            'Berkshire Swash' => [400],
            'Bevan' => [400],
            'Bigelow Rules' => [400],
            'Bigshot One' => [400],
            'Bilbo' => [400],
            'Bilbo Swash Caps' => [400],
            'Biryani' => [200, 300, 400, 600, 700, 800, 900],
            'Bitter' => [400, 700],
            'Black Ops One' => [400],
            'Bokor' => [400],
            'Bonbon' => [400],
            'Boogaloo' => [400],
            'Bowlby One' => [400],
            'Bowlby One SC' => [400],
            'Brawler' => [400],
            'Bree Serif' => [400],
            'Bubblegum Sans' => [400],
            'Bubbler One' => [400],
            'Buda' => [300],
            'Buenard' => [400, 700],
            'Butcherman' => [400],
            'Butterfly Kids' => [400],
            'Cabin' => [400, 500, 600, 700],
            'Cabin Condensed' => [400, 500, 600, 700],
            'Cabin Sketch' => [400, 700],
            'Caesar Dressing' => [400],
            'Cagliostro' => [400],
            'Calligraffitti' => [400],
            'Cambay' => [400, 700],
            'Cambo' => [400],
            'Candal' => [400],
            'Cantarell' => [400, 700],
            'Cantata One' => [400],
            'Cantora One' => [400],
            'Capriola' => [400],
            'Cardo' => [400, 700],
            'Carme' => [400],
            'Carrois Gothic' => [400],
            'Carrois Gothic SC' => [400],
            'Carter One' => [400],
            'Catamaran' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Caudex' => [400, 700],
            'Caveat' => [400, 700],
            'Caveat Brush' => [400],
            'Cedarville Cursive' => [400],
            'Ceviche One' => [400],
            'Changa One' => [400],
            'Chango' => [400],
            'Chau Philomene One' => [400],
            'Chela One' => [400],
            'Chelsea Market' => [400],
            'Chenla' => [400],
            'Cherry Cream Soda' => [400],
            'Cherry Swash' => [400, 700],
            'Chewy' => [400],
            'Chicle' => [400],
            'Chivo' => [400, 900],
            'Chonburi' => [400],
            'Cinzel' => [400, 700, 900],
            'Cinzel Decorative' => [400, 700, 900],
            'Clicker Script' => [400],
            'Coda' => [400, 800],
            'Coda Caption' => [800],
            'Codystar' => [300, 400],
            'Combo' => [400],
            'Comfortaa' => [300, 400, 700],
            'Coming Soon' => [400],
            'Concert One' => [400],
            'Condiment' => [400],
            'Content' => [400, 700],
            'Contrail One' => [400],
            'Convergence' => [400],
            'Cookie' => [400],
            'Copse' => [400],
            'Corben' => [400, 700],
            'Courgette' => [400],
            'Cousine' => [400, 700],
            'Coustard' => [400, 900],
            'Covered By Your Grace' => [400],
            'Crafty Girls' => [400],
            'Creepster' => [400],
            'Crete Round' => [400],
            'Crimson Text' => [400, 600, 700],
            'Croissant One' => [400],
            'Crushed' => [400],
            'Cuprum' => [400, 700],
            'Cutive' => [400],
            'Cutive Mono' => [400],
            'Damion' => [400],
            'Dancing Script' => [400, 700],
            'Dangrek' => [400],
            'Dawning of a New Day' => [400],
            'Days One' => [400],
            'Dekko' => [400],
            'Delius' => [400],
            'Delius Swash Caps' => [400],
            'Delius Unicase' => [400, 700],
            'Della Respira' => [400],
            'Denk One' => [400],
            'Devonshire' => [400],
            'Dhurjati' => [400],
            'Didact Gothic' => [400],
            'Diplomata' => [400],
            'Diplomata SC' => [400],
            'Domine' => [400, 700],
            'Donegal One' => [400],
            'Doppio One' => [400],
            'Dorsa' => [400],
            'Dosis' => [200, 300, 400, 500, 600, 700, 800],
            'Dr Sugiyama' => [400],
            'Droid Sans' => [400, 700],
            'Droid Sans Mono' => [400],
            'Droid Serif' => [400, 700],
            'Duru Sans' => [400],
            'Dynalight' => [400],
            'EB Garamond' => [400],
            'Eagle Lake' => [400],
            'Eater' => [400],
            'Economica' => [400, 700],
            'Eczar' => [400, 500, 600, 700, 800],
            'Ek Mukta' => [200, 300, 400, 500, 600, 700, 800],
            'Electrolize' => [400],
            'Elsie' => [400, 900],
            'Elsie Swash Caps' => [400, 900],
            'Emblema One' => [400],
            'Emilys Candy' => [400],
            'Engagement' => [400],
            'Englebert' => [400],
            'Enriqueta' => [400, 700],
            'Erica One' => [400],
            'Esteban' => [400],
            'Euphoria Script' => [400],
            'Ewert' => [400],
            'Exo' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Exo 2' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Expletus Sans' => [400, 500, 600, 700],
            'Fanwood Text' => [400],
            'Fascinate' => [400],
            'Fascinate Inline' => [400],
            'Faster One' => [400],
            'Fasthand' => [400],
            'Fauna One' => [400],
            'Federant' => [400],
            'Federo' => [400],
            'Felipa' => [400],
            'Fenix' => [400],
            'Finger Paint' => [400],
            'Fira Mono' => [400, 700],
            'Fira Sans' => [300, 400, 500, 700],
            'Fjalla One' => [400],
            'Fjord One' => [400],
            'Flamenco' => [300, 400],
            'Flavors' => [400],
            'Fondamento' => [400],
            'Fontdiner Swanky' => [400],
            'Forum' => [400],
            'Francois One' => [400],
            'Freckle Face' => [400],
            'Fredericka the Great' => [400],
            'Fredoka One' => [400],
            'Freehand' => [400],
            'Fresca' => [400],
            'Frijole' => [400],
            'Fruktur' => [400],
            'Fugaz One' => [400],
            'GFS Didot' => [400],
            'GFS Neohellenic' => [400, 700],
            'Gabriela' => [400],
            'Gafata' => [400],
            'Galdeano' => [400],
            'Galindo' => [400],
            'Gentium Basic' => [400, 700],
            'Gentium Book Basic' => [400, 700],
            'Geo' => [400],
            'Geostar' => [400],
            'Geostar Fill' => [400],
            'Germania One' => [400],
            'Gidugu' => [400],
            'Gilda Display' => [400],
            'Give You Glory' => [400],
            'Glass Antiqua' => [400],
            'Glegoo' => [400, 700],
            'Gloria Hallelujah' => [400],
            'Goblin One' => [400],
            'Gochi Hand' => [400],
            'Gorditas' => [400, 700],
            'Goudy Bookletter 1911' => [400],
            'Graduate' => [400],
            'Grand Hotel' => [400],
            'Gravitas One' => [400],
            'Great Vibes' => [400],
            'Griffy' => [400],
            'Gruppo' => [400],
            'Gudea' => [400, 700],
            'Gurajada' => [400],
            'Habibi' => [400],
            'Halant' => [300, 400, 500, 600, 700],
            'Hammersmith One' => [400],
            'Hanalei' => [400],
            'Hanalei Fill' => [400],
            'Handlee' => [400],
            'Hanuman' => [400, 700],
            'Happy Monkey' => [400],
            'Headland One' => [400],
            'Henny Penny' => [400],
            'Herr Von Muellerhoff' => [400],
            'Hind' => [300, 400, 500, 600, 700],
            'Hind Siliguri' => [300, 400, 500, 600, 700],
            'Hind Vadodara' => [300, 400, 500, 600, 700],
            'Holtwood One SC' => [400],
            'Homemade Apple' => [400],
            'Homenaje' => [400],
            'IM Fell DW Pica' => [400],
            'IM Fell DW Pica SC' => [400],
            'IM Fell Double Pica' => [400],
            'IM Fell Double Pica SC' => [400],
            'IM Fell English' => [400],
            'IM Fell English SC' => [400],
            'IM Fell French Canon' => [400],
            'IM Fell French Canon SC' => [400],
            'IM Fell Great Primer' => [400],
            'IM Fell Great Primer SC' => [400],
            'Iceberg' => [400],
            'Iceland' => [400],
            'Imprima' => [400],
            'Inconsolata' => [400, 700],
            'Inder' => [400],
            'Indie Flower' => [400],
            'Inika' => [400, 700],
            'Inknut Antiqua' => [300, 400, 500, 600, 700, 800, 900],
            'Irish Grover' => [400],
            'Istok Web' => [400, 700],
            'Italiana' => [400],
            'Italianno' => [400],
            'Itim' => [400],
            'Jacques Francois' => [400],
            'Jacques Francois Shadow' => [400],
            'Jaldi' => [400, 700],
            'Jim Nightshade' => [400],
            'Jockey One' => [400],
            'Jolly Lodger' => [400],
            'Josefin Sans' => [100, 300, 400, 600, 700],
            'Josefin Slab' => [100, 300, 400, 600, 700],
            'Joti One' => [400],
            'Judson' => [400, 700],
            'Julee' => [400],
            'Julius Sans One' => [400],
            'Junge' => [400],
            'Jura' => [300, 400, 500, 600],
            'Just Another Hand' => [400],
            'Just Me Again Down Here' => [400],
            'Kadwa' => [400, 700],
            'Kalam' => [300, 400, 700],
            'Kameron' => [400, 700],
            'Kanit' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Kantumruy' => [300, 400, 700],
            'Karla' => [400, 700],
            'Karma' => [300, 400, 500, 600, 700],
            'Kaushan Script' => [400],
            'Kavoon' => [400],
            'Kdam Thmor' => [400],
            'Keania One' => [400],
            'Kelly Slab' => [400],
            'Kenia' => [400],
            'Khand' => [300, 400, 500, 600, 700],
            'Khmer' => [400],
            'Khula' => [300, 400, 600, 700, 800],
            'Kite One' => [400],
            'Knewave' => [400],
            'Kotta One' => [400],
            'Koulen' => [400],
            'Kranky' => [400],
            'Kreon' => [300, 400, 700],
            'Kristi' => [400],
            'Krona One' => [400],
            'Kurale' => [400],
            'La Belle Aurore' => [400],
            'Laila' => [300, 400, 500, 600, 700],
            'Lakki Reddy' => [400],
            'Lancelot' => [400],
            'Lateef' => [400],
            'Lato' => [100, 300, 400, 700, 900],
            'League Script' => [400],
            'Leckerli One' => [400],
            'Ledger' => [400],
            'Lekton' => [400, 700],
            'Lemon' => [400],
            'Libre Baskerville' => [400, 700],
            'Life Savers' => [400, 700],
            'Lilita One' => [400],
            'Lily Script One' => [400],
            'Limelight' => [400],
            'Linden Hill' => [400],
            'Lobster' => [400],
            'Lobster Two' => [400, 700],
            'Londrina Outline' => [400],
            'Londrina Shadow' => [400],
            'Londrina Sketch' => [400],
            'Londrina Solid' => [400],
            'Lora' => [400, 700],
            'Love Ya Like A Sister' => [400],
            'Loved by the King' => [400],
            'Lovers Quarrel' => [400],
            'Luckiest Guy' => [400],
            'Lusitana' => [400, 700],
            'Lustria' => [400],
            'Macondo' => [400],
            'Macondo Swash Caps' => [400],
            'Magra' => [400, 700],
            'Maiden Orange' => [400],
            'Mako' => [400],
            'Mallanna' => [400],
            'Mandali' => [400],
            'Marcellus' => [400],
            'Marcellus SC' => [400],
            'Marck Script' => [400],
            'Margarine' => [400],
            'Marko One' => [400],
            'Marmelad' => [400],
            'Martel' => [200, 300, 400, 600, 700, 800, 900],
            'Martel Sans' => [200, 300, 400, 600, 700, 800, 900],
            'Marvel' => [400, 700],
            'Mate' => [400],
            'Mate SC' => [400],
            'Maven Pro' => [400, 500, 700, 900],
            'McLaren' => [400],
            'Meddon' => [400],
            'MedievalSharp' => [400],
            'Medula One' => [400],
            'Megrim' => [400],
            'Meie Script' => [400],
            'Merienda' => [400, 700],
            'Merienda One' => [400],
            'Merriweather' => [300, 400, 700, 900],
            'Merriweather Sans' => [300, 400, 700, 800],
            'Metal' => [400],
            'Metal Mania' => [400],
            'Metamorphous' => [400],
            'Metrophobic' => [400],
            'Michroma' => [400],
            'Milonga' => [400],
            'Miltonian' => [400],
            'Miltonian Tattoo' => [400],
            'Miniver' => [400],
            'Miss Fajardose' => [400],
            'Modak' => [400],
            'Modern Antiqua' => [400],
            'Molengo' => [400],
            'Molle' => [400],
            'Monda' => [400, 700],
            'Monofett' => [400],
            'Monoton' => [400],
            'Monsieur La Doulaise' => [400],
            'Montaga' => [400],
            'Montez' => [400],
            'Montserrat' => [400, 700],
            'Montserrat Alternates' => [400, 700],
            'Montserrat Subrayada' => [400, 700],
            'Moul' => [400],
            'Moulpali' => [400],
            'Mountains of Christmas' => [400, 700],
            'Mouse Memoirs' => [400],
            'Mr Bedfort' => [400],
            'Mr Dafoe' => [400],
            'Mr De Haviland' => [400],
            'Mrs Saint Delafield' => [400],
            'Mrs Sheppards' => [400],
            'Muli' => [300, 400],
            'Mystery Quest' => [400],
            'NTR' => [400],
            'Neucha' => [400],
            'Neuton' => [200, 300, 400, 700, 800],
            'New Rocker' => [400],
            'News Cycle' => [400, 700],
            'Niconne' => [400],
            'Nixie One' => [400],
            'Nobile' => [400, 700],
            'Nokora' => [400, 700],
            'Norican' => [400],
            'Nosifer' => [400],
            'Nothing You Could Do' => [400],
            'Noticia Text' => [400, 700],
            'Noto Sans' => [400, 700],
            'Noto Serif' => [400, 700],
            'Nova Cut' => [400],
            'Nova Flat' => [400],
            'Nova Mono' => [400],
            'Nova Oval' => [400],
            'Nova Round' => [400],
            'Nova Script' => [400],
            'Nova Slim' => [400],
            'Nova Square' => [400],
            'Numans' => [400],
            'Nunito' => [300, 400, 700],
            'Odor Mean Chey' => [400],
            'Offside' => [400],
            'Old Standard TT' => [400, 700],
            'Oldenburg' => [400],
            'Oleo Script' => [400, 700],
            'Oleo Script Swash Caps' => [400, 700],
            'Open Sans' => [300, 400, 600, 700, 800],
            'Open Sans Condensed' => [300, 700],
            'Oranienbaum' => [400],
            'Orbitron' => [400, 500, 700, 900],
            'Oregano' => [400],
            'Orienta' => [400],
            'Original Surfer' => [400],
            'Oswald' => [300, 400, 700],
            'Over the Rainbow' => [400],
            'Overlock' => [400, 700, 900],
            'Overlock SC' => [400],
            'Ovo' => [400],
            'Oxygen' => [300, 400, 700],
            'Oxygen Mono' => [400],
            'PT Mono' => [400],
            'PT Sans' => [400, 700],
            'PT Sans Caption' => [400, 700],
            'PT Sans Narrow' => [400, 700],
            'PT Serif' => [400, 700],
            'PT Serif Caption' => [400],
            'Pacifico' => [400],
            'Palanquin' => [100, 200, 300, 400, 500, 600, 700],
            'Palanquin Dark' => [400, 500, 600, 700],
            'Paprika' => [400],
            'Parisienne' => [400],
            'Passero One' => [400],
            'Passion One' => [400, 700, 900],
            'Pathway Gothic One' => [400],
            'Patrick Hand' => [400],
            'Patrick Hand SC' => [400],
            'Patua One' => [400],
            'Paytone One' => [400],
            'Peddana' => [400],
            'Peralta' => [400],
            'Permanent Marker' => [400],
            'Petit Formal Script' => [400],
            'Petrona' => [400],
            'Philosopher' => [400, 700],
            'Piedra' => [400],
            'Pinyon Script' => [400],
            'Pirata One' => [400],
            'Plaster' => [400],
            'Play' => [400, 700],
            'Playball' => [400],
            'Playfair Display' => [400, '400i', 700, '400i', 900, '900i'],
            'Playfair Display SC' => [400, 700, 900],
            'Podkova' => [400, 700],
            'Poiret One' => [400],
            'Poller One' => [400],
            'Poly' => [400],
            'Pompiere' => [400],
            'Pontano Sans' => [400],
            'Poppins' => [300, 400, 500, 600, 700],
            'Port Lligat Sans' => [400],
            'Port Lligat Slab' => [400],
            'Pragati Narrow' => [400, 700],
            'Prata' => [400],
            'Preahvihear' => [400],
            'Press Start 2P' => [400],
            'Princess Sofia' => [400],
            'Prociono' => [400],
            'Prosto One' => [400],
            'Puritan' => [400, 700],
            'Purple Purse' => [400],
            'Quando' => [400],
            'Quantico' => [400, 700],
            'Quattrocento' => [400, 700],
            'Quattrocento Sans' => [400, 700],
            'Questrial' => [400],
            'Quicksand' => [300, 400, 700],
            'Quintessential' => [400],
            'Qwigley' => [400],
            'Racing Sans One' => [400],
            'Radley' => [400],
            'Rajdhani' => [300, 400, 500, 600, 700],
            'Raleway' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Raleway Dots' => [400],
            'Ramabhadra' => [400],
            'Ramaraja' => [400],
            'Rambla' => [400, 700],
            'Rammetto One' => [400],
            'Ranchers' => [400],
            'Rancho' => [400],
            'Ranga' => [400, 700],
            'Rationale' => [400],
            'Ravi Prakash' => [400],
            'Redressed' => [400],
            'Reenie Beanie' => [400],
            'Revalia' => [400],
            'Rhodium Libre' => [400],
            'Ribeye' => [400],
            'Ribeye Marrow' => [400],
            'Righteous' => [400],
            'Risque' => [400],
            'Roboto' => [100, 300, 400, 500, 700, 900],
            'Roboto Condensed' => [300, 400, 700],
            'Roboto Mono' => [100, 300, 400, 500, 700],
            'Roboto Slab' => [100, 300, 400, 700],
            'Rochester' => [400],
            'Rock Salt' => [400],
            'Rokkitt' => [400, 700],
            'Romanesco' => [400],
            'Ropa Sans' => [400],
            'Rosario' => [400, 700],
            'Rosarivo' => [400],
            'Rouge Script' => [400],
            'Rozha One' => [400],
            'Rubik' => [300, 400, 500, 700, 900],
            'Rubik Mono One' => [400],
            'Rubik One' => [400],
            'Ruda' => [400, 700, 900],
            'Rufina' => [400, 700],
            'Ruge Boogie' => [400],
            'Ruluko' => [400],
            'Rum Raisin' => [400],
            'Ruslan Display' => [400],
            'Russo One' => [400],
            'Ruthie' => [400],
            'Rye' => [400],
            'Sacramento' => [400],
            'Sahitya' => [400, 700],
            'Sail' => [400],
            'Salsa' => [400],
            'Sanchez' => [400],
            'Sancreek' => [400],
            'Sansita One' => [400],
            'Sarala' => [400, 700],
            'Sarina' => [400],
            'Sarpanch' => [400, 500, 600, 700, 800, 900],
            'Satisfy' => [400],
            'Scada' => [400, 700],
            'Scheherazade' => [400, 700],
            'Schoolbell' => [400],
            'Seaweed Script' => [400],
            'Sevillana' => [400],
            'Seymour One' => [400],
            'Shadows Into Light' => [400],
            'Shadows Into Light Two' => [400],
            'Shanti' => [400],
            'Share' => [400, 700],
            'Share Tech' => [400],
            'Share Tech Mono' => [400],
            'Shojumaru' => [400],
            'Short Stack' => [400],
            'Siemreap' => [400],
            'Sigmar One' => [400],
            'Signika' => [300, 400, 600, 700],
            'Signika Negative' => [300, 400, 600, 700],
            'Simonetta' => [400, 900],
            'Sintony' => [400, 700],
            'Sirin Stencil' => [400],
            'Six Caps' => [400],
            'Skranji' => [400, 700],
            'Slabo 13px' => [400],
            'Slabo 27px' => [400],
            'Slackey' => [400],
            'Smokum' => [400],
            'Smythe' => [400],
            'Sniglet' => [400, 800],
            'Snippet' => [400],
            'Snowburst One' => [400],
            'Sofadi One' => [400],
            'Sofia' => [400],
            'Sonsie One' => [400],
            'Sorts Mill Goudy' => [400],
            'Source Code Pro' => [200, 300, 400, 500, 600, 700, 900],
            'Source Sans Pro' => [200, 300, 400, 600, 700, 900],
            'Source Serif Pro' => [400, 600, 700],
            'Special Elite' => [400],
            'Spicy Rice' => [400],
            'Spinnaker' => [400],
            'Spirax' => [400],
            'Squada One' => [400],
            'Sree Krushnadevaraya' => [400],
            'Stalemate' => [400],
            'Stalinist One' => [400],
            'Stardos Stencil' => [400, 700],
            'Stint Ultra Condensed' => [400],
            'Stint Ultra Expanded' => [400],
            'Stoke' => [300, 400],
            'Strait' => [400],
            'Sue Ellen Francisco' => [400],
            'Sumana' => [400, 700],
            'Sunshiney' => [400],
            'Supermercado One' => [400],
            'Sura' => [400, 700],
            'Suranna' => [400],
            'Suravaram' => [400],
            'Suwannaphum' => [400],
            'Swanky and Moo Moo' => [400],
            'Syncopate' => [400, 700],
            'Tangerine' => [400, 700],
            'Taprom' => [400],
            'Tauri' => [400],
            'Teko' => [300, 400, 500, 600, 700],
            'Telex' => [400],
            'Tenali Ramakrishna' => [400],
            'Tenor Sans' => [400],
            'Text Me One' => [400],
            'The Girl Next Door' => [400],
            'Tienne' => [400, 700, 900],
            'Tillana' => [400, 500, 600, 700, 800],
            'Timmana' => [400],
            'Tinos' => [400, 700],
            'Titan One' => [400],
            'Titillium Web' => [200, 300, 400, 600, 700, 900],
            'Trade Winds' => [400],
            'Trocchi' => [400],
            'Trochut' => [400, 700],
            'Trykker' => [400],
            'Tulpen One' => [400],
            'Ubuntu' => [300, 400, 500, 700],
            'Ubuntu Condensed' => [400],
            'Ubuntu Mono' => [400, 700],
            'Ultra' => [400],
            'Uncial Antiqua' => [400],
            'Underdog' => [400],
            'Unica One' => [400],
            'UnifrakturCook' => [700],
            'UnifrakturMaguntia' => [400],
            'Unkempt' => [400, 700],
            'Unlock' => [400],
            'Unna' => [400],
            'VT323' => [400],
            'Vampiro One' => [400],
            'Varela' => [400],
            'Varela Round' => [400],
            'Vast Shadow' => [400],
            'Vesper Libre' => [400, 500, 700, 900],
            'Vibur' => [400],
            'Vidaloka' => [400],
            'Viga' => [400],
            'Voces' => [400],
            'Volkhov' => [400, 700],
            'Vollkorn' => [400, 700],
            'Voltaire' => [400],
            'Waiting for the Sunrise' => [400],
            'Wallpoet' => [400],
            'Walter Turncoat' => [400],
            'Warnes' => [400],
            'Wellfleet' => [400],
            'Wendy One' => [400],
            'Wire One' => [400],
            'Work Sans' => [100, 200, 300, 400, 500, 600, 700, 800, 900],
            'Yanone Kaffeesatz' => [200, 300, 400, 700],
            'Yantramanav' => [100, 300, 400, 500, 700, 900],
            'Yellowtail' => [400],
            'Yeseva One' => [400],
            'Yesteryear' => [400],
            'Zeyada' => [400],
        ];
    }

    /**
     * Generate HTML for post categories.
     *
     * @return  string
     */
    public static function get_cat($cats = null)
    {
        $categories_list = get_the_category_list(' ');
        if ($categories_list) {
            $cats = sprintf('<div class="entry-cat oh">%1$s</div>', $categories_list);
        }
        return $cats;
    }

    /**
     * Generate HTML for post tags.
     *
     * @return  string
     */
    public static function get_tags($tags = null)
    {
        $tags_list = get_the_tag_list('', '');
        if ($tags_list) {
            $tags = sprintf('<div class="post-tags"><i class="fa fa-tags"></i> %1$s</div>', $tags_list);
        }
        return $tags;
    }

    /**
     * Generate HTML for post author.
     *
     * @return  string
     */
    public static function get_author()
    {
        return '<span class="entry-author" ' . WR_Nitro_Helper::schema_metadata(['context' => 'author', 'echo' => false]) . '><i class="fa fa-user"></i><a href="' . get_author_posts_url(get_the_author_meta('ID')) . '">' . get_the_author() . '</a></span>';
    }

    /**
     * Generate HTML for post time.
     *
     * @return  string
     */
    public static function get_posted_on()
    {
        $posted_on = sprintf(
            '<time class="published updated" datetime="%1$s" ' . self::schema_metadata(['context' => 'entry_time', 'echo' => false]) . '><a href="%2$s" rel="bookmark">%3$s</a></time>',
            esc_attr(get_the_date('c')),
            esc_url(get_permalink()),
            esc_html(get_the_date('M j, Y'))
        );

        return '<span class="entry-time"><i class="fa fa-calendar-o"></i> ' . $posted_on . '</span>';
    }

    /**
     * Get excerpt.
     *
     * @param   integer  $limit        The number of words for an excerpt.
     * @param   string   $after_limit  Read more text.
     *
     * @return  string
     */
    public static function get_excerpt($limit, $after_limit = '[...]')
    {
        $excerpt = get_the_excerpt();

        if ($excerpt != '') {
            $excerpt = explode(' ', strip_tags(strip_shortcodes($excerpt)), $limit);
        } else {
            $excerpt = explode(' ', strip_tags(strip_shortcodes(get_the_content())), $limit);
        }

        if (count($excerpt) < $limit) {
            $excerpt = implode(' ', $excerpt);
        } else {
            array_pop($excerpt);

            $excerpt = implode(' ', $excerpt) . ' ' . $after_limit;
        }

        return $excerpt;
    }

    /**
     * Generate HTML for read more tag.
     *
     * @return  string
     */
    public static function read_more()
    {
        return '<a class="more-link dt" href="' . get_permalink() . '">' . esc_html__('Read more', 'wr-nitro') . '<span class="dib ts-03">&rarr;</span></a>';
    }

    /**
     * Print HTML for post comments.
     *
     * @return  void
     */
    public static function get_comment_count()
    {
        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-number"><i class="fa fa-comments-o"></i>';

            comments_popup_link(esc_html__('0 Comment', 'wr-nitro'), esc_html__('1 Comment', 'wr-nitro'), esc_html__('% Comments', 'wr-nitro'));

            echo '</span>';
        }
    }

    /**
     * Generate HTML for embedding audio.
     *
     * @return  string
     */
    public static function audio_embed()
    {
        $format = get_post_meta(get_the_ID(), 'format_audio', true);
        $output = '';

        if ($format == 'link') {
            $output = get_post_meta(get_the_ID(), 'format_audio_url', true);
            $output = wp_oembed_get($output);
        } elseif ($format == 'file') {
            $output = get_post_meta(get_the_ID(), 'format_audio_file', true);
            $output = do_shortcode('[audio src="' . wp_get_attachment_url($output) . '"/]');
        }

        return $output;
    }

    /**
     * Generate HTML for embedding video.
     *
     * @return  string
     */
    public static function video_embed()
    {
        $format = get_post_meta(get_the_ID(), 'format_video', true);
        $output = '';

        if ($format == 'link') {
            $output = get_post_meta(get_the_ID(), 'format_video_url', true);
            $output = wp_oembed_get($output);
        } elseif ($format == 'file') {
            $output = get_post_meta(get_the_ID(), 'format_video_file', true);
            $output = do_shortcode('[video src="' . wp_get_attachment_url($output) . '"/]');
        }

        return $output;
    }

    /**
     * Get image links for creating gallery.
     *
     * @param   string/array  $size  Image size.
     *
     * @return  array
     */
    public static function gallery($size = 'full')
    {
        $images = get_post_meta(get_the_ID(), 'format_gallery', false);

        $output = [];

        foreach ($images as $id) {
            $link = wp_get_attachment_image_src($id, $size);
            $output[] = $link[0];
        }

        return $output;
    }

    /**
     * Print HTML for social share.
     *
     * @return  void
     */
    public static function social_share()
    {
        // Get post thumbnail
        $src = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full'); ?>
		<ul class="social-share pa tc">
			<li class="social-item mgb10">
				<a class="db tc br-2 color-dark nitro-line" title="Facebook" href="http://www.facebook.com/sharer.php?u=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-facebook"></i>
				</a>
			</li>
			<li class="social-item mgb10">
				<a class="db tc br-2 color-dark nitro-line" title="Twitter" href="https://twitter.com/share?url=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-twitter"></i>
				</a>
			</li>
			<li class="social-item mgb10">
				<a class="db tc br-2 color-dark nitro-line" title="Googleplus" href="https://plus.google.com/share?url=<?php esc_url(the_permalink()); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-google-plus"></i>
				</a>
			</li>
			<li class="social-item mgb10">
				<a class="db tc br-2 color-dark nitro-line" title="Pinterest" href="//pinterest.com/pin/create/button/?url=<?php esc_url(the_permalink()); ?>&media=<?php echo esc_attr($src[0]); ?>&description=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
					<i class="fa fa-pinterest"></i>
				</a>
			</li>
		</ul>

		<?php
    }

    /**
     * Print HTML for comment.
     *
     * @param   object  $comment  Comment object.
     * @param   array   $args     Arguments.
     * @param   int     $depth    Depth.
     *
     * @since 1.0
     */
    public static function comments_list($comment, $args, $depth)
    {
        // Globalize comment object.
        if (isset($GLOBALS['comment'])) {
            $_comment = $GLOBALS['comment'];
        }

        $GLOBALS['comment'] = $comment;

        // Print HTML for comment.
        switch ($comment->comment_type) {
            case 'pingback':
            case 'trackback':
                ?>
				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
					<p>
						<?php
                        _e('Pingback:', 'wr-nitro');
                        comment_author_link();
                        edit_comment_link(esc_html__('Edit', 'wr-nitro'), '<span class="edit-link">', '</span>');
                        ?>
					</p>
				<?php
            break;

            default:
                global $post;
                ?>
				<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
					<article id="comment-<?php comment_ID(); ?>" class="comment-body" <?php
                        self::schema_metadata(['context' => 'comment']);
                    ?>>
						<div class="comment-avatar">
							<?php echo get_avatar($comment, 68); ?>
						</div>
						<div class="comment-content-wrap overlay_bg">
							<?php if (0 == $comment->comment_approved) : ?>
							<p class="comment-awaiting-moderation"><?php esc_html_e('Your comment is awaiting moderation.', 'wr-nitro'); ?></p>
							<?php endif; ?>
							<header class="comment-meta">
								<cite class="comment-author" <?php
                                    self::schema_metadata(['context' => 'comment_author']);
                                ?>>
									<span <?php self::schema_metadata(['context' => 'author_name']); ?>>
										<?php comment_author_link(); ?>
									</span>
								</cite>
								<a href="<?php echo '' . get_comment_link($comment->comment_ID); ?>">
									<time <?php self::schema_metadata(['context' => 'entry_time']); ?>>
										<span> - </span>
										<?php sprintf(__('%1$s', 'wr-nitro'), comment_date()); ?>
									</time>
								</a>
							</header>
							<section class="comment-content comment" <?php self::schema_metadata(['context' => 'entry_content']); ?>>
								<?php comment_text(); ?>
							</section>
							<div class="action-link">
								<?php
                                edit_comment_link(esc_html__('Edit', 'wr-nitro'));

                                comment_reply_link(
                                    array_merge(
                                        $args,
                                        [
                                            'reply_text' => esc_html__('Reply', 'wr-nitro'),
                                            'depth' => $depth,
                                        ]
                                    )
                                );
                                ?>
							</div>
						</div>
					</article>
				</li>
				<?php
            break;
        }

        // Restore global comment object.
        if (isset($_comment)) {
            $GLOBALS['comment'] = $_comment;
        }
    }

    /**
     * Setup schema metadata.
     *
     * @param   array  $args  Arguments.
     *
     * @return  void
     */
    public static function schema_metadata($args)
    {
        // Set default arguments
        $default_args = [
            'post_type' => '',
            'context' => '',
            'echo' => true,
        ];

        $args = apply_filters('wr_theme_schema_metadata_args', wp_parse_args($args, $default_args));

        if (empty($args['context'])) {
            return;
        }

        // Markup string - stores markup output
        $markup = ' ';
        $attributes = [];

        // Try to fetch the right markup
        switch ($args['context']) {
            case 'body':
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/WebPage';
            break;

            case 'header':
                $attributes['role'] = 'banner';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/WPHeader';
            break;

            case 'nav':
                $attributes['role'] = 'navigation';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/SiteNavigationElement';
            break;

            case 'content':
                $attributes['role'] = 'main';
                $attributes['itemprop'] = 'mainContentOfPage';

                // Frontpage, Blog, Archive & Single Post
                if (is_singular('post') || is_archive() || is_home()) {
                    $attributes['itemscope'] = 'itemscope';
                    $attributes['itemtype'] = 'http://schema.org/Blog';
                }

                // Search Results Pages
                if (is_search()) {
                    $attributes['itemscope'] = 'itemscope';
                    $attributes['itemtype'] = 'http://schema.org/SearchResultsPage';
                }
            break;

            case 'entry':
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/CreativeWork';
            break;

            case 'image':
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/ImageObject';
            break;

            case 'image_url':
                $attributes['itemprop'] = 'contentURL';
            break;

            case 'name':
                $attributes['itemprop'] = 'name';
            break;

            case 'email':
                $attributes['itemprop'] = 'email';
            break;

            case 'url':
                $attributes['itemprop'] = 'url';
            break;

            case 'author':
                $attributes['itemprop'] = 'author';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/Person';
            break;

            case 'author_link':
                $attributes['itemprop'] = 'url';
            break;

            case 'author_name':
                $attributes['itemprop'] = 'name';
            break;

            case 'author_description':
                $attributes['itemprop'] = 'description';
            break;

            case 'entry_time':
                $attributes['itemprop'] = 'datePublished';
                $attributes['datetime'] = get_the_time('c');
            break;

            case 'entry_title':
                $attributes['itemprop'] = 'headline';
            break;

            case 'entry_content':
                $attributes['itemprop'] = 'text';
            break;

            case 'comment':
                $attributes['itemprop'] = 'comment';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/Comment';
            break;

            case 'comment_author':
                $attributes['itemprop'] = 'creator';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/Person';
            break;

            case 'comment_author_link':
                $attributes['itemprop'] = 'creator';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/Person';
                $attributes['rel'] = 'external nofollow';
            break;

            case 'comment_time':
                $attributes['itemprop'] = 'commentTime';
                $attributes['itemscope'] = 'itemscope';
                $attributes['datetime'] = get_the_time('c');
            break;

            case 'comment_text':
                $attributes['itemprop'] = 'commentText';
            break;

            case 'sidebar':
                $attributes['role'] = 'complementary';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/WPSideBar';
            break;

            case 'search_form':
                $attributes['itemprop'] = 'potentialAction';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/SearchAction';
            break;

            case 'footer':
                $attributes['role'] = 'contentinfo';
                $attributes['itemscope'] = 'itemscope';
                $attributes['itemtype'] = 'http://schema.org/WPFooter';
            break;
        }

        $attributes = apply_filters('wr_theme_schema_metadata_attributes', $attributes, $args);

        // If failed to fetch the attributes - let's stop
        if (empty($attributes)) {
            return;
        }

        // Cycle through attributes, build tag attribute string
        foreach ($attributes as $key => $value) {
            $markup .= $key . '="' . $value . '" ';
        }

        $markup = apply_filters('wr_theme_schema_metadata_output', $markup, $args);

        if ($args['echo']) {
            echo '' . $markup;
        } else {
            return $markup;
        }
    }

    /**
     * Print HTML for pagination.
     *
     * @param   object  $nav_query  Query object for retrieving navigation.
     *
     * @return  void
     */
    public static function pagination($nav_query = false)
    {
        global $wp_query, $wp_rewrite;

        $wr_nitro_options = WR_Nitro::get_options();

        // Don't print empty markup if there's only one page.
        if ($wp_query->max_num_pages < 2) {
            return;
        }

        // Get pagination style
        $style = $wr_nitro_options['pagination_style'];

        // Right to left
        $rtl = $wr_nitro_options['rtl'];
        if ($rtl) {
            $icon_left = '<i class="fa fa-long-arrow-right"></i>';
            $icon_right = '<i class="fa fa-long-arrow-left"></i>';
        } else {
            $icon_left = '<i class="fa fa-long-arrow-left"></i>';
            $icon_right = '<i class="fa fa-long-arrow-right"></i>';
        }

        // Prepare variables.
        $query = $nav_query ? $nav_query : $wp_query;
        $max = $query->max_num_pages;
        $current_page = max(1, get_query_var('paged'));
        $big = 999999; ?>
		<nav class="pagination tc pdb30 <?php echo esc_attr($style) . ' ' . (is_customize_preview() ? 'customizable customize-section-pagination ' : ''); ?>" role="navigation">
			<?php
            echo '' . paginate_links(
            [
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => $current_page,
                'total' => $max,
                'type' => 'list',
                'prev_text' => $icon_left,
                'next_text' => $icon_right,
            ]
        ) . ' '; ?>
		</nav>
		<?php
    }

    /**
     * Print HTML for page title.
     *
     * @return  void
     */
    public static function page_title()
    {
        $wr_nitro_options = WR_Nitro::get_options();

        if (is_home() && get_option('page_for_posts')) {
            echo get_the_title(get_option('page_for_posts', true));
        } elseif (is_home()) {
            esc_html_e('Home', 'wr-nitro');
        } elseif (function_exists('is_shop') && is_shop() && $wr_nitro_options['wc_archive_page_title']) {
            echo esc_html($wr_nitro_options['wc_archive_page_title_content'], 'wr-nitro');
        } elseif (function_exists('is_product_category') && is_product_category()) {
            echo single_cat_title();
        } elseif (function_exists('is_product_tag') && is_product_tag()) {
            echo single_tag_title();
        } elseif (is_post_type_archive('nitro-gallery')) {
            echo esc_html($wr_nitro_options['gallery_archive_title'], 'wr-nitro');
        } elseif (is_post_type_archive()) {
            post_type_archive_title();
        } elseif (is_tax()) {
            single_term_title();
        } elseif (is_category()) {
            echo single_cat_title('', false);
        } elseif (is_archive()) {
            echo the_archive_title();
        } elseif (is_search()) {
            esc_html_e('Search Results', 'wr-nitro');
        } else {
            the_title();
        }
    }

    /**
     * Get all registered sidebars.
     *
     * @return  array
     */
    public static function get_sidebars()
    {
        global $wp_registered_sidebars;

        // Get custom sidebars.
        $custom_sidebars = get_option('wr_theme_sidebars');

        // Prepare output.
        $output = [];

        if (is_customize_preview()) {
            $output[] = esc_html__('-- Select Sidebar --', 'wr-nitro');
        }

        if (!empty($wp_registered_sidebars)) {
            foreach ($wp_registered_sidebars as $sidebar) {
                $output[$sidebar['id']] = $sidebar['name'];
            }
        }

        if (!empty($custom_sidebars)) {
            foreach ($custom_sidebars as $sidebar) {
                $output[$sidebar['id']] = $sidebar['name'];
            }
        }

        return $output;
    }

    /**
     * Handles the post date column output.
     *
     * @param   object  $post  The current WP_Post object.
     *
     * @param   bool  $now 	Show time diff when use in ajax action.
     *
     * @return  string
     */
    public static function format_column_date($post, $now = false)
    {
        global $mode;

        if ('0000-00-00 00:00:00' == $post->post_date) {
            $t_time = $h_time = __('Unpublished', 'wr-nitro');
            $time_diff = 0;
        } else {
            $t_time = get_the_time('Y/m/d g:i:s a');
            $m_time = $post->post_date;
            $time = get_post_time('G', true, $post);

            $time_diff = time() - $time;

            if (($time_diff > 0 && $time_diff < DAY_IN_SECONDS) || $now) {
                $h_time = sprintf(__('%s ago', 'wr-nitro'), human_time_diff($time));
            } else {
                $h_time = mysql2date('Y/m/d', $m_time);
            }
        }

        if ('excerpt' == $mode) {
            return apply_filters('post_date_column_time', $t_time, $post, 'date', $mode);
        } else {
            return '<abbr title="' . $t_time . '">' . apply_filters('post_date_column_time', $h_time, $post, 'date', $mode) . '</abbr>';
        }
    }

    /**
     * Merge elements from passed arrays into the first array recursively.
     *
     * @param   array  $array1  The base array..
     * @param   array  $array2  Array to merge into the base array.
     *
     * @return  array
     */
    public static function array_merge_recursive($array1, $array2)
    {
        // Check if the function 'array_merge_recursive' of PHP is available.
        if (function_exists('array_merge_recursive')) {
            return call_user_func_array('array_merge_recursive', func_get_args());
        }

        // Get all arguments passed to the function.
        $args = func_get_args();
        $base = array_shift($args);

        if (!is_array($base)) {
            return $base;
        }

        // Merge elements from other arrays to the first array.
        foreach ($args as $array) {
            foreach ($array as $k => $v) {
                if (is_int($k)) {
                    $base[] = $v;
                } else {
                    if (array_key_exists($k, $base)) {
                        if (!is_array($base[$k]) && !is_array($v)) {
                            $base[$k] = $v;
                        } else {
                            $base[$k] = self::array_merge_recursive($base[$k], $v);
                        }
                    }
                }
            }
        }

        return $base;
    }

    /**
     * Replaces elements from passed arrays into the first array recursively.
     *
     * @param   array  $array Array base
     *
     * @param   array  $array Array replacements
     *
     * @return  array
     */
    public static function array_replace_recursive($array, $array1)
    {
        // Handle the arguments, merge one by one
        $args = func_get_args();
        $array = $args[0];
        if (!is_array($array)) {
            return $array;
        }
        for ($i = 1; $i < count($args); $i++) {
            if (is_array($args[$i])) {
                $array = self::recurse($array, $args[$i]);
            }
        }
        return $array;
    }

    public static function recurse($array, $array1)
    {
        foreach ($array1 as $key => $value) {
            // Create new key in $array, if it is empty or not an array
            if (!isset($array[$key]) || (isset($array[$key]) && !is_array($array[$key]))) {
                $array[$key] = [];
            }

            // Overwrite the value in the base array
            if (is_array($value)) {
                $value = self::recurse($array[$key], $value);
            }
            $array[$key] = $value;
        }
        return $array;
    }

    /**
     * Check Gravityforms attach on product
     *
     * @param   number  $product_id
     *
     * @return  array
     */
    public static function check_gravityforms($product_id)
    {
        $active_plugin = (is_plugin_active('gravityforms/gravityforms.php') && is_plugin_active('woocommerce-gravityforms-product-addons/gravityforms-product-addons.php')) ? true : false;

        if (!$active_plugin) {
            return false;
        }

        $gravity_form_data = apply_filters('woocommerce_gforms_get_product_form_data', get_post_meta($product_id, '_gravity_form_data', true), $product_id);

        if (!empty($gravity_form_data['id'])) {
            global $wpdb;

            $gravity_id = intval($gravity_form_data['id']);
            $check_active = $wpdb->get_var('SELECT COUNT(*) FROM ' . $wpdb->prefix . "rg_form WHERE id={$gravity_id} AND is_active=1 AND is_trash=0");

            if ($check_active == 1) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check YITH WooCommerce Product Add-Ons attach on product
     *
     * @param   number  $product_id
     *
     * @return  array
     */
    public static function yith_wc_product_add_ons($product_id)
    {
        $active_plugin = is_plugin_active('yith-woocommerce-product-add-ons/init.php') ? true : false;

        if (!$active_plugin) {
            return false;
        }

        $product = wc_get_product($product_id);

        if (is_object($product) && $product->get_id() > 0) {
            $product_type_list = YITH_WAPO::getAllowedProductTypes();

            if (in_array($product->get_type(), $product_type_list)) {
                $types_list = YITH_WAPO_Type::getAllowedGroupTypes($product->get_id());

                if (!empty($types_list)) {
                    return true;
                }
            }
        }

        return false;
    }

    /**
     * Check YITH WooCommerce Product Add-Ons attach on product
     *
     * @param   number  $product_id
     *
     * @return  array
     */
    public static function wc_measurement_price_calculator($product_id)
    {
        $active_plugin = is_plugin_active('woocommerce-measurement-price-calculator/woocommerce-measurement-price-calculator.php') ? true : false;

        if (!$active_plugin) {
            return false;
        }

        $product = wc_get_product($product_id);

        if (WC_Price_Calculator_Product::pricing_calculator_enabled($product)) {
            return true;
        }

        return false;
    }

    /**
     * Check WC Fields Factory attach on product
     *
     * @param   number  $product_id
     *
     * @return  array
     */
    public static function wc_fields_factory($product_id)
    {
        $active_plugin = is_plugin_active('wc-fields-factory/wcff.php') ? true : false;

        if (!$active_plugin) {
            return false;
        }

        $all_fields = apply_filters('wcff/load/all_fields', $product_id, 'wccpf');

        if ($all_fields) {
            return true;
        }

        return false;
    }

    /**
     * Get wp-content folder
     *
     * @return  string
     */
    public static function wp_content()
    {
        $wp_content_dir_array = explode('/', WP_CONTENT_DIR);
        return end($wp_content_dir_array);
    }

    /**
     * A variable buffer when add font to list google fonts.
     *
     * @var  string
     */
    public static $add_google_font;

    /**
     * Add font to list url google fonts.
     *
     * @param $list_fonts array()
     *
     * @return  void
     */
    public static function add_google_font($list_fonts)
    {
        if ($list_fonts) {
            foreach ($list_fonts as $font_name => $font_weights) {
                self::$add_google_font[$font_name] = isset(self::$add_google_font[$font_name]) ? array_unique(array_merge(self::$add_google_font[$font_name], $font_weights)) : $font_weights;
            }
        }
    }

    /**
     * Add font to list url google fonts in filter wr_font_url.
     *
     * @param $list_fonts array()
     *
     * @return  array
     */
    public static function filter_google_font($list_fonts)
    {
        if (self::$add_google_font) {
            foreach (self::$add_google_font as $font_name => $font_weight) {
                $list_fonts[$font_name] = isset($list_fonts[$font_name]) ? array_unique(array_merge($list_fonts[$font_name], $font_weight)) : $font_weight;
            }
        }

        return $list_fonts;
    }

    /**
     * Remove action
     *
     * @return  array()
     */
    public static function remove_action($action, $class, $priority)
    {
        global $wp_filter;
        if (!empty($wp_filter[$action]->callbacks[$priority])) {
            foreach ($wp_filter[$action]->callbacks[$priority] as $key => $val) {
                if (!empty($val['function'][0]) && !empty($val['function'][1]) && is_object($val['function'][0]) && get_class($val['function'][0]) == $class[0] && $val['function'][1] == $class[1]) {
                    if (count($wp_filter[$action]->callbacks[$priority]) == 1) {
                        unset($wp_filter[$action]->callbacks[$priority]);
                    } else {
                        unset($wp_filter[$action]->callbacks[$priority][$key]);
                    }
                }
            }
        }
    }

    public static function set_term_recursive($term_item, &$list_category_children_along, $all_terms)
    {
        foreach ($all_terms as $key => $val) {
            if ($val->parent == $term_item->term_id) {
                $val->level = $term_item->level + 1;
                $list_category_children_along[] = $val;

                // Call recursive.
                self::set_term_recursive($val, $list_category_children_along, $all_terms);
            }
        }
    }
}
