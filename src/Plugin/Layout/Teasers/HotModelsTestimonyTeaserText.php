<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Teaser for testimony text 
 * 
 * @Layout(
 *  id = "hot_models_testimony_teaser_text",
 *  label = @Translation("hot_models_testimony_teaser_text"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_testimony_teaser_text",
 *  library = "hot_models/hot_models_testimony_teaser_text",
 *  default_region = "teaser_text_title",
 *  regions = {
 *      "teaser_text_title" = {
 *          "label" = @Translation("teaser_text_title"),  
 *      },
 *      "teaser_text_author" = {
 *          "label" = @Translation("teaser_text_author"),   
 *      },
 *      "teaser_text_company" = {
 *          "label" = @Translation("teaser_text_company"),     
 *      }
 *  }
 * )
 */

class HotModelsTestimonyTeaserText extends FormatageModelsTeasers
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_testimony_teaser_text.png");
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
  public function defaultConfiguration()
  {
    return parent::defaultConfiguration() + [
        'css' => '',
        'hmtt' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'teaser_text_title' => [
                    'text_html' => [
                        'label' => 'Titre',
                        'value' => 'Thanks for the quick and professional services! I was happy to know about safety.'
                    ]
                ],
                'teaser_text_author' => [
                    'text_html' => [
                        'label' => 'Author name',
                        'value' => 'Romeo Sanchez'
                    ]
                ],
                'teaser_text_company' => [
                    'text_html' => [
                        'label' => 'Author role',
                        'value' => 'Hotels Group'
                    ]
                ]
            ]
        ]
    ];
  }

}