WordPress Plugin GitHub Release Shortcode
=========================================

Creates the shortcode `[github_release]` for use within WordPress. The
shortcode generates a link pointing to the latest release on the given
repository.

This is handy when you have a WordPress page where you want to link to the
latest release of one of your repos.

Examples
--------

### Base Case

This will create a link to the latest release of this plugin on GitHub.  It is
kind of like [Inception](http://www.imdb.com/title/tt1375666/) but not really
useful.

```
[github_release]
```

### In the Wild

This is currently being used on http://ironcodestudio.com/bootstrap-genesis-theme/
with the following settings

```
[github_release repo="salcode/bootstrap-genesis" class="btn btn-primary"]Bootstrap Genesis Theme Latest Release[/github_release]
```

Advanced Options
----------------

The plugin does include some advanced options, in the form of short code
attributes, which likely no one other than me with ever need.

```
'repo'         => 'salcode/github-release-shortcode',
'class'        => 'github-release-shortcode-btn',
'transient'    => 'true', // use transient
'cache_length' => 1 * DAY_IN_SECONDS,
```
