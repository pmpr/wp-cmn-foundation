<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Decorator;


class DecoratorFile extends Decorator
{
    
    public static function oemywwmmmiywiqai() : array
    {
        return wp_upload_dir();
    }
    
    public static function wayeasoyaomiwwmc() : string
    {
        return get_home_path();
    }
    
    public static function cgwcgscqeqauaagi($mkomwsiykqigmqca) : string
    {
        return wp_normalize_path($mkomwsiykqigmqca);
    }
    
    public static function qsyguaycgacaggsu($qogsmwakwacwqogk = null, $qysuisecuceywamu = true, $cqgoimumaewouews = false) : array
    {
        if (!function_exists('wp_handle_sideload')) {
            require_once ABSPATH . 'wp-admin/includes/file.php';
        }
        return wp_handle_sideload($qogsmwakwacwqogk, $qysuisecuceywamu, $cqgoimumaewouews);
    }
}
