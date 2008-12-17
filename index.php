<?php head(array('bodyid'=>'home')); ?>	

	<div id="primary">
		<!-- Featured Item -->
		<div id="featured-item">
			<?php $featuredItem = random_featured_item();  ?>
			<h2>Featured Item</h2>
			<?php if ( $featuredItem ): ?>
			    <h3><?php echo link_to_item($featuredItem); ?></h3>
    			<?php if(has_thumbnail($featuredItem)): ?>
    			    <div class="item-img"><?php echo link_to_square_thumbnail($featuredItem, array('class'=>'image')); ?></div>
    			<?php endif; ?>
    			<p class="item-description"><?php echo h(snippet($featuredItem->description, 0, 150)); ?></p>	
    		<?php else: ?>
    				<p>You have no featured items. </p>	
    		<?php endif; ?>	
		</div><!--end featured-item-->	
		
		<!-- Featured Collection -->
		<div id="featured-collection">
		    <?php $featuredCollection = random_featured_collection(); ?>
		    <h2>Featured Collection</h2>
		    <?php if ( $featuredCollection ): ?>
		        <h3><?php echo link_to_collection($featuredCollection); ?></h3>
		<p class="item-description"><?php echo h(snippet($featuredCollection->description, 0, 150)); ?></p>	
		    <?php else: ?>
		        <p>You have no featured collections.</p>
		    <?php endif; ?>
		</div><!-- end featured collection -->

		<!-- Featured Exhibit -->
		<div id="featured-exhibit">
		    <?php $featuredExhibit = random_featured_exhibit(); ?>
		    <h2>Featured Exhibit</h2>
		    <?php if ( $featuredExhibit ): ?>
		      <h3><?php echo link_to_exhibit($featuredExhibit); ?></h3>
		<p class="item-description"><?php echo h(snippet($featuredCollection->description, 0, 150)); ?></p>
		    <?php else: ?>
		        <p>You have no featured exhibits.</p>
		    <?php endif; ?>
		</div><!-- end featured exhibit -->
		
		
			
	</div><!-- end primary -->
	
	<div id="secondary">
		<div id="recent-items">
			<h2>Recently Added</h2>
			<?php $recent = recent_items(3); ?>
			<?php if(!empty($recent)): // Loop through the 3 most recently added items ?>
			<div class="items-list">
				<?php foreach( $recent as $item ): ?>
				<div class="item">
					<h3><?php echo link_to_item($item); ?></h3>
					<?php if(has_thumbnail($item)): ?>
					<div class="item-img">
					<?php echo link_to_square_thumbnail($item); ?>						
					</div>
					<?php endif; ?>
					<?php if(!empty($item->description)): ?>
					<div class="item-description"><p><?php echo h(snippet($item->description,0,150)); ?><?php echo link_to($item, 'show', 'see more'); ?></p></div>
					<?php endif; ?>	

				</div>
				<?php endforeach; ?>
			</div>
			<?php else: ?>
				<h3>No Recent Items</h3>
				<p>No recent items available.</p>	
			<?php endif; ?>
			<p class="view-items-link"><a href="<?php echo uri('items'); ?>">View All Items</a></p>
			
		</div><!--end recent-items -->
	</div><!-- end secondary -->
	
	
	
<?php foot(); ?>