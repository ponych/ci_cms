<?php
/**
 * User: cxx
 * Date: 2/24/14
 * Time: 9:57 PM
 * $file shared/helpers/common_helper
 */

if (!function_exists('setting')) {
    function setting($item) {
        $ci = get_instance();
        return $ci->setting->get($item);
    }
}

if (!function_exists('update_cache')) {
    function update_cache($array ,$fix = '') {
        static $ci = null;
        if (!$ci ) {
            $ci = get_instance();
            $ci->load->model('cache_mdl');
        }

        $array = is_array($array) ? $array : array($array);
        foreach ($array as $v) {
            $method = "update_{$v}_cache";
            $ci->cache_mdl->$method($fix);
        }
    }
}

if (!function_exists('array_to_cache')) {
    function array_to_cache($name, $array) {
        return '<?php if ( ! defined(\'IN_DILICMS\')) exit(\'No direct script access allowed\');' . PHP_EOL .
        '$' . $name . '=' . var_export($array, TRUE) . ';';
    }
}


