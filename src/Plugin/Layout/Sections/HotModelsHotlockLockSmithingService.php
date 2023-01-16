<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Hot Models lock smithing hotlock
 * 
 * @Layout(
 *  id = "hot_models_lock_smithing",
 *  label = @Translation("hot_models_lock_smithing"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_lock_smithing",
 *  library = "hot_models/hot_models_lock_smithing",
 *  default_region = "lock_subtitle",
 *  regions = {
 *      "lock_subtitle" = {
 *          "label" = @Translation("lock_subtitle"),     
 *      },
 *      "lock_title" = {
 *          "label" = @Translation("lock_title"),     
 *      },
 *      "lock_image" = {
 *          "label" = @Translation("lock_image"),     
 *      },
 *      "lock_list_one" = {
 *          "label" = @Translation("lock_list_one"),     
 *      },
 *      "lock_list_two" = {
 *          "label" = @Translation("lock_list_two"),     
 *      }
 *  }
 * )
 */

class HotModelsHotlockLockSmithingService extends FormatageModelsSection
{

   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_lock_smithing.png");
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
            'hmls' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                   'lock_subtitle' => [
                       'text_html' => [
                           'label' => 'sous titre',
                           'value' => '<p>
                                        Locksmithing services
                                    </p>'
                       ]
                    ],
                    'lock_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => '<p>
                                            Our technicians are equipped with the <b>latest modern technology</b> and are available 24/7 at
                                            your request.
                                        </p>'
                        ]
                    ],
                    'lock_image' => [
                        'img_bg' => [
                            'label' => 'Image',
                            'fids' => []
                        ]
                    ],
                    'lock_list_two' => [
                        'text_html' => [
                            'label' => 'List Un',
                            'value' => '<li class="element">
                                            Master key systems
                                        </li>
                                        <li class="element">
                                            High security cylinders
                                        </li>
                                        <li class="element">
                                            Changing and rekeying locks
                                        </li>
                                        <li class="element">
                                            Keyless entry systems
                                        </li>'
                        ]
                    ],
                    'lock_list_two' => [
                        'text_html' => [
                            'label' => 'List Deux',
                            'value' => '<li class="element">
                                            Fast lock out service
                                        </li>
                                        <li class="element">
                                            Installation and repair of locks
                                        </li>
                                        <li class="element">
                                            Window locks
                                        </li>
                                        <li class="element">
                                            Deadlocks & Padlocks
                                        </li>'
                        ]
                    ]
                ]
            ]
        ];
   }

}