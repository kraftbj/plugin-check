<?php
namespace WordPressdotorg\Plugin_Check;

$_SERVER['HTTP_HOST'] = 'wordpress.org';
$_SERVER['REQUEST_URI'] = '/plugins/';
require dirname( __DIR__, 4 ) . '/wp-load.php';

include_once dirname( __DIR__ ) . '/plugin.php';

$check = Plugin::instance();

var_dump(
	$check->run( dirname( __DIR__ ) )
);
