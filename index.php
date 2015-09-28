<?php 

$info = array(
	'link' => $_app['ini'],
	'http_referer' => $_SERVER['HTTP_REFERER'],
	'remote_addr' => $_SERVER['REMOTE_ADDR']
);

(new ExternalLinks)->insertArray($info);

redirect302($info['link']);
