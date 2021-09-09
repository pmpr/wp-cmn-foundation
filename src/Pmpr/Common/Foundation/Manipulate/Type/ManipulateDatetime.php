<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             613a1be32d755             |
    |_______________________________________|
*/

namespace Pmpr\Common\Foundation\Manipulate\Type;

use Pmpr\Common\Foundation\Decorator\DecoratorHook;
use Pmpr\Common\Foundation\Manipulate\ManipulateSetting;

class ManipulateDatetime extends Common
{
    
    public static function wguceomqgwouoyks($ocogsiouoiuuguym) : bool
    {
        return strtotime($ocogsiouoiuuguym) < time();
    }
    
    public static function ikuqieqosemkwuio($cqgoimumaewouews)
    {
        goto oomiawgcsyaaqaao;
        eymiaowquwyiggie:
        goto ecuosiaqyaoqckao;
        goto kgkameuwwcmaawwg;
        qiqmamemmguaieiw:
        if ($cqgoimumaewouews && $asuaciiookaciacq > 0 && $asuaciiookaciacq < DAY_IN_SECONDS) {
            goto skoaowmysckmmocc;
        }
        goto owauaaeeaeoqgiii;
        kamkksumiggskuay:
        ecuosiaqyaoqckao:
        goto iwqasgooqqmcyqmy;
        ssooqmscuqwmcoeu:
        $sieoyimycoskwwku = sprintf(__("\x25\163\40\141\147\x6f"), human_time_diff($cqgoimumaewouews));
        goto kamkksumiggskuay;
        wokmesqciaaskwoe:
        $asuaciiookaciacq = (int) abs(time() - $cqgoimumaewouews);
        goto qiqmamemmguaieiw;
        iwqasgooqqmcyqmy:
        return DecoratorHook::sscegwueamckwmcy("\x74\x69\x6d\145\x5f\141\x67\x6f", $sieoyimycoskwwku, $cqgoimumaewouews);
        goto keuikgoukmwokcoa;
        kgkameuwwcmaawwg:
        skoaowmysckmmocc:
        goto ssooqmscuqwmcoeu;
        oomiawgcsyaaqaao:
        $cqgoimumaewouews = strtotime($cqgoimumaewouews);
        goto wokmesqciaaskwoe;
        owauaaeeaeoqgiii:
        $sieoyimycoskwwku = DecoratorHook::sscegwueamckwmcy("\x64\x61\164\145\137\164\x69\155\145\137\x61\147\x6f", date("\131\x2d\x6d\55\144\40\x48\72\151", $cqgoimumaewouews), ManipulateSetting::uyomwmskouyyqyyq());
        goto eymiaowquwyiggie;
        keuikgoukmwokcoa:
    }
    
    public static function awesicwkasgqwwuo($ggkaciewmeqmgckg, $qmeuaeiseuacgiqc, $ocogsiouoiuuguym = "\156\157\167") : bool
    {
        goto yqccqmsucoukqkmw;
        kgecwaiwqeacyqge:
        
        return $ggkaciewmeqmgckg <= $gioggcykgoikcwiy && $gioggcykgoikcwiy <= $qmeuaeiseuacgiqc;
        goto wsasggmqwyisgoiq;
        qwykccyeiymiomyi:
        $qmeuaeiseuacgiqc = strtotime($qmeuaeiseuacgiqc);
        goto asmkyaumussymycs;
        yqccqmsucoukqkmw:
        $ggkaciewmeqmgckg = strtotime($ggkaciewmeqmgckg);
        goto qwykccyeiymiomyi;
        asmkyaumussymycs:
        $gioggcykgoikcwiy = strtotime($ocogsiouoiuuguym);
        goto kgecwaiwqeacyqge;
        wsasggmqwyisgoiq:
    }
}
