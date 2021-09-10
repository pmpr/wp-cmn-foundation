<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b499786a1b             |
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
        oaawymkyguukokoc:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\154\x61\x73\x73", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto soqmguugasswqwki;
        soqmguugasswqwki:
        return self::uuccukgasskgimsq("\144\151\166", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto aeokmsquaasumuuo;
        ogywamggekuoqaic:
        if (!$wygwqsssewkqooqm) {
            goto mymeomeemsgoeuck;
        }
        goto csagaieykqsoyyyo;
        owoiouaomwqgksqc:
        mymeomeemsgoeuck:
        goto oaawymkyguukokoc;
        csagaieykqsoyyyo:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto owoiouaomwqgksqc;
        aeokmsquaasumuuo:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\141\x6c\145\162\x74\x20\x61\x6c\145\x72\164\55{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\40\141\154\145\162\164\x2d\x64\151\163\155\151\x73\x73\151\142\x6c\145" : '') . "\40\x66\141\144\x65\x20\163\x68\157\167\x20\x6e\x6f\55\x6d\x61\162\147\151\156";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto cqmwkoscgigmawys;
        mkmgkgowgamqakqi:
        return self::uuccukgasskgimsq("\142\x75\164\x74\157\156", ["\164\171\x70\x65" => "\142\165\x74\164\157\x6e", "\143\x6c\x61\x73\163" => "\143\154\x6f\x73\145", "\x61\162\151\141\55\x6c\141\x62\145\154" => __("\103\154\157\163\145", PR__CMN__FOUNDATION), "\x64\x61\164\x61\55\144\x69\163\155\x69\x73\163" => "\x61\x6c\x65\162\164"], $wkaqekwwgqsqwcoi);
        goto eocoacoiikkigoiu;
        oeayowwwskuwywei:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\142\157\157\164\x73\164\x72\141\x70\137\141\154\x65\162\164\137\144\151\163\155\x69\163\163\137\x61\164\164\162\x73", ["\x63\x6c\x61\163\163" => "\151\x63\157\x6e\x2d\x67\x72\x61\171\55\66\60\60\x20\151\x63\x6f\x6e\x2d\x78\x73"], $wwgucssaecqekuek);
        goto ksasgwowcqqegcic;
        ksasgwowcqqegcic:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto mkmgkgowgamqakqi;
        cqmwkoscgigmawys:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\x62\157\x6f\164\163\164\162\x61\160\x5f\141\x6c\145\162\164\x5f\144\151\x73\155\151\x73\x73\x5f\151\x63\x6f\x6e", IconFontawesomeInterface::ICON_XMARK);
        goto oeayowwwskuwywei;
        eocoacoiikkigoiu:
    }
}
