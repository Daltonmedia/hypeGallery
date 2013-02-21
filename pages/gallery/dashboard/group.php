<?php

hj_gallery_register_dashboard_title_buttons('group');

$group = elgg_get_page_owner_entity();
$title = elgg_echo('hj:gallery:albums:owner', array($group->name));

elgg_push_breadcrumb($title);

$content = elgg_view('framework/gallery/dashboard/group');

$sidebar = elgg_view('framework/gallery/dashboard/sidebar', array(
	'dashboard' => 'group'
));

$layout = elgg_view_layout('content', array(
	'title' => $title,
	'filter' => false,
	'content' => $content,
	'sidebar' => $sidebar,
	'class' => 'hj-forum-dashboard'
));

echo elgg_view_page($title, $layout);