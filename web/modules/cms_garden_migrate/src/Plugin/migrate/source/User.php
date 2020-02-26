<?php

namespace Drupal\cms_garden_migrate\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

/**
 * Migrate Source plugin.
 *
 * @MigrateSource(
 *   id = "cms_garden_migrate_user"
 * )
 */
class User extends SqlBase {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = $this->select('users', 'u')
      ->fields('u', [
        'uid', 'name', 'pass', 'mail', 'theme', 'signature',
        'signature_format', 'created', 'access', 'login', 'status', 'timezone',
        'language', 'picture', 'init', 'data', 'uuid',
      ])
      // Exclude anonymous and admin user.
      ->condition('uid', 1, '>');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'uid' => $this->t('ID'),
      'name' => $this->t('Name'),
      'pass' => $this->t('Password'),
      'mail' => $this->t('E-Mail'),
      'theme' => $this->t('Theme'),
      'signature' => $this->t('Signature'),
      'signature_format' => $this->t('Signature format'),
      'created' => $this->t('Created'),
      'access' => $this->t('Access'),
      'login' => $this->t('Login'),
      'status' => $this->t('Status'),
      'timezone' => $this->t('Timezone'),
      'language' => $this->t('Language'),
      'picture' => $this->t('Picture'),
      'init' => $this->t('Init'),
      'data' => $this->t('Data'),
      'uuid' => $this->t('UUID'),
    ];
    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [
      'uid' => [
        'type' => 'integer',
        'alias' => 'u',
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
