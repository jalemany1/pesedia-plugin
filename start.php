<?php

// Ajustes para ajustar el comportamiento de Elgg para Pesedia

elgg_register_event_handler('init', 'system', 'pesedia_init');

/**
 * Init plugin.
 */
function pesedia_init() {

	// Eliminamos el enlace al canal RSS
	elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');

	/* Para eliminar el menú contextual que aparece al mover el ratón sobre el avatar de un usaurio
	 he modificado el fichero /pesediaDemo/public_html/vendor/elgg/elgg/js/lib/ui.js a partir de la línea 187
	 Pendiente encontrar un método menos intrusivo.
	*/

	/* Improve content reporting */
	// Remove ReportContent icon from right-space (extras) options
	elgg_unregister_menu_item('extras', 'report_this');
	// Add ReportContent option for each ElggEntity
	elgg_register_plugin_hook_handler('register', 'menu:river', 'add_reportcontent_option');
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'add_reportcontent_option');

	/* Extended Access_Menu_Item plugin to provide support for the River */
	elgg_register_plugin_hook_handler('register', 'menu:river', 'menus_access_river_menu_setup', 999);

	/* Limit the amount of RiverItems in Pesedia Home page to 5 */
	elgg_register_plugin_hook_handler('route', 'activity', function() { set_input('limit', 5); } );
}


/**
 * Add ReportContent option for each Elgg RiverItem or Entity
 *
 * @param string 	$hook 		'register'
 * @param string 	$type 		['menu:river'|'menu:entity']
 * @param array 	$return 	Menu items
 * @param array 	$params 	Hook params
 * @return ElggMenuItem[]
 */
function add_reportcontent_option($hook, $type, $return, $params) {

	/* @var ElggEntity $entity */
	$entity = $params['item'] ? $params['item']->getObjectEntity() :
			 ($params['entity'] ? $params['entity'] : null);

	// Check requirements
    if (!elgg_is_logged_in() || !$entity || !elgg_instanceof($entity)) {
        return $return;
    }

    $title = empty($entity->title) ? get_class($entity) : $entity->title;
    $href = elgg_http_add_url_query_elements('reportedcontent/add', [
		'address' => $entity->getURL(),
		'title' => $title,
	]);
	
	$return[] = \ElggMenuItem::factory([
		'name' => 'report',
		'text' => elgg_echo('reportedcontent:report'),
		'href' => $href,
		'section' => 'action',
		'link_class' => 'elgg-lightbox',
		'deps' => 'elgg/reportedcontent',
	]);

	return $return;
}

/**
 * When 'user_friends' plugin is enabled, this function filters the
 * actions to enable them only in Request View
 *
 * @param string 	$hook 		'register'
 * @param string 	$type 		'menu:river'
 * @param array 	$return 	Array of ElggMenuItems[]
 * @param array 	$params 	Hook params
 * @return ElggMenuItem[]
 */
function menus_access_river_menu_setup($hook, $type, $return, $params) {
	$item = elgg_extract('item', $params);
	$entity = $item->getObjectEntity();

	if ($entity instanceof ElggUser) {
		$item_menu = \ElggMenuItem::factory([
			'name' => 'access',
			'data' => array('subsection' => 'access'),
			'text' => elgg_view_icon('globe'),
			'data-guid' => $entity->guid,
		]);
	} else {
		$item_menu = \ElggMenuItem::factory([
			'name' => 'access',
			'data' => array('subsection' => 'access'),
			'text' => elgg_view_icon(menus_access_get_icon($entity)),
			'href' => "ajax/view/menus/access?guid=$entity->guid",
			'link_class' => 'elgg-lightbox',
			'data-guid' => $entity->guid,
			'data-colorbox-opts' => json_encode([
				'maxWidth' => '600px'
			]),
		]);
	}

	$return[] = $item_menu;
	return $return;
}