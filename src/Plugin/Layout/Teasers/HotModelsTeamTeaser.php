<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * Teaser Team hotlock
 * @Layout(
 *  id = "hot_models_team_teaser",
 *  label = @Translation("hot_models_team_teaser"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_team_teaser",
 *  library = "hot_models/hot_models_team_teaser",
 *  default_region = "team_image",
 *  regions = {
 *    "team_image" = {
 *      "label" = @Translation("team_image"),   
 *    },
 *    "team_name" = {
 *      "label" = @Translation("team_name"),   
 *    },
 *    "team_service" = {
 *      "label" = @Translation("team_service"),   
 *    },
 *    "team_icon" = {
 *      "label" = @Translation("team_icon"),   
 *    }
 *  }
 * )
 */

class HotModelsTeamTeaser extends FormatageModelsTeasers
{

    /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_team_teaser.png");
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
      'hmtt' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'team_image' => [
            'text_html' => [
              'label' => 'Teamate Image',
              'value' => '<a href="#">
                            <img src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/01/team-4.jpg"
                               alt="">
                          </a>'
            ]
          ],
          'team_name' => [
            'text_html' => [
              'label' => 'Teamate Name',
              'value' => '<p>Will jones</p>'
            ]
          ],
          'team_service' => [
            'text_html' => [
              'label' => 'Teamate Service',
              'value' => '<p>Locksmith</p>'
            ]
          ],
          'team_icon' => [
            'text_html' => [
              'label' => 'Teamate Socials',
              'value' => '<div class=" icon">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30"
                                         height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50">
                            <path fill="currentColor"
                                              d="M39.2 16.8c-1.1.5-2.2.8-3.5 1c1.2-.8 2.2-1.9 2.7-3.3c-1.2.7-2.5 1.2-3.8 1.5c-1.1-1.2-2.7-1.9-4.4-1.9c-3.3 0-6.1 2.7-6.1 6.1c0 .5.1.9.2 1.4c-5-.2-9.5-2.7-12.5-6.3c-.5.7-.8 1.7-.8 2.8c0 2.1 1.1 4 2.7 5c-1 0-1.9-.3-2.7-.8v.1c0 2.9 2.1 5.4 4.9 5.9c-.5.1-1 .2-1.6.2c-.4 0-.8 0-1.1-.1c.8 2.4 3 4.2 5.7 4.2c-2.1 1.6-4.7 2.6-7.5 2.6c-.5 0-1 0-1.4-.1c2.4 1.9 5.6 2.9 9 2.9c11.1 0 17.2-9.2 17.2-17.2V20c1.2-.9 2.2-1.9 3-3.2z" />
                        </svg>
                    </a>
                </div>
                <div class=" icon">
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30"
                                         height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50">
                            <path fill="currentColor"
                                              d="M26 20v-3c0-1.3.3-2 2.4-2H31v-5h-4c-5 0-7 3.3-7 7v3h-4v5h4v15h6V25h4.4l.6-5h-5z" />
                        </svg>
                    </a>
                </div>
                <div class=" icon">
                    <a href="#" class="social-link">
                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="30"
                                         height="30" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                              d="M5.077 9.457c0-.778.136-1.513.404-2.199a5.63 5.63 0 0 1 1.121-1.802a7.614 7.614 0 0 1 1.644-1.329a7.513 7.513 0 0 1 2.002-.844a8.57 8.57 0 0 1 2.185-.281c1.139 0 2.199.241 3.182.721a6.021 6.021 0 0 1 2.391 2.094c.614.915.919 1.95.919 3.104c0 .692-.068 1.369-.207 2.031a8.28 8.28 0 0 1-.646 1.913a6.605 6.605 0 0 1-1.082 1.617a4.723 4.723 0 0 1-1.568 1.114a4.962 4.962 0 0 1-2.045.417c-.489 0-.977-.115-1.459-.346c-.482-.23-.828-.546-1.036-.951c-.073.281-.173.687-.306 1.218c-.128.53-.214.872-.252 1.027c-.04.154-.114.411-.222.767a5.183 5.183 0 0 1-.281.769l-.344.674a7.98 7.98 0 0 1-.498.838c-.181.262-.405.575-.672.935l-.149.053l-.099-.108c-.107-1.133-.162-1.811-.162-2.035c0-.663.079-1.407.235-2.233c.153-.825.395-1.862.72-3.109c.325-1.246.511-1.979.561-2.196c-.229-.467-.345-1.077-.345-1.827c0-.599.187-1.16.562-1.688c.376-.526.851-.789 1.427-.789c.441 0 .783.146 1.028.439c.246.292.366.66.366 1.109c0 .476-.158 1.165-.476 2.066c-.318.902-.476 1.575-.476 2.022c0 .453.162.832.486 1.129a1.68 1.68 0 0 0 1.179.449c.396 0 .763-.09 1.104-.271a2.46 2.46 0 0 0 .849-.733a6.123 6.123 0 0 0 1.017-2.225c.096-.422.17-.823.216-1.2c.049-.379.07-.737.07-1.077c0-1.247-.396-2.219-1.183-2.915c-.791-.696-1.821-1.042-3.088-1.042c-1.441 0-2.646.466-3.611 1.401c-.966.932-1.452 2.117-1.452 3.554c0 .317.048.623.139.919c.089.295.186.53.291.704c.104.171.202.338.291.492c.09.154.137.264.137.33c0 .202-.053.465-.16.79c-.111.325-.242.487-.4.487c-.015 0-.077-.011-.185-.034a2.21 2.21 0 0 1-.979-.605a3.17 3.17 0 0 1-.659-1.022a6.986 6.986 0 0 1-.352-1.169a4.884 4.884 0 0 1-.132-1.153z" />
                        </svg>
                    </a>
                </div>'
            ]
          ]
        ]
      ]
    ];
  }

}