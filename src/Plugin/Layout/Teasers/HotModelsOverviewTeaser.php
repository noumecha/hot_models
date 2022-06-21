<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Teaser for overview section
 * 
 * @Layout(
 *  id = "hot_models_overview_teaser",
 *  label = @Translation("hot_models_overview_teaser"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hhot_models_overview_teaser",
 *  library = "hot_models/hot_models_overview_teaser",
 *  regions = {
 *      "o_teaser_icon" = {
 *          "label" = @Translation("o_teaser_icon"),     
 *      },
 *      "o_teaser_title" = {
 *          "label" = @Translation("o_teaser_title"),     
 *      },
 *      "o_teaser_title_back" = {
 *          "label" = @Translation("o_teaser_title_back"),     
 *      },
 *      "o_teaser_description" = {
 *          "label" = @Translation("o_teaser_description"),     
 *      }
 *  }
 * )
 */

class HotModelsOverviewTeaser extends FormatageModelsTeasers 
{
    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot-models-hotlock-overview-teaser.png");
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
    return defaultConfiguration() + [
        'css' => '',
        'hovt' => [
            'builder-form'  => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'o_teaser_icon' => [
                  'text_html' => [
                      'label' => 'Icone',
                      'value' => '<i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="80"
                                                 height="81.67" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 49">
                                <g fill="none" stroke="currentColor" stroke-width="4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 27v16m0-9h7l4-6M7 21l26.474 17.649a1 1 0 0 0 1.069.025L44 33" />
                                    <path
                                        d="M7.078 13.719a1 1 0 0 1-.11-1.58l7.46-6.63a1 1 0 0 1 1.212-.09l27.065 17.732a1 1 0 0 1-.011 1.68l-9.144 5.82a1 1 0 0 1-1.092-.012l-25.38-16.92Z" />
                                </g>
                            </svg>
                        </i>'
                    ]
                ],
                'o_teaser_title' => [
                    'text_html' => [
                        'label' => 'Title Front',
                        'value' => '<p>video surveillance</p>'
                    ]
                ],
                'o_teaser_title_back' => [
                    'text_html' => [
                        'label' => 'Title Back',
                        'value' => '<p>video surveillance</p>'
                    ]
                ],
                'o_teaser_description' => [
                    'text_html' => [
                        'label' => 'description',
                        'value' => '<p>
                            To stay on the safe side, besides door locks, people often install video
                            surveillance in their homes
                        </p>'
                    ]
                ]
            ]
        ]
    ];
  }

}