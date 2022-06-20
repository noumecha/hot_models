<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_service_items",
 *  label = @Translation("hot_models_service_items"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-service-items",
 *  library = "hot_models/hot-models-service-items",
 *  regions = {
 *      "description" = {
 *          "label" = @Translation(" svg + titre"),
 *       }
 *  }
 * )
 *
 */
class HotModelsServiceItems extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot-models-service-items.png");
  }
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels:build()
   *
   */
  public function build(array $regions) {
    
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }
  
  /**
   *
   * {@inheritdoc}
   *
   */
  public function defaultConfiguration() {
    return [
      'css' => '',
      'region_css_description' => ' col-md-4 col-sm-6 col-xl-2 '
    ] + parent::defaultConfiguration();
  }
  
}