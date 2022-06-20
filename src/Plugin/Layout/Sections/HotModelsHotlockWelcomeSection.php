<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_hotlock_welcome_section",
 *  label = @Translation(" Hot models hotlock Welcome section "),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-hotlock-welcome-section",
 *  library = "hot_models/hot-models-hotlock-welcome-section",
 *  regions = {
 *      "sub_title" = {
 *          "label" = @Translation(" Sous title "),
 *       },
 *       "title" = {
 *          "label" = @Translation(" Title "),
 *       },
 *       "call_to_action" = {
 *          "label" = @Translation(" Call to action"),
 *       },
 *       "image_bg" = {
 *          "label" = @Translation(" Image bg "),
 *       }
 *  }
 * )
 *
 */
class HotModelsHotlockWelcomeSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot-models-hotlock-welcome-section.png");
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
      'css_descp' => 'justify-content-end',
      'region_css_call_to_action' => 'htl-btn htl-btn--big htl-btn--fade',
      'hmos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'sub_title' => [
            'text_html' => [
              'label' => "Sous titre",
              'value' => "Preventive solution"
            ]
          ],
          'title' => [
            'text_html' => [
              'label' => "Titre",
              'value' => "Access Control Systems"
            ]
          ],
          'call_to_action' => [
            'url' => [
              'label' => "Url",
              'value' => [
                'link' => '#',
                'text' => 'Discover More',
                'class' => 'htl-btn htl-btn--big htl-btn--fade'
              ]
            ]
          ],
          'image_bg' => [
            'img_bg' => [
              'label' => "image",
              'fids' => []
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}