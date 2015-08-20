=== WP jQuery DataTable ===
Contributors: biztechc
Tags: WP jQuery DataTable, jQuery, jQuery DataTable, Table  
Requires at least: 3.6.1
Tested up to: 4.3
Stable tag: 1.0.1
License: GPLv2 or later

Features can be settings to meet your exact needs for your table implementations. like Paging,Ordering,search, etc... 

== Description ==

Plugin's settings will display 'WP jQuery DataTable' tab

1. WP Jquery Data table plugin can help the WordPress website owner to insert table anywhere for displaying any information in tabular form, which will also have some cool features like option of selecting no. of pages, columns and pagination to be displayed in one page along with the search option to access the relevant data immediately from the long table, saving time and effort. 
2. This plugin is useful for exact needs for your table implementations.
3. Short code is : [wp_jdt id="table  id here"]    
4. You can apply this short code into page/post's editor or also can add into PHP file. 
   Like 
   `<?php echo do_shortcode('[wp_jdt id="table  id here"]');?>`
   
= Features =
1. Show information about the table
2. Allow table pagination, number of rows to display on page and pagination button display options.
3. Show table entries options
4. Allow table column ordering, define which column(s) the order and apply order (asc or desc.
5. Allow table searching 

== Installation ==

1. Copy the entire /wp-jquery-datatable/ directory into your /wp-content/plugins/ directory.
2. Activate the plugin.
3. New Tab called WP jQuery DataTable will be genereate.
4. You can add set setting.
5. Use short code at any pages/posts e.g.[wp_jdt id="table  id here"]

=  Plugin's settings =

First of Save Plugin's settings. It will display 'WP jQuery DataTable' tab

1. WP Jquery Data table plugin can help the WordPress website owner to insert table anywhere for displaying any information in tabular form, which will also have some cool features like option of selecting no. of pages, columns and pagination to be displayed in one page along with the search option to access the relevant data immediately from the long table, saving time and effort. 
2. This plugin is useful for exact needs for your table implementations.
3. Short code is : [wp_jdt id="table  id here"]    
4. You can apply this short code into page/post's editor or also can add into PHP file. 
   Like 
   `<?php echo do_shortcode('[wp_jdt id="table  id here"]');?>` 

= Shortcode Parameters =

1. id: =(Required) Used table id as a parameter of id. Example [wp_jdt id="demo"] and table is `<table id="demo">...</table>`  
2. info: Show information about the table. It return boolean. By default 'true'. Example [wp_jdt info="false"]
3. paging: Allow table pagination. It return boolean. By default 'true'. Example [wp_jdt paging="false"]
4. page_length: Allow number of rows to display on page when using pagination. It return number. By default '10'. Example [wp_jdt page_length="5"]
5. paging_type: Allow pagination button display options when using pagination. Options: simple, simple_numbers, full and full_numbers. By default 'simple'. Example [paging_type page_length="simple"]
6. b_length_change: Show table entries options. It return boolean. By default 'true'. Example [wp_jdt b_length_change="false"] 
7. ordering: Allow table column ordering. It return boolean. By default 'true'. Example [wp_jdt ordering="false"]
8. i. order_row_number: You can define which column(s) the order in table. It return number. By default '0'. Example [wp_jdt order_row_number="3"]
   ii. order_row_number_sort: You can apply order (asc or desc). By default 'asc'. Example [wp_jdt order_row_number_sort="desc"]
8. searching: Allow table searching. It return boolean. By default 'true'. Example [wp_jdt searching="false"]   

== Frequently Asked Questions ==
Is this plugin prepared for multisites? Yes.

== Screenshots ==

1. screenshot-1.png
2. screenshot-2.png

== Changelog ==

= 1.0.0 =
* Stable Version release

= 1.0.1 =
* Solved jquery confliction

== Upgrade Notice ==
