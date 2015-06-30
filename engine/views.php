<?php
return [
	// viewtype
	"default" => [
		// view => path
		
		/**
		 * Relative paths (no leading slash) are resolved relative to Elgg's install root.
		 * 
		 * All assets managed by composer (not checked in to version control) should use this syntax.
		 */
		"jquery.js" => "vendor/bower-asset/jquery/dist/jquery.min.js",
		"jquery.min.map" => "vendor/bower-asset/jquery/dist/jquery.min.map",
		"jquery-migrate.js" => "vendor/bower-asset/jquery-migrate/jquery-migrate.min.js",
		"jquery.form.js" => "vendor/bower-asset/jquery-form/jquery.form.js",
		"jquery.imgareaselect.css" => "vendor/bower-asset/jquery-imgareaselect/distfiles/css/imgareaselect-deprecated.css",
		"jquery.imgareaselect.js" => "vendor/bower-asset/jquery-imgareaselect/jquery.imgareaselect.dev.js",
		"jquery.jeditable.js" => "vendor/bower-asset/jquery-jeditable/jquery.jeditable.js",
		"jquery.ui.autocomplete.html.js" => "vendor/bower-asset/jquery-ui-extensions/src/autocomplete/jquery.ui.autocomplete.html.js",
		"require.js" => "vendor/bower-asset/requirejs/require.js",
		"sprintf.js" => "vendor/bower-asset/sprintf/dist/sprintf.min.js",
		"text.js" => "vendor/bower-asset/text/text.js",

		/**
		 * __DIR__ should be utilized when referring to assets that are checked in to version control.
		 */
		"/" => dirname(__DIR__) . "/_graphics",

		"elgg/ui.autocomplete.js" => dirname(__DIR__) . "/js/lib/ui.autocomplete.js",
		"elgg/ui.avatar_cropper.js" => dirname(__DIR__) . "/js/lib/ui.avatar_cropper.js",
		"elgg/ui.friends_picker.js" => dirname(__DIR__) . "/js/lib/ui.friends_picker.js",
		"elgg/ui.river.js" => dirname(__DIR__) . "/js/lib/ui.river.js",

		"lightbox.css" => dirname(__DIR__) . "/vendors/elgg-colorbox-theme/colorbox.css",
		"colorbox-images/" => dirname(__DIR__) . "/vendors/elgg-colorbox-theme/colorbox-images",
	],
];