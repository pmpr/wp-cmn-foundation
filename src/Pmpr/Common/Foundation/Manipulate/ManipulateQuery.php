<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\x4f\111\116\x47\x5f\103\x52\117\116");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto yqcumeywukecmiey;
        ugoeugewuucscmio:
        auksmaiaiccmekam:
        goto guousgemwcuecmqe;
        ecogskgckaqscygu:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\105\x51\125\x45\x53\x54\x5f\125\122\111"))) {
            goto auksmaiaiccmekam;
        }
        goto qgosqkumckekweig;
        guousgemwcuecmqe:
        wquwyumimoaeeqkm:
        goto yccqiqeuguggucem;
        yqcumeywukecmiey:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto cocuwykyogwqksuc;
        qgosqkumckekweig:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto wscmeosuswieugqc;
        wscmeosuswieugqc:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto qmawiqqoigwiwyqs;
        qmawiqqoigwiwyqs:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\x69\x73\137\x72\145\163\164\x5f\141\x70\151\137\162\x65\x71\165\145\x73\164", $uwqkkwmiiumuukoa);
        goto ugoeugewuucscmio;
        yccqiqeuguggucem:
        return $uwqkkwmiiumuukoa;
        goto owkcoawgimcoyima;
        cocuwykyogwqksuc:
        if ($uwqkkwmiiumuukoa) {
            goto wquwyumimoaeeqkm;
        }
        goto ecogskgckaqscygu;
        owkcoawgimcoyima:
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
