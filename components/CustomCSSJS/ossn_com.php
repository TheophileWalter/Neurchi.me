<?php
/**
 * Homelancer Program/Software
 *
 * @package    	Homelancer Package for Ossn
 * @author     	Geocadin RA <ossn@homelancer.com>
 * @author_url 	http://www.homelancer.com/
 * @copyright  	2017 Homelancer.com
 * @license     General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link        http://www.opensource-socialnetwork.org/licence
*/

define('__CSSJS__', ossn_route()->com . 'CustomCSSJS/');

function cssjs($action='ossn') {
	switch($action){
	case 'ossn':
		ossn_register_com_panel('CustomCSSJS', 'settings');
		if(ossn_isAdminLoggedin()) {
			ossn_register_action('cssjs/edit', __CSSJS__ . 'actions/edit.php');
		}
		//add custom css/js to site head
		ossn_extend_view('ossn/site/head', 'css/custom');
		ossn_extend_view('ossn/site/head', 'js/custom');
		
		//add custom css/js to admin head
		ossn_extend_view('ossn/admin/head', 'css/custom.admin');
		ossn_extend_view('ossn/admin/head', 'js/custom.admin');
		
		return;
		break;
	case 'head_admin_css':
	case 'head_admin_js':
	case 'head_css':
	case 'head_js':
		$settings = new OssnComponents;
		$settings = $settings->getComSettings('CustomCSSJS');
		if (!empty($settings->$action)){
			if (stripos($action,'_css')!==false){
				$pre="\n<style>\n";
				$suf="\n</style>\n";
			} else {
				$pre="\n<script>\n";
				$suf="\n</script>\n";
			}
			echo htmlspecialchars_decode($pre.$settings->$action.$suf, ENT_QUOTES);
		}
		return;
		break;
	case 'form':
		$params=array(
			'head_admin_css'=>false,
			'head_admin_js'=>false,
			'head_css'=>false,
			'head_js'=>false,
		);
		$settings = new OssnComponents;
		$settings = $settings->getComSettings('CustomCSSJS');
		if (!empty($settings)){
		foreach($params as $field=>$param){
			$content=$settings->$field;
			switch($field){
			case 'head_admin_css':
			case 'head_admin_js':
			case 'head_css':
			case 'head_js':
				$params[$field]=$content;
			}
		}}
		return $params;
		break;
	case 'edit':
		if(!ossn_isAdminLoggedin()){
			echo ossn_error_page();	
			return;
		}
		
		$OssnComponents = new OssnComponents;		
		$fields=array(
			'head_admin_css',
			'head_admin_js',
			'head_css',
			'head_js',
		);
		foreach($fields as $field){
			$label=ossn_print('cssjs:'.$field);
			$guid=intval(input("{$field}_id"));
			$content=input("{$field}");
			if ($OssnComponents->setComSETTINGS('CustomCSSJS', $field, $content)){
				ossn_trigger_message(ossn_print('cssjs:update', $label), 'success');
			} else {
				ossn_trigger_message(ossn_print('cssjs:update:fail', $label), 'error');
			}
		}	
		redirect(REF);
	}
	redirect(REF);
}

ossn_register_callback('ossn', 'init', 'cssjs');
