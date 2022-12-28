<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Hot Models testimony hotlock
 * 
 * @Layout(
 *  id = "hot_models_hotlock_testimony",
 *  label = @Translation("hot_models_hotlock_testimony"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_hotlock_testimony",
 *  library = "hot_models/hot_models_hotlock_testimony",
 *  default_region = "testimony_title",
 *  regions = {
 *      "testimony_title" = {
 *          "label" = @Translation("testimony_title"),     
 *      },
 *      "testimony_counter_contener" = {
 *          "label" = @Translation("testimony_counter_contener"),
 *      },
 *      "testimony_text_contener" = {
 *          "label" = @Translation("testimony_text_contener"),
 *      }
 *  }
 * )
 */
class HotModelsHotlockTestimony extends FormatageModelsSection
{

   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_testimony.png");
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
        'hmht' => [
            'builder-form' => true,
            'region_css_testimony_title' => 'h1',
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'testimony_title' => [
                    'text_html' => [
                        'label' => 'Titre',
                        'value' => 'Testimonials'
                    ]
                ],
                'testimony_counter_contener' => [
                    'text_html' => [
                        'label' => 'Compteur ici',
                        'value' => ''
                    ]
                ],
                'testimony_text_contener' => [
                    'text_html' => [
                        'label' => 'Textes',
                        'value' => '<div class="single-slide">
                                        <div class="speech">
                                            Thanks for the quick and professional services! I was happy to know about safety.
                                        </div>
                                        <div class="info">
                                            <div class="author">
                                                Romeo Sanchez
                                            </div>
                                            <div class="company-name">
                                                Hotels Group
                                            </div>
                                        </div>
                                    </div>'
                    ]
                ]
            ]
        ]
    ];
  }

}