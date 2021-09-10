<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\x4f\x49\116\x47\137\103\122\x4f\x4e");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto ecogskgckaqscygu;
        qgosqkumckekweig:
        if ($uwqkkwmiiumuukoa) {
            goto cocuwykyogwqksuc;
        }
        goto wscmeosuswieugqc;
        guousgemwcuecmqe:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\x69\x73\x5f\162\x65\x73\164\x5f\x61\160\151\137\x72\x65\161\165\145\163\164", $uwqkkwmiiumuukoa);
        goto yccqiqeuguggucem;
        ecogskgckaqscygu:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto qgosqkumckekweig;
        qmawiqqoigwiwyqs:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto ugoeugewuucscmio;
        ugoeugewuucscmio:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto guousgemwcuecmqe;
        wscmeosuswieugqc:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\x45\121\x55\x45\x53\x54\137\x55\122\x49"))) {
            goto yqcumeywukecmiey;
        }
        goto qmawiqqoigwiwyqs;
        owkcoawgimcoyima:
        cocuwykyogwqksuc:
        goto gwiyiyawcwasesgc;
        yccqiqeuguggucem:
        yqcumeywukecmiey:
        goto owkcoawgimcoyima;
        gwiyiyawcwasesgc:
        return $uwqkkwmiiumuukoa;
        goto igiygcsmsmsaaqkq;
        igiygcsmsmsaaqkq:
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
