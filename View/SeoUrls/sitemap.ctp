<?php 

$head = '<?xml version="1.0" encoding="utf-8"?><urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>';

$xml = Xml::build($head) ;

foreach($urls as $url){
	
	$seo_url = $xml->addChild('url');
	
	$seo_url->addChild('location',Router::fullBaseUrl().$url['SeoUrl']['url']);
	//$seo_url->addChild('lastmod',$url['SeoUrl']['lastmod']);
	//$seo_url->addChild('changefreq',$url['SeoUrl']['changefreq']);
	//$seo_url->addChild('priority',$url['SeoUrl']['priority']/100);
	
}

echo $xml->asXML();


