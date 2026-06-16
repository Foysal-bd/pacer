=== Pacer ===
Contributors: nazsabuz
Tags: blog, news, photography, one-column, block-styles, editor-style, custom-logo, custom-menu, featured-images, full-site-editing, threaded-comments, translation-ready
Requires at least: 6.2
Tested up to: 6.9
Stable tag: 1.0.8
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Block theme (full site editing).

== Description ==
Pacer is a modern block-based WordPress theme, especially made for blog, news, and magazine. It supports full site editing, block styles, and global styles via theme.json.

== Copyright ==
Pacer WordPress Theme, Copyright Nazmul Sabuz. Pacer is distributed under the terms of the GNU GPL.

Pacer Theme is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 2 of the License or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

== Resources ==
* Screenshot photo: https://www.pexels.com/photo/classic-yellow-car-on-side-of-road-at-day-704913/ licenced under CC0.

== Changelog ==

= 1.0.8 =
* Updates theme metadata, author, and repository URLs; PHP namespace is now Sabuz\Pacer.
* Adds root style.css required by WordPress and loads compiled CSS from public/css.
* Registers footer-default and footer-simple template parts in theme.json.
* Registers editor styles on after_setup_theme; uses absolute paths for includes.
* Bumps minimum PHP to 7.4 and declares support for WordPress 6.2 through 6.9.
* Fixes invalid img loading attribute on custom logo fallback.

= 1.0.7 =
* Updates blockquote style.
* Updates pullquote style.
* Updates image caption style.
* Updates default header layout.
* Updates default footer layout.

= 1.0.6 =
* Fixes layout break issue in editor.

= 1.0.5 =
* Updates theme.json to v2.
* Fixes navigation block default gap.
* Fixes button block style not compatible with theme issue.
* Removes require gutenberg plugin notice from WordPress 5.9.

= 1.0.4 =
* Fixes comments list alignment.

= 1.0.3 =
* Updates legend tag style.
* Updates pre tag style.
* Updates code tag style.
* Updates select tag style.
* Updates table style.
* Fixes title overflow content area.

= 1.0.2 =
* Fixes skip link not appearing.

= 1.0.1 =
* Fixes PHP fatal errors on some server.

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.8 =
Requires WordPress 6.2+ and PHP 7.4+. Compatibility and metadata updates; see changelog. If you use custom header or footer template parts, confirm they still match your site after updating.
