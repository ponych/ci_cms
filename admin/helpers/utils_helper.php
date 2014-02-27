<?php if ( ! defined('APPPATH')) exit('No direct script access allowed');
/**
 * User: cxx
 * Date: 2/24/14
 * Time: 10:04 PM
 */

/** 面包屑导航 */
if (!function_exists('make_bread')) {
    function make_bread($flour) {
        $bread = array();
        foreach($flour as $name => $link)
        {
            if(empty($link))
            {
                // $bread[] = "<span class=\"bread_name\"><a href=\"javascript:void(0);\">$name</a></span>";
                $bread[] = "<span class=\"bread_name\">$name</span>";
            }
            else
            {
                $bread[] = "<span class=\"bread_name\"><a href=\"$link\" target=\"_self\">$name</a></span>";
            }
        }
        return implode('<span class="bread_gt">&gt;</span>', $bread);

    }
}