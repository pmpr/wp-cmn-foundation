<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613bb98fa102d             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Decorator\DecoratorQuery;
use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce;
use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray;

class ManipulateQuery extends Manipulate
{
    
    function cgquaaukmyeomgms() : bool
    {
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms('DOING_CRON');
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        if (!$uwqkkwmiiumuukoa) {
            if ($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy('REQUEST_URI')) {
                $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
                $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
                $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy('is_rest_api_request', $uwqkkwmiiumuukoa);
            }
        }
        return $uwqkkwmiiumuukoa;
    }
    
    public static function eewqyocggsagyuis() : bool
    {
        return (!is_admin() || ManipulateAjax::mcgoysmkqsqooceq()) && !DecoratorQuery::cgquaaukmyeomgms() && !self::aqwquwewocyewasw();
    }
    
    public static function euqowsuwmgokuqqo() : bool
    {
        return is_admin() && !ManipulateAjax::mcgoysmkqsqooceq();
    }
    
    public static function qooeaookuemoqecm($oaukocmsckciqaok, $ggauoeuaesiymgee = null)
    {
        global $wp_query;
        return ManipulateArray::get($wp_query, $oaukocmsckciqaok, $ggauoeuaesiymgee);
    }
}
