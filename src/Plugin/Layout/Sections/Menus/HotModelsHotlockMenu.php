<?php

namespace Drupal\hot_models\Plugin\Layout\Sections\Menus;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\Core\Form\FormStateInterface;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 *
 * hot models hotlock menu
 *
 * @Layout(
 *  id = "hot_models_hotlock_menu",
 *  label = @Translation("hot_models_hotlock_menu"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections/menus",
 *  template = "hot_models_hotlock_menu",
 *  library = "hot_models/hot_models_hotlock_menu",
 *  default_region = "menu_logo",
 *  regions = {
 *      "menu_logo" = {
 *          "label" = @Translation("menu_logo"),
 *      },
 *      "menu_list" = {
 *          "label" = @Translation("menu_list"),
 *      },
 *      "menu_button" = {
 *          "label" = @Translation("menu_button"),
 *      }
 *  }
 * )
 *
 */
class HotModelsHotlockMenu extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_menu.png");
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
    if (is_array($build['menu_list'])) {
      $build['menu_list'] = $this->getMenus($build['menu_list'], $build);
    }
    return $build;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  private function getMenus(array $hot_nav, array $build) {
    foreach ($hot_nav as $k => $m) {
      if (isset($m['#base_plugin_id']) && $m['#base_plugin_id'] === 'system_menu_block') {
        $hot_nav[$k]['#attributes'] = [
          'class' => [
            'navbar-nav',
            'ml-auto',
            'first-nav',
            $build['#settings']['bloc_style']
          ]
        ];
        // set a new theme hoock () : refers to .theme.inc file
        $hot_nav[$k]['content']['#theme'] = 'layoutmenu_hot_models_hotlock_menu';
        //
        $this->formatListMenus($hot_nav[$k]['content']['#items']);
      }
    }
    return $hot_nav;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  private function formatListMenus(array &$items) {
    foreach ($items as $k => $item) {
      if (!empty($item['attributes'])) {
        $attribute = $item['attributes'];
        $attribute->addClass('nav-item');
        if (!empty($item['below'])) {
          $this->formatListMenus($item['below']);
          $items[$k]['below'] = $item['below'];
        }
      }
    }
  }
  
  /**
   * 
   * add a buildConfigurationForm for bloc_style for 
   * add some class to the menu 
   * 
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['bloc_style'] = [
      '#type' => 'textfield',
      '#title' => $this->t(' Bloc style '),
      '#default_value' => $this->configuration['bloc_style']
    ];
    return $form;
  }
  /**
   * 
   * add a submitConfigurationForm for bloc_style for 
   * add some class to the menu 
   * 
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['bloc_style'] = $form_state->getValue('bloc_style');
  }
  
  /**
   *
   * {@inheritdoc}
   *
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'css' => '',
      'bloc_style' => '',
      'hmhm' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'menu_logo' => [
            'text_html' => [
              'label' => 'Logo Image',
              'value' => '<img src="https://hotlock.axiomthemes.com/wp-content/uploads/2017/10/retina-logo-2.png" height="43px" alt=""
                                    srcset="">'
            ]
          ],
          'menu_list' => [
            'text_html' => [
              'label' => 'Menu list item',
              'value' => '<li class="nav-item active nav-link">
                                    <a href="#" class=" colored" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                      id="navbarDropdown">Home <span class="sr-only">(current)</span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">
                                        link
                                      </a>
                                      <a class="dropdown-item" href="#">link</a>
                                      <a class="dropdown-item" href="#">link</a>
                                    </div>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">Services</a>
                                  </li>
                                  <li class="nav-item dropdown">
                                    <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                      <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="20"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                        <circle cx="16" cy="8" r="2" fill="currentColor" />
                                        <circle cx="16" cy="16" r="2" fill="currentColor" />
                                        <circle cx="16" cy="24" r="2" fill="currentColor" />
                                      </svg>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="#">
                                        Blog
                                      </a>
                                      <a class="dropdown-item" href="#">Store</a>
                                      <a class="dropdown-item" href="#">Contacts</a>
                                    </div>
                                  </li>
                                  <li class="nav-item ">
                                    <a href="#" class="colored nav-link">
                                      <span class="icon">
                                        <i>
                                          <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="25"
                                              preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                                            <path fill="currentColor" d="M24 13h-2a3.003 3.003 0 0 0-3-3V8a5.006 5.006 0 0 1 5 5Z" />
                                            <path fill="currentColor"
                                                  d="M28 13h-2a7.008 7.008 0 0 0-7-7V4a9.01 9.01 0 0 1 9 9zm-2 16h-.17C6.18 27.87 3.39 11.29 3 6.23a3 3 0 0 1 2.761-3.221Q5.88 3 6 3h5.27a2 2 0 0 1 1.86 1.26L14.65 8a2 2 0 0 1-.44 2.16l-2.13 2.15a9.36 9.36 0 0 0 7.58 7.6l2.17-2.15a2 2 0 0 1 2.17-.41l3.77 1.51A2 2 0 0 1 29 20.72V26a3 3 0 0 1-3 3zM6 5a1 1 0 0 0-1.003.997q0 .042.003.083C5.46 12 8.41 26 25.94 27a1 1 0 0 0 1.058-.938L27 26v-5.28l-3.77-1.51l-2.87 2.85l-.48-.06c-8.7-1.09-9.88-9.79-9.88-9.88l-.06-.48l2.84-2.87L11.28 5z" />
                                          </svg>
                                        </i>
                                      </span>
                                      0 (800) 123-456
                                    </a>
                                  </li>
                                  <li class="nav-item">

                                    <span class="cart d-flex nav-link">
                                      <i>
                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="20" height="35"
                                            preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                                          <path fill="currentColor"
                                                d="M7 22q-.825 0-1.412-.587Q5 20.825 5 20q0-.825.588-1.413Q6.175 18 7 18t1.412.587Q9 19.175 9 20q0 .825-.588 1.413Q7.825 22 7 22Zm10 0q-.825 0-1.412-.587Q15 20.825 15 20q0-.825.588-1.413Q16.175 18 17 18t1.413.587Q19 19.175 19 20q0 .825-.587 1.413Q17.825 22 17 22ZM6.15 6l2.4 5h7l2.75-5ZM3.625 17L6.6 11.6L3 4H1V2h3.25l.95 2h16.5l-4.975 9H8.1L7 15h12v2Zm4.925-6h7Z" />
                                        </svg>
                                      </i>
                                      <div class="count">
                                        3
                                      </div>
                                    </span>
                                  </li>'
            ]
          ],
          'menu_button' => [
            'url' => [
              'label' => 'Button',
              'value' => [
                'link' => '#',
                'text' => 'APPOINTEMENT',
                'class' => 'htl-btn htl-btn--big htl-btn--fade'
              ]
            ]
          ]
        ]
      ]
    ];
  }
  
}