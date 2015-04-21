<?php

/**
 * @file
 * template.php
 */

function b2bdrupal_preprocess_page(&$variables){
  $theme_path=drupal_get_path('theme', 'b2bdrupal');
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
	if ($variables['is_front']) {
  		drupal_add_js($theme_path.'/js/swipe.js');
  		$vars['scripts'] = drupal_get_js(); 
  	}
  	$variables['slideshow']=array(
  		'first'=>array(
  			'link'=>theme_get_setting('first_link')?theme_get_setting('first_link'):'#',
  			'src'=>theme_get_setting('first_img')?file_create_url(theme_get_setting('first_img')->uri):$theme_path.'/images/slide1.jpg',
  			),
  		'second'=>array(
  			'link'=>theme_get_setting('second_link')?theme_get_setting('second_link'):'#',
  			'src'=>theme_get_setting('second_img')?file_create_url(theme_get_setting('second_img')->uri):$theme_path.'/images/slide2.jpg',
  			),
  		'third'=>array(
  			'link'=>theme_get_setting('third_link')?theme_get_setting('third_link'):'#',
  			'src'=>theme_get_setting('third_img')?file_create_url(theme_get_setting('third_img')->uri):$theme_path.'/images/slide3.jpg',
  			),
  		);
}

function b2bdrupal_form_alter (&$form,&$form_state,$form_id) {
  if ($form_id=='search_block_form') {
    $form['#attributes']['class'][]='form-control';
  }
}



?>
