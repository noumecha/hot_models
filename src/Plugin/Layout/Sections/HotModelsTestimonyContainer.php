<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_hotlock_testimonycontainer",
 *  label = @Translation("testimonycontainer"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-hotlock-testimonycontainer",
 *  library = "hot_models/hot-models-hotlock-testimonycontainer",
 *  regions = {
 *       "title" = {
 *          "label" = @Translation(" Title "),
 *       },
 *       "icon" = {
 *          "label" = @Translation(" icon "),
 *       },
 *       "description" = {
 *          "label" = @Translation(" Description "),
 *       },
 *       "title2" = {
 *          "label" = @Translation(" Title2 "),
 *       },
 *       "phone" = {
 *          "label" = @Translation(" phone "),
 *       },
 *       "icon2" = {
 *          "label" = @Translation(" icon2 "),
 *       }
 *  }
 * )
 *
 */
class HotModelsTestimonyContainer extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot-models-hotlock-testimonycontainer.png");
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
      'css_descp' => 'justify-content-end',
      'region_css_call_to_action' => 'htl-btn htl-btn--sm htl-btn--bg-inv',
      'hmos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text_html' => [
              'label' => "Titre",
              'value' => "High Security Services"
            ]
          ],
          'description' => [
            'text_html' => [
              'label' => "description",
              'value' => '<ul class="list-services">
                                    <li class="element">
                                        Integrated Guarding
                                    </li>
                                    <li class="element">
                                        Fire and Safety Services
                                    </li>
                                    <li class="element">
                                        On-site Guarding
                                    </li>
                                </ul>'
            ]
          ],
          'icon' => [
            'text_html' => [
              'label' => "SVG",
              'value' => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="600" height="200" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                            <path fill="currentColor" d="M2.842 3.865v7.434c0 4.047 3.205 7.327 7.158 7.327c3.953 0 7.158-3.28 7.158-7.327v-7.43L9.957 1.446L2.842 3.865ZM9.955 0L18.5 2.874v8.425C18.5 16.104 14.694 20 10 20s-8.5-3.896-8.5-8.701V2.874L9.955 0Zm4.419 6.485a.66.66 0 0 0-.948.057L9.11 11.511L6.322 8.426a.66.66 0 0 0-.948-.038a.698.698 0 0 0-.037.971l3.29 3.64a.66.66 0 0 0 .995-.01l4.807-5.534a.698.698 0 0 0-.055-.97Z"></path>
                        </svg>'
            ]
          ],
          'title2' => [
            'text_html' => [
              'label' => "Titre",
              'value' => "Fast Response Time Guaranteed"
            ]
          ],
          'phone' => [
            'text_html' => [
              'label' => "Titre",
              'value' => " (800) 123-4567 "
            ]
          ],
          'icon2' => [
            'text_html' => [
              'label' => "Svg",
              'value' => '<svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="600" height="200" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M6 6.9L3.87 4.78l1.41-1.41L7.4 5.5L6 6.9M13 1v3h-2V1h2m7.13 3.78L18 6.9l-1.4-1.4l2.12-2.13l1.41 1.41M4.5 10.5v2h-3v-2h3m15 0h3v2h-3v-2M6 20h12a2 2 0 0 1 2 2H4a2 2 0 0 1 2-2m6-15a6 6 0 0 1 6 6v8H6v-8a6 6 0 0 1 6-6m0 2a4 4 0 0 0-4 4v6h8v-6a4 4 0 0 0-4-4Z"></path>
                        </svg>'
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}