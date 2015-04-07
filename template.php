<?php

/**
 * @file
 * template.php
 */

function b2bdrupal_preprocess_page(&$variables){
  $search_box = drupal_get_form('search_form');
  $search_box['basic']['keys']['#title_display']='invisible';
  $variables['search_box'] = $search_box;
  var_dump($search_box);
}

?>
