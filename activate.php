<?php

namespace hypeJunction\Gallery;

$subtypes = array(
	'hjalbum' => __NAMESPACE__ . '\\hjAlbum',
	'hjalbumimage' => __NAMESPACE__ . '\\hjAlbumImage',
	'hjimagetag' => ''
);

foreach ($subtypes as $subtype => $class) {
	if (get_subtype_id('object', $subtype)) {
		update_subtype('object', $subtype, $class);
	} else {
		add_subtype('object', $subtype, $class);
	}
}