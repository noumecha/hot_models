<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Teaser testimony count 
 * 
 * @Layout(
 *  id = "hot_models_testimony_teaser_count",
 *  label = @Translation("hot_models_testimony_teaser_count"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_testimony_teaser_count",
 *  library = "hot_models/hot_models_testimony_teaser_count",
 *  default_region = "teaser_count_icon",
 *  regions = {
 *      "teaser_count_icon" = {
 *          "label" = @Translation("teaser_count_icon"),     
 *      },
 *      "teaser_count_number" = {
 *          "label" = @Translation("teaser_count_number"),     
 *      },
 *      "teaser_count_title" = {
 *          "label" = @Translation("teaser_count_title"),     
 *      }
 *  }
 * )
 */
class HotModelsTestimonyTeaserCount extends FormatageModelsTeasers
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_testimony_teaser_count.png");
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
        'hmttc' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'teaser_count_icon' => [
                    'text_html' => [
                        'label' => 'Icone SVG',
                        'value' => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="150"
                                        height="150" preserveAspectRatio="xMidYMid meet" viewBox="0 0 40 40">
                                        <path fill="currentColor"
                                          d="M33.678 40.018H6.323c-.725 0-1.314-.59-1.314-1.314V16.341c0-.725.59-1.314 1.314-1.314h27.354c.725 0 1.313.59 1.313 1.314v22.363a1.313 1.313 0 0 1-1.312 1.314zM6.323 16.026a.315.315 0 0 0-.314.314v22.363c0 .171.144.314.314.314h27.354c.17 0 .313-.144.313-.314V16.341a.314.314 0 0 0-.313-.314H6.323z" />
                                        <path fill="currentColor"
                                          d="M31.718 16.026a.5.5 0 0 1-.5-.5v-3.327C31.218 6.013 26.186.981 20 .981c-6.185 0-11.216 5.032-11.216 11.218v3.327a.5.5 0 0 1-1 0v-3.327C7.784 5.462 13.264-.019 20-.019c6.737 0 12.218 5.48 12.218 12.218v3.327a.5.5 0 0 1-.5.5z" />
                                        <g fill="currentColor">
                                            <path
                                            d="M20 35.247a.5.5 0 0 1-.5-.5V26.29a.5.5 0 0 1 1 0v8.457a.5.5 0 0 1-.5.5z" />
                                            <path
                                            d="M20.028 29.97a4.028 4.028 0 0 1-4.023-4.025a4.027 4.027 0 0 1 4.023-4.021a4.026 4.026 0 0 1 4.022 4.021a4.028 4.028 0 0 1-4.022 4.025zm0-7.046a3.026 3.026 0 0 0-3.023 3.021a3.027 3.027 0 0 0 3.023 3.025a3.027 3.027 0 0 0 3.022-3.025a3.025 3.025 0 0 0-3.022-3.021z" />
                                        </g>    
                                    </svg>'
                    ]
                ],
                'teaser_count_number' => [
                    'text_html' => [
                        'label' => 'Number count',
                        'value' => '<div class="number" data-target="935"></div>'
                    ]
                ],
                'teaser_count_title' => [
                    'text_html' => [
                        'label' => 'Count Title',
                        'value' => 'Locks Installed'
                    ]
                ]
            ]
        ]
    ];
  }

}