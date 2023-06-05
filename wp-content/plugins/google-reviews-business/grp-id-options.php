<?php global $wp_version; if (version_compare($wp_version, '3.5', '>=')) { wp_enqueue_media(); ?>
<div class="form-group">
    <div class="col-sm-12">
        <img id="<?php echo $this->get_field_id('place_photo_img'); ?>" src="<?php echo $place_photo; ?>" alt="<?php echo $place_name; ?>" class="grw-place-photo-img" style="display:<?php if ($place_photo) { ?>inline-block<?php } else { ?>none<?php } ?>;width:32px;height:32px;border-radius:50%;">
        <a id="<?php echo $this->get_field_id('place_photo_btn'); ?>" href="#" class="grw-place-photo-btn"><?php echo grp_i('Change Place photo'); ?></a>
        <input type="hidden" id="<?php echo $this->get_field_id('place_photo'); ?>" name="<?php echo $this->get_field_name('place_photo'); ?>" value="<?php echo $place_photo; ?>" class="form-control grw-place-photo" tabindex="2"/>
    </div>
</div>
<?php } ?>

<div class="form-group">
    <div class="col-sm-12">
        <input type="text" id="<?php echo $this->get_field_id('place_name'); ?>" name="<?php echo $this->get_field_name('place_name'); ?>" value="<?php echo $place_name; ?>" class="form-control grw-google-place-name" placeholder="<?php echo grp_i('Google Place Name'); ?>" readonly />
    </div>
</div>

<div class="form-group">
    <div class="col-sm-12">
        <input type="text" id="<?php echo $this->get_field_id('place_id'); ?>" name="<?php echo $this->get_field_name('place_id'); ?>" value="<?php echo $place_id; ?>" class="form-control grw-google-place-id" placeholder="<?php echo grp_i('Google Place ID'); ?>" readonly />
    </div>
</div>