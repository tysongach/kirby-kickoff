## Changes

- [Panel](https://github.com/bastianallgeier/kirbycms-panel) pre-installed
- [XML Sitemap](http://getkirby.com/blog/xmlsitemap) pre-installed
	- _Note: I’ve adjusted the default sitemap installation to better handle invisible/draft pages_
- [Tagcloud plugin](https://github.com/bastianallgeier/kirbycms-extensions/tree/master/plugins/tagcloud) pre-installed
- [Panel Tags Field](http://getkirby.com/blog/panel-tags-field) pre-installed
- [humans.txt](http://humanstxt.org)
- robots.txt
	- _Note: Be sure to change sitemap URL_
- Site config
	- Changed Kirbytext video size to 960x540
	- Turned on [Markdown Extra](http://michelf.ca/projects/php-markdown/extra)
	- Turned on [Smartypants](http://michelf.ca/projects/php-smartypants/typographer)
	- Turned off built-in tinyurl
	- Changed timezone to `America/New_York`
	- Changed content extension from `txt` to `md`
	- Added a [custom config file](http://getkirby.com/docs/advanced-stuff/custom-config-files) for ‘localhost’, to turn on Kirby debugging and turn off caching when running the site locally
- Panel config
	- Added `image/svg+xml` MIME type
	- Added `application/postscript` MIME type
- [segment.io](https://segment.io) snippet for analytics
	- Global `$site` variable for your unique key
- [Typekit](https://typekit.com) snippet
	- Global `$site` variable for your Kit ID
- Sass structure set up
- Scripts
- [Robots meta tag](https://developers.google.com/webmasters/control-crawl-index/docs/robots_meta_tag) set to `no index` for invisible pages
	- **Need to review** (possibly break out into a snippet variable, so controlled per page through content?)

## Installation

1. 

## To Do

- Snippet for segment.io event tracking
- Review favicon and Apple icons
- Include a standard production-ready .htaccess file
- Per-page meta descriptions (right now, a global `$site` variable sets this for every page resulting in duplicate and non-distinct page descriptions)