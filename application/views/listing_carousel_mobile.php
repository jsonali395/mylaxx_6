<div class="mobile-carousel" data-flickity='{ "cellAlign": "left", "contain": "true", "wrapAround": "true", "prevNextButtons": "false"}'>
	<?php foreach($listing->item->images as $image) { ?>
	<div class="carousel-cell carousel-cell-mobile" style="background-image: url('<?=asset_url()?>img/defaultItem.png');">
		<img src="http://134.209.23.223:4002/ob/images/<?php echo $image->medium ?>"/>
	</div>
	<?php } ?>
</div>

