<?php

namespace Drupal\hot_models\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;
use Drupal\Core\Url;
use Drupal\Core\Render\Markup;

/**
 *
 * Teaser Team hotlock.
 *
 * @Layout(
 *  id = "hot_models_user_compact_stripe",
 *  label = @Translation("User model flat"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/teasers",
 *  template = "hot_models_user_compact_stripe",
 *  library = "hot_models/hot_models_user_compact_stripe",
 *  default_region = "team_image",
 *  regions = {
 *    "user_name" = {
 *      "label" = @Translation("user_name"),
 *    },
 *    "user_roles" = {
 *      "label" = @Translation("user_roles"),
 *    },
 *    "user_mores" = {
 *      "label" = @Translation("user_mores"),
 *    }
 *  }
 * )
 */
class HotModelsUserCompactStripe extends FormatageModelsTeasers {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/teasers/hot_models_user_compact_stripe.png");
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
    /**
     * On ajoute le lien voir le profil et celui pour se deconnecter.(on
     * pourrait mettre en place une config pour masquer cela si necessaire).
     */
    $build['user_mores'][] = [
      '#theme' => 'links',
      '#links' => [
        [
          'title' => Markup::create('<i class="fas fa-angle-right"></i> ' . t('Dashboard')),
          'url' => Url::fromRoute('user.page'),
          // Attributes pour la balise a. (On ne peut pas ajouter de balise à li
          // via cette logique, sauf un pacth au niveau de
          // template_preprocess_links ).
          'attributes' => [
            'class' => [
              'py-2'
            ]
          ]
        ],
        [
          'title' => Markup::create('<i class="fas fa-angle-right"></i> ' . t('Logout')),
          'url' => Url::fromRoute('user.logout'),
          'attributes' => [
            'class' => [
              ''
            ]
          ]
        ]
      ],
      '#attributes' => [
        'class' => [
          'nav',
          'flex-column',
          'pt-2',
          'user_mores--links'
        ]
      ]
    ];
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
      'region_css_user_name' => 'text-uppercase'
    ] + parent::defaultConfiguration();
  }
  
}