<?php
/**
 * @file
 * content_manger_feature_menu.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function content_manger_feature_menu_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-content-management-menu.
  $menus['menu-content-management-menu'] = array(
    'menu_name' => 'menu-content-management-menu',
    'title' => 'Content Management Menu',
    'description' => 'This menu is for the site content manager and the site admin for easier content management for the website',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Content Management Menu');
  t('This menu is for the site content manager and the site admin for easier content management for the website');


  return $menus;
}
