<!-- <div class="margin-bottom10"><?php //echo $strBreadcrumb; ?></div> -->
<div>
<h2>WE WOULD LIKE TO HEAR FROM YOU</h2>
<?php foreach($arrContactDetailsList as $arrContactDetails) { ?>
			<?php echo $arrContactDetails['office_address_one']; ?>
			<?php echo $arrContactDetails['office_address_two']; ?>			
			<p><?php echo $arrContactDetails['social_tagline']; ?></p>
<?php } ?>
</div>
<div>
<p><a href="<?php echo $arrContactDetails['facebook_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/facebook_icon.png" /></a>&nbsp;<a href="<?php echo $arrContactDetails['twitter_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/twitter_icon.png" /></a>&nbsp;<a href="<?php echo $arrContactDetails['google_plus_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/google_plus_icon.png" /></a>&nbsp;<a href="<?php echo $arrContactDetails['linkedin_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/linked_in_icon.png" /></a></p>
</div>


<div class="form-box">
	<form id="frmContactUs" name="frmContactUs" method="post" action="">
        <div class="form-item">
            <label for="name">YOUR NAME<span class="form-required" title="This field is required">*</span></label>
            <input type="text" maxlength="60" size="60" value="<?php echo $strUserName;?>" name="name" id="name"
                   placeholder="Enter Name">
        </div>
        <div class="form-item">
            <label for="email">YOUR EMAIL<span class="form-required" title="This field is required">*</span></label>
            <input type="text" maxlength="60" size="60"
                   value="<?php echo $strUserEmail;?>" name="email" id="email"
                   placeholder="Enter Email">
        </div>
        <div class="form-item">
            <label for="region">REGION<span class="form-required" title="This field is required">*</span></label>
            <select name="region" id="region">
            	<option value="">Select Region</option>
            	<?php foreach($arrRegionDetailsList as $arrRegionDetails) { ?>
            	<option value="<?php echo $arrRegionDetails['region_email'];?>" <?php if(isset($strUserRegionEmail) && ($strUserRegionEmail == $arrRegionDetails['region_email'])) { echo "selected"; } ?>><?php echo $arrRegionDetails['title'];?></option>
            	<?php } ?>
            </select>
		</div>
        <div class="form-item">
            <label for="message">YOUR MESSAGE<span class="form-required" title="This field is required">*</span></label>
            <textarea name="message" id="message" rows="5" cols="60"><?php echo $strUserMessage; ?></textarea>
        </div>
        <div id="" class="form-actions form-wrapper">
            <input type="submit" class="form-submit" value="Send" name="btnSubmit" id="btnSubmit">
        </div>
    </form>
</div>
