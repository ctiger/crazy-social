<?php
/*
Plugin Name: crazy-social
Plugin URI: http://prmv.ru/
Description: Социальные кнопки
Version: 0.1
Author: Shamil Pirumow
Author URI: http://prmv.ru/
*/
function insertCrazySocial($content) {
	if(is_single() || is_page() && !is_home() && !is_front_page() ) {
        $content.='<div class="crazy-social"><script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="button" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,lj,gplus"></div>';
	}
	return $content;
}

add_filter('the_content', 'insertCrazySocial');

?>