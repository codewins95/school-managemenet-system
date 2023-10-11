<?php


use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;


if (!function_exists('areActiveRoutes')) {
    function areActiveRoutes(array $routes, $output = "active")
    {
        foreach ($routes as $route) {
            if (Route::currentRouteName() == $route) return $output;
        }
    }
}


if (!function_exists('default_language')) {
    function default_language()
    {
        return env("DEFAULT_LANGUAGE");
    }
}

function remove_invalid_charcaters($str)
{
    $str = str_ireplace(array("\\"), '', $str);
    return str_ireplace(array('"'), '\"', $str);
}



if (!function_exists('app_timezone')) {
    function app_timezone()
    {
        return config('app.timezone');
    }
}



if (!function_exists('static_asset')) {

    function static_asset($path, $secure = null)
    {
        return app('url')->asset('public/' . $path, $secure);
    }
}


if (!function_exists('isHttps')) {
    function isHttps()
    {
        return !empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS']);
    }
}

if (!function_exists('getBaseURL')) {
    function getBaseURL()
    {
        $root = '//' . $_SERVER['HTTP_HOST'];
        $root .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

        return $root;
    }
}



if (!function_exists('formatBytes')) {
    function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');

        $bytes = max($bytes, 0);
        $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
        $pow = min($pow, count($units) - 1);

        // Uncomment one of the following alternatives
        $bytes /= pow(1024, $pow);
        // $bytes /= (1 << (10 * $pow));

        return round($bytes, $precision) . ' ' . $units[$pow];
    }
}




// Get URL params
if (!function_exists('get_url_params')) {
    function get_url_params($url, $key)
    {
        $query_str = parse_url($url, PHP_URL_QUERY);
        parse_str($query_str, $query_params);

        return $query_params[$key] ?? '';
    }
}
if (!function_exists('ProductImage')) {
    function ProductImage()
    {
        return 'uploaded_files/product_image/';
    }
}
if (!function_exists('showProductImage')) {

    function showProductImage($path, $secure = null)
    {
        return app('url')->asset('public/uploaded_files/product_image/' . $path, $secure);
    }
}

if (!function_exists('checkBoxValue')) {
    function checkBoxValue($value = null)
    {
        return $value != null ? 1 : 0;
    }
}

if (!function_exists('fileUpload')) {
    function fileUpload($img, $path, $user_file_name = null, $width = null, $height = null, $defaultFileName = null)
    {
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (isset($user_file_name) && $user_file_name != "" && file_exists($path . $user_file_name)) {
            unlink($path . $user_file_name);
        }
        // saving image in target path
        $imgName = $defaultFileName ? $defaultFileName . '.' . $img->getClientOriginalExtension() : uniqid() . time() . '.' . $img->getClientOriginalExtension();
        $imgPath = public_path($path . $imgName);
        // making image
        $makeImg = Image::make($img)->orientate();
        if ($width != null && $height != null && is_int($width) && is_int($height)) {
            $makeImg->fit($width, $height);
        }
        if ($makeImg->save($imgPath)) {
            return $imgName;
        }
        return false;
    }
}
if (!function_exists('userRoleName')) {
    function userRoleName()
    {
        if (Auth::user()->user_type === SUPARADMIN) {
            return "Supar Admin";
        } elseif (Auth::user()->user_type === ADMIN) {
            return "Admin";
        } elseif (Auth::user()->user_type === TEACHER) {
            return "Teacher";
        } elseif (Auth::user()->user_type === STUDENT) {
            return "Student";
        } elseif (Auth::user()->user_type === PARENTS) {
            return "Parent";
        }else{
            return "Guest";
        }
    }
}
