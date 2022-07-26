<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * 
 * A custom teaser from sublime : hot_models 
 * @Layout(
 *  id = "hot_models_sublime_right_teaser",
 *  label = @Translation("hot_models_sublime_right_teaser"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_sublime_right_teaser",
 *  library = "hot_models/hot_models_sublime_right_teaser",
 *  default_region = "",
 *  regions = {
 *      "right_teaser_title" = {
 *          "label" = @Translation("right_teaser_title"),   
 *      },
 *      "right_teaser_link" = {
 *          "label" = @Translation("right_teaser_link"),     
 *      },
 *      "right_teaser_description" = {
 *          "label" = @Translation("right_teaser_description"),     
 *      },
 *      "right_teaser_img" = {
 *          "label" = @Translation("right_teaser_img"),     
 *      }
 *  }
 * )
 * 
 */

class HotModelsSublimeRightTeaser extends FormatageModelsTeasers
{

    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_sublime_right_teaser.png");
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
            'hmsrt' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    'right_teaser_title' => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Professional Camera'
                        ]
                    ],
                    'right_teaser_link' => [
                        'url' => [
                            'label' => '',
                            'value' => [
                                'link' => '#',
                                'text' => 'See More',
                                'class' => 'link'
                            ]
                        ]
                    ],
                    'right_teaser_description' => [
                        'text_html' => [
                            'label' => 'Descritpton',
                            'value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viver ra velit venenatis fermentum luctus.'
                        ]
                    ],
                    'right_teaser_img' => [
                        'img_bg' => [
                            'label' => 'Image'
                        ]
                    ]
                ]
            ]
        ];
    }

}