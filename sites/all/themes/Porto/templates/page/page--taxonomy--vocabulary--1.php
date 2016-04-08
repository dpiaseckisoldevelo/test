<?php 
die("haha, dzialam");

if ($items = field_get_items('node', $node, 'field_image')) {
  if (count($items) == 1) {
    $image_slide = 'false';
  }
  elseif (count($items) > 1) {
    $image_slide = 'true';
  }
}  
  
$uid = user_load($node->uid);

if (module_exists('profile2')) {  
  $profile = profile2_load_by_user($uid, 'main');
}

?>

<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix post post-large-image blog-single-post"<?php print $attributes; ?>>

  <?php if ($display_submitted): ?>
    <div class="post-date">
			<span class="day"><?php print format_date($node->created, 'custom', 'd'); ?></span>
			<span class="month"><?php print format_date($node->created, 'custom', 'M'); ?></span>
		</div>
	<?php endif; ?>	

 <?php print render($title_prefix); ?>
	    <h2 <?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	  <?php print render($title_suffix); ?>
	    
	  <?php if ($display_submitted && !$teaser): ?>
	  
	    <div class="post-meta">
				<span class="post-meta-user"><i class="icon-user"></i> <?php echo t('By'); ?> <?php print $name; ?> </span>
				<?php if (render($content['field_tags'])): ?> 
				  <span class="post-meta-tag"><i class="icon-tag"></i> <?php print render($content['field_tags']); ?> </span>
				<?php endif; ?> 
			</div>
		
	  <?php endif; ?>

	<?php if( (!$teaser) AND (module_exists('profile2')) ): ?>
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_pinterest_pinit"></a>
				<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
			<!-- AddThis Button END -->

		<?php endif; ?>
	
	
	
  <?php if (render($content['field_image'])) : ?> 
	  
	  <?php if ($image_slide == 'true'): ?>
		  <div class="post-image">
			  <div class="flexslider flexslider-center-mobile flexslider-simple" style="height:400px" data-plugin-options='{"animation":"slide", "animationLoop": true, "maxVisibleItems": 3}'>
			    <ul class="slides">
					  <?php if (render($content['field_image'])) : ?>
					    <?php print render($content['field_image']); ?>
					  <?php endif; ?>
			    </ul>
			  </div>    
			</div>
		<?php endif; ?>
			
		<?php if ($image_slide == 'false'): ?>
		  <div class="single-post-image">
		    <?php print render($content['field_image']); ?>
		  </div>  
		<?php endif; ?>
			
  <?php endif; ?>
  

	
	<div class="post-content">

	 
	   
	  <div class="article_content"<?php print $content_attributes; ?>>
	    <?php
	      // Hide comments, tags, and links now so that we can render them later.
	      hide($content['taxonomy_forums']);
	      hide($content['comments']);
	      hide($content['links']);
	      hide($content['field_tags']);
	      hide($content['field_image']);
	      print render($content);
	    ?>
	  </div>
	  
	 
		  <?php if (!$page && $teaser): ?>
	  
	    <div class="post-meta">
				<span class="post-meta-user"><i class="icon-user"></i> <?php echo t('By'); ?> <?php print $name; ?> </span>
				<?php if (render($content['field_tags'])): ?> 
				  <span class="post-meta-tag"><i class="icon-tag"></i> <?php print render($content['field_tags']); ?> </span>
				<?php endif; ?> 
				<a href="<?php print $node_url; ?>" class="btn btn-mini btn-primary pull-right">Read more...</a>
			</div>
		
	  
	  <?php endif; ?>
	  
	    
  
	</div>
	
	<?php
    // Remove the "Add new comment" link on the teaser page or if the comment
    // form is being displayed on the same page.
    if ($teaser || !empty($content['comments']['comment_form'])) {
      unset($content['links']['comment']['#links']['comment-add']);
    }
    // Only display the wrapper div if there are links.
    $links = render($content['links']);
    if ($links):
  ?>
    <div class="link-wrapper">
      <?php print $links; ?>
    </div>
  <?php endif; ?>

</article>
<!-- /node -->