<!-- <div class="margin-bottom10"><?php //echo $strBreadcrumb; ?></div> -->
<div>
<h2>WE WOULD LIKE TO HEAR FROM YOU</h2>
<?php 
		$index_value = 0;
		foreach($arrContactDetailsList as $arrContactDetails) {
			if($index_value != 2) {	?>
			<p><?php echo $arrContactDetails['title']; ?></p>
			<p><?php echo $arrContactDetails['office_address']; ?></p>
			<?php
			}
			$index_value++;
 		} ?>
</div>
<h2>CONNECT WITH US ON SOCIAL MEDIA</h2>
<div>
<p><?php echo $arrContactDetailsList[2]['office_address']; ?></p>
</div>

<div class="form-box">
	<form id="frmContactUs" name="frmContactUs" method="post" action="">
        <div class="form-item">
            <label for="name">YOUR NAME<span class="form-required" title="This field is required">*</span></label>
            <input type="text" maxlength="60" size="60" value="<?php //echo $strUserFirstName;?>" name="name" id="name"
                   placeholder="Enter Name">
        </div>
        <div class="form-item">
            <label for="email">YOUR EMAIL<span class="form-required" title="This field is required">*</span></label>
            <input type="text" maxlength="60" size="60"
                   value="<?php //echo $strUserEmail;?>" name="emailid" id="emailid"
                   placeholder="Enter Email">
        </div>
        <div class="form-item">
            <label for="region">REGION<span class="form-required" title="This field is required">*</span></label>
            <select name="region" id="region">
            	<option value=""></option>
            </select>
		</div>
        <div class="form-item">
            <label for="message">YOUR MESSAGE<span class="form-required" title="This field is required">*</span></label>
            <textarea name="message" id="message" rows="5" cols="60"></textarea>
        </div>
        <div id="" class="form-actions form-wrapper">
            <input type="submit" class="form-submit" value="Send" name="btnSubmit" id="btnSubmit">
        </div>
    </form>
</div>















function send_contact_mail($to, $subject, $body, $from)
{
	//$send_to =  '"'. addslashes(mime_header_encode('Kantar Admin')) .'" <'.$to.'>';
	
	/*$send_to =  $to;
	$mail_msg = "<html>
	<head></head>
	<body><b>Hi Admin! <br> There's a request on Kantar website! 
	So please find the details below : <br/>".$body."<br/>
	<br/>Thanks,<br/> Kantar Website Team</b></body></html>";
	
	$message = array(
			'to' =>  $send_to,
			'subject' => t($subject),
			'body' => $mail_msg,
			'headers' => array(
			'From' => $from,
			'MIME-Version' => '1.0',
			'Content-Type' => 'text/html;charset=utf-8',),
			);
	
	drupal_mail_send($message);
	
	ini_set('display_errors', '1');*/
	
	$message = array(
			'to' => 'example@mailinator.com',
			'subject' => t('Example subject'),
			'body' => t('Example body'),
			'headers' => array('From' => 'example@mailinator.com'),
	);
	
	drupal_mail($message);
	
	return true;
	//$var = FALSE;
	//echo "<pre>".print_r($message);die;
	//$var = drupal_mail_send($message);
	//var_dump($var);die;
	//echo "hi".$var;die;
	
	
	
}
