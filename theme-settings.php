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
}
