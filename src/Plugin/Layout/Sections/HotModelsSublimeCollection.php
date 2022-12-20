<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * A custom layout for Sublime Collection  : hot models 
 * 
 * @Layout(
 *  id = "hot_models_sublime_collection",
 *  label = @Translation("hot_models_sublime_collection"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_sublime_collection",
 *  library = "hot_models/hot_models_sublime_collection",
 *  default_region = "",
 *  regions = {
 *       "sublime_collection_left" = {
 *          "label" = @Translation("sublime_collection_left"),
 *       },
 *       "sublime_collection_right" = {
 *          "label" = @Translation("sublime_collection_right"),
 *       }
 *  }
 * )
 * 
 */

class HotModelsSublimeCollection extends FormatageModelsSection 
{
    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_sublime_collection.png");
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
            'hmsc' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'sublime_collection_left' => [
                        'text_html' => [
                            'label' => 'Content left',
                            'value' => ''
                        ]
                    ],
                    'sublime_collection_right' => [
                        'text_html' => [
                            'label' => 'Content Right',
                            'value' => ''
                        ]
                    ]
                ]
            ]
        ];
    }
}