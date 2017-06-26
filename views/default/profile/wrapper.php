<?php
/**
 * Profile info box
 */

?>

<div class="profile elgg-col-3of3 mrn">
	<div class="elgg-inner clearfix h-card vcard">
		<?php echo elgg_view('profile/owner_block'); ?>
		<?php echo elgg_view('profile/details'); ?>
	</div>
</div>
<div class="profile-wall elgg-col-2of3 mrn">
	<?php
		elgg_push_context('wall');
		echo elgg_view('framework/wall/container', []);
		echo elgg_view('framework/wall/owner', []);
		elgg_pop_context();
	?>
</div>