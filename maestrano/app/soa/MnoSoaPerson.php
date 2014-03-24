<?php

/**
 * Mno Organization Class
 */
class MnoSoaPerson extends MnoSoaBasePerson
{
    protected $_local_entity_name = "contact";
    
    protected function pushId() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start");
	$id = $this->getLocalEntityIdentifier();
	
	if (!empty($id)) {
	    error_log("id is not empty, id = " . $id);
	    $mno_id = $this->getMnoIdByLocalId($id);

	    if ($this->isValidIdentifier($mno_id)) {
                $this->_log->debug(__FUNCTION__ . " this->getMnoIdByLocalId(id) = " . json_encode($mno_id));
		$this->_id = $mno_id->_id;
	    }
	}
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end");
    }
    
    protected function pullId() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start");
	if (!empty($this->_id)) {
	    $local_id = $this->getLocalIdByMnoId($this->_id);
            $this->_log->debug(__FUNCTION__ . " this->getLocalIdByMnoId(this->_id) = " . json_encode($local_id));
	    
	    if ($this->isValidIdentifier($local_id)) {
                $this->_local_entity = new Contact();
                $this->_local_entity->retrieve($local_id->_id);
                $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " is STATUS_EXISTING_ID");
		return constant('MnoSoaBaseEntity::STATUS_EXISTING_ID');
	    } else if ($this->isDeletedIdentifier($local_id)) {
                $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " is STATUS_DELETED_ID");
                return constant('MnoSoaBaseEntity::STATUS_DELETED_ID');
            } else {
		$this->_local_entity = new Contact();
                $this->getName();
		return constant('MnoSoaBaseEntity::STATUS_NEW_ID');
	    }
	}
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " return STATUS_ERROR");
        return constant('MnoSoaBaseEntity::STATUS_ERROR');
    }
    
    protected function pushName() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        //$hp = $this->mapSalutationToHonorificPrefix($this->_local_entity->salutation);
        //$this->_name->honorificPrefix = $this->push_set_or_delete_value($hp);
        $this->_name->givenNames = $this->push_set_or_delete_value($this->_local_entity->first_name);
        $this->_name->familyName = $this->push_set_or_delete_value($this->_local_entity->last_name);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    
    
    protected function pullName() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        //$hp = $this->mapHonorificPrefixToSalutation($this->_name->honorificPrefix);
        //$this->_local_entity->salutation = $this->pull_set_or_delete_value($hp);
        $this->_local_entity->first_name = $this->pull_set_or_delete_value($this->_name->givenNames);
        $this->_local_entity->last_name = $this->pull_set_or_delete_value($this->_name->familyName);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pushBirthDate() {
        // DO NOTHING
    }
    
    protected function pullBirthDate() {
        // DO NOTHING
    }
    
    protected function pushGender() {
	// DO NOTHING
    }
    
    protected function pullGender() {
	// DO NOTHING
    }
    
    protected function pushAddresses() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        // PRIMARY ADDRESS -> POSTAL ADDRESS
        $this->_address->work->postalAddress->streetAddress = $this->push_set_or_delete_value($this->_local_entity->primary_address_street);
        $this->_address->work->postalAddress->locality = $this->push_set_or_delete_value($this->_local_entity->primary_address_city);
        $this->_address->work->postalAddress->region = $this->push_set_or_delete_value($this->_local_entity->primary_address_state);
        $this->_address->work->postalAddress->postalCode = $this->push_set_or_delete_value($this->_local_entity->primary_address_postalcode);
        //$country_code = $this->mapCountryToISO3166($this->_local_entity->primary_address_country);
        //$this->_address->work->postalAddress->country = strtoupper($this->push_set_or_delete_value($country_code));
        // OTHER ADDRESS -> POSTAL ADDRESS #2
        $this->_address->work->postalAddress2->streetAddress = $this->push_set_or_delete_value($this->_local_entity->alt_address_street);
        $this->_address->work->postalAddress2->locality = $this->push_set_or_delete_value($this->_local_entity->alt_address_city);
        $this->_address->work->postalAddress2->region = $this->push_set_or_delete_value($this->_local_entity->alt_address_state);
        $this->_address->work->postalAddress2->postalCode = $this->push_set_or_delete_value($this->_local_entity->alt_address_postalcode);
        //$country_code = $this->mapCountryToISO3166($this->_local_entity->alt_address_country);
        //$this->_address->work->postalAddress2->country = strtoupper($this->push_set_or_delete_value($country_code));
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pullAddresses() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        // POSTAL ADDRESS -> PRIMARY ADDRESS
        $this->_local_entity->primary_address_street = $this->pull_set_or_delete_value($this->_address->work->postalAddress->streetAddress);
        $this->_local_entity->primary_address_city = $this->pull_set_or_delete_value($this->_address->work->postalAddress->locality);
        $this->_local_entity->primary_address_state = $this->pull_set_or_delete_value($this->_address->work->postalAddress->region);
        $this->_local_entity->primary_address_postalcode = $this->pull_set_or_delete_value($this->_address->work->postalAddress->postalCode);
        $country = $this->mapISO3166ToCountry($this->_address->work->postalAddress->country);
        $this->_local_entity->primary_address_country = $this->pull_set_or_delete_value($country);
        // POSTAL ADDRESS #2 -> OTHER ADDRESS
        $this->_local_entity->alt_address_street = $this->pull_set_or_delete_value($this->_address->work->postalAddress2->streetAddress);
        $this->_local_entity->alt_address_city = $this->pull_set_or_delete_value($this->_address->work->postalAddress2->locality);
        $this->_local_entity->alt_address_state = $this->pull_set_or_delete_value($this->_address->work->postalAddress2->region);
        $this->_local_entity->alt_address_postalcode = $this->pull_set_or_delete_value($this->_address->work->postalAddress2->postalCode);
        $country = $this->mapISO3166ToCountry($this->_address->work->postalAddress2->country);
        $this->_local_entity->alt_address_country = $this->pull_set_or_delete_value($country);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pushEmails() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        $this->_email->emailAddress = $this->push_set_or_delete_value($this->_local_entity->email1);
	$this->_email->emailAddress2 = $this->push_set_or_delete_value($this->_local_entity->email2);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pullEmails() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        $this->_local_entity->email1 = $this->pull_set_or_delete_value($this->_email->emailAddress);
        $this->_local_entity->email2 = $this->pull_set_or_delete_value($this->_email->emailAddress2);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    
    protected function pushTelephones() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        $this->_telephone->work->voice = $this->push_set_or_delete_value($this->_local_entity->phone_work);
        $this->_telephone->home->mobile = $this->push_set_or_delete_value($this->_local_entity->phone_mobile);
        $this->_telephone->work->fax = $this->push_set_or_delete_value($this->_local_entity->phone_fax);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pullTelephones() {
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        $this->_local_entity->phone_work = $this->pull_set_or_delete_value($this->_telephone->work->voice);
        $this->_local_entity->phone_mobile = $this->pull_set_or_delete_value($this->_telephone->home->mobile);
        $this->_local_entity->phone_fax = $this->pull_set_or_delete_value($this->_telephone->work->fax);
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pushWebsites() {
	// DO NOTHING
    }
    
    protected function pullWebsites() {
	// DO NOTHING
    }
    
    protected function pushEntity() {
	$this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " start ");
        $this->_entity->customer = true;
        $this->_log->debug(__CLASS__ . ' ' . __FUNCTION__ . " end ");
    }
    
    protected function pullEntity() {
	// DO NOTHING
    }
    
    protected function pushRole() {
        $org_local_id = $this->_local_entity->account_id;
        
        if (!empty($org_local_id)) {
            $org_mno_id = $this->getMnoIdByLocalIdName($org_local_id, 'account');
        } else {
            $this->_role = null;
            return;
        }
        
        if ($this->isValidIdentifier($org_mno_id)) {
            $this->_log->debug(__FUNCTION__ . " mno_id = " . json_encode($org_mno_id));
            $this->_role->organization->id = $org_mno_id->_id;
            $this->_role->title = $this->push_set_or_delete_value($this->_local_entity->title);
        } else if ($this->isDeletedIdentifier($org_mno_id)) {
            // do not update
            return;
        } else {
            $org_contact = new Account();
            $org_contact->retrieve($org_local_id);
            
            $organization = new MnoSoaOrganization($this->_db, $this->_log);		
            $organization->send($org_contact);

            $org_mno_id = $this->getMnoIdByLocalId($org_local_id);

            if ($this->isValidIdentifier($org_mno_id)) {
                $this->_role->organization->id = $org_mno_id->_id;
                $this->_role->title = $this->push_set_or_delete_value($this->_local_entity->title);
            }
        }
    }
    
    protected function pullRole() {
        if (empty($this->_role->organization->id)) {
            $this->_local_entity->account_id = "";
            $this->_local_entity->title = "";
        } else {
            $org_local_id = $this->getLocalIdByMnoIdName($this->_role->organization->id, "organizations");
            
            if ($this->isValidIdentifier($org_local_id)) {
                $this->_log->debug(__FUNCTION__ . " local_id = " . json_encode($org_local_id));
                $this->_local_entity->account_id = $this->pull_set_or_delete_value($org_local_id->_id);
                $this->_local_entity->title = $this->pull_set_or_delete_value($this->_role->title);
            } else if ($this->isDeletedIdentifier($org_local_id)) {
                // do not update
                return;
            } else {
                $notification->entity = "organizations";
                $notification->id = $this->_role->organization->id;
                $organization = new MnoSoaOrganization($this->_db, $this->_log);		
                $organization->receiveNotification($notification);
                $this->_local_entity->account_id = $this->pull_set_or_delete_value($organization->_local_entity->id);
                $this->_local_entity->title = $this->pull_set_or_delete_value($this->_role->title);
            }            
        }
    }
    
    protected function saveLocalEntity($push_to_maestrano) {
        $this->_local_entity->save(false, $push_to_maestrano);
    }
    
    protected function mapSalutationToHonorificPrefix($in) {
        $in_form = strtoupper(trim($in));
        
        switch ($in_form) {
            case "MR.": return "MR";
            case "MS.": return "MS";
            case "MRS.": return "MRS";
            case "DR.": return "DR";
            case "PROF.": return "PROF";
            default: return null;
        }
    }

    protected function mapHonorificPrefixToSalutation($in) {
        $in_form = strtoupper(trim($in));
        
        switch ($in_form) {
            case "MR": return "MR.";
            case "MS": return "MS.";
            case "MRS": return "MRS.";
            case "DR": return "DR.";
            case "PROF": return "PROF.";
            default: return null;
        }
    }
    
    protected function getLocalEntityIdentifier() {
        return $this->_local_entity->id;
    }
}

?>