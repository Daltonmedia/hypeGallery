<?php if (FALSE) : ?><style type="text/css"><?php endif; ?>
<?php
$path = elgg_get_site_url() . 'mod/hypeGallery/graphics/';
?>

	.elgg-menu-photostream {
		text-align: right;
		margin: 15px 10px 0;
	}
	.elgg-menu-photostream > li.elgg-state-selected a {
		color: #fff;
		background: #666;
	}
	.elgg-menu-photostream > li a {
		color: #666;
		padding: 5px 10px;
	}

	.gallery-photostream {
		-moz-column-count: 2;
		-webkit-column-count: 2;
		column-count: 2;
	}
	.gallery-photostream > li {
		vertical-align:top;
	}
	.gallery-album-cover,
	.gallery-media-cover {
		position: relative;
		padding: 5px;
		border:1px solid #e8e8e8;
		margin: 10px;
		width:325px;
	}
	.gallery-full {
		border:1px solid #e8e8e8;
	}
	.gallery-full .gallery-album-cover {
		padding:0;
		margin:0;
		width:100%;
		min-height:250px;
		margin-bottom:20px;
		border:0;
		overflow:hidden;
	}
	.gallery-full .gallery-album-cover .gallery-album-meta {
		margin:20px;
	}
	.gallery-album-cover-placeholder {
		background:#ccc url(<?php echo $path ?>placeholder.png) 50% 50% no-repeat;
		background-size:40%;
		opacity:0.6;
	}
	
	.gallery-album-author, .gallery-media-author {
		position: absolute;
		top: 190px;
		right: 10px;
		border: 1px solid #fff;
		padding: 0px;
		background: #000;
		height: 30px;
		width: 30px;
	}
	.gallery-album-author img  {
		width: 30px;
		height: 30px;
	}
	.gallery-album-title {
		padding:8px 0px 5px 10px;
		font-weight:bold;
		font-size:14px;
		max-width:225px;
		display:inline-block;
	}

	.gallery-album-count {
		position:absolute;
		top:190px;
		right:45px;
		background:#000;
		color:#fff;
		padding:6px 10px 7px;
		font-weight:bold;
		border:1px solid #fff;
	}
	.gallery-album-info-link {
		display: inline-block;
		margin: 5px;
	}
	.gallery-media-summary {
		padding: 3px;
		border: 1px solid #e8e8e8;
		margin: 10px;
		width:325px;
	}
	.gallery-media-title {
		padding: 8px 0 5px 10px;
		font-weight: bold;
		font-size: 14px;
		display: inline-block;
		max-width: 185px;
	}
	.gallery-media-author {
		position: absolute;
		top: -15px;
		width: 40px;
		height: 40px;
		right: 5px;
		border: 1px solid #fff;
	}
	.gallery-media-meta {
		position: relative;
	}
	.gallery-media-info-link {
		display: inline-block;
		margin: 5px;
	}
	.gallery-media-album {
		position: absolute;
		top: -15px;
		border: 1px solid #fff;
		right: 50px;
	}

	.gallery-media-meta-details > li {
		display: block;
		padding: 3px 0 3px 10px;
	}
	.gallery-media-extras .elgg-menu-entity {
		float: none;
		margin: 0;
		padding: 2px;
		height: auto;
		text-align:center;
		background:#f4f4f4;
		border-top:1px solid #e8e8e8;
	}
	.gallery-media-extras .elgg-menu-entity > li {
		margin: 1px;
		padding: 5px 10px;
		background: #f4f4f4;
		display:inline-block;
		vertical-align:middle;
		line-height:22px;
	}
	.gallery-media-extras .elgg-menu-entity > li a {
		height:22px;
	}
	.gallery-media-extras .elgg-menu-entity > li.elgg-menu-item-access,
	.gallery-media-extras .elgg-menu-entity > li a span {
		display:none;
	}
	.gallery-media-extras .elgg-menu-entity > li:hover {
		background: #f1f1f1;
	}
	.gallery-media-extras .elgg-menu-entity > li a {
		display: block;
	}
	.elgg-subtext .gallery-media-meta-details > li {
		margin: 0;
		display: inline-block;
		padding: 5px 15px 0 0;
		vertical-align: middle;
	}

	.gallery-media-full {
		border: 1px solid #e8e8e8;
		position:relative;
	}
	.gallery-media-full-view {
		margin: 0 auto;
		position: relative;
		line-height: 550px;
		text-align: center;
	}
	.gallery-media-full-view img {
		vertical-align:middle;
	}
	
	.gallery-media-full .gallery-media-meta-details {
		margin: 15px 0;
	}

	[class*="gallery-icon-"] {
		height:22px;
		width:22px;
		display:inline-block;
		vertical-align:middle;
		background-position:50% 50%;
		background-repeat:no-repeat;
		background-size:100%;
		opacity:0.5;
	}
	[class*="gallery-icon-"].icon-small {
		height:16px;
		width:16px;
	}
	[class*="gallery-icon-"] + span {
		margin-left: 5px;
		display: inline-block;
		vertical-align: middle;
		line-height: 26px;
	}
	[class*="gallery-icon-"].icon-small + span {
		line-height: 16px;
	}
	.gallery-icon-tag {
		background-image:url(<?php echo $path ?>icons/tag.png);
	}
	.gallery-icon-friend {
		background-image:url(<?php echo $path ?>icons/friend.png);
	}
	.gallery-icon-download {
		background-image:url(<?php echo $path ?>icons/download.png);
	}
	.gallery-icon-makeavatar {
		background-image:url(<?php echo $path ?>icons/makeavatar.png);
	}
	.gallery-icon-edit {
		background-image:url(<?php echo $path ?>icons/edit.png);
	}
	.gallery-icon-delete {
		background-image:url(<?php echo $path ?>icons/delete.png);
	}
	.gallery-icon-approve {
		background-image:url(<?php echo $path ?>icons/approve.png);
	}
	.gallery-icon-upload {
		background-image:url(<?php echo $path ?>icons/upload.png);
	}
	.gallery-icon-manage {
		background-image:url(<?php echo $path ?>icons/manage.png);
	}
	.gallery-icon-cropper {
		background-image:url(<?php echo $path ?>icons/cropper.png);
	}
	.gallery-icon-drag {
		background-image:url(<?php echo $path ?>icons/drag.png);
	}
	.gallery-icon-makecover {
		background-image:url(<?php echo $path ?>icons/makecover.png);
	}
	.gallery-icon-info {
		background-image:url(<?php echo $path ?>icons/info.png);
	}
	.gallery-icon-slideshow {
		background-image:url(<?php echo $path ?>icons/slideshow.png);
	}
	.elgg-state-loading [class*="gallery-icon-"],
	[class*="gallery-icon-"].elgg-state-loading	{
		background-image:url(<?php echo $path ?>ajax-loader.gif);
	}

	.elgg-form-edit-object-hjalbum,
	.elgg-form-gallery-upload {
		padding:15px;
		border:1px solid #e8e8e8;
		background:#f4f4f4;
	}

	.elgg-form-edit-object-hjalbum label,
	.elgg-form-gallery-upload label {
		display:block;
		margin:10px 0 5px 0;
	}

	.elgg-form-edit-object-hjalbum .gallery-filedrop-buttonbank input {
		display:none;
	}
	
	.elgg-form-edit-object-hjalbum .elgg-foot,
	.elgg-form-gallery-upload .elgg-foot,
	.elgg-form-gallery-manage .elgg-foot {
		margin:10px;
		padding:10px;
		border-top:1px solid #e8e8e8;
	}

	.gallery-hidden-details-toggle.elgg-state-active {
		display:none;
	}

	#gallery-hidden-details {
		margin-bottom:20px;
	}

	.gallery-item-in-bulk {
		text-align: left;
		font-size: 0.8em;
		border: 1px solid #fff;
		margin-top: 3px;
		padding: 5px 10px;
		background: #eee;
	}
	.gallery-item-in-bulk .gallery-media-extras {
		margin-top: 5px;
		padding-top: 5px;
		border-top: 1px solid #fff;
	}

	.gallery-manage-album .gallery-media-cover > .gallery-media-menu {
		position: absolute;
		right: 0;
		top: 0;
		text-align: right;
		display: none;
		margin:5px;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu.elgg-menu-entity-drag {
		right:auto;
		left:0;
		top:0;
	}
	.elgg-menu-item-drag a {
		cursor:move;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li.elgg-menu-item-position {
		width: 30px;
		height: 22px;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li.elgg-menu-item-position input {
		margin: 0;
		padding: 2px;
		border-radius: 0;
		text-align: center;
	}
	.gallery-manage-album .gallery-media-cover:hover > .gallery-media-menu {
		display:block;
	}

	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li {
		padding: 4px;
		margin: 4px;
		background: #e8e8e8;
		border: 1px solid #fff;
		display: inline-block;
		vertical-align: top;
		float: none;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li:hover {
		background:#fff;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li a span {
		display: none;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li.elgg-menu-item-access {
		display: none;
	}
	.gallery-manage-album .gallery-media-cover > .gallery-media-menu li.hidden {
		display: none;
	}

	.gallery-full .gallery-album-cover .gallery-album-cover-placeholder {
		background-size:25%;
	}


	/* SLIDESHOW */

	.gallery-album-cover .gallery-popup {
		position: absolute;
		top: 10px;
		right: 10px;
		border: 1px solid #e8e8e8;
		background-color: #fff;
		padding:2px;
		opacity:0.5;
	}
	.gallery-album-cover .gallery-popup:hover {
		opacity:1;
	}

	.gallery-media-cover .gallery-popup {
		position: absolute;
		top: 10px;
		right: 10px;
		background: #fff;
		padding: 2px;
		border: 1px solid #e8e8e8;
		display: none;
	}
	.gallery-media-cover:hover .gallery-popup {
		display: block;
		opacity: 0.6;
	}
	
	.ui-dialog.gallery-slideshow {
		background: #191919;
		margin: 0;
		padding: 0;
		border: 5px solid #fff;
		border-radius: 3px;
	
		box-shadow: 0 0 10px #191919;
	}
	.ui-dialog.gallery-slideshow .elgg-ajax-loader {
		position:absolute;
		top:0;
		bottom:0;
		left:0;
		right:0;
		height: 100%;
		width:100%;
		background:transparent url(<?php echo $path ?>slideshow-loader.gif) no-repeat 50% 50%;
	}


	.ui-dialog.gallery-slideshow .ui-dialog-titlebar {
		background: #eee;
		border: 0;
		padding: 0.7em 1em;
		border-bottom: 2px solid #fff;
	
	}
	.ui-dialog.gallery-slideshow .ui-dialog-content {
		padding: 0;
	}
	.ui-dialog.gallery-slideshow .preview-pane {
		position: absolute;
		bottom: 0;
		left: 0;
		padding: 0;
		background: #eee;
		border-top: 5px solid #fff;
		width: 100%;
		overflow: hidden;
		height: 140px;
	}
	.ui-dialog.gallery-slideshow .preview-pane:hover,
	.ui-dialog.gallery-slideshow .preview-pane:active {
		transition: 0.5s ease-in;
		-webkit-transition: 0.5s ease-in;
	}
	.ui-dialog.gallery-slideshow .preview-pane ul {
		position:relative;
		white-space:nowrap;
		padding: 3px 0;

		transition: margin-left 0.5s linear;
		-webkit-transition: margin-left 0.5s linear;
	}
	.ui-dialog.gallery-slideshow .preview-pane li {
		display: inline-block;
		margin: 4px;
		vertical-align: middle;
		width: 106px;
		height: 120px;
		overflow: hidden;
		text-align: center;
	
		position: relative;
		border: 1px solid transparent;
		background: #fff;
	}

	.ui-dialog.gallery-slideshow .preview-pane li img {
		position: absolute;
		left: 0;
		right: 0;
		top: 3px;
		bottom: 0;
		margin: 0 auto;
		cursor: pointer;
		background:transparent url(<?php echo $path ?>ajax-loader.gif) no-repeat 50% 50%;
	}
	
	.ui-dialog.gallery-slideshow .preview-pane li:first-child {
		margin-left: 8px;
	}
	.ui-dialog.gallery-slideshow .preview-pane li:last-child {
		margin-right: 15px;
	}
	.ui-dialog.gallery-slideshow .preview-pane li.elgg-state-selected, .ui-dialog.gallery-slideshow .preview-pane li:hover {
		border-color: #FFD39B;
		box-shadow: 0 0 10px #DC8909;
	}

	.ui-dialog.gallery-slideshow .master-pane {
		position: relative;
		height: 100%;
		width: 100%;
		overflow: hidden;
	}
	.ui-dialog.gallery-slideshow .master-view {
		position: absolute;
		top: 0;
		bottom: 140px;
		width: 100%;
		height: auto;
		right: 0;
		left: 0;
	}
	.ui-dialog.gallery-slideshow .master-view img {
		position:absolute;
		top:0;
		bottom:0;
		left:0;
		right:0;
		height: 100%;
		width:auto;
		min-width:100px;
		background:transparent url(<?php echo $path ?>slideshow-loader.gif) no-repeat 50% 50%;
		margin:0 auto;
	}
	.gallery-slideshow .master-view .meta-title {
		position: absolute;
		padding: 5px 25px;
		top: 20px;
		left: 20px;
		font-weight: bold;
		color: #fff;
		background: #444;
		line-height:20px;
		cursor:pointer;
		transition:left 2s;
		-webkit-transition:left 2s;
	}
	.gallery-slideshow .master-view .meta-title.elgg-state-active {
		left:10%;
		right:10%;
	}
	.gallery-slideshow .master-view .meta-title:before {
		content:"";
		display: block;
		vertical-align:middle;
		background: #fff url(<?php echo $path ?>icons/info.png) no-repeat 50% 50%;
		background-size: 18px;
		height:20px;
		width:20px;
		margin-right: 10px;
		-webkit-border-radius:10px;
		-moz-border-radius:10px;
		border-radius:10px;
		position: absolute;
		left: -10px;
	}
	.gallery-slideshow .master-view .meta-title.elgg-state-active:before {
		background-image: url(<?php echo $path ?>icons/delete.png);
	}
	.gallery-slideshow .meta-description {
		position: absolute;
		padding: 20px;
		top: 50px;
		left: 10%;
		right: 10%;
		width: 80%;
		height: 80%;
		font-weight: bold;
		color: #fff;
		border: 5px solid #444;
		background: #444;
		background: rgba(68,68,68,0.8);
		display:none;
		overflow-x:hidden;
		overflow-y:auto;
		transition:display 3s ease-in;
		-webkit-transition:display 3s ease-in;
		-webkit-box-sizing:border-box;
		-moz-box-sizing:border-box;
		box-sizing:border-box;
	}
	.gallery-slideshow .meta-description .elgg-ajax-loader {
		background:transparent url(<?php echo $path ?>ajax-loader.gif) no-repeat 50% 50%;
	}
	.gallery-slideshow .meta-description a {
		color:#fff;
	}
	.ui-dialog.gallery-slideshow .controls {
		display:none;
	}
	.ui-dialog.gallery-slideshow .master-pane:hover .controls {
		display:block;
	}
	.ui-dialog.gallery-slideshow .controls .prev,
	.ui-dialog.gallery-slideshow .controls .next {
		position: absolute;
		z-index:400;
		left:20px;
		top: 45%;
		height: 28px;
		width: 28px;
		display: block;
		background:#fff url(<?php echo $path ?>icons/arrow-left.png) no-repeat 50% 50%;
		background-size:26px;
		cursor: pointer;

		-webkit-border-radius:13px;
		-moz-border-radius:13px;
		border-radius:13px;
	}
	.ui-dialog.gallery-slideshow .controls .next {
		left:auto;
		right:20px;
		background:#fff url(<?php echo $path ?>icons/arrow-right.png) no-repeat 50% 50%;
	}

	.ui-dialog.gallery-slideshow .controls .prev.hidden,.ui-dialog.gallery-slideshow .controls .next.hidden {
		display:none;
	}

	.ui-dialog.gallery-slideshow .controls .pager {
		position: absolute;
		z-index:400;
		display: block;
		background:#444;
		color:#fff;
		font-weight:bold;
		padding: 5px 10px;

		margin: 0 auto;
		right: 20px;
		top: 20px;
		line-height: 20px;
	}



	/* CROPPER */
	.elgg-form-gallery-thumb {
		padding:10px;
		margin:10px 0;
		border:1px solid #e8e8e8;
		background:#f4f4f4;
	}

	.elgg-form-gallery-thumb .gallery-crop-master-wrapper,
	.elgg-form-gallery-thumb .gallery-crop-preview-wrapper {
		position: relative;
		display: inline-block;
		vertical-align: top;
		margin:10px;
	}
	.elgg-form-gallery-thumb .gallery-crop-preview-wrapper {
		max-width:250px;
	}
	.elgg-form-gallery-thumb .gallery-crop-preview-wrapper .elgg-col {
		width:100px;
		display:inline-block;
		vertical-align:bottom;
		float:none;
		margin-right:10px;
	}
	.elgg-form-gallery-thumb label {
		display:block;
		margin:10px 0 5px;
		padding:0 0 5px;
		border-bottom:1px solid #e8e8e8;
	}
	.elgg-form-gallery-thumb #gallery-crop-preview,
	.elgg-form-gallery-thumb #gallery-crop-current {
		height:100px;
		width:100px;
		overflow:hidden;
	}
	.elgg-form-gallery-thumb .elgg-foot {
		margin:10px;
		padding:10px;
		border-top:1px solid #e8e8e8;
	}

	.ui-dialog .elgg-form-gallery-thumb {
		width: 100%;
		margin: 0;
		height: 100%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing:border-box;
		box-sizing: border-box;
	}

	.ui-dialog .elgg-form-gallery-thumb fieldset {
		text-align: center;
	}

	.tagger-float {
		position:absolute;
		display:none;
		margin-top: -25px;
		margin-left: -25px;
		z-index: 5000;
	}
	.tagger-circle, .tagger-tag {
		width: 76px;
		height: 76px;
		border: 4px dotted #fff;
		display: block;
		box-shadow: 0 0 12px #eee;
		-webkit-border-radius:71px;
		-moz-border-radius:71px;
		border-radius: 71px;
	}
	.tagger-circle.ui-draggable {
		cursor:move;
	}
	.tagger-close {
		display: none;
		vertical-align:middle;
		background: #fff url(<?php echo $path ?>icons/delete.png) no-repeat 50% 50%;
		background-size: 18px;
		height:20px;
		width:20px;
		margin-right: 15px;
		-webkit-border-radius:10px;
		-moz-border-radius:10px;
		border-radius:10px;
		position: absolute;
		top: -10px;
		right: -237px;
		z-index:5001;
	}
	.elgg-state-loading .tagger-close {
		background: #fff url(<?php echo $path ?>ajax-loader.gif) no-repeat 50% 50%;
	}
	.tagger-float form {
		display:none;
		height: 79px;
		background:#fff;
		background: rgba(255,255,255,0.35);
		position: absolute;
		top: -1px;
		left: 0px;
		border: 4px solid transparent;
		-webkit-border-radius: 71px 5px 5px 71px;
		-moz-border-radius: 71px 5px 5px 71px;
		border-radius: 71px 5px 5px 71px;
		width: 200px;
		padding-left: 90px;

		box-shadow: 3px 1px 10px #666;
	}
	.tagger-float form input,
	.tagger-float form input:focus {
		margin:5px 0 0 7px;
		border: none;
		background:#fff;
		background: rgba(255,255,255,0.6);
		color: #000;
		width: 185px;
		line-height: 26px;
		padding: 3px 10px;
		-webkit-border-radius:0;
		-moz-border-radius:0;
		border-radius: 0;

	}

	.tagger-float form input.ui-autocomplete-loading {
		background-image:url(<?php echo $path ?>ajax-loader-transp.gif);
		background-position: 95% center;
		background-repeat: no-repeat;
	}
	.tagger-float form input[type="submit"] {
		background: rgba(255,255,255,0.85) url(<?php echo $path ?>icons/save.png) no-repeat 50% 50%;
		background-size: 16px;
		height:30px;
		width:30px;
		margin-right: 15px;
		-webkit-border-radius:10px;
		-moz-border-radius:10px;
		border-radius: 22px;
		position: absolute;
		bottom: -13px;
		right: -35px;

		color: transparent;
		font-size: 0;
		border: 2px solid #000;
	}

	.gallery-autocomplete {
		position: relative;
		margin: 0px 13px 2px -10px;
	}
	.gallery-autocomplete i {
		position: absolute;
	}
	.gallery-autocomplete img {
		position: absolute;
		right: 4px;
		top: 9px;
	}

	.elgg-gallery.gallery-tags-list .gallery-tag {
		display: inline-block;
		margin: 0px 4px 4px 4px;
		background: #f4f4f4;
		padding: 5px 15px;
		position: relative;
	}
	.gallery-tag i {
		position: absolute;
		top: -5px;
		right: -5px;
	}


	.gallery-media-tags {
		margin: 5px;
	}
	.gallery-media-tags label {
		display:block;
		font-size:12px;
		font-weight:normal;
		margin:4px 8px 8px;
	}
	.elgg-gallery.gallery-tags-list {
		text-align: left;
		display: inline-block;
		vertical-align: top;
	}

	.elgg-button-gallery-tagger {
		display: inline-block;
		width: 40px;
		height: 40px;
		background: #f4f4f4 url(<?php echo $path ?>icons/tag.png) 50% 50% no-repeat;
		background-size:26px;
		border: 1px solid #e8e8e8;
	}

	.elgg-button-gallery-tagger.elgg-state-active {
		background-color:yellow;
	}

	.gallery-tag a {
		color: #666;
		text-decoration: none;
		font-weight: bold;
		line-height: 25px;
		display: inline-block;
		vertical-align: middle;
	}
	.gallery-tag a img {
		margin: -8px 10px -8px -8px;
	}

	.elgg-module.hj-gallery-exif-module {
		margin: 10px;
	}
	.gallery-media-exif-details {
		margin: 10px 0;
	}
	.gallery-media-exif-details > li {
		padding: 5px 10px;
		border-bottom: 1px solid #e8e8e8;
	}
	.gallery-media-exif-details > li:last-child {
		border-bottom: 0;
	}
	.gallery-media-exif-details > li label {
		width: 30%;
		display: inline-block;
	}

<?php if (FALSE) : ?></style><?php endif; ?>