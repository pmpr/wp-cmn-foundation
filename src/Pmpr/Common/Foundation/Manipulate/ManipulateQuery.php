<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\117\111\x4e\x47\x5f\x43\x52\117\116");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto cocuwykyogwqksuc;
        qmawiqqoigwiwyqs:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto ugoeugewuucscmio;
        ecogskgckaqscygu:
        if ($uwqkkwmiiumuukoa) {
            goto yqcumeywukecmiey;
        }
        goto qgosqkumckekweig;
        yccqiqeuguggucem:
        yqcumeywukecmiey:
        goto owkcoawgimcoyima;
        wscmeosuswieugqc:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto qmawiqqoigwiwyqs;
        owkcoawgimcoyima:
        return $uwqkkwmiiumuukoa;
        goto gwiyiyawcwasesgc;
        cocuwykyogwqksuc:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto ecogskgckaqscygu;
        guousgemwcuecmqe:
        wquwyumimoaeeqkm:
        goto yccqiqeuguggucem;
        qgosqkumckekweig:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\x45\121\125\105\x53\x54\x5f\x55\x52\111"))) {
            goto wquwyumimoaeeqkm;
        }
        goto wscmeosuswieugqc;
        ugoeugewuucscmio:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\151\163\137\x72\x65\x73\164\137\141\x70\x69\x5f\x72\145\x71\x75\x65\163\164", $uwqkkwmiiumuukoa);
        goto guousgemwcuecmqe;
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
