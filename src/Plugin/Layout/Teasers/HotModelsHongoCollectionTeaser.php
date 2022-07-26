<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A custom teaser for hongo collection : hot_models module 
 * 
 * @Layout(
 *  id = "hot_models_hongo_collection_teaser",
 *  label = @Translation("hot_models_hongo_collection_teaser"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_hongo_collection_teaser",
 *  library = "hot_models/hot_models_hongo_collection_teaser",
 *  default_region = "collection_title",
 *  regions = {
 *      "collection_title" = {
 *          "label" = @Translation("collection_title"),     
 *      },
 *      "collection_link" = {
 *          "label" = @Translation("collection_link"),     
 *      },
 *      "collection_image" = {
 *          "label" = @Translation("collection_image"),
 *      }
 *  }
 * )
 * 
 */

class HotModelsHongoCollectionTeaser extends FormatageModelsTeasers 
{

    /**
    *
    * {@inheritdoc}
    * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
    */
    public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
        // TODO Auto-generated method stub
        parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
        $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot-models-hongo-collection-teaser.png");
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
            'hmhc' => [
                'builder-form' => true,
                'info' => [
                    'title' => 'Contenu',
                    'loader' => 'static'
                ],
                'fields' => [
                    "collection_title" => [
                        'text_html' => [
                            'label' => 'Titre',
                            'value' => 'Acceesories <br> Collection'
                        ]
                    ],
                    "collection_link" => [
                        'url' => [
                            'label' => 'Lien',
                            'value' => [
                                'link' => '#',
                                'text' => 'shop now',
                                'class' => 'link'
                            ]
                        ]
                    ],
                    "collection_image" => [
                        'text_html' => [
                            'label' => 'Image',
                            'value' => '<img src="https://hongo.b-cdn.net/wp-content/uploads/2019/04/graphic-banner-1.jpg" alt="" class="_img">'
                        ]
                    ]
                ]
            ]
        ];
    }

}