<?php

$skyp_tables = [
	'cache_bootstrap',
	'cache_config',
	'cache_container',
	'cache_data',
	'cache_default',
	'cache_discovery',
	'cache_dynamic_page_cache',
	'cache_entity',
	'cache_menu',
	'cache_render',
	'cache_rest',
	'cachetags',
	'cache_toolbar',
];

$common_params = [
  'target-command-specific' => [
    'rsync' => [
      'mode' => 'rlcDz',
      'exclude-files' => TRUE,
      'exclude-from' => 'exclude-list.txt',
      'delete' => FALSE,
    ],
  ],
	'command-specific' => [
		'sql-dump' => [
			'structure-tables-list' => implode(',', $skyp_tables),
			'gzip' => true,
		],
		'sql-sync' => [
			'structure-tables-list' => implode(',', $skyp_tables),
		],
	],
];

$options['ssh-options'] = '-o PasswordAuthentication=no -i /Users/ndelazzari/.ssh/mondialfrutta_rsa';

$command_specific['config-export']['skip-modules'] = array('devel');
$command_specific['config-import']['skip-modules'] = array('pathauto');

$aliases['local'] = [
	'root' => getcwd(),
	'uri' => 'http://mondialfruttad8.dev/',
	'path-aliases' => [
		'%dump-dir' => '/tmp',
	],
];

$aliases['prod'] = [
	'root' => '/var/www/html',
	'uri' => 'http://www.mondialfrutta.com',
	'remote-host' => '37.186.139.228',
	'remote-user' => 'root',
  'path-aliases' => [

  ],
] + $common_params;
