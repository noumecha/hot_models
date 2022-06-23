<?php

namespace Drupal\hot_models\Plugin\Layout\Sections\Menus;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * hot models hotlock menu 
 * 
 * @Layout(
 *  id = "hot_models_hotlock_menu",
 *  label = @Translation("hot_models_hotlock_menu"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections/menus",
 *  template = "hot_models_hotlock_menu",
 *  library = "hot_models/hot_models_hotlock_menu",
 *  default_region = "menu_logo",
 *  regions = {
 *      "menu_logo" = {
 *          "label" = @Translation("menu_logo"),   
 *      },
 *      "menu_list" = {
 *          "label" = @Translation("menu_list"),  
 *      },
 *      "menu_butoon" = {
 *          "label" = @Translation("menu_button"),
 *      }
 *  }
 * )
 * 
 */

class HotModelsHotlockMenu extends FormatageModelsSection
{

   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_menu.png");
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
        'hmhm' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'menu_logo' => [
                    'text_html' => [
                        'label' => 'Logo Image',
                        'value' => '<img src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/10/retina-logo-2.png" height="43px" alt=""
                                    srcset="">'
                    ]
                ],
                'menu_list' => [
                  'text_html' => [
                      'label' => '',
                      'value' => ''
                  ]
                ],
                'menu_button' => [
                  'url' => [
                    'label' => 'Button',
                    'value' => [
                      'link' => '#',
                      'text' => '',
                      'value' => 'APPOINTEMENT'
                    ]
                  ]
                ]
            ]
        ]
    ];
  }

}