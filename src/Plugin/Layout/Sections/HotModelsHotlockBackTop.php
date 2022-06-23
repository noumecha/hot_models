<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * hot models hotlock back to top 
 * @Layout(
 *  id = "hot_models_hotlock_back_top",
 *  label = @Translation("hot_models_hotlock_back_top"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_hotlock_back_top",
 *  library = "hot_models/hot_models_hotlock_back_top",
 *  default_region = "back_top_icon",
 *  regions = {
 *      "back_top_icon" = {
 *          "label" = @Translation("back_top_icon"),   
 *      }
 *  }
 * )
 * 
 */
class HotModelsHotlockBackTop extends FormatageModelsSection
{

   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_back_top.png");
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
        'hmbt' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'back_top_icon' => [
                    'text_html' => [
                        'label' => 'Icone',
                        'value' => '<i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="25" height="25"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                                d="M18 15a1 1 0 0 1-.64-.23L12 10.29l-5.37 4.32a1 1 0 0 1-1.41-.15a1 1 0 0 1 .15-1.41l6-4.83a1 1 0 0 1 1.27 0l6 5a1 1 0 0 1 .13 1.41A1 1 0 0 1 18 15Z" />
                                        </svg>
                                    </i>'
                    ]
                ]
            ]
        ]
    ];
  }

}