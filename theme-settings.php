<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param array $form
 *   The form.
 * @param array $form_state
 *   The form state.
 */
function b2bdrupal_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['social-twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Your twitter links'),
    '#default_value' => theme_get_setting('social-twitter'),
    '#description'   => t("enter your twitter link URL"),
  );
  $form['social-facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Your facebook links'),
    '#default_value' => theme_get_setting('social-facebook'),
    '#description'   => t("enter your facebook link URL"),
  );
  $form['social-google'] = array(
    '#type' => 'textfield',
    '#title' => t('Your Google Plus links'),
    '#default_value' => theme_get_setting('social-google'),
    '#description'   => t("enter your Google Plus link URL"),
  );
  $form['slideshow']=array(
    '#type' => 'fieldset', 
    '#title' => t('Slideshow Settings'), 
    '#collapsible' => TRUE, 
    '#collapsed' => TRUE,
  );
  $form['slideshow']['slide_1']=array(
    '#type' => 'fieldset', 
    '#title' => t('First Slide'), 
    '#collapsible' => TRUE, 
    '#collapsed' => TRUE,
  );
  $form['slideshow']['slide_1']['first_link']=array(
    '#type' => 'textfield',
    '#title' => t('First Link'),
    '#default_value' => theme_get_setting('first_link'),
    '#description'   => t("link to the first slide"),
  );
  $form['slideshow']['slide_1']['first_img']=array(
    '#type'     => 'managed_file',
    '#title'    => t('First Slide Image'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/images/',
    '#default_value' => theme_get_setting('first_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  $form['slideshow']['slide_2']=array(
    '#type' => 'fieldset', 
    '#title' => t('Second Slide'), 
    '#collapsible' => TRUE, 
    '#collapsed' => TRUE,
  );
    $form['slideshow']['slide_2']['second_link']=array(
    '#type' => 'textfield',
    '#title' => t('Second Link'),
    '#default_value' => theme_get_setting('second_link'),
    '#description'   => t("link to the second slide"),
  );
  $form['slideshow']['slide_2']['second_img']=array(
    '#type'     => 'managed_file',
    '#title'    => t('Second Slide Image'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/images/',
    '#default_value' => theme_get_setting('second_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  $form['slideshow']['slide_3']=array(
    '#type' => 'fieldset', 
    '#title' => t('Third Slide'), 
    '#collapsible' => TRUE, 
    '#collapsed' => TRUE,
  );
  $form['slideshow']['slide_3']['third_link']=array(
    '#type' => 'textfield',
    '#title' => t('Third Link'),
    '#default_value' => theme_get_setting('third_link'),
    '#description'   => t("link to the third slide"),
  );
  $form['slideshow']['slide_3']['third_img']=array(
    '#type'     => 'managed_file',
    '#title'    => t('Third Slide Image'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/images/',
    '#default_value' => theme_get_setting('third_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );


}
