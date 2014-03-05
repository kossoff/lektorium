<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct url of the current node.
 * - $terms: the themed list of taxonomy term links output from theme_links().
 * - $display_submitted: whether submission information should be displayed.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the following:
 *   - node: The current template type, i.e., "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type, i.e. story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode, e.g. 'full', 'teaser'...
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined, e.g. $node->body becomes $body. When needing to access
 * a field's raw values, developers/themers are strongly encouraged to use these
 * variables. Otherwise they will have to explicitly specify the desired field
 * language, e.g. $node->body['en'], thus overriding any language negotiation
 * rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 */
?>
<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
    <?php endif; ?>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <?php if ($page): ?>
    <h1><?php print $title; ?></h1>
    <div class="badge badge-type append-bottom">Курс MOOC</div>
  <?php endif; ?>

  <div class="row">
    <div class="large-12 columns">
      <div class="label">Партнёр:</div><?php print render($content['field_university_t_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Предмет:</div><?php print render($content['field_subject_t_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Лектор:</div><?php print render($content['field_speaker_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Язык:</div><?php print render($content['field_language_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Аудитория:</div><?php print render($content['field_audition_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Статус:</div><?php print render($content['field_status_mooc']); ?>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns">
      <div class="label">Ссылка:</div><?php print render($content['field_link']); ?>
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
  <div class="row badges">
    <div class="large-12 columns">
      <?php
      $hitcount = statistics_get ( $node->nid );

      if ( $hitcount['totalcount'] >= 5 )
        print '<span class="badge badge-hit">Хит</span>';
      ?>
      <?php
        $time_now = time ();
        $time_distinction = $time_now - $node->created;

        if ( $time_distinction <= 1209600 )
          print '<span class="badge badge-new">Новинка</span>';
      ?>
      <?php if (!empty($content['field_redaction'])): ?><span class="badge badge-redaction"><?php print render($content['field_redaction']); ?></span><?php endif; ?>
    </div>
  </div>

  <div class="row">
    <div class="large-5 columns"><?php print render ($content['field_mooc_image']); ?></div>
    <div class="large-7 columns"><?php print render ($content['body']); ?></div>
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
