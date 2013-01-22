<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
/**
 * INSTALL
 * 1. Install required modules (user with RBAC, menu and page):
 *      yiic migrate up --module=user,menu,page,news
 * 2. Other modules if needed
 *      yiic migrate up --module=MODULE1,MODULE2,...
 * All additional modules:
 *      yiic migrate up --module=gallery,blog,comment,social,admin
 */

/**
 * REMOVE
 * 1. Remove all additional modules:
 *      yiic migrate to m000000_000000 --module=news,gallery,blog,comment,social,admin
 * 2. Remove required modules
 *      yiic migrate to m000000_000000 --module=page,menu
 *      yiic migrate to m000000_000000 --module=user
 */
return array(
    'basePath'   => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'       => 'Yii Fad CMS console',
    'components' => array(
        'db' => require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'db.php')
    ),
    'commandMap' => array(
        'migrate' => array(
            'class'          => 'ext.migrate-command.EMigrateCommand',
            'migrationTable' => '{{migration}}',
            'modulePaths'    => array(
                'user'    => 'application.modules.user.migrations',
                'menu'    => 'application.modules.menu.migrations',
                'page'    => 'application.modules.page.migrations',
                'news'    => 'application.modules.news.migrations',
                'gallery' => 'application.modules.gallery.migrations',
                'blog'    => 'application.modules.blog.migrations',
                'comment' => 'application.modules.comment.migrations',
                'social'  => 'application.modules.social.migrations',
                'admin'   => 'application.modules.admin.migrations',
            ),
        ),
        'database' => array(
            'class' => 'ext.database-command.EDatabaseCommand',
        ),
    )
);