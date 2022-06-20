<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * Hot Models Security Info hotlock 
 * @Layout(
 *  id = "hot_models_hotlock_security_info",
 *  label = @Translation("hot_models_hotlock_security_info"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_hotlock_security_info",
 *  library = "hot_models/hot_models_hotlock_security_info",
 *  default_region = "security_bg",
 *  regions = {
 *      "security_bg" = {
 *          "label" = @Translation("security_bg"),     
 *      },
 *      "security_icon" = {
 *          "label" = @Translation("security_icon"),     
 *      },
 *      "security_title" = {
 *          "label" = @Translation("security_title"),     
 *      },
 *      "security_text" = {
 *          "label" = @Translation("security_text"),     
 *      },
 *      "security_btn" = {
 *          "label" = @Translation("security_btn"),     
 *      }
 *  }
 * )
 * 
 */
class HotModelsHotlockSecurityInfo extends FormatageModelsSection
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_security_info.png");
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
    return parent::defaultConfiguration() + [
        'css' => '',
        'hmhsi' => [
            'builder-form'  => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'security_bg' => [
                    'img_bg' => [
                        'label' => 'Image bg',
                        'fids' => []
                    ]
                ],
                'security_icon' => [
                    'text_html' => [
                        'label' => 'Icone',
                        'value' => '<i>
                                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="300" height="100" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 3.19L5 6.3V12h7v8.93c3.72-1.15 6.47-4.82 7-8.94h-7v-8.8z" opacity=".3"/><path fill="currentColor" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5l-9-4zm0 19.93V12H5V6.3l7-3.11v8.8h7c-.53 4.12-3.28 7.79-7 8.94z"/></svg>
                                </i>'
                    ]
                ],
                'security_title' => [
                    'text_html' => [
                        'label' => 'Titre',
                        'value' => 'Making Your Life Safer'
                    ]
                ],
                'security_text' => [
                    'text_html' => [
                        'label' => 'Texte',
                        'value' => '<p>
                                        We provide customized security solutions to help
                                        protect your people and property.
                                    </p>',
                    ]
                ],
                'security_btn' => [
                    'url' => [
                        'label' => "Url",
                        'value' => [
                            'link' => '#',
                            'text' => 'Learn more',
                            'class' => 'htl-btn htl-btn--bg'
                        ]
                    ]
                ]
            ]
        ]
    ];
  }

}