<?php //echo "<pre>";print_r($arrCaseStudiesListData);die; ?>

<script type="text/javascript">

    jQuery(document).ready(function(){
        jQuery('#field_products_tid').change(function() { 
            jQuery("#CaseStudyProductFilterFrm").submit();
        });
    }); 

</script>


<?php global $base_url;?>

<div class="wrapper" align="center">
<form name="CaseStudyProductFilterFrm" id="CaseStudyProductFilterFrm" method="get" action="<?php echo $base_url.'/case-studies-listing'?>">
<select name="field_products_tid" id="field_products_tid" >
<option value="All" <?php if(isset($_REQUEST['field_products_tid']) &&  ($_REQUEST['field_products_tid']== "All")) { echo "selected"; } ?> >All</option>
<?php if (is_array($arrProductCatList) && count($arrProductCatList)>0) {
        $i = 1;
        $className = '';
        
        foreach ($arrProductCatList as $arrProductCatListValue) {
            
            ?>
            <option value="<?php echo $arrProductCatListValue->tid; ?>" <?php if(isset($_REQUEST['field_products_tid']) && ($_REQUEST['field_products_tid'] == $arrProductCatListValue->tid)) { echo "selected"; } ?> ><?php echo $arrProductCatListValue->name; ?></option>
            <?php
            $i++;
        }
    }
    ?>
  </select>
</form>         
 </div> 
