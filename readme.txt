=== Simple Wall ===
Contributors: sebastienserre, chaton666
Tags: Facebook, wall, shortcode, timeline, social network
Donate link: https://github.com/sponsors/sebastienserre
Requires at least: 4.6
Tested up to: 5.9
Stable tag: 1.1.0
License: GPL v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Simply display your Page Facebook Wall

== Description ==
Simple Wall embed a shortcode and a block to display a Facebook public page.
This plugin allows you to add the official Facebook widget available at https://developers.facebook.com/docs/plugins/page-plugin without any coding.
Facebook is a trademark owned by Meta Platform Inc. Thivinfo.com has no link with this company or this Trademark.

== Frequently Asked Questions ==

= How to display a Facebook wall in my website? =
* From WP 5.0 Use the Gutenberg Block "Simple Wall" !
* You can also use the shortcode [simple_wall] with 3 parameters possible:
  - slug (the last part of your URL)
  - height
  - width
  Example [simple_wall slug='MotoGP' width=300 height=600]

= What do you mean by "Slug" ?
In WordPress ecosystem, the slug of a page is the last of it. For example in the https://www.facebook.com/VeloBrival/ Facebook page, the slug is "VeloBrival".

= Why my wall isn't displayed ? =
Do you try to show the wall of a private page/profile?
Simple Wall only display wall from public Facebook pages. No user profile.

= I've found a bug, how to report it ? =
Feel free to report an issue to my [GitHub](https://github.com/sebastienserre/simple-wall/issues/new/choose)

= I've an idea to improve this plugin, how to report it ? =
Feel free to report an enhancement to my [GitHub](https://github.com/sebastienserre/simple-wall/issues/new?assignees=&labels=&template=feature_request.md&title=)

= Where can I find help ? =
Please use the [WordPress forum]( https://wordpress.org/support/plugin/simple-wall/ ), I will make my best to answer and help you asap.

== Screenshots ==
1. Render
2. Settings Gutenberg Block
3. Settings Shortcode

== Changelog ==

= 1.1.0 (2022-03-08) =
* Display the Facebook Wall in the WordPress locale. Thx to @elizwood-1
* Compatible with Polylang (tested) & WPML (not tested).

= 1.0.3 (2022-01-19) =
* add a filter to allow displaying Simple Wall if not added in the content (simple_wall_shortcode_location)

= 1.0.2 (2022-01-18) =
* fix an issue where the localized FB page were not displayed (#3)
* fix an issue where the shortcode was displayed outside the content (#5)
* fix an issue where the url previously used was a link (#4). From now a slug is asked instead of an URL.
* Improve FAQ / add screenshots / Improve Readme

= 1.0.1 (2022-01-15) =
* Commestic change (readme / wrong indent )

= 1.0.0 (2022-01-13) =
* Initial commit
* Add a simple Shortcode
* Add a gutenberg block (Thx to Marie Comet @chaton666)
