<?php

namespace Drupal\cms_garden_migrate\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

/**
 * Migrate Source plugin.
 *
 * @MigrateSource(
 *   id = "cms_garden_migrate_cms"
 * )
 */
class Cms extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('taxonomy_term_data', 't')
      ->fields('t', [
        'tid', 'vid', 'name', 'description', 'format', 'weight', 'language',
        'i18n_tsid', 'uuid',
      ])
      ->condition("vid", 2, '=');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'tid' => $this->t('TID'),
      'vid' => $this->t('VID'),
      'name' => $this->t('Name'),
      'description' => $this->t('Description'),
      'format' => $this->t('Format'),
      'weight' => $this->t('Weight'),
      'language' => $this->t('Language'),
      'i18n_tsid' => $this->t('i18n TSID'),
      'uuid' => $this->t('UUID'),
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'tid' => [
        'type' => 'integer',
        'alias' => 't',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function prepareRow(Row $row) {
    return parent::prepareRow($row);
  }

}
