=== Easy Video Player ===
Contributors: naa986
Donate link: https://noorsplugin.com/
Tags: video, player, flash, html5, mobile
Requires at least: 5.5
Tested up to: 6.7
Stable tag: 1.2.2.11
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Easy Video Player is a WordPress video player that allows you to add videos to your WordPress site.

== Description ==

[Easy Video Player](https://noorsplugin.com/wordpress-video-plugin/) is a user-friendly WordPress video plugin to showcase your videos. You can embed both self-hosted videos or videos that are externally hosted using direct links.

=== Easy Video Player Features ===

* Embed MP4 video into your website
* Embed responsive video for a better user experience while viewing from a mobile device
* Embed HTML5 video which are compatible with major browsers
* Embed video with poster images
* Embed video with autoplay if the device and browser support it
* Embed video with loop
* Embed video with muted enabled
* Customize the video player using classes
* Embed video using MediaElement player

=== Easy Video Player Add-ons ===

* [MediaElement Skin 1](https://noorsplugin.com/wordpress-video-plugin/)
* [User Only Videos](https://noorsplugin.com/easy-video-player-user-only-videos/)
* [Video Schema](https://noorsplugin.com/easy-video-player-schema/)
* [Disable Right Click](https://noorsplugin.com/easy-video-player-disable-right-click/)

=== Easy Video Player Plugin Usage ===

https://www.youtube.com/watch?v=EpoA4m3mkuI&rel=0

**Embedding a Video in the Classic Editor**

https://www.youtube.com/watch?v=RUaDFo4b3Ww&rel=0

**Settings Configuration**

It's pretty easy to set up this video player plugin. Once you have installed the plugin simply navigate to the Settings menu where you will be able to configure some options. Mostly you just to need check the "Enable jQuery" option. That will allow the plugin to make use of jQuery library.

**Embedding Shortcodes for the Videos**

Now it's time to finally embed a video shortcode. To do this create a new post/page and use the following shortcode:

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4"]`

Here, url is a shortcode parameter that you need to replace with the actual URL of the video file.

**Video Autoplay**

If you want a particular video to start playing when the page loads, you can set the "autoplay" option to "true":

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" autoplay="true"]`

**Control Size**

By default, the player takes up the full width of the content area. You can easily control the size by specifying a width for it:

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" width="640"]`

The height will be automatically determined based on the ratio (please see the "Control Player Ratio section" for details).

**Control Player Ratio**

You can override the default aspect ratio by specifying a different one in the shortcode:

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" ratio="16:9"]`

If the player does not support your specified aspect ratio it will load the default.

**Video Loop**

If you want a particular video to start playing again when it ends, you can set the "loop" option to "true":

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" loop="true"]`

**Video Player Template**

If you want to use a different video player template, you can specify it in the "template" parameter:

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" template="mediaelement"]`

By default, the mediaelement template only loads the "metadata" of a video when the page loads. You can set it to "auto" or "none" with the preload parameter in the shortcode.

`[evp_embed_video url="https://example.com/wp-content/uploads/videos/myvid.mp4" preload="auto" template="mediaelement"]`

For detailed documentation please visit the [WordPress video plugin](https://noorsplugin.com/wordpress-video-plugin/) page

=== Plugin Language Translation ===

If you are a non-English speaker please help [translate Easy Video Player](https://translate.wordpress.org/projects/wp-plugins/easy-video-player) into your language.

== Installation ==

1. Go to the Add New plugins screen in your WordPress Dashboard
1. Click the upload tab
1. Browse for the plugin file (easy-video-player.zip) on your computer
1. Click "Install Now" and then hit the activate button
1. Now, go to the settings menu of the plugin and follow the instructions for embedding videos.

== Frequently Asked Questions ==

= Can this plugin be used to embed videos on my WordPress blog? =

Yes.

= Are the videos embedded by this plugin playable on mobile devices (iOS/Android)? =

Yes.

= Can I autoplay a video? =

Yes, as long as the device and browser allow it.

= Can I embed responsive videos using this plugin? =

Yes.

== Screenshots ==

1. Easy Video Player Demo
2. Easy Video Player Demo With MediaElement Template

== Upgrade Notice ==
none

== Changelog ==

= 1.2.2.11 =
* Improved shortcode sanitization suggested by Patchstack.

= 1.2.2.10 =
* Additional check for the settings link.

= 1.2.2.9 =
* Set a default ratio for videos if not specified.

= 1.2.2.8 =
* Fixed an issue where the specified aspect ratio was not getting applied.

= 1.2.2.7 =
* Added support for disable right click.

= 1.2.2.6 =
* Added support for video schema to improve SEO.

= 1.2.2.5 =
* Fixed an issue that was preventing player icons from loading on some sites.

= 1.2.2.4 =
* Added support for the user only videos add-on.

= 1.2.2.3 =
* Made some security related improvements suggested by wpscan.

= 1.2.2.2 =
* Updated the player to version 3.6.7.

= 1.2.2.1 =
* Fixed an issue where video controls were not visible on AMP pages.

= 1.2.2 =
* Added support for the MediaElement template skin.

= 1.2.1 =
* Removed plugin action links to fix an error.

= 1.2.0 =
* Made some security related improvements in the plugin

= 1.1.9 =
* Removed flowplayer (the default player) since it's no longer available.

= 1.1.8 =
* Updated the player to version 7.2.7.

= 1.1.7 =
* Updated the player to version 7.2.1.
* Easy Video Player is now compatible with WordPress 4.9.

= 1.1.6 =
* Added a shortcode parameter to disable the sharing option in the player.

= 1.1.5 =
* Updated the player to version 7.0.2.

= 1.1.4 =
* Added a new shortcode parameter - "video_id". It can be used to specify a custom ID for a video.

= 1.1.3 =
* mediaelement template now supports the video preload attribute

= 1.1.2 =
* Added translation option so the plugin can take advantage of language packs

= 1.1.1 =
* Added a new shortcode parameter "muted" to disable the audio output of the video

= 1.1.0 =
* Added a new video player template - MediaElement

= 1.0.9 =
* Easy Video Player is now compatible with WordPress 4.3

= 1.0.8 =
* Added a new shortcode parameter "loop" to start playback again from the beginning when the video ends

= 1.0.7 =
* Video shortcode now accepts custom class names which can be used to customize the player

= 1.0.6 =
* Updated flowplayer library to version 5.5.2
* Disabled external embedding option in the player

= 1.0.5 =
* Video shortcode can now be embedded in a text widget

= 1.0.4 =
* Easy video player is now compatible with WordPress 4.0
* Added a new parameter in the shortcode to accept poster image for a video

= 1.0.3 =
* Easy video player is now compatible with WordPress 3.9

= 1.0.2 =
* The plugin can now automatically start playing a video
* The player can be resized using a specific width and height
* The ratio of each video can be customized

= 1.0.1 =
* First commit
