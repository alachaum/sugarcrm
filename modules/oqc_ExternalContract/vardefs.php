<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2007 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
$dictionary['oqc_ExternalContract'] = array(
	'table'=>'oqc_externalcontract',
	'audited'=>true,
	'fields'=>array (
  'contractnumber' => 
  array (
    'required' => false,
    'name' => 'contractnumber',
    'vname' => 'LBL_CONTRACTNUMBER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'recordtoken' => 
  array (
    'required' => true,
    'name' => 'recordtoken',
    'vname' => 'LBL_RECORDTOKEN',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'account_id' => 
  array (
    'required' => false,
    'name' => 'account_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'account' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'account',
    'vname' => 'LBL_ACCOUNT',
    'type' => 'relate',
    'massupdate' => 1,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
    'id_name' => 'account_id',
    //'ext2' => 'Accounts',
    'table' => 'accounts',
    'module' => 'Accounts',
    //'quicksearch' => 'enabled',
    'studio' => 'visible',
    'rname' => 'name',
    'link' => 'account_link',
  ),
    'account_link' => 
    array (
      'name' => 'account_link',
      'type' => 'link',
      'relationship' => 'account_search',
      'vname' => 'LBL_ACCOUNT',
      'link_type' => 'one',
      'module' => 'Accounts',
      'bean_name' => 'Account',
      'source' => 'non-db',
    ),  
  'contact_id' => 
  array (
    'required' => false,
    'name' => 'contact_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'contactperson' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'contactperson',
    'vname' => 'LBL_CONTACTPERSON',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
    'id_name' => 'contact_id',
    //'ext2' => 'Employees',
    'table' => 'users',
    'module' => 'Users',
    //'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'clientcontact_id' => 
  array (
    'required' => false,
    'name' => 'clientcontact_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'clientcontactperson' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'clientcontactperson',
    'vname' => 'LBL_CLIENTCONTACTPERSON',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
    'id_name' => 'clientcontact_id',
    //'ext2' => 'Contacts',
    'table' => 'contacts',
    'module' => 'Contacts',
    //'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'technicalcontactperson' => 
  array (
    'required' => false,
    'source' => 'non-db',
    'name' => 'technicalcontactperson',
    'vname' => 'LBL_TECHNICALCONTACTPERSON',
    'type' => 'relate',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
    'id_name' => 'technicalcontact_id',
    //'ext2' => 'Contacts',
    'table' => 'contacts',
    'module' => 'Contacts',
    //'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'technicalcontact_id' => 
  array (
    'required' => false,
    'name' => 'technicalcontact_id',
    'vname' => '',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => 36,
  ),
  'minimumduration' => 
  array (
    'required' => false,
    'name' => 'minimumduration',
    'vname' => 'LBL_MINIMUMDURATION',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'startdate' => 
  array (
    'required' => false,
    'name' => 'startdate',
    'vname' => 'LBL_STARTDATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'display_default' => 'now',
  ),
  'enddate' => 
  array (
    'required' => false,
    'name' => 'enddate',
    'vname' => 'LBL_ENDDATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'externalcontracttype' => 
  array (
    'required' => true,
    'name' => 'externalcontracttype',
    'vname' => 'LBL_EXTERNALCONTRACTTYPE',
    'type' => 'enum',
    'massupdate' => 1,
    'default' => 'EVB-IT System',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => 100,
    'options' => 'externalcontracttype_list',
    'studio' => 'visible',
  ),
  'externalcontractmatter' => 
  array (
    'required' => false,
    'name' => 'externalcontractmatter',
    'vname' => 'LBL_EXTERNALCONTRACTMATTER',
    'type' => 'multienum',
    'massupdate' => 1,
//    'default' => 'Software',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => 400,
// Oh my dear! Just go on and hide the secret stuff. Where would we be if any
// one could create mulitenums safe and easily?  
    'isMultiSelect' => 1,
    'options' => 'externalcontractmatter_list',
    'studio' => 'visible',
  ),
  'contractnumberclient' => 
  array (
    'required' => false,
    'name' => 'contractnumberclient',
    'vname' => 'LBL_CONTRACTNUMBERCLIENT',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'dmsnumber' => 
  array (
    'required' => false,
    'name' => 'dmsnumber',
    'vname' => 'LBL_DMSNUMBER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'abbreviation' => 
  array (
    'required' => false,
    'name' => 'abbreviation',
    'vname' => 'LBL_ABBREVIATION',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => 'WEB',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => 100,
    'options' => 'externalcontractsabbreviation_list',
    'studio' => 'visible',
  ),
  'payforefford' => 
  array (
    'required' => false,
    'name' => 'payforefford',
    'vname' => 'LBL_PAYFOREFFORD',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'paytravelcosts' => 
  array (
    'required' => false,
    'name' => 'paytravelcosts',
    'vname' => 'LBL_PAYTRAVELCOSTS',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'payextracosts' => 
  array (
    'required' => false,
    'name' => 'payextracosts',
    'vname' => 'LBL_PAYEXTRACOSTS',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'payforexpense' => 
  array (
    'required' => false,
    'name' => 'payforexpense',
    'vname' => 'LBL_PAYFOREXPENSE',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'payforexpensedescription' => 
  array (
    'required' => false,
    'name' => 'payforexpensedescription',
    'vname' => 'LBL_PAYFOREXPENSEDESCRIPTION',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'copydocumentationallowed' => 
  array (
    'required' => false,
    'name' => 'copydocumentationallowed',
    'vname' => 'LBL_COPYDOCUMENTATIONALLOWED',
    'type' => 'bool',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'numberofdocumentationcopies' => 
  array (
    'required' => false,
    'name' => 'numberofdocumentationcopies',
    'vname' => 'LBL_NUMBEROFDOCUMENTATIONCOPIES',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '11',
    'disable_num_format' => '',
  ),
  'cancellationdate' => 
  array (
    'required' => false,
    'name' => 'cancellationdate',
    'vname' => 'LBL_CANCELLATIONDATE',
    'type' => 'date',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'warranteedeadline' => 
  array (
    'required' => false,
    'name' => 'warranteedeadline',
    'vname' => 'LBL_WARRANTEEDEADLINE',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'deliveryaddress' => 
  array (
    'required' => false,
    'name' => 'deliveryaddress',
    'vname' => 'LBL_DELIVERYADDRESS',
    'type' => 'text',
    'massupdate' => 0,
// cannot set a default for fields with type => text
// of course you can, behold the magic :)
// uups. seems like white magic was not enough. try some black one.
    'dbtype' => 'varchar',
    'default' =>'',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'completionaddress' => 
  array (
    'required' => false,
    'name' => 'completionaddress',
    'vname' => 'LBL_COMPLETIONADDRESS',
    'type' => 'text',
    'massupdate' => 0,
// cannot set a default for fields with type => text
// of course you can, behold the magic :)
// uups. seems like white magic was not enough. try some black one.
    'dbtype' => 'varchar',
    'default' =>'',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
 //1.7.6 standard attachement panel 
   'attachments' => 
  array (
    'required' => false,
    'name' => 'attachments',
    'vname' => 'LBL_ATTACHMENTS',
    'type' => 'varchar',
    'source' => 'non-db',
    'function' => 
    array (
      'name' => 'getAttachmentsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/Attachments/Attachments.php',
    ),
  ),
  'attachmentsequence' => 
  array (
    'required' => false,
    'name' => 'attachmentsequence',
    'vname' => 'LBL_ATTACHMENTSEQUENCE',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'studio' => 'visible',
  ),
  
/*  //1.7.6 We replaced this custom attachement panel by the one used in Products, Quotes and Contract modules
  'contract' =>
  array (
    'required' => false,
    'name' => 'contract',
    'vname' => 'LBL_CONTRACT',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 1,
    'reportable' => 0,
    'studio' => 'visible',
  ),
  'quote' =>
  array (
    'required' => false,
    'name' => 'quote',
    'vname' => 'LBL_QUOTE',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 1,
    'reportable' => 0,
    'studio' => 'visible',
  ),  //This is required to run java scripts on the page
  'specialproperties' =>
  array (
    'required' => false,
    'name' => 'specialproperties',
    'vname' => 'LBL_SPECIALPROPERTIES',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 1,
    'reportable' => 0,
    'studio' => 'false',
  ), 
  'service_description' =>
  array (
    'required' => false,
    'name' => 'service_description',
    'vname' => 'LBL_SERVICE_DESCRIPTION',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 1,
    'reportable' => 0,
    'studio' => 'visible',
  ), */
  'kst' => 
  array (
    'required' => false,
    'name' => 'kst',
    'vname' => 'LBL_KST',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '12',
    'disable_num_format' => '',
  ),
  'svnumbers' => 
  array (
    'required' => false,
    'name' => 'svnumbers',
    'vname' => 'LBL_SVNUMBERS',
    'type' => 'varchar',
    'dbtype' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'function' => 
    array (
      'name' => 'getSVNumbersHtml',
      'returns' => 'html',
      'include' => 'include/oqc/ExternalContracts/ExternalContracts.php',
    ),
  ),
  'productnumber' => 
  array (
    'required' => false,
    'name' => 'productnumber',
    'vname' => 'LBL_PRODUCTNUMBER',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '255',
  ),
  'costs' => 
  array (
    'required' => false,
    'name' => 'costs',
    'vname' => 'LBL_COSTS',
    'type' => 'varchar',
    'dbtype' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'function' => 
    array (
      'name' => 'getCostsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/ExternalContracts/ExternalContracts.php',
    ),
  ),
 'positions' => 
  array (
    'required' => false,
    'name' => 'positions',
    'vname' => 'LBL_POSITIONS',
    'type' => 'varchar',
    'dbtype' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'function' => 
    array (
      'name' => 'getPositionsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/ExternalContracts/ExternalContracts.php',
    ),

  ),
  'monthsguaranteed' => 
  array (
    'required' => false,
    'name' => 'monthsguaranteed',
    'vname' => 'LBL_MONTHSGUARANTEED',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '3',
    'disable_num_format' => '',
  ),
  'cancellationperiod' => 
  array (
    'required' => false,
    'name' => 'cancellationperiod',
    'vname' => 'LBL_CANCELLATIONPERIOD',
    'type' => 'text',
    'default' => '',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
  ),
  'endperiod' => 
  array (
    'required' => false,
    'name' => 'endperiod',
    'vname' => 'LBL_ENDPERIOD',
    'type' => 'enum',
    'massupdate' => 0,
    'default' => '3months',
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => 100,
    'options' => 'endperiod_list',
    'studio' => 'visible',
  ),
 'versions' => 
  array (
    'required' => false,
    'name' => 'versions',
    'vname' => 'LBL_VERSIONS',
    'type' => 'varchar',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => 0,
    'len' => '255',
    'function' => 
    array (
      'name' => 'getVersionsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/ExternalContracts/ExternalContracts.php',
    ),
  ),
  'finalcosts' => 
  array (
    'required' => false,
    'name' => 'finalcosts',
    'vname' => 'LBL_FINALCOSTS',
    'type' => 'currency',
    'dbType' => 'double', //1.7.5 fix Quick Repair errror
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    // set to 53 because MS SQL maximum precision is 53 see http://www.sugarforge.org/forum/forum.php?thread_id=7503&forum_id=2788
    'len' => '53',
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY',
    'type' => 'id',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
 //   'len' => '255', fix Quick repair error
    'studio' => 'visible',
    'function' => 
    array (
      'name' => 'getCurrencyDropDown',
      'returns' => 'html',
    ),
  ),
 'minpayment' => 
  array (
    'required' => false,
    'name' => 'minpayment',
    'vname' => 'LBL_MINPAYMENT',
    'type' => 'currency',
    'dbType' => 'double',
    'disable_num_format' => false,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    // set to 53 because MS SQL maximum precision is 53 see http://www.sugarforge.org/forum/forum.php?thread_id=7503&forum_id=2788
    'len' => '53',
    'precision' => 2,
  ),
  'maxpayment' => 
  array (
    'required' => false,
    'name' => 'maxpayment',
    'vname' => 'LBL_MAXPAYMENT',
    'type' => 'currency',
    'dbType' => 'double',
    'disable_num_format' => false,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    // set to 53 because MS SQL maximum precision is 53 see http://www.sugarforge.org/forum/forum.php?thread_id=7503&forum_id=2788
    'len' => '53',
    'precision' => 2,
  ),
  'previousrevision' =>
  array (
    'required' => false,
    'name' => 'previousrevision',
    'vname' => 'LBL_PREVIOUSREVISION',
    'type' => 'varchar',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => '36',
    'function' =>
    array (
      'name' => 'getPreviousVersionsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/PreviousVersions/PreviousVersions.php',
    ),
  ),
  'shownextrevisions' =>
  array (
    'required' => false,
    'name' => 'shownextrevisions',
    'vname' => 'LBL_NEXTREVISIONS',
    'type' => 'varchar',
    'source' => 'non-db',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'function' =>
    array (
      'name' => 'getNextRevisionsHtml',
      'returns' => 'html',
      'include' => 'include/oqc/NextRevisions/NextRevisions.php',
    ),
  ),
  'nextrevisions' =>
  array (
    'required' => false,
    'name' => 'nextrevisions',
    'vname' => 'LBL_NEXTREVISIONS',
    'type' => 'text',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
  ),
  'version' =>
  array (
    'required' => false,
    'name' => 'version',
    'vname' => 'LBL_VERSION',
    'type' => 'int',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => 0,
    'reportable' => 0,
    'len' => '11',
    'disable_num_format' => '',
  ),
  'warn_in_months' => 
  array (
    'required' => false,
    'name' => 'warn_in_months',
    'vname' => 'LBL_WARN_IN_MONTHS',
    'type' => 'varchar',
    'default' => '2',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => 0,
    'len' => '3',
    'disable_num_format' => '',
  ),
  'already_notified' => 
  array (
    'required' => false,
    'name' => 'already_notified',
    'vname' => 'LBL_ALREADY_NOTIFIED',
    'type' => 'bool',
    'default' => false,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'reportable' => 0,
  ),
  'is_archived' => 
  array (
    'required' => false,
    'name' => 'is_archived',
    'vname' => 'LBL_IS_ARCHIVED',
    'type' => 'bool',
    'default' => false,
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'reportable' => 0,
  ), 
  //1.7.6
  'is_latest' => 
    array (
      'required' => false,
      'name' => 'is_latest',
      'vname' => 'LBL_IS_LATEST',
      'type' => 'bool',
      'massupdate' => 0,
      'default' => '1',
      'comments' => '',
      'help' => '',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => 0,
      'reportable' => 0,
      'studio' => 'false',
    ),
    //2.1 link to oqc_Task
    'oqc_task' =>
    array(
		'name' => 'oqc_task',
		'type' => 'link',
		'module' => 'oqc_Task',
		'bean_name'  => 'oqc_Task',
		'relationship' => 'oqc_task_oqc_externalcontract',
		'source' => 'non-db',
		'vname' => 'LBL_OQC_TASK',
  ), 
),
	'relationships'=>array (
 'account_search' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'oqc_ExternalContract',
      'rhs_table' => 'oqc_externalcontract',
      'rhs_key' => 'account_id',
      'relationship_type' => 'one-to-many',
    ),
    'oqc_task_oqc_externalcontract' => 
    		array (
      'lhs_module' => 'oqc_ExternalContract',
      'lhs_table' => 'oqc_externalcontract',
      'lhs_key' => 'id',
      'rhs_module' => 'oqc_Task',
      'rhs_table' => 'oqc_task',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
 //     'relationship_role_column'=>'parent_type',
//		'relationship_role_column_value'=>'oqc_Contract'
    ),	  
),
	'optimistic_lock'=>true,
);
require_once('include/SugarObjects/VardefManager.php');
VardefManager::createVardef('oqc_ExternalContract','oqc_ExternalContract', array('basic','assignable','issue'));

$dictionary['oqc_ExternalContract']['fields']['name']['required'] = true;

// disable massupdate for default fields
$dictionary['oqc_ExternalContract']['fields']['assigned_user_id']['massupdate'] = 0;
$dictionary['oqc_ExternalContract']['fields']['status']['massupdate'] = 0;
$dictionary['oqc_ExternalContract']['fields']['type']['massupdate'] = 0;
$dictionary['oqc_ExternalContract']['fields']['resolution']['massupdate'] = 0;
$dictionary['oqc_ExternalContract']['fields']['priority']['massupdate'] = 0;
