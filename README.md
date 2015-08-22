# Publicize With Hashtags
PWH is a small WordPress plugin that will automatically append hashtags to any content sent by **Jetpack's Publicize** module. This means that **the plugin will work only if the Jetpack plugin is already installed on your Wordpress platform with the Publicize module set to active**. Don't worry, tho: if any of these requirements are missing this plugin won't do anything, without breaking your blog or compromising its performance in any way.

## Description

**IMPORTANT**: This plugin requires Jetpack's Publicize module: read below for additional info.

As the name says, this plugin will automatically append hashtags to any content sent by **Jetpack's Publicize** module. This means that **the plugin will work only if the Jetpack plugin is already installed on your Wordpress platform with the Publicize module set to active**. Don't worry, tho: if any of these requirements are missing this plugin won't do anything, without breaking your blog or compromising its performance in any way.

## Plugin Features

* Hashtags will be created using the post `tags`, (optionally) trimming the space chars, until the maximum character length is reached (if any).
* You'll still be able to manually add custom hashtags, pre-pending or appending them to the auto-generated ones just like you always did.
* You can reorder the hashtags as you like, regardless of how they were added.
* Dupe check included, ensuring that the same hashtag won't be included multiple times - unless you manually do that.
* Automatically added hashtags won't break the *118-character limits* of the social message text to keep the message length under the standard *tweet + link* limit.
* The above character-length threshold can be changed and/or set to infinite with ease.

## Installation

Go to the **Plugins > Add New...** panel in the WP Admin interface, search for "publicize with hashtags" and click **Install**.

If you prefer to install the plugin manually, you can do the following:

1. Go to the [plugin page](https://wordpress.org/plugins/publicize-with-hashtags/) on the Wordpress Plugin Browser and click the **Download** button to get the latest version to your HDD.
2. Upload the **publicize-with-hashtags.zip** file using the Wordpress *upload plugin* feature OR unpack its contents inside the `/wp-content/plugins/` folder.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Take a look at the plugin's source code and change its default settings if needed.

## Frequently Asked Questions

#### What if I manually insert one or more hashtags?

They will be kept as they are: the plugin won't strip out anything, it will simply add the "missing" hashtags to the Custom Message box.

#### What if I already inserted an hashtags identical to an existing post tag?

It won't be added again, as long as it's case-insensitive equal to the first one. The plugin will never insert a dupe hashtag on its own.


## Screenshots

![alt text](https://s.w.org/plugins/publicize-with-hashtags/screenshot-1.jpg?r=1217800 "Plugin at work on the Jetpack's Publicize Widget Custom Message box")

*The plugin will automatically trasform your post tags to hashtags and append them to the Publicize Widget's Custom Message box. Any existing, manually inserted hashtag will be kept and/or won't be added a second time if also included as a tag.*


## Useful Links

* [Plugin official page](https://wordpress.org/plugins/publicize-with-hashtags/) on Wordpress.org Plugin Browser.
* [Plugin SVN Repository](http://plugins.svn.wordpress.org/publicize-with-hashtags/) hosted by Wordpress.org (in real-time sync with the GitHub repo).
* [Plugin GitHub Repository](https://github.com/Darkseal/publicize-with-hashtags) (in real-time sync with the SVN repo).
* [Plugin GitHub Page](http://darkseal.github.io/publicize-with-hashtags/).
* [Plugin official page](http://www.ryadel.com/works/publicize-with-hashtags/) at [Ryadel.com](http://www.ryadel.com/).
* [Installation & Usage Guide](http://www.ryadel.com/en/add-hashtags-to-jetpack-publicize-shared-posts/) at [Ryadel.com](http://www.ryadel.com/).


## Changelog

#### 0.1.4
* Fixed a bug for some auto-saved posts missing their title in their social text 

#### 0.1.3
* Added WordPress 4.3 compatibility notice

#### 0.1.2
* Fixed a bug in hashtags generation

#### 0.1.1
* Added an explicative screenshot
* Added some Frequently Asked Questions
* Small changes to readme.txt

#### 0.1
* First release.


## Authors

* **Darkseal** of [Ryadel.com](http://www.ryadel.com/).


## Support
You can support this project's development by clicking on the following button.
  
[<img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" alt="Donate">](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JSTHA4HMVSQ8J)
  
 Thanks a lot!