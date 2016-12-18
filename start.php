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

		$text = elgg_view_icon('file-text-o'); // Este es el cambio 
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

