<?php
/**
 * Open Source Social Network
 *
 * @package	SEO Component
 * @author    	Daniel Teich <dnlteich86@gmail.com>
 * @copyright	Component SEO 2019 by Daniel Teich
 * @license  	General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link    		http://www.opensource-socialnetwork.org/
 */
 
$settings = new OssnComponents;
$settings = $settings->getComSettings('SEO');

/** Allgemeine Meta Daten */

$metaseitenname = $settings->metaseitenname;
$metaseitenbeschreibung = $settings->metaseitenbeschreibung;
$metaautor = $settings->metaautor;
$metakeywords = $settings->metakeywords;
$metacopyright = $settings->metacopyright;
$metarobots = $settings->metarobots;
$metagooglesiteverification = $settings->metagooglesiteverification;

/** Spezielle Meta Daten für Twitter */

$twittercard = $settings->twittercard;
$twitterimage = $settings->twitterimage;
$twitterimagealt = $settings->twitterimagealt;
$twitterseitentitel = $settings->twitterseitentitel;
$twitterdescription = $settings->twitterdescription;

/** Open Graph Daten */

$ogseitenurl = $settings->ogseitenurl;
$ogseitenname = $settings->ogseitenname;
$ogseitenbeschreibung = $settings->ogseitenbeschreibung;
$ogsprache = $settings->ogsprache;
$ogseitentyp = $settings->ogseitentyp;
$ogimage = $settings->ogimage;
$ogimagehttps = $settings->ogimagehttps;
$ogimagebreite = $settings->ogimagebreite;
$ogimagehoehe = $settings->ogimagehoehe;
$ogimagealt = $settings->ogimagealt;
$fbappid = $settings->fbappid;

?>
<meta name="title" content="<?php echo $metaseitenname ?>" />
<meta name="description" content="<?php echo $metaseitenbeschreibung ?>" />
<meta name="author" content="<?php echo $metaautor ?>" />
<meta name="copyright" content="<?php echo $metacopyright ?>" />
<meta name="keywords" content="<?php echo $metarobots ?>" />
<meta name="robots" content="<?php echo $metarobots ?>" />
<meta name="google-site-verification" content="<?php echo $metagooglesiteverification ?>" />
<meta name="twitter:card" content="<?php echo $twittercard ?>" />
<meta name="twitter:image" content="<?php echo $twitterimage ?>" />
<meta name="twitter:image:alt" content="<?php echo $twitterimagealt ?>" />
<meta name="twitter:title" content="<?php echo $twitterseitentitel ?>" />
<meta name="twitter:description" content="<?php echo $twitterdescription ?>" />
<meta property="og:url" content="<?php echo $ogseitenurl ?>" />
<meta property="og:title" content="<?php echo $ogseitenname ?>" />
<meta property="og:description" content="<?php echo $ogseitenbeschreibung ?>" />
<meta property="og:locale" content="<?php echo $ogsprache ?>" />
<meta property="og:type" content="<?php echo $ogseitentyp ?>" />
<meta property="og:image" content="<?php echo $ogimage ?>" />
<meta property="og:image:secure_url" content="<?php echo $ogimagehttps ?>" />
<meta property="og:image:width" content="<?php echo $ogimagebreite ?>" />
<meta property="og:image:height" content="<?php echo $ogimagehoehe ?>" />
<meta property="og:image:alt" content="<?php echo $ogimagealt ?>" />
<meta property="fb:app_id" content="<?php echo $fbappid ?>" />
