<?php
/*
Plugin Name: Redirect Users to Primary Site
Plugin URI:
Description: Never see "you do not currently have privileges on this site" when logging in on your multisite ever again!
Version: 2014.06.02
Author: khromov
Author URI: https://profiles.wordpress.org/khromov
License: GPL2
*/
 
/* http://premium.wpmudev.org/forums/topic/redirect-users-to-their-blogs-homepage */
add_filter('login_redirect', function($redirect_to, $request_redirect_to, $user)
{
    global $blog_id;
    if (!is_wp_error($user) && $user->ID != 0)
    {
        $user_info = get_userdata($user->ID);
        if ($user_info->primary_blog)
        {
            $primary_url = get_blogaddress_by_id($user_info->primary_blog) . 'wp-admin/';
            $user_blogs = get_blogs_of_user($user->ID);
 
            //Loop and see if user has access
            $allowed = false;
            foreach($user_blogs as $user_blog)
            {
                if($user_blog->userblog_id == $blog_id)
                {
                    $allowed = true;
                    break;
                }
            }
 
            //Let users login to others blog IF we can get their primary blog URL and they are not allowed on this blog
            if ($primary_url && !$allowed)
            {
                wp_redirect($primary_url);
                die();
            }
        }
    }
    return $redirect_to;
}, 100, 3);
