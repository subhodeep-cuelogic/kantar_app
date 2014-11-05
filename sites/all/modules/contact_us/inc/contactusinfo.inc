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
		$strContentType = "contact_information";
		
		$objNodes = node_load_multiple(array(), array('type' => $strContentType));
		
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
		$strContentType = "region_information";
		
		$objNodes = node_load_multiple(array(), array('type' => $strContentType));
		
		$i=0;
		foreach($objNodes as $objRegions) {
			$arrRegionInfo[$i]['nid'] = $objRegions->nid;
			$arrRegionInfo[$i]['title'] = $objRegions->title;
			$arrRegionInfo[$i]['region_email'] = $objRegions->field_region_email['und'][0]['value'];
			$i++;
		}
		
		return $arrRegionInfo;	
	}
	
	/**
	 * Function for validating the Contact Form input fields
	 * @param string $strUserName: Contact Person Name
	 * @param string $strUserEmail: Contact Person Email
	 * @param string $strUserRegionEmail : Selected Region Email Address
	 * @param string $strUserMessage : Contact Person Message
	 * @return string
	 */
	
	public function fnValidateForm($strUserName, $strUserEmail, $strUserRegionEmail, $strUserMessage)
	{
		$strErrorMessage = "";
		# Validate parameters.
		if ($strUserName == "") {
			$strErrorMessage .= "Please enter your name <br>";
		}elseif ($strUserEmail == "") {
			$strErrorMessage .= "Please enter your email <br>";
		} elseif ($strUserRegionEmail == "") {
			$strErrorMessage .= "Please select a Region <br>";
		} elseif ($strUserMessage == "") {
			$strErrorMessage .= "Please enter a Message <br>";
		}
	
		return $strErrorMessage;
	}
	
}