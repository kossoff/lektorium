<?php

/**
 * Implements template_preprocess_html().
 *
 */
//function STARTER_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function STARTER_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function STARTER_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function STARTER_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

//function STARTER_preprocess_views_view(&$variables) {
//}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function STARTER_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function STARTER_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function STARTER_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function STARTER_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function STARTER_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function STARTER_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function STARTER_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function STARTER_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}



/*function lektorium_preprocess_page(&$variables, $hook) {
  if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $term = taxonomy_term_load(arg(2));

    // 4 указывает на номер словаря, для которого мы определяем новый шаблон.
    if ($term->vid == 4) {
      $variables['theme_hook_suggestions'][] = 'page__voc__news';
    }
  }
}*/

/*function lektorium_preprocess_node(&$variables, $hook) {
  if(arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2))) {
    $term = taxonomy_term_load(arg(2));

    // 4 указывает на номер словаря, для которого мы определяем новый шаблон.
    if ($term->vid == 4) {
      $variables['theme_hook_suggestions'][] = 'node__university';
      // теперь можно темизировать node--university.tpl.php
    }
  }
}*/

function lektorium_form_alter(&$form, &$form_state, $form_id) {
//  drupal_set_message('<pre>' . print_r($form, TRUE) . '</pre>');
}

function lektorium_form_views_exposed_form_alter(&$form, &$form_state, $form_id) {
  $form['search_api_views_fulltext'] = array(
    '#type' => 'textfield',
    //'#title' => t('Textbox title'),
    '#attributes' => array(
      'placeholder' => t('Например: Математика'),
      'class' => array('ctools-auto-submit-exclude'),
    ),
  );

  $form['type']['#default_value'] = 'All';

  $form['recorded_from']['#size'] = 9;
  $form['recorded_from']['#maxlength'] = 10;

  $form['recorded_to']['#size'] = 9;
  $form['recorded_to']['#maxlength'] = 10;
}

function lektorium_form_comment_form_alter(&$form, &$form_state) {
  $form['author']['#type'] = 'fieldset';
  $form['author']['#attributes'] = array(
      'placeholder' => t('Например: Математика'),
      'class' => array('hide'),
    );
  $form['actions']['submit']['#value'] = t('Добавить комментарий');

}

function lektorium_preprocess_comment(&$vars) {
  $vars['submitted'] = $vars['author'] . ' — ' . $vars['created'];
  //unset($vars['content']['links']['comment']['#links']['comment-reply']);
}

function lektorium_comment_post_forbidden($node) {
    return '';
}
