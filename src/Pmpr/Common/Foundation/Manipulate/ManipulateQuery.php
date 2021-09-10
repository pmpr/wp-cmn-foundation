<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\x4f\111\116\x47\x5f\x43\122\x4f\116");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto cocuwykyogwqksuc;
        owkcoawgimcoyima:
        return $uwqkkwmiiumuukoa;
        goto gwiyiyawcwasesgc;
        qmawiqqoigwiwyqs:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto ugoeugewuucscmio;
        ugoeugewuucscmio:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\151\x73\x5f\162\x65\x73\x74\x5f\141\x70\x69\137\162\x65\161\x75\145\163\164", $uwqkkwmiiumuukoa);
        goto guousgemwcuecmqe;
        cocuwykyogwqksuc:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto ecogskgckaqscygu;
        ecogskgckaqscygu:
        if ($uwqkkwmiiumuukoa) {
            goto yqcumeywukecmiey;
        }
        goto qgosqkumckekweig;
        yccqiqeuguggucem:
        yqcumeywukecmiey:
        goto owkcoawgimcoyima;
        qgosqkumckekweig:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\x52\x45\x51\125\105\123\124\137\x55\122\x49"))) {
            goto wquwyumimoaeeqkm;
        }
        goto wscmeosuswieugqc;
        guousgemwcuecmqe:
        wquwyumimoaeeqkm:
        goto yccqiqeuguggucem;
        wscmeosuswieugqc:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto qmawiqqoigwiwyqs;
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
