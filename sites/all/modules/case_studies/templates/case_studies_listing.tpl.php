<?php //echo "<pre>";print_r($arrCaseStudiesListData);die; ?>

<style type='text/css'>

.left1{
   position: relative;
   float: left;
   left: 5px;
   width: 30%;
   height: 400px;
   background-color: #f5f5f5;
   margin-bottom: 10px;
   margin-right:5px;
   border:1px solid #000;
   text-align: center;
}
.prod_title {
    font-weight: bold;
}
.prod_banner {
    float:left;
    display: inline;
    width:100%;
}
.prod_banner img {
    height:300px;
}

</style>




<div class="wrapper" align="center">
<div class="prod_banner"><img src="/drupal_demo/sites/all/themes/kantar/images/slide-image-1.jpg"></div>
<?php if (is_array($arrCaseStudiesList) && count($arrCaseStudiesList)>0) {
        $i = 1;
        $className = '';
        $arrUserListValue = array();
        foreach ($arrCaseStudiesList as $arrCaseStudiesListValue) {
            #echo "<pre>";print_r($arrUserListValue);exit;
            if ($i%2 == 0) {
                $className = 'even';
            } else {
                $className = 'odd';
            }

            ?>

            <div class="left1">
                <p class="prod_title"><?php echo $arrCaseStudiesListValue->title; ?></p>
                <p><?php echo $arrCaseStudiesListValue->field_overview_value; ?></p>
            </div>
            <?php
            $i++;
        }
    }
    ?>
         
 </div> 
