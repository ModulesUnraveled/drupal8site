<?php

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 */
$settings['hash_salt'] = '4BjBAj-gHvkIgFEZ0rlci45sg4FYhZhs0eSirPAPmT3iJaisfdQvhzBnB7a4A0VSxNWyj8I_Eg';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = __DIR__ . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 *
 * @see file_scan_directory()
 * @see \Drupal\Core\Extension\ExtensionDiscovery::scanDirectory()
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

$settings['install_profile'] = 'standard';

$config_directories['sync'] = 'sites/default/files/config_NaZ43SS_dy6olOc3TmJWHxlTccD5qakFfdppAcdEG-50xuC1GRzDKw3gy_bke-kW5eBxixQD0Q/sync';

/**
 * Load local development override configuration, if available.
 * Keep this code block at the end of this file to take full effect.
 */
if (file_exists(__DIR__ . '/settings.local.php')) {
  include __DIR__ . '/settings.local.php';
}
