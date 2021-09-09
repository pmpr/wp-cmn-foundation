<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
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
        return DecoratorQuery::cgquaaukmyeomgms() || self::cmaecekuqkwmemms("\104\x4f\x49\116\107\x5f\103\122\x4f\x4e");
    }
    
    public static function aqwquwewocyewasw() : bool
    {
        goto iigikgyaeuikoggm;
        iigikgyaeuikoggm:
        $uwqkkwmiiumuukoa = ManipulateWoocommerce::aqwquwewocyewasw();
        goto soqqkwceaykieigm;
        auqwakoacamemaaw:
        qmuwqwawwwwiaiyq:
        goto uqsggeawaemaocua;
        sccsewaywmwqoikg:
        if (!($xeciwimgioieayek = ManipulateServer::giiecckwoyiawoyy("\122\x45\x51\125\105\x53\124\137\x55\122\111"))) {
            goto eaigiqugoyomawia;
        }
        goto aygawequkeicqqkc;
        soqqkwceaykieigm:
        if ($uwqkkwmiiumuukoa) {
            goto qmuwqwawwwwiaiyq;
        }
        goto sccsewaywmwqoikg;
        aygawequkeicqqkc:
        $yuwymayicwwqiske = trailingslashit(rest_get_url_prefix());
        goto qyegguguqsoeccia;
        qyegguguqsoeccia:
        $uwqkkwmiiumuukoa = false !== strpos($xeciwimgioieayek, $yuwymayicwwqiske);
        goto oguoauieggcougge;
        uqsggeawaemaocua:
        return $uwqkkwmiiumuukoa;
        goto okuwiumssgqqaggm;
        gmossqyimoswkoms:
        eaigiqugoyomawia:
        goto auqwakoacamemaaw;
        oguoauieggcougge:
        $uwqkkwmiiumuukoa = DecoratorHook::sscegwueamckwmcy("\151\x73\x5f\x72\x65\x73\x74\137\x61\160\151\x5f\x72\145\161\x75\145\x73\164", $uwqkkwmiiumuukoa);
        goto gmossqyimoswkoms;
        okuwiumssgqqaggm:
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
