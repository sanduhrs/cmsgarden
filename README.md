# CMS-Garden Next Generation

## Install dependencies

    composer install

## Filesystem permissions

    chmod 777 tmp translations

## Import initial configuration

    drush si minimal
    drush config-set "system.site" uuid "65eafff0-3d3e-4881-8e97-ff651670f2bd"
    drush cim
