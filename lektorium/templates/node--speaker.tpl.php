<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($page): ?>
    <?php
      $options = array(
        'label' => 'hidden',
        'type' => 'image',
        'settings' => array(
        'image_style' => 'lector_and_university_220x170',
        )
      );

      $photo = field_view_field('node', $node, 'field_speaker_photo',$options);

      ?>
    <?php print render ($photo); ?>
    <h1><?php print $title; ?></h1>
  <?php endif; ?>


  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    print render($content);
  ?>

  <?php if (!empty($content['field_tags']) && !$is_front): ?>
    <?php print render($content['field_tags']) ?>
  <?php endif; ?>

  <?php print render($content['comments']); ?>

</article>
