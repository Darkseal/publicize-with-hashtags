=== Plugin Name ===
Contributors: neilgaiman
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JSTHA4HMVSQ8J
Tags: jetpack, publicize, hashtag, hashtags
Requires at least: 3.0.1
Tested up to: 4.2.4
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Automatically append hashtags to content sent by Jetpack Publicize module. Hashtags will be created using post tags. Dupe and length check included.

== Description ==

**IMPORTANT**: This plugin requires Jetpack's Publicize module: read below for additional info.

As the name says, this plugin will automatically append hashtags to any content sent by **Jetpack's Publicize** module. This means that **the plugin will work only if the Jetpack plugin is already installed on your Wordpress platform with the Publicize module set to active**. Don't worry, tho: if any of these requirements are missing this plugin won't do anything, without breaking your blog or compromising its performance in any way.

**Characteristics**

* Hashtags will be created using the post `tags`, (optionally) trimming the space chars, until the maximum character length is reached (if any).
* You'll still be able to manually add custom hashtags, pre-pending or appending them to the auto-generated ones just like you always did.
* You can reorder the hashtags as you like, regardless of how they were added.
* Dupe check included, ensuring that the same hashtag won't be included multiple times - unless you manually do that.
* Automatically added hashtags won't break the *118-character limits* of the social message text to keep the message length under the standard *tweet + link* limit.
* The above character-length threshold can be changed and/or set to infinite with ease.

== Installation ==

1. Upload the **publicize-with-hashtags.zip** file using the Wordpress *upload plugin* feature OR unpack its contents inside the `/wp-content/plugins/` folder.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Take a look at the plugin's source code and change its default settings if needed.

== Frequently Asked Questions ==

= What if I manually insert one or more hashtags? =

They will be kept as they are: the plugin won't strip out anything, it will simply add the "missing" hashtags to the Custom Message box.

= What if I already inserted an hashtags identical to an existing post tag? =

It won't be added again, as long as it's case-insensitive equal to the first one. The plugin will never insert a dupe hashtag on its own.


== Screenshots ==

1. The plugin will automatically trasform your post tags to hashtags and append them to the Publicize Widget's Custom Message box. Any existing, manually inserted hashtag will be kept and/or won't be added a second time if also included as a tag.


== Changelog ==

= 0.1.1 =
* Added an explicative screenshot
* Added some Frequently Asked Questions
* Small changes to readme.txt

= 0.1 =
* First release.

== Upgrade Notice ==

= 0.1.1 =
* Screenshot added
* Frequently Asked Questions added
* Updated installation guide

= 0.1 =
* First release

== Authors ==

* **Darkseal** of [Ryadel.com](http://www.ryadel.com/).

<?php code(); ?>