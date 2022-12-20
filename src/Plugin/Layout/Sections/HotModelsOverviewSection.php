<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_overview_section",
 *  label = @Translation("hot_models_overview_section"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_overview_section",
 *  library = "hot_models/hot_models_overview_section",
 *  default_region = "content",
 *  regions = {
 *      "subtitle_OS" = {
 *          "label" = @Translation("subtitle_OS"),
 *       },
 *       "title_OS" = {
 *          "label" = @Translation("title_OS"),
 *       },
 *       "text_OS" = {
 *          "label" = @Translation("text_OS"),
 *       },
 *       "button_OS" = {
 *          "label" = @Translation("button_OS"),
 *       },
 *       "services_OS" = {
 *          "label" = @Translation("services_OS"),
 *       }
 *  }
 * )
 *
 */
class HotModelsOverviewSection extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_overview_section.png");
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
    return parent::defaultConfiguration() + [
      'css' => '',
      'region_tag_services_OS' => 'row no-gutters',
      'hmos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'subtitle_OS' => [
            'text_html' => [
              'label' => "Sous titre",
              'value' => "<p>Services overview</p>"
            ]
          ],
          'title_OS' => [
            'text_html' => [
              'label' => "Titre",
              'value' => "<p>
                                            We offer <b>fast, professional and exceptional</b> services
                                        </p>"
            ]
          ],
          'text_OS' => [
            'text_html' => [
              'label' => "Paragraphe",
              'value' => "<p>
                                            Our company is a full cycle guard and security firm that will deal with any type of locksmith and security tasks. We offer a full range of the solutions, from handling door locks to advanced monitoring and controlling your facility’s perimeter. 
                                        </p>"
            ]
          ],
          'button_OS' => [
            'url' => [
              'label' => "Button",
              'value' => [
                'link' => "#",
                'text' => "READ MORE",
                'class' => "htl-btn htl-btn--big htl-btn--fade"
              ]
            ]
          ],
          'services_OS' => [
            'text_html' => [
              'label' => 'Services Content',
              'value' => ""
            ]
          ]
        ]
      ]
    ];
  }
  
}