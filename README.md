# t-o-c-plugin-

=== My Custom Table of Contents ===
Contributors: Your Name
Donate link: https://example.com/donate/
Tags: toc, table of contents, navigation, content, posts, pages, images, gutenberg, elementor, acf
Requires at least: 5.8
Tested up to: (WordPress version you last tested against, e.g., 6.5)
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A fully customizable, lightweight, and responsive Table of Contents (TOC) plugin for WordPress with advanced control, layout features, and image navigation.

== Description ==

My Custom Table of Contents automatically generates a highly customizable table of contents for your posts, pages, and custom post types. It enhances user navigation and experience by providing quick links to different sections of your content and even to images within the article.

**Core Features:**

* **Shortcode Generator:** Easily insert TOC anywhere using `[my_custom_toc]` (customizable) in any editor (Gutenberg, Elementor, Classic, etc.).
* **Full Backend Design Control:** Customize font family, size, color, heading levels (H1-H6), line height, spacing, margins, padding, borders, layout (vertical/horizontal), and alignment.
* **Flexible Positioning:** Auto-insert below post title or place manually.
* **Mobile-First Responsive Design:** Optimized for all devices, with an optional sticky, scrollable horizontal TOC bar on mobile.
* **Image Navigation Dropdown:** A toggleable "Images in this Article" dropdown lists all images (by order or alt/title) with smooth scroll to each.
* **Sticky TOC/Image Nav:** Option to make the TOC and/or image navigation sticky on scroll.
* **Collapsible Sections:** Allow users to collapse or expand the TOC and image navigation.
* **Accessibility & SEO:** Semantic HTML structure and optional Schema.org markup for TOCs.
* **Compatibility:** Designed for wide compatibility with themes, child themes, ACF, Elementor, Gutenberg, and other page builders.

== Installation ==

1.  Upload the `my-custom-toc-plugin` folder to the `/wp-content/plugins/` directory.
2.  Activate the plugin through the 'Plugins' menu in WordPress.
3.  Go to Settings > My Custom TOC to configure the plugin.
4.  Use the shortcode `[my_custom_toc]` (or your custom one) in your posts/pages, or enable automatic insertion.

== Frequently Asked Questions ==

= How do I use the TOC? =
You can either enable automatic insertion for specific post types (e.g., below the title) via the settings page, or you can manually insert the TOC using the shortcode `[my_custom_toc]` (this tag can be customized in settings) anywhere in your content.

= Can I customize the appearance? =
Yes, the plugin offers extensive appearance customization options in Settings > My Custom TOC, covering fonts, colors, spacing, borders, layout, and more.

= Does it work with page builders like Elementor or Beaver Builder? =
Yes, the primary way to integrate with page builders is by using the shortcode within their text/HTML widgets or shortcode modules. Automatic insertion works with content filtered through `the_content`, which some builders do for their main content areas.

= How does the Image Navigation work? =
If enabled, it automatically detects images in your article and creates a dropdown list. Clicking an item smooth scrolls to that image. Images are identified by their order or alt/title attributes.

= Is it responsive? =
Yes, the TOC and image navigation are designed to be responsive. There's also an option for a special sticky horizontal TOC bar for mobile devices.

== Screenshots ==

1.  Plugin Settings Page - General & Appearance
2.  Example of a Vertical TOC in a Post
3.  Example of the Image Navigation Dropdown
4.  Mobile Sticky TOC Bar in Action

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial release of My Custom Table of Contents.
