## Changes

- [Panel](https://github.com/bastianallgeier/kirbycms-panel) pre-installed
- [XML Sitemap](http://getkirby.com/blog/xmlsitemap) pre-installed
	- _Note: I’ve adjusted the default sitemap installation to better handle invisible/draft pages_
- [Tagcloud plugin](https://github.com/bastianallgeier/kirbycms-extensions/tree/master/plugins/tagcloud) pre-installed
- [Panel Tags Field](http://getkirby.com/blog/panel-tags-field) pre-installed
- [humans.txt](http://humanstxt.org)
- robots.txt
	- _Note: Be sure to change sitemap url_
- Site config
	- Changed kirbytext video size in site config
	- Turned on markdown extra
	- Turned on smartypants
	- Turned off built-in tinyurl
	- Changed timezone to New York
	- Changed content extension to 'md'
- Panel config
	- Added 'image/svg+xml' MIME type

## Installation

## To Do

- Snippet for segment.io event tracking
- Review favicon and Apple icons
- Include a standard production-ready .htaccess file
- Per-page meta descriptions (right now, a global $site variable sets this for every page resulting in duplicate and non-distinct page descriptions)