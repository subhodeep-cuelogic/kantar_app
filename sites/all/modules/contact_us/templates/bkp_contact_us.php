<?php
/**
* Function implementing the hooks_menu()
*/
  
function contact_us_menu()
{
    $arrItems = array();
    $arrItems['contact-us'] = array(
        'title'            => 'Contact Us',
        'description'      => 'Add new user details',
        'page callback'    => 'fnSiteContact',
        'access callback'  => TRUE,
    );

    return $arrItems;
}

/**
 * Function for Contact Us 
 */
function fnSiteContact()
{
    
	//ini_set('display_errors', '1');
	
	global $base_url;
	    
    #Initialise the contacting user details variables.
    
	module_load_include('inc', 'contact_us', 'inc/contactusinfo');
	$objContact = new ContactUsInfo();
    
    $strUserName = "";
    $strUserEmail = "";
    $strUserRegionEmail = "";
    $strUserMessage = "";
    $strErrorMessage = "";
    
    $arrContactDetailsList = $objContact->getContactInfoDetails();
    $arrRegionDetailsList = $objContact->getRegionDetails();
    
   
    # code for contact form details.
    if (isset($_POST['btnSubmit'])) {
        $strUserName = trim($_POST['name']);
        $strUserEmail = trim($_POST['email']);
        $strUserRegionEmail = trim($_POST['region']);
        $strUserMessage = trim($_POST['message']);
        $strSubject = "Contact Us Request";
        
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

        if ($strErrorMessage != "") {
            drupal_set_message(t($strErrorMessage), 'error');
            //drupal_goto('contact-us/');
        } else {
        	
        	//$message = $strUserMessage; 
        	$params = array(
        			'body' => $strUserMessage,
        			'subject' => $strSubject,
        			'headers'=>'simple',
        	);
        	$strToEmail = $strUserRegionEmail;
        	$strFromEmail = $strUserEmail;
        	$arrMailReturnValue = drupal_mail('contact_us', 'send_contact_request', $strToEmail, language_default(), $params, $strFromEmail, TRUE);
        	//echo "<pre>";var_dump($arrMailReturnValue);die;
        	//echo "<pre>";print_r($arrMailReturnValue);die;
        	if($arrMailReturnValue['result']) {
        	   	drupal_set_message(t("Thanks for contacting us"), 'status');
        	}
        	else {
        		drupal_set_message(t("Mail not sent"), 'error');
        	}	   	
        	drupal_goto('contact-us/');
        }
    }

    # Include necessary JS and CSS
    drupal_add_css(drupal_get_path('theme', 'kantar'). '/kantar_custom.css');

    
    /*Set the page title*/
   
    # Prepare the array for template.
    $arrListData = array("arrContactDetailsList" => $arrContactDetailsList,
                         "arrRegionDetailsList" => $arrRegionDetailsList,
    					"strUserName" => $strUserName,
                         "strUserEmail" => $strUserEmail,
                         "strUserRegionEmail" => $strUserRegionEmail,
                         "strUserMessage" => $strUserMessage,
                         );

    return theme('contact_us', $arrListData);
}

function __validateform()
{
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
}



function contact_us_mail($key,&$message,$params) 
{

       switch ($key) {
             case 'send_contact_request':
                  $message['subject']=t($params['subject']);
                  $message['body'][]=$params['body'];
                  $message['headers']['Content-Type'] = 'text/html; charset=UTF-8; format=flowed';
       break;
          }
 }


/**
 * Call Inbuilt hook theme to use templates
 */
function contact_us_theme()
{
    $themes = array(
         'contact_us' => array(
            'template' => 'templates/contact_us',
        ),
    );
    return $themes;
}


?>