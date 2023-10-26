=== Anima ===

Contributors: Cryout Creations
Requires at least: 4.5
Tested up to: 5.7.2
Stable tag: 1.4.1
Requires PHP: 5.6
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html
Donate link: https://www.cryoutcreations.eu/donate/

Copyright 2018-21 Cryout Creations
https://www.cryoutcreations.eu/

== Description ==
Anima is a free, highly customizable WordPress theme created for personal and business sites alike. Photography and portfolio, freelancer and corporate sites will also greatly benefit from the theme’s clean, responsive and modern design. A few perks: eCommerce (WooCommerce) support, WPML, qTranslate, Polylang, RTL, SEO ready, wide and boxed layouts, masonry, editable content and sidebars layout and widths, social icons, Google fonts and other typography options, customizable colors. Not to mention the landing page with countless featured icon blocks, boxes and text areas, all editable.
Demo: https://demos.cryoutcreations.eu/wp/anima

== License ==

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see http://www.gnu.org/copyleft/gpl.html


== Third Party Resources ==

Anima WordPress Theme bundles the following third-party libraries and resources:

TGM Plugin Activation
Copyright Thomas Griffin, Gary Jones, Juliette Reinders Folmer
License: GPL-2.0 or later license
Source: https://github.com/TGMPA/TGM-Plugin-Activation

HTML5Shiv
Copyright Alexander Farkas (aFarkas)
License: Dual licensed under the terms of the GPL (https://www.gnu.org/licenses/gpl-3.0.en.html) and MIT (https://opensource.org/licenses/MIT) licenses
Source: https://github.com/aFarkas/html5shiv/

FitVids
Copyright Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
License: WTFPLlicense
Source: http://fitvidsjs.com/

== Bundled Fonts ==

Raleway, Copyright The League of Moveable Type
Licensed under the terms of Apache License Version 2.0
Source: https://www.theleagueofmoveabletype.com/raleway

Roboto, Copyright Christian Robertson
Licensed under the terms of SIL Open Font License, Version 1.1.
Source: https://github.com/google/roboto/

Icomoon icons, Copyright Keyamoon.com
Licensed under the terms of the GPL license
Source: https://icomoon.io/#icons-icomoon

Zocial CSS social buttons, Copyright Sam Collins
Licensed under the terms of the MIT license
Source: https://github.com/smcllns/css-social-buttons

Feather icons, Copyright Cole Bemis
Licensed under the terms of the MIT license
Source: http://colebemis.com/feather/

== Bundled Images ==

The following bundled images are released into the public domain under Creative Commons CC0:
https://static.pexels.com/photos/324030/pexels-photo-324030.jpeg
https://www.pexels.com/photo/person-using-laptop-computer-during-daytime-196655/

The rest of the bundled images are created by Cryout Creations and released with the theme under GPLv3


== Changelog ==

= 1.4.1 =
*Release date - 2021.05.20*

* Added wp_body_open action hook
* Added pingback conditional check
* Fixed LP caption fields only visible when slider section is set to banner image
* Improved sanitization when non-numeric options are used in math formulas in custom styles
* Fixed block editor font sizes using the incorrect 'regular' slug
* Renamed landing page 'static image' feature to 'banner image' for clarity
* Added 'Tested up' to and 'Requires PHP' header fields in style.css
* Renamed content/author-bio.php file to content/user-bio.php to avoid name colision with WordPress' templating system
* Added click-navigation to target panels in header content and site identity hints
* Added configuration hint for header image when the theme's slider / banner image is active on the homepage
* Cleaned up and optimized frontend scripts, including for WordPress 5.5/5.6 jQuery updates
* Fixed left sidebar navigation not being displayed when there are no widgets assigned
* Updated to Cryout Framework 0.8.5.7:
	* Expanded hint control styling to apply in the Site Identity panel
	* Added echo parameters to cryout_schema_microdata() and cryout_font_select() functions
	* Improved breadcrumbs compatibility with plugins that filter section titles and add HTML markup
	* Improved JS code to remove jQuery deprecation notices since WordPress 5.6
	* Changed custom post type label in breadcrumbs from singular_name to name
	* Better cleaning of weights in font enqueues
	* Fixed color selector malfunction since WordPress 5.3
	* Fixed Select2 selectors no longer working with WordPress 5.6 on Firefox
	* Additional sanitization and even more sanitization changes to comply with current wp.org requirements

= 1.4.0 =
*Release date - 2019.05.20*

* Added option to control featured images in the header size enforcement
* Improved Google Fonts functionality to load all weights for the general font
* Improved footer widgets responsiveness when set to center align
* Improved content spacing on single pages/posts when comment form is not displayed
* Improved page/post meta options support for the block editor
* Improved block editor styling for dark color schemes
* Improved header titles checks to avoid displaying the titles a second time in content
* Optimized layout detection code and moved to the framework
* Optimized frontend scripts
* Renamed top and bottom widget areas for clarity
* Renamed and rearranged some theme options for consistency between themes
* Fixed normalized tags still having different sizes
* Fixed editor style option not applying to the block editor styling
* Fixed deferring functionality applying to some dashboard scripts
* Fixed $content_width not being defined in the dashboard
* Fixed comments links missing on full posts in post lists
* Fixed unexpected space between main navigation and header image on mobile devices when menu is fixed and not on top
* Multiple fixes for older IEs
* Disabled featured images on post formats
* Disabled search form display on the landing page when no posts are available
* Updated Cryout Framework to 0.8.2:
	* Activated Select2 functionality on font selector controls
	* Added Select2 functionality to icon-select controls
	* Fixed RTL issues with color controls, toggle controls, half/third width selectors, number slider
	* Switched enable/disable options to use the new toggle control
	* Switched number options to use the new number slider control

= 1.3.0.2 =
* Fixed notice about malformed number format in setup.php since 1.3.0
* Fixed Gutenberg editor background color missing

= 1.3.0.1 =
* Fixed notice about malformed number format in custom-styles.php since 1.3.0
* Fixed classic editor styling not working since 1.3.0
* Improved large blockquote block padding

= 1.3.0 =
* Fixed landing page slider area missing background color
* Gutenberg editor tweaks and improvements:
	* Added styles for the new block horizontal separators
	* Added editor styles for the Gutenberg editor
	* Added support for theme colors and font sizes in the Gutenberg editor
	* Added wide image support
	* Improved list appearance in blocks
	* Fixed margins on gallery blocks
	* Fixed caption alignment in blocks
	* Fixed cover block text styling	
	* Fixed block embeds responsiveness conflict with Fitvids script

= 1.2.6 =
* Fixed back-to-top button being visible on mobile devices when disabled
* Fixed long submenus causing horizontal scrollbar with long not-fixed and on-top submenus
* Fixed landing page text areas list bullets position on Chrome
* Improved landing page text areas inner image positioning with Gutenberg content
* Improved Gutenberg galleries content alignment
* Improved mobile menu non-link text to use the configured navigation text color

= 1.2.5 =
* Improved standards compliance cleanup sometimes breaking erroneous CSS styling
* Improved mobile menu non-link text to use the configured navigation text color
* Fixed top content elements getting overlapped by main navigation when this is fixed and no header image is used (since version 1.2.4)
* Updated to Cryout Framework 0.7.8.5:
	* Improved manual excerpts detection in landing page blocks and boxes to detect <!--more--> and <!--nextpage--> tags

= 1.2.4 =
* Improved Serious Slider caption title to use the configured headings font
* Fixed after content posts navigation incorrectly aligned when only one link is displayed
* Applied headings color to landing page text areas inner contents
* Fixed manual excerpts being filtered in featured boxes
* Fixed WP Globus translations not working in landing page icon blocks excerpts (should improve support for other plugins as well)
* Fixed long submenus sometimes causing horizontal scrollbar with non-fixed menus
* Updated to Cryout Framework 0.7.8.4
	* Improved WPML support for landing page featured boxes and icon blocks
	* Added required PHP version check
	* Improved required WordPress version check

= 1.2.3 = 
* Added support for shortcodes in custom footer text field
* Fixed an animation glitch affecting submenu items
* Fixed some animation hiccups on main navigation
* Removed 'defer' loading of comments script
* Updated to Cryout Framework 0.7.8.2
	* Fixed landing page sometimes ending unexpectedly while WPML is used
	* Sorted icon block icons list alphabetically

= 1.2.2 = 
* Updated to Cryout Framework 0.7.8
	* Added required PHP version check
	* Improved required WordPress version check

= 1.2.1 =
* Added landing page featured icon blocks overall disable option
* Fixed landing page icon blocks, featured boxes and text areas WPML support
* Fixed some animation hiccups on main navigation
* Fixed landing page content generation after first activation failing to retrieve all available static pages in some cases
* Fixed missing edit button on single posts
* Changed some landing page spaces and font sizes
* Changed landing page icon blocks top/bottom margins
* Changed default site, content and sidebar widths
* Updated to Cryout Framework 0.7.7

= 1.2.0 =
* Added support for custom embedded fonts
* Added main navigation keyboard accessibility support
* Added mobile menu close on click/tap functionality
* Added hints in the customizer interface for Site Identity / Header options
* Improved label hiding option to only apply to default comment form fields
* Improved mobile menu multi-line menu items behaviour
* Increased mobile menu width on smaller devices
* Fixed GDPR-related checkbox missing on comment form
* Fixed comment form fields center alignment on checkboxes and radio controls
* Fixed static slider positioning on <720px with RTL
* Fixed site tagline positioning with RTL
* Fixed long site titles overlapping the mobile menu placeholder
* Fixed two instances of H1 titles on static pages with header titles enabled
* Fixed header widgets being present on the landing page when the header image is not used
* Updated Cryout Framework to 0.7.6

= 1.1.4 =
* Added featured box titles link functionality
* Added compatibility styling for Jetpack Portfolio titles sizes in widgets
* Improved scroll-to-anchor functionality
* Improved accessibility for landing page block icons, boxes links and titles, edit button, read more links and back-to-top button
* Improved first content title spacing before
* Improved landing page icon blocks and text areas disabling condition checks
* Fixed site title border visible and taking up space when site title is hidden
* Fixed cover+fixed background images zoomed incorrectly on Safari
* Fixed cover+fixed background images shaky on IEs and Edge
* Disabled global post nav under 640px screen width

= 1.1.3 =
* Fixed liliputian sizes for landing page titles in v1.1.2

= 1.1.2 =
* Added support for WooCommerce breadcrumbs
* Added landing page sections support for WPML/Polylang localization
* Added landing page options visibility dependencies checks
* Added landing page icon blocks read more links
* Added missing fields to WPML/Polylang wpml-config.xml file
* Improved on-page SEO
* Improved tables styling
* Fixed quantity input being too short for double digits with WooCommerce 3.3+
* Fixed landing page featured boxes not being disable-able
* Fixed HTML markup validation warning due to empty 'media' attribute
* Fixed CSS validation warnings due to empty color fields and invalid 'default' values
* Fixed language flag images being improperly aligned in menus
* Changed headings size options to apply to content headings only
* Changed header titles search form input background opacity for visibility
* Removed 'defer' loading of comments script due to conflict with Jetpack
* Updated to Cryout Framework v0.7.4

= 1.1.1 =
* Improved compatibility of dark color schemes with Crayon Syntax Highlighter plugin's editor styling
* Added all weight values for the typography options
* Fixed comments block being visible on landing page featured page
* Fixed cropped featured images functionality after previous srcset changes

= 1.1.0 =
* Fixed theme styling overlapping Serious Slider buttons appearance
* Rewrote featured image srcset functionality; added anima_set_featured_srcset_picture() function
* Relocated Header Titles options panel under General
* Fixed non working translation in article publish date
* Fixed Serious Slider 'theme' style and built-in static slider responsiveness
* Fixed page layout option overlapping category/search/archive layout when last item uses custom layout
* Improved 'comments moderated' text positioning
* Improved sublists appearance in sidebar widgets
* Added extra bottom padding on main content container
* Adjusted post meta appearance
* Improved demo content check to use theme slug
* Fixed and disabled header titles functionality on WooCommerce sections
* Fixed header titles not following the separate option on home static page
* Fixed header titles to use the correct page title on the 'blog' section
* Updated to Cryout Framework 0.7.3:
    * Framework: fixed invalid count() call in prototypes.php triggering warnings on PHP 7+
    * Framework: added cryout_get_picture(), cryout_get_picture_src(), cryout_is_landingpage(), cryout_on_landingpage() functions

= 1.0.3 =
* Fixed extra space under menu when main menu is set to fixed and on top of header image with boxed layout when no header image is set
* Adjusted static slider caption margin and padding to fix missing background on caption container
* Fixed fixed menu missing background color on mobile devices when menu is on top of header image
* Fixed missing text areas numbers in theme options
* Fixed non-translatable strings in theme options
* Added auto-match for mailto: URL in social icons
* Improved masonry initiation to check if function is available
* Adjusted landing page static slider image responsiveness to make image more visible on mobile devices
* Added workaround for horizontal scrollbar on mobile devices when large menus are used
* Reverted padding back to margin on static slider caption due to extra space before the static slider title
* Fixed incorrect usage of site background color option on slider text, featured boxes background, aside border, socials background; switched header socials background to use menu background instead of site background
* Fixed icon blocks background/border to use correct color option
* Fixed featured boxes image background to use correct color option
* Added content background to featured posts / featured page area
* Fixed missing breadcrumbs background color when header titles are not active

= 1.0.2 =
* Added integrated styling for our Serious Slider plugin
* Renamed $animas variables to be more generic
* Fixed editor styling option not controlling style.css enqueue
* Fixed featured boxes not deactivating by setting the category to 'disabled'
* Fixed dropdown menu width issue in Chrome with very short menu items
* Fixed static slider caption container being displayed when no static slider caption fields are used
* Adjusted static slider CTA buttons styling to be more generic
* Increased content headers line-height to 1.2
* Fixed author pages displaying empty biography area

= 1.0.1 =
* Revamped single post previous/next buttons
* Changed article markup to improve search engine readability (separated actual article content from article extra information)
* Changed comment headers to 'footer' elements
* Changed author bio div to 'section' element
* Updated to Cryout Framework 0.6.6

= 1.0.0 =
* Removed font-weight from admin editor styles
* Fixed sidebar socials height issue
* Adjusted header titles padding
* Adjusted menu search padding
* Fixed site title overlapping menu icon on mobile
* Fixed sidebars padding on mobile
* Fixed landing page title top margin on mobile
* Increase article responsiveness
* Fixed slider next/prev buttons having rounded corners
* Changed default lp blocks and lp text areas background colors
* Changed default menu background color
* Added meta hover effect
* Removed empty "templates" folder
* Changed default header image and set default image size to 420px
* Changed default header image vertical position from center to top
* Changed screenshot.png

= 0.9.4 =
* Fixed un-numbered 'printf' placeholders in back-compat.php
* Fixed cryout_compat_upgrade_notice() not properly hooked in back-compat.php

= 0.9.3 =
* Fixed featured image animation leftover background
* Added header links and metas hover effects
* Clarified landing page activation requirements in the customize panel
* Improved header video support and fixed header height on non-homepage sections
* Further improved responsiveness
* Removed font-size reset
* Restored default quotes on q tag
* Adjusted fixed post navigation colors/opacity
* Removed main search border radius in conjunction with menu over image layout
* Added height to the header-image-main-inside container for cropped header image
* Adjusted the footer widget area description
* Updated to Cryout Framework 0.6.5+

= 0.9.2 =
* Added option to show the site title and tagline on the home page (when the landing page is disabled)
* Fixed breadcrumbs offset in header titles
* Fixed inconsistent content padding on mobile
* Fixed sidebars responsiveness
* Updated translations

= 0.9.1 =
* Renamed sidebar areas
* Removed save/load theme settings
* Escaped variables in custom-styles.php, loop.php, meta.php and main.php
* Changed images inside links vertical alignment to "middle"
* Increased site wrapper left/right padding to 2em
* Removed sidebar margins
* Fixed minor layout responsiveness issues
* Fixed content background issues and replaced it with site background color in many instances in custom-styles.php
* Removed prev/next fixed navigation hover effect on mobile
* Added 'hentry' class to article post_class() in content/content.php
* Changed default featured image height to 350px
* Fixed icon blocks responsiveness
* Reversed landing page buttons
* Fixed landing page second button hover color
* Removed content background color from the landing page slider and above slider text
* Improved first image handling in text areas
* Added demo content
* Added a new screenshot
* Improved admin logo images
* Changed coffee text

= 0.9 =
Initial release
