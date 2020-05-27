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

echo empty($metaseitenname) ? '' : "<meta name=\"title\" content=\"$metaseitenname\" />\n";
echo empty($metaseitenbeschreibung) ? '' : "<meta name=\"description\" content=\"$metaseitenbeschreibung\" />\n";
echo empty($metaautor) ? '' : "<meta name=\"author\" content=\"$metaautor\" />\n";
echo empty($metacopyright) ? '' : "<meta name=\"copyright\" content=\"$metacopyright\" />\n";
echo empty($metakeywords) ? '' : "<meta name=\"keywords\" content=\"$metakeywords\" />\n";
echo empty($metarobots) ? '' : "<meta name=\"robots\" content=\"$metarobots\" />\n";
echo empty($metagooglesiteverification) ? '' : "<meta name=\"google-site-verification\" content=\"$metagooglesiteverification\" />\n";
echo empty($twittercard) ? '' : "<meta name=\"twitter:card\" content=\"$twittercard\" />\n";
echo empty($twitterimage) ? '' : "<meta name=\"twitter:image\" content=\"$twitterimage\" />\n";
echo empty($twitterimagealt) ? '' : "<meta name=\"twitter:image:alt\" content=\"$twitterimagealt\" />\n";
echo empty($twitterseitentitel) ? '' : "<meta name=\"twitter:title\" content=\"$twitterseitentitel\" />\n";
echo empty($twitterdescription) ? '' : "<meta name=\"twitter:description\" content=\"$twitterdescription\" />\n";
echo empty($ogseitenurl) ? '' : "<meta property=\"og:url\" content=\"$ogseitenurl\" />\n";
echo empty($ogseitenname) ? '' : "<meta property=\"og:title\" content=\"$ogseitenname\" />\n";
echo empty($ogseitenbeschreibung) ? '' : "<meta property=\"og:description\" content=\"$ogseitenbeschreibung\" />\n";
echo empty($ogsprache) ? '' : "<meta property=\"og:locale\" content=\"$ogsprache\" />\n";
echo empty($ogseitentyp) ? '' : "<meta property=\"og:type\" content=\"$ogseitentyp\" />\n";
echo empty($ogimage) ? '' : "<meta property=\"og:image\" content=\"$ogimage\" />\n";
echo empty($ogimagehttps) ? '' : "<meta property=\"og:image:secure_url\" content=\"$ogimagehttps\" />\n";
echo empty($ogimagebreite) ? '' : "<meta property=\"og:image:width\" content=\"$ogimagebreite\" />\n";
echo empty($ogimagehoehe) ? '' : "<meta property=\"og:image:height\" content=\"$ogimagehoehe\" />\n";
echo empty($ogimagealt) ? '' : "<meta property=\"og:image:alt\" content=\"$ogimagealt\" />\n";
echo empty($fbappid) ? '' : "<meta property=\"fb:app_id\" content=\"$fbappid\" />\n";
