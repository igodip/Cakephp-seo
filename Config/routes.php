<?php
/**
 * Routes.php
 */
/**
 * 
 */
//Router::parseExtensions('xml');
Router::connect('/sitemap.xml',array('plugin' =>'Seo','controller' => 'SeoUrls','action' => 'sitemap'));

