<?php

$answer = elgg_extract('entity', $vars);

$description = [
	'name' => 'description',
	'id' => 'answer_description',
	'required' => 'required',
	'class' => 'validate-me',
	'value' => elgg_get_sticky_value('answer', 'description', $answer->description),
];

echo '<label for="answer_description">'.elgg_echo('answers:addyours').'</label>';
echo elgg_view('input/longtext', $description);

echo '<div class="mts">';
echo elgg_view('input/hidden', ['name' => 'container_guid', 'value' => $answer->getContainerGUID()]);
echo elgg_view('input/hidden', ['name' => 'guid', 'value' => $answer->getGUID()]);
echo elgg_view('input/submit', ['value' => elgg_echo('submit')]);
echo '</div>';
