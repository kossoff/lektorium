<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($page): ?>
    <div id="page-title" class="row">
      <div class="large-12 columns">
        <h1><?php print $title; ?></h1>
        <span class="badges">
          <span class="badge badge-type">Курс</span>
            <?php
              $hitcount = statistics_get ( $node->nid );

              if ( $hitcount['totalcount'] >= 5000 )
                print '<span class="badge badge-hit">Хит</span>';

              $time_now = time ();
              $time_distinction = $time_now - $node->created;

              if ( $time_distinction <= 1209600 )
                print '<span class="badge badge-new">Новинка</span>';

              if (!empty($content['field_redaction'])){
                $tags = field_view_field('node', $node, 'field_redaction', array('default'));

                foreach($tags["#items"] as $tag){
                  $name = $tag["taxonomy_term"]->name;
                  print '<span class="badge badge-redaction">' . $name . '</span>';
                }
              }
            ?>
        </span>
      </div>
    </div>
  <?php endif; ?>
  <div id="meta-desc-fields">
    <div class="row">
      <div class="large-12 columns">
        <div class="label">Партнёр:</div><?php print render($content['field_university_t']); ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="label">Предмет:</div><?php print render($content['field_subject_t']); ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="label">Лектор:</div><?php print render($content['field_speaker']); ?>
      </div>
    </div>
  <!--  <div class="row">
      <div class="large-12 columns">
        <div class="label">Курс лекций:</div><?php print render($content['field_view_courses']); ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="label label-date">Дата записи:</div><?php print render($content['field_date_recorded']); ?>
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <div class="label label-date">Дата публикации:</div><?php print $date; ?>
      </div>
    </div>-->
  </div>
  <div class="row">
    <div class="large-5 columns"><?php print render ($content['field_picture']); ?></div>
    <div class="large-7 columns"><div id="body"><?php print render ($content['body']); ?></div></div>
    <!--<div class="large-8 large-uncentered columns">
      <div class="row"><div class="large-12 columns"><?php print render($content['field_video']); ?></div></div>
      <div id="social" class="row">
        <div class="large-12 columns">
          <span class="social-link-wrap"><i class="fi-eye"></i><span class="totalcount"><?php print $hitcount['totalcount']; ?></span></span>
          <span class="social-link-wrap"><i class="fi-like"></i><span class="likes">Нравится 89</span></span>
        </div>
      </div>
      <div class="row"></div>
    </div>-->
  </div>
  <div class="row"><div class="large-12 columns"><?php print render ($content['field_lectures']); ?></div></div>


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
