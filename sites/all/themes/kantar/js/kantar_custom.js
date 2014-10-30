
   jQuery(document).ready(function () { 
       jQuery(".product-contents").slideUp(0); 
       
       jQuery("div.product-title a").click(function (e) {
       //alert("Hi") ;
       e.preventDefault();
        //    jQuery(this).next("div.product-contents").slideToggle("slow"); 
        //jQuery(this).parents("div").nextAll(".product-contents").slideToggle();

       jQuery(this).parent().parent().next().children("div.product-contents").slideToggle("slow"); 

        }); 
});