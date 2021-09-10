<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b1e8aa0c03             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\x44\117\x49\x4e\x47\137\103\x52\117\x4e");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto eeowmomscuckuoum;
        ecogskgckaqscygu:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\x69\163\137\x72\x65\163\x74\137\x61\x70\x69\137\x72\145\x71\x75\145\163\x74", $uwqkkwmiiumuukoa);
        goto qgosqkumckekweig;
        cocuwykyogwqksuc:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto ecogskgckaqscygu;
        eeowmomscuckuoum:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto auksmaiaiccmekam;
        yqcumeywukecmiey:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto cocuwykyogwqksuc;
        qgosqkumckekweig:
        kiwsaeeagagkwooc:
        goto wscmeosuswieugqc;
        auksmaiaiccmekam:
        if ($uwqkkwmiiumuukoa) {
            goto wscymqowwagkecqk;
        }
        goto wquwyumimoaeeqkm;
        qmawiqqoigwiwyqs:
        return $uwqkkwmiiumuukoa;
        goto ugoeugewuucscmio;
        wscmeosuswieugqc:
        wscymqowwagkecqk:
        goto qmawiqqoigwiwyqs;
        wquwyumimoaeeqkm:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\x45\x51\x55\x45\x53\124\137\x55\x52\x49"))) {
            goto kiwsaeeagagkwooc;
        }
        goto yqcumeywukecmiey;
        ugoeugewuucscmio:
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
