WordPress Search &amp; Filter
==================

Search &amp; Filter is a simple search and filtering plugin for WordPress.

It is an advancement of the WordPress search box, adding taxonomy filters to really refine your searches!

You can search by Category, Tag, Custom Taxonomy or any combination of these easily - you can even remove the search box and simply use it as a filtering system for your posts and pages.

## Demo
 - Coming Soon - see [this blog post](http://www.designsandcode.com/447/wordpress-search-filter-plugin-for-taxonomies/) for screenshots

## Setup
 - [Designs & Code Blog - Setup Search &amp; Filter](http://www.designsandcode.com/447/wordpress-search-filter-plugin-for-taxonomies/)

## Changelog


### 1.2.0
 -  WARNING - this update includes some major changes to shortcode construction,  do not upgrade until you have read how this will affect your setup - updating should be easy.
 - Renamed the `taxonomies` argument to `fields` - `taxonomies` is now no longer appropriate as this list contains field types other than taxonomies - this list now contains taxonomies, `post_type`, `post_date` and `search` - `taxonomies` as an argument is still supported however will be deprecated
 - Search box can now be positioned anywhere, simply include `search` in the fields list in the position desired.  Upgrading from previous versions will cause you to lose your search box, simply include `search` in the fields list to show it again
 - Drop support for `search` argument as no longer relevant - control display of search input by adding it to the `fields` list
 - Labels have been completely rewritten - `label` has been renamed to `headings` to avoid confusion with internal taxonomy labels - the `headings` argument now allows for any text to be added and displayed as a heading for each field - this allows for much more flexibility and no longer uses internal taxonomy labels - to hide a label simply leave blank
 - Added support for hierarchical taxonomies for all input types - checkbox, radio & select
 - Added support for ordering of taxonomies - use `order_by` argument - allowed values are `id`, `name`, `slug`, `count`, `term_group`
 - Added support for ordering direction of taxonomies - use `order_dir` argument - allowed values are 'asc' or 'desc'
 - Added support to show or hide empty taxonomies - use `hide_empty` argument
 - Added support for `search_placeholder` 
 - Updated `post_date` functionality to work with older versions of WP - can be displayed either as `date` or `daterange` - the `post_date` field uses the HTML 5 input type of `date` - browsers that do not support it will simply show a text box - a tutorial of integrating jquery for graceful degredation is in the works
 - Renamed `submitlabel` to `submit_label` - `submitlabel` still works for now.
 - Renamed `type` to `types` - `type` still works for now.
 - Updated display of checkboxes and radio buttons, inputs are now wrapped in an unordered list which may affect your styling
 - Various bug fixes
 - Thanks to `bradaric` for help with hierarchical dropdown lists and date input types - https://github.com/bradaric


### 1.1.3
 - Added support for `post_date` to be displayed either as `date` or `daterange` (WP 3.7+) type.

### 1.1.2
 - Added support for all public and custom post types (the attachment post type is excluded) - all post types can be user searchable or predfined and hidden from the user. This allows for users to add multiple search widgets to their site which work on specific post types independantly from eachother.
 - Added offical updated documentation, created and moved to Search &amp; Filter Docs

### 1.1.1
 - Fixed: when submitting an empty `search/filter`, `"?s="` now gets appended to the url (an empty search) to force load a results page, previously this was redirecting to the homepage which does not work for many use cases

### 1.1.0
 - Added support for checkboxes and radio buttons, with the option to control this for each individual taxonomy.
 - Added support to show or hide headings for each individual taxonomy.
 - Added support to pass a class name through to Search &amp; Filter widgets, this allows styling of different instances of Search &amp; Filter
 - Fixed problems with escaping output in search box
Notice: This update will automatically add headings to taxonomy dropdowns, refer to usage and examples on how to disable them.

### 1.0.3
 - Added some documention &amp; screenshots to plugin page

### 1.0.2
 - Version bump for WordPress plugins site

### 1.0.1
 - Updated to use `label->all_items` in taxonomy object for dropdowns before using `label->name`
 - Notice: This update may cause some labels to break, ensure you have set up your taxonomy properly including setting `label->all_items`

### 1.0.0
 - Initial Release


## License
 - Released under the [GPL v2](http://www.gnu.org/licenses/gpl-2.0.html) License
