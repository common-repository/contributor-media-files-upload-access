<?php 
/*
Plugin Name: Contributor Media Files Upload Access
Plugin URI: http://codingbank.com/plugins/media-upload-access-contributor
Description: Just use Allow Media files Upload access for Contributor users role.
Version: 1.0
Author: Md Abul Bashar
Author URI: http://www.codingbank.com/
*/

if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');

function allow_contributor_uploads() {
    $contributor = get_role('contributor');
    $contributor->add_cap('upload_files');
}



?>