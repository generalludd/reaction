<?php
use Symfony\Component\Dotenv\Dotenv;
$settings['hash_salt'] = 'jm-oQin1chSNbK52i853n0j5v4hiJTz5sRcnEtZ5s6vrJdWrXKCA0CKZ5SoxVlKbyTUJgJe0pQ';

$settings['update_free_access'] = FALSE;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
$config['system.logging']['error_level'] = 'verbose';
#$settings['rebuild_access'] = TRUE;
$settings['skip_permissions_hardening'] = TRUE;


$databases['default']['default'] = array (
  'database' => 'drupal',
  'username' => 'drupal',
  'password' => 'drupal',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);

$settings['config_sync_directory'] = '../config/sync';
$settings['file_private_path'] = 'sites/default/files/private';
$config['simple_oauth.settings']['public_key'] = 'private://keys/public.key';
$config['simple_oauth.settings']['private_key'] = 'private://keys/public.key';


/**
 * Enable local development services.
 */
$settings['container_yamls'][] = __DIR__ . '/includes/flightdeck.services.yml';


/**
 * Disable the render cache (this includes the page cache). Requires the
 * 'services.cache.backend.null.yml' container_yamls include above.
 */
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
$settings['reverse_proxy'] = TRUE;
$settings['reverse_proxy_addresses'] = array($_SERVER['REMOTE_ADDR']);
