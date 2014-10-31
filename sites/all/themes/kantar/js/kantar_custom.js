
   jQuery(document).ready(function () { 
       
	   jQuery("div.views-row-1").children().next().next().next().children("div.leader_bio").show();
	   jQuery("div.views-row-1").children().next().children("div.product-contents").show();
       jQuery("div.leader-row").click(function (e) {
           e.preventDefault();
           if (jQuery(this).children().next().next().next().children("div.leader_bio").is(':hidden'))  {
        	   jQuery("div.leader-row").children().next().next().next().children("div.leader_bio").hide("slow");
        	   jQuery(this).children().next().next().next().children("div.leader_bio").show("slow");
           }
           else  {
        	   jQuery(this).children().next().next().next().children("div.leader_bio").hide("slow");
           }
      }); 
       
       
       jQuery("div.products-row").click(function (e) {
           e.preventDefault();
           if (jQuery(this).children().next().children("div.product-contents").is(':hidden'))  {
        	   jQuery("div.products-row").children().next().children("div.product-contents").hide("slow");
        	   jQuery(this).children().next().children("div.product-contents").show("slow");
           }
           else  {
        	   jQuery(this).children().next().children("div.product-contents").hide("slow");
           }
      }); 
       
   });