<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613b2e4befc8c             |
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
        iyswqyqmiwwiaqga:
        if (!$wygwqsssewkqooqm) {
            goto osgigagqyqicacag;
        }
        goto myekqmoeyaaqikyg;
        aoyymeeaucqwsioc:
        osgigagqyqicacag:
        goto swqugakyysygkaky;
        gcwikqkyswgkiecg:
        return self::uuccukgasskgimsq("\x64\x69\x76", $wwgucssaecqekuek, $uamcoiueqaamsqma);
        goto memeaeocikosokoe;
        myekqmoeyaaqikyg:
        $uamcoiueqaamsqma .= self::kmikoaiqoaqugooq($wwgucssaecqekuek);
        goto aoyymeeaucqwsioc;
        swqugakyysygkaky:
        $wwgucssaecqekuek = self::igmaewykumgwoaoy($wwgucssaecqekuek, "\x63\x6c\141\x73\x73", self::aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm));
        goto gcwikqkyswgkiecg;
        memeaeocikosokoe:
    }
    
    public static function aweogkawsmyciike($iqaosyayeiuaisqi, $wygwqsssewkqooqm = false) : string
    {
        return "\141\x6c\x65\x72\164\x20\x61\154\145\x72\164\55{$iqaosyayeiuaisqi}" . ($wygwqsssewkqooqm ? "\40\141\x6c\145\162\x74\55\x64\x69\163\x6d\x69\x73\163\x69\142\154\145" : '') . "\x20\x66\x61\x64\x65\x20\x73\150\157\167\40\156\x6f\55\x6d\141\162\147\x69\156";
    }
    
    public static function kmikoaiqoaqugooq($wwgucssaecqekuek = []) : string
    {
        goto aiiiquiauigsmgaa;
        ekwkmeycsemqiyek:
        $wkaqekwwgqsqwcoi = self::cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, true, true);
        goto wokawocgyeymmgmi;
        aiiiquiauigsmgaa:
        $wkaqekwwgqsqwcoi = DecoratorHook::sscegwueamckwmcy("\x62\157\157\164\163\x74\162\141\x70\x5f\x61\154\x65\x72\x74\137\x64\x69\163\x6d\x69\x73\x73\137\151\x63\x6f\156", IconFontawesomeInterface::ICON_XMARK);
        goto eeagqwuqkoeacgoe;
        wokawocgyeymmgmi:
        return self::uuccukgasskgimsq("\x62\x75\x74\x74\x6f\x6e", ["\164\x79\x70\x65" => "\x62\165\x74\164\x6f\156", "\143\154\141\x73\x73" => "\x63\154\157\163\x65", "\141\x72\151\141\x2d\154\141\142\x65\154" => __("\x43\x6c\x6f\x73\x65", PR__CMN__FOUNDATION), "\x64\x61\164\141\x2d\144\x69\x73\155\151\163\x73" => "\x61\x6c\x65\162\x74"], $wkaqekwwgqsqwcoi);
        goto ekyuaoiyikemcmam;
        eeagqwuqkoeacgoe:
        $wwgucssaecqekuek = DecoratorHook::sscegwueamckwmcy("\x62\157\x6f\x74\x73\x74\162\x61\x70\137\141\x6c\145\x72\x74\x5f\x64\151\x73\155\x69\163\163\137\x61\x74\164\x72\163", ["\x63\x6c\x61\x73\163" => "\x69\x63\157\x6e\x2d\147\x72\x61\x79\x2d\66\60\x30\40\x69\x63\157\x6e\55\170\163"], $wwgucssaecqekuek);
        goto ekwkmeycsemqiyek;
        ekyuaoiyikemcmam:
    }
}
