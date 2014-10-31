
   jQuery(document).ready(function () { 
       jQuery(".product-contents").slideUp(0); 
       
       jQuery("div.product-title a").click(function (e) {
       //alert("Hi") ;
       e.preventDefault();
        //    jQuery(this).next("div.product-contents").slideToggle("slow"); 
        //jQuery(this).parents("div").nextAll(".product-contents").slideToggle();

       jQuery(this).parent().parent().next().children("div.product-contents").slideToggle("slow"); 

        }); 
       
       jQuery("div.views-row-1").children().next().next().next().children("div.leader_bio").show();
       jQuery("div.leader-row").click(function (e) {
//           alert("Hi") ;
           e.preventDefault();
//           jQuery("div.leader_bio").addClass("leader_bio_visible").slideDown("slow");
           
//           jQuery(this).children().next().next().next().children("div.leader_bio").addClass("leader_bio_visible").removeClass("leader_bio").slideDown("slow");
           
           if (jQuery(this).children().next().next().next().children("div.leader_bio").is(':hidden'))
           {
        	   jQuery(this).children().next().next().next().children("div.leader_bio").addClass("leader_bio_visible").show("slow");
           }
           else
           {
        	   jQuery(this).children().next().next().next().children("div.leader_bio").addClass("leader_bio").hide("slow");
           }
      }); 
});
   
   
   

   jQuery(document).ready(function () { 
       
	   jQuery("div.views-row-1").children().next().next().next().children("div.leader_bio").show();
	   jQuery("div.views-row-1").children().next().children("div.product-contents").show();
       jQuery("div.leader-row").click(function (e) {
           e.preventDefault();
           if (jQuery(this).children().next().next().next().children("div.leader_bio").is(':hidden'))  {
        	   jQuery("div.views-row-1").children().next().next().next().children("div.leader_bio").hide("slow");
        	   jQuery(this).children().next().next().next().children("div.leader_bio").show("slow");
           }
           else  {
        	   jQuery(this).children().next().next().next().children("div.leader_bio").hide("slow");
           }
      }); 
       jQuery("div.products-row").click(function (e) {
           e.preventDefault();
           if (jQuery(this).children().next().children("div.product-contents").is(':hidden'))  {
        	   jQuery("div.views-row-1").children().next().children("div.product-contents").hide("slow");
        	   jQuery(this).children().next().children("div.product-contents").show("slow");
           }
           else  {
        	   jQuery(this).children().next().children("div.product-contents").hide("slow");
           }
      }); 
   });