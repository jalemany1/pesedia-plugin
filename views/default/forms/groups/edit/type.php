<?php
/**
 * Group edit form
 *
 * This view contains everything related to group types.
 * eg: how can people join this group, who can see the group, etc
 *
 * @package ElggGroups
 */

?>

<div>
	<label for="groups-types"><?php echo elgg_echo("groups:types"); ?></label><br />
	<div id="images"></div>
	<?php echo elgg_view('input/radio', array(
		'name' => 'policy',
		'id' => 'polic',
		'options' => array(
			elgg_echo('groups:policy:secret') => 5,
			//elgg_echo('groups:policy:privateNoVisPerm') => 4,
			//elgg_echo('groups:policy:privateVisNoPerm') => 3,
			elgg_echo('groups:policy:private') => 2,
			elgg_echo('groups:policy:public') => 1
		),
	));

	?>
</div>