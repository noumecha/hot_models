<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot models text btn Block 
 * @Layout(
 *  id = "hot_models_text_btn_block",
 *  label = @Translation("hot_models_text_btn_block"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_text_btn_block",
 *  library = "hot_models/hot_models_text_btn_block",
 *  default_region = "security_bg",
 *  regions = {
 *      "btn_block_bg" = {
 *          "label" = @Translation("btn_block_bg"),     
 *      },
 *      "btn_block_text" = {
 *          "label" = @Translation("btn_block_text"),     
 *      },
 *      "btn_block_boutton" = {
 *          "label" = @Translation("btn_block_boutton"),     
 *      }
 *  }
 * )
 */

class HotModelsHotlockTextBtnBlock extends FormatageModelsSection
{

       /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_text_btn_block.png");
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
        'hmtbb' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'btn_block_bg' => [
                    'img_bg' => [
                        'label' => 'Image bg',
                        'fids' => []
                    ]
                ],
                'btn_block_text' => [
                    'text_html' => [
                        'label' => 'Text titre',
                        'value' => '<h2 class="title">
                                        Delivering the 
                                        <strong>Best Security Solutions</strong> 
                                        to Our Clients
                                    </h2>'
                    ]
                ],
                'btn_block_boutton' => [
                    'url' => [
                        'label' => 'Bouton',
                        'value' => [
                            'link' => '#',
                            'text' => 'MAKE AN APPOINTMENT',
                            'class' => ''
                        ]
                    ]
                ]
            ]
        ]
    ];
  }

}