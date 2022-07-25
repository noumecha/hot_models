<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_sublime_r_pub",
 *  label = @Translation("hot_models_sublime_r_pub"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_sublime_r_pub",
 *  library = "hot_models/hot_models_sublime_r_pub",
 *  default_region = "sublime_r_pub_description",
 *  regions = {
 *      "sublime_r_pub_title" = {
 *          "label" = @Translation("sublime_r_pub_title"),     
 *      },
 *      "sublime_r_pub_description" = {
 *          "label" = @Translation(" sublime_r_pub_description"),
 *       },
 *      "sublime_r_pub_link" = {
 *          "label" = @Translation("sublime_r_pub_link"),
 *       },
 *      "sublime_r_pub_bg" = {
 *          "label" = @Translation("sublime_r_pub_bg"),     
 *      }
 *  }
 * )
 *
 */
class HotModelsSublimeRPub extends FormatageModelsSection
{

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_sublimeRPub.png");
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
   * {@inheritdoc}
   */
  public function defaultConfiguration()
  {
    return parent::defaultConfiguration() + [
      'css' => '',
      'hmsrp_form' => [
        'builder-form' => true,
            'info' => [
              'title' => 'List content',
              'loader' => 'static'
            ],
        'fields' => [
            'sublime_r_pub_title' =>  [
                'text_html' => [
                    'label' => 'Titre',
                    'value' => 'Amazing Devices'
                ]
            ],
            'sublime_r_pub_bg' => [
                'img_bg' => [
                    'label' => 'Image de fond',
                ]
            ],
            'sublime_r_pub_description' => [
                'text_html' => [
                    'label' => 'Description',
                    'value' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet laboriosam fuga id quasi non sed.'
                ]
            ],
            'sublime_r_pub_link' => [
                'text_html' => [
                    'label' => 'Lien',
                    'value' => [
                        'text' => 'See More',
                        'class' => 'link',
                        'href' => '#'
                    ]
                ]
            ]
        ]
      ]
    ];
  }

}