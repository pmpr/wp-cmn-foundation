<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b30261f503             |
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
        goto iyswqyqmiwwiaqga;
        gcwikqkyswgkiecg:
        return self::uuccukgasskgimsq("\144\x69\166", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto memeaeocikosokoe;
        myekqmoeyaaqikyg:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto aoyymeeaucqwsioc;
        iyswqyqmiwwiaqga:
        if (!$wygwqsssewkqooqm) {
            goto osgigagqyqicacag;
        }
        goto myekqmoeyaaqikyg;
        aoyymeeaucqwsioc:
        osgigagqyqicacag:
        goto swqugakyysygkaky;
        swqugakyysygkaky:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\143\x6c\x61\163\x73", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto gcwikqkyswgkiecg;
        memeaeocikosokoe:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\141\154\x65\162\164\x20\x61\154\145\162\x74\55{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\40\x61\x6c\145\162\x74\x2d\144\x69\x73\155\151\163\163\x69\x62\154\145" : '') . "\40\x66\x61\x64\145\40\163\150\157\167\40\156\157\55\x6d\141\162\147\x69\x6e";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto aiiiquiauigsmgaa;
        eeagqwuqkoeacgoe:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x62\x6f\157\164\x73\x74\x72\141\x70\137\x61\154\145\x72\164\x5f\x64\x69\163\155\x69\163\x73\137\x61\164\164\x72\163", ["\x63\154\x61\163\x73" => "\x69\x63\x6f\x6e\55\x67\162\141\x79\x2d\x36\60\60\40\151\143\x6f\156\55\170\163"], $wwgucssaecqekuek);
        goto ekwkmeycsemqiyek;
        wokawocgyeymmgmi:
        return self::uuccukgasskgimsq("\x62\165\x74\164\x6f\156", ["\x74\171\160\145" => "\x62\165\x74\164\157\x6e", "\143\x6c\141\x73\x73" => "\x63\154\x6f\163\145", "\141\x72\x69\x61\55\154\x61\142\x65\x6c" => __("\103\x6c\x6f\163\x65", PR__CMN__FOUNDATION), "\x64\141\x74\x61\x2d\144\151\x73\155\151\163\163" => "\141\x6c\145\x72\x74"], $wkaqekwwgqsqwcoi);
        goto ekyuaoiyikemcmam;
        aiiiquiauigsmgaa:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\142\157\x6f\x74\x73\164\x72\141\160\137\x61\154\145\162\x74\137\x64\151\163\155\x69\163\163\137\x69\143\157\x6e", IconFontawesomeInterface::ICON_XMARK);
        goto eeagqwuqkoeacgoe;
        ekwkmeycsemqiyek:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto wokawocgyeymmgmi;
        ekyuaoiyikemcmam:
    }
}
