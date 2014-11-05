<div class="contact_us_wrapper">
	<h2>WE WOULD LIKE TO HEAR FROM YOU</h2>
	<div class="contact_us_leftColumn">
	   <?php echo $arrContactDetailsList[0]['office_address_one']; ?>
	</div>
	<div class="contact_us_rightColumn">
	   <?php echo $arrContactDetailsList[0]['office_address_two']; ?>	
	</div>
	<div class="clearBoth"></div> <!-- Catches the shorter column up -->
</div>

<div class="contact_us_wrapper">
<h2>CONNECT WITH US ON SOCIAL MEDIA</h2>
<div class="contact_us_leftColumn">
          <?php echo $arrContactDetailsList[0]['social_tagline']; ?>
          
</div>
<div class="contact_us_rightColumn">
   <p>
   	<a href="<?php echo $arrContactDetailsList[0]['facebook_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/facebook_icon.png" /></a>&nbsp;
   	<a href="<?php echo $arrContactDetailsList[0]['twitter_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/twitter_icon.png" /></a>&nbsp;
   	<a href="<?php echo $arrContactDetailsList[0]['google_plus_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/google_plus_icon.png" /></a>&nbsp;
   	<a href="<?php echo $arrContactDetailsList[0]['linkedin_url']; ?>" target="_blank"><img src="/drupal_demo/sites/all/themes/kantar/images/linked_in_icon.png" /></a></p>
</div>
<div class="clearBoth"></div> <!-- Catches the shorter column up -->
</div>


<div class="form-box contact_us_wrapper" >
	<h2>CONTACT US</h2>
	<form id="frmContactUs" name="frmContactUs" method="post" action="">
        <div class="contact_us_leftColumn">
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
	            <br>
	            <select name="region" id="region">
	            	<option value="">Select Region</option>
	            	<?php foreach($arrRegionDetailsList as $arrRegionDetails) { ?>
	            	<option value="<?php echo $arrRegionDetails['nid'];?>" <?php if(isset($strUserRegionId) && ($strUserRegionId == $arrRegionDetails['nid'])) { echo "selected"; } ?>><?php echo $arrRegionDetails['title'];?></option>
	            	<?php } ?>
	            </select>
			</div>
		</div>
		<div class="contact_us_rightColumn">
	        <div class="form-item">
	            <label for="message">YOUR MESSAGE<span class="form-required" title="This field is required">*</span></label>
	            <textarea name="message" id="message" rows="5" cols="60"><?php echo $strUserMessage; ?></textarea>
	        </div>
	        <div id="" class="form-actions form-wrapper divBtnContact">
	            <input type="submit" class="btnContact" value="Send" name="btnSubmit" id="btnSubmit">
	        </div>
	    </div>    
    </form>
</div>
