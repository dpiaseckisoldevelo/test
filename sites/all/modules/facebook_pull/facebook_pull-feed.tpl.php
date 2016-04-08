<ul class="facebook-feed flex-container">
<?php foreach ($items as $item): ?>
  <li class="item flex-item">
  <span class="facebook-feed-picture"><img style="width:85%" src="<?php global $theme_root; echo $theme_root; ?>/img/soldevelo_logo_small.png" alt="SolDeveloLogo" ></span>
  <span class="facebook-feed-from"><a href="//facebook.com/profile.php?id=<?php echo $item->from->id; ?>"><?php echo $item->from->name; ?></a></span>
  <?php if (isset($item->story)): ?>
      <span class="facebook-feed-story"><?php echo str_replace($item->from->name, '', $item->story); ?></span>
    <?php endif; ?>
    <span class="facebook-feed-message">
      <?php if (isset($item->message)) echo $item->message; ?>
      <?php if ($item->type === 'link'): ?>
        <?php if (isset($item->description)) echo $item->description; ?>
        <?php if (isset($item->name)) echo l($item->name, $item->link); ?>
      <?php endif; ?>
      <?php if (in_array($item->type, array('photo', 'video'))): ?>
        <?php echo l('<img class="thumbnail img-responsive" src="' . $item->picture . '" />', $item->link, array('html' => true, 'attributes' => array('_target' => 'blank'))); ?>
      <?php endif; ?>
      <?php if ($item->type === 'question'): ?>
        <?php echo $item->question; ?>
        <?php foreach ($item->options as $option):?>
          <span><?php echo $option; ?></span>
        <?php endforeach; ?>
      <?php endif; ?>
    </span>
    <span class="facebook-feed-time"><?php echo t('!time ago.', array('!time' => format_interval(time() - strtotime($item->created_time)))); ?></span>
  </li>
<?php endforeach; ?>
</ul>
