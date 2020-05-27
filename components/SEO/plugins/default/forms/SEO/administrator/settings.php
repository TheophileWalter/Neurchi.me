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
 
?>
<br>
<label><?php echo ossn_print('seocomponent:name');?></label>
<br>
<br>
<label><?php echo ossn_print('meta:seitenname');?></label>
<input type="text" name="metaseitenname" value="<?php echo $params['settings']->metaseitenname;?>"/>
<label><?php echo ossn_print('meta:seitenbeschreibung');?></label>
<input type="text" name="metaseitenbeschreibung" value="<?php echo $params['settings']->metaseitenbeschreibung;?>"/>
<label><?php echo ossn_print('meta:autor');?></label>
<input type="text" name="metaautor" value="<?php echo $params['settings']->metaautor;?>"/><label>
<?php echo ossn_print('meta:keywords');?></label>
<input type="text" name="metakeywords" value="<?php echo $params['settings']->metakeywords;?>"/>
<label><?php echo ossn_print('meta:copyright');?></label>
<input type="text" name="metacopyright" value="<?php echo $params['settings']->metacopyright;?>"/>
<label><?php echo ossn_print('meta:robots');?></label>
<input type="text" name="metarobots" value="<?php echo $params['settings']->metarobots;?>"/>
<label><?php echo ossn_print('meta:googlesiteverification');?></label>
<input type="text" name="metagooglesiteverification" value="<?php echo $params['settings']->metagooglesiteverification;?>"/>
<br>
<hr>
<br>
<label><?php echo ossn_print('twitter:card');?></label>
<select name="twittercard">
 	<?php
	$component = new OssnComponents;
	$settings = $component->getComSettings('SEO');
	$twittercard_1 = ''; $twittercard_2 = ''; $twittercard_3 = ''; $twittercard_4 = ''; $twittercard_5 = '';
	if($settings && $settings->twittercard == ''){
		$twittercard_1 = 'selected';
	} else if($settings && $settings->twittercard == 'summary'){
		$twittercard_2 = 'selected';
	} else if($settings && $settings->twittercard == 'summary_large_image'){
		$twittercard_3 = 'selected';
	} else if($settings && $settings->twittercard == 'app'){
		$twittercard_4 = 'selected';
	} else if($settings && $settings->twittercard == 'players'){
		$twittercard_5 = 'selected';
	}
	?>
	<option value="" <?php echo $twittercard_1;?>><?php echo ossn_print('dropdown:auswahl');?></option>
 	<option value="summary" <?php echo $twittercard_2;?>>summary</option>
    <option value="summary_large_image" <?php echo $twittercard_3;?>>summary_large_image</option>
    <option value="app" <?php echo $twittercard_4;?>>app</option>
    <option value="players" <?php echo $twittercard_5;?>>players</option>
 </select>
<label><?php echo ossn_print('twitter:image');?></label>
<input type="text" name="twitterimage" value="<?php echo $params['settings']->twitterimage;?>"/>
<label><?php echo ossn_print('twitter:imagealt');?></label>
<input type="text" name="twitterimagealt" value="<?php echo $params['settings']->twitterimagealt;?>"/>
<label><?php echo ossn_print('twitter:seitentitel');?></label>
<input type="text" name="twitterseitentitel" value="<?php echo $params['settings']->twitterseitentitel;?>"/>
<label><?php echo ossn_print('twitter:description');?></label>
<input type="text" name="twitterdescription" value="<?php echo $params['settings']->twitterdescription;?>"/>
<br>
<hr>
<br>
<label><?php echo ossn_print('opengraph:seitenurl');?></label>
<input type="text" name="ogseitenurl" value="<?php echo $params['settings']->ogseitenurl;?>"/>
<label><?php echo ossn_print('opengraph:seitenname');?></label>
<input type="text" name="ogseitenname" value="<?php echo $params['settings']->ogseitenname;?>"/>
<label><?php echo ossn_print('opengraph:seitenbeschreibung');?></label>
<input type="text" name="ogseitenbeschreibung" value="<?php echo $params['settings']->ogseitenbeschreibung;?>"/>
<label><?php echo ossn_print('opengraph:sprache');?></label>
<select name="ogsprache">
<?php
	$component = new OssnComponents;
	$settings = $component->getComSettings('SEO');
	$ogsprache_1 = ''; $ogsprache_2 = ''; $ogsprache_3 = ''; $ogsprache_4 = ''; $ogsprache_5 = ''; $ogsprache_6 = ''; $ogsprache_7 = ''; $ogsprache_8 = ''; $ogsprache_9 = '';
	$ogsprache_10 = ''; $ogsprache_11 = ''; $ogsprache_12 = ''; $ogsprache_13 = ''; $ogsprache_14 = ''; $ogsprache_15 = ''; $ogsprache_16 = ''; $ogsprache_17 = ''; $ogsprache_18 = '';
	$ogsprache_19 = ''; $ogsprache_20 = ''; $ogsprache_21 = ''; $ogsprache_22 = ''; $ogsprache_23 = ''; $ogsprache_24 = ''; $ogsprache_25 = ''; $ogsprache_26 = ''; $ogsprache_27 = '';
	$ogsprache_28 = ''; $ogsprache_29 = ''; $ogsprache_30 = ''; $ogsprache_31 = ''; $ogsprache_32 = ''; $ogsprache_33 = ''; $ogsprache_34 = ''; $ogsprache_35 = ''; $ogsprache_36 = '';
	$ogsprache_37 = ''; $ogsprache_38 = ''; $ogsprache_39 = ''; $ogsprache_40 = ''; $ogsprache_41 = ''; $ogsprache_42 = ''; $ogsprache_43 = ''; $ogsprache_44 = ''; $ogsprache_45 = '';
	$ogsprache_46 = ''; $ogsprache_47 = ''; $ogsprache_48 = ''; $ogsprache_49 = ''; $ogsprache_50 = ''; $ogsprache_51 = ''; $ogsprache_52 = ''; $ogsprache_53 = ''; $ogsprache_54 = '';
	$ogsprache_55 = ''; $ogsprache_56 = ''; $ogsprache_57 = ''; $ogsprache_58 = ''; $ogsprache_59 = ''; $ogsprache_60 = ''; $ogsprache_61 = ''; $ogsprache_62 = ''; $ogsprache_63 = '';
	$ogsprache_64 = ''; $ogsprache_65 = ''; $ogsprache_66 = ''; $ogsprache_67 = ''; $ogsprache_68 = ''; $ogsprache_69 = ''; $ogsprache_70 = ''; $ogsprache_71 = ''; $ogsprache_72 = '';
	$ogsprache_73 = ''; $ogsprache_74 = '';
	if($settings && $settings->ogsprache == ''){
		$ogsprache_1 = 'selected';
	} else if($settings && $settings->ogsprache == 'af_ZA'){
		$ogsprache_2 = 'selected';
	} else if($settings && $settings->ogsprache == 'ar_AR'){
		$ogsprache_3 = 'selected';
	} else if($settings && $settings->ogsprache == 'az_AZ'){
		$ogsprache_4 = 'selected';
	} else if($settings && $settings->ogsprache == 'be_BY'){
		$ogsprache_5 = 'selected';
	} else if($settings && $settings->ogsprache == 'bg_BG'){
		$ogsprache_6 = 'selected';
	} else if($settings && $settings->ogsprache == 'bn_IN'){
		$ogsprache_7 = 'selected';
	} else if($settings && $settings->ogsprache == 'bs_BA'){
		$ogsprache_8 = 'selected';
	} else if($settings && $settings->ogsprache == 'ca_ES'){
		$ogsprache_9 = 'selected';
	} else if($settings && $settings->ogsprache == 'cs_CZ'){
		$ogsprache_10 = 'selected';
	} else if($settings && $settings->ogsprache == 'cy_GB'){
		$ogsprache_11 = 'selected';
	} else if($settings && $settings->ogsprache == 'da_DK'){
		$ogsprache_12 = 'selected';
	} else if($settings && $settings->ogsprache == 'de_DE'){
		$ogsprache_13 = 'selected';
	} else if($settings && $settings->ogsprache == 'el_GR'){
		$ogsprache_14 = 'selected';
	} else if($settings && $settings->ogsprache == 'en_GB'){
		$ogsprache_15 = 'selected';
	} else if($settings && $settings->ogsprache == 'en_US'){
		$ogsprache_16 = 'selected';
	} else if($settings && $settings->ogsprache == 'eo_EO'){
		$ogsprache_17 = 'selected';
	} else if($settings && $settings->ogsprache == 'es_ES'){
		$ogsprache_18 = 'selected';
	} else if($settings && $settings->ogsprache == 'et_EE'){
		$ogsprache_19 = 'selected';
	} else if($settings && $settings->ogsprache == 'eu_ES'){
		$ogsprache_20 = 'selected';
	} else if($settings && $settings->ogsprache == 'fa_IR'){
		$ogsprache_21 = 'selected';
	} else if($settings && $settings->ogsprache == 'fi_FI'){
		$ogsprache_22 = 'selected';
	} else if($settings && $settings->ogsprache == 'fo_FO'){
		$ogsprache_23 = 'selected';
	} else if($settings && $settings->ogsprache == 'fr_CA'){
		$ogsprache_24 = 'selected';
	} else if($settings && $settings->ogsprache == 'fr_FR'){
		$ogsprache_25 = 'selected';
	} else if($settings && $settings->ogsprache == 'fy_NL'){
		$ogsprache_26 = 'selected';
	} else if($settings && $settings->ogsprache == 'ga_IE'){
		$ogsprache_27 = 'selected';
	} else if($settings && $settings->ogsprache == 'gl_ES'){
		$ogsprache_28 = 'selected';
	} else if($settings && $settings->ogsprache == 'he_IL'){
		$ogsprache_29 = 'selected';
	} else if($settings && $settings->ogsprache == 'hi_IN'){
		$ogsprache_30 = 'selected';
	} else if($settings && $settings->ogsprache == 'hr_HR'){
		$ogsprache_31 = 'selected';
	} else if($settings && $settings->ogsprache == 'hu_HU'){
		$ogsprache_32 = 'selected';
	} else if($settings && $settings->ogsprache == 'hy_AM'){
		$ogsprache_33 = 'selected';
	} else if($settings && $settings->ogsprache == 'id_ID'){
		$ogsprache_34 = 'selected';
	} else if($settings && $settings->ogsprache == 'is_IS'){
		$ogsprache_35 = 'selected';
	} else if($settings && $settings->ogsprache == 'it_IT'){
		$ogsprache_36 = 'selected';
	} else if($settings && $settings->ogsprache == 'ja_JP'){
		$ogsprache_37 = 'selected';
	} else if($settings && $settings->ogsprache == 'ka_GE'){
		$ogsprache_38 = 'selected';
	} else if($settings && $settings->ogsprache == 'km_KH'){
		$ogsprache_39 = 'selected';
	} else if($settings && $settings->ogsprache == 'ko_KR'){
		$ogsprache_40 = 'selected';
	} else if($settings && $settings->ogsprache == 'ku_TR'){
		$ogsprache_41 = 'selected';
	} else if($settings && $settings->ogsprache == 'la_VA'){
		$ogsprache_42 = 'selected';
	} else if($settings && $settings->ogsprache == 'lt_LT'){
		$ogsprache_43 = 'selected';
	} else if($settings && $settings->ogsprache == 'lv_LV'){
		$ogsprache_44 = 'selected';
	} else if($settings && $settings->ogsprache == 'mk_MK'){
		$ogsprache_45 = 'selected';
	} else if($settings && $settings->ogsprache == 'ml_IN'){
		$ogsprache_46 = 'selected';
	} else if($settings && $settings->ogsprache == 'ms_MY'){
		$ogsprache_47 = 'selected';
	} else if($settings && $settings->ogsprache == 'nb_NO'){
		$ogsprache_48 = 'selected';
	} else if($settings && $settings->ogsprache == 'ne_NP'){
		$ogsprache_49 = 'selected';
	} else if($settings && $settings->ogsprache == 'nl_NL'){
		$ogsprache_50 = 'selected';
	} else if($settings && $settings->ogsprache == 'nn_NO'){
		$ogsprache_51 = 'selected';
	} else if($settings && $settings->ogsprache == 'pa_IN'){
		$ogsprache_52 = 'selected';
	} else if($settings && $settings->ogsprache == 'pl_PL'){
		$ogsprache_53 = 'selected';
	} else if($settings && $settings->ogsprache == 'ps_AF'){
		$ogsprache_54 = 'selected';
	} else if($settings && $settings->ogsprache == 'pt_BR'){
		$ogsprache_55 = 'selected';
	} else if($settings && $settings->ogsprache == 'pt_PT'){
		$ogsprache_56 = 'selected';
	} else if($settings && $settings->ogsprache == 'ro_RO'){
		$ogsprache_57 = 'selected';
	} else if($settings && $settings->ogsprache == 'ru_RU'){
		$ogsprache_58 = 'selected';
	} else if($settings && $settings->ogsprache == 'sk_SK'){
		$ogsprache_59 = 'selected';
	} else if($settings && $settings->ogsprache == 'sl_SI'){
		$ogsprache_60 = 'selected';
	} else if($settings && $settings->ogsprache == 'sq_AL'){
		$ogsprache_61 = 'selected';
	} else if($settings && $settings->ogsprache == 'sr_RS'){
		$ogsprache_62 = 'selected';
	} else if($settings && $settings->ogsprache == 'sv_SE'){
		$ogsprache_63 = 'selected';
	} else if($settings && $settings->ogsprache == 'sw_KE'){
		$ogsprache_64 = 'selected';
	} else if($settings && $settings->ogsprache == 'ta_IN'){
		$ogsprache_65 = 'selected';
	} else if($settings && $settings->ogsprache == 'te_IN'){
		$ogsprache_66 = 'selected';
	} else if($settings && $settings->ogsprache == 'th_TH'){
		$ogsprache_67 = 'selected';
	} else if($settings && $settings->ogsprache == 'tl_PH'){
		$ogsprache_68 = 'selected';
	} else if($settings && $settings->ogsprache == 'tr_TR'){
		$ogsprache_69 = 'selected';
	} else if($settings && $settings->ogsprache == 'uk_UA'){
		$ogsprache_70 = 'selected';
	} else if($settings && $settings->ogsprache == 'vi_VN'){
		$ogsprache_71 = 'selected';
	} else if($settings && $settings->ogsprache == 'zh_CN'){
		$ogsprache_72 = 'selected';
	} else if($settings && $settings->ogsprache == 'zh_HK'){
		$ogsprache_73 = 'selected';
	} else if($settings && $settings->ogsprache == 'zh_TW'){
		$ogsprache_74 = 'selected';
	}
	?>
	<option value="" <?php echo $ogsprache_1;?>><?php echo ossn_print('dropdown:auswahl');?></option>
 	<option value="af_ZA" <?php echo $ogsprache_2;?>>af_ZA - Afrikaans</option>
    <option value="ar_AR" <?php echo $ogsprache_3;?>>ar_AR - Arabic</option>
    <option value="az_AZ" <?php echo $ogsprache_4;?>>az_AZ - Azerbaijani</option>
    <option value="be_BY" <?php echo $ogsprache_5;?>>be_BY - Belarusian</option>
    <option value="bg_BG" <?php echo $ogsprache_6;?>>bg_BG - Bulgarian</option>
    <option value="bn_IN" <?php echo $ogsprache_7;?>>bn_IN - Bengali</option>
    <option value="bs_BA" <?php echo $ogsprache_8;?>>bs_BA - Bosnian</option>
    <option value="ca_ES" <?php echo $ogsprache_9;?>>ca_ES - Catalan</option>
    <option value="cs_CZ" <?php echo $ogsprache_10;?>>cs_CZ - Czech</option>
    <option value="cy_GB" <?php echo $ogsprache_11;?>>cy_GB - Welsh</option>
    <option value="da_DK" <?php echo $ogsprache_12;?>>da_DK - Danish</option>
    <option value="de_DE" <?php echo $ogsprache_13;?>>de_DE - German</option>
    <option value="el_GR" <?php echo $ogsprache_14;?>>el_GR - Greek</option>
    <option value="en_GB" <?php echo $ogsprache_15;?>>en_GB - English UK</option>
    <option value="en_US" <?php echo $ogsprache_16;?>>en_US - English US</option>
    <option value="eo_EO" <?php echo $ogsprache_17;?>>eo_EO - Esperanto</option>
    <option value="es_ES" <?php echo $ogsprache_18;?>>es_ES - Spanish</option>
    <option value="et_EE" <?php echo $ogsprache_19;?>>et_EE - Estonian</option>
    <option value="eu_ES" <?php echo $ogsprache_20;?>>eu_ES - Basque</option>
    <option value="fa_IR" <?php echo $ogsprache_21;?>>fa_IR - Persian</option>
    <option value="fi_FI" <?php echo $ogsprache_22;?>>fi_FI - Finnish</option>
    <option value="fo_FO" <?php echo $ogsprache_23;?>>fo_FO - Faroese</option>
    <option value="fr_CA" <?php echo $ogsprache_24;?>>fr_CA - French Canada</option>
    <option value="fr_FR" <?php echo $ogsprache_25;?>>fr_FR - French</option>
    <option value="fy_NL" <?php echo $ogsprache_26;?>>fy_NL - Frisian</option>
    <option value="ga_IE" <?php echo $ogsprache_27;?>>ga_IE - Irish</option>
    <option value="gl_ES" <?php echo $ogsprache_28;?>>gl_ES - Galician</option>
    <option value="he_IL" <?php echo $ogsprache_29;?>>he_IL - Hebrew</option>
    <option value="hi_IN" <?php echo $ogsprache_30;?>>hi_IN - Hindi</option>
    <option value="hr_HR" <?php echo $ogsprache_31;?>>hr_HR - Croatian</option>
    <option value="hu_HU" <?php echo $ogsprache_32;?>>hu_HU - Hungarian</option>
    <option value="hy_AM" <?php echo $ogsprache_33;?>>hy_AM - Armenian</option>
    <option value="id_ID" <?php echo $ogsprache_34;?>>id_ID - Indonesian</option>
    <option value="is_IS" <?php echo $ogsprache_35;?>>is_IS - Icelandic</option>
    <option value="it_IT" <?php echo $ogsprache_36;?>>it_IT - Italian</option>
    <option value="ja_JP" <?php echo $ogsprache_37;?>>ja_JP - Japanese</option>
    <option value="ka_GE" <?php echo $ogsprache_38;?>>ka_GE - Georgian</option>
    <option value="km_KH" <?php echo $ogsprache_39;?>>km_KH - Khmer</option>
    <option value="ko_KR" <?php echo $ogsprache_40;?>>ko_KR - Korean</option>
    <option value="ku_TR" <?php echo $ogsprache_41;?>>ku_TR - Kurdish</option>
    <option value="la_VA" <?php echo $ogsprache_42;?>>la_VA - Latin</option>
    <option value="lt_LT" <?php echo $ogsprache_43;?>>lt_LT - Lithuanian</option>
    <option value="lv_LV" <?php echo $ogsprache_44;?>>lv_LV - Latvian</option>
    <option value="mk_MK" <?php echo $ogsprache_45;?>>mk_MK - Macedonian</option>
    <option value="ml_IN" <?php echo $ogsprache_46;?>>ml_IN - Malayalam</option>
    <option value="ms_MY" <?php echo $ogsprache_47;?>>ms_MY - Malay</option>
    <option value="nb_NO" <?php echo $ogsprache_48;?>>nb_NO - Norwegian bokmal</option>
    <option value="ne_NP" <?php echo $ogsprache_49;?>>ne_NP - Nepali</option>
    <option value="nl_NL" <?php echo $ogsprache_50;?>>nl_NL - Dutch</option>
    <option value="nn_NO" <?php echo $ogsprache_51;?>>nn_NO - Norwegian nynosk</option>
    <option value="pa_IN" <?php echo $ogsprache_52;?>>pa_IN - Punjabi</option>
    <option value="pl_PL" <?php echo $ogsprache_53;?>>pl_PL - Polish</option>
    <option value="ps_AF" <?php echo $ogsprache_54;?>>ps_AF - Pashto</option>
    <option value="pt_BR" <?php echo $ogsprache_55;?>>pt_BR - Portuguese Brazil</option>
    <option value="pt_PT" <?php echo $ogsprache_56;?>>pt_PT - Portuguese Portugal</option>
    <option value="ro_RO" <?php echo $ogsprache_57;?>>ro_RO - Romanian</option>
    <option value="ru_RU" <?php echo $ogsprache_58;?>>ru_RU - Russian</option>
    <option value="sk_SK" <?php echo $ogsprache_59;?>>sk_SK - Slovak</option>
    <option value="sl_SI" <?php echo $ogsprache_60;?>>sl_SI - Slovenian</option>
    <option value="sq_AL" <?php echo $ogsprache_61;?>>sq_AL - Albanian</option>
    <option value="sr_RS" <?php echo $ogsprache_62;?>>sr_RS - Serbian</option>
    <option value="sv_SE" <?php echo $ogsprache_63;?>>sv_SE - Swedish</option>
    <option value="sw_KE" <?php echo $ogsprache_64;?>>sw_KE - Swahili</option>
    <option value="ta_IN" <?php echo $ogsprache_65;?>>ta_IN - Tamil</option>
    <option value="te_IN" <?php echo $ogsprache_66;?>>te_IN - Telugu</option>
    <option value="th_TH" <?php echo $ogsprache_67;?>>th_TH - Thai</option>
    <option value="tl_PH" <?php echo $ogsprache_68;?>>tl_PH - Filipino</option>
    <option value="tr_TR" <?php echo $ogsprache_69;?>>tr_TR - Turkish</option>
    <option value="uk_UA" <?php echo $ogsprache_70;?>>uk_UA - Ukrainian</option>
    <option value="vi_VN" <?php echo $ogsprache_71;?>>vi_VN - Vietnamese</option>
    <option value="zh_CN" <?php echo $ogsprache_72;?>>zh_CN - Simplified Chinese China</option>
    <option value="zh_HK" <?php echo $ogsprache_73;?>>zh_HK - Traditional Chinese Hong Kong</option>
    <option value="zh_TW" <?php echo $ogsprache_74;?>>zh_TW - Traditional Chinese Taiwan</option>
</select>
<label><?php echo ossn_print('opengraph:seitentyp');?></label>
<select name="ogseitentyp">
<?php
	$component = new OssnComponents;
	$settings = $component->getComSettings('SEO');
	$ogseitentyp_1 = ''; $ogseitentyp_2 = ''; $ogseitentyp_3 = ''; $ogseitentyp_4 = ''; $ogseitentyp_5 = ''; $ogseitentyp_6 = '';
	if($settings && $settings->ogseitentyp == ''){
		$ogseitentyp_1 = 'selected';
	} else if($settings && $settings->ogseitentyp == 'article'){
		$ogseitentyp_2 = 'selected';
	} else if($settings && $settings->ogseitentyp == 'blog'){
		$ogseitentyp_3 = 'selected';
	} else if($settings && $settings->ogseitentyp == 'book'){
		$ogseitentyp_4 = 'selected';
	} else if($settings && $settings->ogseitentyp == 'product'){
		$ogseitentyp_5 = 'selected';
	} else if($settings && $settings->ogseitentyp == 'website'){
		$ogseitentyp_6 = 'selected';
	}
	?>
	<option value="" <?php echo $ogseitentyp_1;?>><?php echo ossn_print('dropdown:auswahl');?></option>
 	<option value="article" <?php echo $ogseitentyp_2;?>>article</option>
    <option value="blog" <?php echo $ogseitentyp_3;?>>blog</option>
    <option value="book" <?php echo $ogseitentyp_4;?>>book</option>
    <option value="product" <?php echo $ogseitentyp_5;?>>product</option>
    <option value="website" <?php echo $ogseitentyp_6;?>>website</option>
 </select>
<label><?php echo ossn_print('opengraph:image');?></label>
<input type="text" name="ogimage" value="<?php echo $params['settings']->ogimage;?>"/>
<label><?php echo ossn_print('opengraph:imagehttps');?></label>
<input type="text" name="ogimagehttps" value="<?php echo $params['settings']->ogimagehttps;?>"/>
<label><?php echo ossn_print('opengraph:imagebreite');?></label>
<input type="text" name="ogimagebreite" value="<?php echo $params['settings']->ogimagebreite;?>"/>
<label><?php echo ossn_print('opengraph:imagehoehe');?></label>
<input type="text" name="ogimagehoehe" value="<?php echo $params['settings']->ogimagehoehe;?>"/>
<label><?php echo ossn_print('opengraph:imagealt');?></label>
<input type="text" name="ogimagealt" value="<?php echo $params['settings']->ogimagealt;?>"/>
<label><?php echo ossn_print('opengraph:fbappid');?></label>
<input type="text" name="fbappid" value="<?php echo $params['settings']->fbappid;?>"/>
<br>
<br>
<input type="submit" class="btn btn-success" value="<?php echo ossn_print('save'); ?>"/>