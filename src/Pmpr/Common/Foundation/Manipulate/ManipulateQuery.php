<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\x44\117\x49\x4e\107\137\103\122\117\116");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto cocuwykyogwqksuc;
        ecogskgckaqscygu:
        if ($uwqkkwmiiumuukoa) {
            goto yqcumeywukecmiey;
        }
        goto qgosqkumckekweig;
        qmawiqqoigwiwyqs:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto ugoeugewuucscmio;
        wscmeosuswieugqc:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto qmawiqqoigwiwyqs;
        guousgemwcuecmqe:
        wquwyumimoaeeqkm:
        goto yccqiqeuguggucem;
        ugoeugewuucscmio:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\x69\163\x5f\162\145\x73\x74\x5f\141\x70\x69\137\162\x65\161\165\145\163\164", $uwqkkwmiiumuukoa);
        goto guousgemwcuecmqe;
        owkcoawgimcoyima:
        return $uwqkkwmiiumuukoa;
        goto gwiyiyawcwasesgc;
        yccqiqeuguggucem:
        yqcumeywukecmiey:
        goto owkcoawgimcoyima;
        cocuwykyogwqksuc:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto ecogskgckaqscygu;
        qgosqkumckekweig:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\105\x51\125\x45\x53\x54\x5f\x55\x52\x49"))) {
            goto wquwyumimoaeeqkm;
        }
        goto wscmeosuswieugqc;
        gwiyiyawcwasesgc:
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
