<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b3993be3fb             |
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
        ogywamggekuoqaic:
        if (!$wygwqsssewkqooqm) {
            goto mymeomeemsgoeuck;
        }
        goto csagaieykqsoyyyo;
        oaawymkyguukokoc:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto soqmguugasswqwki;
        csagaieykqsoyyyo:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto owoiouaomwqgksqc;
        soqmguugasswqwki:
        return self::uuccukgasskgimsq("\144\151\166", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto aeokmsquaasumuuo;
        owoiouaomwqgksqc:
        mymeomeemsgoeuck:
        goto oaawymkyguukokoc;
        aeokmsquaasumuuo:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\141\154\x65\162\164\40\x61\154\x65\162\x74\55{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\x20\141\x6c\x65\162\x74\x2d\144\x69\x73\155\151\163\163\151\x62\x6c\x65" : '') . "\40\146\141\x64\x65\40\163\x68\157\x77\40\x6e\x6f\55\155\141\x72\147\x69\x6e";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto cqmwkoscgigmawys;
        ksasgwowcqqegcic:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto mkmgkgowgamqakqi;
        oeayowwwskuwywei:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\142\x6f\x6f\164\163\x74\x72\141\x70\x5f\141\154\x65\162\x74\x5f\144\151\x73\x6d\151\163\163\x5f\x61\x74\164\x72\x73", ["\143\154\141\x73\163" => "\151\143\x6f\156\55\x67\x72\x61\x79\x2d\66\60\x30\40\151\143\157\x6e\x2d\170\163"], $wwgucssaecqekuek);
        goto ksasgwowcqqegcic;
        mkmgkgowgamqakqi:
        return self::uuccukgasskgimsq("\142\165\x74\x74\x6f\x6e", ["\x74\x79\x70\145" => "\x62\x75\x74\x74\x6f\156", "\x63\154\x61\163\x73" => "\143\x6c\157\x73\x65", "\x61\x72\151\x61\55\154\x61\x62\145\x6c" => __("\103\154\157\163\x65", PR__CMN__FOUNDATION), "\x64\x61\164\141\x2d\144\151\x73\x6d\151\163\x73" => "\x61\154\145\x72\x74"], $wkaqekwwgqsqwcoi);
        goto eocoacoiikkigoiu;
        cqmwkoscgigmawys:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\142\157\157\164\163\x74\162\141\160\137\141\154\x65\x72\164\x5f\x64\151\x73\155\151\163\163\137\x69\x63\157\156", IconFontawesomeInterface::ICON_XMARK);
        goto oeayowwwskuwywei;
        eocoacoiikkigoiu:
    }
}
