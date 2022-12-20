<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_hotlock_single_service",
 *  label = @Translation("hot_models_hotlock_single_service"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot-models-hotlock-single-service",
 *  library = "hot_models/hot-models-hotlock-single-service",
 *  regions = {
 *      "description" = {
 *          "label" = @Translation(" Description "),
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
class HotModelsSingleServiceItem extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot-models-hotlock-single-service.png");
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
      'region_css_call_to_action' => 'htl-btn htl-btn--sm htl-btn--bg-inv',
      'hmos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'description' => [
            'text_html' => [
              'label' => "Sous titre",
              'value' => "Our company specialises in all kinds of auto locksmith services dealing with car locks & keys for all types of vehicles."
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