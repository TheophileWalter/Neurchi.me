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

$OssnComponents = new OssnComponents;

$metaseitenname = input('metaseitenname');
$metaseitenbeschreibung = input('metaseitenbeschreibung');
$metaautor = input('metaautor');
$metacopyright = input('metacopyright');
$metakeywords = input('metakeywords');
$metarobots = input('metarobots');
$metagooglesiteverification = input('metagooglesiteverification');

$twittercard = input('twittercard');
$twitterimage = input('twitterimage');
$twitterimagealt = input('twitterimagealt');
$twitterseitentitel = input('twitterseitentitel');
$twitterdescription = input('twitterdescription');

$ogseitenurl = input('ogseitenurl');
$ogseitenname = input('ogseitenname');
$ogseitenbeschreibung = input('ogseitenbeschreibung');
$ogsprache = input('ogsprache');
$ogseitentyp = input('ogseitentyp');
$ogimage = input('ogimage');
$ogimagehttps = input('ogimagehttps');
$ogimagebreite = input('ogimagebreite');
$ogimagehoehe = input('ogimagehoehe');
$ogimagealt = input('ogimagealt');
$fbappid = input('fbappid');

$array = array('metaseitenname'=>$metaseitenname,'metaseitenbeschreibung'=>$metaseitenbeschreibung,'metaautor'=>$metaautor,'metacopyright'=>$metacopyright,'metakeywords'=>$metakeywords,'metarobots'=>$metarobots,'metagooglesiteverification'=>$metagooglesiteverification,'twittercard'=>$twittercard,'twitterimage'=>$twitterimage,'twitterimagealt'=>$twitterimagealt,'twitterimagedescription'=>$twitterimagedescription,'twitterseitentitel'=>$twitterseitentitel,'twitterdescription'=>$twitterdescription,'ogseitenurl'=>$ogseitenurl,'ogseitenname'=>$ogseitenname,'ogseitenbeschreibung'=>$ogseitenbeschreibung,'ogsprache'=>$ogsprache,'ogseitentyp'=>$ogseitentyp,'ogimage'=>$ogimage,'ogimagehttps'=>$ogimagehttps,'ogimagebreite'=>$ogimagebreite,'ogimagehoehe'=>$ogimagehoehe,'ogimagealt'=>$ogimagealt,'fbappid'=>$fbappid,);
foreach ($array as $key=>$value){
$success = $OssnComponents->setComSETTINGS('SEO', $key, $value);
}
if($success){
    ossn_trigger_message(ossn_print('seosenden:ok'));
    redirect(REF);
} else {
    ossn_trigger_message('seosenden:nichtok', 'error');
    redirect(REF);
}



