<div id="slidebox" class="flexslider">
    <ul class="slides">
      
      <?php foreach($arrHomeSlideshowList as $arrHomeSlideshow) { ?>
      <li style="height:300px;background-color: <?php echo $arrHomeSlideshow['bg_colr'];?>">
        <img src="<?php print base_path() .  'sites/default/files/'.$arrHomeSlideshow['image_name']; ?>" style="width: 400px;"/>
        
          <div class="flex-caption">
            <h2><?php echo $arrHomeSlideshow['caption']; ?></h2>
            <a class="frmore" href="<?php echo $arrHomeSlideshow['target_url']; ?>"> <?php print t('READ MORE'); ?> </a>
          </div>
        
      </li>
      <?php } ?>
    </ul><!-- /slides -->
    <div class="doverlay"></div>
</div>