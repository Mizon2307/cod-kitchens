# WordPress Starter

## Requirements

- PHP >= 7.1
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos)
- Valet - [Install](https://laravel.com/docs/8.x/valet)

## Installation

1. Rename `.env.example` to `.env` and add plugin keys.

2. Run `composer install`.

3. Set up local machine with `cd htdocs` and `valet link project-name`.

4. Go to the site in the browser and follow the steps.

5. Move the generated `wp-config.php` to `/htdocs` and add:

```php
define( 'WP_HOME', 'http://' . $_SERVER['SERVER_NAME'] );
define( 'WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress' );

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', WP_HOME . '/wp-content' );

if ( !defined('ABSPATH') ) {
	define( 'ABSPATH', dirname(__FILE__) . '/wordpress' );
}

require_once( ABSPATH . 'wp-settings.php' );
```

6. Go to `/htdocs/wp-content/themes` and update references to `project-name`.

7. Run `npm install` in theme folder.

## Development

`npm run serve`

## Production

`npm run build`
