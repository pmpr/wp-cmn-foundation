<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b5973b89a9             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Theme;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface;
use Pmpr\Common\Foundation\Template\Template;

class ManipulateBootstrap extends ManipulateHTML
{
    
    public static function oockkqiqsssakuug($uamcoiueqaamsqma, $iqaosyayeiuaisqi, $wwgucssaecqekuek = [], $wygwqsssewkqooqm = true) : string
    {
        goto ogywamggekuoqaic;
        owoiouaomwqgksqc:
        mymeomeemsgoeuck:
        goto oaawymkyguukokoc;
        csagaieykqsoyyyo:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto owoiouaomwqgksqc;
        oaawymkyguukokoc:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\163", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto soqmguugasswqwki;
        ogywamggekuoqaic:
        if (!$wygwqsssewkqooqm) {
            goto mymeomeemsgoeuck;
        }
        goto csagaieykqsoyyyo;
        soqmguugasswqwki:
        return self::uuccukgasskgimsq("\144\151\166", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto aeokmsquaasumuuo;
        aeokmsquaasumuuo:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\x61\154\145\x72\x74\x20\141\154\x65\x72\164\55{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\x20\x61\x6c\145\162\x74\55\144\151\x73\x6d\x69\x73\163\x69\142\x6c\x65" : '') . "\40\x66\141\x64\145\40\x73\150\x6f\x77\40\156\x6f\x2d\x6d\x61\x72\x67\151\x6e";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto cqmwkoscgigmawys;
        ksasgwowcqqegcic:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto mkmgkgowgamqakqi;
        mkmgkgowgamqakqi:
        return self::uuccukgasskgimsq("\142\165\164\164\157\x6e", ["\164\171\160\145" => "\142\165\x74\x74\157\x6e", "\x63\x6c\141\163\x73" => "\x63\154\157\163\145", "\141\x72\151\141\x2d\154\x61\x62\145\x6c" => __("\x43\154\x6f\163\145", PR__CMN__FOUNDATION), "\144\141\x74\x61\x2d\144\151\163\155\151\x73\x73" => "\141\x6c\145\x72\164"], $wkaqekwwgqsqwcoi);
        goto eocoacoiikkigoiu;
        cqmwkoscgigmawys:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\x62\x6f\x6f\x74\163\164\162\x61\x70\x5f\141\x6c\x65\x72\164\x5f\144\x69\163\x6d\x69\x73\x73\x5f\x69\x63\x6f\x6e", IconFontawesomeInterface::ICON_XMARK);
        goto oeayowwwskuwywei;
        oeayowwwskuwywei:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\142\157\157\x74\x73\164\x72\x61\160\x5f\x61\x6c\x65\x72\164\x5f\144\151\163\x6d\151\x73\x73\x5f\x61\164\164\x72\x73", ["\143\x6c\x61\163\163" => "\151\143\x6f\156\x2d\147\x72\x61\x79\x2d\x36\x30\60\40\151\143\157\156\55\x78\x73"], $wwgucssaecqekuek);
        goto ksasgwowcqqegcic;
        eocoacoiikkigoiu:
    }
}
