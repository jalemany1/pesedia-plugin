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

	// Exigir el código de registro 
	elgg_register_plugin_hook_handler('action', 'register', 'registrationcode_register_hook');

	/* Improve content reporting */
	// Remove ReportContent icon from right-space (extras) options
	elgg_unregister_menu_item('extras', 'report_this');
	// Add ReportContent option for each ElggEntity
	elgg_register_plugin_hook_handler('register', 'menu:river', 'add_reportcontent_option');
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'add_reportcontent_option');
	
	/* Repair ClosedMembership-Group access invitation */
	// Add access grant
	elgg_register_event_handler('create', 'relationship', 'add_access_grant_to_invited_group');
	// Revoke access grant
	elgg_register_event_handler('delete', 'relationship', 'del_access_grant_to_invited_group');

	/* Extended Access_Menu_Item plugin to provide support for the River */
	elgg_register_plugin_hook_handler('register', 'menu:river', 'menus_access_river_menu_setup', 999);

	/* Simplify group creation */
	elgg_unregister_action('groups/edit');
	elgg_register_action('groups/edit', __DIR__ . '/actions/groups/edit.php');
	elgg_register_css('policies', elgg_get_simplecache_url('policies.css'));

	/* Limit the amount of RiverItems in Pesedia Home page to 5 */
	elgg_register_plugin_hook_handler('route', 'activity', function() { set_input('limit', 5); } );
}

function registrationcode_register_hook() {
	$resumen = get_input('custom_profile_fields_clase') . get_input('custom_profile_fields_grupo') . get_input('custom_profile_fields_id');
	if (get_input('custom_profile_fields_registrationcode') != hash('crc32', $resumen , false) ) {
		register_error(elgg_echo('pesedia:invitationcode'));
		forward(REFERER);
	}
	set_input('custom_profile_fields_registrationcode','');
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
 * When 'groups_invite' plugin is enabled and a user invite another, this function
 * give a temporary access grant to the group.
 *
 * @param string        $event          'create'
 * @param string        $type           'relationship'
 * @param array         $object         ElggRelationship
 * @return boolean
 */
function add_access_grant_to_invited_group($event, $type, $object) {
	if ($object->relationship == 'invited') {
		add_entity_relationship($object->guid_one, 'access_grant', $object->guid_two);
	}
}

/**
 * When 'groups_invite' plugin is enabled and a user decline a group invitation,
 * this function remove the temporary access grant to the group.
 *
 * @param string        $event          'delete'
 * @param string        $type           'relationship'
 * @param array         $object         ElggRelationship
 * @return boolean
 */
function del_access_grant_to_invited_group($event, $type, $object) {
	if ($object->relationship == 'invited') {
		remove_entity_relationship($object->guid_one, 'access_grant', $object->guid_two);
	}
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