<?php

require_once 'multiselect.civix.php';

/**
 * Implementation of hook_civicrm_config
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function multiselect_civicrm_config(&$config) {
  _multiselect_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function multiselect_civicrm_xmlMenu(&$files) {
  _multiselect_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function multiselect_civicrm_install() {
  return _multiselect_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function multiselect_civicrm_uninstall() {
  return _multiselect_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function multiselect_civicrm_enable() {
  return _multiselect_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function multiselect_civicrm_disable() {
  return _multiselect_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function multiselect_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _multiselect_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function multiselect_civicrm_managed(&$entities) {
  return _multiselect_civix_civicrm_managed($entities);
}

/**
 * Implementation of hook_civicrm_caseTypes
 *
 * Generate a list of case-types
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function multiselect_civicrm_caseTypes(&$caseTypes) {
  _multiselect_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implementation of hook_civicrm_alterSettingsFolders
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function multiselect_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _multiselect_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

function multiselect_civicrm_buildForm($formName, &$form) {
  CRM_Core_Resources::singleton()->addScriptFile('uk.co.vedaconsulting.module.multiselect', 'packages/jquery/plugins/select2/select2.js', 200, 'html-header', FALSE);
  CRM_Core_Resources::singleton()->addStyleFile('uk.co.vedaconsulting.module.multiselect', 'packages/jquery/plugins/select2/select2.css', 210, 'html-header', FALSE);

  CRM_Core_Resources::singleton()->addStyleFile('uk.co.vedaconsulting.module.multiselect', 'css/multiselect.css', 220, 'html-header', FALSE);
  CRM_Core_Resources::singleton()->addScriptFile('uk.co.vedaconsulting.module.multiselect', 'js/multiselect.js', 230, 'html-header', FALSE);
}
