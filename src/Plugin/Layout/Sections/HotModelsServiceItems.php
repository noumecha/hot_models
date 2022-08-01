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
 *       },
 *      "list_content" = {
 *          "label" = @Translation(" list_content"),
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
      'css' => 'no-gutters row',
      'region_css_description' => ' col-md-4 col-sm-6 col-xl-2 ',
      'hmls' => [
        'builder-form' => true,
        'info' => [
          'title' => 'List content',
          'loader' => 'static'
        ],
        'fields' => [
          'list_content' => [
            'text_html' => [
              'label' => 'content',
              'value' => '

<div class="service-items">
          <span class="icon">
            <i>
              <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="70" height="71.46"
                   preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 49">
                <g fill="none" stroke="currentColor" stroke-width="4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M6 27v16m0-9h7l4-6M7 21l26.474 17.649a1 1 0 0 0 1.069.025L44 33" />
                  <path
                        d="M7.078 13.719a1 1 0 0 1-.11-1.58l7.46-6.63a1 1 0 0 1 1.212-.09l27.065 17.732a1 1 0 0 1-.011 1.68l-9.144 5.82a1 1 0 0 1-1.092-.012l-25.38-16.92Z" />
                </g>
              </svg>
            </i>
          </span>
          <div class="icon-title pl-4">
            <a href="#">Video Surveillance</a>
          </div>
        </div>

'
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}