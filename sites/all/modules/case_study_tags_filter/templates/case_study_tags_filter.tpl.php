<?php //echo "<pre>";print_r($arrCaseStudiesListData);die; ?>

<script type="text/javascript">

    jQuery(document).ready(function(){
        jQuery('#case_study_tags_filter').change(function() { 
            jQuery("#CaseStudyFilterFrm").submit();
        });
    }); 

</script>

<?php global $base_url;?>


<div class="wrapper" align="center">
<form name="CaseStudyFilterFrm" id="CaseStudyFilterFrm" method="get" action="<?php echo $base_url.'/case-studies-listing'?>">
<select name="case_study_tags_filter" id="case_study_tags_filter" >
<option value="All" <?php if(isset($_REQUEST['case_study_tags_filter']) &&  ($_REQUEST['case_study_tags_filter']== "All")) { echo "selected"; } ?> >All</option>
<?php if (is_array($arrTaxonomyList) && count($arrTaxonomyList)>0) {
        $i = 1;
        $className = '';
        
        foreach ($arrTaxonomyList as $arrTaxonomyListValue) {
            
            ?>
            <option value="<?php echo $arrTaxonomyListValue->tid; ?>" <?php if(isset($_REQUEST['case_study_tags_filter']) && ($_REQUEST['case_study_tags_filter'] == $arrTaxonomyListValue->tid)) { echo "selected"; } ?> ><?php echo $arrTaxonomyListValue->name; ?></option>
            <?php
            $i++;
        }
    }
    ?>
  </select>
</form>         
 </div> 
