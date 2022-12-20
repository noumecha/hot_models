<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * 
 * hot models hot lock footer
 * @Layout(
 *  id = "hot_models_hotlock_footer",
 *  label = @Translation("hot_models_hotlock_footer"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot_models_hotlock_footer",
 *  library = "hot_models/hot_models_hotlock_footer",
 *  default_region = "footer_logo",
 *  regions = {
 *      "footer_logo" = {
 *          "label" = @Translation("footer_logo"),     
 *      },
 *      "footer_list_one" = {
 *          "label" = @Translation("footer_list_one"),     
 *      },
 *      "footer_title_one" = {
 *          "label" = @Translation("footer_title_one"),
 *      },
 *      "footer_list_two" = {
 *          "label" = @Translation("footer_list_two"),
 *      },
 *      "footer_title_two" = {
 *          "label" = @Translation("footer_title_two"),     
 *      },
 *      "footer_list_three" = {
 *          "label" = @Translation("footer_list_three"),     
 *      },
 *      "footer_title_three" = {
 *          "label" = @Translation("footer_title_three"),     
 *      },
 *      "footer_subtitle" = {
 *          "label" = @Translation("footer_subtitle"),     
 *      },
 *      "footer_search" = {
 *          "label" = @Translation("footer_search"),     
 *      },
 *      "footer_copyright_links" = {
 *          "label" = @Translation("footer_copyright_links"),     
 *      },
 *      "footer_copyright" = {
 *          "label" = @Translation("footer_copyright"),     
 *      }
 *  }
 * )
 * 
 */
class HotModelsHotlockFooter extends FormatageModelsSection
{

   /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_footer.png");
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
        'hmhf' => [
            'builder-form' => true,
            'info' => [
                'title' => 'Contenu',
                'loader' => 'static'
            ],
            'fields' => [
                'footer_logo' => [
                    'text_html' => [
                        'label' => 'Logo',
                        'value' => '<img src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/10/retina-logo-footer-1.png"
                                    alt=""
                                    width="" height="35">'
                    ]
                ],
                'footer_list_one' => [
                    'text_html' => [
                        'label' => 'Liste un',
                        'value' => '<div class="element">
                                        <span class="icon">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M946.5 505L534.6 93.4a31.93 31.93 0 0 0-45.2 0L77.5 505c-12 12-18.8 28.3-18.8 45.3c0 35.3 28.7 64 64 64h43.4V908c0 17.7 14.3 32 32 32H448V716h112v224h265.9c17.7 0 32-14.3 32-32V614.3h43.4c17 0 33.3-6.7 45.3-18.8c24.9-25 24.9-65.5-.1-90.5z" />
                                                </svg>
                                            </i>
                                        </span>
                                        <div class="location">
                                            <p>123, New Lenox Chicago, IL 60606</p>
                                        </div>
                                    </div>
                                    <div class=" element">
                                        <span class="icon">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                                                    <path fill="currentColor"
                                                        d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5l39.3-50.5l42.8 33.3h643.1l42.8-33.3l39.3 50.5l-27.7 21.5zM833.6 232L512 482L190.4 232l-42.8-33.3l-39.3 50.5l27.6 21.5l341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5l-39.3-50.5l-42.7 33.2z" />
                                                </svg>
                                            </i>
                                        </span>
                                        <div class="location">
                                            <div class="link">
                                                <a href="#">info@example.com</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" element">
                                        <span class="icon">
                                            <i>
                                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img"
                                                    preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                                                    <g fill="currentColor">
                                                        <path
                                                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                                        <path d="M8 14a1 1 0 1 0 0-2a1 1 0 0 0 0 2z" />
                                                    </g>
                                                </svg>
                                            </i>
                                        </span>
                                        <div class="location">
                                            <div class="link">
                                                <a href="#">+3800-123-4567</a>
                                            </div>
                                        </div>
                                    </div>'
                    ]
                ],
                'footer_title_one' => [
                    'text_html' => [
                        'label' => 'Titre un',
                        'value' => '<p>Links</p>'
                    ]
                ],
                'footer_list_two' => [
                    'text_html' => [
                        'label' => 'Liste deux',
                        'value' => '<div class="link">
                                        <a href="" class=" ">About Us</a>
                                    </div>
                                    <div class="link">
                                        <a href="" class=" ">Services</a>
                                    </div>
                                    <div class="link">
                                        <a href="" class=" ">Privacy</a>
                                    </div>
                                    <div class="link">
                                        <a href="" class=" ">Terms of Use</a>
                                    </div>'
                    ]
                ],
                'footer_title_two' => [
                    'text_html' => [
                        'label' => 'Titre deux',
                        'value' => '<p>Navigation</p>'
                    ]
                ],
                'footer_list_three' => [
                    'text_html' => [
                        'label' => 'Liste trois',
                        'value' => '<div class="link">
                                        <a href="" class=" "></a>
                                    </div>
                                    <div class="link">
                                        <a href="" class=" ">Services</a>
                                    </div>
                                    <div class="link">
                                        <a href="" class=" ">Privacy</a>
                                    </div>'
                    ]
                ],
                'footer_title_three' => [
                    'text_html' => [
                        'label' => 'Titre trois',
                        'value' => '<p>Suscribe</p>'
                    ]
                ],
                'footer_subtitle' => [
                    'text_html' => [
                        'label' => 'Sous titre',
                        'value' => '<p>Enter your email subscribe to our news and updates by email.</p>'
                    ]
                ],
                'footer_search' => [
                    'text_html' => [
                        'label' => 'Barre de recherche',
                        'value' => '<input type="email" class="mail form-control" placeholder="Votre Email" name="" id="">
                                    <button type="submit" class="send">subscribe</button>'
                    ]
                ],
                'footer_copyright_links' => [
                    'text_html' => [
                        'label' => 'Copyright links',
                        'value' => '<a href="#" class="f-link">WB-universeThemes</a>'
                    ]
                ],
                'footer_copyright' => [
                    'text_html' => [
                        'label' => 'Copyright',
                        'value' => '© 2022. All rights reserved.'
                    ]
                ]
            ]
        ]
    ];
  }

}