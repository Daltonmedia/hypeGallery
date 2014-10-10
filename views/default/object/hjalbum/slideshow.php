<?php

namespace hypeJunction\Gallery;

use ElggBatch;
use stdClass;

if (!elgg_is_xhr()) {
	forward(REFERER);
}

$entity = elgg_extract('entity', $vars);

if (elgg_instanceof($entity, 'object', 'hjalbum')) {
	$album = $entity;
	$current = false;
} else {
	$album = get_entity($entity->container_guid);
	$current = $entity->guid;
}

$dbprefix = elgg_get_config('dbprefix');
$subtype_id = get_subtype_id('object', 'hjalbumimage');
$access = _elgg_get_access_where_sql(array('table_alias' => 'e'));

$images = new ElggBatch('elgg_get_entities', array(
	'selects' => array('oe.title as title'),
	'types' => 'object',
	'subtypes' => 'hjalbumimage',
	'container_guids' => $album->guid,
	'joins' => array(
		"JOIN {$dbprefix}objects_entity oe ON oe.guid = e.guid",
	),
	'limit' => 0,
	'callback' => false,
		));

$data = array();
foreach ($images as $img) {
	$img_data = new stdClass();
	$img_data->guid = $img->guid;
	$img_data->title = $img->title;
	$data[] = $img_data;
}

print(json_encode(array(
			'img' => $data,
			'album_guid' => $album->guid,
			'album_title' => $album->title
)));
forward();
