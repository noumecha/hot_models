<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 *
 * A custom teaser from sublime : hot_models
 *
 * @Layout(
 *  id = "hot_models_sublime_left_teaser",
 *  label = @Translation("hot_models_sublime_left_teaser"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_sublime_left_teaser",
 *  library = "hot_models/hot_models_sublime_left_teaser",
 *  default_region = "left_teaser_title",
 *  regions = {
 *      "left_teaser_title" = {
 *          "label" = @Translation("left_teaser_title"),
 *      },
 *      "left_teaser_link" = {
 *          "label" = @Translation("left_teaser_link"),
 *      },
 *      "left_teaser_price" = {
 *          "label" = @Translation("left_teaser_price"),
 *      },
 *      "left_teaser_type" = {
 *          "label" = @Translation("left_teaser_type"),
 *      },
 *      "left_teaser_img" = {
 *          "label" = @Translation("left_teaser_img"),
 *      },
 *      "left_teaser_sticker" = {
 *          "label" = @Translation("left_teaser_sticker"),
 *      }
 *  }
 * )
 *
 */
class HotModelsSublimeLeftTeaser extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_sublime_left_teaser.png");
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
      'region_css_left_teaser_link' => 'btn btn-dark font-weight-bold border-bottom',
      'region_css_left_teaser_price' => 'h4 font-weight-bold',
      'region_css_left_teaser_title' => 'h2 text-align-center font-weight-bold',
      'hmslt' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'left_teaser_title' => [
            'text_html' => [
              'label' => 'Titre',
              'value' => 'Smart Phones'
            ]
          ],
          'left_teaser_link' => [
            'url' => [
              'label' => 'Lien',
              'value' => [
                'link' => '#',
                'text' => 'See More',
                'class' => 'link'
              ]
            ]
          ],
          'left_teaser_price' => [
            'text_html' => [
              'label' => 'Price',
              'value' => '20'
            ]
          ],
          'left_teaser_type' => [
            'text_html' => [
              'label' => 'Type',
              'value' => 'Discount'
            ]
          ],
          'left_teaser_img' => [
            'img_bg' => [
              'label' => 'Image'
            ]
          ],
          'left_teaser_sticker' => [
            'text_html' => [
              'label' => 'Sticker',
              'value' => '<img src="https://preview.colorlib.com/theme/sublime/images/xdiscount.png.pagespeed.ic.FxW5u5rCrb.webp" alt="">'
            ]
          ]
        ]
      ]
    ];
  }
  
}