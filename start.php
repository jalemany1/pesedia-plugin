<?php

// Ajustes para ajustar el comportamiento de Elgg para Pesedia

elgg_register_event_handler('init', 'system', 'pesedia_init');

/**
 * Init plugin.
 */
function pesedia_init() {

	// Eliminamos el enlace al canal RSS
	elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');

	// Eliminamos los widgets en el perfil del grupo
	elgg_register_plugin_hook_handler('view', 'groups/profile/widgets', 'myplugin_alter_groups_profile_widgets');

	// Cambiamos el tamaño del avatar que aparece en la topbar
	elgg_register_event_handler('pagesetup', 'system', 'profile_pagesetup_tiny', 60);

	// Cambios de estilo para dar el "look" Pesedia
	elgg_extend_view('css/elgg', 'pesedia/css', 1000);

	/* Para eliminar el menú contextual que aparece al mover el ratón sobre el avatar de un usaurio
	 he modificado el fichero /pesediaDemo/public_html/vendor/elgg/elgg/js/lib/ui.js a partir de la línea 187
	 Pendiente encontrar un método menos intrusivo.
	*/

	// Exigir el código de registro 
	elgg_register_plugin_hook_handler('action', 'register', 'registrationcode_register_hook');

	/* Cambia el icono de las notificaciones. */
	elgg_unregister_plugin_hook_handler('register', 'menu:topbar', 'notifier_topbar_menu_setup');
	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'notifier_topbar_menu_setup_pesedia');

	/* Improve content reporting */
	// Remove ReportContent icon from right-space (extras) options
	elgg_unregister_menu_item('extras', 'report_this');
	// Add ReportContent option for each ElggEntity
	elgg_register_plugin_hook_handler('register', 'menu:river', 'add_reportcontent_option');
	elgg_register_plugin_hook_handler('register', 'menu:entity', 'add_reportcontent_option');

	/* Repair hashtags for your later social network search */
	// Delete the # symbol
	elgg_register_plugin_hook_handler('extract:qualifiers', 'all', 'standardize_hashtag_format');

	/* Accept-Revoke-Reject actions limited to Request View*/
	// Delete menu actions
	elgg_register_plugin_hook_handler('register', 'menu:friendship', 'enable_actions_only_in_requestview', 999);
	
	/* Repair ClosedMembership-Group access invitation */
	// Add access grant
	elgg_register_event_handler('create', 'relationship', 'add_access_grant_to_invited_group');
	// Revoke access grant
	elgg_register_event_handler('delete', 'relationship', 'del_access_grant_to_invited_group');
}



function myplugin_alter_groups_profile_widgets($hook, $type, $returnvalue, $params) {
	if ($params['viewtype'] !== 'default') {
		return $returnvalue;
	}

	return '';
}

// Cambia el avatar de la topbar a tamaño tiny. Basada en la función profile_pagesetup de "vendor/elgg/elgg/mod/profile/start.php"
function profile_pagesetup_tiny() {
	$viewer = elgg_get_logged_in_user_entity();
	if (!$viewer) {
		return;
	}
	
	elgg_register_menu_item('topbar', array(
		'name' => 'profile',
		'href' => $viewer->getURL(),
		'text' => elgg_view('output/img', array(
			'src' => $viewer->getIconURL('tiny'), // AGUS aumenta el tamaño del avatar de la topbar
			'alt' => $viewer->name,
			'title' => elgg_echo('profile'),
			'class' => 'elgg-border-plain elgg-transition',
		)),
		'priority' => 100,
		'link_class' => 'elgg-topbar-avatar',
		'item_class' => 'elgg-avatar elgg-avatar-topbar',
	));
}


function registrationcode_register_hook() {
	if (get_input('custom_profile_fields_registrationcode') != hash('crc32', get_input('custom_profile_fields_DNIoNIA'), false) ) {
		register_error(elgg_echo('pesedia:invitationcode'));
		forward(REFERER);
	}
	set_input('custom_profile_fields_registrationcode','');
}

/* Reemplaza a notifier_topbar_menu_setup de mod/notifier/start.php */
function notifier_topbar_menu_setup_pesedia ($hook, $type, $return, $params) {
	if (elgg_is_logged_in()) {
		// Get amount of unread notifications
		$count = (int)notifier_count_unread();

		$text = elgg_view_icon('bell'); // Este es el cambio 
		$tooltip = elgg_echo("notifier:unreadcount", array($count));

		if ($count > 0) {
			if ($count > 99) {
				// Don't allow the counter to grow endlessly
				$count = '99+';
			}
			$hidden = '';
		} else {
			$hidden = 'class="hidden"';
		}

		$text .= "<span id=\"notifier-new\" $hidden>$count</span>";

		$item = ElggMenuItem::factory(array(
				'name' => 'notifier',
				'href' => '#notifier-popup',
				'text' => $text,
				'priority' => 600,
				'title' => $tooltip,
				'rel' => 'popup',
				'id' => 'notifier-popup-link'
		));

		$return[] = $item;
	}

	return $return;
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
 * Unify hashtags format to Elgg format
 *
 * @param string 	$hook 		'extract:qualifiers'
 * @param string 	$type 		'all'
 * @param array 	$return 	Scraped content + hashtags formatted
 * @param array 	$params 	Hook params
 * @return ElggMenuItem[]
 */
function standardize_hashtag_format($hook, $type, $return, $params) {
	foreach ($return['hashtags'] as &$htag) {
		$htag = substr($htag, 1);
	}
	return $return;
}


/**
 * When 'user_friends' plugin is enabled, this function filters the
 * actions to enable them only in Request View
 *
 * @param string 	$hook 		'register'
 * @param string 	$type 		'menu:friendship'
 * @param array 	$return 	...
 * @param array 	$params 	Hook params
 * @return ElggMenuItem[]
 */
function enable_actions_only_in_requestview($hook, $type, $return, $params) {
	$pattern = '/friends\/.*\/requests/';
	if(!preg_match($pattern, $params['base_url']))
		return array();
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
