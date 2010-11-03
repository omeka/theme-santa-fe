<?php head(array('title'=>'Browse Items','bodyid'=>'items','bodyclass'=>'tags')); ?>

<div id="primary">
	
	<h2>Browse Items</h2>
	
	<ul class="navigation item-tags" id="secondary-nav">
	<?php echo santa_fe_nav_items(); ?>
	</ul>

	<?php echo tag_cloud($tags, uri('items/browse')); ?>

</div><!-- end primary -->

<?php foot(); ?>