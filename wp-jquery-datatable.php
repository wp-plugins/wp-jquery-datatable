<?php
/**
 * Plugin Name: WP jQuery DataTable
 * Description: Features can be settings to meet your exact needs for your table implementations. like Paging,Ordering,Searching, etc... 
 * Author: biztechc
 * Author URI: http://www.biztechconsultancy.com
 * Version: 1.0.1
 */

add_action('admin_menu', 'wp_jdt_create_menu');
function wp_jdt_create_menu(){

    //create admin side menu
    add_menu_page('WP jQuery DataTable Settings', 'WP jQuery DataTable', 'administrator', 'wp-jdt', 'wp_jdt_settings_page');

    //call register settings function
    add_action( 'admin_init', 'wp_jdt_settings' );
}
                                                           
function wp_jdt_settings(){
//register our settings
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_info' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_paging' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_page_length' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_paging_type' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_b_length_change' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_ordering' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_order_row' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_order_row_sort' );
    register_setting( 'wp-jdt-settings-group', 'wp_jdt_searching' );
}

function wp_jdt_settings_page(){ 
// Admin side page options
    $wp_jdt_info = get_option('wp_jdt_info');
    $wp_jdt_paging = get_option('wp_jdt_paging');
    $wp_jdt_page_length = get_option('wp_jdt_page_length');
    $wp_jdt_paging_type = get_option('wp_jdt_paging_type');
    $wp_jdt_b_length_change = get_option('wp_jdt_b_length_change');
    $wp_jdt_ordering = get_option('wp_jdt_ordering');
    $wp_jdt_order_row = get_option('wp_jdt_order_row');
    $wp_jdt_order_row_sort = get_option('wp_jdt_order_row_sort');
    $wp_jdt_searching = get_option('wp_jdt_searching');
    ?>
        <div class='wrap'>
            <h2>WP jQuery DataTable Settings</h2>

            <form method='post' action='options.php'>
                <?php settings_fields( 'wp-jdt-settings-group' ); ?>
                <?php do_settings_sections( 'wp-jdt-settings-group' ); ?>
                <table class='form-table'>
                    <tr valign='top'>
                        <th scope='row'>Show Information</th>
                        <td>
                            <fieldset>
                                <?php
                                    if($wp_jdt_info != "false") {
                                        ?>
                                            <label title="Yes"><input type="radio" checked="checked" value="true" name="wp_jdt_info"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" value="false" name="wp_jdt_info"> <span>No</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Yes"><input type="radio"  value="true" name="wp_jdt_info"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" checked="checked" value="false" name="wp_jdt_info"> <span>No</span></label><br>
                                        <?php 
                                    }
                                ?>
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Pagination</th>
                        <td>
                             <fieldset>
                                <?php
                                    if($wp_jdt_paging != "false") {
                                        ?>
                                            <label title="Yes"><input type="radio" checked="checked" value="true" name="wp_jdt_paging"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" value="false" name="wp_jdt_paging"> <span>No</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Yes"><input type="radio"  value="true" name="wp_jdt_paging"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" checked="checked" value="false" name="wp_jdt_paging"> <span>No</span></label><br>
                                        <?php 
                                    }
                                ?>
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Pagination Type</th>
                        <td>
                            <fieldset>
                                <?php
                                    if($wp_jdt_paging_type == "full_numbers"){
                                        ?>
                                            <label title="Simple"><input type="radio"  value="simple" name="wp_jdt_paging_type"> <span>Simple</span></label><br>
                                            <label title="Simple Numbers"><input type="radio" value="simple_numbers" name="wp_jdt_paging_type"> <span>Simple Numbers</span></label><br>
                                            <label title="Full"><input type="radio" value="full" name="wp_jdt_paging_type"> <span>Full</span></label><br>
                                            <label title="Full Numbers"><input type="radio" checked="checked" value="full_numbers" name="wp_jdt_paging_type"> <span>Full Numbers</span></label><br>
                                        <?php 
                                    }
                                    else if($wp_jdt_paging_type == "full") {
                                        ?>
                                            <label title="Simple"><input type="radio"  value="simple" name="wp_jdt_paging_type"> <span>Simple</span></label><br>
                                            <label title="Simple Numbers"><input type="radio"  value="simple_numbers" name="wp_jdt_paging_type"> <span>Simple Numbers</span></label><br>
                                            <label title="Full"><input type="radio" checked="checked" value="full" name="wp_jdt_paging_type"> <span>Full</span></label><br>
                                            <label title="Full Numbers"><input type="radio" value="full_numbers" name="wp_jdt_paging_type"> <span>Full Numbers</span></label><br>
                                        <?php 
                                    }
                                    else if($wp_jdt_paging_type == "simple_numbers"){
                                        ?>
                                            <label title="Simple"><input type="radio"  value="simple" name="wp_jdt_paging_type"> <span>Simple</span></label><br>
                                            <label title="Simple Numbers"><input type="radio" checked="checked" value="simple_numbers" name="wp_jdt_paging_type"> <span>Simple Numbers</span></label><br>
                                            <label title="Full"><input type="radio"  value="full" name="wp_jdt_paging_type"> <span>Full</span></label><br>
                                            <label title="Full Numbers"><input type="radio" value="full_numbers" name="wp_jdt_paging_type"> <span>Full Numbers</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Simple"><input type="radio" checked="checked" value="simple" name="wp_jdt_paging_type"> <span>Simple</span></label><br>
                                            <label title="Simple Numbers"><input type="radio" value="simple_numbers" name="wp_jdt_paging_type"> <span>Simple Numbers</span></label><br>
                                            <label title="Full"><input type="radio" value="full" name="wp_jdt_paging_type"> <span>Full</span></label><br>
                                            <label title="Full Numbers"><input type="radio" value="full_numbers" name="wp_jdt_paging_type"> <span>Full Numbers</span></label><br>
                                        <?php     
                                    }
                                ?>

                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Rows Per Page</th>
                        <td>
                            <input type="number" class="small-text" value="<?php if($wp_jdt_page_length != NULL) { echo $wp_jdt_page_length; }else { echo "10"; }?>"  min="1" step="1" name="wp_jdt_page_length">
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Show Per Page DropDown</th>
                        <td>
                             <fieldset>
                                <?php
                                    if($wp_jdt_b_length_change != "false") {
                                        ?>
                                            <label title="Yes"><input type="radio" checked="checked" value="true" name="wp_jdt_b_length_change"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" value="false" name="wp_jdt_b_length_change"> <span>No</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Yes"><input type="radio"  value="true" name="wp_jdt_b_length_change"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" checked="checked" value="false" name="wp_jdt_b_length_change"> <span>No</span></label><br>
                                        <?php 
                                    }
                                ?>
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Ordering</th>
                        <td>
                             <fieldset>
                                <?php
                                    if($wp_jdt_ordering != "false") {
                                        ?>
                                            <label title="Yes"><input type="radio" checked="checked" value="true" name="wp_jdt_ordering"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" value="false" name="wp_jdt_ordering"> <span>No</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Yes"><input type="radio"  value="true" name="wp_jdt_ordering"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" checked="checked" value="false" name="wp_jdt_ordering"> <span>No</span></label><br>
                                        <?php 
                                    }
                                ?>
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Specific Column Order</th>
                        <td>
                            <input type="number" class="small-text" value="<?php if($wp_jdt_order_row != NULL) { echo $wp_jdt_order_row; }else { echo "0"; }?>" min="0" step="1" name="wp_jdt_order_row"><br>
                            <br>
                            <fieldset>
                                <?php 
                                    if($wp_jdt_order_row_sort != "desc") {
                                        ?>
                                            <label title="Ascending Order"><input type="radio" checked="checked" value="asc" name="wp_jdt_order_row_sort"> <span>Ascending Order</span></label><br>
                                            <label title="Descending Order"><input type="radio" value="desc" name="wp_jdt_order_row_sort"> <span>Descending Order</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Ascending Order"><input type="radio"  value="asc" name="wp_jdt_order_row_sort"> <span>Ascending Order</span></label><br>
                                            <label title="Descending Order"><input type="radio" checked="checked" value="desc" name="wp_jdt_order_row_sort"> <span>Descending Order</span></label><br>
                                        <?php                                         
                                    } 
                                ?>                                 
                            </fieldset>
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'>Searching</th>
                        <td>
                             <fieldset>
                                <?php
                                    if($wp_jdt_searching != "false") {
                                        ?>
                                            <label title="Yes"><input type="radio" checked="checked" value="true" name="wp_jdt_searching"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" value="false" name="wp_jdt_searching"> <span>No</span></label><br>
                                        <?php 
                                    }
                                    else {
                                        ?>
                                            <label title="Yes"><input type="radio"  value="true" name="wp_jdt_searching"> <span>Yes</span></label><br>
                                            <label title="No"><input type="radio" checked="checked" value="false" name="wp_jdt_searching"> <span>No</span></label><br>
                                        <?php 
                                    }
                                ?>
                            </fieldset>
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
    <?php 
}
 
add_action('wp_enqueue_scripts','wp_jdt_style_and_script');  // add custom style and script
function wp_jdt_style_and_script()
{
    // css
    wp_register_style( 'jdt-style-data-tables', plugins_url('css/jquery.dataTables.css', __FILE__) );
    
    // js     
    wp_enqueue_script( 'jdt-js-datatables', plugins_url('js/jquery.dataTables.js', __FILE__), array('jquery') );
}

add_shortcode( 'wp_jdt', 'wp_jdt_shortcode' ); // add shortcode   [wp_jdt id="test" info="true" paging="true" page_length="7" paging_type="full_numbers" b_length_change="true" ordering="true" order_row_number="3" order_row_number_sort="desc" searching="true"]
function wp_jdt_shortcode( $atts, $content = "" ) {
    
    $wp_jdt_info = get_option('wp_jdt_info');
    $wp_jdt_paging = get_option('wp_jdt_paging');
    $wp_jdt_page_length = get_option('wp_jdt_page_length');
    $wp_jdt_paging_type = get_option('wp_jdt_paging_type');
    $wp_jdt_b_length_change = get_option('wp_jdt_b_length_change');
    $wp_jdt_ordering = get_option('wp_jdt_ordering');
    $wp_jdt_order_row = get_option('wp_jdt_order_row');
    $wp_jdt_order_row_sort = get_option('wp_jdt_order_row_sort');
    $wp_jdt_searching = get_option('wp_jdt_searching');
    
    $atts = shortcode_atts( array(
        'id' => "example",
        'info' => "$wp_jdt_info",
        'paging' => "$wp_jdt_paging",
        'page_length' => "$wp_jdt_page_length",
        'paging_type' => "$wp_jdt_paging_type",
        'b_length_change' => "$wp_jdt_b_length_change",
        'ordering' => "$wp_jdt_ordering",
        'order_row_number' => "$wp_jdt_order_row",
        'order_row_number_sort' => "$wp_jdt_order_row_sort",
        'searching' => "$wp_jdt_searching",
    ), $atts, 'wp_jdt' );

    $wp_jdt_script .= "";    
    $wp_jdt_script .= "<script type='text/javascript' language='javascript' class='init'> \n";
        $wp_jdt_script .= "jQuery(document).ready(function() { \n"; 
           
            $wp_jdt_script .= "jQuery('#$atts[id]').DataTable({ \n";    
                $wp_jdt_script .= "'info': $atts[info], \n";
                $wp_jdt_script .= "'paging': $atts[paging], \n";
                if($atts[page_length] > 0) {
                    $wp_jdt_script .= "'pageLength': $atts[page_length], \n"; 
                }
                else {
                    $wp_jdt_script .= "'pageLength': $wp_jdt_page_length, \n";    
                }
                
                $wp_jdt_script .= "'pagingType': '$atts[paging_type]', \n";
                $wp_jdt_script .= "'bLengthChange': $atts[b_length_change], \n";
                $wp_jdt_script .= "'ordering': $atts[ordering], \n";
                $wp_jdt_script .= "'order': [$atts[order_row_number],'$atts[order_row_number_sort]'], \n";
                $wp_jdt_script .= "'searching': $atts[searching], \n";
            $wp_jdt_script .= "} ); \n";
            
            $wp_jdt_script .= "jQuery('#$atts[id]_wrapper select').prepend('<option value=$atts[page_length]>Select</option>').val('');
                            jQuery('#$atts[id]_wrapper select')[0].options[0].selected = true;  ";
            
        $wp_jdt_script .= "} ); \n";
    $wp_jdt_script .= "</script>";
    
    // css and js
    wp_enqueue_style( 'jdt-style-data-tables' );
    wp_enqueue_script( 'jdt-js-datatables' );
    
    return  $wp_jdt_script;
}

register_uninstall_hook( __FILE__, 'wp_jdt_uninstall' ); // uninstall plug-in
function wp_jdt_uninstall() {
   delete_option('wp_jdt_info');
   delete_option('wp_jdt_paging');
   delete_option('wp_jdt_page_length');
   delete_option('wp_jdt_paging_type');
   delete_option('wp_jdt_b_length_change');
   delete_option('wp_jdt_ordering');
   delete_option('wp_jdt_order_row');
   delete_option('wp_jdt_order_row_sort');
   delete_option('wp_jdt_searching'); 
} 