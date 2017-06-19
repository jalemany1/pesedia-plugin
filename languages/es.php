<?php

return array(

	// core

	'LOGGED_IN' => "Toda la red",
	'item:object:comment' => "Comentarios",
	'item:object:discussion' => "Temas de discusión",
	'item:object:tidypics_batch' => "Cargas de fotos",
	'reportedcontent:this:tooltip' => "Denunciar algo de esta página",
	'reportedcontent:report' => "Denunciar",
	'reportedcontent:description' => "Describe lo que deseas denunciar de la página donde estabas",



	// river

	'river:comment:object:default' => '%s ha comentado %s',
	'river:join:site:default' => '%s se unió al sitio',

	// tidypics

	'tidypics:sort:instruct' => 'Para ordenar las fotos del álbum arrastre y suelte las fotos. Luego haga clic en el botón Guardar.',
	'tidypics:sort' => 'Ordenar el álbum %s',
	'tidypics:album_select' => 'Elige un álbum o crea uno nuevo y luego pulsa Continuar',

	// groups

	'groups:add' => 'Crear grupo',
	'groups:add:' => 'Crear grupo',

	// groups(modbyGuillem)
	'groups:policy:public2' => 'Público: libre entrada, visibilidad y permiso para invitar',
	'groups:policy:privateVisPerm' => 'Privado, visible y con permisos: Invitación requerida, visible y permiso para invitar',
	'groups:policy:privateVisNoPerm' => 'Privado, visible y sin invitaciones: Invitación requerida, visible y sin permiso para invitar',
	'groups:policy:privateNoVisPerm' => 'Privado, invitaciones y no visible: Invitación requerida, no visible y permiso para invitar',
	'groups:policy:private2' => 'Privado: Invitación requerida, no visible y sin permiso para invitar',
	//(modbyJAlemany)
	'groups:policy:public' => 'Público: Todos pueden ver el grupo, los miembros y sus publicaciones.',
	'groups:policy:private' => 'Privado: Todos pueden encontrar el grupo y ver quien esta en él. Solo los miembros pueden ver las publicaciones.'
	'groups:policy:secret' => 'Secreto: Solo los miembros pueden encontrar el grupo y ver su contenido.'

	// group list

	'groups:list:all' => 'Grupos',
	'groups:list:member' => 'Mis grupos',
	'groups:list:owner' => 'Grupos que administro',
	'groups:list:invitations' => 'Invitaciones',
	'groups:list:search' => 'Encontrar grupos',
	'groups:list:discussions' => 'Debates',

	'group:member:count:single' => '%s miembro',
	'group:member:count' => '%s miembros',
	'group:time_created' => 'Creado en %s',
	'group:last_activity' => 'Última actividad %s',

	'group:featured' => 'Grupo destacado',
	'group:membership:open' => 'Pertenencia abierta',
	'group:membership:closed' => 'Pertenencia cerrada',

	'groups:invitation:accept' => 'Aceptar invitación',
	'groups:invitation:decline' => 'Declinar invitación',
	'groups:killrequest' => 'Revocar solicitud',
	
	'user:groups:group_membership_visibility' => 'Visibilidad de la pertenencia al grupo',
	'user:groups:group_membership_visibility:help' => 'Aquí puedes restringir la visiblidad de tus grupos a un subconjunto de usuarios. Ten encuenta que la configuración de un grupo podría permitir que seas visto en la lista de sus miembros.',
	'user:groups:visibility:private' => 'Solo yo',
	'user:groups:visibility:friends' => 'Amigos',
	'user:groups:visibility:logged_in' => 'Conectado en usuarios',
	'user:groups:visibility:public' => 'Cada uno',
	'user:groups:allow_visibility_override' => 'Permitir sobreescribir la visibilidad',
	'user:groups:allow_visibility_override:help' => 'Permitir a usuarios individuales cambiar la configuración de la visibilidad de su lista de pertenencia a grupo',

	'group_list:usersettings:title' => 'Lista de Grupos',
	'user:groups:no_access' => 'El usuario ha restringido el acceso a su lista de pertenencia a grupo',

	// group sort

	'group:sort:label' => 'Ordenar',
	'group:sort:search:label' => 'Buscar',
	'group:rel:label' => 'Mostrar',
	'group:sort:search:placeholder' => 'Introduce palabra de búsqueda clave...',
	'group:sort:search:empty' => 'No hay resultados que coincidan con la consulta',

	'groups:rel:' => 'Todos',
	'groups:rel:open' => 'Pertenencia abierta',
	'groups:rel:closed' => 'Pertenencia cerrada',
	'groups:rel:featured' => 'Caracterizado',
	'groups:rel:member' => 'Mis grupos',
	'groups:rel:admin' => 'Grupos que administro',
	'groups:rel:invited' => 'Invitaciones',
	'groups:rel:membership_request' => 'Solicitudes pendientes',

	'groups:sort:alpha::asc' => 'Alfabéticamente',
	'groups:sort:alpha::desc' => 'Alfábeticamente a la inversa',
	'groups:sort:time_created::asc' => 'El más antiguo primero',
	'groups:sort:time_created::desc' => 'El más nuevo primero',
	'groups:sort:member_count::desc' => 'El más popular primero',
	'groups:sort:member_count::asc' => 'El menos popular primero',
	'groups:sort:last_action::asc' => 'Última actividad primero',
	'groups:sort:last_action::desc' => 'Última actividad al final',

	// groups invite

	'groups:invite:settings:require_confirmation' => 'Solicitar confirmación de los invitados',
	'groups:invite:settings:require_confirmation:help' => 'Los usuarios invitados deben siempre aceptar la invitación. Cuando está activa esta característica impide a los administradores del grupo añadir usuarios al grupo sin invitación',
	'groups:invite:settings:users_tab' => 'Permitir a cualquier usuario registrado ser invitado',
	'groups:invite:settings:users_tab:help' => 'Si se activa, los usuarios deberán encontrar e invitar a cualquier usuario registrado. Si se desactiva, solo los amigos podrán ser invitados',
	'groups:invite:settings:emails_tab' => 'Permitir invitación por correo',
	'groups:invite:settings:emails_tab:help' => 'Si se activa, los usuarios podrán invitar a otras personas por correo electrónico',

	'groups:invite:friends' => 'Amigos',
	'groups:invite:users' => 'Usuarios',
	'groups:invite:emails' => 'Emails',
	'groups:invite:friends:select' => 'Amigos a invitar',
	'groups:invite:users:select' => 'Usuarios a invitar',
	'groups:invite:emails:select' => 'Emails a invitar',
	'groups:invite:emails:select:help' => 'Introducir un email por línea',
	'groups:invite:message' => 'Mensaje a introducir en la invitación',

	'groups:invite:resend' => 'Reenviar invitaciones a miembros previamente invitados',
	'groups:invite:action:invite' => 'Enviar invitación para ser miembro',
	'groups:invite:action:add' => 'Añadir un miembro sin invitación',

	'groups:invite' => 'Invitar',
	'groups:invite:title' => 'Invitar miembros a este grupo',
	'groups:inviteto' => "Invitar miembros a '%s'",

	'groups:invite:tool_option' => 'Permitir a los miembros invitar a otros miembros',
	'groups:invite:not_found' => 'Grupo no encontrado',

	'groups:invite:notify:subject' => 'Estás invitado a unirte a %s',
	'groups:invite:notify:body' => '%1$s te ha invitado a unirte %2$s a %3$s.
		%4$s
		Por favor, visita el sitio en %3$s y crea una cuenta.
		Entonces podrás confiramr la invitación para unirte a %2$s visitando la página de invitaciones.
		',
	'groups:invite:notify:message' => '
		Han incluido el siguiente mensaje para ti:
		%s

		',

	'groups:invite:user:subject' => "%s te invita a unirte a %s",
	'groups:invite:user:body' => "Hola %s,

%s te invitó a unirte a '%s'. Pulsa debajo para confirmar la invitación:

%s",

	'groups:invite:result:invited' => '%s de %s invitaciones se enviaron correctamente',
	'groups:invite:result:skipped' => '%s de %s invitationes se pasaron por alto, porque los usuarios ya habían sido invitados',
	'groups:invite:result:added' => '%s de %s usuarios fueron añadidos como miembros del grupo',
	'groups:invite:result:error' => '%s de %s invitaciones no pudieron enviarse por errores',

	'groups:invite:confirm:error' => 'Tu solicitud no se pudo completar. Por favor, conecta y confirma la invitación manualmente',
	'notification:groups_invite_user' => 'Notificación enviada cuando un usuario es invitado a un grupo',


	'groups:list:members' => 'Miembros',
	'groups:list:requests' => 'Solicitudes',
	'groups:list:invited' => 'Invitaciones',
	'groups:list:invite' => 'Invitar',

	// groups_membership

	'groups:members:no_results' => 'Ningún miembro coincide con tu consulta',
	'groups:membership_requests:no_results' => 'No hay solicitudes pendientes de pertenencia coincidentes con tu consulta',
	'groups:invited:no_results' => 'No hay invitaciones que coincidan con tu consulta',
	
	'user:sort:group_rel::asc' => 'El más antiguo primero',
	'user:sort:group_rel::desc' => 'El más nuevo primero',

	'user:membership:member_since' => 'Miembro desde %s',
	'user:membership:requested' => 'Pertenencia solicitada en %s',
	'user:membership:invited' => 'Invitación solicitada a %s',
	'user:membership:last_action' => 'Última vez visto %s',
	
	'user:membership:group_admin' => 'Administrador',
	'groups:makeadmin' => 'Hacer administrador',
	'groups:removeadmin' => 'Revocar administrador',

	'groups:membership:bad_request' => 'No se puede completar la solicitud',
	'groups:membership:permission_denied' => 'No tienes permisos para realizar esta acción',
	'groups:membership:make_admin:error' => 'No puedes hacer que este usuario sea administrador',
	'groups:membership:make_admin:success' => 'El usuario es ahora administrador',
	'groups:membership:remove_admin:error' => 'No puede revocar los privilegios de administrador',
	'groups:membership:remove_admin:success' => 'El usuario ya no es administrador',

	'groups:request:accept' => 'Aceptar solicitud',
	'groups:request:decline' => 'Declinar solicitud',
	'groups:invitation:revoke' => 'Revocar invitación',

	'groups:widget:group_members' => 'Miembros',
	'groups:widget:group_members:desc' => 'Lista los miembros del grupo',
	// discussions

	'discussion' => 'Debates',
	'discussion:add' => 'Añadir tema de debate',
	'discussion:latest' => 'Últimos debates',
	'discussion:group' => 'Debates del grupo',
	'discussion:none' => 'No hay debates',
	'discussion:reply:title' => 'Respuesta por %s',
	'discussion:new' => "Añadir mensaje",
	'discussion:updated' => "Última respuesta por %s %s",

	'discussion:topic:created' => 'Se creó el tema de debate.',
	'discussion:topic:updated' => 'Se actualizó el tema de debate.',
	'discussion:topic:deleted' => 'Se ha borrado el tema de debate.',

	'discussion:topic:notfound' => 'No se encontró el tema de debate.',
	'discussion:error:notsaved' => 'No se puede guardar este tema',
	'discussion:error:missing' => 'El título y el mensaje son campos obligatorios',
	'discussion:error:permissions' => 'No tienes permisos para realizar esta acción',
	'discussion:error:notdeleted' => 'No se pudo borrar este tema de debate',

	'discussion:reply:edit' => 'Editar respuesta',
	'discussion:reply:deleted' => 'La respuesta se ha eliminado.',
	'discussion:reply:error:notfound' => 'No se encontró la respuesta',
	'discussion:reply:error:notfound_fallback' => "Lo sentimos, no se pudo encontrar la respuesta especificada, pero te hemos reenviado al tema de debate original.",
	'discussion:reply:error:notdeleted' => 'No se pudo borrar la respuesta al debate',

	'discussion:search:title' => 'Respuesta en el tema: %s',

	/**
	 * Action messages
	 */
	'discussion:reply:missing' => 'No puedes enviar una respuesta vacía',
	'discussion:reply:topic_not_found' => 'No se encontró el tema de debate',
	'discussion:reply:error:cannot_edit' => 'No tienes permisos para editar esta respuesta',

	/**
	 * River
	 */
	'river:create:object:discussion' => '%s añadió un nuevo tema de debate %s',
	'river:reply:object:discussion' => '%s respondió en el tema de debate %s',
	'river:reply:view' => 'ver respuesta',

	/**
	 * Notifications
	 */
	'discussion:topic:notify:summary' => 'Nuevo tema de debate llamado %s',
	'discussion:topic:notify:subject' => 'Nuevo tema de debate: %s',
	'discussion:topic:notify:body' =>
'%s añadió un nuevo tema de debate "%s":

%s

Ver y responder al tema de debate:
%s
',

	'discussion:reply:notify:summary' => 'Nueva respuesta en tema: %s',
	'discussion:reply:notify:subject' => 'Nueva respuesta en tema: %s',
	'discussion:reply:notify:body' =>
'%s respondió al tema de debate "%s":

%s

Ver y responder en el debate:
%s
',

	'item:object:discussion' => "Temas de debate",
	'item:object:discussion_reply' => "Respuestas en los debates",

	'groups:enableforum' => 'Activar debates de grupo',

	'reply:this' => 'Responder a esto',

	/**
	 * ecml
	 */
	'discussion:ecml:discussion' => 'Debates de grupo',

	/**
	 * Discussion status
	 */
	'discussion:topic:status' => 'Estado del tema',
	'discussion:topic:closed:title' => 'Esta discusión está cerrada.',
	'discussion:topic:closed:desc' => 'Esta discusión está cerrada y no acepta nuevos comentarios.',

	'discussion:replies' => 'Respuestas',
	'discussion:addtopic' => 'Añadir un tema',
	'discussion:post:success' => 'Tu respuesta fue enviada satisfactoriamente',
	'discussion:post:failure' => 'Hubo un problema mientras se envió tu respuesta',
	'discussion:topic:edit' => 'Editar mensaje',
	'discussion:topic:description' => 'Mensaje del tema',

	'discussion:reply:edited' => "Has editado correctamente el mensaje del foro.",
	'discussion:reply:error' => "Hubo un problema editando el mensaje del foro.",

	//hypeWall

	'item:object:hjwall' => 'Mensajes del muro',
	
	'wall' => 'Muro',

	'wall:settings:model' => 'Modelo',
	'wall:settings:model:select' => 'Selecciona el modelo para los mensajes del muro',
	'wall:settings:model:wall' => 'Usar la funcionalidad por defecto del muro',
	'wall:settings:model:wire' => 'Usar wire',
	'wall:settings:model:character_limit' => 'Limitar el numero de caracteresin un mensaje de estado a (0 sin límite)',

	'wall:settings:form' => 'Formularios del muro',
	'wall:settings:default_form' => 'Formulario por defecto',
	'wall:settings:features' => 'Utilidades de mensajes del muro',
	'wall:settings:status' => 'Actualizar estado',
	'wall:settings:url' => 'Comparte un enlace',
	'wall:settings:photo' => 'Comparte una foto',
	'wall:settings:file' => 'Comparte un fichero',
	'wall:settings:content' => 'Comparte contenido',
	'wall:settings:geopositioning' => 'Activar geoposicionamiento',
	'wall:settings:tag_friends' => 'Activar etiquetado de amigos',
	'wall:settings:third_party_wall' => 'Permitir a los usuarios escribir en muros de otros usuarios que no son amigos '
	. '(cada usuario tendra que autorizar para recibir mensajes del muro de no amigos)',
	'wall:usersettings:river_access_id' => 'Visibilidad de las etiquetas del muro',
	'wall:usersettings:river_access_id:help' => 'Who can see that you were tagged in someone else\'s wall post, '
	. 'if the original post was not shared with them?',
	'wall:usersettings:third_party_wall' => 'Allow people who are not your friends to post on your wall',

	'wall:write' => 'Escribir en el muro',
	'wall:view' => 'Ver el muro',

	'wall:empty' => 'Este muro esta vacío',
	'wall:notfound' => 'No se pudo encontrar el mensaje',

	'wall:tag:friends' => 'Etiquetar amigos',
	'wall:tag:friends:hint' => 'Etiquetar amigos: empieza la busqueda tecleando su nombre',
	'wall:tag:location:hint' => 'Añadir una ubicación: buscar ubicaciones previamente etiquetadas o añadir una nueva',
	'wall:tag:location:findme' => 'Encuéntrame - Tu navegador podría solicitarte que permitas a este sitio usar tu ubicación actual',
	'wall:tag:river' => '%s etiquetó %s en un %s',
	'wall:tag:river:post' => 'mensaje',

	'wall:status:placeholder' => '¿Qué estás pensando?',
	'wall:url:placeholder' => 'Añade un mensaje',

	'wall:tagged:post' => 'un mensaje',
	'wall:tagged:notification:subject' => '%s te etiquetó en %s',
	'wall:tagged:notification:message' => '
		%s te etiquetó en un mensaje: <br />
		<blockquote>
			%s
		</blockquote>
		Puedes ver el mensaje aquí:
		%s
	',

	'wall:new:notification:generic' => 'Nuevo mensje',
	'wall:new:notification:summary' => 'Nuevo mensaje %s', // New post on X's wall
	'wall:new:notification:subject' => '%s publicó %s', // X posted on Y's wall
	'wall:new:notification:message' => '
		%s escribió %s: <br />
		<blockquote>
			%s
		</blockquote>
		Puedes ver el mensaje aquí:
		%s
	',

	'wall:owner:suffix' => ' en el muro de %s',
	'wall:byline' => ' de %s',
	'wall:with' => '- con %s',
	'wall:at' => ' al lado de %s',
	'wall:attached:single' => '[1 attachment]',
	'wall:attached' => ' [%s attachments]',
	
	'wall:new:wall:post' => '%s publicó en el muro de %s',
	'wall:new:address' => 'compartió un enlace',
	'wall:new:images' => 'incluyó %s imagenes',
	'wall:new:items' => 'publicó %s items',
	'wall:new:attachments' => 'incluyó %s imagenes y %s otros elementos',
	'wall:new:status' => 'publicó',
	'wall:new:onwall' => 'en el muro de %s',

	'wall:status' => 'Actualiza estado',
	'wall:url' => 'Comparte un enlace',
	'wall:content' => 'Comparte contenido',
	'wall:attachment' => 'Crea an adjunto',
	'wall:location' => 'Añade un lugar',
	'wall:tag_friends' => 'Etiqueta amigos',
	'wall:upload_file' => 'Selecciona un fichero',
	'wall:find_me' => 'Encuéntrame',
	'wall:post' => 'Publica',
	'wall:photo' => 'Comparte una foto',
	'wall:file' => 'Comparte un fichero',
	'wall:owner' => 'Muro de %s',
	'wall:moreposts' => 'Más mensajes',
	'wall:filefolder' => 'Subidas al muro',
	'wall:upload' => 'Subir un fichero al muro',
	'wall:photo:placeholder' => 'Comenta esta foto',
	'wall:file:placeholder' => 'Comenta este fichero',
	'wall:filehasntuploaded' => 'Por favor, espera a que suba el fichero',


	'wall:create:success' => 'El mensaje del muro se creo correctamente',
	'wall:create:error' => 'No se pudo crear el mensaje',
	'wall:process:posting' => 'Publicando...',

	'wall:error:ajax' => 'La página remota no está accesible',
	'wall:error:container_permissions' => 'No tienes suficientes permisos papara escribir aquí',
	'wall:error:empty_form' => 'Por favor, dinos qué piensas o añade un enlace primero',

	'wall:delete' => 'Borrar mensaje del muro',
	'wall:delete:success' => 'El mensaje del muro se borró correctamente',
	'wall:delete:error' => 'No se pudo borrar el mensaje del muro',
	
	'wall:remove_tag' => 'Eliminar etiqueta',
	'wall:remove_tag:success' => 'Ya no estás etiquetado en este mensaje',
	'wall:remove_tag:error' => 'No se pudo borrar la etiqueta',

	'wall:post:status_update' => 'la actualización de estado %s',
	'wall:post:wall_to_wall' => 'Mensaje del muro %s',

	'wall:ecml:url' => 'Dirección URL del muro',
	'wall:ecml:attachment' => 'Adjunto del muro',
	'wall:ecml:river' => 'Modelo de actividad',

	'wall:upload:success' => 'El fichero se subió correctamente',
	'wall:upload:error' => 'No se pudo subir el fichero',

	'wall:characters_remaining' => "caracteres que faltan",
	'wall:make_bookmark' => 'Guardar este enlace en mis favoritos',

	'wall:numbertodisplay' => 'Número de ultimos mensajes a mostrar',

	'wall:target:thewire' => 'wire',
	'wall:target:hjwall' => 'muro',

	'wall:ownership:own' => 'en su %s',
	'wall:ownership:your' => 'en tu %s',
	'wall:ownership:owner' => 'on %s\'s %s',

	'wall:widget:description' => 'Permite a otros ver tu muro y escribir en el',
	'wall:widget:showaddform' => 'Muestra un formulario para anadir nuevos mensajes',

	'wall:groups:enable' => 'Activa el muro del grupo',
	'wall:groups' => 'Muro del grupo',
	'wall:groups:post' => 'Post',

	'wall:settings:status_input_type' => 'Tipo de entrada a mostrar para el campo estado',
	'wall:settings:status_input_type:text' => 'Una línea',
	'wall:settings:status_input_type:plaintext' => 'Multilínea (sin editor)',
	'wall:settings:status_input_type:longtext' => 'Multilínea (con editor, si está activado)',

	'hypeWall:usersettings:plugins' => 'Muro',

	//hypeMechanics

	'mechanics:leaderboard' => 'Clasificación',
	'mechanics:badges:mine' => 'Mis Logros',
	'mechanics:badges:owner' => '\Logros de %s',
	'mechanics:history' => 'Mis puntos',

	'mechanics:leaderboard:empty' => 'No hay usuarios en esta clasificación',
	'mechanics:badges:empty' => 'No hay logros que mostrar',
	'mechanics:user_badges:empty' => 'No has conseguido ningún logro todavía',
	
    'mechanics:score:earned:reason' => '%s',
	'mechanics:score:earned:for' => 'Has ganado %s puntos por %s',
	'mechanics:score:lost:for' => 'Has perdido %s puntos por %s',

	'mechanics:update:object:groupforumtopic' => 'Editar group forum topic',
	'mechanics:delete:object:groupforumtopic' => 'Borrar group forum topic',
	
	'mechanics:create:object:hjforumtopic' => 'Añadir tema al foro',
	'mechanics:update:object:hjforumtopic' => 'Editar tema en foro',
	'mechanics:delete:object:hjforumtopic' => 'Borrar tema del foro',
	
	'mechanics:create:object:hjalbum' => 'Añadir album',
	'mechanics:update:object:hjalbum' => 'Editar album',
	'mechanics:delete:object:hjalbum' => 'Borrar album',
	
	'mechanics:create:object:hjalbumimage' => 'Añadir imagen al album',
	'mechanics:update:object:hjalbumimage' => 'Editar imagen',
	'mechanics:delete:object:hjalbumimage' => 'Borrar imagen de album',
	
	'mechanics:create:object:hjplace' => 'Añadir un lugar',
	'mechanics:update:object:hjplace' => 'Actualizar un lugar',
	'mechanics:delete:object:hjplace' => 'Borrar un lugar',
	
	'mechanics:create:object:hjeducation' => 'Añadir experiencia educativa',
	'mechanics:update:object:hjeducation' => 'Actualizar experiencia educativa',
	'mechanics:delete:object:hjeducation' => 'Borrar experiencia educativa',
	
	'mechanics:create:object:hjexperience' => 'Añadir experiencia laboral',
	'mechanics:update:object:hjexperience' => 'Actualizar experiencia laboral',
	'mechanics:delete:object:hjexperience' => 'Borrar experiencia laboral',
	
	'mechanics:create:object:hjlanguage' => 'Añadir lenguaje',
	'mechanics:update:object:hjlanguage' => 'Actualizar lenguaje',
	'mechanics:delete:object:hjlanguage' => 'Borrar lenguaje',
	
	'mechanics:create:object:hjportfoliofile' => 'Añadir archivo al portfolio',
	'mechanics:update:object:hjportfoliofile' => 'Editar archivo en portfolio',
	'mechanics:delete:object:hjportfoliofile' => 'Borrar archivo del portfolio',

	'mechanics:create:object:hjskill' => 'Añadir destreza',
	'mechanics:update:object:hjskill' => 'Editar destreza',
	'mechanics:delete:object:hjskill' => 'Borrar destreza',

	'mechanics:create:object:favorite_track' => 'Importar canción favorita desde SoundCloud',
	'mechanics:update:object:favorite_track' => 'Actualizar canción favorita',
	'mechanics:delete:object:favorite_track' => 'Borrar canción favorita',

	'mechanics:create:object:playlist' => 'Importar playlist desde SoundCloud',
	'mechanics:update:object:playlist' => 'Actualizar playlist',
	'mechanics:delete:object:playlist' => 'Borrar playlist',

	'mechanics:create:object:track' => 'Importar canción desde SoundCloud',
	'mechanics:update:object:track' => 'Actualizar canción',
	'mechanics:delete:object:track' => 'Borrar canción',

	'mechanics:update:annotation:comment' => 'Actualizar comentario',
	'mechanics:delete:annotation:comment' => 'Borrar comentario',


	'mechanics:update:annotation:group_topic_post' => 'Editar entrada del grupo del foro',
	'mechanics:delete:annotation:group_topic_post' => 'Eliminar entrada del grupo del foro',


	'mechanics:update:annotation:likes' => 'Editar Me gusta',
	'mechanics:delete:annotation:likes' => 'Quitar Me gusta',

	'mechanics:create:annotation:likes:reverse' => 'Me gusta en tu post',

	'mechanics:create:annotation:starrating' => 'Crear contribución',
	'mechanics:update:annotation:starrating' => 'Editar contribución',
	'mechanics:delete:annotation:starrating' => 'Eliminar contribucción',

	'mechanics:create:annotation:starrating:reverse' => 'Recibir una contribución en tu ítem',

	'mechanics:delete:relationship:friend' => 'Eliminar amigo',



	'mechanics:update:group:default' => 'Actualizar grupo',
	'mechanics:delete:group:default' => 'Eliminar grupo',

	'mechanics:leave:group:user' => 'Dejar grupo',

	'mechanics:create:object:hjannotation:generic_comment' => 'Añadir comentario',
	'mechanics:update:object:hjannotation:generic_comment' => 'Editar comentario',
	'mechanics:delete:object:hjannotation:generic_comment' => 'Eliminar comentario',

	'mechanics:create:object:hjannotation:generic_comment:reverse' => 'Recibir comentario',

	'mechanics:create:object:hjannotation:likes' => 'Nuevo Me gusta',
	'mechanics:update:object:hjannotation:likes' => 'Editar Me gusta',
	'mechanics:delete:object:hjannotation:likes' => 'Quitar Me gusta',

	'mechanics:create:object:hjannotation:likes:reverse' => 'Me gusta en tu post',

	'mechanics:create:object:hjannotation:group_topic_post' => 'Contestar group forum topic',
	'mechanics:update:object:hjannotation:group_topic_post' => 'Actualizar group forum topic',
	'mechanics:delete:object:hjannotation:group_topic_post' => 'Borrar contestación a group forum topic',

	'mechanics:create:object:hjannotation:hjforumpost:reverse' => 'Recibir respuesta a tema del foro',

	'mechanics:create:object:hjannotation:hjforumpost' => 'Añadir contestación a tema del foro',
	'mechanics:update:object:hjannotation:hjforumpost' => 'Editar entrada del tema en foro',
	'mechanics:delete:object:hjannotation:hjforumpost' => 'Borrar entrada del tema en foro',

	'mechanics:delete:object:hjannotation:hjforumpost:reverse' => 'Recibir contestación a tu tema del foro',

	'mechanics:allownegativetotal' => 'Permitir saldo total puntos negativo (el usuario podrá ejecutar acción y la puntuación total se volverá negativa)',
	'mechanics:forbidnegativetotal' => 'No permitir saldo total puntos negativo (usuario no puede ejecutar la acción si esta provoca un saldo en negativo)',

	'mechanics:negativereached' => 'Con esta acción tendrías un saldo total puntos en negativo. Debes conseguir más puntos',	

	'river:create:object:hjbadge' => '%s ha creado un nuevo logro %s',
	'river:claim:object:hjbadge' => '%s ha sido premiado con un nuevo logro | %s',

	'mechanics:badges:site' => 'Logros pendientes',
	'mechanics:badges:add' => 'Añadir nuevo logro',
	'mechanics:badges:edit' => 'Editar %s',

	'label:hjbadge:icon' => 'Imagen del logro',
	'label:hjbadge:title' => 'Nombre',
	'label:hjbadge:description' => 'Descripción',
	'label:hjbadge:badge_type' => 'Tipo de logro',

	'mechanics:badges:new' => 'Nuevos logros',
	'mechanics:badge:create' => 'Crear un nuevo logro',
	
	'badge_type:value:status' => 'Estatus',
	'badge_type:value:experience' => 'Experiencia',
	'badge_type:value:purchase' => 'En venta',
	'badge_type:value:surprise' => 'Especial',

	'label:hjbadge:rules' => 'Requerimientos para adquirir este logro',
	'mechanics:badges:rules' => 'Definiciones de reglas',
	'mechanics:badges:rule' => 'Accion',
	'mechanics:badges:recurse' => 'Repeticiones',

	'label:hjbadge:points_required' => 'Mínimo número de puntos requeridos para este logro',
	'label:hjbadge:points_cost' => 'Número de puntos a gastar para adquirir este logro',
	
	'label:hjbadge:badges_required' => 'Otros logros requeridos antes de conseguir este logro',

	'label:hjbadge:access_id' => 'Disponibilidad (Nivel Acceso)',

	'mechanics:badge:requirements' => 'Requisitos y tu progreso',
	'mechanics:pointsrequired' => 'Total puntos usuario',
	'mechanics:badgesrequired' => 'Otros logros requeridos',
	'mechanics:badge:pointscost' => 'Te costará <b>%s puntos</b> obtener este logro',

	'mechanics:claim' => 'Solicitar',
	'mechanics:claim:confirm' => '¿Estás seguro quieres solicitar este logro y gastar %s puntos?',
	
	'mechanics:badge:congratulations' => 'Puedes solicitar este logro.',
	'mechanics:badge:claim' => 'Solicitar este logro',
	'mechanics:alreadyclaimed' => 'Enhorabuena! Has sido premiado con este logro',
	'mechanics:badge:usersclaimed' => 'Últimos 20 usuarios que han reclamado este logro',

	'mechanics:badge:claim:success' => 'Felicidades! Has conseguido un nuevo logro "%s"',
	'mechanics:badge:claim:failure' => 'Oops, algo fue mal. Inténtalo de nuevo',
	'mechanics:badge:ineligible' => 'Algo no se ha calculado. Prueba más tarde',

	'mechanics:badge:purchase' => 'Coste logro',
	
	'mechanics:currentstatus' => 'Estatus: <b>%s</b>',
	'mechanics:currentscore' => 'Puntuación: <b>%s</b>',

	'mechanics:badges' => 'Logros',
	'mechanics:points' => 'Puntos',

	'mechanics:points:history' => 'Tu historial de puntos',
	'mechanics:points:history:owner' => 'Historial de puntos de %s',

	'comments:notify:activity_type:claim' => 'logro obtenido',

	'admin:mechanics' => 'Game Mechanics',

	'mechanics:widget:badges' => 'Logros',
	'mechanics:widget:badges:description' => 'Logros ganados por el usuario',

	'mechanics:leaderboard:limit' => 'Mostrar',
	'mechanics:leaderboard:period' => 'Periodo',
	'mechanics:period:all' => 'Todo el tiempo',
	'mechanics:period:year' => 'Último año',
	'mechanics:period:month' => 'Último mes',
	'mechanics:period:week' => 'Última semana',
	'mechanics:period:day' => 'Últimas 24h',

	'mechanics:admin:reset' => 'Resetear puntos usuario',
	'mechanics:action:reset:error' => 'La puntuación para este usuario no puede ser reseteada',
	'mechanics:action:reset:success' => '%s historial ha sido eliminado correctamente; %s errores han ocurrido',
	'mechanics:admin:reset:negativescore' => 'El usuario tiene puntuación negativa. No puedes descontarle ningún punto',
	'mechanics:admin:award' => 'Punto premio',
	'mechanics:admin:award_to' => 'Puntos premio a %s',
	'mechanics:admin:award:amount' => 'Número  de puntos a sumar o restar',
	'mechanics:admin:award:note' => 'Notificar al usuario',
	'mechanics:admin:award:error_permissions' => 'No tienes permiso para ejecutar esta acción',
	'mechanics:admin:award:error_amount' => 'La cantidad no puede ser 0',
	'mechanics:admin:award:success' => 'Los puntos se han añadido correctamente',
	'mechanics:admin:penalty:success' => 'Los puntos se han quitado correctamente',
	'mechanics:admin:award:error' => 'Puntos no pueden ser premiados',
	
	'mechanics:create:award' => 'Puntos añadidos',
	'mechanics:create:award:message' => '
		%s te ha añadido %s puntos.

		Ha añadido la siguiente nota:
		<blockquote>%s</blockquote>

		Puedes ver el resumen de tu cuenta aqui:
		%s
		',

	'mechanics:create:penalty' => 'Penalty',
	'mechanics:create:penalty:message' => '
		%s te ha penalizado con %s puntos.

		Te han dejado este motivo:
		<blockquote>%s</blockquote>

		Puedes ver el resumen de tu cuenta aqui:
		%s
		',

	'mechanics:no_note' => 'No se ha facilitado motivo',
	
	'mechanics:badge:delete:success' => 'Logro ha sido borrado correctamente',
	'mechanics:badge:delete:error' => 'Logro no puede ser borrado',

	'mechanics:badge:create:success' => 'El logro ha sido creado correctamente',
	'mechanics:badge:edit:success' => 'El logro ha sido actualizado correctamente',
	'mechanics:badge:edit:error' => 'El logro no ha sido actualizado correctamente',
	
	'mechanics:settings:throttling' => 'Acelerando',
	'mechanics:settings:throttling:help' => 'Especificar el número máximo de puntos y repeticiones que un usuario puede adquirir (0 sín límites)',
	'mechanics:settings:daily_max' => 'Máximo número de puntos por día',
	'mechanics:settings:daily_action_max' => 'Máximo numero de puntos por acción en un día',
	'mechanics:settings:alltime_action_max' => 'Máximo puntos acumulativos para una acción',
	'mechanics:settings:daily_recur_max' => 'Repeticiones máximas diarias de una acción',
	'mechanics:settings:alltime_recur_max' => 'Repeticiones máximas acumulativas de una acción',
	'mechanics:settings:object_recur_max' => 'Repeticiones máximas en una acción sobre un objeto simple',
	'mechanics:settings:daily_object_max' => 'Máximo número de puntos por objeto/día',
	'mechanics:settings:alltime_object_max' => 'Máximo número de puntos acumulativos en un objeto simple',
	'mechanics:settings:action_object_max' => 'Máximo número de puntos acumulativos en un objeto con la misma acción',
	'mechanics:settings:allow_negative_total' => 'Permitir a usuarios tener totales en negativo',
	'mechanics:settings:allow_negative_total:help' => 'Si se asigna no, los usuarios no podrán ejecutar acciones que pongan su puntuación total en negativo',
	'mechanics:settings:scoring_rules' => 'Reglas de puntuación',
	'mechanics:settings:scoring_rules:help' => 'Especificar un número de puntos positivo o negativo que el usuario recibirá para una acción (0 para saltar)',
	
	'mechanics:filter' => 'Filtrar',
	'mechanics:select' => 'Seleccionar...',

	'mechanics:badge:edit:error_empty_title' => 'El nombre del logro no puede estar vacío',
	'mechanics:badge:edit:error_upload' => 'Debes subir una imagen para el logro',

	'mechanics:ajax:error' => 'La página no está respondiendo',

	'mechanics:rule:progress' => 'Hasta el momento has conseguido %d puntos. Todavía puedes conseguir <label> %d </label>más.',
	'mechanics:rule:maxpointsdone'  => 'Ya has conseguido el máximo de puntos posible.',
		
	'mechanics:publish:object:hjwall:mywall' => 'Publicar una entrada en tu muro',
	'mechanics:publish:object:hjwall:mywall:desc' => 'Cada vez que publiques algo en tu muro conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:publish:object:hjwall:otherwall' => 'Publicar una entrada en un muro distinto al tuyo',
	'mechanics:publish:object:hjwall:otherwall:desc' => 'Cada vez que publiques algo en un muro distinto al muro conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:publish:object:hjwall:group' => 'Publicar una entrada en el muro de un grupo de tu propiedad',
	'mechanics:publish:object:hjwall:group:desc' => 'Cada vez que publiques algo en el muro de un grupo de tu propiedad conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:publish:object:hjwall:group:notgroupowner' => 'Publicar una entrada en el muro de un grupo que no es de tu propiedad',
	'mechanics:publish:object:hjwall:group:notgroupowner:desc' => 'Cada vez que publiques algo en el muro de un grupo que no sea de tu propiedad conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:publish:object:hjwall:private' => 'Publicar una entrada con visibilidad "Privado"',
	'mechanics:publish:object:hjwall:private:desc' => 'Cada vez que publiques una entrada y en el selector de audiencia escojas "Privado" conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:publish:object:hjwall:everybody' => 'Publicar una entrada con visibilidad "Toda la red"',
	'mechanics:publish:object:hjwall:everybody:desc' => 'Cada vez que publiques una entrada y en el selector de audiencia escojas "Toda la red" conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:publish:object:hjwall:friends' => 'Publicar una entrada con visibilidad "Amigos"',
	'mechanics:publish:object:hjwall:friends:desc' => 'Cada vez que publiques una entrada y en el selector de audiencia escojas "Amigos" conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:publish:object:hjwall:collection' => 'Publicar una entrada con visibilidad para una colección de amigos',
	'mechanics:publish:object:hjwall:collection:desc' => 'Cada vez que publiques algo en tu muro y en el selector de audiencia escojas una de tus colecciones de amigos conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:join:group:user:reverse' => 'Alguien se une a alguno de mis grupos ',
    'mechanics:join:group:user:reverse:desc' => 'Cada vez alguien se una a alguno de tus grupos conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:create:object:photo' => 'Añadir una foto en alguno de tus álbumes',
	'mechanics:create:object:photo:desc' => 'Cada vez que subas una foto a alguno de tus álbumes conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:create:object:group:photo' => 'Añadir una foto en uno de los grupos de tu propiedad',
	'mechanics:create:object:group:photo:desc' => 'Cada vez que subas una foto a algún álbum de un grupo, siendo tú el propietario de ese grupo, conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:create:object:group:photo:notgroupowner' => 'Añadir una foto en un grupo que no es de tu propiedad',
	'mechanics:create:object:group:photo:notgroupowner:desc' => 'Cada vez que subas una foto a algún álbum de un grupo que no sea de tu propiedad conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:create:object:group:photo:reverse' => 'Alguien añade una foto en alguno de mis grupos',
	'mechanics:create:object:group:photo:reverse:desc' => 'Cada vez que alguien suba una foto a un álbum de alguno de tus grupos conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:create:object:album:private' => 'Hacer que la visibilidad de un álbum sea "Privado"',
	'mechanics:create:object:album:private:desc' => 'Cada vez que hagas que la visibilidad de un álbum sea "Privado" conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:create:object:album:friends' => 'Hacer que la visibilidad de un álbum sea "Amigos"',
	'mechanics:create:object:album:friends:desc' => 'Cada vez que hagas que la visibilidad de un álbum sea "Amigos" conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:create:object:album:everybody' => 'Hacer que la visibilidad de un álbum sea "Toda la red"',
	'mechanics:create:object:album:everybody:desc' => 'Cada vez que hagas que la visibilidad de un álbum sea "Toda la red" conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:create:object:album:collection' => 'Hacer que la visibilidad de un álbum sea una colección de amigos o un grupo',
	'mechanics:create:object:album:collection:desc' => 'Cada vez que hagas que la visibilidad de un álbum sea una colección de amigos o un grupo conseguirás %d puntos hasta un máximo de %d puntos.',
		
		
		
	'mechanics:create:annotation:comment:group' => 'Añadir un comentario en el muro de un grupo',
	'mechanics:create:annotation:comment:group:desc' => 'Cada vez que comentes algo en el muro de un grupo conseguirás %d puntos hasta un máximo de %d puntos.',
	'mechanics:create:annotation:comment:group:reverse' => 'Alguien añade un comentario en alguno de mis grupos',
	'mechanics:create:annotation:comment:group:reverse:desc' => 'Cada vez que alguien comente algo en el muro de alguno de tus grupos conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:create:object:groupforumtopic' => 'Añadir un tema de discusión en un grupo',
	'mechanics:create:object:groupforumtopic:desc' => 'Cada vez crees un tema de discusión en un grupo conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:create:group:default' => 'Crear un grupo',
	'mechanics:create:group:default:desc' => 'Cada vez que crees un grupo conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:create:annotation:comment' => 'Añadir un comentario',
	'mechanics:create:annotation:comment:desc' => 'Cada vez que comentes algo conseguirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:create:annotation:comment:reverse' => 'Recibir un comentario',
	'mechanics:create:annotation:comment:reverse:desc' => 'Cada vez alguien comente algo que hayas publicado conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:create:annotation:group_topic_post' => 'Responder a un tema de discusión',
	'mechanics:create:annotation:group_topic_post:desc' => 'Cada vez que respondas a un tema de discusión de un grupo conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:create:annotation:group_topic_post:reverse' => 'Recibir respuesta a tu tema de discusión',
	'mechanics:create:annotation:group_topic_post:reverse:desc' => 'Cada vez que recibas una respuesta a uno de tus temas de discusión conseguirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:create:annotation:likes' => 'Añadir Me gusta',
	'mechanics:create:annotation:likes:desc' => 'Cada vez que indiques que algo te gusta conseguirás %d puntos hasta un máximo de %d puntos.',

		
	'mechanics:create:annotation:likes:reverse' => 'Recibir un Me gusta',
	'mechanics:create:annotation:likes:reverse:desc' => 'Cada vez que recibas un me gusta conseguirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:login:user:default' => 'Iniciar sesión',
	'mechanics:login:user:default:desc' => 'Cada vez que inicies sesión recibirás %d puntos hasta un máximo de %d puntos.',

	'mechanics:profileupdate:user:everybody' => 'Actualizar algún campo de perfil con acceso Toda la red',
	'mechanics:profileupdate:user:everybody:desc' => 'Cada vez que actualices tu perfil, y el acceso a alguno de los campos sea Toda la red, te recibirás %d puntos hasta un máximo de %d puntos.',
		
	'mechanics:profileupdate:user:private' => 'Actualizar algún campo de perfil con acceso Privado',
	'mechanics:profileupdate:user:private:desc' => 'Cada vez que actualices tu perfil, y el acceso a alguno de los campos sea Privado, te recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:profileupdate:user:friends' => 'Actualizar algún campo de perfil con acceso Amigos',
	'mechanics:profileupdate:user:friends:desc' => 'Cada vez que actualices tu perfil, y el acceso a alguno de los campos sea Amigos, te recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:profileupdate:user:collection' => 'Actualizar algún campo de perfil con acceso a una colección de amigos',
	'mechanics:profileupdate:user:collection:desc' => 'Cada vez que actualices tu perfil, y el acceso a alguno de los campos sea una colección de amigos, te recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:profileiconupdate:user:default' => 'Subir avatar',
	'mechanics:profileiconupdate:user:default:desc' => 'Cada vez que actualices tu avatar recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:join:group:user' => 'Unirte a un grupo',
	'mechanics:join:group:user:desc' => 'Cada vez que te unas a un grupo recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:create:relationship:friend' => 'Has hecho un amigo',
	'mechanics:create:relationship:friend:desc' => 'Cada vez que hagas un amigo recibirás %d puntos hasta un máximo de %d puntos.',
	
	'mechanics:create:relationship:friend:reverse' => 'Aceptar una solicitud de amistad',
	'mechanics:create:relationship:friend:reverse:desc' => 'Cada que vez que aceptes una solicitud de amistad recibirás %d puntos hasta un máximo de %d puntos.',
		
	// hypeApps

	'apps:action:error' => 'Ocurrió un error y ha sido registrado. Por favor, contacte al administrador si el error persite',
	'apps:validation:error' => 'Una o más campos están incompletos o contienen datos mal formados.',
	'apps:validation:error:prop' => 'El valor para \'%s\' no es válido',
	'apps:permissions:error' => 'No tiene suficientes permisos para esta acción',
	'apps:entity:error' => 'La entidad no existe o no tienes permisos para acceder',

	'apps:delete:success' => '%s ha sido borrado',
	'apps:delete:error' => '%s no puede borrarse',

	'apps:item' => 'elemento',

	// hypeFaker

	'admin:developers:faker' => 'Generar Datos de Demostración',

	'faker:data' => 'Generar elementos de demostración',
	'faker:delete' => 'Eliminar elementos de demostración',
	'faker:delete:success' => 'Los datos de demostración se han borrado correctamente',
	'faker:delete:error' => 'Se abandonaron %s elementos ...',

	'faker:gen_users' => 'Generar usuarios',
	'faker:gen_users:count' => 'Número de usuarios a generar',
	'faker:gen_users:password' => 'Password por defecto a establecer',
	'faker:gen_users:email_domain' => 'Correo del dominio (no hay que hacer spam)',
	
	'faker:gen_users:success' => 'Se crearon correctamente %s cuentas de usuario',
	'faker:gen_users:error' => 'Se crearon %s cuentas de usuario<br />%s cuentas no pudieron crearse debido a lo siguiente: (%s)',

	'faker:gen_friends' => '(re)Generar amistades y acceder a colecciones',
	'faker:gen_friends:max' => 'Máximo número de amigos',
	'faker:gen_friends:success' => '%s relaciones de amistad generadas; %s colecciones de amigos y usuarios han sido creadas',

	'faker:gen_groups' => 'Generar grupos',
	'faker:gen_groups:count' => 'Número de grupos para cada combinación Amistad-Accessibilidad-Visibilidad (total of 12 combinaciones)',
	'faker:gen_groups:featured_count' => 'Número de grupos a caracterizar',
	'faker:gen_groups:success' => '%s grupos se crearon correctamente',
	'faker:gen_groups:error' => '%s grupos se crearon correctamente; %s grupos no se pudieron crear',

	'faker:gen_group_members' => '(re)Generar la pertenencia al grupo',
	'faker:gen_group_members:max' => 'Máximo número de miembros, solicitudes de pertenencia e invitados a añadir a cada grupo',
	'faker:gen_group_members:success' => '%s miembros, %s invitados, se han ñadido %s solicitudes de pertenencia a %s',

	'faker:gen_blogs' => 'Generar blogs',
	'faker:gen_blogs:count' => 'Número de usuarios a utilizar como base para generar blogs (los blogs se generarán para grupos a los que pertenezca el miembro)',
	'faker:gen_blogs:success' => 'Se crearon satisfactoriamente %s blogs',
	'faker:gen_blogs:error' => 'Se crearon satisfactoriamente %s blogs; %s blogs no pudieron crearse',

	'faker:gen_bookmarks' => 'Generar favoritos',
	'faker:gen_bookmarks:count' => 'Número de usuarios a utilizar como base para generar favoritos (los favoritos se generarán para grupos a los que pertenezca el miembro)',
	'faker:gen_bookmarks:success' => 'Se crearon satisfactoriamente %s favoritos',
	'faker:gen_bookmarks:error' => 'Se crearon satisfactoriamente %s favoritos; %s favoritos no pudieron crearse',

	'faker:gen_files' => 'Generar ficheros',
	'faker:gen_files:count' => 'Número de usuarios a usar como base para generar ficheros (los ficheros se generarán para grupos a los que pertenezca el grupo)',
	'faker:gen_files:success' => '%s ficheros se crearon correctamente',
	'faker:gen_files:error' => '%s ficheros se crearon correctamente; %s ficheros no pudieron crearse',

	'faker:gen_pages' => 'Generar páginas',
	'faker:gen_pages:count' => 'Número de usuarios a utilizar como base para generar páginas (se generarán páginas para grupos a los que pertenezca el grupo)',
	'faker:gen_pages:max_children' => 'Máximo número de subpáginas a crear',
	//'faker:gen_pages:depth' => 'Depth of the tree',
	'faker:gen_pages:success' => 'Se crearon correctamente %s páginas',
	'faker:gen_pages:error' => 'Se crearon correctamente %s páginas; %s páginas no pudieron crearse',

	'faker:gen_wire' => 'Generar mensajes del Wire',
	'faker:gen_wire:count' => 'Número de mensajes del nivel superior en el Wire a generar',
	'faker:gen_wire:max_replies' => 'Máximo número de respuestas por mensaje del Wire',
	'faker:gen_wire:success' => 'Se crearon correctamente %s mensajes del Wire',
	'faker:gen_wire:error' => 'Se crearon correctamente %s mensajes del Wire ; %s mensajes del Wire no se crearon',

	'faker:gen_messages' => 'Generar mensajes',
	'faker:gen_messages:count' => 'Número de mensajes por usuario para generar',
	'faker:gen_messages:success' => 'Se crearon correctamente %s mensajes',
	'faker:gen_messages:error' => 'Se crearon correctamente %s mensajes; %s mensajes no se crearon',

	// hypeInteractions	

	/**
	 * SETTINGS
	 */
	'interactions:settings:max_comment_depth' => 'Comentar la profundidad del arbol',
	'interactions:settings:max_comment_depth:help' => 'How deep can replies to comments go? 1 = no replies, 5 = replies allowed up to 4th descendant',
	'interactions:settings:comment_form_position' => 'Position of the comments form',
	'interactions:settings:comment_form_position:help' => 'Where should the form be positioned in relation to the comments list?',
	'interactions:settings:comment_form_position:before' => 'Before the list',
	'interactions:settings:comment_form_position:after' => 'After the list',
	'interactions:settings:comments_order' => 'Comments ordering',
	'interactions:settings:comments_order:help' => 'In which order should the comments be displayed: chronological (oldest on top, newest at the bottom) to reverse',
	'interactions:settings:comments_order:chronological' => 'Chronological',
	'interactions:settings:comments_order:reverse_chronological' => 'Reverse chronological',
	'interactions:settings:comments_load_style' => 'Viewing and loading of comments',
	'interactions:settings:comments_load_style:load_older' => 'Show newest comments with a link to load older comments',
	'interactions:settings:comments_load_style:load_newer' => 'Show older comments with a link to load newer comments',
	'interactions:settings:comments_limit' => 'Number of comments to show initially',
	'interactions:settings:comments_load_limit' => 'Number of comments to load per iteration',
	/**
	 * PAGES
	 */
	'interactions:comments:title' => 'Comenta en %s',
	'interactions:likes:title' => 'Personas a las que les gusta %s',
	'interactions:comments:edit:title' => 'Editar comentario',
	/**
	 * COMMENT ENTITY
	 */
	'interactions:comment:create' => 'Comentario',
	'interactions:reply:create' => 'Responder',
	'interactions:likes:before' => 'Me gusta',
	'interactions:likes:after' => 'No me gusta',
	'interactions:comment:subject' => 'el comentario de %s',
	'interactions:comment:body' => '%s<span>: </span>%s',
	'interactions:comment:upload' => 'Subir un fichero',
	/**
	 * NOTIFICATIONS
	 */
	'interactions:attachments:labelled' => 'Adjuntoss: ',
	'interactions:reply:email:subject' => '%s respondió a %s',
	'interactions:reply:email:body' => "%s respondió a %s:

%s

Para responder o ver el item origen, pulse aqui:
%s

Para ver el perfil de %s, pulse aqui:
%s

Por favor, no responda a este correo.",
	'interactions:comment:email:subject' => '%s comentado en %s',
	'interactions:comment:email:body' => "%s comentado en %s:

%s

Para responder o ver el item original, pulse aquí:
%s

Para ver el perfil de %s, pulse aquí:
%s

Por favor, no responda a este correo.",
	'interactions:likes:notifications:subject' => 'A %s le gusta %s',
	'interactions:likes:notifications:body' =>
	'A %s le gusta %s

Ver el mensaje original aquí:
%s

o ver el perfil de %s aquí:
%s
',
	'interactions:post' => 'publicación',
	'interactions:comment' => 'comentario',
	'interactions:comment:reply_to' => 'a %s',
	'interactions:ownership:own' => 'su %s',
	'interactions:ownership:your' => 'tu %s',
	'interactions:ownership:owner' => '%s\'s %s',
	/**
	 * ACTIONS
	 */
	'interactions:detach' => 'Salirse',
	'interactions:detach:success' => 'Item has been successfully detached',
	'interactions:detach:error' => 'Item could not be detached',
	/**
	 * RIVER
	 */
	'interactions:like:object:default' => 'A %s le gustó %s',
	'interactions:comments:no_results' => 'No se ha realizado ningun comentario',
	'interactions:likes:no_results' => 'Este item no le ha gustado a nadie todavía',

	// hypeLists

	'lists:settings:pagination_type' => 'Tipo de paginación por defecto',
	'lists:settings:pagination_type:help' => 'Establecer esta opción reemplazará la paginación con una alternativa basada en Ajax en su sitio web.
		Si no desea es comportamiento, por favor consulte el README para saber cómo conseguir este comportamiento mediante programación.',
	'lists:settings:pagination_type:off' => 'Apagado',
	'lists:settings:pagination_type:default' => 'Por defecto',
	'lists:settings:pagination_type:infinite' => 'Infinito',

	'lists:load:before' => 'Mostrar los %s anteriores',
	'lists:load:after' => 'Mostrar los %s siguientes',
	'lists:load:remaining' => 'Mostrar restantes',

	// hypeDropzone

	'dropzone:response_error' => 'Ha ocurrido un error desconocido',
	'dropzone:default_message' => '<strong>Dejar los ficheros aquí</strong><br /><span>o pulse para seleccionarlos desde su ordenador</span>',
	'dropzone:remove_file' => 'Quitar',
	'dropzone:max_files_exceeded' => 'Has llegado al máximo número de ficheros que puedes subir de una vez',
	'dropzone:fallback_message' => 'Tu navegador no soporta subidas por drag and drop',
	'dropzone:fallback_text' => 'Por favor, usa el campo de fichero para subir los ficheros de la manera antigua',
	'dropzone:invalid_filetype' => 'No se permiten los ficheros de este tipo',
	'dropzone:file_too_big' => 'El fichero es demasiado grande',
	'dropzone:cancel_upload' => 'Cancelar la subida',
	'dropzone:cancel_upload_confirmation' => '¿Estás seguro de que quieres cancelar la subida',
	'dropzone:server_side_error' => 'Error del servidor',
	'dropzone:file_not_entity' => 'La entidad del fichero no pudo crearse',

	// hypeDirectory

	'members:title:all' => 'Todos',
	'members:title:alpha' => 'Lista alfabética',
	
	'members:no_results' => 'Ningún miembro coincide con tu consulta',

	'directory:tabs:disable' => 'Deshabilitada',
	'directory:tabs:position' => 'Posición %s',
	'directory:tabs:position:help' => 'Elige la posición en la que esta pestaña debería aparecer, o selecciona Dehabilitada para quitarla',

	'directory:disabled_public_access' => 'Deshabilitar el aacceso público',
	'directory:disabled_public_access:help' => 'Restringir el acceso solo a usuarios registrados',

	'directory:sorts:disable' => 'Deshabilitada',
	'directory:sorts:position' => 'Posición %s',
	'directory:sorts:position:help' => 'Elige la posición en la que esta opción de clasificación debería aparecer, o selecciona Dehabilitada para quitarla',

	'directory:default_sort' => 'Orden por defecto',
	'directory:default_sort:help' => 'Selecciona el órden por defecto en la pestaña Todos',

	// user_sort

	'user:sort:label' => 'Ordenar',
	'user:sort:search:label' => 'Buscar',
	'user:sort:search:placeholder' => 'Introducir palabra de búsqueda...',
	'user:sort:search:empty' => 'No hay resultados que coincidan con la consulta',
	
	'user:sort:alpha::asc' => 'Alfabéticamente',
	'user:sort:alpha::desc' => 'Alfabéticamente en orden inverso',
	'user:sort:time_created::asc' => 'Las cuentas más antiguas primero',
	'user:sort:time_created::desc' => 'Las cuentas más nuevas primero',
	'user:sort:friend_count::desc' => 'Los que tienen más amigos primero',
	'user:sort:friend_count::asc' => 'Los que tienen menos amigos primero',
	'user:sort:last_action::asc' => 'Conectado más recientemente',
	'user:sort:last_action::desc' => 'Conectado menos recientemente',

	//pesedia
	'pesedia:registration' => "El código de registro no es correcto",

);

