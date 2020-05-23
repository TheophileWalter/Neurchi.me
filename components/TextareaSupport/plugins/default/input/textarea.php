<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@softlab24.com>
 * @copyright (C) SOFTLAB24 LIMITED
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$class = 'ossn-textarea-input';
if(isset($params['class'])){
	$class = $class . $params['class'];
}
$value = (isset($params['value'])) ? $params['value'] : '';
unset ($params['value']);

$defaults = array(
	'disabled' => false,
	'class' => $class,
);
$params = array_merge($defaults, $params);
$attributes = ossn_args($params);
if(strpos ($class , 'ossn-editor') !== false) {
?>
<script>
// init here in case not already done (most likely by OssnSmilies)
// left part of condition is true for current outdated TinyMCE, right part is used with latest TinyMCE
if ((typeof tinymce.settings === 'undefined') || (typeof tinymce.settings !== 'undefined' && typeof tinymce.settings.setup === 'undefined')) {
    tinymce.init({
        toolbar: "bold italic underline alignleft aligncenter alignright bullist numlist image media link unlink emoticons autoresize fullscreen insertdatetime print spellchecker preview",
        selector: '.ossn-editor',
        plugins: "code image media link emoticons fullscreen insertdatetime print spellchecker preview",
        convert_urls: false,
        relative_urls: false,
        language: "<?php echo ossn_site_settings('language'); ?>",
    });
}
tinymce.settings['content_css'] = Ossn.site_url + 'css/view/bootstrap.min.css';
tinymce.settings['invalid_elements'] = 'script';
<?php
$OssnComponents = new OssnComponents;
$settings = $OssnComponents->getSettings('TextareaSupport');
if($settings && $settings->scripting_and_svg == 'on') {
?>
	// old Tiny: it's sufficient to have no invalid elements = everything is allowed
	tinymce.settings['invalid_elements'] = '';
	// latest TinyMce has disabled 'script' by default though, it needs to be explicitely turned on
	tinymce.settings['extended_valid_elements'] = 'script[language|type|src],svg[*],defs[*],pattern[*],desc[*],metadata[*],g[*],mask[*],path[*],line[*],marker[*],rect[*],circle[*],ellipse[*],polygon[*],polyline[*],linearGradient[*],radialGradient[*],stop[*],image[*],view[*],text[*],textPath[*],title[*],tspan[*],glyph[*],symbol[*],switch[*],use[*]';
	tinymce.settings['non_empty_elements'] = 'td,th,iframe,video,audio,object,script,pre,code,area,base,basefont,br,col,frame,hr,img,input,isindex,link,meta,param,embed,source,wbr,track,svg,defs,pattern,desc,metadata,g,mask,path,line,marker,rect,circle,ellipse,polygon,polyline,linearGradient,radialGradient,stop,image,view,text,textPath,title,tspan,glyph,symbol,switch,use';
<?php } ?>
</script>
<?php
}

echo "<textarea {$attributes}>{$value}</textarea>";