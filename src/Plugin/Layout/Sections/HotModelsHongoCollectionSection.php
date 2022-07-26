<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * A custom layout for hongo collection : hot_models module
 * 
 * @Layout(
 *  id = "hot_models_hongo_collection_section",
 *  label = @Translation("hot_models_hongo_collection_section"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_hongo_collection_section",
 *  library = "hot_models/hot_models_hongo_collection_section",
 *  default_region = "hongo_collection_right_full",
 *  regions = {
 *      "hongo_collection_left_top" = {
 *          "label" = @Translation("hongo_collection_left_top"),     
 *      },
 *      "hongo_collection_left_bottom" = {
 *          "label" = @Translation("hongo_collection_left_bottom"),     
 *      },
 *      "hongo_collection_right_full" = {
 *          "label" = @Translation("hongo_collection_right_full"),     
 *      },
 *      "hongo_collection_small_image" = {
 *          "label" = @Translation("hongo_collection_small_image"),     
 *      }
 *  }
 * )
 * 
 */

class HotModelsHongoCollectionSection extends FormatageModelsSection
{

    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_hero.png");
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
            'hmhc' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'hongo_collection_left_top' => [
                        'text_html' => [
                            'label' => 'Left Top',
                            'value' => ''
                        ]
                    ],
                    'hongo_collection_left_bottom' => [
                        'text_html' => [
                            'label' => 'Left Bottom',
                            'value' => ''
                        ]
                    ],
                    'hongo_collection_right_full' => [
                        'text_html' => [
                            'label' => [
                                'label' => 'Right Full',
                                'value' => ''
                            ]
                        ]
                    ],
                    'hongo_collection_small_image' => [
                        'text_html' => [
                            'label' => [
                                'label' => 'Small Image',
                                'value' => ''
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

}