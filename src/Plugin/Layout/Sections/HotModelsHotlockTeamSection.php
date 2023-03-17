<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *
 * Team Section Layout
 *
 * @Layout(
 *  id = "hot_models_team_section",
 *  label = @Translation("hot_models_team_section"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_team_section",
 *  library = "hot_models/hot_models_team_section",
 *  default_region = "team_section_title",
 *  regions = {
 *      "team_section_title" = {
 *          "label" = @Translation("team_section_title"),
 *       },
 *       "team_section_content" = {
 *          "label" = @Translation("team_section_content"),
 *       },
 *       "team_section_btn" = {
 *          "label" = @Translation("team_section_btn"),
 *       }
 *  }
 * )
 */
class HotModelsHotlockTeamSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_team_section.png");
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
      'region_css_team_section_title' => 'text-center',
      'hmts' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'team_section_title' => [
            'text_html' => [
              'label' => 'Titre',
              'value' => '<p>Our Team</p>'
            ]
          ],
          'team_section_content' => [
            'text_html' => [
              'label' => 'Container',
              'value' => ''
            ]
          ],
          'team_section_btn' => [
            'url' => [
              'label' => 'Bouton',
              'value' => [
                "link" => "#",
                "text" => "more about team",
                "class" => "htl-btn--bg-inv htl-btn"
              ]
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}