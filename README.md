Cakephp-seo
===========

Cakephp version (tested): 2.5.2
Version: 0.0.2

Plugin for:
- Easily create and manage sitemaps
- Add keywords and description for each url
- Add / Edit Robots.txt

Roadmap
-

- Add Social metadata (Facebook,Twitter,Google+)
- Add Schema.org metadata

Installation
-

Create a new folder named Seo in app/Plugin, then clone this repository:

``` git clone https://github.com/igodip/Cakephp-seo.git ```

Create the schema:

``` cake schema create -p Seo ```

Add this line to the end of app/config/bootstrap.php:

``` CakePlugin::load('Seo', array('bootstrap' => false, 'routes' => true)); ```

And that's all!

Usage
-

Open your browser:
> http://myapp.com/admin/seo/

License
-

MIT
