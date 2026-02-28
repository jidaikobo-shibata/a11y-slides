<?php

function get_slide_theme()
{
	$theme = filter_input(INPUT_GET, 'theme');
	return $theme === 'jidaikobo' ? 'jidaikobo' : 'generic';
}

function build_slide_url($path, $mode = null, $theme = null)
{
	$params = array();

	if ($mode !== null) {
		$params['mode'] = $mode;
	}

	if (($theme ?: get_slide_theme()) === 'jidaikobo') {
		$params['theme'] = 'jidaikobo';
	}

	$query = http_build_query($params);

	return $query === '' ? $path : $path . '?' . $query;
}
