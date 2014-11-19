<?php 
 //WARNING: The contents of this file are auto-generated


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
$dictionary["oqc_Offering"]["fields"]["oqc_service"] = array (
  'name' => 'oqc_service',
  'type' => 'link',
  'relationship' => 'oqc_offering_oqc_service',
  'source' => 'non-db',
);


// created: 2008-06-03 14:52:01
$dictionary["oqc_Offering"]["fields"]["documents"] = array (
  'name' => 'documents',
  'type' => 'link',
  'relationship' => 'oqc_offering_documents',
  'source' => 'non-db',
);


// created: 2008-06-03 14:52:01
$dictionary["oqc_Offering"]["fields"]["accounts"] = array (
  'name' => 'accounts',
  'type' => 'link',
  'relationship' => 'oqc_offering_accounts',
  'source' => 'non-db',
);


// created: 2008-06-03 14:52:01
$dictionary["oqc_Offering"]["fields"]["contacts"] = array (
  'name' => 'contacts',
  'type' => 'link',
  'relationship' => 'oqc_offering_contacts',
  'source' => 'non-db',
);


// created: 2008-06-03 14:52:01
$dictionary["oqc_Offering"]["fields"]["oqc_product"] = array (
  'name' => 'oqc_product',
  'type' => 'link',
  'relationship' => 'oqc_offering_oqc_product',
  'source' => 'non-db',
);


// created: 2008-08-13 14:58:26
$dictionary["oqc_Offering"]["fields"]["project"] = array (
  'name' => 'project',
  'type' => 'link',
  'relationship' => 'oqc_offering_project',
  'source' => 'non-db',
);



// 1.7.5 added layout def
$dictionary["oqc_Offering"]["fields"]["opportunities"] = array (
  'name' => 'opportunities',
  'type' => 'link',
  'relationship' => 'oqc_offering_opportunities',
  'source' => 'non-db',
);
// 1.7.6 vardefs addition
$dictionary["oqc_Offering"]["fields"]["oqc_contract"] = array (
  'name' => 'oqc_contract',
  'type' => 'link',
  'relationship' => 'oqc_offering_oqc_contract',
  'source' => 'non-db',
);



?>