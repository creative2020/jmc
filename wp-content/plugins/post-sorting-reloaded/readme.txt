=== Post Sorting Reloaded ===
Contributors: gab.ro
Donate link: http://www.gab.ro/contact/
Tags: post, sort, alphabetical, reverse, posts_orderby, widget
Requires at least: 3.0.1
Tested up to: 3.3.1
Stable tag: 1.3

Allows sorting of posts by title, comment count, and other criteria for various pages, including category pages, tag pages, home page, etc.

== Description ==

**Warning: This plugin is no longer supported. It's functionality has been included into a new plugin called [Nano Plugin Manager](http://wordpress.org/extend/plugins/nano-plugin-manager/).**

The plugin is basically a wrapper for the `posts_orderby` filter. You can sort cateogry pages, author pages, tag pages, pretty much any page that can be targeted with WordPress conditional tags.

Posts can be sorted by title, date, excerpt, comment count, content, or any other field in the `wp_posts` table.

Just take a look at the first screenshot and everything will become clear :)

The plugin also includes a widget that allows regular visitors to sort posts.

[Plugin homepage](http://www.gab.ro/post-sorting-reloaded/) here!

== Installation ==

1. Upload `post-sorting-reloaded` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can I sort by custom fields? =

Yes and no. In order to sort by custom fields, you also need to use the `posts_join` filter in addition to the `posts_orderby` filter.

For the `posts_orderby` filter you can use the plugin, but for the `posts_join` filter, you're going to have to write the code yourself.

Just add the following code either in your theme's functions.php or in a new little plugin:

`
add_filter('posts_join', 'my_posts_join');

function my_posts_join($join){
	global $wpdb;
	$join .= " LEFT JOIN $wpdb->postmeta wpmeta ON ($wpdb->posts.ID = wpmeta.post_id AND wpmeta.meta_key = 'price')";
	return $join;
}
`

Replace 'price' with whatever your custom field is called.

Now you have access to your custom field by using `wpmeta.meta_value` as your Sort Type.

Of course, if you need the numerical value of your custom field, you can use something like `ABS(wpmeta.meta_value)`.

== Screenshots ==

1. Settings screen
2. Widget screen

== Changelog ==

= 1.3 =
Removed contextual help. The plugin is now tested and works properly for WordPress 3.3.1

= 1.2 =
Minor bugfixes.

= 1.1 =
Added class for selected option in the widget.

= 1.0 =
Everything is working properly. Minor security bug fixed.

= 0.9 =
Added widget for frontend sorting. User testing went on smoothly.

= 0.8 =
Initial release. Should work perfectly, but I'll wait for a bit of user testing before calling it 1.0

== Upgrade Notice ==

= 1.1 =
Added class for selected option in the widget.

= 1.0 =
Minor security bug fix for the widget.

= 0.9 =
Upgrade! We now have a widget too.

= 0.8 =
Initial release. No upgrade notice.
