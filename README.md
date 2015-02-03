GAE-WP
=========
This is a template for installing and running [WordPress](http://wordpress.org/) on [Google App Engine](https://cloud.google.com/appengine).

It is a much simplified version of [heroku-wp](https://github.com/xyu/heroku-wp), using [Composer](https://getcomposer.org) to manage Wordpress base install and plugin dependencies, and with the necessary plugins and configuration files for GAE, as documented [here](https://github.com/GoogleCloudPlatform/appengine-php-wordpress-starter-project).

Note that unlike Heroku, GAE deploys have no post-receive installation script. Therefore, you must build first locally, before deployment.

WordPress and most included plugins are installed by Composer on build. To add new plugins or upgrade versions of plugins simply update the `composer.json` file and then generate the `composer.lock` file with the following command locally:

```bash
$ composer update --ignore-platform-reqs
```

To customize the site simply place files into `/public` which on build will be copied on top of the standard WordPress install and plugins specified by Composer.

Usage - TODO in detail
------------

```bash
git clone git@github.com:ericgj/gae-wp.git my-project

cd my-project

git checkout -b production

# edit public/wp-config.php

composer install

appcfg.py update .
```


