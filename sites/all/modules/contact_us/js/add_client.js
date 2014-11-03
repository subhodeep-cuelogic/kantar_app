// JavaScript Document
jQuery(document).ready(function(){
    //form validation
    jQuery('#frmClientInfo').validationEngine();
    jQuery('#frmUserInfo').validationEngine();
    //Check password value is present or not
    var intClientId = jQuery('#hdClientId').val();

    if (intClientId != '') {
        jQuery('#btnSubmit').on('click',function (event) {

            if (jQuery('#password').val() != '') {
               jQuery('#confirmpassword').removeClass('validate[equals[password]]');
               jQuery('#confirmpassword').addClass('validate[required, equals[password]]');
            } else {
                jQuery('#confirmpassword').removeClass('validate[required, equals[password]]');
                jQuery('#confirmpassword').addClass('validate[equals[password]]');
            }
            var valid = jQuery("#frmClientInfo").validationEngine('validate');
        });
    }
});
