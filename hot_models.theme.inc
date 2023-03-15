<?php

// preprocess function for hot_models hotlock menu
function template_preprocess_layoutmenu_hot_models_hotlock_menu(&$vars) {
  if (!empty($vars['element']['#items'])) {
    $vars['items'] = $vars['element']['#items'];
    $vars['children'] = $vars['element']['#children'];
  }
}