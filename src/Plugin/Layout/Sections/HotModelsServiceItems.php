<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_service_items",
 *  label = @Translation("hot_models_service_items"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-service-items",
 *  library = "hot_models/hot-models-service-items",
 *  regions = {
 *      "description" = {
 *          "label" = @Translation(" svg + titre"),
 *       },
 *      "list_content" = {
 *          "label" = @Translation(" list_content"),
 *       }
 *  }
 * )
 *
 */
class HotModelsServiceItems extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot-models-service-items.png");
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
      'region_css_description' => ' col-md-4 col-sm-6 col-xl-2 ',
      'hmls' => [
          'builder-form' => true,
          'info' => [
              'title' => 'List content',
              'loader' => 'static'
          ],
          'fields' => [
              'list_content' => [
                  'text_html' => [
                      'label' => 'content',
                      'value' => ' <div class=" col-md-4 ">
                                  <div class=" element">
                                    <span class="icon">
                                      <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="70" height="71.46"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 49">
                                          <g fill="none" stroke="currentColor" stroke-width="4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M6 27v16m0-9h7l4-6M7 21l26.474 17.649a1 1 0 0 0 1.069.025L44 33" />
                                            <path
                                                  d="M7.078 13.719a1 1 0 0 1-.11-1.58l7.46-6.63a1 1 0 0 1 1.212-.09l27.065 17.732a1 1 0 0 1-.011 1.68l-9.144 5.82a1 1 0 0 1-1.092-.012l-25.38-16.92Z" />
                                          </g>
                                        </svg>
                                      </i>
                                    </span>
                                    <div class="icon-title pl-4">
                                      <a href="#">Video Surveillance</a>
                                    </div>
                                  </div>
                                </div>
                                <div class=" col-md-4 ">
                                  <div class="element">
                                    <span class="icon">
                                      <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="70" height="70"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                          <path fill="currentColor"
                                                d="M12.66 13.67c-.34.33-.73.62-1.16.83V21l-2 2l-2-2l2-1.71L8 18l1.5-1.29l-2-1.71v-.5a4.42 4.42 0 0 1-2.5-4C5 8 7 6 9.5 6h.11c-.02.07-.07.12-.11.18c-.27.61-.42 1.25-.47 1.9A1.498 1.498 0 0 0 9.5 11h.1c.64 1.25 1.74 2.2 3.06 2.67M16 6c0-.63-.1-1.25-.28-1.82c1.34.38 2.49 1.37 3.01 2.78c.6 1.66.16 3.43-.98 4.63L20 17.68l-1.22 2.57l-2.56-1.2l1.28-2.29l-1.84-.7l.97-1.72l-2.47-.93l-.16-.46a4.48 4.48 0 0 1-3.73-2.91a4.51 4.51 0 0 1 2.69-5.77c.18-.06.37-.1.54-.14A3.946 3.946 0 0 0 10 2C7.79 2 6 3.79 6 6c0 .09 0 .17.03.26c-.33.27-.63.56-.88.89C5.06 6.78 5 6.4 5 6c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.16-.4 2.21-1.06 3.06C16.08 8.88 16 6 16 6m-3.19 2.1c.06.17.15.31.25.44c.56-.66.91-1.5.94-2.43c-.11.02-.2.04-.3.07c-.78.29-1.2 1.15-.89 1.92Z" />
                                        </svg>
                                      </i>
                                    </span>
                                    <div class="icon-title pl-4">
                                      <a href="#">LockSmith Service</a>
                                    </div>
                                  </div>
                                </div>
                                <div class=" col-md-4 ">
                                  <a href="#" class=" element">
                                    <span class="icon ">
                                      <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="70" height="56"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 640 512">
                                          <path fill="currentColor"
                                                d="m431.98 448.01l-47.97.05V416h-128v32.21l-47.98.05c-8.82.01-15.97 7.16-15.98 15.99l-.05 31.73c-.01 8.85 7.17 16.03 16.02 16.02l223.96-.26c8.82-.01 15.97-7.16 15.98-15.98l.04-31.73c.01-8.85-7.17-16.03-16.02-16.02zM585.2 26.74C582.58 11.31 568.99 0 553.06 0H86.93C71 0 57.41 11.31 54.79 26.74C-3.32 369.16.04 348.08.03 352c-.03 17.32 14.29 32 32.6 32h574.74c18.23 0 32.51-14.56 32.59-31.79c.02-4.08 3.35 16.95-54.76-325.47zM259.83 64h120.33l9.77 96H250.06l9.77-96zm-75.17 256H71.09L90.1 208h105.97l-11.41 112zm16.29-160H98.24l16.29-96h96.19l-9.77 96zm32.82 160l11.4-112h149.65l11.4 112H233.77zm195.5-256h96.19l16.29 96H439.04l-9.77-96zm26.06 256l-11.4-112H549.9l19.01 112H455.33z" />
                                        </svg>
                                      </i>
                                    </span>
                                    <div class="icon-title  pl-4">
                                      Control panel
                                    </div>
                                  </a>
                                </div>'
                                            ]
              ]
          ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}