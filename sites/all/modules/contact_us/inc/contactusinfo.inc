<?php
class ContactUsInfo {
	
	public function __construct() {		
	}
	
	/**
	 * Function for fetching all contact information
	 * @return mixed
	 */
	public function getContactInfoDetails()
	{
		$content_type = "contact_information";
		$objNodes = node_load_multiple(array(), array('type' => $content_type));
		$i=0;
		foreach($objNodes as $objContacts) {
			$arrContactInfo[$i]['title'] = $objContacts->title;
			$arrContactInfo[$i]['office_address_one'] = $objContacts->field_office_address['und'][0]['value'];
			$arrContactInfo[$i]['office_address_two'] = $objContacts->field_office_address_two['und'][0]['value'];
			$arrContactInfo[$i]['social_tagline'] = $objContacts->field_social_tagline['und'][0]['value'];
			$arrContactInfo[$i]['facebook_url'] = $objContacts->field_facebook_url['und'][0]['value'];
			$arrContactInfo[$i]['linkedin_url'] = $objContacts->field_linkedin_url['und'][0]['value'];
			$arrContactInfo[$i]['twitter_url'] = $objContacts->field_twitter_url['und'][0]['value'];
			$arrContactInfo[$i]['google_plus_url'] = $objContacts->field_google_plus_url['und'][0]['value'];
			$i++;
		}
		
		return $arrContactInfo;
	}
	
	/**
	 * Function for fetching all region information
	 * @return mixed
	 */
	public function getRegionDetails()
	{
		$content_type = "region_information";
		$objNodes = node_load_multiple(array(), array('type' => $content_type));
		$i=0;
		foreach($objNodes as $objRegions) {
			$arrRegionInfo[$i]['title'] = $objRegions->title;
			$arrRegionInfo[$i]['region_email'] = $objRegions->field_region_email['und'][0]['value'];
			$i++;
		}
		
		return $arrRegionInfo;	
	}
	
}