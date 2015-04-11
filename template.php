<?php

/**
 * @file
 * template.php
 */

function b2bdrupal_preprocess_page(&$variables){
	$search_box = drupal_get_form('search_form');
  $search_box['basic']['keys']['#title_display']='invisible';
  $search_box['basic']['submit']['#value']=t('Go');
  $variables['search_box'] = $search_box;
	if (module_exists('i18n_menu')) {
		$main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
      } else {
		$main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu'));
        }
	$variables['main_menu_tree']=$main_menu_tree;
}

?>
