<?php

/**
 * Entity rating form
 */
$entity = elgg_extract('entity', $vars, false);
$annotation_name = 'starrating';

if (!elgg_instanceof($entity)) {
	return;
}

$options = array(
	'name' => $annotation_name,
	'class' => 'elgg-stars-rating-input',
	'data-guid' => $entity->guid,
);

$subject_link = elgg_view('output/url', array(
	'href' => $entity->getURL(),
	'text' => $entity->name,
	'is_trusted' => true,
));

$body = '<div class="elgg-field">';

$body .= '<label>' . elgg_echo('rating_name:starrating', array($subject_link)) . '</label>';

$body .= elgg_view('input/stars', $options);

$body .= elgg_view('input/hidden', array(
	'name' => 'guid',
	'value' => $entity->guid,
		));

$body .= elgg_view('input/submit', array(
	'value' => elgg_echo('stars:rate'),
		));

$body .= '</div>';

echo $body;
