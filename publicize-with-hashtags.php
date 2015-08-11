<?php
/*
Plugin Name: Publicize With Hashtags
Plugin URI: http://www.ryadel.com/works/publicize-with-hashtags/
Description: Automatically append hashtags to any content sent by Jetpack's Publicize module: hashtags will be created using post tags: dupe check and an optional length-based threshold are also included.
Version: 0.1.2
License: GPLv2 or later
Author: Darkseal
Author URI: http://www.ryadel.com/
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

// If Jetpack is not installed or Publicize module isn't active, just exit now.
if (!class_exists('Jetpack') || !Jetpack::is_module_active('publicize')) return;

function publicize_with_hashtags() {
    
    // Set an optional character threshold (set to null to disable).
    // If you set it as a positive integer, hashtags will be appended only until this threshold is reached. 
    // Default is 118, which is good for Twitter considering a default, non-https url length, which is 22 chars as stated by Twitter standards.
    // For more info, see https://dev.twitter.com/overview/api/counting-characters and https://dev.twitter.com/overview/t.co Twitter official docs.
    // Suggested values: 
    // 118      if you plan to use only HTTP URLs
    // 117      if you plan to use both HTTP and HTTPS (or only HTTPS) URLs
    // 140      if you don't plan to append URL infos to your posts
    // 0        or <null> or <false>, if you want to tufn-off this check and append hashtags without any char limits - good if you're only using Facebook sharing.
    $mess_max_length = 118;
    
    // Set it to TRUE to strip all spaces when converting Tags to Hashtags, i.e. 'Windows 8' -> '#Windows8', FALSE to keep only first.
    // Default is TRUE (strip all spaces).
    $strip_spaces = true;
    
    // meta tag used by Publicize to store social message. Change this only if you're really know what you're doing.
    // If you do and you feel like you should, please contact me so I'll update the plugin aswell.
    $meta = '_wpas_mess';
    
    $p = get_post();
    if (empty($p)) return;
    // Get the current post social message
    $mess = get_post_meta($p->ID, $meta, true);
    // Performance-wise length check: do nothing if we're already out of threshold.
    if (!empty($mess) && !empty($mess_max_length) && $mess_max_length <= (strlen($mess))) return;
    // Get the post tags array
    $ta = get_the_tags($p->ID);	
    // Performance-wise tag check: do nothing if we don't (yet) have tags to process.
    if (empty($ta)) return;

    // From now on, we mean business. Let's start by initializing the social message (if needed).
    if (empty($mess)) $mess = '';
    // Create list of tags with hashtags in front of them until threshold is reached
    foreach ($ta as $t) {
        // Create the hashtag, stripping spaces if needed.
        $ht = '#' . (($strip_spaces) ? str_replace(' ', '', $t->name) : $t->name);
        // only process newly-added hashtags, skipping duplicate ones
        if (stripos($mess,$ht) === false) {	
            if (!empty($mess_max_length) && $mess_max_length <= (strlen($mess) + strlen($ht))) break;
            $mess .= ' '.$ht;
        }
    }
    // Update the new social message
    update_post_meta($p->ID, $meta, $mess);
}

// Hook the plugin action to 'save_post' handler.
add_action('save_post', 'publicize_with_hashtags', 99);
?>