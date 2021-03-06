<?php
/**
 * @package     atomix
 * @subpackage  mod_advanced_custom_facebook_likebox_widget
 * @author - Ved Maila
 * @copyright - All rights reserved by ConnexDesigns.com
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * Websites: http://www.connexdesigns.com
 * Technical Support:  info@connexdesigns.com
 * Documentation : Available at our Website
 * Type : Premium
*/

defined('_JEXEC') or die;
$width = trim($params->get('width'));
$height = trim($params->get('height'));
$background = $params->get('background');
$padding = trim($params->get('padding'));
$border = trim($params->get('border'));
$bordercolor = $params->get('bordercolor');
$header = $params->get('header');
$radius = $params->get('radius');
$page = $params->get('page');
$stream = $params->get('stream');
$show_facepile = $params->get('show_facepile');
$moduleclass_sfx = $params->get('moduleclass_sfx');
$adapt_container_width = $params->get('adapt_container_width');
$page_name = $params->get('page_name');
$small_header = $params->get('small_header');

		$data = "";
        
        $data .= "
            <div id='fb-root'></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  ";
        $data .= "
<div id='advanced_facebook_likebox_widget' class='$moduleclass_sfx' style='max-width: $width";
        $data .= "px;'>
		<div class='fbCustom' style='background:$background; width:$width";
        $data .= "px; padding: $padding";
        $data .= "px; border: $border";
        $data .= "px solid $bordercolor; border-radius: $radius";
        $data .= "px;'>
        <div class='FBWrap' style='height:$height";
        $data .= "px; overflow: hidden;'>
            <div class='fb-page' data-href='$page' data-width='$width' data-height='$height' data-small-header='$small_header' data-adapt-container-width='$adapt_container_width' data-hide-cover='$header' data-show-facepile='$show_facepile' data-show-posts='$stream'><div class='fb-xfbml-parse-ignore'><blockquote cite='$page'><a href='$page'>$page_name</a></blockquote></div></div>
         </div>
      </div>
	  <div class='copyright' style='position: relative; top: -15px; height: 0px;'><small><a href='http://www.advantagebusinessvaluations.com/' title='Visit the website' target='_blank'><span style='color:#ccc; font-size: 9px; float: right;'>Visit the website</span></a></small></div>
</div>
";
?>
<div class="advanced_joomla_facebook">
	<?php echo $data; ?>
</div>
