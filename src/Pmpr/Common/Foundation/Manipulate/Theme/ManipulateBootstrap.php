<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b6c65a2d22             |
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
        goto csagaieykqsoyyyo;
        soqmguugasswqwki:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\163", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto aeokmsquaasumuuo;
        owoiouaomwqgksqc:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto oaawymkyguukokoc;
        oaawymkyguukokoc:
        ogywamggekuoqaic:
        goto soqmguugasswqwki;
        aeokmsquaasumuuo:
        return self::uuccukgasskgimsq("\x64\x69\166", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto cqmwkoscgigmawys;
        csagaieykqsoyyyo:
        if (!$wygwqsssewkqooqm) {
            goto ogywamggekuoqaic;
        }
        goto owoiouaomwqgksqc;
        cqmwkoscgigmawys:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\141\x6c\x65\x72\164\40\141\154\145\162\x74\x2d{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\40\141\154\145\162\164\55\144\x69\x73\155\x69\x73\163\x69\142\154\145" : '') . "\40\x66\141\144\145\40\x73\150\x6f\x77\40\x6e\x6f\55\155\141\162\x67\x69\x6e";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto oeayowwwskuwywei;
        mkmgkgowgamqakqi:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto eocoacoiikkigoiu;
        eocoacoiikkigoiu:
        return self::uuccukgasskgimsq("\x62\165\164\164\157\156", ["\x74\x79\160\x65" => "\142\x75\x74\x74\x6f\156", "\x63\x6c\141\x73\x73" => "\x63\154\x6f\163\x65", "\141\x72\151\141\x2d\x6c\x61\x62\145\x6c" => __("\103\154\157\163\145", PR__CMN__FOUNDATION), "\x64\141\164\141\x2d\x64\x69\163\x6d\151\x73\x73" => "\141\x6c\x65\x72\164"], $wkaqekwwgqsqwcoi);
        goto aeueicccggqwcawc;
        ksasgwowcqqegcic:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x62\x6f\x6f\x74\x73\x74\x72\x61\x70\x5f\141\x6c\145\162\x74\137\x64\x69\x73\155\151\x73\163\137\x61\164\164\162\163", ["\143\154\141\x73\163" => "\x69\x63\157\x6e\x2d\x67\x72\x61\x79\55\x36\x30\60\x20\x69\x63\x6f\x6e\55\x78\x73"], $wwgucssaecqekuek);
        goto mkmgkgowgamqakqi;
        oeayowwwskuwywei:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\142\x6f\x6f\164\163\x74\x72\x61\x70\137\x61\154\145\x72\164\137\x64\151\x73\155\x69\x73\x73\137\151\143\157\x6e", IconFontawesomeInterface::ICON_XMARK);
        goto ksasgwowcqqegcic;
        aeueicccggqwcawc:
    }
}
