# CMS-Garden Next Generation

## Install dependencies

    composer install

## Import initial configuration

    drush si minimal --db-url=mysql://drupal:drupal@localhost/drupal_8_cmsgarden -y
    drush config-set "system.site" uuid "65eafff0-3d3e-4881-8e97-ff651670f2bd"
    drush cim
