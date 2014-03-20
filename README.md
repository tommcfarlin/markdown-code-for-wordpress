# Markdown Code For WordPress

A simple WordPress plugin for replacing backticks with `code`, asterisks with emphasis, and double-asterisks
with strong tags in the content of posts, pages, and other post types.

## Contents

The *Markdown Code For WordPress* archive includes the following files:

* This `README`
* A `ChangeLog` to track the changes as the plugin is developed
* `LICENSE.txt` the includes the software license under which this plugin is released
* The `markdown-code-for-wordpress.php` plugin file

## Installation

[Download](https://github.com/tommcfarlin/markdown-code-for-wordpress/archive/master.zip) the current version.

### Using The WordPress Dashboard

1. Navigate to the 'Add New' Plugin Dashboard
2. Select `master.zip` from your computer
3. Upload
4. Activate the plugin on the WordPress Plugin Dashboard

### Using FTP

1. Extract `master.zip` to your computer
2. Upload the `markdown-code-for-wordpress` directory to your `wp-content/plugins` directory
3. Activate the plugin on the WordPress Plugins dashboard

## FAQ

### How do I use this plugin?

This plugin supports three features of markdown all of which can be applied to the post content:

* Single asterisks (\*) wrapped around a word for *emphasis*.
* Double asterisks (\**) wrapped around a word for **bold**.
* Back ticks (\`) wrapped around a word for `code`.

Note that a previous verion *did* have support for comments, but that has been removed. See the [ChangeLog](https://github.com/tommcfarlin/markdown-code-for-wordpress/blob/master/ChangeLog.md) for more information as to why.

### What about updates?

This plugin uses the [GitHub Updater](https://github.com/afragen/github-updater), so if you have *that* plugin installed in your WordPress installation, then you should receive updates whenever updates are released.