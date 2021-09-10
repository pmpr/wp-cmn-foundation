<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\x4f\x49\x4e\x47\137\103\122\117\x4e");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto yqcumeywukecmiey;
        qmawiqqoigwiwyqs:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\x69\163\x5f\162\x65\x73\164\137\x61\x70\151\137\162\x65\161\165\145\x73\x74", $uwqkkwmiiumuukoa);
        goto ugoeugewuucscmio;
        guousgemwcuecmqe:
        wquwyumimoaeeqkm:
        goto yccqiqeuguggucem;
        cocuwykyogwqksuc:
        if ($uwqkkwmiiumuukoa) {
            goto wquwyumimoaeeqkm;
        }
        goto ecogskgckaqscygu;
        ugoeugewuucscmio:
        auksmaiaiccmekam:
        goto guousgemwcuecmqe;
        ecogskgckaqscygu:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\x45\x51\125\x45\x53\124\x5f\125\x52\x49"))) {
            goto auksmaiaiccmekam;
        }
        goto qgosqkumckekweig;
        yccqiqeuguggucem:
        return $uwqkkwmiiumuukoa;
        goto owkcoawgimcoyima;
        qgosqkumckekweig:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto wscmeosuswieugqc;
        yqcumeywukecmiey:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto cocuwykyogwqksuc;
        wscmeosuswieugqc:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto qmawiqqoigwiwyqs;
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
