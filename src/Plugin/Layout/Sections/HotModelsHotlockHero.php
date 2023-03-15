<?php

namespace Drupal\hot_models\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;
use Drupal\Core\Form\FormStateInterface;

/**
 * Hot Models Overview Section
 *
 * @Layout(
 *  id = "hot_models_hotlock_hero",
 *  label = @Translation("hot_models_hotlock_hero"),
 *  category = @Translation("hot_models"),
 *  path = "layouts/sections",
 *  template = "hot-models-hotlock-hero",
 *  library = "hot_models/hot-models-hotlock-hero",
 *  regions = {
 *      "sub_title" = {
 *          "label" = @Translation(" Sous title "),
 *       },
 *       "title" = {
 *          "label" = @Translation("title"),
 *       },
 *       "call_to_action" = {
 *          "label" = @Translation(" Call to action"),
 *       },
 *       "image_bg" = {
 *          "label" = @Translation(" Image bg "),
 *       }
 *  }
 * )
 *
 */
class HotModelsHotlockHero extends FormatageModelsSection {
  
  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'hot_models') . "/icones/sections/hot_models_hotlock_hero.png");
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
  
  public function buildConfigurationForm($form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);
    $form['css_descp'] = [
      '#type' => 'textfield',
      '#title' => $this->t('css_descp'),
      '#default_value' => $this->configuration['css_descp']
    ];
    return $form;
  }
  
  /**
   *
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);
    $this->configuration['css_descp'] = $form_state->getValue('css_descp');
  }
  
  /**
   *
   * {@inheritdoc}
   *
   */
  public function defaultConfiguration() {
    return [
      'css' => '',
      'css_descp' => 'justify-content-end width-tablet ml-auto mr-md-3 align-items-center justify-content-center',
      'region_css_call_to_action' => 'htl-btn htl-btn--big htl-btn--fade',
      'region_css_title' => 'wbu-titre-suppra',
      'region_tag_title' => 'h2',
      'hmos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Contenu',
          'loader' => 'static'
        ],
        'fields' => [
          'sub_title' => [
            'text_html' => [
              'label' => "Sous titre",
              'value' => "Preventive solution"
            ]
          ],
          'title' => [
            'text_html' => [
              'label' => "Titre",
              'value' => "Access Control Systems"
            ]
          ],
          'call_to_action' => [
            'url' => [
              'label' => "Url",
              'value' => [
                'link' => '#',
                'text' => 'Discover More',
                'class' => 'htl-btn htl-btn--big htl-btn--fade'
              ]
            ]
          ],
          'image_bg' => [
            'img_bg' => [
              'label' => "image",
              'fids' => []
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }
  
}