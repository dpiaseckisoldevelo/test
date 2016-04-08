<li class="span3 isotope-item <?php print strip_tags(render($content['field_team_category'])); ?>" style="width:220px">
	<div class="team-item thumbnail">
		<a href="#" class="thumb-info team">
			<?php print render ($content['field_image']); ?>
			<span class="thumb-info-title">
				<span class="thumb-info-inner"><?php print $title; ?></span>
				<span class="thumb-info-type"><?php print str_replace('-', ' ', strip_tags(render($content['field_team_category']))); ?></span>
			</span>
		</a>
		<span class="thumb-info-caption">
			<p><?php print render ($content['field_team_bio']); ?></p>
		</span>
	</div>
</li>
