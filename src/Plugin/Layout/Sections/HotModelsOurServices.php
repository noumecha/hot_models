<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_our_services",
 *  label = @Translation("hot_models_our_services"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-our-service",
 *  library = "hot_models/hot_models_our_services",
 *  regions = {
 *      "titre" = {
 *          "label" = @Translation(" titre"),
 *       },
 *      "service_content" = {
 *          "label" = @Translation(" service_content"),
 *       }
 *  }
 * )
 *
 */
class HotModelsOurServices extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/ourService.png");
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
    return [
        'css' => '',
        'hovt' => [
            'builder-form'  => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'titre' => [
                    'text_html' => [
                        'label' => 'titre ',
                        'value' => 'Our services'
                    ]
                ],
                'service_content' => [
                  'text_html' => [
                      'label' => 'service content',
                      'value' => '        <div class="row align-items-center justify-content-center">
                            <div class="col-sm-6 col-md-4  ">
                                <div class="single-service-items">
                                    <div class="item-image">
                                        <div class="icon">
                                            <span></span><span></span><span></span>
                                        </div>
                                        <a href="#">
                                            <img
                                                src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/01/post-15-370x208.jpg">
                                        </a>
                                    </div>
                                    <div class="info-items">
                                        <h4 class="item-title">
                                            <a href="#">Car Locksmith</a>
                                        </h4>
                                        <div class="descriptor-item">
                                            Our company specialises in all kinds of auto locksmith services dealing with car locks &
                                            keys
                                            for all types of vehicles.
                                        </div>
                                        <div class="htl-btn htl-btn--sm htl-btn--bg-inv">
                                            <a href="#">
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  ">
                                <div class="single-service-items  ">
                                    <div class="item-image">
                                        <div class="icon">
                                            <span></span><span></span><span></span>
                                        </div>
                                        <a href="#">
                                            <img
                                                src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/01/post-15-370x208.jpg">
                                        </a>
                                    </div>
                                    <div class="info-items">
                                        <h4 class="item-title">
                                            <a href="#">Car Locksmith</a>
                                        </h4>
                                        <div class="descriptor-item">
                                            Our company specialises in all kinds of auto locksmith services dealing with car locks &
                                            keys
                                            for all types of vehicles.
                                        </div>
                                        <div class="htl-btn htl-btn--sm htl-btn--bg-inv">
                                            <a href="#">
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4  ">
                                <div class="single-service-items  ">
                                    <div class="item-image">
                                        <div class="icon">
                                            <span></span><span></span><span></span>
                                        </div>
                                        <a href="#">
                                            <img
                                                src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/01/post-15-370x208.jpg">
                                        </a>
                                    </div>
                                    <div class="info-items">
                                        <h4 class="item-title">
                                            <a href="#">Car Locksmith</a>
                                        </h4>
                                        <div class="descriptor-item">
                                            Our company specialises in all kinds of auto locksmith services dealing with car locks &
                                            keys
                                            for all types of vehicles.
                                        </div>
                                        <div class="htl-btn htl-btn--sm htl-btn--bg-inv">
                                            <a href="#">
                                                read more
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>'
                    ]
                ]
            ]
        ]
    ] + parent::defaultConfiguration();
  }
  
}